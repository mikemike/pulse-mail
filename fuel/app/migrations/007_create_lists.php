<?php

namespace Fuel\Migrations;

class Create_lists
{
	public function up()
	{
		\DBUtil::create_table('lists', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'list_id' => array('constraint' => 11, 'type' => 'int'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'list_name' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('lists');
	}
}