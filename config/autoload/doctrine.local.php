<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'e.rijk',
                    'password' => 'adysfigar0',
                    'dbname'   => 'project',
                )
            )
        )
    ),
    'zfcuser' => array(
    		// telling ZfcUser to use our own class
    		'user_entity_class'       => 'Application\Entity\User',
    		// telling ZfcUserDoctrineORM to skip the entities it defines
    		'enable_default_entities' => false,
    ),
    'bjyauthorize' => array(
    		// Using the authentication identity provider, which basically reads the roles from the auth service's identity
    		'identity_provider' => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',
    
    		'role_providers'        => array(
    				// using an object repository (entity repository) to load all roles into our ACL
    				'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' => array(
    						'object_manager'    => 'doctrine.entity_manager.orm_default',
    						'role_entity_class' => 'SamUser\Entity\Role',
    				),
    		),
    ),
);