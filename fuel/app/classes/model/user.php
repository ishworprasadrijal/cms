<?php
use Orm\Model;

class Model_User extends Model
{
	protected static $_properties = array(
		'id',
		'username',
		'first_name',
		'middle_name',
		'last_name',
		'gender',
		'password',
		'group',
		'email',
		'last_login',
		'login_hash',
		'profile_fields',
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

	protected static $_has_one = array(
	    'profile' => array(
	        'key_from' => 'id',
	        'model_to' => 'Model_Userprofile',
	        'key_to' => 'user_id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    )
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'Username', 'required|max_length[50]');
		// $val->add_field('first_name', 'First Name', 'required|max_length[50]');
		$val->add_field('gender', 'Gender', 'required');
		$val->add_field('password', 'Password', 'required|max_length[255]');
		$val->add_field('confirm_password', 'Confirm Password', 'required|match_field[password]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');

		return $val;
	}

}
