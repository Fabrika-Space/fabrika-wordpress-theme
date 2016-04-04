<?php
/*
Template Name: event-zone
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
	<div id="main" class="pageStyleLikeHome eventzoneMain">
		<?php if($lang == 'en') {?>
		<!--**************** CONTENT EN****************-->
		<div id="content" class="clear">
			<h1>Event-zone</h1>

			<div class="section eventRooms bgWhite clear">
				<div class="sectionTitle borderBottomTitle">three halls for your events</div>
				<div class="sectionContent">
					<div class="descEventRooms">
						<p>Fabrika.space offers 3 conference halls for various events.</p>
					</div>
					<div class="subdescEventRooms">
						<p>Conference halls are located on the second and third floor of Fabrika.space, in the building of a former factory. High ceilings, elements of industrial design, lots of light and excellent acoustics make Fabrika.space conference halls perfect for events for 50-550 people.</p>
						<p>Each conference hall is equipped with lounge chairs, modern multimedia equipment and ventilation system, and strong Wi-Fi connection.</p>
						<p>We have installed Panasonic projectors with an ability to play back high-resolution images and videos (up to 1024x768px).</p>
						<p>Fabrika.space provides full technical support, all you need is a laptop and the material for the presentation. We also undertake the organization of coffee breaks, lunches and a video recording of your event, sound setting, lights and equipment.</p>
					</div>
					<div class="listEventRooms">
						<div class="item">
							<div class="title">Green Hall<br /> up to 50 seats<br /> on second floor</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgEventroomGreen.png" /></div>
							<div class="moreDetails"><a href="#moreGreen">More details</a></div>
						</div>
						<div class="item">
							<div class="title">Blue Hall<br /> up to 150 seats<br /> on the second floor</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgEventroomBlue.png" /></div>
							<div class="moreDetails"><a href="#moreBlue">More details</a></div>
						</div>
						<div class="item">
							<div class="title">Red hall<br /> up to 450 seats<br /> on the thrid floor</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgEventroomRed.png" /></div>
							<div class="moreDetails"><a href="#moreRed">More details</a></div>
						</div>
					</div>
				</div>
			</div>

			<div class="section services">
				<div class="sectionTitle borderBottomTitle">Services</div>
				<div class="sectionContent">
					<div class="itemsServices">
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceInternet.png"></div>
							<div class="title">Free<br> high-quality<br> Wi-Fi</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceProjector.png"></div>
							<div class="title"><br>Multimedia Projectors</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceMicrophone.png"></div>
							<div class="title">Microphones<br /> and audio systems</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceCoffeeAndTea.png"></div>
							<div class="title">Coffee breaks <br /> and lunches</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceMarkerBoard.png"></div>
							<div class="title">Whiteboards</div>
						</div>
						<!--div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceVideorecording.png"></div>
							<div class="title">возможность<br /> видеозаписи</div>
						</div-->
					</div>

					<div class="roomsDescription">
						<div class="item" id="moreRed">
							<div class="img" style="background-image: url('/wp-content/themes/fabrika.space/img/imgRoomsDescription.jpg'), url('/wp-content/themes/fabrika.space/img/lineRedRoom.png');"></div>
							<div class="txt">
								<p><span class="name">Red Hall</span> - is the best choice for conferences, seminars, forums and other types of big public events. About 500 people can accommodate in the Red Hall on comfortable chairs.</p>
								<p>Red Hall is equipped with an amplifier and 8 powerful speakers which allows to hold even an acoustic concert. The arrangement of sound equipment makes it possible to get the perfect audibility in every part of the Hall.</p>
								<p>Location of Panasonic projector allows your guests to see the image in details from every corner. You can hold an event and carry out your presentation or video even in the sunniest day thanks to dense blinds and high contrast ratio of the projector.</p>
							</div>
						</div>
						<div class="item" id="moreBlue">
							<div class="img" style="background-image: url('/wp-content/themes/fabrika.space/img/eventzoneBluePreview.jpg'), url('/wp-content/themes/fabrika.space/img/lineBlueRoom.png');"></div>
							<div class="txt">
								<p><span class="name">Blue Hall</span> - is located on the second floor, too. It is perfect for meetups, discussional and professional meetings with up to 150 people.</p>
								<p>It is equipped with stereo amplifier and 4 speakers. Comparing to the Red Hall the Blue Hall space has smaller distance between the screen and the projector which is great for screening high-quality presentations.</p>
							</div>
						</div>
						<div class="item" id="moreGreen">
							<div class="img" style="background-image: url('/wp-content/themes/fabrika.space/img/imgRoomsDescription.jpg'), url('/wp-content/themes/fabrika.space/img/lineGreenRoom.png');"></div>
							<div class="txt">
								<p><span class="name">Green Hall</span> - is located on the second floor and can comfortably accommodate up to 50 people. We recommend to use it for press-conferences, workshops and educational meetings.</p>
								<p>Stereo amplifier with 2 speakers provides good sound coverage for the Green Hall and the projector has the same features as in Blue and Red Halls, despite the smaller space.</p>
							</div>
						</div>
					</div>

					<div class="sectionTitle">pricing</div>
					<div class="sectionContent">
						<div class="priceCategory">
							<div class="body">
								<div class="typePriceCategories">
									<div class="typePriceCategory">
										<span class="title">Green hall</span>
										<span class="countPeople">50 seats</span>
										<div class="table">
											<table>
												<tr>
													<td>1 hour</td>
													<td>—</td>
													<td>250 uah</td>
												</tr>
												<tr>
													<td>A day</td>
													<td>—</td>
													<td>2 500 uah</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="typePriceCategory">
										<span class="title">Blue hall</span>
										<span class="countPeople">150 seats</span>
										<div class="table">
											<table>
												<tr>
													<td>1 hour</td>
													<td>—</td>
													<td>500 uah</td>
												</tr>
												<tr>
													<td>A day</td>
													<td>—</td>
													<td>5 000 uah</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="typePriceCategory">
										<span class="title">Red hall</span>
										<span class="countPeople">450 seats</span>
										<div class="table">
											<table>
												<tr>
													<td>1 hour</td>
													<td>—</td>
													<td>1 500 uah</td>
												</tr>
												<tr>
													<td>A day</td>
													<td>—</td>
													<td>15 000 uah</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="txtHelpPricing">You may get request for additional information: +38(068)100-11-44 and info@fabrika.space</div>
				</div>
			</div>
			
			<div class="section plansAndPhotosEventRooms bgWhite">
				<div class="sectionTitle">Plans and photos</div>
				<div class="sectionContent">
					<div class="item clear">
						<div class="title bgTransparentRed">Red hall</div>
						<div class="img"><img src="/wp-content/themes/fabrika.space/img/eventzoneRed.jpg" /></div>
						<div class="map"><img src="/wp-content/themes/fabrika.space/img/smallMapRedRoom.jpg" /></div>
					</div>
					<div class="item clear">
						<div class="title bgTransparentBlue">Blue hall</div>
						<div class="img"><img src="/wp-content/themes/fabrika.space/img/eventzoneBlue.jpg" /></div>
						<div class="map"><img src="/wp-content/themes/fabrika.space/img/smallMapBlueRoom.jpg" /></div>
					</div>
					<div class="item clear">
						<div class="title bgTransparentGreen">Green hall</div>
						<div class="img"><img src="/wp-content/themes/fabrika.space/img/eventzoneGreen.jpg" /></div>
						<div class="map"><img src="/wp-content/themes/fabrika.space/img/smallMapGreenRoom.jpg" /></div>
					</div>
				</div>
			</div>

			<div class="section ourClients bgWhite">
				<div class="sectionTitle borderBottomTitle">Our partners</div>
				<div class="sectionContent">
					<div class="listOurClients">
						<div class="item">
							<img src="/wp-content/themes/fabrika.space/img/ourClients/imgClientToptechphoto.png" style="height: 35px;" />
						</div>
						<div class="item">
							<img src="/wp-content/themes/fabrika.space/img/ourClients/imgClientIteam.png" style="height: 60px;" />
						</div>
						<div class="item">
							<img src="/wp-content/themes/fabrika.space/img/ourClients/imgClientDevpro.png" style="height: 35px;" />
						</div>
					</div>
				</div>
			</div>

		</div><!-- end #content en-->
		<?php }else{ ?>
				<!--**************** CONTENT RU****************-->
		<div id="content" class="clear">
			<h1>Ивент-зона</h1>

			<div class="section eventRooms bgWhite clear">
				<div class="sectionTitle borderBottomTitle">три пространства в фабрике</div>
				<div class="sectionContent">
					<div class="descEventRooms">
						<p>Fabrika.space предоставляет 3 зала для проведения различных мероприятий.</p>
					</div>
					<div class="subdescEventRooms">
						<p>Залы расположены на втором и третьем этаже здания, построенного в 1929 году. Высокие потолки, элементы промышленного интерьера, обилие света и отличная аккустика создают идеальную базу для проведения мероприятий на 50-450 человек.</p>
						<p>Каждое помещение оснащено мягкими стульями, современным мультимедийным оборудованием и приточно-вытяжной вентиляцией, везде работает Wi-Fi.</p>
						<p>В залах установлены проекторы Panasonic, которые позволяют воспроизводить изображения и видео с разрешением до 1024х768рх.</p>
						<p>Мы обеспечиваем полную техническую поддержку при проведении мероприятий. Вам понадобится только ноутбук и материал для презентации. Мы так же берем на себя организацию кофе-брейков, ланчей и видео-записи ваших мероприятий, настройку звука, света и аппаратуры.</p>
					</div>
					<div class="listEventRooms">
						<div class="item">
							<div class="title">Зеленый зал<br /> на 50 человек<br /> на втором этаже</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgEventroomGreen.png" /></div>
							<div class="moreDetails"><a href="#moreGreen">Подробнее</a></div>
						</div>
						<div class="item">
							<div class="title">Синий зал<br /> на 150 человек<br /> на втором этаже</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgEventroomBlue.png" /></div>
							<div class="moreDetails"><a href="#moreBlue">Подробнее</a></div>
						</div>
						<div class="item">
							<div class="title">Красный зал<br /> на 450 человек<br /> на третьем этаже</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgEventroomRed.png" /></div>
							<div class="moreDetails"><a href="#moreRed">Подробнее</a></div>
						</div>
					</div>
				</div>
			</div>

			<div class="section services">
				<div class="sectionTitle borderBottomTitle">Услуги</div>
				<div class="sectionContent">
					<div class="itemsServices">
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceInternet.png"></div>
							<div class="title">бесплатный<br> скоростной<br> интернет</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceProjector.png"></div>
							<div class="title">мультимедиапроектор</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceMicrophone.png"></div>
							<div class="title">микрофоны<br /> и аудиосистема</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceCoffeeAndTea.png"></div>
							<div class="title">организация<br /> кофе-брейков</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceMarkerBoard.png"></div>
							<div class="title">маркерная доска</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceVideorecording.png"></div>
							<div class="title">возможность<br /> видеозаписи</div>
						</div>
					</div>

					<div class="roomsDescription">
						<div class="item" id="moreRed">
							<div class="img" style="background-image: url('/wp-content/themes/fabrika.space/img/imgRoomsDescription.jpg'), url('/wp-content/themes/fabrika.space/img/lineRedRoom.png');"></div>
							<div class="txt">
								<p><span class="name">Красный зал</span> - идеально подходит для проведения конференций, семинаров, форумов и других масштабных мероприятий. В нем на удобных стульях может комфортно разместиться до 500 человек.</p> 
								<p>В зале есть усилитель звука и 8 колонок, мощности которых позволяют провести даже кинопоказ. Схема расположения звукового оборудования позволяет получить идеальную слышимость в любой точке зала.</p>
								<p>Проектор расположен относительно экрана таким образом, что из любой точки в зале ваши гости увидят изображение в деталях. Плотные жалюзи и высокая контрастность проектора дают возможность проводить презентации даже в самый солнечный день.</p>
							</div>
						</div>
						<div class="item" id="moreBlue">
							<div class="img" style="background-image: url('/wp-content/themes/fabrika.space/img/eventzoneBluePreview.jpg'), url('/wp-content/themes/fabrika.space/img/lineBlueRoom.png');"></div>
							<div class="txt">
								<p><span class="name">Синий зал</span> - оптимальный вариант для проведения митапов, дискусионных и профессиональных встреч. Здесь можно совместить мягкие стулья и бескаркасную мебель для рассадки гостей.</p>
								<p>4 колонки и усилитель звука в комплекте с меньшим, чем в красном зале, расстоянием между проектором и экраном, позволяют проводить ультра-качественные презентации и выступления.</p>
							</div>
						</div>
						<div class="item" id="moreGreen">
							<div class="img" style="background-image: url('/wp-content/themes/fabrika.space/img/imgRoomsDescription.jpg'), url('/wp-content/themes/fabrika.space/img/lineGreenRoom.png');"></div>
							<div class="txt">
								<p><span class="name">Зеленый зал</span> - мы рекомендуем использовать для пресс-конференций, мастер-классов и небольших образовательных встреч.</p> 
								<p>Усилитель звука с 2 колонками обеспечивает достаточное для площади зала покрытие, а проектор имеет те же возможности, что и в синем и красном зале, несмотря на меньший размер.</p>
							</div>
						</div>
					</div>

					<div class="sectionTitle">цены</div>
					<div class="sectionContent">
						<div class="priceCategory">
							<div class="body">
								<div class="typePriceCategories">
									<div class="typePriceCategory">
										<span class="title">Зеленый зал</span>
										<span class="countPeople">50 человек</span>
										<div class="table">
											<table>
												<tr>
													<td>1 час</td>
													<td>—</td>
													<td>250 грн</td>
												</tr>
												<tr>
													<td>Целый день</td>
													<td>—</td>
													<td>2500 грн</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="typePriceCategory">
										<span class="title">Синий зал</span>
										<span class="countPeople">150 человек</span>
										<div class="table">
											<table>
												<tr>
													<td>1 час</td>
													<td>—</td>
													<td>500 грн</td>
												</tr>
												<tr>
													<td>Целый день</td>
													<td>—</td>
													<td>5000 грн</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="typePriceCategory">
										<span class="title">Красный зал</span>
										<span class="countPeople">450 человек</span>
										<div class="table">
											<table>
												<tr>
													<td>1 час</td>
													<td>—</td>
													<td>1500 грн</td>
												</tr>
												<tr>
													<td>Целый день</td>
													<td>—</td>
													<td>15000 грн</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="txtHelpPricing">Вся информация по телефону +38(068)100-11-44 и info@fabrika.space</div>
				</div>
			</div>
			
			<div class="section plansAndPhotosEventRooms bgWhite">
				<div class="sectionTitle">Планы и фото ивент-зон</div>
				<div class="sectionContent">
					<div class="item clear">
						<div class="title bgTransparentRed">Красный зал</div>
						<div class="img"><img src="/wp-content/themes/fabrika.space/img/eventzoneRed.jpg" /></div>
						<div class="map"><img src="/wp-content/themes/fabrika.space/img/smallMapRedRoom.jpg" /></div>
					</div>
					<div class="item clear">
						<div class="title bgTransparentBlue">синий зал</div>
						<div class="img"><img src="/wp-content/themes/fabrika.space/img/eventzoneBlue.jpg" /></div>
						<div class="map"><img src="/wp-content/themes/fabrika.space/img/smallMapBlueRoom.jpg" /></div>
					</div>
					<div class="item clear">
						<div class="title bgTransparentGreen">Зеленый зал</div>
						<div class="img"><img src="/wp-content/themes/fabrika.space/img/eventzoneGreen.jpg" /></div>
						<div class="map"><img src="/wp-content/themes/fabrika.space/img/smallMapGreenRoom.jpg" /></div>
					</div>
				</div>
			</div>

			<div class="section ourClients bgWhite">
				<div class="sectionTitle borderBottomTitle">Наши партнеры</div>
				<div class="sectionContent">
					<div class="listOurClients">
						<div class="item">
							<img src="/wp-content/themes/fabrika.space/img/ourClients/imgClientToptechphoto.png" style="height: 35px;" />
						</div>
						<div class="item">
							<img src="/wp-content/themes/fabrika.space/img/ourClients/imgClientIteam.png" style="height: 60px;" />
						</div>
						<div class="item">
							<img src="/wp-content/themes/fabrika.space/img/ourClients/imgClientDevpro.png" style="height: 35px;" />
						</div>
					</div>
				</div>
			</div>

		</div><!-- end #content ru-->
		<?php } ?>
	</div><!-- end #main-->

<?php get_footer(); ?>
