<?php

class Model_Sesion extends \Orm\Model
{
        static protected $_table_name = 'sesiones';
	protected static $_properties = array(
		'id',
		'session_id',
		'previous_id',
		'user_agent',
		'ip_hash',
		'created',
		'updated',
		'payload'
	);

}
