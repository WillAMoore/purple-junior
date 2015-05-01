<!DOCTYPE html>

<!-- header.php -->

<html>

<head <?php language_attributes();?>>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div >
        <nav id="navbar" class="navbar navbar-default">
            <div class="col-sm-6 col-xs-12">
                <img src="<?php echo get_template_directory_uri();?>/img/logo-purple-junior.png"></img>
            </div>
            <div class="col-sm-6 hidden-xs">

                <div class="pull-right header-space">
                    <div class="col-xs-1">
                        <p id="seacrhicon"  class="circle"> </p>
                    </div>
                    <div class="col-xs-7">
                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label> <em> Search for... </em></label>
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <p  id="shareicon" class="circle"></p>
                    </div>
                </div>
            </div>
        </nav> <!-- /#navbar -->
