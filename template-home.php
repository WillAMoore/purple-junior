<? /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<!-- template-home.php -->

	<div class="home-section section-1  col-xs-12">

		<h1 class="col-xs-6 col-xs-offset-3 text-center"> We Are a Digital Studio With Different Backgrounds But Only One Goal</h1>

	</div>

	<div class="home-section section-2  col-xs-12">

		<div class="col-md-4 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img1.png"></img>
			<h3>Design</h3>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
		<div class="col-md-4 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img2.png"></img>
			<h3>Web Apps</h3>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
		<div class="col-md-4 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img3.png"></img>
			<h3>Web Marketing</h3>
			<p>Lorem ipsum dolor sit amet</p>
		</div>


	</div>

	<div class="home-section section-3  col-xs-12">
		<div class="col-xs-12">
			<h2 class="col-xs-6 col-xs-offset-3 text-center">Showcase</h2>
			<div class="col-xs-8 col-xs-offset-2">
				<?php echo do_shortcode('[ess_grid alias="showcase-grid"]'); ?>
			</div>
		</div>

	</div>

	<div class="home-section section-4  col-xs-12">
		<div class="col-xs-12 text-center">
			<h2 class="col-xs-6 col-xs-offset-3 text-center">Web Marketing</h2>
			<i class="fa fa-heart col-xs-6 col-xs-offset-3 text-center"></i>
			<img class="col-xs-12 col-md-8 col-md-offset-2" src="<?php echo get_template_directory_uri();?>/img/home-sect4-fullgraphic.png"></img>

		</div>

	</div>

	<div class="home-section section-5  col-xs-12">
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/cisco-1.png"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/calix-1.png"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/swarovski.png"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/silkstream-1.png"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/theshipleopard-1.png"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/cadenza-1.png"></img>
		</div>
	</div>

	<div class="home-section section-6  col-xs-12">
		<h2 class="col-xs-6 col-xs-offset-3 text-center">Tell us how you feel today</h2>
		<div class="col-xs-4 col-xs-offset-4">
			<?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]'); ?>
		</div>
	</div>

<?php get_footer(); ?>
