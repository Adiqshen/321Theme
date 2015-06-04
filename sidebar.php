		<aside>
            <?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
            <div class="eventSide">
                <h3>Here's your pull-quote:</h3>
                <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?>
                </blockquote>
            </div>
            <?php endif;?>
			<div class="eventSide">
				<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/event1.png" alt="Event 1 Picture" /></a>
				<h3>Next Event</h3>
				<p>01/01/2016</p>
				<p>Random Location</p>
			</div><!-- End event1 div -->
            
			<div class="eventSide">
				<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/event2.png" alt="Event 2 Picture" /></a>
				<h3>Future Event</h3>
				<p>01/01/2016</p>
				<p>Random Location</p>
			</div><!-- End event2 div -->
            
			<div class="eventSide">
				<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/event3.png" alt="Event 3 Picture" /></a>
				<h3>Future Event</h3>
				<p>01/01/2016</p>
				<p>Random Location</p>
			</div><!-- End event3 div -->
            
			<div class="eventSide">
				<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/event4.png" alt="Event 4 Picture" /></a>
				<h3>Future Event</h3>
				<p>01/01/2016</p>
				<p>Random Location</p>
			</div><!-- End event4 div -->
            <!-- Begin Dynamic Sidebar 1 -->
            <?php if (is_front_page) {dynamic_sidebar(1); } ?>
            <!-- End Dynamic Sidebar 1 -->
		</aside>