<?php

add_action( 'bizberg_before_homepage_blog', 'green_protection_about_us' );
function green_protection_about_us(){

	$status = bizberg_get_theme_mod( 'about_status' );
	if( empty( $status ) ){
		return;
	} 

	$title    = bizberg_get_theme_mod( 'about_title' );
	$subtitle = bizberg_get_theme_mod( 'about_subtitle' );
	$image    = bizberg_get_theme_mod( 'about_image' );
	$services = bizberg_get_theme_mod( 'green_protection_about' );
	$services = json_decode( $services, true ); ?>

	<section class="about_us">
		
		<div class="container">
		
			<div class="about_us_wrapper">
				
				<div class="col left">
					
					<div class="title_wrapper">
					
						<h3><?php echo esc_html( $title ); ?></h3>
						<h2><?php echo esc_html( $subtitle ); ?></h2>
						
					</div>
					
					<div class="icon_list">

						<?php

						if( !empty( $services ) ){

							foreach( $services as $service ){

								$icon    = !empty( $service['icon'] ) ? $service['icon'] : '';
								$page_id = !empty( $service['page_id'] ) ? $service['page_id'] : '';

								$pageobj = get_post( $page_id ); ?>
						
								<div class="list">
									<div class="icon">
										<i class="<?php echo esc_attr( $icon ); ?>"></i>
									</div>
									<div class="content">
										<h4><?php echo esc_html( $pageobj->post_title ); ?></h4>
										<p><?php echo esc_html( wp_trim_words( sanitize_text_field( $pageobj->post_content ), 20, ' [...]' ) ); ?></p>
									</div>
								</div>
							
								<?php 

							}

						} ?>
						 
					</div>
					
				</div>
				
				<div class="col right" style="background-image:url(<?php echo esc_url( $image ); ?>)"></div>
				
			</div>
			
		</div>
		
	</section>

	<?php
}