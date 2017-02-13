<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 13/02/2017
 * Time: 16:01
 */

namespace Application\Form;


use Application\Entity\User;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\Form\Element\Submit;
use Zend\Form\Element\Text;
use Zend\Form\Form;
use Zend\Form\FormElementManager\FormElementManagerV3Polyfill;
use Zend\Hydrator\HydratorPluginManager;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class UserFormFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var FormElementManagerV3Polyfill $elementManager */
        $elementManager = $container->get('FormElementManager');
        
        /** @var Form $form */
        $form = $elementManager->get('form');
        
        $firstname = $elementManager->get('text', [
            'label' => 'Firstname',
            'name' => 'first_name'
        ]);
        
        $form->add($firstname);
        
        $form->add([
            'type' => Text::class,
            'name' => 'last_name',
            'options' => [
                'label' => 'Lastname'
            ]
        ]);
        
        $form->add([
            'type' => Submit::class,
            'attributes' => [
                'value' => 'save'
            ]
        ]);
        
        /** @var HydratorPluginManager $hydratorManager */
        $hydratorManager = $container->get('HydratorManager');
        
        $form->setHydrator($hydratorManager->get('userHydrator'));
        
        $user = new User();
        var_dump($hydratorManager->get('userHydrator')->extract($user));
        $form->setObject($user);
        
        return $form;
    }

}