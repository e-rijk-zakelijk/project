<?php

    return array(
        'controllers' => array(
            'invokables' => array(
                'forum' => 'Forum\Controller\ForumController',
                'topic' => 'Forum\Controller\TopicController',
            ),
        ),
        'router' => array(
    		'routes' => array(
				'forum' => array(
					'type' => 'segment',
					'options' => array(
						'route' => '/forum[/:id[/:controller[/:action]]]',
						'constraints'    => array(
                            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
							'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
							'id'         => '[0-9]+',
						),
						'defaults' => array(
							'controller' => 'forum',
							'action'     => 'index',
						),
					),
				),
    		),
        ),
         'view_manager' => array(
            'template_path_stack' => array(
                'forum' => __DIR__ . '/../view',
            ),
        ),
    );