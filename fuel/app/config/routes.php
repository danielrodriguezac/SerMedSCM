<?php
return array(
	'_root_'  => 'users',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	//'users' => 'users',
);