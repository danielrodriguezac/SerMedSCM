<?php

class Model_Consulta extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'id_empleado',
		'id_usuario',
		'edad',
		'departamento',
		'motivo_consulta',
		'tipo_consulta',
		'consulta_especial',
		'ce_id',
		'diagnostico',
		'sistema',
		'enfermedad_ocupacional',
		'accidente_trabajo',
		'at_tipo',
		'at_descripcion',
		'evolucion',
		'tratamiento_medico',
		'tm_id',
		'referencia_medica',
		'rm_id',
		'reposo',
		'r_id',
		'estudios_especiales',
		'ee_id',
		'solicitud_examenes_laboratorio',
		'sel_id',
		'created_at',
		'updated_at'
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
}
