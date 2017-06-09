<?php
use Orm\Model;

class Model_Action extends Model
{
	protected static $_properties = array(
		'id',
		'action',
		'title',
		'description',
		'icon',
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

	protected static $_has_many = array(
	    'notifications' => array(
	        'key_from' => 'id',
	        'model_to' => 'Model_Notification',
	        'key_to' => 'action_id',
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

}
