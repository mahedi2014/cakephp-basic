<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>

    <title>Login</title>

    <?php
    echo $this->Html->meta(
        'keywords',
        'cakephpbasic'
    );
    echo $this->Html->meta(
        'description',
        'a test project of cake php basic'
    );

    echo $this->Html->css(
        array(
            'font-awesome.min',
            'endless.min',
            '/bootstrap/css/bootstrap.min'
        )
    );

    echo $this->fetch('meta');
    echo $this->fetch('cssHead'); //to set css in head from view
    echo $this->fetch('scriptHead'); //to set js in head from view
    ?>

</head>

<body>

<div class="login-wrapper">
    <div class="text-center">
        <h2 class="fadeInUp animation-delay8" style="font-weight:bold">
            <span class="text-success">Endless</span> <span style="color:#ccc; text-shadow:0 1px #fff">Admin</span>
        </h2>
    </div>
    <?php echo $this->fetch('content'); ?>
</div><!-- /login-wrapper -->

<!-- javascript -->


<?php
echo $this->Html->script(
    array(
        'fjs/jquery-1.10.2.min',
        'bootstrap/js/bootstrap.min',
        'js/modernizr.min',
        'js/pace.min',
        'js/jquery.popupoverlay.min',
        'js/jquery.slimscroll.min',
        'js/jquery.cookie.min',
        'js/endless/endless'

    )
);

echo $this->fetch('cssBottom'); //to set css in bottom from view
echo $this->fetch('scriptBottom'); //to set js in bottom from view

?>

</body>
</html>