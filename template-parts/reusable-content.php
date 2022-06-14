<?php if( have_rows('reusable_content') ): while ( have_rows('reusable_content') ) : the_row();

  if( get_row_layout() == 'logo_gallery' ): ?>
    <section class="home-clients mv5 will-animate">
        <h2 class="f3 tc mt3 fw3 lh-copy main-color"><?php the_sub_field('title');?></h2>

        <div class="logos-container w-70-ns center mt3">
        <?php if( have_rows('logo_container') ): while ( have_rows('logo_container') ) : the_row();
          $images = get_sub_field('logo');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if( $images ): ?>
              <ul class="flex jic list-none relative">
                  <?php foreach( $images as $image_id ): ?>
                      <li class="mh3 flex">
                          <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                      </li>
                  <?php endforeach; ?>
              </ul>
          <?php endif; endwhile; endif;?>
        </div>
    </section>

  <?php elseif( get_row_layout() == 'cards' ): ?>
    <section class="cards container mt5 will-animate">
      <div class="cards-container">
      <?php if( have_rows('cards') ): while ( have_rows('cards') ) : the_row();?>
      
        <div class="card relative pa4">
          <div class="card-inner-bg bg-main-color" style="background-color: <?php the_sub_field('card_background');?>"></div>
          <div class="card-content">
              <div class="flex jic">
                <h1 class="main-dark-color f0"><?php the_sub_field('card_title');?></h1>
                <h2 class="white f2">0<?php echo get_row_index();?>/</h2>
              </div>

              <?php the_sub_field('card_content'); ?>
            
          </div>
        </div>

        <?php endwhile; endif;?>
      </div>
    </section>


  <?php elseif( get_row_layout() == 'items' ): 
      $aditional = get_sub_field('aditional');
      ?>
    <section class="relative z-5 w-100 pb3 mp-items-container container relative will-animate <?php echo $aditional;?>">
      <div class="mp-items-inner-c z-5">
       <?php the_sub_field('items_title');?>
    

        <div class="mp-items-inner flex flex-wrap column-mobile justify-center mt5">
        <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row();?>
          <div class="mp-item smooth-t pt4 pb3 pl3 pr4 mh2-ns mb3 w-25-ns">
            <img class="icon db ml-0 mr-auto mb4" src="<?php the_sub_field('icon');?>">
            <h3 class="f4 black mv2 fw4"><?php the_sub_field('title');?></h3>
            <?php the_sub_field('text');?>
          </div>
   
          <?php endwhile; endif; ?>
      </div>

      <!-- <div class="absolute top-0 mp-items-bg z--1 flex align-center w-100 left-0">
        <?php get_template_part('template-parts/content/gradient-bg'); ?>
      </div> -->
      </div>
    </section>

  <?php elseif( get_row_layout() == 'text_image' ): 

    $container = 'container-left';
    $containerImage = 'container-right';
    $isReverse = get_sub_field('reverse'); 
    if ($isReverse): 
      $isReverse = 'row-reverse'; 
      $container = 'container-right';
      $containerImage = 'container-left img-container';
    endif; ?>

    <section class="mp-text-image mv5 flex jic column-reverse-mobile will-animate <?php echo $isReverse; echo $container; ?>">
      <div class="w-40-ns m-auto">
        <?php the_sub_field('text'); ?>

        <?php if( have_rows('item_list') ): while ( have_rows('item_list') ) : the_row();?>
        <div class="flex items-center mb4">
          <?php if (get_sub_field('icon')):?>
              <div class="list-item-icon">
                <img src=<?php the_sub_field('icon');?>>
              </div>
          <?php endif;?>
          <div class="flex flex-column ml4 white">
            <h3 class="white lc-black mb1"><?php the_sub_field('title');?></h3>
            <div class="lc-secondary"><?php the_sub_field('description');?></div>
          </div>
        </div>
    
      <?php endwhile; endif; ?>


        <?php 
          $link = get_sub_field('cta');
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
               <a href="<?php echo esc_url( $link_url ); ?>" class="main-cta flex has-gradient mt4 no-deco">
                <p><?php echo esc_html( $link_title ); ?></p>
              </a>
        <?php endif; ?>
       
       
      </div>

      <div class="w-50-ns flex bg-main-gradient pv5-ns container <?php echo $containerImage;?>" style="background: <?php the_sub_field("image_bg");?>">
        <img class="" src="<?php the_sub_field('image');?>" class="m-auto">
      </div>
    </section>


  <?php elseif( get_row_layout() == 'numbers' ): ?>

    <section class="mp-data-numbers flex column-mobile jic container mv6 will-animate">
      <?php if( have_rows('number_item') ): while ( have_rows('number_item') ) : the_row();?>
      <div class="flex flex-column jic">
        <h1 class="f0 tc main-color"><?php the_sub_field('number');?></h1>
      <h2 class="ml4 tc f4"><?php the_sub_field('concept');?></h2>
      </div>
    
      <?php endwhile; endif; ?>
    </section>

    <?php elseif( get_row_layout() == 'text_image_full_screen_image' ): 

      $isReverse = get_sub_field('reverse'); 
      $aditional = get_sub_field('aditional');
          $container = "";
          if ($isReverse): 
            $isReverse = 'column-reverse'; 
      endif; ?>


    <div class="mp-block-full-image-text relative mv5 pv5  flex flex-column <?php echo $isReverse;?> <?php echo $aditional;?>">
    <div class="relative z-2 container">
      <div class="w-60-ns center">
        <?php the_sub_field('text');?>
     </div>
     <?php if (get_sub_field('item_list')): ?>
        <div class="flex flex-wrap column-mobile justify-center">
          <?php if( have_rows('item_list') ): while ( have_rows('item_list') ) : the_row();?>
            <div class="flex flex-column mb4 w-30-ns mh3-ns pr3 individual-item">
              <?php if (get_sub_field('icon')):?>
                  <div class="list-item-icon">
                    <img src=<?php the_sub_field('icon');?>>
                  </div>
              <?php endif;?>
              <div class="flex flex-column mt2 black pr5">
              <h3 class="lc-black mb1"><?php the_sub_field('title');?></h3>
              <div class="lc-secondary lh1"><?php the_sub_field('description');?></div>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      <?php endif;?>

      </div>
      <?php $link = get_sub_field('cta');
        if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a href="<?php echo esc_url( $link_url ); ?>" class="main-cta has-gradient mt4 no-deco w-max center mt3">
            <p><?php echo esc_html( $link_title ); ?></p>
          </a>
        <?php endif; ?>

      <?php if (get_sub_field('image')): ?>
        <div class="relative z-2 mv4 container <?php the_sub_field('image_width');?>">
          <img class="" src="<?php the_sub_field('image');?>">
        </div>
       <?php elseif (get_sub_field('image_carrousel')): ?>
              <div class="relative animated-images-container <?php the_sub_field('image_width');?>">
                <?php if( have_rows('image_carrousel') ): while ( have_rows('image_carrousel') ) : the_row();?>
                  <div class="relative z-2 mv4 container ">
                  <img src="<?php the_sub_field('image');?>">
                  </div>
                <?php  endwhile; endif; ?>
              </div>
      <?php endif; ?>
      <div class="absolute-cover bg-color-fs" style="background: <?php the_sub_field('background_color');?>; height: 70%; top: unset; bottom: 0;"></div>
    </div>


    <?php elseif( get_row_layout() == 'full_screen_image' ): ?>
      <div class="mp-block-full-image mv6 container">
        <img src="<?php the_sub_field('image');?>">
      </div>

    <?php elseif( get_row_layout() == 'page_starter' ): ?>
      <section class="relative mt5">
        <div class="container home-starter">
          <?php the_sub_field('text');?>
          <div class="home-cta-starters mt3 flex flex-column justify-center w-100 align-center">
          <?php $link = get_sub_field('cta');
          if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url( $link_url ); ?>" class="main-cta has-gradient mt4 no-deco w-max center mt3">
              <p><?php echo esc_html( $link_title ); ?></p>
            </a>
          <?php endif; ?>
          </div>
        </div>
      </section>


    <?php elseif( get_row_layout() == 'map') : ?>
      <section class="map-container will-animate pt5">
        <div class="map-content relative ">
          <h2 class="fw4 f1 tc white lc-black measure center w-50-ns relative z-2" style="margin-bottom: -60px"><?php the_sub_field('title');?></h1>
        
          <img style="max-width: 50vw" class="db center" src="/wp-content/uploads/2022/05/Frame-7.png">
      
          <div class="flex justify-end items-center absolute-center z-4" style="transform: translateX(-50%) !important;bottom: 0;top: unset !important;" >
            <img class="db center" src="<?php the_sub_field('api_image');?>">
          </div>

          <div class="map-texture-1 absolute top-0">
            <?php get_template_part('template-parts/content/map-texture-1'); ?>
          </div>

          <div class="map-texture-2 absolute bottom-0">
            <?php get_template_part('template-parts/content/map-texture-1'); ?>
          </div>

          <div class="absolute w-100 h-30 z-5 gradients-container left-0 bottom-0"></div>

        </div>
      </section>


      <?php elseif( get_row_layout() == "page_ender") : ?>
        <section class="container mb6 will-animate">
          <div class="mp-banner-cta bg-secondary-gradient pa4 gueno-br relative smooth-t overflow-hidden">
            <a href="<?php the_sub_field('link');?>" class="relative db z-2 no-deco">
              <div class="tc white f1"><?php the_sub_field('title');?></div>
              <div class="flex justify-center items-center mt3">
                <div class="main-cta bg-white no-deco tc m-auto">
                  <p  class="main-dark-color tc"><?php the_sub_field('button_text');?></p>
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

<?php endif; endwhile; endif; wp_reset_postdata(); ?>

