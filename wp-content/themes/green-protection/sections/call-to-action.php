<?php

add_action( 'bizberg_before_homepage_blog', 'green_protection_call_to_action' );
function green_protection_call_to_action(){ 

	$status = bizberg_get_theme_mod( 'call_to_action_status' );
	if( empty( $status ) ){
		return;
	} 

	$subtitle = bizberg_get_theme_mod( 'call_to_action_subtitle' );
	$page_id  = bizberg_get_theme_mod( 'call_to_action_page' );
	$pageObj  = get_post( $page_id ); 

	$cards    = bizberg_get_theme_mod( 'green_protection_call_to_action1' );
	$cards    = json_decode( $cards, true ); ?>

	<section class="call_to_action">
	
		<div class="container">
		
			<div class="call_to_action_wrapper">
		
				<div class="col left">
				
					<div class="title_wrapper">
						
						<h3><?php echo esc_html( $subtitle ); ?></h3>
						<h2><?php echo esc_html( $pageObj->post_title ) ;?></h2>
							
					</div>
					
					<p><?php echo esc_html( wp_trim_words( sanitize_text_field( $pageObj->post_content ) , 70, ' [...]' ) ); ?></p>
					
					<span class="button">
						<a href="<?php echo esc_url( get_permalink( $page_id ) ); ?>">
							<?php esc_html_e( 'Join with us' , 'green-protection' ); ?> 
						</a>
					</span>
				
				</div>
			
				<div class="col right">

					<?php 
					if( !empty( $cards ) ){

						foreach( $cards as $card ){

							$image    = !empty( $card['image'] ) ? $card['image'] : '';
							$page_id  = !empty( $card['page_id'] ) ? $card['page_id'] : '';
							$icon     = !empty( $card['icon'] ) ? $card['icon'] : '';
							$pageObj  = get_post( $page_id ); ?>
					
							<div class="card" style="background-image:linear-gradient(0deg, rgba(0, 37, 57, 0.8), rgba(0, 37, 57, 0.8)), url(<?php echo esc_url( wp_get_attachment_url( $image) ); ?>);">
							
								<i class="<?php echo esc_attr( $icon ); ?>"></i>
								
								<h3 class="title">
									<?php echo esc_html( $pageObj->post_title ); ?>
								</h3>
								
								<p><?php echo esc_html( wp_trim_words( sanitize_text_field( $pageObj->post_content ) , 15, ' [...]' ) ); ?></p>			
								
								<a href="<?php echo esc_url( get_permalink( $page_id ) ); ?>">
									<?php esc_html_e( 'Read More' , 'green-protection' ); ?> 
								</a>
							
							</div>

							<?php 

						}

					} ?>
					
					</div>
				
				</div>
				
			</div>
			
		</div>
	
	</section>
	
	<?php
}