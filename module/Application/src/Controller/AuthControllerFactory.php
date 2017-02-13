<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 13/02/2017
 * Time: 11:09
 */

namespace Application\Controller;


use Application\Form\LoginForm;
use Application\Service\UserManager;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class AuthControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $formManager = $container->get('FormElementManager');
        $form = $formManager->get(LoginForm::class);
        $controller = new AuthController($form, $container->get(UserManager::class));
        
        return $controller;
    }

}