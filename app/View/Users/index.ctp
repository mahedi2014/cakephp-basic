<?php
//Create a form
echo $this->Form->create('Users', array('controller' => 'users', 'action' => 'form'));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('submit');