<?php get_header(); ?>
		<div id="splash">
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/rotatingImg.png" alt="Splash Picture" /></a>

		</div><!-- End of splash -->
<?php get_sidebar(); ?>

		<section>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="newsContent">
                
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <small>Posted by <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
                <?php the_post_thumbnail( 'thumbnail' ); ?>
                <?php the_excerpt(); ?>	... <a href="<?php the_permalink(); ?>">Read the whole story</a> ...
                
            </div><!--End of div class newsContent-->
            <hr>
                <?php endwhile; endif; ?>
            
            
		</section>
<small><?php echo basename($_SERVER['PHP_SELF']); ?></small>

<?php get_footer(); ?>