<?php 
/** Template Name: Home */
get_header(); 
?>
<main id="main" data-barba="container" data-barba-namespace="home" class="home no-mt" bg-color="white">
  <section class="relative mt6 overflow-x-hidden">
    <div class="container home-starter">
      <?php the_field('home_starter');?>
      <div class="home-cta-starters mt3 flex flex-column justify-center w-100 align-center">

      <?php $link = get_field('link');
        if ($link):
          $link_target =  $link['target'] ? $link['target'] : '_self'; ?>

        <a  target=<?php echo esc_attr( $link_target ); ?> href=<?php echo esc_url($link['url']) ;?> class="main-cta has-gradient w-max center no-deco">
          <p><?php echo esc_attr($link['title']) ;?></p>
        </a>

     
        <?php endif;?>
        <!-- <a class="main-cta bg-grey mt3 w-max center">
          <p class="white">Crypto compliance in Latam &#128640;</p>
        </a> -->
      </div>
    </div>    
  </section>

<div class="absolute top-0 left-0 w-100 h-100 pointers-none overflow-x-hidden">
  <!-- <div class="absolute w-100 h-30 gradients-container left-0 bottom-0"></div> -->
  <?php // get_template_part('template-parts/content/home-gradients'); ?>
</div>



  <?php get_template_part('template-parts/reusable-content'); ?>



 


 
</main><!-- #main & End Barba Container-->

<?php get_footer();?>



<!-- Pendientes:
img gif -> Jueves am [done]
img new lang -> Jueves am [done]
img rocket -> Jueves am [done]
new icons -> Jueves am [done]
mobile -> Viernes/Sabado
gradients -> pending to do?
light/dark -> Viernes/Sábado [done]
loader animation
 -->
