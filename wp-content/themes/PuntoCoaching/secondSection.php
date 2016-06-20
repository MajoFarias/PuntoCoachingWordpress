<section id="secondSection">
    <div class="content">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <article>
          <div id="video">
            <img src="<?php the_field('image-2'); ?>" alt="">
          </div>

          <h2><?php the_field('title-2'); ?></strong></h2>
          <h4><?php the_field('subtitle-2'); ?></h4>
          <p>
            <?php the_field('extract'); ?>
          </p>
          <p class="btnContent">
           <button class="btnColor btn-1 btn-1d">CONOCE MÁS</button>
          </p> 
        </article>
       
       
        <article>
          <div>
            <i class="flaticon-time-1" aria-hidden="true"></i>
            <h4>CALENDARIO</h4>
          </div>  
    
          <div id="wrapper" class="slideCalendar">
           <div id="content" style="overflow:auto;
       height: 520px;">

          <?php if( have_rows('calendar') ): ?>
          <?php while( have_rows('calendar') ): the_row();

            $day = get_sub_field('day');
            $month = get_sub_field('month');
            $year = get_sub_field('year');
            $time = get_sub_field('time');
            $name = get_sub_field('name');


          ?>

               <a href="#" class="element">
                <div class="head">
                  <i></i>
                  <span><strong><?php echo $day; ?><br> <?php echo $month; ?></strong><br><?php echo $year; ?></span>
                  <i></i>
                </div>
                <div class="text">
                  <h1><?php echo $name; ?></h1>
                  <h3> Duración: <strong><?php echo $time; ?></strong></h3>
                </div>
               </a>
               
          <?php endwhile; else: ?>
          <h1>no hay post</h1>
          <?php endif; ?> 

            </div>

          </div>
            
        <div class="degradate"></div>
        
        </article>

    <?php endwhile; else: ?>
    <h1>no hay post</h1>
    <?php endif; ?> 

    </div>
    
    <div class="controls">
       <a class="btn-carousel" id="scrollUp" href="#">
        <i class="flaticon-arrows-2"></i>
      </a>
      <a class="btn-carousel" id="scrollDown" href="#">
        <i class="flaticon-arrows-3"></i>
      </a>
    </div>  
  
  </section>