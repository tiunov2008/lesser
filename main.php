<?php
/*
Template Name: Главная
Template Post Type: page
*/
get_header();?>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h1>Курс на социально-ориентированный национальный проект связывает нас с нашим прошлым</h1>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-featured-section">
			<div class="container">
				<div class="row">
					<?php		
						global $post;
						//запрос в базу данных
						$query = new WP_Query( [
							'posts_per_page' => 4,
						] );

						if ( $query->have_posts() ) {
							$cnt = 0;
							while ( $query->have_posts() ) {
								$query->the_post();
								$cnt++;
								switch ($cnt) {
									case '1':
										?>
										<div class="col-md-6">
											<a href="<?php the_permalink()?>" class="featured-grid" style="background-image: url(<?php
											//должно находится внутри цикла
											if( has_post_thumbnail() ) {
												echo get_the_post_thumbnail_url();
											}
											else {
												echo get_template_directory_uri().'/assets/img/img-default.jpg';
											}
											?>);">
												<div class="desc">
													<h3><?php the_title(); ?></h3>
													<span><?php $category = get_the_category();
                                    				echo $category[0]->name;?></span>
												</div>
											</a>
										</div><?php   
										break;
									case '2': ?>
										<div class="col-md-6">
											<a href="<?php the_permalink()?>" class="featured-grid featured-grid-2" style="background-image: url(<?php
												//должно находится внутри цикла
												if( has_post_thumbnail() ) {
													echo get_the_post_thumbnail_url();
												}
												else {
													echo get_template_directory_uri().'/assets/img/img-default.jpg';
												}
												?>);">
												<div class="desc">
													<h3><?php the_title(); ?></h3>
													<span><?php $category = get_the_category();
                                    				echo $category[0]->name;?></span>
												</div>
											</a>
											<div class="row">
										<?php break;
									default: ?>
										<div class="col-md-6">
											<a href="<?php the_permalink()?>" class="featured-grid featured-grid-2" style="background-image: url(<?php
												//должно находится внутри цикла
												if( has_post_thumbnail() ) {
													echo get_the_post_thumbnail_url();
												}
												else {
													echo get_template_directory_uri().'/assets/img/img-default.jpg';
												}
												?>);">
												<div class="desc">
													<h3><?php the_title(); ?></h3>
													<span><?php $category = get_the_category();
                                    				echo $category[0]->name;?></span>
												</div>
											</a>
										</div>
										<?php break;?>
								</div>
							</div>
						<?php
							break;
						}
						?>
				<?php 
						}
					} else {
						// Постов не найдено
					}

					wp_reset_postdata(); // Сбрасываем $post
					?>
				</div>
			</div>
		</div>
	</div>
		<div id="fh5co-services-section">
			<div class="container">
                <?php
                the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lesser-temp' ),
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
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lesser-temp' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
			</div>
		</div>
		<div id="fh5co-blog-section" class="fh5co-grey-bg-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Блог</h2>
					</div>
				</div>
				<div class="row">
					<?php
						global $post;

						$myposts = get_posts([ 
							'numberposts' => 3,
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
								setup_postdata( $post );
								?>     
								<div class="col-md-4 text-center">
									<div class="blog-inner">
										<a href="<?php the_permalink()?>"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( null, 'thumbnail' )?>" alt="Blog"></a>
										<div class="desc">
											<h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
											<p><?php echo mb_strimwidth(get_the_excerpt(), 0 , 150, "...")?></p>
											<p><a href="<?php the_permalink()?>" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
										</div>
									</div>
								</div>
								<?php 
								}
							} else {
								?> <p>Постов не найдено</p> <?php 
								// Постов не найдено
							}
							wp_reset_postdata(); // Сбрасываем $post
						?>
				</div>
			</div>
		</div>
		<div id="fh5co-client-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Отзывы</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">
						<div class="testimony">
							<span class="quote"><i class="icon-quote-right"></i></span>
							<blockquote>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<span>Athan Smith</span>
							</blockquote>
						</div>
					</div>
					<div class="col-md-6 text-center">
						<div class="testimony">
							<span class="quote"><i class="icon-quote-right"></i></span>
							<blockquote>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<span>Athan Smith</span>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
get_footer();