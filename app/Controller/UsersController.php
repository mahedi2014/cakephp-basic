<?php
class UsersController extends AppController {

    public function index()
    {
        $this->loadModel('User');
//        $result = $this->User->find('count');

        $result = $this->User->getInfo();
        $this->set('data', $result);
    }

    public function form()
    {
        if($this->request->is('post')){
            $this->User->save($this->request->data);
        }
        $result = $this->User->getInfo();
        $this->set('data', $result);
    }
}