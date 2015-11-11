<?php

get_header(); ?>


	<!--**************** MAIN ****************-->
	<div id="main">
		<!--**************** CONTENT ****************-->
		<div id="content">

			<!--**************** SLIDER ****************-->
			<div class="slider">
				<div class="innerSlider">
					<div class="sliderItem" style="background-image: url('wp-content/uploads/2015/11/IMG_4046.jpg');" data-title="1 Этаж - Бар">
					</div>
					<div class="sliderItem" style="background-image: url('wp-content/uploads/2015/11/IMG_4027.jpg');" data-title="2 Этаж - Офисы">
					</div>
					<div class="sliderItem" style="background-image: url('wp-content/uploads/2015/11/IMG_3964.jpg');" data-title="3 Этаж - Конференц-зал">
					</div>
					<div class="sliderItem" style="background-image: url('wp-content/uploads/2015/11/IMG_4004.jpg');" data-title="4 Этаж - Коворкинг"></div>
				</div>
				<div class="arrows">
					<div class="leftArrow"></div>
					<div class="rightArrow"></div>
				</div>
				<div class="data">
					<span class="title"></span>
				</div>
			</div><!-- end .slider-->

			<!--**************** INTRODUCTION ****************-->
			<div class="introduction">
				<div class="blockContacts">
					<div class="blockContactsText">
						<ul>
							<li><span class="icon_location">Харьков, ул. Карла Маркса, 1</span></li>
							<li><a href="tel:80501234567" class="icon_tel">8 (050) 123 45 67</a></li>
							<li><a href="mailto:info@fabrika.space" class="icon_mail">info@fabrika.space</a></li>
						</ul>
					</div>
					<div class="social">
						<ul>
							<li><a href="#" class="icon_fb"></a></li>
							<li><a href="#" class="icon_tw"></a></li>
							<li><a href="#" class="icon_pi"></a></li>
						</ul>
					</div>
				</div>
				<?php
					$args = array( 'category_name' => 'Description');
					$postslist = get_posts( $args );
					$pID = $postslist[0]->ID;
					setup_postdata( $postslist[0] );
					?>
				<div class="introductionText">
					<div class="siteTitle">
						<span class="innerSiteTitle"><?php echo get_the_title( $pID ); ?></span>
					</div>
					<a href="<?php echo get_permalink($pID); ?>" class="siteDescription arrowReadMore">
						<?php the_excerpt();?>
					</a>
				</div>
				<?php
					wp_reset_postdata();?>
			</div><!-- end .introduction-->

			<!--**************** PARTS_OF_BUILDING ****************-->
			<div class="section partsOfBuilding">
				<div class="sectionTitle">Их есть у нас</div>
				<div class="sectionContent">
					<a href="/etc/coworking/" class="item">
						<div class="itemImg">
							<img src="/wp-content/themes/fabrika.space/img/coworking.jpg" />
						</div>
						<div class="itemLayerOverImg">
							<div class="itemTitle">Коворкинг</div>
							<div class="itemDesc">
								<div class="txt">Nunc et aliquam est. Praesent nec ante mauris. Nullam sit amet ante enim. Curabitur interdum in arcu sed tincidunt. Mauris iaculis, nisi nec .</div>
								<span class="readMore">read more</span>
							</div>
						</div>
					</a>
					<a href="/etc/confererence/" class="item">
						<div class="itemImg">
							<img src="/wp-content/themes/fabrika.space/img/conference-service.jpg" />
						</div>
						<div class="itemLayerOverImg">
							<div class="itemTitle">Конференц-сервис</div>
							<div class="itemDesc">
								<div class="txt">Nunc et aliquam est. Praesent nec ante mauris. Nullam sit amet ante enim. Curabitur interdum in arcu sed tincidunt. Mauris iaculis, nisi nec .</div>
								<span class="readMore">read more</span>
							</div>
						</div>
					</a>
					<a href="/etc/bar/" class="item">
						<div class="itemImg">
							<img src="/wp-content/themes/fabrika.space/img/bar.jpg" />
						</div>
						<div class="itemLayerOverImg">
							<div class="itemTitle">Бар</div>
							<div class="itemDesc">
								<div class="txt">Nunc et aliquam est. Praesent nec ante mauris. Nullam sit amet ante enim. Curabitur interdum in arcu sed tincidunt. Mauris iaculis, nisi nec .</div>
								<span class="readMore">read more</span>
							</div>
						</div>
					</a>
				</div>
			</div><!-- end .partsOfBuilding-->

			<!--**************** NEWS ****************-->
			<div class="section news">
				<div class="sectionTitle">Новости</div>
				<div class="sectionContent">
					<?php
						$args = array( 'category_name' => 'News', 'posts_per_page' => 3, 'orderby' => 'post_date' );
						$postslist = get_posts( $args );
						$latest=true;

						foreach ( $postslist as $post ) :
						  setup_postdata( $post ); 
							if($latest){?> 
									<a href="<?php the_permalink(); ?>" class="lastnews">
										<div class="imgLastnews">
											<img src="<?php echo get_post_meta($post->ID, 'Photo', true); ?>" />
										</div>
										<div class="contentLastnews">
											<span class="title"><?php the_title(); ?></span>
											<span class="date"><?php the_date(); ?></span>
											<span class="txt arrowReadMore"><?php the_excerpt(); ?></span>
										</div>
									</a>
									<div class="prevLastNews">
						<?php
								$latest=false;
							}else{
						?>

									<a href="<?php the_permalink(); ?>" class="item">
										<span class="title"><?php the_title(); ?></span>
										<span class="date"><?php unset($previousday); the_date(); ?></span>
										<span class="txt arrowReadMore"><?php the_excerpt(); ?></span>
									</a>
						<?php }

						endforeach; 
						wp_reset_postdata();
					?>
								</div>

				</div>
			</div><!-- end .news-->

			<!--**************** EVENTS ****************-->
			<div class="section events">
				<div class="sectionTitle">События</div>
				<div class="sectionContent">
					<div class="leftArrow"></div>
					<div class="rightArrow"></div>
					
					<div class="listItems">
						<div class="innerListItems">
							<?php
								$args = array( 'category_name' => 'Event', 'posts_per_page' => -1, 'orderby' => 'post_date', 'order' => 'ASC' );
								$postslist = get_posts( $args );
								$no_active = true;
								$now_date = date_parse(date("Y-m-d"));

								foreach ( $postslist as $post ) :
								  setup_postdata( $post ); 
									$eventDate = date_parse(get_post_meta($post->ID, 'EventDate', true));

									if($no_active && $eventDate > $now_date){
										$no_active = false;
									?>
										<a href="<?php the_permalink(); ?>" class="item act">

									<?php }else{ ?>

										<a href="<?php the_permalink(); ?>" class="item">
									<?php } ?>

										<div class="itemImg">
											<img src="<?php echo get_post_meta($post->ID, 'Photo', true); ?>" />
										</div>
										<div class="itemContent">
											<div class="title"><div><span><?php the_title(); ?></span></div></div>
											<div class="dateTime">
												<span class="time">
													<span>с</span><?php echo get_post_meta($post->ID, 'EventStartTime', true); ?><br /><span>по</span><?php echo get_post_meta($post->ID, 'EventEndTime', true); ?>
												</span>
												<span class="date"><?php echo $eventDate['day']; ?></span>
												<span class="month"><?php echo date('F', mktime(0, 0, 0, $eventDate['month'], 10)); ?></span>
											</div>
										</div>
									</a>
								<?php

								endforeach; 
								wp_reset_postdata();
							?>

						</div>
					</div>
				</div>
			</div><!-- end .events-->

			<!--**************** GALLERY ****************-->
			<div class="section gallery">
				<div class="sectionContent">
				<?php
					$args = array( 'category_name' => 'Photo', 'posts_per_page' => 6, 'orderby' => 'rand' );
					$postslist = get_posts( $args );
					?>
					<div class="part">
						<div class="bigImg">
							<img src="<?php echo reset(get_attached_media('image', $postslist[0]->ID))->guid; ?>" />
							<div class="txt"><?php echo get_the_title($postslist[0]);?></div>
						</div>
						<div class="smallImages">
							<div class="smallImg">
								<img src="<?php echo reset(get_attached_media('image', $postslist[1]->ID))->guid; ?>" />
								<div class="txt"><?php echo get_the_title($postslist[1]);?></div>
							</div>
							<div class="smallImg">
								<img src="<?php echo reset(get_attached_media('image', $postslist[2]->ID))->guid; ?>" />
								<div class="txt"><?php echo get_the_title($postslist[2]);?></div>
							</div>
						</div>
					</div>
					<div class="part">
						<div class="bigImg">
							<img src="<?php echo reset(get_attached_media('image', $postslist[3]->ID))->guid; ?>" />
							<div class="txt"><?php echo get_the_title($postslist[3]);?></div>
						</div>
						<div class="smallImages">
							<div class="smallImg">
								<img src="<?php echo reset(get_attached_media('image', $postslist[4]->ID))->guid; ?>" />
								<div class="txt"><?php echo get_the_title($postslist[4]);?></div>
							</div>
							<div class="smallImg">
								<img src="<?php echo reset(get_attached_media('image', $postslist[5]->ID))->guid; ?>" />
								<div class="txt"><?php echo get_the_title($postslist[5]);?></div>
							</div>
						</div>
				<?php
					wp_reset_postdata();?>

					</div>
				</div>
			</div><!-- end .gallery-->

		</div><!-- end #content-->
	</div><!-- end #main-->


	<!--****************FOOTER****************-->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function initialize() {
				var mapCanvas = document.getElementById('googleMap');
				var myLatlng = new google.maps.LatLng(49.98916, 36.22252);
				var mapOptions = {
					center: myLatlng,
					zoom: 16,
					mapTypeControl: false,
					draggable: false,
					scaleControl: false,
					scrollwheel: false,
					navigationControl: false,
					streetViewControl: false,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(mapCanvas, mapOptions)
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'Fabrika',
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<div id="googleMap"></div>

<?php 
get_footer(); ?>
