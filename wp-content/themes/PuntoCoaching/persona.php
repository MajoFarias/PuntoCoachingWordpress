<?php  
/*
Template Name: Persona
*/
 ?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="eyecatcherIn">
    <div class="content">
     <div class="text">
      <h2><?php the_field('subtitle'); ?></h2>
      <h1><?php the_field('title'); ?></strong></h1>
      <p><?php the_field('description'); ?></p>
      </div>  
      <div class="degrade"></div>
      <img src="<?php the_field('image'); ?>" alt="">
    </div>
  </section>



 <section id="Info">
 	
    <div class="content">

	<?php if( have_rows('talleres') ): ?>
    <?php while( have_rows('talleres') ): the_row();

        $name = get_sub_field('name');
        $text = get_sub_field('text');
        $icon = get_sub_field('icon');
     ?>

      <article>
        <div class="content">
          <i class="<?php echo $icon; ?>"></i>
          <h4><?php echo $name; ?></h4>
          <p><?php echo $text; ?></p>
        </div>  
      </article>

	
	<?php endwhile; else: ?>
	<h1>no hay post</h1>
	<?php endif; ?> 
      
    </div>


</section>


<section id="resume">
 <div class="content">
   <article   style="background: url('<?php the_field('imagelearning'); ?>');">  
   </article>
   <article>

	<?php if( have_rows('learning') ): ?>
    <?php while( have_rows('learning') ): the_row();

        $title = get_sub_field('title');
        $text = get_sub_field('text');
     ?>

     <div>
     <h2><?php echo $title; ?></h2>
     <?php echo $text; ?>
	</div>

	<?php endwhile; else: ?>
	<h1>no hay post</h1>
	<?php endif; ?> 
     

    <p class="btnContent">
      <a href="<?php the_field('link'); ?>">
      	<button class="btnColor btn-1 btn-1d">INSCRÍBETE</button>
      </a>
    </p> 
   
   </article>
  </div> 
</section>

<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 



<?php get_footer(); ?>
