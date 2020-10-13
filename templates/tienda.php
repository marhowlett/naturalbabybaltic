<?php
    /* Template Name: Tienda */ 
    get_header();
?>
<section id="tienda" class="template-section">
    
       
          
      
       
            <div class="grid  invertido">
                <div class="col">
                <div class="somos">
                       <h2>¡Conoce nuestra</h2>
                   </div>
                <h1 class="soy">JOYERÍA NATURAL!</h1>
                   
                   
                   <p class="soy">Todos nuestros collares están hechos con ámbar báltico original. Una resina vegetal fosilizada que contiene ácido succínico, un analgésico natural que actúa en contacto con la piel de los bebés, aliviando los dolores en la etapa de dentición y contribuyendo a fortalecer el sistema inmunológico.
 </p>
                   <p class="soy">Además combinamos ámbar báltico con piedras semipreciosas al ser combinadas con el ámbar potencian sus beneficios para ofrecerte más salud y bienestar para toda la familia..</p>
                   <p> <strong> 
Te invitamos a conocer los beneficios de cada una de nuestras creaciones...</strong> </p>
                    
                </div>
                
                <div class="col fondo">
                  
                </div>
                


            </div>
           
        
         <?php echo do_shortcode('[product_category per_page="6" columns="2" orderby="menu_order title" order="ASC" category="ambar"]');
    ?>
   <div class="center">
      <a href="https://naturalbabybaltic.com/product-category/ambar/" class="btn">Ver más ►</a>
       </div>
    
    </section>

<?php 
    get_footer();
?>