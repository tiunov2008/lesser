<?php
/*
Template Name: Блог
Template Post Type: page
*/
get_header();?>	
	<div id="fh5co-blog-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Блог</h2>
				</div>
			</div>
			<div class="row blog-posts-section">
					<?php
						global $post;

						$myposts = get_posts([ 
							'numberposts' => 6,
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
								setup_postdata( $post );
								?>     
								<div class="col-md-4 text-center">
									<div class="blog-inner">
										<a href="<?php the_permalink()?>"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url()?>" alt="Blog"></a>
										<div class="desc">
											<h3><a href="single.html"><?php the_title(); ?></a></h3>
											<p><?php echo mb_strimwidth(get_the_excerpt(), 0 , 125, "...")?></p>
											<p><a href="single.html" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
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
			<!--<div class="row blog-posts-section">
				<div class="col-md-4 text-center">
					<div class="blog-inner">
						<a href="single.html"><img class="img-responsive" src="images/image_4.jpg" alt="Blog"></a>
						<div class="desc">
							<h3><a href="single.html">New iPhone 6 Released</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="single.html" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 text-center">
					<div class="blog-inner">
						<a href="single.html"><img class="img-responsive" src="images/image_7.jpg" alt="Blog"></a>
						<div class="desc">
							<h3><a href="single.html">New iPhone 6 Released</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="single.html" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="blog-inner">
						<a href="single.html"><img class="img-responsive" src="images/image_5.jpg" alt="Blog"></a>
						<div class="desc">
							<h3><a href="single.html">Beans</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="single.html" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4 text-center">
					<div class="blog-inner">
						<a href="single.html"><img class="img-responsive" src="images/image_9.jpg" alt="Blog"></a>
						<div class="desc">
							<h3><a href="single.html">New iPhone 6 Released</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="single.html" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="blog-inner">
						<a href="single.html"><img class="img-responsive" src="images/image_6.jpg" alt="Blog"></a>
						<div class="desc">
							<h3><a href="single.html">Bookmarksgrove right</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="single.html" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="blog-inner">
						<a href="single.html"><img class="img-responsive" src="images/image_10.jpg" alt="Blog"></a>
						<div class="desc">
							<h3><a href="single.html">New iPhone 6 Released</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="single.html" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>

			</div>-->

			</div>
		</div>
	
		<footer id="fh5co-footer" role="contentinfo">
	
			<div class="container">
				<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>О нас</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>Портфолио</h3>
	
					<ul class="float">
						<li><a href="#">Free Bootstrap Template</a></li>
						<li><a href="#">Free HTML5 Template</a></li>
						<li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
						<li><a href="#">HandCrafted Templates</a></li>
					</ul>
	
				</div>
	
				<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>Мы в соц сетях</h3>
					<ul class="fh5co-social">
						<li><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
						<li><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
						<li><a href="#"><i class="icon-instagram"></i> Instagram</a></li>
					</ul>
				</div>
				
				
				<div class="col-md-12 fh5co-copyright text-center">
					<p>&copy; 2020 Все права защищены. <span>Выполнил с <i class="icon-heart"></i> Иванов Иван</span></p>	
				</div>
				
			</div>
		</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

