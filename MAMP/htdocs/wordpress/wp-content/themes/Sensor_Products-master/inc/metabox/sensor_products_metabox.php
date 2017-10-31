<?php
	add_action('add_meta_boxes', 'add_territory_meta');
	    function add_territory_meta(){
	        add_meta_box('territory', 'Territory', 'dislpay_territory_meta', array('homepage_slider', 'research_articles', 'video', 'applications', 'lenord_bauer', 'products', 'news', 'selling_tools', 'landing_pages', 'trade_shows', 'careers', 'services_post', 'testimonials', 'page', 'post'), 'normal', 'default');
	    }
	    function dislpay_territory_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'SP_meta_box_nonce', 'meta_box_nonce' );
	        $territory_radio_txt 	 = isset( $values['territory_radio'] ) ? esc_attr( $values['territory_radio'][0] ) : '';
	        ?>
			<div class="meta-wrapper">
			  <p><input type="radio" class="radio" name="territory_radio" value="in_territory" checked<?php checked( $territory_radio_txt, 'in_territory' ); ?>> In Territory</p>
			  <p><input type="radio" class="radio" name="territory_radio" value="out_territory" <?php checked( $territory_radio_txt, 'out_territory' ); ?>> Out of Territory</p>
			  <p><input type="radio" class="radio" name="territory_radio" value="none" <?php checked( $territory_radio_txt, 'none' ); ?>> None</p>
			</div>

	        <?php
	    }
	    // end of dislpay_territory_meta

	    add_action('add_meta_boxes', 'add_purchase_btn_meta');
	    function add_purchase_btn_meta(){
	        add_meta_box('purchase_btn', 'Shopping Cart Button', 'dislpay_purchase_btn_meta', array('homepage_slider', 'research_articles', 'video', 'applications', 'lenord_bauer', 'products', 'news', 'selling_tools', 'landing_pages', 'trade_shows', 'services_post', 'page', 'post'), 'normal', 'default');
	    }
	    function dislpay_purchase_btn_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        $show_cart_radio_txt 	 = isset( $values['show_hide_cart_btn'] ) ? esc_attr( $values['show_hide_cart_btn'][0] ) : '';
	        $shopping_cart_label 	 = isset( $values['shopping_cart_label'] ) ? esc_attr( $values['shopping_cart_label'][0] ) : '';
	        $shopping_cart_url 	 = isset( $values['shopping_cart_url'] ) ? esc_attr( $values['shopping_cart_url'][0] ) : '';
	        ?>
			<div class="meta-wrapper">
			  <p><input type="radio" class="radio" name="show_hide_cart_btn" value="show_cart_btn" checked<?php checked( $show_cart_radio_txt, 'show_cart_btn' ); ?>> Show Button</p>
			  <p><input type="radio" class="radio" name="show_hide_cart_btn" value="hide_cart_btn"<?php checked( $show_cart_radio_txt, 'hide_cart_btn' ); ?>> Hide Button</p>
			  <hr />
			  <p>
			  	<label for="shopping_cart_label">Button Label</label>
			  	<input type="text" name="shopping_cart_label" id="shopping_cart_label" class="input-text" placeholder="Example Cart Label" value="<?php echo $shopping_cart_label; ?>">
			  </p>
			  <p>
			  	<label for="shopping_cart_url">Product URL</label>
			  	<input type="text" name="shopping_cart_url" id="shopping_cart_url" class="input-text" placeholder="https://example.com/" value="<?php echo $shopping_cart_url; ?>">
			  </p>
			  
			</div>
	        <?php
	    }
	    // end of dislpay_purchase_btn_meta

	    add_action('add_meta_boxes', 'add_sample_btn_meta');
	    function add_sample_btn_meta(){
	        add_meta_box('free_sample_btn', 'Free Sample Button', 'dislpay_free_sample_btn_meta', array('homepage_slider', 'research_articles', 'video', 'applications', 'lenord_bauer', 'products', 'news', 'selling_tools', 'landing_pages', 'trade_shows', 'services_post', 'page', 'post'), 'normal', 'default');
	    }

	    function dislpay_free_sample_btn_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        $show_free_sample_radio_txt 	 = isset( $values['show_hide_FreeSample_btn'] ) ? esc_attr( $values['show_hide_FreeSample_btn'][0] ) : '';
	        $free_sample_label 	 = isset( $values['free_sample_label'] ) ? esc_attr( $values['free_sample_label'][0] ) : '';
	        $free_sample_url 	 = isset( $values['free_sample_url'] ) ? esc_attr( $values['free_sample_url'][0] ) : '';
	        ?>
	        <div class="meta-wrapper">
			  <p><input type="radio" class="radio" name="show_hide_FreeSample_btn" value="show_free_sample_btn" checked<?php checked( $show_free_sample_radio_txt, 'show_free_sample_btn' ); ?>> Show Button</p>
			  <p><input type="radio" class="radio" name="show_hide_FreeSample_btn" value="hide_free_sample_btn"<?php checked( $show_free_sample_radio_txt, 'hide_free_sample_btn' ); ?>> Hide Button</p>
			  <hr />
			  <p>
			  	<label for="free_sample_label">Button Label</label>
			  	<input type="text" name="free_sample_label" id="free_sample_label" class="input-text" placeholder="Example Sample Label" value="<?php echo $free_sample_label; ?>">
			  </p>
			  <p>
			  	<label for="free_sample_url">Free Sample URL</label>
			  	<input type="text" name="free_sample_url" id="free_sample_url" class="input-text" placeholder="https://example.com/" value="<?php echo $free_sample_url; ?>">
			  </p>
			  
			</div>
	        <?php
	    }

	    add_action('add_meta_boxes', 'add_consult_engineer_btn_meta');
	    function add_consult_engineer_btn_meta(){
	        add_meta_box('consult_engineer_btn', 'Consult An Engineer Button', 'dislpay_consult_engineer_btn_meta', array('homepage_slider', 'research_articles', 'video', 'applications', 'lenord_bauer', 'products', 'news', 'selling_tools', 'landing_pages', 'trade_shows', 'services_post', 'page', 'post'), 'normal', 'default');
	    }
	    function dislpay_consult_engineer_btn_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        $show_consult_engineer_radio_txt 	 = isset( $values['show_hide_consult_btn'] ) ? esc_attr( $values['show_hide_consult_btn'][0] ) : '';
	        $consult_engineer_label 	 = isset( $values['consult_engineer_label'] ) ? esc_attr( $values['consult_engineer_label'][0] ) : '';
	        $consult_engineer_url 	 = isset( $values['consult_engineer_url'] ) ? esc_attr( $values['consult_engineer_url'][0] ) : '';
	        ?>
	        <div class="meta-wrapper">
			  <p><input type="radio" class="radio" name="show_hide_consult_btn" value="show_consult_btn" checked<?php checked( $show_consult_engineer_radio_txt, 'show_consult_btn' ); ?>> Show Button</p>
			  <p><input type="radio" class="radio" name="show_hide_consult_btn" value="hide_consult_btn"<?php checked( $show_consult_engineer_radio_txt, 'hide_consult_btn' ); ?>> Hide Button</p>
			  <hr />
			  <p>
			  	<label for="consult_engineer_label">Button Label</label>
			  	<input type="text" name="consult_engineer_label" id="consult_engineer_label" class="input-text" placeholder="Example Consult Engineer Label" value="<?php echo $consult_engineer_label; ?>">
			  </p>
			  <p>
			  	<label for="consult_engineer_url">Consult Engineer URL</label>
			  	<input type="text" name="consult_engineer_url" id="consult_engineer_url" class="input-text" placeholder="https://example.com/" value="<?php echo $consult_engineer_url; ?>">
			  </p>
			</div>
	        <?php

	    }
	    
	add_action( 'save_post', 'Sensor_Prodcuts_Main_meta_box_save' );
	    function Sensor_Prodcuts_Main_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'SP_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();
	        if( isset( $_POST['territory_radio'] ) )
	            update_post_meta( $post_id, 'territory_radio', wp_kses( $_POST['territory_radio'], $allowed ) );
	        if( isset( $_POST['show_hide_cart_btn'] ) )
	            update_post_meta( $post_id, 'show_hide_cart_btn', wp_kses( $_POST['show_hide_cart_btn'], $allowed ) );
	        if( isset( $_POST['shopping_cart_label'] ) )
	            update_post_meta( $post_id, 'shopping_cart_label', wp_kses( $_POST['shopping_cart_label'], $allowed ) );
	        if( isset( $_POST['shopping_cart_url'] ) )
	            update_post_meta( $post_id, 'shopping_cart_url', wp_kses( $_POST['shopping_cart_url'], $allowed ) );
	        if( isset( $_POST['show_hide_FreeSample_btn'] ) )
	            update_post_meta( $post_id, 'show_hide_FreeSample_btn', wp_kses( $_POST['show_hide_FreeSample_btn'], $allowed ) );
	        if( isset( $_POST['free_sample_label'] ) )
	            update_post_meta( $post_id, 'free_sample_label', wp_kses( $_POST['free_sample_label'], $allowed ) );
	        if( isset( $_POST['free_sample_url'] ) )
	            update_post_meta( $post_id, 'free_sample_url', wp_kses( $_POST['free_sample_url'], $allowed ) );
	        if( isset( $_POST['show_hide_consult_btn'] ) )
	            update_post_meta( $post_id, 'show_hide_consult_btn', wp_kses( $_POST['show_hide_consult_btn'], $allowed ) );
	        if( isset( $_POST['consult_engineer_label'] ) )
	            update_post_meta( $post_id, 'consult_engineer_label', wp_kses( $_POST['consult_engineer_label'], $allowed ) );
	        if( isset( $_POST['consult_engineer_url'] ) )
	            update_post_meta( $post_id, 'consult_engineer_url', wp_kses( $_POST['consult_engineer_url'], $allowed ) );
	    }
	    // end of Sensor_Prodcuts_Main_meta_box_save ~~~>