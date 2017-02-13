<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 13/02/2017
 * Time: 11:18
 */

namespace Application\Form;


use Interop\Container\ContainerInterface;
use Zend\Form\Element\Text;
use Zend\Form\Form;
use Zend\Form\FormElementManager\FormElementManagerV3Polyfill;
use Zend\ServiceManager\Factory\FactoryInterface;

class LoginFormFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var FormElementManagerV3Polyfill $formManager */
        $formManager = $container->get('FormElementManager');
        /** @var Form $form */
        $form = new LoginForm();
        
        /** @var Text $username */
        $username = $formManager->get('text');
        $username->setName('username')
                 ->setLabel('Username');
        
        $form->add($username);
        
        return $form;
    }

}