<?php

namespace Fuel\Migrations;

class Create_email_attachments
{
	public function up()
	{
		\DBUtil::create_table('email_attachments', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'email_attachment_id' => array('constraint' => 11, 'type' => 'int'),
			'email_id' => array('constraint' => 11, 'type' => 'int'),
			'file_src' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('email_attachments');
	}
}