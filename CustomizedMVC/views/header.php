<html>
<head>
        <title><?=(isset($this->title))?$this->title:'MVC';?></title>
        <link rel="stylesheet"  href="<?php echo URL ;?>public/css/default.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo URL ;?>public/js/custom.js"></script>
    <script>
        $( function() {
            $( "#test2" ).datepicker();
        } );
    </script>
        <?php
            if(isset($this->js))
            {
                foreach($this->js as $js)
                {
                    echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
                }
            }
        ?>
<!--</head>
<body>
<input type="text" id="test2">-->
<?php
Session::init();
?>

    <div id="header">
        header
    <br/>
        <?php if(Session::get('loggedIn')==false):?>
            <a href="<?php echo URL ;?>index">Index</a>
            <a href="<?php echo URL ;?>help">Help</a>
        <?php endif; ?>
        <?php
            if(Session::get('loggedIn')==true):?>
                <a href="<?php echo URL ;?>dashboard">Dashboard</a>
                <a href="<?php echo URL ;?>note">Notes</a>

            <?php if(Session::get('role')=='owner'):?>
                <a href="<?php echo URL ;?>user">Users</a>

        <?php endif; ?>
            <a href="<?php echo URL ;?>dashboard/logout">Logout</a>
        <?php else: ?>

        <a href="<?php echo URL ;?>login">Login</a>
        <?php endif; ?>

    </div>
<div id="content">




