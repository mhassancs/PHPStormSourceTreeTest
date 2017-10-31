<?php
	add_action('add_meta_boxes', 'add_video_url_meta');
	    function add_video_url_meta(){
	        add_meta_box('video_url', 'Video', 'dislpay_video_url_meta', array('video', 'products', 'lenord_bauer', 'testimonials'), 'normal', 'high');
	    }
	    function dislpay_video_url_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'SP_meta_box_nonce', 'meta_box_nonce' );
	        $video_url_txt 	 		 = isset( $values['video_url_txt'] ) ? esc_attr( $values['video_url_txt'][0] ) : '';
	        $video_keywords_txt 	 = isset( $values['video_keywords_txt'] ) ? esc_attr( $values['video_keywords_txt'][0] ) : '';
	        ?>
			<div class="meta-wrapper">
			  <p>
			  	<label for="video_url_txt">Video iFrame URL</label>
			  	<input type="text" name="video_url_txt" class="input-text" value="<?php echo $video_url_txt; ?>" placeholder='<iframe width="560" height="315" src="https://www.youtube.com/embed/7rM-y7Kiots" frameborder="0" allowfullscreen></iframe>'>
			  </p>

			  <hr />

			  <p>
			  	<label>Video Preview</label>
			  	<div class="video-admin-preview"><?php echo get_post_meta($post->ID, 'video_url_txt', true); ?></div>
			  </p>

			  <p>
			  	<label for="video_keywords_txt">Keywords</label>
			  	<input type="text" name="video_keywords_txt" class="input-text" value="<?php echo $video_keywords_txt; ?>" placeholder="Fujifilm, Fujifilm Prescale, UVScale">
			  	<span style="font-size: 10px; padding-left: 1.5em; text-transform: uppercase;"><strong><i>Use A comma after every keyword</i></strong></span>
			  </p>
			</div>
	        <?php
	    }
	    // end of dislpay_video_url_meta

	    add_action( 'save_post', 'Video_meta_box_save' );
	    function Video_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'SP_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();
	        if( isset( $_POST['video_url_txt'] ) )
	            update_post_meta( $post_id, 'video_url_txt', wp_kses( $_POST['video_url_txt'], array(
	                'iframe' => array(
	                    'src' => array(),
	                    'allowfullscreen' => array()
	                    )
	                ) ) );
	        if( isset( $_POST['video_keywords_txt'] ) )
	            update_post_meta( $post_id, 'video_keywords_txt', wp_kses( $_POST['video_keywords_txt'], $allowed ) ); 
	    }
	    // end of Video_meta_box_save ~~~>