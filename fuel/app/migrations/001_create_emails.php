<?php

namespace Fuel\Migrations;

class Create_emails
{
	public function up()
	{
		\DBUtil::create_table('emails', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'template_id' => array('constraint' => 11, 'type' => 'int'),
			'send_began' => array('type' => 'timestamp'),
			'send_end' => array('type' => 'timestamp'),
			'subject' => array('constraint' => 255, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'success' => array('constraint' => 11, 'type' => 'int'),
			'fails' => array('constraint' => 11, 'type' => 'int'),
			'bounces' => array('constraint' => 11, 'type' => 'int'),
			'unsubscribes' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('emails');
	}
}