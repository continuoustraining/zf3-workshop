<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 13/02/2017
 * Time: 16:36
 */

namespace Application\Hydrator;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\Hydrator\ClassMethods;
use Zend\Hydrator\Filter\FilterComposite;
use Zend\Hydrator\Filter\MethodMatchFilter;
use Zend\Hydrator\NamingStrategy\UnderscoreNamingStrategy;
use Zend\Hydrator\Strategy\DateTimeFormatterStrategy;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class UserHydratorFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ClassMethods $hydrator */
        $hydrator = $container->get('HydratorManager')->get('classmethods');
        
        $hydrator->addFilter(
            'password',
            new MethodMatchFilter('getPassword'),
            FilterComposite::CONDITION_AND
        );
        
//        $hydrator->addStrategy('*', new DateTimeFormatterStrategy());
        
        return $hydrator;
    }

}