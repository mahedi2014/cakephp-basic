<?php
//Create a form
echo $this->Form->create('User', array('controller' => 'users', 'action' => 'form', 'type' => 'post'));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('submit');


var_dump($data);