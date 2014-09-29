<?php
App::uses('AppModel', 'Model');

class User extends AppModel {

    //make password encription before save to database
    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

    //find all of data of users table
    public function getInfo()
    {
        return $this->find('all');
    }


}
