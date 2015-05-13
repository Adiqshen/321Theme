<?php get_header(); ?>
		<div id="splash">
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/rotatingImg.png" alt="Splash Picture" /></a>

		</div><!-- End of splash -->
<?php get_sidebar(); ?>

		<section>
            <div id="wrestler">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(''); ?>				
                <?php endwhile; endif; ?>
            </div><!--End of wrestler-->
            
		</section>
<small><?php  echo basename($_SERVER['PHP_SELF']); ?>single.php</small>

<?php get_footer(); ?>