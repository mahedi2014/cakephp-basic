<!-- signin and index view of accounts -->
<div class="login-widget animation-delay1">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">
                <i class="fa fa-lock fa-lg"></i> Sign in
            </div>

            <div class="pull-right">
                <span style="font-size:11px;">Don't have any account?</span>

                <?php
                echo $this->Html->link(
                    'Sign up',
                    array(
                        'controller' => 'accounts',
                        'action' => 'signup',
                    ),
                    array('class' => 'btn btn-default btn-xs login-lin')
                );
                ?>
            </div>
        </div>
        <div class="panel-body">
            <?php
            echo $this->Form->create('account', array('action'=>'login', 'type' => 'post'));

            echo $this->Form->input('User.email', array(
                    'div' => array(
                        'class' => 'form-group'
                    ),
                    'label' => 'Email',
                    'class' => 'form-control input-sm bounceIn animation-delay4',
                    'type' => 'text',
                    'placeholder' => 'Enter email address'
                )
            );
            echo $this->Form->input('User.password', array(
                    'div' => array(
                        'class' => 'form-group'
                    ),
                    'label' => 'Password',
                    'class' => 'form-control input-sm bounceIn animation-delay4',
                    'type' => 'password',
                    'placeholder' => 'Enter password'
                )
            );

            echo ' <hr/>';
            echo $this->Form->input('Submit', array(
                'class' => 'btn btn-success btn-sm bounceIn animation-delay5 login-link pull-right',
                'type' => 'submit',
                'label' => false
            ));
            ?>
        </div>
    </div><!-- /panel -->
</div><!-- /login-widget -->


<?php
//to add css in head
$this->start('cssHead');
//css code will be here
$this->end();

//to add css in bottom
$this->start('cssBottom');
//css code will be here
$this->end();

//to add js in head
$this->start('jsHead');
//js code will be here
$this->end();

//to add js in bottom
$this->start('jsBottom');
//js code will be here
$this->end();

?>