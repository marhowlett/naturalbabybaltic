<?php
/**
 * The template for displaying the footer
 *
 */

if ( woodmart_get_opt( 'collapse_footer_widgets' ) ) {
	woodmart_enqueue_js_script( 'footer' );
}
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
	
	
	<!-- FOOTER -->
	<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) : ?>
	

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
                   
                    <a href="https://naturalbabybaltic.com/tienda/" class="lap"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shop.png" alt="Logo">
                     <p><b>Tienda</b></p></a>
                    <a href="https://naturalbabybaltic.com/tienda/" class="movil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopmovil.png" alt="Logo">
                  
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
            <div class="center">
                <a href="https://naturalbabybaltic.com/aviso-de-privacidad/" ><p><b>Aviso de Privacidad</b></p></a>
            </div>
        </div>
    </footer>

	<?php endif ?>
<?php endif ?>
</div> <!-- end wrapper -->
<div class="wd-close-side<?php echo woodmart_get_old_classes( ' woodmart-close-side' ); ?>"></div>
<?php do_action( 'woodmart_before_wp_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>