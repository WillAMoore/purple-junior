<!DOCTYPE html>

<!-- header.php -->

<html>

<head <?php language_attributes();?>>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>

<?php wp_enqueue_script('show-menu-js', get_template_directory_uri() . '/js/show-menu.js',array('jquery')); ?>

<body <?php body_class(); ?>>
    <div >
        <nav id="navbar" class="navbar navbar-default">
            <div class="col-sm-6 col-xs-12">
                <div id="menu" class="left">
                    <div class="logo-sidemenu"> Purple Junior</div>
                    <ul>
                        <li> <a href="#"> Home</a></li>
                        <li> <a href="#"> Showcase <i class="vasso-down"> </i></a>
                        <ul>
                            <li><a href="#">ui / ux web & apps </a></li>
                            <li><a href="#">web application</a></li>
                            <li><a href="#">custom relation management</a></li>
                            <li><a href="#">location based application</a></li>
                            <li><a href="#">branding</a></li>
                            <li><a href="#">printing</a></li>
                        </ul>
                        </li>
                        <li> <a href="#">Digital Marketing </a> </li>
                        </li>
                        <li><a href="#">Contact Us</li>
                    </ul>
                    <div class="column">
                    <a href="#" id="showmenu">
                        <p id="menuicon" class="menu-btn"> </p>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">

                <div class="pull-right header-space">

                    <div class="col-xs-6">
                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label> <em> Search for... </em></label>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <p id="seacrhicon"  class="circle"> </p>
                    </div>
                    <div class="col-xs-1">
                        <p  id="shareicon" class="circle"></p>
                    </div>
                </div>
            </div>
        </nav> <!-- /#navbar -->
