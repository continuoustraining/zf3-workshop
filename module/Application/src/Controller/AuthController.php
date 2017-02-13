<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 13/02/2017
 * Time: 11:00
 */

namespace Application\Controller;


use Application\Service\UserManager;
use Zend\Form\Form;
use Zend\Mvc\Controller\AbstractActionController;

class AuthController extends AbstractActionController
{
    protected $form;
    
    protected $userManager;
    
    public function __construct(Form $form, UserManager $userManager)
    {
        $this->form = $form;
        $this->userManager = $userManager;
    }

    public function loginAction()
    {
        return [
            'form' => $this->form
        ];
    }
    
    public function logoutAction()
    {
        return [];
    }
}