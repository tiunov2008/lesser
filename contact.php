<?php
/*
Template Name: Контакты
Template Post Type: page
*/
get_header();?>	
	<div id="fh5co-page">
	<div id="fh5co-contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Contact</h2>
					<p><span>Created with <i class="sl-icon-heart"></i> by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></span></p>
				</div>
			</div>
			<div class="row">
				<!--<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="sl-icon-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="sl-icon-phone"></i>+ 1235 2355 98</li>
						<li><i class="sl-icon-envelope-open"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="sl-icon-globe-alt"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>-->
				<div class="col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
					<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'universal' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Страницы:', 'universal' ),
								'after'  => '</div>',
							)
						);
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="map" data-animate-effect="fadeIn"></div>-->
<?php
	get_footer();