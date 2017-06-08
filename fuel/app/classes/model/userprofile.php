<?php
use Orm\Model;

class Model_Userprofile extends Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'street',
		'city',
		'postal_code',
		'zip_code',
		'state',
		'country',
		'paypal_email',
		'profile_picture',
		'cover_photo',
		'education',
		'experience',
		'skills',
		'background',
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

}
