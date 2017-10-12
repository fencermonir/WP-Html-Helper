<?php 

// image alt
if( !function_exists( 'img_default_alt' ) ){
	function img_default_alt( $url = '' ){

		if( $url != '' ){
			// attachment id by url 
			$attachmentid = attachment_url_to_postid( esc_url( $url ) );
		   // attachment alt tag 
			$image_alt = get_post_meta( esc_html( $attachmentid ) , '_wp_attachment_image_alt', true );
			
			if( $image_alt ){
				return $image_alt ;
			}else{
				$filename = pathinfo( esc_url( $url ) );
		
				$alt = str_replace( '-', ' ', $filename['filename'] );
				
				return $alt;
			}
	   
		}else{
		   return; 
		}

	}
}


// Image html callback
if( !function_exists( 'img_tag' ) ){
	function img_tag( $args = array() ){
		
		
		$default = array(
		
			'url' 	 => '',
			'alt' 	 => '',
			'class'  => '',
			'id' 	 => '',
			'width'  => '',
			'height' => '',
			'srcset' => ''
		);
		
		$args = wp_parse_args( $args,  $default );
		
		// Image url 
		$url = $args['url'];

		// image tag alter
		if( !empty( $args['alt'] ) ){
			$alt = $args['alt'];
		}else{
			$alt = img_default_alt( $url );
		}
		
		/**
		 * Optional Attr
		 */
		
		$attr = '';
		// Image class 
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// Image id 
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}
		// Image width
		if( !empty( $args['width'] ) ){
			$attr .= ' width="'.esc_attr( $args['width'] ).'"';
		}
		// Image height
		if( !empty( $args['height'] ) ){
			$attr .= ' height="'.esc_attr( $args['height'] ).'"';
		}
		// Image srcset
		if( !empty( $args['srcset'] ) ){
			$attr .= ' srcset="'.esc_attr( $args['srcset'] ).'"';
		}
		
		
		echo '<img src="'.esc_url( $url ).'" alt="'.esc_attr( $alt ).'" '.wp_kses_post( $attr ).' />';
	}
}

// Anchor Tag
if( !function_exists( 'anchor_tag' ) ){
	function anchor_tag( $args = array() ){
		
		$default = array(
		
			'url' 	 => '',
			'text' 	 => 'Click Here',
			'target' => '',
			'class'  => '',
			'id' 	 => '',
		);
		
		$args = wp_parse_args( $args,  $default );
		
		// Anchor url 
		$url = $args['url'];

		// Anchor Text 
		$text = $args['text'];


		/**
		 * Optional Attr
		 */
		
		$attr = '';
		// class 
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// id 
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}
		// target 
		if( !empty( $args['target'] ) ){
			$attr .= ' target="'.esc_attr( $args['target'] ).'"';
		}

		
		echo '<a href="'.esc_url( $url ).'" '.wp_kses_post( $attr ).'>'.esc_html( $text ).'</a>';
		
		
	}
}

// Heading Tag
if( !function_exists( 'heading_tag' ) ){
	function heading_tag( $args = array() ){
		
		$default = array(
		
			'tag' 	 => 'h1',
			'text' 	 => 'Write Something',
			'class'  => '',
			'id' 	 => '',
		);
		
		$args = wp_parse_args( $args,  $default );
		
		// Tag 
		$tag = $args['tag'];

		/**
		 * Optional Attr
		 */
		
		$attr = '';
		// class 
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// id 
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}


		
		echo '<'.wp_kses_post( $tag.$attr ).'>'.esc_html( $args['text'] ).'</'.esc_attr( $tag ).'>';
		
		
	}
}
// Paragraph Tag
if( !function_exists( 'paragraph_tag' ) ){
	function paragraph_tag( $args = array() ){
		
		$default = array(
		
			'text' 	 => 'Write Something',
			'class'  => '',
			'id' 	 => '',
		);
		
		$args = wp_parse_args( $args,  $default );


		/**
		 * Optional Attr
		 */
		
		$attr = '';
		// class 
		if( !empty( $args['class'] ) ){
			$attr .= ' class="'.esc_attr( $args['class'] ).'"';
		}
		// id 
		if( !empty( $args['id'] ) ){
			$attr .= ' id="'.esc_attr( $args['id'] ).'"';
		}


		echo '<p'.wp_kses_post( $attr ).'>'.wp_kses_post( $args['text'] ).'</p>';
		
		
	}
}




?>