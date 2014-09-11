<?php
/**
 * Template Name: Home Page
 * 
 * The template for the home page
 *
 * @package Serena Interiors
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?php

			if ( function_exists( 'soliloquy' ) ) { 

				soliloquy( 'home-page', 'slug' ); 

			}

			?><div class="home-widgets">
				<div id="home-left" class="home-widget-area" role="complementary"><?php
					dynamic_sidebar( 'home-left' );
				?></div><!-- #home-left -->
				<div id="home-center" class="home-widget-area" role="complementary"><?php
					dynamic_sidebar( 'home-center' );
				?></div><!-- #home-center -->
				<div id="home-right" class="home-widget-area" role="complementary"><?php
					dynamic_sidebar( 'home-right' );
				?></div><!-- #home-right -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
