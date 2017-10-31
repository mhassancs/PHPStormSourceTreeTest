<?php
	add_action('add_meta_boxes', 'add_sample_meta');
	    function add_sample_meta(){
	        add_meta_box('sample', 'Sample Meta Box', 'dislpay_sample_meta', array('homepage_slider', 'research_articles', 'application_glossary', 'lenord_bauer', 'products', 'news', 'selling_tools', 'services_post', 'testimonials'), 'normal', 'high');
	    }
	    function dislpay_sample_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'sample_meta_box_nonce', 'meta_box_nonce' );
	        $sample_input_txt 	 = isset( $values['sample_input'] ) ? esc_attr( $values['sample_input'][0] ) : '';
	        $sample_select_txt 	 = isset( $values['sample_select'] ) ? esc_attr( $values['sample_select'][0] ) : '';
	        $sample_radio_txt 	 = isset( $values['sample_radio'] ) ? esc_attr( $values['sample_radio'][0] ) : '';
	        $sample_textarea_txt 	 = isset( $values['sample_textarea'] ) ? esc_attr( $values['sample_textarea'][0] ) : '';
	        ?>

	        <div class="meta-wrapper">
	    		<label for="sample_input">Sample Input:</label><br />
	    		<input name="sample_input" id="sample_input" placeholder="Enter Sample here..." value="<?php echo $sample_input_txt; ?>">
			</div>

			<div class="meta-wrapper">
	            <label for="sample_select">Sample Select:</label><br />
	            <select name="sample_select" id="sample_select">
	                <option value="Sample001" <?php selected( $sample_select_txt, 'Sample001' ); ?>>Sample001</option>
	                <option value="Sample002" <?php selected( $sample_select_txt, 'Sample002' ); ?>>Sample002</option>
	                <option value="Sample003" <?php selected( $sample_select_txt, 'Sample003' ); ?>>Sample003</option>
	                <option value="Sample004" <?php selected( $sample_select_txt, 'Sample004' ); ?>>Sample004</option>
	                <option value="Sample005" <?php selected( $sample_select_txt, 'Sample005' ); ?>>Sample005</option>
	            </select>
			</div>

			<div class="meta-wrapper">
			  <label for="sample_radio">Sample Radio:</label><br />
			  <input type="radio" name="sample_radio" value="sample1" <?php checked( $sample_radio_txt, 'sample1' ); ?>> Sample 1<br>
			  <input type="radio" name="sample_radio" value="sample2" <?php checked( $sample_radio_txt, 'sample2' ); ?>> Sample 2<br>
			  <input type="radio" name="sample_radio" value="other" <?php checked( $sample_radio_txt, 'other' ); ?>> other
			</div>

			<div class="meta-wrapper">
			  <label for="sample_textarea">Sample Textarea:</label><br />
			  <textarea name="sample_textarea"><?php echo $sample_textarea_txt; ?></textarea>
			</div>

	        <?php
	    }
	    // end of dislpay_sample_meta
	add_action( 'save_post', 'sample_meta_box_save' );
	    function sample_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'sample_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();
	        if( isset( $_POST['sample_input'] ) )
	            update_post_meta( $post_id, 'sample_input', wp_kses( $_POST['sample_input'], $allowed ) );
	        if( isset( $_POST['sample_select'] ) )
	            update_post_meta( $post_id, 'sample_select', wp_kses( $_POST['sample_select'], $allowed ) );
	        if( isset( $_POST['sample_radio'] ) )
	            update_post_meta( $post_id, 'sample_radio', wp_kses( $_POST['sample_radio'], $allowed ) );
	        if( isset( $_POST['sample_textarea'] ) )
	            update_post_meta( $post_id, 'sample_textarea', wp_kses( $_POST['sample_textarea'], $allowed ) );
	    }
	    // end of sample_meta_box_save ~~~>