	
	<footer id="fh5co-footer" role="contentinfo">
	
    <div class="container">
        <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3>О нас</h3>
            <p><?php 
				$field = get_post_field( 'post_content', 36, 'db' );
                echo $field;?></p>
        </div>
        <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3>Портфолио</h3>
            <ul class="float">
                <?php
                    $categories = get_categories();
                    $n = 0;
                    foreach ($categories as $category) {?>
                        <li><a href="<?php echo get_category_link($category->term_id)?>"><?php echo $categories[$n]->name;?></a></li>
                    <?php
                        $n++;
                    }
                ?>
            </ul>
        </div>

        <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3>Мы в соц сетях</h3>
            <ul class="fh5co-social">
                <?php 
                if (!(get_field("twitter") == ' ')){ ?>
                    <li><a href="<?php echo get_field("twitter"); ?>"><i class="icon-twitter"></i>Twitter</a></li>
                <?php } if (!(get_field("facebook") == ' ')){ ?>
                    <li><a href="<?php echo get_field("facebook"); ?>"><i class="icon-facebook"></i> Facebook</a></li>
                <?php } if (!(get_field("instagram") == ' ')){ ?>
                    <li><a href="<?php echo get_field("instagram"); ?>"><i class="icon-instagram"></i> Instagram</a></li>
                <?php } ?>
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