<?php
App::uses('AppModel', 'Model');

class Test extends AppModel {

    function beforeFilter()
    {
        $this->layout = 'test';
    }
}
