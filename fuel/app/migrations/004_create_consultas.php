<?php

namespace Fuel\Migrations;

class Create_consultas
{
	public function up()
	{
		\DBUtil::create_table('consultas', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'id_empleado' => array('constraint' => 11, 'type' => 'int'),
			'id_usuario' => array('constraint' => 11, 'type' => 'int'),
			'edad' => array('constraint' => 11, 'type' => 'int'),
			'departamento' => array('constraint' => 11, 'type' => 'int'),
			'motivo_consulta' => array('type' => 'text'),
			'tipo_consulta' => array('constraint' => 1, 'type' => 'char'),
			'consulta_especial' => array('constraint' => 3, 'type' => 'int'),
			'ce_id' => array('constraint' => 11, 'type' => 'int'),
			'diagnostico' => array('constraint' => 11, 'type' => 'int'),
			'sistema' => array('constraint' => 11, 'type' => 'int'),
			'enfermedad_ocupacional' => array('constraint' => 3, 'type' => 'int'),
			'accidente_trabajo' => array('constraint' => 3, 'type' => 'int'),
			'at_tipo' => array('constraint' => 25, 'type' => 'varchar'),
			'at_descripcion' => array('type' => 'text'),
			'evolucion' => array('type' => 'text'),
			'tratamiento_medico' => array('constraint' => 3, 'type' => 'int'),
			'tm_id' => array('constraint' => 11, 'type' => 'int'),
			'referencia_medica' => array('constraint' => 3, 'type' => 'int'),
			'rm_id' => array('constraint' => 11, 'type' => 'int'),
			'reposo' => array('constraint' => 3, 'type' => 'int'),
			'r_id' => array('constraint' => 11, 'type' => 'int'),
			'estudios_especiales' => array('constraint' => 3, 'type' => 'int'),
			'ee_id' => array('constraint' => 11, 'type' => 'int'),
			'solicitud_examenes_laboratorio' => array('constraint' => 3, 'type' => 'int'),
			'sel_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('consultas');
	}
}