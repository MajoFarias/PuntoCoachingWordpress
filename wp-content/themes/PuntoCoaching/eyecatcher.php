


<section id="eyecatcher">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="content">
      <h2><?php the_field('subtitle'); ?></h2>
      <h1><?php the_field('title'); ?></h1>
      <h3><?php the_field('phrase'); ?></h3>
      <p class="btnContent">
          <button class="btnColor2 btn-1 btn-1c">CONOCE MÁS</button>
        </p> 
       <i class="flaticon-mouse"></i> 
      <div class="degrade"></div>
      <img src="<?php the_field('image'); ?>" alt="">
    </div>
<?php endwhile; else: ?>
<?php endif; ?> 

  </section>

