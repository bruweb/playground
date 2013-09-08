<?php
return array(
    'modules' => array(
        'DoctrineModule',
    	'DoctrineORMModule',
   		'DoctrineDataFixtureModule',
   		'ZendDeveloperTools',
   		'Jhu\ZdtLoggerModule',
    	'AsseticBundle',
    	'ZfcBase',
   		'AdfabCore',
        'AdfabUser',
   		'AdfabGame',
        'PlaygroundPartnership',
        'Application',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            '../../../config/autoload/{,*.}{global,local,testing}.php',
        	'./config/{,*.}{testing}.php',
        ),
        'module_paths' => array(
            'module',
            'vendor',
        ),
    ),
);
