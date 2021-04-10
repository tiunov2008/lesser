<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-content" style="background: linear-gradient(0deg, rgba(38, 45, 51, 0.75), rgba(38, 45, 51, 0.75)), url(
        <?php echo get_the_post_thumbnail_url(); ?>); background-repeat: no-repeat;	 background-size: 100%; background-position:center center;
">
		<div class="container">
			<div class="post-wrapper">
				<div class="post-header-nav">
					<?php
					foreach(get_the_category() as $category){
						printf(
							'<a href="%s" class="category-link %s">%s </a>',
							esc_url(get_category_link( $category )) ,
							esc_html($category -> slug),
							esc_html($category -> name)
						);
					} 

					?>
				</div>
				<?php
					if( is_singular() ) :
						the_title( '<h1 class="post-header-title">' , '</h1>'  );
					else :
						the_title( '<h1 class="post-header-title"><a href="' . esc_url( get_the_permalink( )) .'" rel="bookmark">' ,'</h1>'  );
					endif;
					?>
		</div>
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
	</div><!-- .entry-content -->
	<footer class="post-footer">
		<div class="container">
			<?php 
			$tags_list = get_the_tag_list('', esc_html_x( '',"list item separator", 'universal' ));
			if($tags_list){
				printf('<span class="tags-links">' . esc_html__( '%1$s', 'universal') . '</span>', $tags_list);
			}
			
			?>
		</div>
		
	</footer>
	<!-- /.post-header-footer -->
</article>
