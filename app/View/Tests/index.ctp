
<div class="login-widget animation-delay1">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">
                <i class="fa fa-lock fa-lg"></i> Login
            </div>

            <div class="pull-right">
                <span style="font-size:11px;">Don't have any account?</span>
                <?php
                echo $this->Html->link(
                    'Sign up',
                    '/users',
                    array('class' => 'btn btn-default btn-xs login-lin', 'target' => '_blank')
                );
                ?>
                or
                <?php
                echo $this->Html->link(
                    'Sign up',
                    array(
                        'controller' => 'users',
                        'action' => 'index',
                    ),
                    array('class' => 'btn btn-default btn-xs login-lin', 'target' => '_blank')
                );
                ?>
                or

                <a class="btn btn-default btn-xs login-link" href="/users" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
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
                    <label class="label-checkbox inline">
                        <input type="checkbox" class="regular-checkbox chk-delete" />
                        <span class="custom-checkbox info bounceIn animation-delay4"></span>
                    </label>
                    Remember me
                </div>

                <div class="seperator"></div>
                <div class="form-group">
                    Forgot your password?<br/>
                    Click <a href="#">here</a> to reset your password
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