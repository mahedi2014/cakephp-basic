<?php
App::uses('Model', 'Model');

class User extends AppModel {

    public function getId()
    {
        return $this->find('all');
    }

}
