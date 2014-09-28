<?php
class UsersController extends AppController {

    public function index()
    {
        $this->loadModel('User');
        $result = $this->User->find('list');
        $this->set('userList', $result);
    }
}