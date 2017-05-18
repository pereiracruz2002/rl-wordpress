<?php

get_header();

?>
<!-- Inicio banner -->
<div><img src="<?php echo get_template_directory_uri();?>/img/banner.jpg"></img></div>
<!-- Fim banner -->

<div class="fx_azul_banner"></div>
<br><br>

<div class="row">
  <div class="large-4 columns"><img src="<?php echo get_template_directory_uri();?>/img/pic_utilidade.png"></img>
    <div class="tit_categoria">UTILIDADES</div>
  </div>
    <div class="large-8 columns">
      <div class="row">
    <?php
            $args = array('post_type' => 'artigos',
              'artigos_category'=>'utilidade',
                'orderby' => 'post_date',
                'order'=> 'DESC',
                'numberposts'     => 8);
            $myposts = get_posts( $args );

            foreach( $myposts as $post ) :  setup_postdata($post);
            ?>

      <div class="large-3 columns"><?php the_post_thumbnail('thumbnail', array('class' => 'flutuar-img')); ?>
        <br>
        <div class="txt_desc">
          <?php echo the_title();?><br>
           <?php echo get_the_excerpt();?>

        </div>
        <div class="btn_prod"> <a href="<?php the_permalink();?>">>> mais detalhes</a></div>
      </div>

            <?php
            endforeach;
            // Reset Query
            wp_reset_query();
            ?>
      </div>

      <br><br>

      

    </div>
</div>

<br>
<br>
<!--INICIO BANNER HOME-->
<div class="row">
  
</div>
<!--FIM BANNER HOME-->

<br>
<br>

<div class="row">
  <div class="large-4 columns"><img src="<?php echo get_template_directory_uri();?>/img/pic_escolar.png"></img>
    <div class="tit_categoria">ESCOLAR</div>
  </div>
    <div class="large-8 columns">
      <?php

            $args = array('post_type' => 'artigos',
                'artigos_category'=>'escolar',
                    'orderby' => 'post_date',
                    'order'=> 'DESC',
                    'numberposts'     => 8);
            $myposts = get_posts( $args );

            foreach( $myposts as $post ) :  setup_postdata($post);
            ?>

      <div class="large-3 columns"><?php the_post_thumbnail('thumbnail', array('class' => 'flutuar-img')); ?>
        <br>
        <div class="txt_desc">
          <?php echo the_title();?><br>
           <?php echo get_the_excerpt();?>

        </div>
        <div class="btn_prod"> <a href="<?php the_permalink();?>">>> mais detalhes</a></div>
      </div>

            <?php
            endforeach;
            // Reset Query
            wp_reset_query();
            ?>
      
    </div>
</div>
<br>
<br>
<div class="row">
  <div class="large-12 columns"><img src="<?php echo get_template_directory_uri();?>/img/banner_meio.jpg"></img></div>
</div>
<br>
<br>

<div class="row">
  <?php
    global $wp_query;
    $args = array_merge( $wp_query->query_vars, array( 'post_type' => 'banners' ) );
    query_posts( $args );
    $i = 0;
  ?>
  <?php while ( have_posts() ) : the_post();?>
  <?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
      <div class="large-4 columns pics_pq"><a href="#"><img src="<?php echo $banner[0];?>"></img></a></div>
    <?php
    $i++;
    endwhile;
    // Reset Query
    wp_reset_query();
  ?>
 <!--  <div class="large-4 columns pics_pq"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/banner1.png"></img></a></div>
  <div class="large-4 columns pics_pq"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/banner2.png"></img></a></div>
  <div class="large-4 columns pics_pq"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/banner3.png"></img></a></div> -->
</div>
<br>
<div class="fundo_rodape">
  <div class="row">
    <div class="large-3 columns tit_rodape">INSTITUCIONAL<br>
      <div class="menu_rodapde">
        quem somos<br>
        novidades<br>
        fornecedores<br>
        showroom
      </div>
    </div>
    <div class="large-3 columns tit_rodape">ATENDIMENTO
      <div class="menu_rodapde">
        telefones: (11) 3228-2525 | 3326-6606<br>
        fax: (11) 3227-4737<br>
        segunda à sexta: 8h00 ás 18h00
      </div>
    </div>
    <div class="large-3 columns tit_rodape">LOCALIZAÇÃO
      <div class="menu_rodapde">
        Av. Senador Queirós, 305 - Centro<br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.8119665768045!2d-46.63534418502263!3d-23.539264484693838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58579695bf15%3A0xa8974e85948b5340!2sAv.+Sen.+Queir%C3%B3s%2C+305+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01026-001!5e0!3m2!1spt-BR!2sbr!4v1491833597989" width="200" height="116" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="large-3 columns tit_rodape">CADASTRE-SE
      <div class="menu_rodapde">
        Fique por dentro das nossas novidades<br><br>
        <img src="<?php echo get_template_directory_uri();?>/img/news.png"></div>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?> 