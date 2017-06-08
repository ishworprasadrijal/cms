<?php
namespace Cropper;
// \Config::load('image');
class Controller_Cropper extends \Controller{
	
	public $template = 'template';

	public $auto_render = true;

	public static function action_index($preset='default',$module_id=null,$field="Browse"){
		$data['reqId'] 				= $id = rand(0000,9999);
		$data['btnId'] 				= 'uploader_'.$id;
		$data['module_id'] 			= $module_id;
		$data['preset'] 			= $preset;
		$data['field'] 				= $field;
		$data['oldfile'] 			= self::action_getImage($module_id);
		$data['url'] 				= \Uri::create('cropper/upload');
		$data['settings']			=	$settings = \Config::get('cropper')['type'][$preset];
		$data['width'] 				= 	$settings['size'][0];
		$data['height'] 			= 	$settings['size'][1];

		$path = DOCROOT.$settings['directory'];
		//check if upload directory exists:
		if(!file_exists($path)){
			try{
				\File::create_dir($path, 0777,true);
			}catch(exception $e){
				$data['message'] =$e->getMessage().' && '.$path.' : Not Writable ! ';
			}
		}else{
			$data['message'] ='Path : '.$path.'. ';
		}


		return \View::forge('form',$data);
	}

	/* called by ajax of re_crop function */
	public static function action_getSettings($module_name='default'){
		$presets = \Config::get('cropper')['type'][$module_name];
		if( \Input::is_ajax()){
			return \Format::forge($presets)->to_json();
		}else{
			return $presets;
		}
	}

	public static function action_getSetting($module_name='default'){
		$presets = \Config::get('cropper')['type'][$module_name];
		return $presets;
	}

	public static function action_getNames($module_name='default',$params=array()){
		$settings = self::action_getSetting($module_name);
		$naming ='';
		foreach($settings['naming'] as $i=>$name){
			if($name=='timestamp'){
				$naming .= time(date("Y-m-d-H-i-s"));
			}elseif($name=='id'){
				$naming .= $params['id'];
			}elseif($name=='size'){
				$naming .='-'.$settings['size'][0].'X'.$settings['size'][1];
			}else{
				$naming .= $name;
			}
		}//endforeach
		return $naming;
	}

    public static function action_upload(){
		$id 		= \Input::Post("id");
		$preset 	= (\Input::Post("preset")=='')?'default':\Input::Post("preset");
		list($ext, $data) 	= explode(';', \Input::Post("ftype"));
		$settings 	= self::action_getSetting($preset);
		$directory 	= $settings['directory'];
		$path 		= 	DOCROOT . $directory;
        $timestamp  =   strtotime(date("Y-m-d H:i:s"));

        $parameters = array('id'=>$id,'timestamp'=>$timestamp);
        $name 		= self::action_getNames($preset,$parameters);
        $filename 		= $name.'.'.$ext;
        $full_filename 	= $path.DS.$filename;

        	/* if id exists, remove the previous file */
        	$upload = Model_Cropper::find($id);
       		if($upload){
       			\File::delete($path.DS.$upload->title);
       			$upload->title=$filename;
       			$upload->save();
       		}else{
				$upload = Model_Cropper::forge();
	        	$upload->module_id 	= $id;
	        	$upload->module_name= $preset;
	        	$upload->title 		= $filename;
	        	$upload->type  		= "data:image/jpeg";
	        	$upload->status  	= 1;
	        	$upload->directory 	= $directory;
	        	$upload->extension 	= '.'.$ext;
	        	$upload->save();
       		}

	        $response['filename'] 		=$filename;
	        $response['full_filename'] 	=$full_filename;
	        $response['path'] 			= $path;
	        $response['upload_id'] 		= $upload->id;
	        $response['url'] 			= \Uri::create($directory.DS.$filename);
	        // Model_Rackspace::deleteObject($path. $oldfile);
	        $response['status'] ="success";

        return \Format::forge($response)->to_json();
	}

