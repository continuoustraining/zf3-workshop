<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Application\Controller\AuthControllerFactory;
use Application\Form\LoginForm;
use Application\Form\LoginFormFactory;
use Application\Form\UserFormFactory;
use Application\Hydrator\UserHydratorFactory;
use Application\Service\UserManager;
use Application\Service\UserManagerFactory;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\ServiceManager\Proxy\LazyServiceFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'login' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/login',
                    'defaults' => [
                        'controller' => Controller\AuthController::class,
                        'action'     => 'login',
                    ],
                ],
            ],
            'logout' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/logout',
                    'defaults' => [
                        'controller' => Controller\AuthController::class,
                        'action'     => 'logout',
                    ],
                ],
            ],
            'user' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/user',
                    'defaults' => [
                        'controller' => Controller\UserController::class
                    ],
                ],
                'child_routes' => [
                    'add' => [
                        'type' => Literal::class,
                        'options' => [
                            'route' => '/add',
                            'defaults' => [
                                'action' => 'add'
                            ]
                        ]
                    ]
                ]
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\AuthController::class => AuthControllerFactory::class,
            Controller\UserController::class => Controller\UserControllerFactory::class
        ],
    ],
    'hydrators' => [
        'factories' => [
            'userHydrator' => UserHydratorFactory::class
        ]
    ],
    'form_elements' => [
        'factories' => [
            LoginForm::class => LoginFormFactory::class,
            'userForm' => UserFormFactory::class
        ],
        'delegators' => [
            LoginForm::class => [
                LazyServiceFactory::class,
            ],
        ],
        'lazy_services' => [
            'class_map' => [
                LoginForm::class => LoginForm::class,
                UserManager::class => UserManager::class,
            ],
            'proxies_namespace'  => 'FormProxy',
            'proxies_target_dir' => 'data/proxies/',
            'write_proxy_files'  => true,
        ]
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'service_manager' => [
//        'invokables' => [
//            'application.manager.user' => UserManager::class
//        ],
        'factories' => [
//            UserManager::class => InvokableFactory::class,
            UserManager::class => UserManagerFactory::class
        ],
        'alias' => [
//            'application.manager.user' => UserManager::class,
        ],
        'delegators' => [
            UserManager::class => [
                LazyServiceFactory::class,
            ],
        ],
        'lazy_services' => [
            'class_map' => [
                UserManager::class => UserManager::class
            ],
            'proxies_namespace'  => 'ServiceProxy',
            'proxies_target_dir' => 'data/proxies/',
            'write_proxy_files'  => true,
        ]
    ]
];
