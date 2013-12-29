<?php

    return array(
        'controllers' => array(
            'invokables' => array(
                'topic' => 'Forum\Controller\TopicController',
            ),
        ),
        'router' => array(
    		'routes' => array(
				'forum' => array(
					'type' => 'segment',
					'options' => array(
						'route' => '/forum[/:id[/:controller[/:action[/]]]]',
						'constraints'    => array(
                            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
							'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
							'id'         => '[0-9]+',
						),
						'defaults' => array(
							'controller' => 'topic',
							'action'     => 'index',
						),
					),
				),
    		),
        ),
         'view_manager' => array(
            'template_path_stack' => array(
                'album' => __DIR__ . '/../view',
            ),
        ),
    );