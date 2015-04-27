<!DOCTYPE html>

<!-- header.php -->

<html>

<head <?php language_attributes();?>>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <nav id="navbar" class="navbar navbar-default">
        <div class="col-xs-6">
            <img src="<?php echo get_template_directory_uri();?>/img/logo-purple-junior.png"></img>
        </div>
        <div class="col-xs-6">
            <div class="pull-right">
                <img src="<?php echo get_template_directory_uri();?>/img/icon-search.png"></img>
                <input type="text">
                <img src="<?php echo get_template_directory_uri();?>/img/icon-share.png"></img>

            </div>
        </div>
    </nav> <!-- /#navbar -->
