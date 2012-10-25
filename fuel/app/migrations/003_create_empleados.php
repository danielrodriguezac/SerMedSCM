<?php

namespace Fuel\Migrations;

class Create_empleados
{
	public function up()
	{
		\DBUtil::create_table('empleados', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'ci' => array('constraint' => 25, 'type' => 'int', 'unique' => true),
			'nacionalidad' => array('constraint' => 3, 'type' => 'int'),
			'nombres' => array('constraint' => 255, 'type' => 'varchar'),
			'apellidos' => array('constraint' => 255, 'type' => 'varchar'),
			'genero' => array('constraint' => 3, 'type' => 'int'),
			'estado_civil' => array('constraint' => 3, 'type' => 'int'),
			'fecha_nacimiento' => array('constraint' => 25, 'type' => 'int'),
			'lugar_nacimiento' => array('constraint' => 100, 'type' => 'varchar'),
			'direccion' => array('type' => 'text'),
			'estado_contratacion' => array('constraint' => 3, 'type' => 'int'),
			'id_usuario' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('empleados');
	}
}