<?php get_header(); ?>


	<!--**************** MAIN ****************-->
	<div id="main">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>
		<!--**************** CONTENT ****************-->
		<div id="content">
			<h1><?php the_title(); ?></h1>
			<div class="contentMainPart clear">
				<div class="post clear">
					<!--div class="postImg">
						<img src="img/imgInnerPage.jpg" />
					</div-->
					<?php the_content(); ?>
					<div class="postTxt">
						
					</div>
				</div>
			</div>
		</div><!-- end #content-->

	</div><!-- end #main-->
	<?php endwhile;?>

<?php get_footer(); ?>
