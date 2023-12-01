<?php

declare(strict_types=1);

namespace Album;

use Laminas\Router\Http\Segment;
//use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router'       => [
        'routes' => [
            'album' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/album[/:action[/:id]]',
                    'defaults' => [
                        'controller' => Controller\AlbumController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers'  => [
        'factories' => [
            //Controller\AlbumController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        // 'display_not_found_reason' => true,
        // 'display_exceptions'       => true,
        // 'doctype'                  => 'HTML5',
        // 'not_found_template'       => 'error/404',
        // 'exception_template'       => 'error/index',
        // 'template_map'             => [
        //     'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
        //     'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
        //     'error/404'               => __DIR__ . '/../view/error/404.phtml',
        //     'error/index'             => __DIR__ . '/../view/error/index.phtml',
        //],
        'template_path_stack'      => [
            'album' => __DIR__ . '/../view',
        ],
    ],
    //$adapter = new Laminas\Db\Adapter\Adapter([
    'db' => [
        'driver'   => 'Pdo_Pgsql',
        'database' => 'album',
        'username' => 'postgres',
        'password' => '123456',
        'hostname' => 'localhost',
        'port' => '8080'
    ]
];
