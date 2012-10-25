<?php

namespace Fuel\Migrations;

class Create_sesiones
{
	public function up()
	{
		\DBUtil::create_table('sesiones', array(
			'session_id' => array('constraint' => 40, 'type' => 'varchar'),
			'previous_id' => array('constraint' => 40, 'type' => 'varchar'),
			'user_agent' => array('type' => 'text'),
			'ip_hash' => array('constraint' => 32, 'type' => 'char'),
			'created' => array('constraint' => 25, 'type' => 'int'),
			'updated' => array('constraint' => 25, 'type' => 'int'),
			'payload' => array('type' => 'text'),

		), array('session_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sesiones');
	}
}