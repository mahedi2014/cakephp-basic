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
}
