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
										<span class="price">90 uah</span>
										<span class="title">Punk IPA 330 ml</span>
										<span class="desc">BrewDog</span>
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
										<span class="price">100 uah</span>
										<span class="title">MULLED WINE 210 ml</span>
										<span class="desc">Red dry wine, sea buckthorns, raspberry, orange, lemon, cinnamon, clove, honey</span>
									</div>
									<div class="txtItem">
										<span class="price">75 uah</span>
										<span class="title">IRISH COFFEE 200 ml</span>
										<span class="desc">Whiskey, cream, coffee, sugar</span>
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
										<span class="price">90 грн</span>
										<span class="title">Punk IPA 330 ml</span>
										<span class="desc">BrewDog</span>
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
										<span class="price">100 грн</span>
										<span class="title">MULLED WINE 210 ml</span>
										<span class="desc">Red dry wine, sea buckthorns, raspberry, orange, lemon, cinnamon, clove, honey</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">IRISH COFFEE 200 ml</span>
										<span class="desc">Whiskey, cream, coffee, sugar</span>
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
										<span class="price">55 грн</span>
										<span class="title">Омлет с начинкой на выбор 120 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">83 грн</span>
										<span class="title">Яйца Бенедикт 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">Яйца по-Флорентийски 250 гр.</span>
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
						
					</div>

					<div class="rightSidebarMenuBar">
						<div class="moduleRightSidebarMenuBar">
							<span class="h2">Новые напитки</span>
							<div class="item">
								<div class="txt">
									<span class="title">Какао с маршмеллоу</span>
									<span class="price"><b>40</b> грн</span>
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