	public static function action_moreProcessing(){
		$id = \Input::Post('id');
		$path = \Input::Post('path');
		$image = \Input::Post('image');
		$upload = Model_Cropper::find($id);
		

		list($type, $data) 	= explode(';', $image);
        list(, $data)      	= explode(',', $data);
        list(, $ext)      	= explode(':', $type);
        list(, $extension)      	= explode('/', $ext);
        $data 				= base64_decode($data);


		if($upload){
			$settings 	= self::action_getSetting($upload->module_name);
			if($settings['ps']!='default'){
				$width = $settings['size'][0];
		       	$height = $settings['size'][1];
			       	if(!file_exists(DOCROOT.DS.$settings['directory'])){
						\File::create_dir(DOCROOT.DS.$settings['directory'], 0777);
					}
					if(file_put_contents(DOCROOT.DS.$settings['directory'].DS.$upload->title, $data)){
			   			$full_filename = $path.DS.$upload->title;
			    		\Image::load($full_filename, false,'.'.$extension)->config('quality', 100)->crop_resize($width,$height)->save($full_filename);
			   			if(isset($settings['thumbnail'])){
			   				$thumbnail = $path.DS.'thumbnail_'.$upload->title; 
			   				/* thumbnail directory not needed */
							// if(!is_dir($path.DS.'thumbnails')) mkdir($path.DS.'thumbnails', 0777);
				    		\Image::load($full_filename, false,'.'.$extension)->config('quality', 100)->crop_resize(120,80)->save($thumbnail);
				    		self::action_storeToCloud($thumbnail,'thumbnail_'.$upload->title,'assets/media/galleries/',0);
			   			}
				    	self::action_storeToCloud($full_filename,$upload->title,'assets/media/galleries/',1);
					}
			}else{
				if(!file_exists(DOCROOT.DS.$settings['directory'])){
						\File::create_dir(DOCROOT.DS.$settings['directory'], 0777);
					}
					if(file_put_contents(DOCROOT.DS.$settings['directory'].$upload->title, $data)){
			   			$full_filename = $settings['directory'].$upload->title;
				    	if(isset($settings['thumbnail'])){
			   				$thumbnail = $settings['directory'].DS.'thumbnail_'.$upload->title; 
				    		\Image::load($full_filename, false,'.'.$extension)->config('quality', 100)->crop_resize(120,80)->save($thumbnail);
				    		self::action_storeToCloud($thumbnail,'thumbnail_'.$upload->title,'assets/media/',0);
			   			}

				}

			}

		}
	}

	public static function action_list($preset='default'){
		$query = Model_Cropper::query();
		if($preset){
			$query->where('module_name','=',$preset);
		}
		$data['galleries'] = $query->limit(14)->order_by('created_at','desc')->get();
		$data['preset']=$preset;
		$view = \View::forge('list',$data);
		return $view;
	}

	public static function action_next($id=0){
		$preset = (\Input::Post('preset')=='')?'default':\Input::Post('preset');
		$query = Model_Cropper::query()
			->where('module_name','=',$preset);
		if($id!=0) $query->where('id','<',$id);
			$data['galleries'] = $query->limit(14)->order_by('created_at','desc')->get();
		$data['preset']=$preset;
		$view = \View::forge('response',$data);
		return $view;
	}

	public static function action_previous($id=0){
		$preset = (\Input::Post('preset')=='')?'default':\Input::Post('preset');
		$query = Model_Cropper::query()->where('module_name','=',$preset);
		if($id!=0) $query->where('id','>',$id);
		$data['galleries'] = $query->limit(14)->order_by('created_at','desc')->get();
		$data['preset']=$preset;
		$view = \View::forge('response',$data);
		return $view;
	}

	public static function action_storeToCloud($full_filename,$filename,$directory,$delete=0){
		if(\config::get('live') >= 1){
            \Model_Rackspace::uploadObject($full_filename, $directory.DS.$filename);
	        if($delete===1){
	            unlink($full_filename);    
	        }
        }
	}

	public static function action_preview($id=null){
		$id = \Input::Post('id');
		$data['croppedImage'] = \Input::Post('img');
		$data['gallery']=Model_Cropper::find($id);
		$view = \View::forge('preview',$data);
		return $view;
	}

	public static function action_delete(){
		$id = \Input::Post('id');
		$gallery = Model_Cropper::find($id);
		$gallery->delete();
		if(\config::get('live') >= 1){
            \Model_Rackspace::deleteObject($gallery->directory.DS.$gallery->title);
            \Model_Rackspace::deleteObject($gallery->directory.DS.'thumbnail_'.$gallery->title);
        }
        unlink($gallery->directory.DS.$gallery->title);    
        unlink($gallery->directory.DS.'thumbnail_'.$gallery->title);
        $data['status']='success';
        $data['message']='Successfully Removed';
        return \Format::forge($data)->to_json();
	}

	public static function action_get_image($filename=null,$id=null){
		if($id && $filename) $gallery = Model_Cropper::find($id);
		if($gallery){
			$data['name'] = $filename;
	        $path = \Model_Rackspace::getObjectBasePath($gallery->directory.DS.$filename);
	        $data['path'] = $path;
	        $data['folder'] = $gallery->directory.DS.$filename;
	        if ($filename) {
	            $data['mimi'] = Model_Cropper::get_mime_type($filename);
	        }
	        /*$indlogo = Model_Broking_Proposal::getIndustryLogo($proposal_id);
	        $data['path_angel'] = Model_Rackspace::getObjectBasePath('assets/img/industry/' . $indlogo);
	        $data['name_angel'] = $indlogo;
	        $data['mimi_angel'] = 'png';*/
	        return \View::forge('documentViewer', $data, false);
		}
	}
}