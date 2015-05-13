<?php get_header(); ?>
		<div id="splash">
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/rotatingImg.png" alt="Splash Picture" /></a>

		</div><!-- End of splash -->
<?php get_sidebar(); ?>
        <div id=rosterCat><!-- Display on Roster pages -->
            <ul>
                <?php if ($post->post_parent) { wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); 
                } else { wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));} ?>
            </ul>
        </div><!-- End of rosterCat -->
		<section>
            <div id="wrestler">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(''); ?>				
                <?php endwhile; endif; ?>
            </div><!--End of wrestler-->
		</section>
<small>page.php</small>
<?php get_footer(); ?>