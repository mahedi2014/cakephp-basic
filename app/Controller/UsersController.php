<?php
App::uses('AuthComponent', 'Controller/Component');
App::uses('String', 'Utility');

class UsersController extends AppController {

    public function index()
    {
        $this->loadModel('User');
        $result = $this->User->getInfo();
        $this->set('data', $result);
    }

    public function form()
    {
        if($this->request->is('post'))
        {
            $this->User->set(
                array(
                    'uuid' => String::uuid(),
                    'visible' => '1',
                    'created_at' => date('y-m-d h:i:s'),
                    'updated_at' => date('y-m-d h:i:s')
                )
            );
            $this->User->save($this->request->data);
            $this->Session->setFlash('Data Saved!'); //make a flash
            $this->redirect(array('controller'=>'users', 'action'=>'index')); //redirect page to /users/index
        }
    }
}