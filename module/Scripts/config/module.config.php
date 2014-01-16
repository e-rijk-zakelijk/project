<?php

    return array(
        'controllers' => array(
            'invokables' => array(
                'index' => 'Scripts\Controller\IndexController',
            ),
        ),
        'router' => array(
    		'routes' => array(
				'scripts' => array(
					'type' => 'segment',
					'options' => array(
						'route' => '/scripts[/:controller[/:action]]',
						'constraints'    => array(
                            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
							'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
							'id'         => '[0-9]+',
						),
						'defaults' => array(
							'controller' => 'scripts',
							'action'     => 'index',
						),
					),
				),
    		),
        ),
         'view_manager' => array(
            'template_path_stack' => array(
                'scripts' => __DIR__ . '/../view',
            ),
        ),
    );