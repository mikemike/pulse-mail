<?php

namespace Fuel\Migrations;

class Create_email_bounces
{
	public function up()
	{
		\DBUtil::create_table('email_bounces', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'bounce_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('email_bounces');
	}
}