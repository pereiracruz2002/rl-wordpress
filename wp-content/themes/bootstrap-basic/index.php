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
$terms = get_terms( 'artigos_category' );
$categories = array();

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

 foreach ( $terms as $term ) {
   $categories[] = $term->name."-".$term->term_id;
 }
}
shuffle($categories);
?>

 <section id="conteudo">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                        global $wp_query;
                        $args = array( 'post_type' => 'img' );
                        query_posts( $args );
                        $i = 0;
                         while ( have_posts() ) : the_post();
                         $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php echo ($i==0)? 'active': ' ';?>"></li>
                        <?php
                            $i++;
                            endwhile;
                            // Reset Query
                            wp_reset_query();
                          ?>
                   <!--  <li data-target="#myCarousel" data-slide-to="1"></li> -->
                </ol>
                <div class="carousel-inner" role="listbox">
                    
                    <?php
                        global $wp_query;
                        $args = array( 'post_type' => 'img' );
                        query_posts( $args );
                        $i = 0;
                         while ( have_posts() ) : the_post();
                         $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
                                <div class="item <?php echo ($i==0)? 'active': ' ';?>">
                        <img src="<?php echo $banner[0];?>" class="img-responsive" alt="utilidade">
                    </div>
                            <?php
                            $i++;
                            endwhile;
                            // Reset Query
                            wp_reset_query();
                          ?>

                    <!-- <div class="item active">
                        <img src="<?php echo get_template_directory_uri();?>/img/banner1_topo.png" class="img-responsive" alt="utilidade">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/img/banner2_topo.png" class="img-responsive" alt="utilidade">
                    </div> -->
                </div>
            </div>
            <div id="main" class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <?php 
                        $array_nome = explode('-',$categories[0]); 
                        $nome = $array_nome[0];
                        $id   =  $array_nome[1];
                        ?>
                        <img src="<?php echo z_taxonomy_image_url($id); ?>" class="img-responsive" />
                        <h3 class="tit_categoria"><?php echo ucfirst($nome);?></h3>
                    </div>
                    <div class="col-md-7">
                        <div class="row ">
                        	<?php
					            $args = array('post_type' => 'artigos',
					            	'artigos_category'=>$nome,
					                'orderby' => 'post_date',
					                'order'=> 'DESC',
					                'numberposts'     => 8);
					            $myposts = get_posts( $args );

					            foreach( $myposts as $post ) :  setup_postdata($post);
					            ?>
                            <div class="col-md-3 col-xs-6 col-sm-6 separa_coluna_menor">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'flutuar-img')); ?>
                                <div class="txt_desc">
                                     <?php echo the_title();?><br>
			     					 <?php echo get_the_excerpt();?>
                                </div>
                                <a class="btn btn_azulao" href="<?php the_permalink();?>">>> Mais Detalhes</a>
                            </div>
                            <?php
				            endforeach;
				            // Reset Query
				            wp_reset_query();
				            ?>
                        </div>
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
                        <?php 
                        $array_nome = explode('-',$categories[1]); 
                        $nome = $array_nome[0];
                        $id   =  $array_nome[1];
                        ?>
                        <img src="<?php echo z_taxonomy_image_url($id); ?>" class="img-responsive" />
                         
                        <h3 class="tit_categoria"><?php echo ucfirst($nome);?></h3>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                        	<?php
				            $args = array('post_type' => 'artigos',
				            		'artigos_category'=>$nome,
				                    'orderby' => 'post_date',
				                    'order'=> 'DESC',
				                    'numberposts'     => 8);
				            $myposts = get_posts( $args );

				            foreach( $myposts as $post ) :  setup_postdata($post);
				            ?>
                           <div class="col-md-3 separa_coluna_menor">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'flutuar-img')); ?>
                                <div class="txt_desc">
                                     <?php echo the_title();?><br>
			     					 <?php echo get_the_excerpt();?>
                                </div>
                                <a class="btn btn_azulao" href="<?php the_permalink();?>"> >> Mais Detalhes</a>
                            </div>
                             <?php
				            endforeach;
				            // Reset Query
				            wp_reset_query();
				            ?>
                            
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
                            
                        </div>
                    </div>
                </div>
            </div>
        </section><!--conteudo-->

<?php get_footer(); ?> 