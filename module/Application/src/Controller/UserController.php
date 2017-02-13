<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 13/02/2017
 * Time: 16:07
 */

namespace Application\Controller;


use Zend\Form\Form;
use Zend\Mvc\Controller\AbstractActionController;

class UserController extends AbstractActionController
{
    /**
     * @var Form
     */
    protected $form;

    /**
     * @return Form
     */
    public function getForm(): ?Form
    {
        return $this->form;
    }

    /**
     * @param Form $form
     * @return UserController
     */
    public function setForm(Form $form)
    {
        $this->form = $form;
        return $this;
    }
    
    
    
    public function addAction()
    {
        // Pass in the route/url you want to redirect to after the POST
        $prg = $this->prg('/user/add', true);

        if ($prg instanceof \Zend\Http\PhpEnvironment\Response) {
            // Returned a response to redirect us.
            return $prg;
        }

        if ($prg === false) {
            // This wasn't a POST request, but there were no params in the flash
            // messenger; this is probably the first time the form was loaded.
            return ['form' => $this->getForm()];
        }

        // $prg is an array containing the POST params from the previous request
        $form = $this->getForm();
        $form->setData($prg);
        
        if ($form->isValid()) {
            $user = $form->getData();
            echo '<pre>';var_dump($user);echo '</pre>';
        }
        
        return ['form' => $this->getForm()];
    }
}