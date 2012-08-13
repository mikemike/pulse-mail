<?php
use Orm\Model;

class Model_Email extends Model
{
	protected static $_properties = array(
		'id',
		'template_id',
		'send_began',
		'send_end',
		'subject',
		'body',
		'success',
		'fails',
		'bounces',
		'unsubscribes',
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
		$val->add_field('template_id', 'Template Id', 'required|valid_string[numeric]');
		$val->add_field('send_began', 'Send Began', 'required');
		$val->add_field('send_end', 'Send End', 'required');
		$val->add_field('subject', 'Subject', 'required|max_length[255]');
		$val->add_field('body', 'Body', 'required');
		$val->add_field('success', 'Success', 'required|valid_string[numeric]');
		$val->add_field('fails', 'Fails', 'required|valid_string[numeric]');
		$val->add_field('bounces', 'Bounces', 'required|valid_string[numeric]');
		$val->add_field('unsubscribes', 'Unsubscribes', 'required|valid_string[numeric]');

		return $val;
	}

}
