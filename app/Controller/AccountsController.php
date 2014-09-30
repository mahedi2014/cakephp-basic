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

    }

}