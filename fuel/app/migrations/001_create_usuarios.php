<?php

namespace Fuel\Migrations;

class Create_usuarios
{
	public function up()
	{
		\DBUtil::create_table('usuarios', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar', 'unique' => true),
			'password' => array('constraint' => 255, 'type' => 'varchar'),
			'group' => array('constraint' => 25, 'type' => 'int'),
			'email' => array('constraint' => 255, 'type' => 'varchar', 'unique' => true),
			'last_login' => array('constraint' => 25, 'type' => 'int'),
			'login_hash' => array('constraint' => 255, 'type' => 'varchar'),
			'profile_fields' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('usuarios');
	}
}