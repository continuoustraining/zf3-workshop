<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 13/02/2017
 * Time: 10:49
 */

namespace Application\Service;


use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UserManagerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        die('toto');
        $service = new UserManager();
        $service->setStatus('poc');
        
        return $service;
    }

    public function createService(ServiceLocatorInterface $container)
    {
        return $this($container, UserManager::class);
    }
}