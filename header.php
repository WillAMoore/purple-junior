<!DOCTYPE html>

<!-- header.php -->

<html>

<head <?php language_attributes();?>>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body ng-app="myApp" <?php body_class(); ?>>
<div >
    <nav id="navbar" class="navbar navbar-default">
        <div class="col-sm-6 col-xs-12">
            <img src="<?php echo get_template_directory_uri();?>/img/logo-purple-junior.png"></img>
        </div>
        <div class="col-sm-6 hidden-xs">
            <div class="pull-right">
<md-button class="md-fab md-mini" style="margin-right:24px" aria-label="search">
          <md-icon md-svg-icon="<?php echo get_template_directory_uri();?>/img/icons/search.svg"></md-icon>
        </md-button>
        
                <!--img src="<?php echo get_template_directory_uri();?>/img/icon-search.png"></img-->
                <input type="text">
                <img src="<?php echo get_template_directory_uri();?>/img/icon-share.png"></img>

            </div>
        </div>
    </nav> <!-- /#navbar -->
