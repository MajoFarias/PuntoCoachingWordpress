<?php  
/*
Template Name: Contacto
*/
 ?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!--**HEAD**-->   
 <section id="eyecatcher" class="eyecatcher-in">
    <?php if( have_rows('head') ): ?>
    <?php while( have_rows('head') ): the_row();
    $title = get_sub_field('title');
    $discriptionHead = get_sub_field('discriptionHead');
    $image = get_sub_field('image');
    ?>
     <div class="content two four">
        <div class="text"> 
          <h1><?php echo $title; ?></h1>
          <h3><?php echo $discriptionHead; ?></h3>
        </div>
        <div class="degrade"></div>
        <img src="<?php echo $image; ?>" alt="">
      </div>
    <?php endwhile; else: ?>
    <h1>no hay post</h1>
    <?php endif; ?>   
  </section>
  <!--**HEAD**-->  
  <section class="contact">
    <article class="contactFirst">
      <ul>
      <?php if( have_rows('dates') ): ?>
      <?php while( have_rows('dates') ): the_row();
      $direccion = get_sub_field('direccion');
      $link = get_sub_field('link');
      ?>
        <li><i class="flaticon-tool"></i>
        <strong>Dirección</strong> <br>
        <span><?php echo $direccion; ?></span>
        </li>
        <li>
        <i class="flaticon-note"></i><strong>Email</strong> <br><span><?php echo $direccion; ?>/span>
        </li>
        <li>
          <a href="<?php echo $direccion; ?>">
           <i class="flaticon-social"></i><strong>/Punto-Coaching</strong>
           </a> 
        </li>
        <?php endwhile; else: ?>
        <h1>no hay post</h1>
        <?php endif; ?> 
      </ul>
    </article>

  <article class="contactForm">
    <h2>Contáctanos</h2>
        <div class="row">
    

    <form class="col s12">
      <div class="row">
          <div class="input-field col s12 m12">
            <input id="nombre" type="text" class="validate">
            <label for="nombre">Nombre</label>
          </div>
          <div class="input-field col s12 m12">
            <input id="e-mail" type="text" class="validate">
            <label for="e-mail">E-mail</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="telefono" type="text" class="validate">
            <label for="telefono">Teléfono</label>
          </div>
          
           <div class="input-field col s12 m8">
            <input id="kindOf" type="text" class="validate">
            <label for="kindOf">Nombre del Curso o Taller</label>
          </div>
          
          <div class="input-field col s12 m12">
            <input id="comentarios" type="text" class="validate">
            <label for="comentarios">Comentarios</label>
          </div>
          
           <div class="col s12">
            <p class="btnContent btn-in btn-contact">
              <button class="btnColorZ btn-1 btn-1z">Enviar</button>
            </p>
          </div>

      </div>
      
    </form>
  </div>
  </article>
</section>

  <section class="contact-map">
    <div class="white"></div>
  <div class="map">
    <iframe src="<?php the_field('map'); ?>" width="100%" height="400"></iframe>
  </div>
  </section>

<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 
<?php get_footer(); ?>
