<?php
/**
 * The production database settings.
 */

return array(
	'default' => array(
		'connection'     => array(
                    'dsn'            => 'mysql:host=localhost;dbname=sermedscm',
                    'username'       => 'root',
                    'password'       => '',
                    'persistent'     => false,
                    'compress'       => false, 
                ),
	),
);
