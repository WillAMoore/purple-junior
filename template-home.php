<? /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<!-- template-home.php -->

	<div class="home-section home-section-1  col-xs-12">

		<h1 class="col-xs-6 col-xs-offset-3 text-center"> We Are a
			Digital Studio With Different Backgrounds But Only One Goal</h1>

	</div>

	<div class="home-section home-section-2  col-sm-12">
		<div class="col-sm-12 button-container">
			<button type="button" class="btn btn-default">Our Story</button>
		</div>
		<div class="col-sm-12">
			<div class="col-md-4 col-sm-12 text-center">
				<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img1.png"></img>
				<h3>Design</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-4 col-sm-12 text-center">
				<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img2.png"></img>
				<h3>Web Apps</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-4 col-sm-12 text-center">
				<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img3.png"></img>
				<h3>Web Marketing</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>

	</div>

	<div class="home-section home-section-3 col-sm-12">
		<div class="col-sm-12">
			<h2 class="col-sm-6 col-sm-offset-3 text-center">Showcase</h2>
			<div class="col-sm-10 col-sm-offset-1">
				<?php echo do_shortcode('[ess_grid alias="showcase-grid"]'); ?>
			</div>
		</div>

	</div>

	<div class="home-section home-section-4 col-sm-12">
		<div class='row'>
			<h2 class="text-center">Web Marketing</h2>
			<span class="col-sm-12 fa fa-heart text-center"></span>
				<img class='img-responsive' src="<?php echo get_template_directory_uri();?>/img/4-img1.png">
				<img class="hidden-xs img-responsive dotted-img" src="<?php echo get_template_directory_uri();?>/img/4-dotted-line.png">

				<div class="col-sm-12">
					<div class="row">
						<div class="digital-promo col-xs-8 col-xs-offset-2 col-sm-7">
							<h3 class="small-caps">Digital Promotion</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Curabitur volutpat orci eget dolor ultrices auctor. Morbi eget dolor nec erat rhoncus ornare eu vitae risus.
							</p>
						</div>
					</div>
				</div>

				<div class="row visible-xs">
					<img class='mobile-line visible-xs' src="<?php echo get_template_directory_uri();?>/img/4-mobile-line.png" />
				</div>





				<div class="col-sm-12">
					<div class="row">
						<div class="social-strategy">
							<div class='col-xs-8 col-xs-offset-2 col-sm-offset-2 col-sm-6'>
								<h3 class="small-caps">Social Media Strategy</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Curabitur volutpat orci eget dolor ultrices auctor. Morbi eget dolor nec erat rhoncus ornare eu vitae risus.
								</p>
							</div>
							<div class="col-xs-8 col-xs-offset-2  col-sm-3">
								<img class="img-responsive bee-pic" src="<?php echo get_template_directory_uri();?>/img/4-img2.png">
								<div class="visible-xs">
									<img class='mobile-line visible-xs' src="<?php echo get_template_directory_uri();?>/img/4-mobile-line.png" />
								</div>
							</div>

						</div>
					</div>
				</div>







				<div class="col-xs-12">
					<div class="row landing-pages">
						<div class="landing-inner col-xs-7 col-xs-offset-1">
							<h3 class="small-caps">Landing Pages</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Curabitur volutpat orci eget dolor ultrices auctor. Morbi eget dolor nec erat rhoncus ornare eu vitae risus.
							</p>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-3 col-xs-offset-1">
									<img class='img-responsive frog' src="<?php echo get_template_directory_uri();?>/img/4-img3.png">
								</div>
								<div class="col-xs-8">
									<img class='img-responsive keyboard' src="<?php echo get_template_directory_uri();?>/img/4-img4.png">
								</div>
							</div>
						</div>


					</div>
				</div>
				</div>



			<div class="row landing-pages">
				<div class='col-xs-7 col-xs-offset-3'>
					<h3 class="small-caps">SEO &amp; Analytics Magement</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Curabitur volutpat orci eget dolor ultrices auctor. Morbi eget dolor nec erat rhoncus ornare eu vitae risus.
					</p>
					<img class='graph' src="<?php echo get_template_directory_uri();?>/img/graph.png" alt="" />
				</div>

			</div>
		</div>
	</div>

	<div class="home-section home-section-5  col-xs-12">
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/cisco-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/cisco-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/cisco-1.png'"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/calix-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/calix-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/calix-1.png'"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/swarovski.png"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/silkstream-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/silkstream-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/silkstream-1.png'"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/theshipleopard-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/theshipleopard-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/theshipleopard-1.png'"></img>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 text-center">
			<img src="<?php echo get_template_directory_uri();?>/img/cadenza-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/cadenza-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/cadenza-1.png'"></img>
		</div>
	</div>

	<div class="home-section home-section-6  col-xs-12">
		<h2 class="col-xs-6 col-xs-offset-3 text-center">Tell us how you feel today</h2>
		<div class="col-xs-4 col-xs-offset-4">
			<?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]'); ?>
		</div>
		<div class="col-xs-2 col-xs-offset-5">
				<a href="http://www.google.com" class="col-xs-3" >
					<p class="circle social-button facebook-color col-xs-3">
						<i class="fa fa-facebook"></i>
					</p>
				</a>
				<a href="http://www.google.com" class="col-xs-3">
					<p class="circle social-button twitter-color col-xs-3">
						<i class="fa fa-twitter"></i>
					</p>
				</a>
				<a href="http://www.google.com" class="col-xs-3">
					<p class="circle social-button googleplus-color col-xs-3">
						<i class="fa fa-google-plus"></i>
					</p>
				</a>
				<a href="http://www.google.com" class="col-xs-3">
					<p class="circle social-button linkedin-color col-xs-3">
						<i class="fa fa-linkedin"></i>
		 			</p>
				</a>
			</div>
		</div>
	</div>



<?php get_footer(); ?>
