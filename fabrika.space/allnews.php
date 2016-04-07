<?php
/*
Template Name: allnews
*/
?>
<?php get_header(); 
	$lang = 'ru';
	$altLang = 'en';

	$urlLang = $_GET["lang"]; //getting language from the query string

	if ($urlLang && strcmp($urlLang, $lang) < 0) { //swap language settings
		$tmp = $lang;
		$lang = $altLang;
		$altLang=$tmp;
	}
?>

	<!--**************** MAIN ****************-->
	<div id="main">
		<!--**************** CONTENT ****************-->
		<div id="content">
			<div class="contentMainPart">
				<div class="eventsContainer">
				<?php
					if($lang=='en')
						$args = array( 'category_name' => 'News', 
									'posts_per_page' => -1, 
									'orderby' => 'post_date',
									'meta_query' => array(
										array(
											'key' => 'lang',
											'value' => $lang) 
									));
					else
						$args = array( 'category_name' => 'News', 
									'posts_per_page' => -1, 
									'orderby' => 'post_date',
									 'meta_query' => array(
										array(
											'key' => 'lang',
											'compare' => 'NOT EXISTS') 
									));

						$postslist = get_posts( $args );
						$latest=true;

						foreach ( $postslist as $post ) :
						  setup_postdata( $post );?>
					<a href="<?php the_permalink(); ?>" class="eventItem clear">
						<div class="info">
							<div class="title"><?php the_title(); ?></div>
							<div class="date"><?php the_date(); ?></div>
							<div class="img">
								<img src="<?php echo get_post_meta($post->ID, 'Photo', true); ?>" />
							</div>
							<div class="txt arrowReadMore"><?php the_excerpt(); ?></div>
						</div>
					</a>
					<?php

						endforeach; 
						wp_reset_postdata();?>
				</div>
			</div>
		</div><!-- end #content-->
	</div><!-- end #main-->


<?php get_footer(); ?>
