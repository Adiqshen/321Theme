<?php get_header(); ?>
		<div id="splash">
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/rotatingImg.png" alt="Splash Picture" /></a>

		</div><!-- End of splash -->
<?php get_sidebar(); ?>

		<section>
            <div id="wrestler">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                    <small>Posted by <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
                <?php the_post_thumbnail( 'medium' ); ?>
                <?php the_content(''); ?>				
                <?php endwhile; endif; ?>
            </div><!--End of wrestler-->
            
		</section>
<small><?php  echo basename($_SERVER['PHP_SELF']); ?>single.php</small>

<?php get_footer(); ?>