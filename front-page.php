<?php get_header(); ?>
		<div id="splash">
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/rotatingImg.png" alt="Splash Picture" /></a>

		</div><!-- End of splash -->
<?php get_sidebar(); ?>

		<section>
            <div class="homeContent">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(''); ?>				
                <?php endwhile; endif; ?>
            </div><!--End of div class homeContent-->
            
            <?php rewind_posts(); ?>
            <?php query_posts('showposts=4'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="homeContent">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>         
                <?php the_excerpt(''); ?>
            </div><!--End of div class homeContent-->
                <?php endwhile; ?>
            
            <small>front-page.php</small>
		</section>


<?php get_footer(); ?>