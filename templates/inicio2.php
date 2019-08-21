<?php
    /* Template Name: Inicio2 */ 
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
           <a href="https://naturalbabybaltic.com/nosotras/" class="btn">SABER MÁS ►</a>
           </div>
    </section>
    
      <section id="joyeria" class="template-section">
 <h2>¡Conoce nuestra joyería!</h2>
 <p>Todos nuestros collares están hechos con ámbar báltico original (ideal para aliviar las molestias de la dentición en los bebés), combinado con piedras semipreciosas para agregar a nuestras creaciones todos los beneficios que estas gemas ofrecen para
la salud y bienestar de toda la familia.</p>
 <p>Te invitamos a conocer todas nuestras combinaciones</p>
  <?php echo do_shortcode('[vc_row][vc_column][products columns="3" orderby="include" order="ASC" ids="24, 28, 32, 33, 34, 35"][/vc_column][/vc_row]');
    ?>
     <div class="center">
      <a href="https://naturalbabybaltic.com/tienda/" class="btn">IR A LA TIENDA ►</a>
       </div>
</section>
 <section id="blog" class="template-section">
 <h2>Nuestro Blog</h2>

  <?php echo do_shortcode('[woodmart_blog items_per_page="2" pagination="more-btn" blog_design="masonry" blog_spacing="30" img_size="600x400" blog_columns="2" parts_title="1" parts_meta="1" parts_text="1" parts_btn="1" lazy_loading="no"]');
    ?>
     <div class="center">
      <a href="https://naturalbabybaltic.com/blog/" class="btn">VER TODAS LAS PUBLICACIONES ►</a>
       </div>
</section>
<?php include 'contacto.php'; ?>
<?php 
    get_footer();
?>