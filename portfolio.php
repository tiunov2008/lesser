<?php
/*
Template Name: Портфолио
Template Post Type: page
*/
get_header();?>
	<div id="fh5co-work-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h1>Портфолио</h1>
				</div>
			</div>
			<div class="row">
			<?php
				$categories = get_categories();
				$n = 0;
				foreach ($categories as $category) {?>
					<div class="col-md-4 text-center">
					<div class="work-inner">
					<?php
						$categories = get_categories(array('taxonomy'=>'category','hide_empty'=>false));
						$category_img = get_field("category_img",$category);
						echo '<a href="single.html" class="work-grid" style="background-image: url(' . $category_img . ')"></a>';
						?>
						<div class="desc">
							<h3><a href="single.html"><?php echo $categories[$n]->name;?></a></h3>
						</div>
					</div>
				</div>
				<?php
					$n++;
				}
				?>
			</div>
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

