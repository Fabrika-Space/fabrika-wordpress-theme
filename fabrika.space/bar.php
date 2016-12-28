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
											<span class="price">98 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barFabrika.jpg" data-popupGalery="1" /></div>
										<span class="composition">(180 ml) Rum Plantation Dark infused chili, vermouth Dolin Rouge, vermouth Cinzano 1757, lime cordial, raspberry, egg white</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>MARVEL</span></div></span>
											<span class="price">98 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMarvel.jpg" data-popupGalery="1" /></div>
										<span class="composition">(200 ml) Matusalem Platino rum, Matusalem Anejo rum, Aperol, Cartron peach liq, lime cordial, sea buckthorn puree, egg white</span>
										<span class="desc">description</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Sweet & Sour</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">86 грн</span>
										<span class="title">WHISKY SOUR "TRADITIONAL OR RYE" 140 ml</span>
										<span class="desc">Wild Turkey 101 bourbon or Rye bourbon, Suze Bitters orange, sugar cane syrup, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">NEW YORK SOUR "TRADITIONAL OR RYE" 180 ml</span>
										<span class="desc">Jim Beam White Label or Rye, Sandeman Tawny porto, fresh squeezed lime juice, sugar cane syrup, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">120 грн</span>
										<span class="title">PUBLISHING SOUR 120 ml</span>
										<span class="desc">Teacher's Highland Cream, Strega liquore, Suze Bitters orange, fresh squeezed lime juice, sugar cane & caramel syrup, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">86 грн</span>
										<span class="title">MR PEAR'S SOUR 160 ml</span>
										<span class="desc">Wild Turkey 101 bourbon, fumigated pears cordial, muscat, fresh squeezed lime juice, Scrappy's Bitters Orleans, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">110 грн</span>
										<span class="title">"BLIND CAT" RAY CHARLES SOUR 170 ml</span>
										<span class="desc">Hayman's Old Tom botanical infused gin, lavender syrup, Suze Saveur d'Autrefois, Amaretto liq, fresh squeezed lime juice, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">155 грн</span>
										<span class="title">MEZCAL SOUR 140 ml</span>
										<span class="desc">Mezcal Vida, tequila El Jimador Reposado, Agave Sec, kumquat, lemongrass syrup, fresh squeezed lime & orange, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">112 грн</span>
										<span class="title">PLAYFUL BIRD 170 ml</span>
										<span class="desc">Wild Turkey 101 bourbon, Cassis de Bourgogne, Fernet Branca, Campari, Miol Prosecco Treviso, Suze Bitters red</span>
									</div>
									<div class="txtItem">
										<span class="price">112 грн</span>
										<span class="title">P.S. PARIS LOVER 160 ml</span>
										<span class="desc">Gordon's Gin, Chartreuse Green, lavender syrup, Miol Prosecco Treviso, Peychaud's Bitters</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Classic & Twists</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>NEGRONI</span></div></span>
											<span class="price">92 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barNegroni.jpg" data-popupGalery="1" /></div>
										<span class="composition">(90 ml) Gordon's gin, Campari, vermouth Dolin Rouge, vermouth Cinzano 1757, Suze Bittters orange</span>
										<span class="desc">description</span>
									</div>
								</div>
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">117 грн</span>
										<span class="title">LAST WORD 90 ml</span>
										<span class="desc">Hayman's Old Tom gin infused botanical, Chartreuse Green, Marasquino liq, fresh squeezed lime juice, Suze Bitters orange</span>
									</div>
									<div class="txtItem">
										<span class="price">108 грн</span>
										<span class="title">TUXEDO COCKTAIL 90 ml</span>
										<span class="desc">Hayman's Old Tom gin, Manzanilla Deliciosa dry sherry, Suze Saveur d'Autrefois, Suze Bitters orange</span>
									</div>
									<div class="txtItem">
										<span class="price">110 грн</span>
										<span class="title">FIVE BULLETS 106 ml</span>
										<span class="desc">Jim Beam rye bourbon, Kahlua, Sandeman Tawny porto, Creme de Cassis de Bourgogne, Scrappy's Bittters Orleans</span>
									</div>
									<div class="txtItem">
										<span class="price">98 грн</span>
										<span class="title">CORPSE REVIVER #2 110 ml</span>
										<span class="desc">Gordon's gin, Grand Marnier, Lillet Blanc, dash of Absinthe, fresh squeezed lime juice</span>
									</div>
									<div class="txtItem">
										<span class="price">119 грн</span>
										<span class="title">BOHEMIAN WAY 110 ml</span>
										<span class="desc">Becherovka Original, Sandeman Tawny porto, Marasquino liq, Laphroaig Select, Bittermens Boston Bittahs</span>
									</div>
									<div class="txtItem">
										<span class="price">106 грн</span>
										<span class="title">DAIQUIRI HEMINGWAY / JAMAICA 130 ml</span>
										<span class="desc">Jamaica Pot Still rum, Matusalem Platino rum, Marasquino liq, fresh squeezed grapefruit & lime juice</span>
									</div>
									<div class="txtItem">
										<span class="price">98 грн</span>
										<span class="title">DAIQUIRI 110 ml</span>
										<span class="desc">Matusalem Platino rum, Matusalem Anejo rum, lemongrass syrup, fresh squeezed lime juice</span>
									</div>
									<div class="txtItem">
										<span class="price">123 грн</span>
										<span class="title">PROSPECTOR BY JAY JONES 90 ml</span>
										<span class="desc">Luis Caballero Milenario Solera Reserva brandy, Chartreuse green, Carton triple sec, Creme de Cacao White, Peychaud's bitters</span>
									</div>
									<div class="txtItem">
										<span class="price">102 грн</span>
										<span class="title">EL BOULEVARDINIO 100 ml</span>
										<span class="desc">Four Roses bourbon, red sherry El Candado, Campari, vermouth Dolin Rouge, Cinzano 1757, Riga Black Currant, Scrappy's Bitters Orleans</span>
									</div>
									<div class="txtItem">
										<span class="price">96 грн</span>
										<span class="title">BOULEVARDIER 90 ml</span>
										<span class="desc">Wild Turkey 101 bourbon, Campari, vermouth Dolin Rouge, vermouth Cinzano 1757, Suze Bitters orange</span>
									</div>
									<div class="txtItem">
										<span class="price">92 грн</span>
										<span class="title">ESPRESSO MARTINI CURRANT 100 ml</span>
										<span class="desc">Finlandia Currant, Kahlua, Riga Black Currant, coffee Doppio</span>
									</div>
									<div class="txtItem">
										<span class="price">106 грн</span>
										<span class="title">PAPERBOY 100 ml</span>
										<span class="desc">rum Plantation Original Dark, Hayman's Sloe gin, Cartron peach liq, vermouth Cinzano 1757, Bittermens Boston Bittahs</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">OAK VALLEY 95 ml</span>
										<span class="desc">TAP 357 whisky, Mellow Corn American whisky, Suze Bitters orange</span>
									</div>
									<div class="txtItem">
										<span class="price">110 грн</span>
										<span class="title">MARGARITA 98 ml</span>
										<span class="desc">El Jimador Silver, Cartron Triple Sec, agave sec liq, fresh squeezed lime juice, salt</span>
									</div>
									<div class="txtItem">
										<span class="price">96 грн</span>
										<span class="title">COSMOPOLITAN 110 ml</span>
										<span class="desc">Finlandia Cranberry, Cartron Triple Sec, lemongrass syrup, fresh cranberries, fresh squeezed lime juice</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">WHITE RUSSIAN 120 ml</span>
										<span class="desc">Finlandia vodka, Kahlua, cream</span>
									</div>
									<div class="txtItem">
										<span class="price">130 грн</span>
										<span class="title">LONG ISLAND ICED TEA 200 ml</span>
										<span class="desc">Finlandia vodka, El Jimador Silver, Gordon's gin, Matusalem Platino rum, Triple Sec liq, fresh squeezed lime juice, coke</span>
									</div>
									<div class="txtItem">
										<span class="price">130 грн</span>
										<span class="title">BLOODY MARY 200 ml</span>
										<span class="desc">Finlandia vodka, special tomato pre mix "15 ingredients", fresh squeezed lime juice</span>
									</div>
								</div>
							</div>
						</div>
							
						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Old School</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">86-210 грн</span>
										<span class="title">OLD FASHIONED  100 ml</span>
										<span class="desc">whisky, angostura bitters, sugar cane, sode</span>
										<span class="desc">Whisky at your option: Four Roses, Wild Turkey 101 / Rye, Bulleit RYE , Teacher's Highland Cream, Woodford Reserve, Jim Beam Rye, Maker's Mark</span>
									</div>
									<div class="txtItem">
										<span class="price">96-217 грн</span>
										<span class="title">MANHATTAN  100 ml</span>
										<span class="desc">whisky, red vermouth, angostura bitters</span>
										<span class="desc">Whisky at your option: Four Roses, Wild Turkey 101 / Rye, Ballantine`s Finest, Woodford Reserve, Jim Beam Rye, Bulleit Bourbon, Maker's Mark</span>
									</div>
									<div class="txtItem">
										<span class="price">98-156 грн</span>
										<span class="title">DRY MARTINI  100 ml</span>
										<span class="desc">dry vermouth, gin, olive</span>
										<span class="desc">Gin at your option: Gordon's, Hayman's Old Tom, Hendrick's Gin, Tanqueray #10</span>
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
										<span class="price">45 грн</span>
										<span class="title">FRESH-SQUEEZED ORANGE JUICE 250 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">45 грн</span>
										<span class="title">FRESH-SQUEEZED GRAPEFRUIT JUICE 250 ml</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Завтраки весь день</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">70 грн</span>
										<span class="title">Омлет с начинкой на выбор 120/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
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
										<span class="price">50 грн</span>
										<span class="title">Овсяная каша на яблочном фреше 200/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">Сырники 200/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">60 грн</span>
										<span class="title">Гранола с йогуртом и ягодным джемом 300 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Закуски</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">60 грн</span>
										<span class="title">Паштет из куриной печени с тостами 200/100/40 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">Хумус 180/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">Хумус с куриным филе 180/80/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">Фалафель в пите с соусом дзадзики 130/50/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">155 грн</span>
										<span class="title">Сырная тарелка мягких сыров c копченой грушей 150/150/25 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">140 грн</span>
										<span class="title">Икра слабосолёная щуки с солодовым хлебом и сливочным маслом 50/120/50 гр.</span>
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
										<span class="price">95 грн</span>
										<span class="title">Крылья BBQ в сладком чили 400 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">Куриное филе на гриле 150/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">85 грн</span>
										<span class="title">Филе скумбрии на гриле 150/150/30 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">179 грн</span>
										<span class="title">Рыба в соусе мису 400/200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">Стейк New York за 100 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">179 грн</span>
										<span class="title">Тальята с салатом из овощей гриль 200/160/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">155 грн</span>
										<span class="title">Оссо буко из индейки с томлеными овощами и картофельным пюре с пастернаком 250/150/200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">99 грн</span>
										<span class="title">Fish & chips 130/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">Нежная куриная печень в сладком соусе порто c картофельным пюре 120/200/100 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">145 грн</span>
										<span class="title">Мусака 400 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">149 грн</span>
										<span class="title">Свиные ребра "Одеон" 400 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Гарниры</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">49 грн</span>
										<span class="title">Картофель по-креольски 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">55 грн</span>
										<span class="title">Овощи гриль 200 гр.</span>
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
