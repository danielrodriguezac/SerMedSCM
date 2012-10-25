<?php
//class Model_Employees extends Orm\Model
//{
//    static protected $_table_name = 'empleados';
//    protected static $_primary_key = array('id');
//    protected static $_properties = array(
//        'id', // both validation & typing observers will ignore the PK
//        'ci' => array(
//            'data_type' => 'int',
//            'label' => 'C.I.',
//            'validation' => array('required'),
//            'form' => array('type' => 'text', 'placeholder' => 'ej. 7096455'),
//            'default' => '',
//        ),
//        'nacionalidad' => array(
//            'data_type' => 'varchar',
//            'label' => 'Nacionalidad',
//            'form' => array('type' => 'select', 'options' => array('0' => 'V', '1' => 'E')),
//            'validation' => array('required'),
//        ),
//        'nombres' => array(
//            'data_type' => 'varchar',
//            'label' => 'Nombres',
//            'validation' => array('required'),
//            'form' => array('type' => 'text', 'placeholder' => ''),
//            'default' => '',
//        ),
//        'apellidos' => array(
//            'data_type' => 'varchar',
//            'label' => 'Apellidos',
//            'validation' => array('required'),
//            'form' => array('type' => 'text', 'placeholder' => ''),
//            'default' => '',
//        ),
//        'genero' => array(
//            'data_type' => 'varchar',
//            'label' => 'Género',
//            'validation' => array('required'),
//            'form' => array('type' => 'text', 'placeholder' => ''),
//            'default' => '',
//        ),
//        'estado_civil' => array(
//            'data_type' => 'varchar',
//            'label' => 'Estado civil',
//            'form' => array('type' => 'select', 'options' => array(0 => 'Soltero/a', 1 => 'Casado/a', 2 => 'Divorciado/a', 3 => 'Viudo/a')),
//            'validation' => array('required'),
//        ),
//        'fecha_nacimiento' => array(
//            'data_type' => 'int',
//            'label' => 'Fecha de nacimiento',
//            'validation' => array('required'),
//            'form' => array('id' => 'datepicker', 'type' => 'text', 'placeholder' => ''),
//            'default' => '',
//        ),
//        'lugar_nacimiento' => array(
//            'data_type' => 'varchar',
//            'label' => 'Lugar de nacimiento',
//            'validation' => array('required'),
//            'form' => array('type' => 'text', 'placeholder' => 'ej. Caracas, Distrito Capital'),
//            'default' => '',
//        ),
//        'direccion' => array(
//            'data_type' => 'varchar',
//            'label' => 'Direccion',
//            'validation' => array('required'),
//            'form' => array('type' => 'textarea', 'placeholder' => 'Ciudad, Urb./Sector, Calle, Nº Casa/Piso'),
//            'default' => '',
//        ),
//        'estado_contratacion' => array(
//            'data_type' => 'varchar',
//            'label' => 'Estado de contratacion',
//            'form' => array('type' => 'select', 'options' => array('0' => 'Pre-empleo', '1' => 'Empleado', '2' => 'Vacaciones', '3' => 'Egreso', '4' => 'Contratado')),
//            'validation' => array('required'),
//        ),
//        'fecha_registro' => array(
//            'data_type' => 'int',
//            'label' => 'Fecha de Registro',
//            'form' => array(
//                'type' => false, // this prevents this field from being rendered on a form
//            ),
//        ),
//        'id_usuario' => array(
//            'data_type' => 'int',
//            'label' => 'Usuario creador',
//            'form' => array(
//                'type' => false,
//            ),
//        ),
//    );
//}