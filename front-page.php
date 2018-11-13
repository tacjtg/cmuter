<?php
/**
 * Front Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cmuter
 */
 
get_header();

$client_logo = get_template_directory_uri() . '/images/delta.png'; 
$placeholder = get_template_directory_uri() . '/images/placeholder-140.png';
?>
<div class="bootstrap-wrapper">
	<div class="container-fluid" style="padding: 0 !important;">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				
				<!-- BEGIN HOMESCREEN 1 -->
				<div class="homescreen-1" data-parallax="scroll" data-image-src="<?php echo get_theme_mod('cmuter_homepage_background_image'); ?>">
					<div class="homescreen-1-content-left"></div>
					<div class="homescreen-1-content">
						<h1><?php echo get_theme_mod('cmuter_homepage_text', 'World class solutions for premier corporations'); ?></h1>
						<a class="cta" href=""><?php echo get_theme_mod('cmuter_homepage_button_text', 'Play Video'); ?></a>
					</div>
					<div class="homescreen-1-content-right"></div>
				</div>
				<!-- END HOMESCREEN 1 -->
				
				<!-- BEGIN HOMESCREEN 2 -->
				<div class="homescreen-2">
					<div class="row justify-content-md-center">
						<div class="col">				
							<div class="tabs">
								
								<!-- BEGIN TAB 1 -->		    
								<div class="tab" style="margin-left: auto;">
									<input type="radio" id="tab-1" name="tab-group-1" checked>
									<label for="tab-1"><?php echo get_theme_mod('cmuter_first_tab_title', 'Your Challenges'); ?></label>
									<div class="content">
										<div class="row">
											<div class="col-md-6">
												<img src="<?php echo get_template_directory_uri() . '/images/tab1.png' ?>" />
											</div>
											<div class="col-md-6">
												<h3><?php echo get_theme_mod('cmuter_first_tab_title', 'Your Challenges'); ?></h3>
												<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
												<ul>
													<li>Understand</li>
													<li>Manage</li>
													<li>Influence</li>
												</ul>
												<p>Class aptent taciti sociosqu <a href="#">ad litora torquent</a></p>
											</div>
										</div>
										
									</div>
								</div><!-- tab -->
								<!-- END TAB 1 -->	
								
								<!-- BEGIN TAB 2 -->	
								<div class="tab" style="margin-right: auto;">
									<input type="radio" id="tab-2" name="tab-group-1">
									<label for="tab-2"><?php echo get_theme_mod('cmuter_second_tab_title', 'Our Solutions'); ?></label>
									<div class="content">
										<div class="row">
											<div class="col-md-6">
												<img src="<?php echo get_template_directory_uri() . '/images/tab2.png' ?>" />
											</div>
											<div class="col-md-6">
												<h3><?php echo get_theme_mod('cmuter_second_tab_title', 'Our Solutions'); ?></h3>
												<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
												<ul>
													<li>Understand</li>
													<li>Manage</li>
													<li>Influence</li>
												</ul>
												<p>Class aptent taciti sociosqu <a href="#">ad litora torquent</a></p>
											</div>
										</div>
										
									</div>
								</div><!-- tab -->
								<!-- END TAB 2 -->	
							    							    
							</div><!-- tabs -->
						</div><!-- col -->
					</div><!-- row -->
				</div>
				<!-- END HOMESCREEN 2 -->
				
				<!-- BEGIN HOMESCREEN 3 -->
				<div class="homescreen-3" data-parallax="scroll" data-image-src="<?php echo get_theme_mod('cmuter_cards_background_image'); ?>">
					<div class="homescreen-3-content">
						<h2><?php echo get_theme_mod('cmuter_cards_header', 'Cmuter Benefits'); ?></h2>
						<div class="row">
							
							<div class="col-md-4 homescreen-3-block even">
								<a href="<?php echo get_theme_mod('cmuter_card_1_link'); ?>">
									<i class="fa <?php echo get_theme_mod('cmuter_card_1_icon', 'fa-bar-chart'); ?>"></i>
									<h3><?php echo get_theme_mod('cmuter_card_1_header', 'Assess'); ?></h2>
									<p><?php echo get_theme_mod('cmuter_card_1_content', 'Your current transportation program.'); ?></p>
								</a>
							</div>														
							
							<div class="col-md-4 homescreen-3-block">
								<a href="<?php echo get_theme_mod('cmuter_card_2_link'); ?>">
									<i class="fa <?php echo get_theme_mod('cmuter_card_2_icon', 'fa-wrench'); ?>"></i>
									<h3><?php echo get_theme_mod('cmuter_card_2_header', 'Configure'); ?></h2>
									<p><?php echo get_theme_mod('cmuter_card_2_content'); ?></p>
								</a>
							</div>
							
							<div class="col-md-4 homescreen-3-block even">
								<a href="<?php echo get_theme_mod('cmuter_card_3_link'); ?>">
									<i class="fa <?php echo get_theme_mod('cmuter_card_3_icon', 'fa-car'); ?>"></i>
									<h3><?php echo get_theme_mod('cmuter_card_3_header', 'Evolve'); ?></h2>
									<p><?php echo get_theme_mod('cmuter_card_3_content'); ?></p>
								</a>
							</div>
													
						</div> 
					</div>
				</div>
				<!-- END HOMESCREEN 3 -->
				
				<!-- BEGIN HOMESCREEN 4 -->
				<div class="homescreen-4">
					<h2><?php echo get_theme_mod('cmuter_homescreen_4_header', 'Proven Results'); ?></h2>
					<div class="row">
						<div class="col-sm-6">
							<h3 class="client"><?php echo get_theme_mod('cmuter_section_4_client_name', 'Delta Dental of Washington'); ?></h3>
							<p class="client"><?php echo get_theme_mod('cmuter_section_4_client_info', 'Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat.'); ?></p>
						</div>
						<div class="col-sm-6">
							<img class="client" src="<?php echo get_theme_mod('cmuter_section_4_client_logo', $client_logo); ?>" />
						</div>
					</div>
					<div class="row cmuter-mt">
						<div class="col-sm-4">
							<img class="headshot" src="<?php echo get_theme_mod('cmuter_section_4_headshot', $placeholder); ?>" />						
						</div>
						<div class="col-sm-8">
							<img class="quotemarks" src="<?php echo get_template_directory_uri() . '/images/quote.png' ?>" />
							<p class="quote"><?php echo get_theme_mod('cmuter_section_4_quote', 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.'); ?></p>
							<p class="quotee"><?php echo get_theme_mod('cmuter_section_4_quotee', 'Becky Masters - Director, Compensation, Benefits and HR Technology'); ?></p>

						</div>
					</div>
					<div style="text-align: center; ">
						<a class="read-more" href=""><?php echo get_theme_mod('cmuter_section_4_button_text', 'Read More'); ?></a>
					</div>			
				</div>
				<!-- END HOMESCREEN 4 -->
				
				<!-- BEGIN HOMESCREEN 5 -->
				<div class="homescreen-5">
					<div class="homescreen-5-content">
						<h3><?php echo get_theme_mod('cmuter_section_5_contact_text', 'I want Cmuter to contact me'); ?></h3>
						<hr />
					</div>
				</div>
				<!-- END HOMESCREEN 5 -->
							
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container-fluid -->
</div><!-- .bootstrap-wrapper -->

<?php
get_sidebar();
get_footer();