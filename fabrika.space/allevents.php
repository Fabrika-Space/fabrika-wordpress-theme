<?php
/*
Template Name: allevents
*/
?>
<?php get_header(); ?>

	<!--**************** MAIN ****************-->
	<div id="main">
		<!--**************** CONTENT ****************-->
		<div id="content">
			<div class="contentMainPart">
				<div class="eventsContainer">
					<?php
						$querystr = "
											SELECT STR_TO_DATE(wpostmeta.meta_value, '%d-%m-%Y') as evdate, wposts.*
											FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
											WHERE wposts.ID = wpostmeta.post_id
											AND wpostmeta.meta_key = 'EventDate'
											AND wposts.post_status = 'publish'
											AND wposts.post_type = 'post'
											ORDER BY evdate DESC
											";

								$pageposts = $wpdb->get_results($querystr, OBJECT);

						if ($pageposts){
							//$args = array( 'category_name' => 'Event', 'posts_per_page' => -1, 'orderby' => 'post_date' );
							//$postslist = get_posts( $args );
							//$latest=true;

							foreach ( $pageposts as $post ) :
							  setup_postdata( $post );?>
						<a href="<?php the_permalink(); ?>" class="eventItem clear">
							<div class="info">
								<div class="title"><?php the_title(); ?></div>
								<div class="date"><?php echo get_post_meta($post->ID, 'EventDate', true); ?> <?php echo get_post_meta($post->ID, 'EventStartTime', true); ?> — <?php echo get_post_meta($post->ID, 'EventEndTime', true); ?></div>
								<div class="img">
									<img src="<?php echo get_post_meta($post->ID, 'Photo', true); ?>" />
								</div>
								<div class="txt arrowReadMore"><?php the_excerpt(); ?></div>
							</div>
						</a>
						<?php
							endforeach;
						}
						wp_reset_postdata();?>
				</div>
			</div>
		</div><!-- end #content-->
	</div><!-- end #main-->


<?php get_footer(); ?>