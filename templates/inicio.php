<?php
    /* Template Name: Inicio */ 
    get_header();
?>
 <section id="banner" class="template-section">
        
          <h2><strong>JOYAS</strong> hechas a<br>
mano con piedras<br>
y cristales <strong>NATURALES</strong></h2>
         <div class="bannernosotras">
          <p class="somos">Te invitamos a conocer la historia de nuestro <br>
          proyecto familiar K’uub Natural Baby Baltic</p>
       
         </div> 
          <div class="center">
           <a href="https://naturalbabybaltic.com/nosotras/" class="btn cafe">SABER MÁS ►</a>
           </div>
    </section>
    
     <section id="joyeria" class="template-section">
 <h2>¡Conoce nuestra joyería!</h2>
 <p>Todos nuestros collares son especiales, están diseñados de acuerdo a la necesidad o personalidad del niño o adulto. El ámbar se potencia en combinación con otros minerales y piedras semipreciosas.</p>
 <div class="invitamos">
 <p>Te invitamos a conocer todas nuestras combinaciones</p>
 </div>
 <hr class="derecha">
 <hr class="izquierda">
 
</section>
 <section id="joyeria" class="template-section">
<?php echo do_shortcode('[recent_products per_page="6" columns="2" orderby="date" order="DESC"]');
    ?>
     <div class="center">
      <a href="https://naturalbabybaltic.com/tienda-ejemplos/" class="btn">IR A LA TIENDA ►</a>
       </div>
</section>
<section id="blog" class="template-section">
<hr>
 <h2>Nuestro BLOG</h2>

  <?php echo do_shortcode('[woodmart_blog items_per_page="2" pagination="more-btn" blog_design="masonry" blog_spacing="30" parts_title="1" parts_meta="1" parts_text="1" parts_btn="1" lazy_loading="no" blog_columns="2"]');
    ?>
     <div class="center">
      <a href="https://naturalbabybaltic.com/blog/" class="btn">VER TODAS LAS PUBLICACIONES ►</a>
       </div>
</section>


<?php 
    get_footer();
?>