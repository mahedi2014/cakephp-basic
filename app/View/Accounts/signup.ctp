<!-- signin and index view of accounts -->
<div class="login-widget animation-delay1">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">
                <i class="fa fa-lock fa-lg"></i> Sign up
            </div>

            <div class="pull-right">
                <span style="font-size:11px;">Don have account?</span>

                <?php
                echo $this->Html->link(
                    'Sign in',
                    array(
                        'controller' => 'accounts',
                        'action' => 'index',
                    ),
                    array('class' => 'btn btn-default btn-xs login-lin')
                );
                ?>
            </div>
        </div>
        <div class="panel-body">
            <form class="form-login">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
                </div>
                <div class="form-group">
                    <label>Re-password</label>
                    <input type="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
                </div>

                <hr/>

                <a class="btn btn-success btn-sm bounceIn animation-delay5 login-link pull-right" href="index-2.html"><i class="fa fa-sign-in"></i> Sign in</a>
            </form>
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