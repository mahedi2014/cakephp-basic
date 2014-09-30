<?php
App::uses('AuthComponent', 'Controller/Component');
App::uses('String', 'Utility');

class AccountsController extends AppController {

    public $pageTitle;

    /**
     * Rendering common properties
     */
    public function beforeRender() {
        $this->layout = 'account';
        $this->set('title_for_layout', $this->pageTitle);
    }

    /**
     * load first action of this controller for sign in
     */
    public function index()
    {
        $this->pageTitle = 'Sign in';

    }


    /**
     * Signup view calling
     */
    public function signup()
    {
        $this->pageTitle = 'Sign up';


        if($this->request->is('post'))
        {
            $this->loadModel('User');
            $this->User->set(
                array(
                    'uuid' => String::uuid(),
                    'visible' => '1',
                    'created_at' => date('y-m-d h:i:s'),
                    'updated_at' => date('y-m-d h:i:s')
                )
            );
            $this->User->save($this->request->data);
            $this->Session->setFlash('Data Saved!', 'flash_success'); //make a flash
            $this->redirect(array('controller'=>'accounts', 'action'=>'index')); //redirect page to /users/index
        }

    }

}