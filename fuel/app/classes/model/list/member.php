<?php
use Orm\Model;

class Model_List_Member extends Model
{
	protected static $_properties = array(
		'id',
		'member_id',
		'list_id',
		'email',
		'first_name',
		'last_name',
		'company',
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

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('member_id', 'Member Id', 'required|valid_string[numeric]');
		$val->add_field('list_id', 'List Id', 'required|valid_string[numeric]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('first_name', 'First Name', 'required|max_length[255]');
		$val->add_field('last_name', 'Last Name', 'required|max_length[255]');
		$val->add_field('company', 'Company', 'required|max_length[255]');

		return $val;
	}

}
