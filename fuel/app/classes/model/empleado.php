<?php

class Model_Empleado extends \Orm\Model
{
        static protected $_table_name = 'empleados';
	protected static $_properties = array(
		'id',
		'ci' => array(
                    'data_type' => 'int',
                    'label' => 'C.I.',
                    'form' => array('type' => 'text', 'placeholder' => 'ej. 7096455', 'required' => 'required'),
                    'validation' => array('required'),
                    'default' => '',
                ),
		'nacionalidad' => array(
                    'data_type' => 'int',
                    'label' => 'Nacionalidad',
                    'form' => array('type' => 'select', 'options' => array('0' => 'V', '1' => 'E'), 'required' => 'required'),
                    'validation' => array('required'),
                ),
		'nombres' => array(
                    'data_type' => 'varchar',
                    'label' => 'Nombres',
                    'form' => array('type' => 'text', 'placeholder' => '', 'required' => 'required'),
                    'validation' => array('required'),
                    'default' => '',
                ),
		'apellidos' => array(
                    'data_type' => 'varchar',
                    'label' => 'Apellidos',
                    'form' => array('type' => 'text', 'placeholder' => '', 'required' => 'required'),
                    'validation' => array('required'),
                    'default' => '',
                ),
		'genero' => array(
                    'data_type' => 'int',
                    'label' => 'Género',
                    'validation' => array('required'),
                    'form' => array('type' => 'select', 'options' => array('' => 'Seleccione', 0 => 'Femenino', 1 => 'Masculino'), 'required' => 'required'),
                    'default' => '',
                ),
		'estado_civil' => array(
                    'data_type' => 'int',
                    'label' => 'Estado civil',
                    'form' => array('type' => 'select', 'options' => array(0 => 'Soltero/a', 1 => 'Casado/a', 2 => 'Divorciado/a', 3 => 'Viudo/a'), 'required' => 'required'),
                    'validation' => array('required'),
                ),
		'fecha_nacimiento' => array(
                    'data_type' => 'int',
                    'label' => 'Fecha de nacimiento',
                    'form' => array('id' => 'datepicker', 'type' => 'text', 'placeholder' => '', 'required' => 'required'),
                    'validation' => array(
                        'required|',
                        'match_pattern' => array(
                            '[/((?:(?:[1]{1}\\d{1}\\d{1}\\d{1})|(?:[2]{1}\\d{3}))[-:\\/.](?:[0]?[1-9]|[1][012])[-:\\/.](?:(?:[0-2]?\\d{1})|(?:[3][01]{1})))(?![\\d])(?!.)/is]'
                        ),
                    ),
                    'default' => '',
                ),
		'lugar_nacimiento' => array(
                    'data_type' => 'varchar',
                    'label' => 'Lugar de nacimiento',
                    'validation' => array('required'),
                    'form' => array('type' => 'text', 'placeholder' => 'ej. Maracay, Edo. Aragua', 'required' => 'required'),
                    'default' => '',
                ),
		'direccion' => array(
                    'data_type' => 'varchar',
                    'label' => 'Direccion',
                    'validation' => array('required'),
                    'form' => array('type' => 'textarea', 'placeholder' => 'Ciudad, Urb./Sector, Calle, Nº Casa/Piso', 'required' => 'required'),
                    'default' => '',
                ),
		'estado_contratacion' => array(
                    'data_type' => 'varchar',
                    'label' => 'Estado de contratacion',
                    'form' => array('type' => 'select', 'options' => array('0' => 'Pre-empleo', '1' => 'Empleado', '2' => 'Vacaciones', '3' => 'Egreso', '4' => 'Contratista', 'required' => 'required')),
                    'validation' => array('required'),
                ),
		'id_usuario' => array(
                    'data_type' => 'int',
                    'label' => 'Usuario creador',
                    'form' => array(
                        'type' => false,
                    ),
                ),
                'fecha_ingreso' => array(
                    'data_type' => 'int',
                    'label' => 'Fecha de nacimiento',
                    'form' => array('id' => 'datepicker', 'type' => 'text', 'placeholder' => '', 'required' => 'required'),
                    'validation' => array(
                        'required|',
                        'match_pattern' => array(
                            '[/((?:(?:[1]{1}\\d{1}\\d{1}\\d{1})|(?:[2]{1}\\d{3}))[-:\\/.](?:[0]?[1-9]|[1][012])[-:\\/.](?:(?:[0-2]?\\d{1})|(?:[3][01]{1})))(?![\\d])(?!.)/is]'
                        ),
                    ),
                    'default' => '',
                ),
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
