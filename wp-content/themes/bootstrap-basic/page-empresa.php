<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
	<header class="entry-header fx_azul_tit">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
			
	</header><!-- .entry-header --> 
	<div class="container">
		<div class="col-md-12 content-area" id="main-column">
			<main id="main" class="site-main" role="main">
				<?php 
				while (have_posts()) {
					the_post();
				?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<div class="row">
			<div class="col-md-5">
				<?php the_post_thumbnail('big', array('class' => '')); ?>
			</div>
			<div class="col-md-7">
				<div class="row ">
					<?php the_content(); ?>
				</div>
			</div>
		<div class="clearfix"></div>
		<div class="row separa_coluna">
			<div class="col-md-offset-1 col-md-11">
				  <div class="col-md-4 columns pics_pq text-center"><img src="<?php echo get_template_directory_uri();?>/img/pic_missao.png"></img>
				    <h4 class="tit_valores ">Missão</h4>
				      <div class="txt_valores">
				        Oferecer a melhor experiência de compra em alto
				        atacado de diversos segmentos em um único espaço
				        com conforto e comodidade.
				      </div>
				  </div>

				  <div class="col-md-4 columns pics_pq text-center"><img src="<?php echo get_template_directory_uri();?>/img/pic_visao.png"></img>
				    <h4 class="tit_valores text-center">Visão</h4>
				    <div class="txt_valores">
				      Representar os clientes perante os fornecedores,
				      e os fornecedores perante os clientes trazendo
				      solução as suas demandas com tecnologia,
				      inovação e profissionalismo.
				    </div>
				  </div>

				  <div class="col-md-4 columns pics_pq text-center"><img src="<?php echo get_template_directory_uri();?>/img/pic_valores.png"></img>
				    <h4 class="tit_valores text-center">Valores</h4>
				    <div class="txt_valores">
				      Credibilidade, competência, comprometimento, excelência e lealdade.
				    </div>
				  </div>
			</div>

</div>
		<?php
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?>
	</div><!-- .entry-content -->
	<?php /*
	<footer class="entry-meta">
		<?php bootstrapBasicEditPostLink(); ?> 
	</footer> */?>
</article><!-- #post-## -->
<?php
				} //endwhile;
				?> 
			</main>
		</div>
</div>
<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?> 