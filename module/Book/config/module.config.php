<?php

    return array(
        'controllers' => array(
            'invokables' => array(
                'index' => 'Book\Controller\IndexController',
            ),
        ),
        'router' => array(
    		'routes' => array(
				'book' => array(
					'type' => 'segment',
					'options' => array(
						'route' => '/book[/:controller[/:action]]',
						'constraints'    => array(
                            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
							'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
							'id'         => '[0-9]+',
						),
						'defaults' => array(
							'controller' => 'book',
							'action'     => 'index',
						),
					),
				),
    		),
        ),
         'view_manager' => array(
            'template_path_stack' => array(
                'book' => __DIR__ . '/../view',
            ),
        ),
    );