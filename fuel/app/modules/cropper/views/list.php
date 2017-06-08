  <div class="gallery-page">
  	<div class="gallery-grid">
  	<div class="row">
       <?php $ppg_id =0; if(isset($galleries) && count($galleries)>0){
        foreach($galleries as $gallery): ?>
       		<?php if($ppg_id==0) $ppg_id = $gallery->id; /* to go previous page */?> 
			<div class="panel panel-info ic pull-left" data-directory="<?=$gallery->directory;?>" data-title="<?=$gallery->title;?>" data-id="<?=$gallery->id;?>">
				<label class="copy_clip btn-success btn btn-xs" data-txt="anchor"> Apply Card</label>
				<label class="delete_media btn-danger btn btn-xs" data-txt="anchor" data-id="<?=$gallery->id;?>"> Delete</label>
				<div style="margin: 3px;">
					<!-- <img src="<?=$gallery->getImage('thumbnail_');?>"> -->
                    <img src="<?=Uri::create('/').$gallery->directory.DS.'thumbnail_'.$gallery->title;?>">
				</div>
			</div>
		<?php $npg_id = $gallery->id; /*for next page */ endforeach;  ?>
		<?php }else{
			echo "<div class='alert alert-danger'>No Galleries</div>";
			}?>
      </div>
      <hr>
		<div class="footer">
	      	<span class="btn btn-default pull-right npg_js" data-last_id="<?=isset($npg_id)?$npg_id:0;?>" data-preset="<?=isset($preset)?$preset:'';?>">Next </span>
	    </div>
   </div>
	    <hr>
		<label for="file_uploader" class="btn btn-success" data-preset="banner">
			<input type="file" id="file_uploader" class="new_crop_js" data-preset="<?=isset($preset)?$preset:''?>" style="display: none;"/>
			Upload
		</label>
  	<input type="text" class='form-control' id="url" style="opacity: 0;">
</div>
<script>
	$(document).on('click','.copy_clip',function(){
		
	})
</script>