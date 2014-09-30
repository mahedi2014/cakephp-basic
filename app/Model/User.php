<?php
App::uses('AppModel', 'Model');

class User extends AppModel {

    public $validate = array(
        'username' => array(
            'rule' => 'isUnique',
            'message' => 'This field must not be empty!'
        ),
        'password' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Mimimum 8 characters long'
        ),
        'email' => 'email'
    );

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
