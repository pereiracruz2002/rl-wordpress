<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<?php //get_sidebar('left'); ?>
			<header class="entry-header fx_azul_tit">
				<div class="container">
					<div class="row">
						<div class="col-md-11 col-md-offset-1">
							<?php the_breadcrumb(); ?>
						</div>
					</div>
				</div>
			</header><!-- .entry-header -->
			<div class="container">
				<div class="col-md-11 col-md-offset-1 content-area" id="main-column">
					<main id="main" class="site-main" role="main">

						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', get_post_format());

							echo "\n\n";
							
							bootstrapBasicPagination();

							// echo "\n\n";
							
							// // If comments are open or we have at least one comment, load up the comment template
							// if (comments_open() || '0' != get_comments_number()) {
							// 	comments_template();
							// }

							// echo "\n\n";

						} //endwhile;
						?> 
					</main>
				</div>
			</div>
<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?> 
