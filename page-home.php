<?php get_header(); ?>
<main id="main" data-barba="container" data-barba-namespace="home" class="home no-mt" bg-color="white">
  <section class="relative mt6 overflow-x-hidden">
    <div class="container home-starter">
      <?php the_field('home_starter');?>
      <div class="home-cta-starters mt3 flex flex-column justify-center w-100 align-center">
        <a class="main-cta has-gradient w-max center">
          <p>Start now for Free</p>
        </a>
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


  <section class="container mb6 will-animate">
    <div class="mp-banner-cta bg-secondary-gradient pa4 gueno-br relative smooth-t overflow-hidden">
      <a href="#contacto" class="relative db z-2 no-deco">
        <h1 class="tc white f1">Expand fast,<br>without risk.</h1>
        <div class="flex justify-center items-center mt3">
          <div class="main-cta bg-white no-deco tc m-auto">
            <p  class="main-dark-color tc">Let's talk</p>
          </div>
        </div>
      </a>
      <div class="absolute-cover bg-main-gradient o-0 smooth-t bg-center no-repeat smooth-t gueno-br"></div>

      <div class="absolute-cover bg-center no-repeat smooth-t">
        <svg width="100%" height="320" viewBox="0 0 1238 320" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M107.413 237.339L10.4878 140.414V141.828L105.999 237.339H107.413ZM-105.025 237.339L-9.51218 141.825V140.411L-106.44 237.339H-105.025ZM-106.439 257.339L-105.025 257.339L-9.5122 352.851L-9.5122 354.265L-106.439 257.339ZM105.998 257.339H107.412L10.4878 354.263V352.849L105.998 257.339Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M106.777 2.85273L9.85039 -94.0737V-92.6595L105.363 2.85273H106.777ZM-105.661 2.85274L-10.1496 -92.6586V-94.0728L-107.075 2.85274H-105.661ZM-107.075 22.8527H-105.661L-10.1496 118.364V119.778L-107.075 22.8527ZM105.362 22.8527H106.777L9.85037 119.779V118.365L105.362 22.8527Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M341.266 3.48823L244.339 -93.4382V-92.024L339.851 3.48823H341.266ZM128.825 3.48824L224.339 -92.026V-93.4402L127.411 3.48824H128.825ZM127.414 23.4882H128.828L224.339 118.999V120.413L127.414 23.4882ZM339.848 23.4882H341.262L244.339 120.412V118.997L339.848 23.4882Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M1120.85 73.9255L1217.78 170.85V169.436L1122.27 73.9255H1120.85ZM1333.29 73.9255L1237.78 169.439V170.853L1334.7 73.9255H1333.29ZM1334.7 53.9255L1333.29 53.9255L1237.78 -41.587L1237.78 -43.0012L1334.7 53.9255ZM1122.27 53.9255H1120.85L1217.78 -42.9988V-41.5846L1122.27 53.9255Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M1121.49 308.411L1218.41 405.338V403.924L1122.9 308.411H1121.49ZM1333.93 308.411L1238.41 403.923V405.337L1335.34 308.411H1333.93ZM1335.34 288.411H1333.92L1238.41 192.9V191.486L1335.34 288.411ZM1122.9 288.411H1121.49L1218.41 191.485V192.899L1122.9 288.411Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M886.999 307.776L983.925 404.702V403.288L888.413 307.776H886.999ZM1099.44 307.776L1003.92 403.29V404.704L1100.85 307.776H1099.44ZM1100.85 287.776H1099.44L1003.92 192.265V190.851L1100.85 287.776ZM888.416 287.776H887.002L983.925 190.853V192.267L888.416 287.776Z" fill="white"/>
        </svg>
      </div>
    </div>
  </section>
 


 
</main><!-- #main & End Barba Container-->

<?php get_footer();?>



<!-- Pendientes:
header animation
img carrousel logos code
img gif
new icons
mobile
light/dark
 -->
