<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'register' => array('users/create', 'name' => 'register'),
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
