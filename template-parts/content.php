

	<div id="fh5co-single-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h1>Может показаться странным, но обучение кадров - приоритетная задача</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<div class="work-inner">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" >									</div>
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
				<div class="col-md-4">
					<aside class="sidebar">
						<div class="row">
							<div class="col-md-12 side">
								<h3>Категории</h3>
								<ul>
									<li><i class="icon-check"></i><a href="#">Web Design</a></li>
									<li><i class="icon-check"></i><a href="#">Branding &amp; Identity</a></li>
									<li><i class="icon-check"></i><a href="#">Free HTML5</a></li>
									<li><i class="icon-check"></i><a href="#">HandCrafted Templates</a></li>
									<li><i class="icon-check"></i><a href="#">Free Bootstrap Template</a></li>
									<li><i class="icon-check"></i><a href="#">Free HTML5 Template</a></li>
									<li><i class="icon-check"></i><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
									<li><i class="icon-check"></i><a href="#">HandCrafted Templates</a></li>
								</ul>
							</div>

						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>


