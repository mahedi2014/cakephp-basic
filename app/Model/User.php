<?php
App::uses('AppModel', 'Model');

class User extends AppModel {

    public function getInfo()
    {
        return $this->find('all');
    }

}
