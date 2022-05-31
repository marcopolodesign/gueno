<?php if( have_rows('reusable_content') ): while ( have_rows('reusable_content') ) : the_row();

  if( get_row_layout() == 'logo_gallery' ): ?>
    <section class="home-clients mt5 will-animate mb6">
        <h2 class="f3 tc mt3 fw3 lh-copy main-color"><?php the_sub_field('title');?></h2>

        <div class="logos-container w-50-ns center mt3">
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


  <?php elseif( get_row_layout() == 'items' ): ?>
    <section class="bg-white relative z-5 w-100 pv6 mp-items-container container relative will-animate">
      <div class="mp-items-inner-c z-5">
       <?php the_sub_field('items_title');?>
    

        <div class="mp-items-inner flex column-mobile justify-between items-stretch mt5">
        <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row();?>
          <div class="mp-item smooth-t pa3 mh3-ns">
            <img class="icon db ml-0 mr-auto" src="<?php the_sub_field('icon');?>">
            <h3 class="f4 black mv2"><?php the_sub_field('title');?></h3>
            <?php the_sub_field('text');?>
          </div>
   
          <?php endwhile; endif; ?>
      </div>

      <div class="absolute top-0 mp-items-bg z--1 flex align-center w-100 left-0">
        <?php get_template_part('template-parts/content/gradient-bg'); ?>
      </div>
      </div>
    </section>

  <?php elseif( get_row_layout() == 'text_image' ): 

    $isReverse = get_sub_field('reverse'); 
    $container = "";
    if ($isReverse): 
      $isReverse = 'row-reverse'; 
    endif; ?>

    <section class="mp-text-image mt5 flex jic column-reverse-mobile will-animate <?php echo $isReverse; echo $container; ?>">
      <div class="w-40-ns m-auto">
        <?php the_sub_field('text'); ?>


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

      <div class="w-50-ns flex bg-main-gradient pv5-ns" style="background: <?php the_sub_field("image_bg");?>">
        <img class="pa5" src="<?php the_sub_field('image');?>" class="m-auto">
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
          $container = "";
          if ($isReverse): 
            $isReverse = 'column-reverse'; 
      endif; ?>


    <div class="mp-block-full-image-text mv6 container flex flex-column <?php echo $isReverse;?>">
      <?php the_sub_field('text');?>
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
       <img class="mt4" src="<?php the_sub_field('image');?>">
      <?php endif; ?>
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



<?php endif; endwhile; endif; wp_reset_postdata(); ?>

