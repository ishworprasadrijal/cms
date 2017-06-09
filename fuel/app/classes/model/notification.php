<?php
use Orm\Model;

class Model_Notification extends Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'action_id',
		'parameters',
		'status',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_belongs_to = array(
	    'user' => array(
	        'key_from' => 'user_id',
	        'model_to' => 'Model_User',
	        'key_to' => 'id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    ),
	    'action' => array(
	        'key_from' => 'action_id',
	        'model_to' => 'Model_Action',
	        'key_to' => 'id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    ),
	    
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('action', 'Action', 'required|max_length[255]');
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required');
		$val->add_field('icon', 'Icon', 'required|max_length[255]');
		$val->add_field('status', 'Status', 'required|valid_string[numeric]');

		return $val;
	}

	/* Account Created => 1 */
	public static function notify($action_id,$user_id){
		$user = Model_User::find($user_id);
		$action = Model_Action::find($action_id);
		$parameters = serialize(array(
			'userName'=>$user->full_name(),
			'profileLink'=>Uri::Create('profile/'.$user_id),
			'created_at'=>time(),
			));
		$notification = self::forge(array(
				'user_id' => $user_id,
				'action_id' => $action_id,
				'parameters' => $parameters,
			))->save();
	}

	public function printable(){
		$notification = self::find($this->id);
		$message="";
		$parameters= (object) unserialize($notification->parameters);
		foreach($parameters as $key=>$param){
			$message .=str_replace("{{key-".$key."-key}}",$param,$notification->action->description);
		}
		return $message;
	}

}
