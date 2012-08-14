<?php

namespace Fuel\Migrations;

class Create_email_logs
{
	public function up()
	{
		\DBUtil::create_table('email_logs', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'email_log_id' => array('constraint' => 11, 'type' => 'int'),
			'email_id' => array('constraint' => 11, 'type' => 'int'),
			'notes' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('email_logs');
	}
}