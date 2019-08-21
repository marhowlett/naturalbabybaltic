<?php
/**
 * The template for displaying the footer
 *
 */
?>
<?php if ( woodmart_needs_footer() ): ?>
	<?php if ( ! woodmart_is_woo_ajax() ): ?>
		</div><!-- .main-page-wrapper --> 
	<?php endif ?>
		</div> <!-- end row -->
	</div> <!-- end container -->
	<?php
		$page_id = woodmart_page_ID();
		$disable_prefooter = get_post_meta( $page_id, '_woodmart_prefooter_off', true );
		$disable_footer_page = get_post_meta( $page_id, '_woodmart_footer_off', true );
		$disable_copyrights_page = get_post_meta( $page_id, '_woodmart_copyrights_off', true );
	?>
	<?php if ( ! $disable_prefooter && woodmart_get_opt( 'prefooter_area' ) ): ?>
		<div class="woodmart-prefooter">
			<div class="container">
				<?php echo do_shortcode( woodmart_get_opt( 'prefooter_area' ) ); ?>
			</div>
		</div>
	<?php endif ?>
	
	<!-- FOOTER -->
	
	<?php include 'templates/contacto.php'; ?>
	
	 <footer  class="template-section">
        

        <div class="contenedor">


            <div class="grid">

                <div class="col3">
                   
                   <a href="https://naturalbabybaltic.com/cart" class="lap"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cart.png" alt="Logo">
                        <p><b>Mi carrito</b></p></a>
                   <a href="https://naturalbabybaltic.com/cart" class="movil"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cartmovil.png" alt="Logo">
                    <p><b>Mi carrito</b></p></a>
                  

                </div>
                <div class="col3">
                   
                    <a href="https://enviospaqueteexpress.com/tienda/" class="lap"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shop.png" alt="Logo">
                     <p><b>Tienda</b></p></a>
                    <a href="https://enviospaqueteexpress.com/tienda/" class="movil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopmovil.png" alt="Logo">
                  
 <p><b>Tienda</b></p></a>
                </div>
                 <div class="col3">
                   
                   <a href="https://naturalbabybaltic.com/wishlist/" class="lap"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heart.png" alt="Logo">
                    <p><b>Lista de deseos</b></p></a>
                   <a href="https://naturalbabybaltic.com/wishlist/" class="movil"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heartmovil.png" alt="Logo">
                   <p><b>Lista de deseos</b></p></a>

                </div>
                 <div class="col3">
                   
                    <a href="https://naturalbabybaltic.com/my-account/" class="lap"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mi cuenta.png" alt="Logo">
                     <p><b>Mi cuenta</b></p></a>
                     <a href="https://naturalbabybaltic.com/my-account/" class="movil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mi cuentamovil.png" alt="Logo">
                  
 <p><b>Mi cuenta</b></p></a>
               
                 </div>
                


            </div>
        </div>
    </footer>
<?php endif ?>
</div> <!-- end wrapper -->
<div class="woodmart-close-side"></div>
<?php wp_footer(); ?>
</body>
</html>