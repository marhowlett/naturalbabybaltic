<?php
    /* Template Name: Inicio */ 
    get_header();
?>
 <section id="banner" class="template-section">
        <?php echo do_shortcode('[rev_slider alias="jewelry1"]');
    ?>
          
    </section>
    <section id="catalogo" class="template-section">
       <div class="contenedor">
          <div class="grid">
         
          <div class="col "><div class="tooltip2 colcat1"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/ambar.jpg" alt="somos">
              <span class="tooltiptext"><div class="center"><h3 class="white"> Goza de los beneficios que el Ámbar Báltico te ofrece a ti y tu familia. </h3><a href="https://naturalbabybaltic.com/tienda-ejemplos/"  class="btn"> COMPRAR</a></div></span>
          </div><h2>ÁMBAR</h2></div>
          <div class="col "><div class="tooltip2 colcat2"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/japa.jpg" alt="somos">
              <span class="tooltiptext"><div class="center"><h3 class="white">Las cuentas de Mala se utilizan para establecer intenciones, meditar y para ayudarte a manifestar tus sueños.</h3><a href="https://naturalbabybaltic.com/japa"  class="btn"> COMPRAR</a></div></span>
          </div><h2>JAPA MALA</h2></div>
           
      </div>
  </div>
          
           
       
        
    </section>
    <section id="temporada" class="template-section">
    <a href="https://naturalbabybaltic.com/product-category/productos-de-temporada/">
    <div class="contenedor">
        <div class="grid">
            <div class="col"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/mika.png" alt="somos"></div>
            <div class="col"><h2>PRODUCTOS de <span>TEMPORADA</span></h2></div>
        </div>
    </div>
    </a>
</section>
    


<section id="blog" class="template-section">
<div class="contenedor">
 <h2>¡Únete a nuestra comunidad!</h2>

  <?php echo do_shortcode('[elfsight_instagram_feed id="1"]');
    ?>
     </div>
</section>


<?php 
    get_footer();
?>