<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php /* ?>
<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if (have_posts()) { ?> 
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							

							get_template_part('content', get_post_format());
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php */ ?>
 <section id="conteudo">
            <div id="header_img">
                <img src="<?php echo get_template_directory_uri();?>/img/banner.jpg" class="img-responsive" alt="utilidade">
            </div>
            <div id="main" class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <img src="<?php echo get_template_directory_uri();?>/img/pic_utilidade.png" class="img-responsive" alt="utilidade">
                        <h3 class="tit_categoria">Utilidades</h3>
                    </div>
                    <div class="col-md-7">
                        <div class="row ">
                        	<?php
					            $args = array('post_type' => 'artigos',
					            	'artigos_category'=>'utilidade',
					                'orderby' => 'post_date',
					                'order'=> 'DESC',
					                'numberposts'     => 8);
					            $myposts = get_posts( $args );

					            foreach( $myposts as $post ) :  setup_postdata($post);
					            ?>
                            <div class="col-md-3 separa_coluna">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'flutuar-img')); ?>
                                <div class="txt_desc">
                                     <?php echo the_title();?><br>
			     					 <?php echo get_the_excerpt();?>
                                </div>
                                <a class="btn btn-primary" href="<?php the_permalink();?>">Mais Detalhes</a>
                            </div>
                           <!--  <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div> -->
                            <?php
				            endforeach;
				            // Reset Query
				            wp_reset_query();
				            ?>
                        </div>
                        <!-- <div class="row separa_coluna">
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            
                <div class="row separa_coluna">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="<?php echo get_template_directory_uri();?>/img/banner_meio.jpg" class="img-responsive" alt="utilidade">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row separa_coluna">
                    <div class="col-md-4 col-md-offset-1">
                        <img src="<?php echo get_template_directory_uri();?>/img/pic_utilidade.png" class="img-responsive" alt="utilidade">
                        <h3 class="tit_categoria">Escolar</h3>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                        	<?php
				            $args = array('post_type' => 'artigos',
				            		'artigos_category'=>'escolar',
				                    'orderby' => 'post_date',
				                    'order'=> 'DESC',
				                    'numberposts'     => 8);
				            $myposts = get_posts( $args );

				            foreach( $myposts as $post ) :  setup_postdata($post);
				            ?>
                           <div class="col-md-3 separa_coluna">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'flutuar-img')); ?>
                                <div class="txt_desc">
                                     <?php echo the_title();?><br>
			     					 <?php echo get_the_excerpt();?>
                                </div>
                                <a class="btn btn-primary" href="<?php the_permalink();?>">Mais Detalhes</a>
                            </div>
                             <?php
				            endforeach;
				            // Reset Query
				            wp_reset_query();
				            ?>
                            <!-- <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo get_template_directory_uri();?>/img/pic_util.png" class="img-responsive" alt="utilidade">
                                <div class="txt_desc">
                                    <p>conjunto com 3 assadeiras</p>        
                                    <p>fornecedor: Wincy</p>
                                    <p>quantidade mínima: 50pçs</p>
                                </div>
                                <a class="btn btn-primary" href="#">Mais Detalhes</a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row separa_coluna">
                    <div class="col-md-11 col-md-offset-1">
                    	
                        <div class="row">
                        	<?php
					    global $wp_query;
					    $args = array_merge( $wp_query->query_vars, array( 'post_type' => 'banners' ) );
					    query_posts( $args );
					    $i = 0;
						  ?>
						  <?php while ( have_posts() ) : the_post();?>
						  <?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
						      <div class="col-md-4">
                               <img src="<?php echo $banner[0];?>" class="img-responsive" alt="utilidade">
                            </div>
						    <?php
						    $i++;
						    endwhile;
						    // Reset Query
						    wp_reset_query();
						  ?>
                            <!-- <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri();?>/img/banner1.png" class="img-responsive" alt="utilidade">
                            </div>
                            <div class="col-md-4">
                                 <img src="<?php echo get_template_directory_uri();?>/img/banner2.png" class="img-responsive" alt="utilidade">
                            </div>
                            <div class="col-md-4">
                                 <img src="<?php echo get_template_directory_uri();?>/img/banner3.png" class="img-responsive" alt="utilidade">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!--conteudo-->

<?php get_footer(); ?> 