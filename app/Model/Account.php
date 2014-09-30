<?php
App::uses('AppModel', 'Model');

class Account extends AppModel {

    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

    public function login()
    {
        if($this->request->is('post'))
        {
            $this->loadModel('User');
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {
                    var_dump(1); die();
                }
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }

        }
    }
}
