<?php

add_action('add_meta_boxes', 'add_products_Stock_meta');
	    function add_products_Stock_meta(){
	        add_meta_box('products_Stock', 'Inventory', 'dislpay_products_Stock_meta', array('products'), 'normal', 'high');
	    }
	    function dislpay_products_Stock_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'SP_meta_box_nonce', 'meta_box_nonce' );
	        $inStock_radio_txt 	 = isset( $values['inStock_radio'] ) ? esc_attr( $values['inStock_radio'][0] ) : '';
	        ?>
			<div class="meta-wrapper">
			  <p><input type="radio" class="radio" name="inStock_radio" value="in_stock" checked<?php checked( $inStock_radio_txt, 'in_stock' ); ?>> In Stock</p>
			  <p><input type="radio" class="radio" name="inStock_radio" value="out_stock" <?php checked( $inStock_radio_txt, 'out_stock' ); ?>> Out of Stock</p>
			  <p><input type="radio" class="radio" name="inStock_radio" value="back_order" <?php checked( $inStock_radio_txt, 'back_order' ); ?>> Back Order</p>
			</div>
	        <?php
	    }
	    // end of dislpay_products_Stock_meta

	    add_action('add_meta_boxes', 'add_products_details_meta');
	    function add_products_details_meta(){
	        add_meta_box('products_details', 'Product Details', 'dislpay_products_Details_meta', array('products'), 'normal', 'high');
	    }
	    function dislpay_products_Details_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        $product_price_txt 	 = isset( $values['product_price_txt'] ) ? esc_attr( $values['product_price_txt'][0] ) : '';
	        $product_sku_txt 	 = isset( $values['product_sku_txt'] ) ? esc_attr( $values['product_sku_txt'][0] ) : '';
	        $product_weight_txt 	 = isset( $values['product_weight_txt'] ) ? esc_attr( $values['product_weight_txt'][0] ) : '';
	        ?>
	        <div class="meta-wrapper">
			  <p>
			  	<label for="product_price_txt">Price</label>
			  	<input type="text" name="product_price_txt" id="product_price_txt" class="input-text" placeholder="$699.99" value="<?php echo $product_price_txt; ?>">
			  </p>
			  <p>
			  	<label for="product_sku_txt">SKU Number</label>
			  	<input type="text" name="product_sku_txt" id="product_sku_txt" class="input-text" placeholder="FP-SPACKMINI-SP-SAMPLE" value="<?php echo $product_sku_txt; ?>">
			  </p>
			  <p>
			  	<label for="product_weight_txt">Weight</label>
			  	<input type="text" name="product_weight_txt" id="product_weight_txt" class="input-text" placeholder="3.0000 lbs" value="<?php echo $product_weight_txt; ?>">
			  </p>
			  <p>
			  	<label for="product_specs_txt">Product Specification</label>
			  	<?php $product_editor_specs =  get_post_meta($_GET['post'], 'product_spec_editor' , true ) ; wp_editor( htmlspecialchars_decode($product_editor_specs), 'product_specs_txt', $settings = array('textarea_name'=>'product_specs_txt') ); ?>
			  </p>
			</div>
	        <?php
	    }
	    // end of dislpay_products_Details_meta

	    add_action( 'save_post', 'Products_meta_box_save' );
	    function Products_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'SP_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();

	        if( isset( $_POST['inStock_radio'] ) )
	            update_post_meta( $post_id, 'inStock_radio', wp_kses( $_POST['inStock_radio'], $allowed ) );

	        if( isset( $_POST['product_price_txt'] ) )
	            update_post_meta( $post_id, 'product_price_txt', wp_kses( $_POST['product_price_txt'], $allowed ) );

	        if( isset( $_POST['product_sku_txt'] ) )
	            update_post_meta( $post_id, 'product_sku_txt', wp_kses( $_POST['product_sku_txt'], $allowed ) );

	        if( isset( $_POST['product_weight_txt'] ) )
	            update_post_meta( $post_id, 'product_weight_txt', wp_kses( $_POST['product_weight_txt'], $allowed ) );

	        if (!empty($_POST['product_specs_txt']))
	        	$datta = htmlspecialchars($_POST['product_specs_txt']);
        		update_post_meta($post_id, 'product_spec_editor', $datta );
	    }
	    // end of Products_meta_box_save ~~~>