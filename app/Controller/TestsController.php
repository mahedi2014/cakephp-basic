<?php
App::uses('AuthComponent', 'Controller/Component');


class TestsController extends AppController {

    public function index()
    {
        $this->layout = 'test';
        $result = 'Welcome to new template';
        $this->set('data', $result);
    }

    public function signup()
    {
        $this->layout = 'test';
        $result = 'Welcome to new template';
        $this->set('data', $result);
    }

}