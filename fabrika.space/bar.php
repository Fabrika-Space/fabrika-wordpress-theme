<?php
/*
Template Name: bar
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
	<div id="main" class="pageStyleLikeHome barMain">

	<?php if($lang == 'en') {?>
		<!--**************** CONTENT EN****************-->
		<div id="content" class="clear">
			<h1>Bar</h1>

			<div class="section aboutBar bgWhite clear">
				<div class="sectionTitle borderBottomTitle">About us</div>
				<div class="sectionContent clear">
					<div class="txtAboutBar">
						<p>The most soulful bar of Kharkiv is situated in the former factory building with five-meter high ceilings.
						<p>You can still feel the charm of the early XX century in the renovated space of Fabrika thanks to authentic elements of design and interior. Excellent cuisine, variety of drinks and unique atmosphere will make you want to come back for more once you visit us for the first time.</p>
					</div>
					<div class="worktimeAboutBar">
						<img src="/wp-content/themes/fabrika.space/img/services/imgServiceWorktime.png" />
						<div class="txt">
							<p>Working hours<br />Friday and Saturday - 9:00 to 3:00<br />Sunday to Thursday - 9:00 to 24:00</p>
							<p>Blagovischenska str. 1, Kharkiv, Ukraine</p>
						</div>
					</div>
				</div>
			</div>

			<div class="section menuBar bgWhite">
				<div class="sectionTitle borderBottomTitle">The menu</div>
				<div class="sectionContent clear">
					
					<div class="contentMenuBar">
						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Signature cocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>FABRIKA</span></div></span>
											<span class="price">90 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barFabrika.jpg" data-popupGalery="1" /></div>
										<span class="composition">(165 ml) spicy rum, vermouth rosso, spicy mango cordial, raspberry, lime, egg white, pineapple</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>CARROTINE</span></div></span>
											<span class="price">100 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCarrotine.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) gin, red vermouth, carrot cordial, spicy mango, lime, egg white</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>THE RUM DIARY</span></div></span>
											<span class="price">110 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barTheRumDiary.jpg" data-popupGalery="1" /></div>
										<span class="composition">(140 ml) rum plantation, bourbon, amaretto, lime cordial, mascarpone, egg white, mint</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>MARVEL</span></div></span>
											<span class="price">92 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMarvel.jpg" data-popupGalery="1" /></div>
										<span class="composition">(200 ml) rum blanco, rum oro, aperol, peach liqueur, lime cordial, sea buckthorns, egg white</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>MICHURIN</span></div></span>
											<span class="price">95 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMichurin.jpg" data-popupGalery="1" /></div>
										<span class="composition">(140 ml) Gin, lime cordial, cilantro, cucumber, egg white, mascarpone</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PEAR SOUR</span></div></span>
											<span class="price">100 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPearSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) bourbon, pear cordial, lime, egg white</span>
										<span class="desc">description</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Summer cocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>Strawberry Daiquiri</span></div></span>
											<span class="price">95 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barStrawberryDaiquiri.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) Rum, strawberry, lime, lemongrass syrup</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>Red Basil Splash</span></div></span>
											<span class="price">95 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barRedBasilSplash.jpg" data-popupGalery="1" /></div>
										<span class="composition">(160 ml) Gin, strawberry, basil, balsamic cream, lime</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>Sail</span></div></span>
											<span class="price">95 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barSail.jpg" data-popupGalery="1" /></div>
										<span class="composition">(220 ml) Rum, red vermouth, peach liqueur, strawberry foam, mint</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>Creamy Smoothie</span></div></span>
											<span class="price">53 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCreamySmoothie.jpg" data-popupGalery="1" /></div>
										<span class="composition">(200 ml) Strawberry, red basil, mascarpone, lemongrass, lime</span>
										<span class="desc">description</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Cocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>NEGRONI</span></div></span>
											<span class="price">78 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barNegroni.jpg" data-popupGalery="1" /></div>
										<span class="composition">(100 ml) Campari, vermouth, gin broker’s</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>OLD FASHIONED</span></div></span>
											<span class="price">70 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barOldFashioned.jpg" data-popupGalery="1" /></div>
										<span class="composition">(100 ml) angostura bitters, sugar, whiskey wild turkey 101</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>DAIQUIRI</span></div></span>
											<span class="price">90 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barDaiquiri.jpg" data-popupGalery="1" /></div>
										<span class="composition">(125 ml) rum, lime, gomme syrup</span>
										<span class="desc">description</span>
									</div>
								</div>
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">84 uah</span>
										<span class="title">CLOVER CLUB 135 ml</span>
										<span class="desc">Gin, raspberry, lime cordial, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">90 uah</span>
										<span class="title">NEW TIME SOUR 170 ml</span>
										<span class="desc">Bourbon, porto, lime cordial, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">80 uah</span>
										<span class="title">WHISKEY SOUR 140 ml</span>
										<span class="desc">Bourbon, lime cordial, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">WHITE RUSSIAN 130 ml</span>
										<span class="desc">Vodka, kahlua, cream</span>
									</div>
									<div class="txtItem">
										<span class="price">98 uah</span>
										<span class="title">COOPER 135 ml</span>
										<span class="desc">Cointreau, aperol, lime, caramel</span>
									</div>
									<div class="txtItem">
										<span class="price">73 uah</span>
										<span class="title">BOULEVARDIER 90 ml</span>
										<span class="desc">Bourbon, campari, vermouth rosso</span>
									</div>
									<div class="txtItem">
										<span class="price">90 uah</span>
										<span class="title">COSMOPOLITAN 110 ml</span>
										<span class="desc">Vodka lime, cointreau, cranberry, lime</span>
									</div>
									<div class="txtItem">
										<span class="price">90 uah</span>
										<span class="title">MARGARITA 110 ml</span>
										<span class="desc">Tequila, triple sec, lime</span>
									</div>
									<div class="txtItem">
										<span class="price">100 uah</span>
										<span class="title">DRY MARTINI 100 ml</span>
										<span class="desc">Dry vermouth, gin, olive</span>
									</div>
									<div class="txtItem">
										<span class="price">84 uah</span>
										<span class="title">MANHATTAN 100 ml</span>
										<span class="desc">Bourbon, vermouth rosso, angostura bitters</span>
									</div>
									<div class="txtItem">
										<span class="price">90 uah</span>
										<span class="title">BLOODY MARY 220 ml</span>
										<span class="desc">Vodka, tomato juice, celery, lemon, pepper, salt, worcestershire sauce, tabasco</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Craft beer</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCraftBeer.jpg" data-popupGalery="1" /></div>
									</div>
								</div>
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">Dead Pony Club 330 ml</span>
										<span class="desc">BrewDog</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">De Molen Mooi & Meedogenloos 330 ml</span>
										<span class="desc">Brouwerij de Molen</span>
									</div>
									<div class="txtItem">
										<span class="price">100 uah</span>
										<span class="title">Jack Hammer 330 ml</span>
										<span class="desc">BrewDog</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Hot</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">98 uah</span>
										<span class="title">MULLED RED WINE 160 ml</span>
										<span class="desc">Shiraz Osado red wine, fresh orange & lemon, raspberry puree, sea buckthorn puree, honey, cinnamon, star anise</span>
									</div>
									<div class="txtItem">
										<span class="price">72 uah</span>
										<span class="title">IRISH COFFEE 150 ml</span>
										<span class="desc">Jameson Irish whisky, freshly brewed doppio, sugar cane syrup, whipped vanilla cream</span>
									</div>
									<div class="txtItem">
										<span class="price">98 uah</span>
										<span class="title">SWEET JACK 175 ml</span>
										<span class="desc">Jack Daniel's Tennessee whisky, fumigated pears cordial, hazelnut syrup, black chocolate, whipped vanilla cream, fresh butter</span>
									</div>
									<div class="txtItem">
										<span class="price">98 uah</span>
										<span class="title">CINNAMON HOT GLASS 160 ml</span>
										<span class="desc">Spicebox Cinnamon, Sortilege Liq, white wine La Ferme, sugar cane & caramel syrup, fresh squeezed lemon juice, whipped vanilla cream</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">NON-ALCOHOL DRINKS</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">CHERRY LEMONADE 250 ml</span>
										<span class="desc">Hibiscus, cherry, lime, juice, mint</span>
									</div>
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">CUCUMBER LEMONADE 250 ml</span>
										<span class="desc">Cucumber, pear, lime, pear cordial, juice, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">CITRUS LEMONADE 250 ml</span>
										<span class="desc">Lemongrass, fresh-squeezed lime juice, fresh-squeezed orange juice</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Breakfasts all day long</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">60 uah</span>
										<span class="title">Omelette with filling of your choice 120 g</span>
									</div>
									<div class="txtItem">
										<span class="price">90 uah</span>
										<span class="title">Eggs Benedict 250 g</span>
									</div>
									<div class="txtItem">
										<span class="price">117 uah</span>
										<span class="title">Eggs Hemingway 250 g</span>
									</div>
									<div class="txtItem">
										<span class="price">125 uah</span>
										<span class="title">Scrambled Eggs 350 g</span>
									</div>
									<div class="txtItem">
										<span class="price">35 uah</span>
										<span class="title">The Perfect Oatmeal 200/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">67 uah</span>
										<span class="title">Fluffy Cottage Cheese Pancakes 200/50 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Appetizers</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">55 uah</span>
										<span class="title">Chicken Liver Pate 200/100/20 g</span>
									</div>
									<div class="txtItem">
										<span class="price">68 uah</span>
										<span class="title">Hummus 180 g</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
										<span class="title">Hummus with Chicken 180/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">62 uah</span>
										<span class="title">Falafel on Pita with Tzatziki Sauce 120/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">140 uah</span>
										<span class="title">Cheese Platter with Smoked Pear 150/150/25 g</span>
									</div>
									<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">Salted pike caviar with crispy malt bread and butter 50/120/50 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Salads</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">Greek Salad with Roasted Pumpkin Seed 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">83 uah</span>
										<span class="title">Sea Snail Salad 180 g</span>
									</div>
									<div class="txtItem">
										<span class="price">100 uah</span>
										<span class="title">Roasted Beet Salad with Goat Cheese 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">78 uah</span>
										<span class="title">Chicken salad 250 g</span>
									</div>
									<div class="txtItem">
										<span class="price">99 uah</span>
										<span class="title">Beef salad 150 g</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">Summer salad with tiger prawns and fresh strawberries 220 g</span>
									</div>
									<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">Mediterranean grilled octopus salad 200 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Soups</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">43 uah</span>
										<span class="title">Chicken Noodle Soup 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">55 uah</span>
										<span class="title">Creamy Mushroom Soup 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">75 uah</span>
										<span class="title">Okroshka with salmon 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">Okroshka with chicken 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">62 uah</span>
										<span class="title">Traditional Beetroot Soup 300/50/50 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Main Course</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">75 uah</span>
										<span class="title">BBQ Chicken Wings 250/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
										<span class="title">Grilled Chicken Breast 150/150/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
										<span class="title">Grilled Mackerel 150/150/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">77 uah</span>
										<span class="title">Fish & Chips 130/150/130 g</span>
									</div>
									<div class="txtItem">
										<span class="price">60 uah</span>
										<span class="title">Rib-eye Steak for 100 g</span>
									</div>
									<div class="txtItem">
										<span class="price">88 uah</span>
										<span class="title">New York Steak for 100 g</span>
									</div>
									<div class="txtItem">
										<span class="price">142 uah</span>
										<span class="title">Tagliata with Grilled Vegetable Salad 180/200/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">Steak Ossobuco with Stewed Vegetables for 100 g</span>
									</div>
									<div class="txtItem">
										<span class="price">90 uah</span>
										<span class="title">BBQ Pork Ribs with spicy strawberry sauce 200/50 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Side dishes</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">33 uah</span>
										<span class="title">Roasted Creole Potatoes 150 g</span>
									</div>
									<div class="txtItem">
										<span class="price">43 uah</span>
										<span class="title">Grilled Vegetables 150 g</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Sweets</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">49 uah</span>
										<span class="title">Cottage Cheesecake with Jam 150/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">53 uah</span>
										<span class="title">Red Velvet Cake 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">45 uah</span>
										<span class="title">Chocolate cake 210 g</span>
									</div>
									<div class="txtItem">
										<span class="price">45 uah</span>
										<span class="title">Pavlova Anna dessert 150 g</span>
									</div>
									<div class="txtItem">
										<span class="price">40 uah</span>
										<span class="title">Walnut cake 120 g</span>
									</div>
									<div class="txtItem">
										<span class="price">35 uah</span>
										<span class="title">Creme Brulee 120 g</span>
									</div>
									<div class="txtItem">
										<span class="price">15 uah</span>
										<span class="title">Homemade ice-cream 50 g</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="rightSidebarMenuBar">
						<div class="moduleRightSidebarMenuBar">
							<span class="h2">New</span>
							<div class="item">
								<div class="txt">
									<span class="title">Cacao</span>
									<span class="price"><b>40</b> грн</span>
								</div>
								<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCacao.jpg"></div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div><!-- end #content ru-->


	<?php }else{ ?>
		<!--**************** CONTENT RU****************-->
		<div id="content" class="clear">
			<h1>Бар</h1>

			<div class="section aboutBar bgWhite clear">
				<div class="sectionTitle borderBottomTitle">О нас</div>
				<div class="sectionContent clear">
					<div class="txtAboutBar">
						<p>В здании бывшей фабрики на первом этаже с пятиметровыми потолками расположился самый душевный бар города.</p> 
						<p>Отреставрированное пространство сохранило обаяние начала ХХ века, а аутентичные элементы интерьера подчеркивают уникальность бара Fabrika.space. Благодаря отличной кухне и разнообразию напитков фабрика создает  атмосферу, в которую хочется возвращаться снова и снова.</p>
					</div>
					<div class="worktimeAboutBar">
						<img src="/wp-content/themes/fabrika.space/img/services/imgServiceWorktime.png" />
						<div class="txt">
							<p>Мы рады вас видеть<br /> семь дней в неделю<br />в Пятницу и Субботу с 9:00 до 3:00<br />с Воскресенья по Четверг с 9:00 до 24:00</p>
							<p>Харьков,<br /> ул. Благовещенская(бывш. Карла Маркса), 1</p>
						</div>
					</div>
				</div>
			</div>

			<div class="section menuBar bgWhite">
				<div class="sectionTitle borderBottomTitle">Барная карта</div>
				<div class="sectionContent clear">
					
					<div class="contentMenuBar">
						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Фабрика рекомендует</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>FABRIKA</span></div></span>
											<span class="price">90 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barFabrika.jpg" data-popupGalery="1" /></div>
										<span class="composition">(165 ml) spicy rum, vermouth rosso, spicy mango cordial, raspberry, lime, egg white, pineapple</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>CARROTINE</span></div></span>
											<span class="price">100 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCarrotine.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) gin, red vermouth, carrot cordial, spicy mango, lime, egg white</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>THE RUM DIARY</span></div></span>
											<span class="price">110 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barTheRumDiary.jpg" data-popupGalery="1" /></div>
										<span class="composition">(140 ml) rum plantation, bourbon, amaretto, lime cordial, mascarpone, egg white, mint</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>MARVEL</span></div></span>
											<span class="price">92 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMarvel.jpg" data-popupGalery="1" /></div>
										<span class="composition">(200 ml) rum blanco, rum oro, aperol, peach liqueur, lime cordial, sea buckthorns, egg white</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>MICHURIN</span></div></span>
											<span class="price">95 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMichurin.jpg" data-popupGalery="1" /></div>
										<span class="composition">(140 ml) gin, lime cordial, cilantro, cucumber, egg white, mascarpone</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PEAR SOUR</span></div></span>
											<span class="price">100 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPearSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) bourbon, pear cordial, lime, egg white</span>
										<span class="desc">description</span>
									</div>

								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Летние коктейли</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>Strawberry Daiquiri</span></div></span>
											<span class="price">95 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barStrawberryDaiquiri.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) Rum, strawberry, lime, lemongrass syrup</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>Red Basil Splash</span></div></span>
											<span class="price">95 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barRedBasilSplash.jpg" data-popupGalery="1" /></div>
										<span class="composition">(160 ml) Gin, strawberry, basil, balsamic cream, lime</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>Sail</span></div></span>
											<span class="price">95 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barSail.jpg" data-popupGalery="1" /></div>
										<span class="composition">(220 ml) Rum, red vermouth, peach liqueur, strawberry foam, mint</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>Creamy Smoothie</span></div></span>
											<span class="price">53 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCreamySmoothie.jpg" data-popupGalery="1" /></div>
										<span class="composition">(200 ml) Strawberry, red basil, mascarpone, lemongrass, lime</span>
										<span class="desc">description</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Коктейли</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>NEGRONI</span></div></span>
											<span class="price">78 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barNegroni.jpg" data-popupGalery="1" /></div>
										<span class="composition">(100 ml) campari, vermouth, gin broker’s</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>OLD FASHIONED</span></div></span>
											<span class="price">70 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barOldFashioned.jpg" data-popupGalery="1" /></div>
										<span class="composition">(100 ml) angostura bitters, sugar, whiskey wild turkey 101</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>DAIQUIRI</span></div></span>
											<span class="price">90 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barDaiquiri.jpg" data-popupGalery="1" /></div>
										<span class="composition">(125 ml) rum, lime, gomme syrup</span>
										<span class="desc">description</span>
									</div>
								</div>
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">84 грн</span>
										<span class="title">CLOVER CLUB 135 ml</span>
										<span class="desc">Gin, raspberry, lime cordial, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">NEW TIME SOUR 170 ml</span>
										<span class="desc">Bourbon, porto, lime cordial, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">80 грн</span>
										<span class="title">WHISKEY SOUR 140 ml</span>
										<span class="desc">Bourbon, lime cordial, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">WHITE RUSSIAN 130 ml</span>
										<span class="desc">Vodka, kahlua, cream</span>
									</div>
									<div class="txtItem">
										<span class="price">98 грн</span>
										<span class="title">COOPER 135 ml</span>
										<span class="desc">Cointreau, aperol, lime, caramel</span>
									</div>
									<div class="txtItem">
										<span class="price">73 грн</span>
										<span class="title">BOULEVARDIER 90 ml</span>
										<span class="desc">Bourbon, campari, vermouth rosso</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">COSMOPOLITAN 110 ml</span>
										<span class="desc">Vodka lime, cointreau, cranberry, lime</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">MARGARITA 110 ml</span>
										<span class="desc">Tequila, triple sec, lime</span>
									</div>
									<div class="txtItem">
										<span class="price">100 грн</span>
										<span class="title">DRY MARTINI 100 ml</span>
										<span class="desc">Dry vermouth, gin, olive</span>
									</div>
									<div class="txtItem">
										<span class="price">84 грн</span>
										<span class="title">MANHATTAN 100 ml</span>
										<span class="desc">Bourbon, vermouth rosso, angostura bitters</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">BLOODY MARY 220 ml</span>
										<span class="desc">Vodka, tomato juice, celery, lemon, pepper, salt, worcestershire sauce, tabasco</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Крафтовое пиво</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCraftBeer.jpg" data-popupGalery="1" /></div>
									</div>
								</div>
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">Dead Pony Club 330 ml</span>
										<span class="desc">BrewDog</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">De Molen Mooi & Meedogenloos 330 ml</span>
										<span class="desc">Brouwerij de Molen</span>
									</div>
									<div class="txtItem">
										<span class="price">100 грн</span>
										<span class="title">Jack Hammer 330 ml</span>
										<span class="desc">BrewDog</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Hot</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">198 грн</span>
										<span class="title">MULLED WINE 160 ml</span>
										<span class="desc">Shiraz Osado red wine, fresh orange & lemon, raspberry puree, sea buckthorn puree, honey, cinnamon, star anise</span>
									</div>
									<div class="txtItem">
										<span class="price">72 грн</span>
										<span class="title">IRISH COFFEE 150 ml</span>
										<span class="desc">Jameson Irish whisky, freshly brewed doppio, sugar cane syrup, whipped vanilla cream</span>
									</div>
									<div class="txtItem">
										<span class="price">98 грн</span>
										<span class="title">SWEET JACK 175 ml</span>
										<span class="desc">Jack Daniel's Tennessee whisky, fumigated pears cordial, hazelnut syrup, black chocolate, whipped vanilla cream, fresh butter</span>
									</div>
									<div class="txtItem">
										<span class="price">98 грн</span>
										<span class="title">CINNAMON HOT GLASS 160 ml</span>
										<span class="desc">Spicebox Cinnamon, Sortilege Liq, white wine La Ferme, sugar cane & caramel syrup, fresh squeezed lemon juice, whipped vanilla cream</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Безалкогольные напитки</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">CHERRY LEMONADE 250 ml</span>
										<span class="desc">Hibiscus, cherry, lime, juice, mint</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">CUCUMBER LEMONADE 250 ml</span>
										<span class="desc">Cucumber, pear, lime, pear cordial, juice, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">CITRUS LEMONADE 250 ml</span>
										<span class="desc">Lemongrass, fresh-squeezed lime juice, fresh-squeezed orange juice</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Завтраки весь день</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">60 грн</span>
										<span class="title">Омлет с начинкой на выбор 120 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">Яйца Бенедикт 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">117 грн</span>
										<span class="title">Яйца "Хемингуэй" 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">125 грн</span>
										<span class="title">Яйца скрэмбл 350 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">35 грн</span>
										<span class="title">Овсяная каша на яблочном фреше 200/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">67 грн</span>
										<span class="title">Сырники 200/50 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Закуски</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">55 грн</span>
										<span class="title">Паштет из куриной печени с тостами 200/100/20 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">68 грн</span>
										<span class="title">Хумус 180 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">85 грн</span>
										<span class="title">Хумус с куриным филе 180/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">62 грн</span>
										<span class="title">Фалафель в пите с соусом дзадзики 120/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">140 грн</span>
										<span class="title">Сырная тарелка мягких сыров c копченой грушей 150/150/25 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">120 грн</span>
										<span class="title">Икра слабосолёная щуки с солодовым хлебом и сливочным маслом 50/120/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price"></span>
										<span class="title"></span>
									</div>
									<div class="txtItem">
										<span class="price"></span>
										<span class="title"></span>
									</div>
									<div class="txtItem">
										<span class="price"></span>
										<span class="title"></span>
									</div>
									<div class="txtItem">
										<span class="price"></span>
										<span class="title"></span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Салаты</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">99 грн</span>
										<span class="title">Салат греческий 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">Салат из рапанов 180 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">Салат из запеченной свеклы c мягким козим сыром 240 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">Салат из курицы 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">110 грн</span>
										<span class="title">Теплый салат из телятины 150 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">Салат с тригровыми креветками 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">130 грн</span>
										<span class="title">Салат со средиземноморским осьминогом на гриле и авокадо 250 гр.</span>
									</div>
								</div>
							</div>
						</div>


						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Супы</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">Куриный бульон с домашней лапшой 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">65 грн</span>
										<span class="title">Крем-суп из шампиньонов и белых грибов 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">77 грн</span>
										<span class="title">Финская уха с семгой и сливками 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">65 грн</span>
										<span class="title">Согревающий чечевичный суп c копченым перцем 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">Томатный суп с нутом и копчёным ягнёнком 300 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Основные блюда</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">Крылышки BBQ 250/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">ФКуриное филе на гриле 150/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">85 грн</span>
										<span class="title">Филе скумбрии на гриле 150/150/30 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">Рыба из хоспера с овощами гриль 300/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">70 грн</span>
										<span class="title">Стейк Рибай за 100 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">Стейк New York за 100 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">165 грн</span>
										<span class="title">Тальята с салатом из овощей гриль 180/200/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">155 грн</span>
										<span class="title">"Оссо буко из индейки с томлеными овощами и картофельным пюре с пастернаком 250/150/200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">99 грн</span>
										<span class="title">Fish & chips 130/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">145 грн</span>
										<span class="title">Каре телятины с жареным картофелем и с печеным болгарским перцем 150/150/30 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">140 грн</span>
										<span class="title">Говяжьи рёбрышки, томленые в смокере с тушёной капустой 200/150 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Гарниры</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">40 грн</span>
										<span class="title">Картофель по-креольски 150 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">48 грн</span>
										<span class="title">Овощи гриль 150 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Десерты</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">59 грн</span>
										<span class="title">Творожный кейк с домашним вареньем 150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">65 грн</span>
										<span class="title">Красный бархат 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">55 грн</span>
										<span class="title">Шоколадный торт 210 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">55 грн</span>
										<span class="title">Десерт Анна Павлова 150 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">45 грн</span>
										<span class="title">Ореховый торт 120 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">45 грн</span>
										<span class="title">Крем-брюле 120 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">20 грн</span>
										<span class="title">Домашнее мороженое 50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">Яблочно-клубничный крисп с шариком ванильного мороженого 130/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">20 грн</span>
										<span class="title">Конфеты ручной работы 8-15 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">Груша, запеченная в стиле крамбл 200 гр.</span>
									</div>
								</div>
							</div>
						</div>
						
					</div>

					<div class="rightSidebarMenuBar">
						<div class="moduleRightSidebarMenuBar">
							<span class="h2">Новые напитки</span>
							<div class="item">
								<div class="txt">
									<span class="title">Какао с маршмеллоу</span>
									<span class="price"><b>45</b> грн</span>
								</div>
								<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCacao.jpg"></div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div><!-- end #content ru-->
	<?php } ?>
	</div><!-- end #main-->

<?php get_footer(); ?>
