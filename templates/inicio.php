<?php
    /* Template Name: Inicio */ 
    get_header();
?>
    <section id="banner" class="template-section">
        <div class="bannernosotras">
          <h1>Nosotras</h1>
          <p class="somos">Somos Arely, Samantha y Maia <br>
creadoras de K´UUB Natural Baby Baltic</p>
        <p>Te invitamos a conocer la historia de<br>
nuestro proyecto familiar<br>
K´UUB Natural</p>
       
         </div> 
          <div class="center">
           <a href="http://proservet.mx/maquila/" class="btn">SABER MÁS ►</a>
           </div>
    </section>
    
      <section id="joyeria" class="template-section">
 <h2>¡Conoce nuestra joyería!</h2>
 <p>Todos nuestros collares están hechos con ámbar báltico original (ideal para aliviar las molestias de la dentición en los bebés), combinado con piedras semipreciosas para agregar a nuestras creaciones todos los beneficios que estas gemas ofrecen para
la salud y bienestar de toda la familia.</p>
 <p>Te invitamos a conocer todas nuestras combinaciones</p>
  <?php echo do_shortcode('[vc_row][vc_column][woodmart_categories orderby="date" order="ASC" style="carousel" categories_design="alt" categories_with_shadow="enable" spacing="30" slides_per_view="3" ids="" number="3"][/vc_column][/vc_row]');
    ?>
     <div class="center">
      <a href="http://proservet.mx/maquila/" class="btn">IR A LA TIENDA ►</a>
       </div>
</section>
 <section id="blog" class="template-section">
 <h2>Nuestro Blog</h2>

  <?php echo do_shortcode('[vc_row][vc_column][woodmart_categories orderby="date" order="ASC" style="carousel" categories_design="alt" categories_with_shadow="enable" spacing="30" slides_per_view="3" ids="" number="3"][/vc_column][/vc_row]');
    ?>
     <div class="center">
      <a href="http://proservet.mx/maquila/" class="btn">VER TODAS LAS PUBLICACIONES ►</a>
       </div>
</section>
<?php include 'contacto.php'; ?>
<?php 
    get_footer();
?>