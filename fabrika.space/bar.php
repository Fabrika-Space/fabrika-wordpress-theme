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
		<!--**************** CONTENT RU****************-->
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
										<span class="composition">(140 ml) spicy rum, vermouth rosso, spicy mango cordial, raspberry, lime, egg white, pineapple</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>MICHURIN</span></div></span>
											<span class="price">100 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCilantroSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) Gin, lime cordial, cilantro, cucumber, egg white, mascarpone</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>AMIGO</span></div></span>
											<span class="price">100 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barAmigo.jpg" data-popupGalery="1" /></div>
										<span class="composition">(135 ml) tequila, agave sec, cranberry, gomme syrup, lime, egg white, cardamom</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PEAR SOUR</span></div></span>
											<span class="price">80 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPearSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(120 ml) bourbon, pear cordial, lime, egg white</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>WILD SOUR</span></div></span>
											<span class="price">85 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barWildSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(120 ml) grand marnier, lime cordial, sugar, egg white, rosemary</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PASSION APHRODITE</span></div></span>
											<span class="price">120 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPassionAphrodite.jpg" data-popupGalery="1" /></div>
										<span class="composition">(200 ml) pineapple, baileys, grape brandy, mascarpone</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PINK FUME</span></div></span>
											<span class="price">90 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPinkFume.jpg" data-popupGalery="1" /></div>
										<span class="composition">(100 ml) yogurt liquor, sloe gin, amaretto, mascarpone</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>HLEB</span></div></span>
											<span class="price">90 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barHleb.jpg" data-popupGalery="1" /></div>
										<span class="composition">(110 ml) rye bread bourbon, lime, gomme syrup, prune, bread</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>RYE OLD FASHIONED</span></div></span>
											<span class="price">135 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barRyeOldFashioned.jpg" data-popupGalery="1" /></div>
										<span class="composition">(80 ml) rye bourbon, whiskey barrel bitters, sugar</span>
										<span class="desc">description</span>
									</div>

								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Cocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">80 uah</span>
										<span class="title">CILANTRO SOUR 110 ml </span>
										<span class="desc">Bourbon, cilantro cordial, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">80 uah</span>
										<span class="title">CLOVER CLUB 150 ml</span>
										<span class="desc">Gin, raspberry, lime cordial, sugar, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">80 uah</span>
										<span class="title">NEW TIME SOUR 150 ml</span>
										<span class="desc">Bourbon, porto, gomme syrup, lime, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">80 uah</span>
										<span class="title">WHISKEY SOUR 120 ml</span>
										<span class="desc">Bourbon, gomme syrup, lime, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">100 uah</span>
										<span class="title">IFIZZ 140 ml</span>
										<span class="desc">Quince gin, lime cordial, egg white, soda water</span>
									</div>
									<div class="txtItem">
										<span class="price">90 uah</span>
										<span class="title">WHITE RUSSIAN 120 ml</span>
										<span class="desc">Vodka, kahlua, cream</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
										<span class="title">COOPER 130 ml</span>
										<span class="desc">Cointreau, aperol, lime, caramel</span>
									</div>
									<div class="txtItem">
										<span class="price">70 uah</span>
										<span class="title">OLD FASHIONED 90 ml</span>
										<span class="desc">Bourbon, angostura bitters, sugar</span>
									</div>
									<div class="txtItem">
										<span class="price">70 uah</span>
										<span class="title">NEGRONI (basic/spicy) 90 ml</span>
										<span class="desc">Gin, campari, vermouth rosso </span>
									</div>
									<div class="txtItem">
										<span class="price">70 uah</span>
										<span class="title">BOULEVARDIER (basic/spicy) 90 ml</span>
										<span class="desc">Bourbon, campari, vermouth rosso</span>
									</div>
									<div class="txtItem">
										<span class="price">100 uah</span>
										<span class="title">BOULEVARDIER PRUNES (basic/spicy) 90 ml</span>
										<span class="desc">Bourbon, campari, vermouth rosso, tobacco bitters, prunes</span>
									</div>
									<div class="txtItem">
										<span class="price">60 uah</span>
										<span class="title">COSMOPOLITAN 110 ml</span>
										<span class="desc">Vodka lime, cointreau, cranberry, lime</span>
									</div>
									<div class="txtItem">
										<span class="price">60 uah</span>
										<span class="title">DAIQUIRI 110 ml</span>
										<span class="desc">Rum, lime, gomme syrup</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
										<span class="title">MARGARITA 110 ml</span>
										<span class="desc">Tequila, cointreau, lime</span>
									</div>
									<div class="txtItem">
										<span class="price">90 uah</span>
										<span class="title">DRY MARTINI 110 ml</span>
										<span class="desc">Dry vermouth, gin, olive</span>
									</div>
									<div class="txtItem">
										<span class="price">80 uah</span>
										<span class="title">MANHATTAN 90 ml</span>
										<span class="desc">Bourbon, vermouth rosso, angostura bitters</span>
									</div>
									<div class="txtItem">
										<span class="price">140 uah</span>
										<span class="title">PERFECT MANHATTAN 90 ml</span>
										<span class="desc">Rye bourbon, vermouth rosso, whisky barrel bitters</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
										<span class="title">BLOODY MARY 200 ml</span>
										<span class="desc">Vodka, tomato juice, celery, lemon, pepper, salt, worcestershire sauce, tabasco</span>
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
										<span class="price">100 uah</span>
										<span class="title">CINNAMON CREAM 160 ml</span>
										<span class="desc">cinnamon whiskey, drambuie, caramel, apple, cream, nutmeg</span>
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
										<span class="title">RASPBERRY LEMONADE 200 ml</span>
										<span class="desc">Raspberry, ginger, peach juice, honey syrup, soda water</span>
									</div>
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">ORANGE LEMONADE 200 ml</span>
										<span class="desc">Orange, ginger, passion fruit syrup, soda water</span>
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
										<span class="composition">(140 ml) spicy rum, vermouth rosso, spicy mango cordial, raspberry, lime, egg white, pineapple</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>MICHURIN</span></div></span>
											<span class="price">100 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCilantroSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) Gin, lime cordial, cilantro, cucumber, egg white, mascarpone</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>AMIGO</span></div></span>
											<span class="price">100 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barAmigo.jpg" data-popupGalery="1" /></div>
										<span class="composition">(135 ml) tequila, agave sec, cranberry, gomme syrup, lime, egg white, cardamom</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PEAR SOUR</span></div></span>
											<span class="price">80 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPearSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(120 ml) bourbon, pear cordial, lime, egg white</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>WILD SOUR</span></div></span>
											<span class="price">85 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barWildSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(120 ml) grand marnier, lime cordial, sugar, egg white, rosemary</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PASSION APHRODITE</span></div></span>
											<span class="price">120 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPassionAphrodite.jpg" data-popupGalery="1" /></div>
										<span class="composition">(200 ml) pineapple, baileys, grape brandy, mascarpone</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PINK FUME</span></div></span>
											<span class="price">90 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPinkFume.jpg" data-popupGalery="1" /></div>
										<span class="composition">(100 ml) yogurt liquor, sloe gin, amaretto, mascarpone</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>HLEB</span></div></span>
											<span class="price">90 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barHleb.jpg" data-popupGalery="1" /></div>
										<span class="composition">(110 ml) rye bread bourbon, lime, gomme syrup, prune, bread</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>RYE OLD FASHIONED</span></div></span>
											<span class="price">135 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barRyeOldFashioned.jpg" data-popupGalery="1" /></div>
										<span class="composition">(80 ml) rye bourbon, whiskey barrel bitters, sugar</span>
										<span class="desc">description</span>
									</div>

								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Cocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">80 грн</span>
										<span class="title">CILANTRO SOUR 110 ml </span>
										<span class="desc">Bourbon, cilantro cordial, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">80 грн</span>
										<span class="title">CLOVER CLUB 150 ml</span>
										<span class="desc">Gin, raspberry, lime cordial, sugar, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">80 грн</span>
										<span class="title">NEW TIME SOUR 150 ml</span>
										<span class="desc">Bourbon, porto, gomme syrup, lime, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">80 грн</span>
										<span class="title">WHISKEY SOUR 120 ml</span>
										<span class="desc">Bourbon, gomme syrup, lime, egg white</span>
									</div>
									<div class="txtItem">
										<span class="price">100 грн</span>
										<span class="title">IFIZZ 140 ml</span>
										<span class="desc">Quince gin, lime cordial, egg white, soda water</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">WHITE RUSSIAN 120 ml</span>
										<span class="desc">Vodka, kahlua, cream</span>
									</div>
									<div class="txtItem">
										<span class="price">85 грн</span>
										<span class="title">COOPER 130 ml</span>
										<span class="desc">Cointreau, aperol, lime, caramel</span>
									</div>
									<div class="txtItem">
										<span class="price">70 грн</span>
										<span class="title">OLD FASHIONED 90 ml</span>
										<span class="desc">Bourbon, angostura bitters, sugar</span>
									</div>
									<div class="txtItem">
										<span class="price">70 грн</span>
										<span class="title">NEGRONI (basic/spicy) 90 ml</span>
										<span class="desc">Gin, campari, vermouth rosso </span>
									</div>
									<div class="txtItem">
										<span class="price">70 грн</span>
										<span class="title">BOULEVARDIER (basic/spicy) 90 ml</span>
										<span class="desc">Bourbon, campari, vermouth rosso</span>
									</div>
									<div class="txtItem">
										<span class="price">100 грн</span>
										<span class="title">BOULEVARDIER PRUNES (basic/spicy) 90 ml</span>
										<span class="desc">Bourbon, campari, vermouth rosso, tobacco bitters, prunes</span>
									</div>
									<div class="txtItem">
										<span class="price">60 грн</span>
										<span class="title">COSMOPOLITAN 110 ml</span>
										<span class="desc">Vodka lime, cointreau, cranberry, lime</span>
									</div>
									<div class="txtItem">
										<span class="price">60 грн</span>
										<span class="title">DAIQUIRI 110 ml</span>
										<span class="desc">Rum, lime, gomme syrup</span>
									</div>
									<div class="txtItem">
										<span class="price">85 грн</span>
										<span class="title">MARGARITA 110 ml</span>
										<span class="desc">Tequila, cointreau, lime</span>
									</div>
									<div class="txtItem">
										<span class="price">90 грн</span>
										<span class="title">DRY MARTINI 110 ml</span>
										<span class="desc">Dry vermouth, gin, olive</span>
									</div>
									<div class="txtItem">
										<span class="price">80 грн</span>
										<span class="title">MANHATTAN 90 ml</span>
										<span class="desc">Bourbon, vermouth rosso, angostura bitters</span>
									</div>
									<div class="txtItem">
										<span class="price">140 грн</span>
										<span class="title">PERFECT MANHATTAN 90 ml</span>
										<span class="desc">Rye bourbon, vermouth rosso, whisky barrel bitters</span>
									</div>
									<div class="txtItem">
										<span class="price">85 грн</span>
										<span class="title">BLOODY MARY 200 ml</span>
										<span class="desc">Vodka, tomato juice, celery, lemon, pepper, salt, worcestershire sauce, tabasco</span>
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
										<span class="price">100 грн</span>
										<span class="title">CINNAMON CREAM 160 ml</span>
										<span class="desc">cinnamon whiskey, drambuie, caramel, apple, cream, nutmeg</span>
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
							<div class="titleCategoryMenuBar act">NON-ALCOHOL DRINKS</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">RASPBERRY LEMONADE 200 ml</span>
										<span class="desc">Raspberry, ginger, peach juice, honey syrup, soda water</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">ORANGE LEMONADE 200 ml</span>
										<span class="desc">Orange, ginger, passion fruit syrup, soda water</span>
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
								<!--span class="desc">Состав: красное/белое вино, коньяк, цедра апельсина, яблоки, корица молотая, корица-палочка, апельсиновый сок, мёд, звёздочка бадьяна и гвоздика</span-->
							</div>
						</div>
					</div>

				</div>
			</div>

		</div><!-- end #content ru-->
	<?php } ?>
	</div><!-- end #main-->

<?php get_footer(); ?>
