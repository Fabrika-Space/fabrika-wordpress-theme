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
				<div class="sectionContent">
					<div class="txtAboutBar">
						<p>The most soulful bar of Kharkiv is situated in the former factory building with five-meter high ceilings.</p>
						<p>You can still feel the charm of the early XX century in the renovated space of Fabrika thanks to authentic elements of design and interior. Excellent cuisine, variety of drinks and unique atmosphere will make you want to come back for more once you visit us for the first time.</p>
					</div>
					<div class="worktimeAboutBar">
						<img src="/wp-content/themes/fabrika.space/img/services/imgServiceWorktime.png" />
						<div class="txt">
							<p>Working hours<br />Friday and Saturday - 10:00 to 3:00<br />Sunday to Thursday - 10:00 to 00:00</p>
							<p>Blagovischenska str. 1, Kharkiv, Ukraine</p>
						</div>
					</div>
				</div>
			</div>

			<div class="section menuBar bgWhite clear">
				<div class="sectionTitle borderBottomTitle">The menu</div>
				<div class="sectionContent">
					<div class="contentMenuBar">

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Fabrika Concept Cocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>FABRIKA</span></div></span>
											<span class="price">105 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barFabrika.jpg" data-popupGalery="1" /></div>
										<span class="composition">(155 ml) Rum Captain Morgan Spiced Gold, Vermout Cinzano 1757, Raspberry, Syrup Spicy Mango, Fresh Squeezed Lemon Juice, Egg White </span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>PASSION SOUR</div></span>
											<span class="price">105 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPassionSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) Gin Gordon's, Fresh Passion Fruit, Fresh Squeezed Orange & Lemon, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>COOKIE FOR BREAKFAST</div></span>
											<span class="price">105 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCookieForBreakfast.jpg" data-popupGalery="1" /></div>
										<span class="composition">(135 ml) Rum Matusalem Platino, Campari, Fresh Squeezed Orange & Lemon Juice, Haselnut Syrup</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>MARVEL</div></span>
											<span class="price">105 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMarvel.jpg" data-popupGalery="1" /></div>
										<span class="composition">(125 ml) Rum Captain Morgan Spiced Gold, Aperol, Liquor Peach, Sea Buckthorn, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>SMOKY SOUR</div></span>
											<span class="price">120 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barSmokySour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(160 ml) Tequila El Himador Silver, Mezcal Vida, Pineapple, Ginger, Sugar Syrup, Fresh Squeezed Lemon Juice, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>PINK FLOYD</div></span>
											<span class="price">120 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPinkFloyd.jpg" data-popupGalery="1" /></div>
										<span class="composition">(140 ml) Gin Gordon's, Marasquino, Aperol, Fresh Squeezed Grapefruit & Lemon Juice, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>MRS PEARS SOUR</div></span>
											<span class="price">95 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMrsPearsSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) Vodka Absolut Pears, Syrup Salted Caramel, Fresh Squeezed Lemon Juice, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>SNOW WHITE</div></span>
											<span class="price">120 uah</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barSnowWhite.jpg" data-popupGalery="1" /></div>
										<span class="composition">(120 ml) Vodka Finlandia, Amaretto, Liqour Cacao, Cream</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>SLOE GIN FIZZ / POMEGRANATE GIN FIZZ</div></span>
											<span class="price">95 uah / 105 uah </span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barSloeGinAndPomegranateGinFizz.jpg" data-popupGalery="1" /></div>
										<span class="composition">(120 ml) Gin Hayman's Sloe, Gin Gordon's, Fresh Squeezed Lemon Juice, Sugar Syrup, Egg White, Soda Water / Gin Gordon's, Syrup Grenadine, Fresh Squeezed Lemon Juice, Egg White, Soda Water</span>
										<span class="desc">description</span>
									</div>
									<div class="listTxtItems">
										<div class="txtItem">
											<span class="price">95 uah</span>
											<span class="title">MR PEARS SOUR 150 ml</span>
											<span class="desc">Bourbon Four Roses, Smoked Pear, Fresh Squeezed Lemon Juice, Egg White</span>
										</div>
										<div class="txtItem">
											<span class="price">120 uah</span>
											<span class="title">PURPLE FIZZ 200 ml</span>
											<span class="desc">Vodka Absolut Citron, Cointreau, Liquor Peach, Syrup Passion Fruit, Fresh Squeezed Lemon Juice, Purple Soda Water</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Classic & Twists</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">105-220 uah</span>
										<span class="title">OLD FASHIONED 90 ml</span>
										<span class="desc">Whisky (Four Roses / Woodford Reserve / Bulleit / Bulleit Rye / Maker's Mark), Cane Sugar, Angostura Bitter, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">105-230 uah</span>
										<span class="title">MANHATTAN 90 ml</span>
										<span class="desc">Whisky (Four Roses / Woodford Reserve / Bulleit / Bulleit Rye / Maker's Mark), Vermout Rosso, Angostura Bitter</span>
									</div>
										<div class="txtItem">
										<span class="price">95-170 uah</span>
										<span class="title">DRY MARTINI 90 ml</span>
										<span class="desc">Gin (Old Tom / Hendrick's / Botanist / Tanqueray № 10), Vermout Dry, Olive</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">WHISKY SOUR 115 ml</span>
										<span class="desc">Bourbon Four Roses, Fresh Squeezed Lemon Juice, Sugar Syrup, Angostura Bitters, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">NEW YORK SOUR 135 ml</span>
										<span class="desc">Bourbon Four Roses, Fresh Squeezed Lemon Juice, Sugar Syrup, Porto Sandeman Tawny, Angostura Bitters, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">NEGRONI 90 ml</span>
										<span class="desc">Gin Gordon's, Campari, Vermout Dolin Rouge, Vermout Cinzano 1757</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">GRAPEFRUIT NEGRONI 120 ml</span>
										<span class="desc">Vodka Finlandia Grapefruit, Campari, Vermout Cinzano 1757, Fresh Squeezed Grapefruit Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">BOULEVARDIER 90 ml</span>
										<span class="desc">Bourbon Four Roses, Campari, Vermout Dolin Rouge, Vermout Cinzano 1757</span>
									</div>
									<div class="txtItem">
										<span class="price">105 uah</span>
										<span class="title">EL BOULEVARDINIO 100 ml</span>
										<span class="desc">Bourbon Four Roses, Campari, Vermout Dolin Rouge, Vermout Cinzano 1757, Sherry Pedro Ximenez</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">DAIQUIRI 110 ml</span>
										<span class="desc">Rum Havana Club Anejo 3 Anos, Sugar Syrup, Fresh Squeezed Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">DAIQUIRI HEMINGWAY 115 ml</span>
										<span class="desc">Rum Havana Club Anejo 3 Anos, Marasquino, Fresh Squeezed Grapefruit & Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">PAPER PLANE 80 ml</span>
										<span class="desc">Bourbon Four Roses, Aperol, Amaro Montenegro, Fresh Squeezed Lemon Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">105 uah</span>
										<span class="title">PARISIAN 105 ml</span>
										<span class="desc">Vermout Martini Dry, Gin Gordon's, Creme de Cassis</span>
									</div>
									<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">AVIATION 100 ml</span>
										<span class="desc">Gin Gordon's, Marasquino, Creme de Violette, Fresh Squeezed Lemon Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">MARTINEZ 105 ml</span>
										<span class="desc">Gin Hayman's Old Tom, Vermout Cinzano 1757, Marasquino</span>
									</div>
									<div class="txtItem">
										<span class="price">130 uah</span>
										<span class="title">PENICILLIN 100 ml</span>
										<span class="desc">Whisky Ballantine's Finest, Honey, Ginger, Fresh Squeezed Lemon Juice, Whisky Laphroaig Select</span>
									</div>
									<div class="txtItem">
										<span class="price">130 uah</span>
										<span class="title">GOLDEN MARGARITA 90 ml</span>
										<span class="desc">Tequila Olmeca Altos Reposado 100% Agave, Tequila Olmeca Blanco, Cointreau, Fresh Squeezed Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">ESPRESSO MARTINI CURRANT 100 ml</span>
										<span class="desc">Vodka Finlandia, Kahlua, Riga Balsam Currant, Espresso</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">ESPRESSO BETON 210 ml</span>
										<span class="desc">Becherovka, Syrup Salted Caramel, Espresso, Tonic</span>
									</div>
									<div class="txtItem">
										<span class="price">105 uah</span>
										<span class="title">VESPER MARTINI ELDERFLOWER 115 ml</span>
										<span class="desc">Gin Beefeater, Vodka Absolut, Lillet Blanc, St. Germain</span>
									</div>
									<div class="txtItem">
										<span class="price">105 uah</span>
										<span class="title">AMARETTO SOUR 115 ml</span>
										<span class="desc">Whisky Jack Daniel's Tennesse, Amaretto, Fresh Squeezed Lemon Juice, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">LAST WORD 80 ml</span>
										<span class="desc">Gin Gordon's Infused Botanical, Chartreuse Green, Marasquino, Fresh Squeezed Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">130 uah</span>
										<span class="title">GIN TONIC ELDERFLOWER 210 ml</span>
										<span class="desc">Gin Gordon's, St. Germain, Tonic, Cucumber</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">WHITE RUSSIAN 110 ml</span>
										<span class="desc">Vodka Finlandia, Kahlua, Cream</span>
									</div>
									<div class="txtItem">
										<span class="price">105 uah</span>
										<span class="title">COSMOPOLITAN 120 ml</span>
										<span class="desc">Vodka Absolut Citron, Cointreau, Fresh Cranberies, Fresh Squeezed Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">105 uah</span>
										<span class="title">BLOODY MARY 225 ml</span>
										<span class="desc">Vodka Finlandia, Tomato Juice, Fresh Squeezed Lemon Juice, Sauce Tabasco, Sauce Worcestershire, Sauce Smoked, Salt, Pepper, Celery, Olives</span>
									</div>
									<div class="txtItem">
										<span class="price">130 uah</span>
										<span class="title">APEROL SPRITZ 200 ml</span>
										<span class="desc">Aperol, Prosecco Bartolomiol, Soda Water, Orange</span>
									</div>
									<div class="txtItem">
										<span class="price">130 uah</span>
										<span class="title">LONG ISLAND ICED TEA 215 ml</span>
										<span class="desc">Vodka Finlandia, Gin Gordon's, Tequila el Jimador Silver, Rum Matusalem Platino, Cointreau, Fresh Squeezed Lemon Juice, Coke</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Set of Shots</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">105 uah</span>
										<span class="title">SEA BUCKTHORN SET 150 ml</span>
										<span class="desc">Vodka Finlandia, Sea Buckthorn, Fresh Squeezed Lemon Juice, Syrup Salted Caramel</span>
									</div>
										<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">COOPER SET 150 ml</span>
										<span class="desc">Whiskey Jack Daniel's Tennesse, Cointreau, Aperol, Syrup Passion Fruit, Fresh Squeezed Lemon Juice</span>
									</div>
										<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">PINE SET 150 ml</span>
										<span class="desc">Gin Gordon's, Becherovka, Cointreau, Fresh Squeezed Lemon Juice</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Mocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">CITRUS LEMONADE 240 ml</span>
										<span class="desc">Fresh Squeezed Orange & Lemon Juice, Lime, Sugar Syrup, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">MANGO & CARAMEL LEMONADE 240 ml</span>
										<span class="desc">Fresh Squeezed Lemon Juice, Syrup Salted Caramel, Syrup Spicy Mango, Apple Juice, Soda Water</span>
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
										<span class="price">105 uah</span>
										<span class="title">Dead Pony Club 330 ml</span>
										<span class="desc">BrewDog</span>
									</div>
									<div class="txtItem">
										<span class="price">105 uah</span>
										<span class="title">De Molen Mooi & Meedogenloos 330 ml</span>
										<span class="desc">Brouwerij de Molen</span>
									</div>
									<div class="txtItem">
										<span class="price">135 uah</span>
										<span class="title">Punk IPA 330 ml</span>
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
										<span class="price">95 uah</span>
										<span class="title">MULLED WINE 220 ml</span>
										<span class="desc">Shiraz Osado Red Wine, Fresh Orange & Lemon, Raspberry Puree, Honey, Spice</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
										<span class="title">IRISH COFFEE 170 ml</span>
										<span class="desc">Jameson Irish whisky, Espresso, Sugar Cane, Whipped Cream</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
										<span class="title">PINEAPPLE PEACH DRINK 175 ml</span>
										<span class="desc">Liquor Georgia Moon Peach, Pineapple, Orange, Syrup Passion Fruit, Apple Juice, Butter, Spice</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">BANANA EGG-NOG 175 ml</span>
										<span class="desc">Amaretto, Liquor Wild Africa, Syrup Ginger Cookie, Banana, Milk, Egg Yolk</span>
									</div>
									<div class="txtItem">
										<span class="price">95 uah</span>
										<span class="title">CINNAMON CREAM 175 ml</span>
										<span class="desc">Whisky Spicebox Cinnamon, Apple Juice, Lemon, Butter, Whipped Cream, Spice</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">NON-ALCOHOL DRINKS</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">25 uah</span>
										<span class="title">Morshinska still / sparkling 330 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">35 uah</span>
										<span class="title">Borjomi 330 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">20 uah</span>
										<span class="title">Coca-cola 250 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">25 uah</span>
										<span class="title">Royal Club Tonic 200 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">20 uah</span>
										<span class="title">Juice 250 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">45 uah</span>
										<span class="title">Fresh-squeezed orange juice 250 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">45 uah</span>
										<span class="title">Fresh-squeezed grapefruit juice 250 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">35 uah</span>
										<span class="title">Fresh-squeezed apple juice 250 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">35 uah</span>
										<span class="title">Fresh-squeezed carrot juice 250 ml</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Breakfasts all day long</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">88 uah</span>
										<span class="title">Breakfast №1 (Omelette accompanied with Tuna Salad, Fresh Vegetables and Crispy Toasts) 120/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">119 uah</span>
										<span class="title">Eggs Benedict 250 g</span>
									</div>
									<div class="txtItem">
										<span class="price">125 uah</span>
										<span class="title">Eggs Hemingway 250 g</span>
									</div>
									<div class="txtItem">
										<span class="price">128 uah</span>
										<span class="title">Scrambled Eggs 350 g</span>
									</div>
									<div class="txtItem">
										<span class="price">63 uah</span>
										<span class="title">The Perfect Oatmeal 200/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">85 uah</span>
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
										<span class="price">87 uah</span>
										<span class="title">Chicken Liver Pate with Onion Marmalade 200/100/40 g</span>
									</div>
									<div class="txtItem">
										<span class="price">94 uah</span>
										<span class="title">Warm Hummus with Mushrooms 180/100/90 g</span>
									</div>
									<div class="txtItem">
										<span class="price">107 uah</span>
										<span class="title">Warm Hummus with Ground Beef and Onions 180/100/90 g</span>
									</div>
									<div class="txtItem">
										<span class="price">94 uah</span>
										<span class="title">Falafel on Homemade Pita with Fresh Vegetable Salad 120/100 g</span>
									</div>
									<div class="txtItem">
										<span class="price">194 uah</span>
										<span class="title">Cheese Platter with Smoked Pear 150/150/25 g</span>
									</div>
									<div class="txtItem">
										<span class="price">180 uah</span>
										<span class="title">Salted pike caviar with crispy malt bread and butter 50/120/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">100 uah</span>
										<span class="title">Perfect Plateau of Olive & Sundried Tomato Tapenade, Cheese and Deli Meat 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">45 uah</span>
										<span class="title">Baked Potato Wedges with Sweet Chilli Sauce 200 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Salads</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">124 uah</span>
										<span class="title">Greek Salad with Roasted Pumpkin Seed 250 g</span>
									</div>
									<div class="txtItem">
										<span class="price">132 uah</span>
										<span class="title">Roasted Beet Salad with Goat Cheese 240 g</span>
									</div>
									<div class="txtItem">
										<span class="price">125 uah</span>
										<span class="title">Chicken Salad (grilled chicken breast served on top of mixed green salad with chef’s dressing) 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">120 uah</span>
										<span class="title">Sea Snail Salad 180 g</span>
									</div>
									<div class="txtItem">
										<span class="price">162 uah</span>
										<span class="title">Salad with Tiger Prawns, Orange tossed with Traditional Caesar Dressing 250 g</span>
									</div>
									<div class="txtItem">
										<span class="price">162 uah</span>
										<span class="title">Mediterranean Grilled Octopus Salad with Avocado 250 g</span>
									</div>
									<div class="txtItem">
										<span class="price">125 uah</span>
										<span class="title">Tuna Salad with Freshly Squeezed Lemon Juice, Olive oil and Thyme Dressing 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">138 uah</span>
										<span class="title">Warm Beef Salad with parmesan cheese and marinated shallot 150 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Soups</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">63 uah</span>
										<span class="title">Chicken Noodle Soup 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">82 uah</span>
										<span class="title">Creamy Porcini Soup 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">98 uah</span>
										<span class="title">French Onion Soup with White Wine and Crispy Parmesan Bread 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">97 uah</span>
										<span class="title">Creamy Finnish Salmon Soup 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">82 uah</span>
										<span class="title">Warming Lentil Soup with Smoked Pepper 300 g</span>
									</div>
									<div class="txtItem">
										<span class="price">94 uah</span>
										<span class="title">Tomato Soup with Smoked Lamb and Chickpea 300 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Main Course</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">98 uah</span>
										<span class="title">BBQ Chicken Wings in Sweet Chili 320 g</span>
									</div>
									<div class="txtItem">
										<span class="price">125 uah</span>
										<span class="title">Tender Chicken Livers in Sweet Port Sauce with Mashed Potatoes 120/200/100 g</span>
									</div>
									<div class="txtItem">
										<span class="price">118 uah</span>
										<span class="title">Perfectly Grilled Chicken Breast served with your choice of Grilled Vegetables or Roasted Creole Potates 150/150/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">165 uah</span>
										<span class="title">Turkey Ossobuco with Stewed Vegetables and Mashed Potatoes with Parsnips 250/150/200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">118 uah</span>
										<span class="title">Grilled Mackerel served with your choice of Grilled Vegetables or Roasted Creole Potates 150/150/30 g</span>
									</div>
									<div class="txtItem">
										<span class="price">148 uah</span>
										<span class="title">Miso-Marinated Fish 200/200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">124 uah</span>
										<span class="title">Fish & Сhips (beer battered tuna with herb potatoes and tartar sauce) 130/150/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">125 uah</span>
										<span class="title">New York Steak for 100 g</span>
									</div>
									<div class="txtItem">
										<span class="price">185 uah</span>
										<span class="title">Tagliata with Grilled Vegetables 160/150/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">145 uah</span>
										<span class="title">Moussaka 350 g</span>
									</div>
									<div class="txtItem">
										<span class="price">138 uah</span>
										<span class="title">BBQ Pork Ribs with Strawberry Sauce 170/50/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">158 uah</span>
										<span class="title">Lamb on Bone stewed with Vegetables and Smoked Pear 300/150 g</span>
									</div>
									<div class="txtItem">
										<span class="price">158 uah</span>
										<span class="title">Sea base with Creamed Spinach 250/150 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Side dishes</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">49 uah</span>
										<span class="title">Roasted Creole Potatoes 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">69 uah</span>
										<span class="title">Grilled Vegetables 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">45 uah</span>
										<span class="title">Creamy Spinach with Mushrooms 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">45 uah</span>
										<span class="title">Oyster Mushrooms with Chilli and Cilantro 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">38 uah</span>
										<span class="title">Mashed Potatoes 200 g</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Sweets</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">60 uah</span>
										<span class="title">Pavlova Anna Dessert with Fresh Passionfruit Sauce 150 g</span>
									</div>
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">Walnut cake (walnut and white chocolate mousse on Madeleine cake) 120 g</span>
									</div>
									<div class="txtItem">
										<span class="price">50 uah</span>
										<span class="title">Crème Brulee 120 g</span>
									</div>
									<div class="txtItem">
										<span class="price">22 uah</span>
										<span class="title">Homemade ice-cream (chocolate, vanilla, basil, snickers) 50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">55 uah</span>
										<span class="title">Apple & Strawberry Crisp with Vanilla Ice Cream 130/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">65 uah</span>
										<span class="title">Cottage Cheesecake with Jam	150/50 g</span>
									</div>
									<div class="txtItem">
										<span class="price">70 uah</span>
										<span class="title">Original Red Velvet Cake 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">65 uah</span>
										<span class="title">Chocolate Cake 210 g</span>
									</div>
									<div class="txtItem">
										<span class="price">60 uah</span>
										<span class="title">Baked Pear Crumble 200 g</span>
									</div>
									<div class="txtItem">
										<span class="price">20 uah</span>
										<span class="title">Handmade Chocolates 8-15 g</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--
					<div class="rightSidebarMenuBar">
						<div class="moduleRightSidebarMenuBar">
							<span class="h2">New</span>
							<div class="item">
								<div class="txt">
									<span class="title">Cocoa</span>
									<span class="price"><b>50</b> uah</span>
								</div>
								<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCacao.jpg"></div>
							</div>
						</div>
					</div>
					-->
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
							<p>Мы рады вас видеть<br /> семь дней в неделю<br />в Пятницу и Субботу с 10:00 до 03:00<br />с Воскресенья по Четверг с 10:00 до 00:00</p>
							<p>Харьков,<br /> ул. Благовещенская, 1</p>
						</div>
					</div>
				</div>
			</div>

			<div class="section menuBar bgWhite">
				<div class="sectionTitle borderBottomTitle">Барная карта</div>
				<div class="sectionContent clear">
					
					<div class="contentMenuBar">
						<!--<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Fabrika Concept Cocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listBeautifulItems">
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>FABRIKA</span></div></span>
											<span class="price">105 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barFabrika.jpg" data-popupGalery="1" /></div>
										<span class="composition">(155 ml) Rum Captain Morgan Spiced Gold, Vermout Cinzano 1757, Raspberry, Syrup Spicy Mango, Fresh Squeezed Lemon Juice, Egg White </span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>PASSION SOUR</div></span>
											<span class="price">105 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPassionSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) Gin Gordon's, Fresh Passion Fruit, Fresh Squeezed Orange & Lemon, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>COOKIE FOR BREAKFAST</div></span>
											<span class="price">105 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCookieForBreakfast.jpg" data-popupGalery="1" /></div>
										<span class="composition">(135 ml) Rum Matusalem Platino, Campari, Fresh Squeezed Orange & Lemon Juice, Haselnut Syrup</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>MARVEL</div></span>
											<span class="price">105 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMarvel.jpg" data-popupGalery="1" /></div>
										<span class="composition">(125 ml) Rum Captain Morgan Spiced Gold, Aperol, Liquor Peach, Sea Buckthorn, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>SMOKY SOUR</div></span>
											<span class="price">120 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barSmokySour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(160 ml) Tequila El Himador Silver, Mezcal Vida, Pineapple, Ginger, Sugar Syrup, Fresh Squeezed Lemon Juice, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>PINK FLOYD</div></span>
											<span class="price">120 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPinkFloyd.jpg" data-popupGalery="1" /></div>
										<span class="composition">(140 ml) Gin Gordon's, Marasquino, Aperol, Fresh Squeezed Grapefruit & Lemon Juice, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>MRS PEARS SOUR</div></span>
											<span class="price">95 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barMrsPearsSour.jpg" data-popupGalery="1" /></div>
										<span class="composition">(150 ml) Vodka Absolut Pears, Syrup Salted Caramel, Fresh Squeezed Lemon Juice, Egg White</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>SNOW WHITE</div></span>
											<span class="price">120 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barSnowWhite.jpg" data-popupGalery="1" /></div>
										<span class="composition">(120 ml) Vodka Finlandia, Amaretto, Liqour Cacao, Cream</span>
										<span class="desc">description</span>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span></span>SLOE GIN FIZZ / POMEGRANATE GIN FIZZ</div></span>
											<span class="price">95 грн / 105 грн </span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barSloeGinAndPomegranateGinFizz.jpg" data-popupGalery="1" /></div>
										<span class="composition">(120 ml) Gin Hayman's Sloe, Gin Gordon's, Fresh Squeezed Lemon Juice, Sugar Syrup, Egg White, Soda Water / Gin Gordon's, Syrup Grenadine, Fresh Squeezed Lemon Juice, Egg White, Soda Water</span>
										<span class="desc">description</span>
									</div>
								</div>
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">MR PEARS SOUR 150 ml</span>
										<span class="desc">Bourbon Four Roses, Smoked Pear, Fresh Squeezed Lemon Juice, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">120 грн</span>
										<span class="title">PURPLE FIZZ 200 ml</span>
										<span class="desc">Vodka Absolut Citron, Cointreau, Liquor Peach, Syrup Passion Fruit, Fresh Squeezed Lemon Juice, Purple Soda Water</span>
									</div>
								</div>
							</div>
						</div>-->

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Sour</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">120 грн</span>
										<span class="title">FABRIKA 155 ml</span>
										<span class="desc">Rum Captain Morgan Spiced Gold, Vermouth Cinzano 1757, Raspberry, Syrup Spicy Mango, Fresh Squeezed Lemon Juice, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">120 грн</span>
										<span class="title">PASSION SOUR 150 ml</span>
										<span class="desc">Gin Gordon's, Fresh Passion Fruit, Fresh Squeezed Orange & Lemon Juice, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">500 DAYS OF SUMMER 120 ml</span>
										<span class="desc">Gin Gordon's, Hibiscus Syrup, Raspberry Syrup, Fresh Squeezed Lemon Juice, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">120 грн</span>
										<span class="title">SMOKY SOUR 160 ml</span>
										<span class="desc">Tequila El Jimador Silver, Mezcal Vida, Pineapple, Ginger, Sugar Syrup, Fresh Squeezed Lemon Juice, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">GREEN WOOD SOUR 125 ml</span>
										<span class="desc">Cachaca Canario, Liquor Chartreuse Green, Basil, Fresh Squeezed Pineapple Juice, Fresh Squeezed Lime Juice, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">110 грн</span>
										<span class="title">LICHI LIU 140 ml</span>
										<span class="desc">Gin Gordon's, Lichi Puree, Lichi Liquor, Passion Fruit Syrup, Fresh Squeezed Lime uice, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">120 грн</span>
										<span class="title">MRS. PEARS SOUR 120 ml</span>
										<span class="desc">Vodka Absolut Pears, Syrup Salted Caramel, Fresh Squeezed Lemon Juice, Egg White</span>
									</div>
										<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">MR. PEARS 150 ml</span>
										<span class="desc">Bourbon Wild Turkey, Smoked Pear, Fresh Squeezed Lemon Juice, Egg White</span>
									</div>
										<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">COOKIE FOR BREAKFAST 135 ml</span>
										<span class="desc">Rum Havana Club Anejo 3 Anos, Campari, Fresh Squeezed Orange & Lemon Juice, Haselnut Syrup</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">PINK FLOYD 140 ml</span>
										<span class="desc">Gin Gordon's, Marasquino, Aperol, Fresh Squeezed Grapefruit & Lemon Juice, Egg White</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Tiki</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">ISLAND SLING 150 ml</span>
										<span class="desc">Rum Captain Morgan Spiced Gold, Hibiscus Syrup, Fresh Squeezed Pineapple & Lime Juice, Grapefruit Bitter</span>
									</div>
									<div class="txtItem">
										<span class="price">210 грн</span>
										<span class="title">ELYXYR 250 ml</span>
										<span class="desc">Vodka Absolut Elyx, Vodka Absolut Mango, Liquor Coconut, Liquor Marasquino, Fresh Squeezed Pineapple Orange & Lime Juice</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Long Drink</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">PINK LEMONADE 190 ml</span>
										<span class="desc">Rose Semi-Sweet Wine, Liquor Rose, Fresh Squeezed Orange & Lemon Juice, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">GARDEN GNOME 195 ml</span>
										<span class="desc">Vodka Absolut Pears, Liquor Chartreuse Green, Vermoith Dry, Basil, Cucumber, Fresh Squeezed Lemon Juice, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">ESPRESSO BETON 210 ml</span>
										<span class="desc">Becherovka, Syrup Salted Caramel, Espresso, Tonic</span>
									</div>
									<div class="txtItem">
										<span class="price">135 грн</span>
										<span class="title">GIN TONIC ELDELFLOVER 210 ml</span>
										<span class="desc">Gin Gordon's, Liquor St. Germain, Tonic, Cucumber</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Fizz</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">SLOE GIN FIZZ 190 ml</span>
										<span class="desc">Gin Hayman's Sloe, Gin Beefeater, Fresh Squeezed Lemon Juice, Sugar Syrup, Egg White, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">AMARO FIZZ 190 ml</span>
										<span class="desc">Amaro di Angostura, Liquor Grand Marnier, Orgeat Syrup, Fresh Squeezed Lemon Juice, Egg White, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">110 грн</span>
										<span class="title">PURPLE FIZZ 190 ml</span>
										<span class="desc">Gin Gordon's Infused Botanical, Liqour Peach, Syrup Passion Fruit, Fresh Squeezed Lemon Juice, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">POMEGRANATE GIN FIZZ 190 ml</span>
										<span class="desc">Gin Gordon's, Syrup Grenadine, Fresh Squeezed Lemon Juice, Egg White, Soda Water</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Spritz</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">`120 грн</span>
										<span class="title">FABRIKA APEROL SPRITZ 160 ml</span>
										<span class="desc">Aperol, Sparkling Wine, Rediced Orange</span>
									</div>
									<div class="txtItem">
										<span class="price">135 грн</span>
										<span class="title">APEROL SPRITZ 200 ml</span>
										<span class="desc">Aperol, Prosecco Bortolomiol, Soda Water, Orange</span>
									</div>
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">NEGRONI SBAGLIATO 150 ml</span>
										<span class="desc">Campari, Vermouth Cinzano 1757, Sparkling Wine, Olives</span>
									</div>
									<div class="txtItem">
										<span class="price">110 грн</span>
										<span class="title">SWEET VANILLA SPRITZ 150 ml</span>
										<span class="desc">Gin Gordon's, Aperol, Fresh Squeezed Orange & Lemon Juice, Vanilla Syrup, Sparkling Wine</span>
									</div>
									<div class="txtItem">
										<span class="price">135 грн</span>
										<span class="title">MAI TAI SPRITZ 175 ml</span>
										<span class="desc">Rum Captain Morgan Spiced Gold, Cointreau, Orgeat Syrup, Fresh Squeezed Lime Juice, Sparkling Wine</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Sangria</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">60 грн</span>
										<span class="title">LEMON SANGRIA 130 ml</span>
										<span class="desc">Red Dry Wine Osaado Shiraz, Lemon Syrup</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">PINEAPPLE SANGRIA 150 ml</span>
										<span class="desc">Red Dry Wine Osaado Shiraz, Fresh Squeezed Pineapple & Lime Juice, Cinnamon</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Julep</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">HONEY HIBISCUS JULEP 70 ml</span>
										<span class="desc">Whiskey Jack Daniel's Tennesse, Whiskey Jack Daniel's Honey, Hibiscus Syrup, Mint</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Classic & Twists</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">90-220 грн</span>
										<span class="title">OLD FASHIONED 90 ml</span>
										<span class="desc">Whisky (Four Roses / Woodford Reserve / Bulleit / Bulleit Rye / Maker's Mark), Cane Sugar, Angostura Bitter, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">90-230 грн</span>
										<span class="title">MANHATTAN 90 ml</span>
										<span class="desc">Whisky (Four Roses / Woodford Reserve / Bulleit / Bulleit Rye / Maker's Mark), Vermout Rosso, Angostura Bitter</span>
									</div>
										<div class="txtItem">
										<span class="price">95-175 грн</span>
										<span class="title">DRY MARTINI 90 ml</span>
										<span class="desc">Gin (Old Tom / Hendrick's / Botanist / Tanqueray № 10), Vermout Dry, Olive</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">WHISKY SOUR 115 ml</span>
										<span class="desc">Bourbon Four Roses, Fresh Squeezed Lemon Juice, Sugar Syrup, Angostura Bitters, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">NEGRONI 90 ml</span>
										<span class="desc">Gin Gordon's, Campari, Vermout Dolin Rouge, Vermout Cinzano 1757</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">GRAPEFRUIT NEGRONI 120 ml</span>
										<span class="desc">Vodka Finlandia Grapefruit, Campari, Vermouth Cinzano 1757, Fresh Squeezed Grapefruit Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">BOULEVARDIER 90 ml</span>
										<span class="desc">Bourbon Wild Turkey, Campari, Vermouth Dolin Rouge, Vermouth Cinzano 1757</span>
									</div>
									<div class="txtItem">
										<span class="price">120 грн</span>
										<span class="title">EL BOULEVARDINIO 100 ml</span>
										<span class="desc">Bourbon Wild Turkey, Campari, Vermouth Dolin Rouge, Vermouth Cinzano 1757, Sherry Pedro Ximenez</span>
									</div>
									<div class="txtItem">
										<span class="price">130 грн</span>
										<span class="title">MARTINEZ 105 ml</span>
										<span class="desc">Gin Hayman's Old Tom, Vermouth Cinzano 1757, Marasquino</span>
									</div>
									<div class="txtItem">
										<span class="price">130 грн</span>
										<span class="title">PENICILLIN 100 ml</span>
										<span class="desc">Whisky Ballantine's Finest, Honey, Ginger, Fresh Squeezed Lemon Juice, Whisky Laphroaig Select</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">WHISKY SOUR 115 ml</span>
										<span class="desc">Bourbon Wild Turkey, Fresh Squeezed Lemon Juice, Sugar Syrup, Angostura Bitters, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">NEW YORK SOUR 135 ml</span>
										<span class="desc">Bourbon Wild Turkey, Fresh Squeezed Lemon Juice, Sugar Syrup, Porto Sandeman Tawny, Angostura Bitters, Egg White</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">DAIQUIRI 110 ml</span>
										<span class="desc">Rum Havana Club Anejo 3 Anos, Sugar Syrup, Fresh Squeezed Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">DAIQUIRI HEMINGWAY 90 ml</span>
										<span class="desc">Rum Havana Club Anejo 3 Anos, Marasquino, Fresh Squeezed Grapefruit & Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">AVIATION 100 ml</span>
										<span class="desc">Gin Gordon's, Marasquino, Liquor, Fresh Squeezed Lemon Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">130 грн</span>
										<span class="title">ESPRESSO MARTINI CURRANT 90 ml</span>
										<span class="desc">Tequila Olmeca Altos Reposado 100% Agave, Tequila Olmeca Blanco, Cointreau, Fresh Squeezed Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">ESPRESSO MARTINI CURRANT 100 ml</span>
										<span class="desc">Vodka Absolut Vanilla, Kahlua, Espresso</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">ESPRESSO BETON 210 ml</span>
										<span class="desc">Becherovka, Syrup Salted Caramel, Espresso, Tonic</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">VESPER MARTINI ELDERFLOWER 100 ml</span>
										<span class="desc">Gin Beefeater, Vodka Absolut, Lillet Blanc, St. Germain</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">WHITE RUSSIAN 110 ml</span>
										<span class="desc">Vodka Finlandia, Kahlua, Cream</span>
									</div>
									<div class="txtItem">
										<span class="price">110 грн</span>
										<span class="title">COSMOPOLITAN 120 ml</span>
										<span class="desc">Vodka Absolut Citron, Cointreau, Fresh Cranberries, Fresh Squeezed Lime Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">125 грн</span>
										<span class="title">VESPER MARTINI ELDERFLOWER 115 ml</span>
										<span class="desc">Gin Beefeater, Vodka Absolut, Lilet Blanc, St. Germain</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">BLOODY MARY 125 ml</span>
										<span class="desc">VVodka Finlandia, Tomato Juice, Fresh Squeezed Lemon Juice, Sauce Tabasco, Sauce Worcestershire, Salt, Pepper, Celery, Olives</span>
									</div>
									<div class="txtItem">
										<span class="price">140 грн</span>
										<span class="title">LONG ISLAND ICED TEA 215 ml</span>
										<span class="desc">Vodka Finlandia, Gin Gordon's, Tequila El Jimador Silver, Rum Havana Club Anejo 3 Anos, Cointreau, Fresh Squeezed Lemon Juice, Coke</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Set of Shots</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">STHORM SET 150 ml</span>
										<span class="desc">Vodka Finlandia, Sea Buckthorn, Fresh Squeezed Lemon Juice, Syrup Salted Caramel</span>
									</div>
									<div class="txtItem">
										<span class="price">130 грн</span>
										<span class="title">COOPER SET 150 ml</span>
										<span class="desc">Whisky Jack Daniel's Tennesse, Cointreau, Aperol, Syrup Passion Fruit, Fresh Squeezed Lemon Juice</span>
									</div>
									<div class="txtItem">
										<span class="price">130 грн</span>
										<span class="title">PINE SET 150 ml</span>
										<span class="desc">Gin Gordon's, Becherovka, Cointreau, Fresh Squeezed Lemon Juice</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Mocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">CITRUS LEMONADE 250 ml</span>
										<span class="desc">Fresh Squeezed Orange & Lemon Juice, Lime, Sugar Syrup, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">MANGO & CARAMEL LEMONADE 250 ml</span>
										<span class="desc">Fresh Squeezed Lemon Juice, Syrup Salted Caramel, Syrup Spice Mango, Apple Juice, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">CUCUMBER & PEAR LEMONADE 250 ml</span>
										<span class="desc">Cucumber, Mint, Pear Juice, Fresh Squeezed Lemon Juice, Apple Juice, Soda Water</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">PINEAPPLE & HIBISCUS LEMONADE 250 ml</span>
										<span class="desc">Hibiscus Syrup, Mint, Fresh Squeezed Lemon Juice, Cherry Juice, Soda Water</span>
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
										<span class="price">105 грн</span>
										<span class="title">Punk IPA 330 ml</span>
										<span class="desc">BrewDog</span>
									</div>
									<div class="txtItem">
										<span class="price">105 грн</span>
										<span class="title">Dead Pony Club 330 ml</span>
										<span class="desc">BrewDog</span>
									</div>
									<div class="txtItem">
										<span class="price">135 грн</span>
										<span class="title">De Molen Mooi & Meedogenloos 330 ml</span>
										<span class="desc">Brouwerij de Molen</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Hot</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">MULLED WINE 220 ml</span>
										<span class="desc">Red Wine Shiraz Osaado, Fresh Orange & Lemon, Raspberry Puree, Honey, Spice</span>
									</div>
									<div class="txtItem">
										<span class="price">85 грн</span>
										<span class="title">IRISH COFFEE 170 ml</span>
										<span class="desc">JWhisky Jameson, Espresso, Sugar Cane, Whipped Cream</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Smoothies</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">45 грн</span>
										<span class="title">PINK SMOOTHIE 300 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">35 грн</span>
										<span class="title">YELLOW SMOOTHIE 300 ml</span>
									</div>
									<div class="txtItem">
										<span class="price">20 грн</span>
										<span class="title">GREEN SMOOTHIE 300 ml</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Завтраки весь день</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">88 грн</span>
										<span class="title">Завтрак №1 120/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">125 грн</span>
										<span class="title">Яйца "Хэмингуэй" 280 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">135 грн</span>
										<span class="title">Яйца Скрэмбл с беконом 400 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">135 грн</span>
										<span class="title">Яйца Скрэмбл с лососем 400 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">119 грн</span>
										<span class="title">Яйца "Бенедикт" 280 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">89 грн</span>
										<span class="title">Сырники со сметаной 250/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">63 грн</span>
										<span class="title">Овсянка на яблочном фреше 250/50 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Закуски</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">165 грн</span>
										<span class="title">Идеальное плато закусок 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">194 грн</span>
										<span class="title">Сырная тарелка мягких сыров с копченой грушей 150/150/20 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">87 грн</span>
										<span class="title">Паштет из куриной печени с луковым конфитюром 200/100/40 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">94 грн</span>
										<span class="title">Фалафель в пите с салатом из свежих овощей 120/90/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">79 грн</span>
										<span class="title">Хумус с грибами 180/100/90 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">Хумус с мясом и луком 180/100/90 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">92 грн</span>
										<span class="title">Цветная капуста с греческим йогуртом 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">99/119/134/164 грн</span>
										<span class="title">Тортилья по-гречески с курицей/телятиной/лососем 300/350 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Салаты</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">124 грн</span>
										<span class="title">Салат греческий с тыквенными семечками 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">132 грн</span>
										<span class="title">Салат из запеченной свеклы с козьим сыром 240 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">138 грн</span>
										<span class="title">Теплый салат из телятины 260 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">125 грн</span>
										<span class="title">Салат из курицы 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">125 грн</span>
										<span class="title">Салат с тунцом 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">162 грн</span>
										<span class="title">Салат с тигровыми креветками 270 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">199 грн</span>
										<span class="title">Салат со средиземноморским осьминогом 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">145 грн</span>
										<span class="title">Салат из рапанов 180 гр.</span>
									</div>
								</div>
							</div>
						</div>


						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Супы</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">Окрошка с курицей 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">115 грн</span>
										<span class="title">Окрошка с лососем 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">69 грн</span>
										<span class="title">Свекольник с копченой скумбрией 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">97 грн</span>
										<span class="title">Финская уха с семгой и сливками 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">63 грн</span>
										<span class="title">Куриный бульон с домашней лапшой 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">82 грн</span>
										<span class="title">Крем-суп из белых грибов и шампиньонов 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">89 грн</span>
										<span class="title">Крем-суп из цветной капусты с мидиями 300 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Основные блюда</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">139 грн</span>
										<span class="title">Мидии в сливочном соусе 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">169 грн</span>
										<span class="title">Тигровые креветки в сливочном соусе 250 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">165 грн</span>
										<span class="title">Рыба, запеченная в хоспере 1 шт.</span>
									</div>
									<div class="txtItem">
										<span class="price">138 грн</span>
										<span class="title">Fish & Chips 130/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">118 грн</span>
										<span class="title">Скумбрия на гриле с гарниром на выбор 150/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">199 грн</span>
										<span class="title">Тальята с овощами гриль 160/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">124 грн</span>
										<span class="title">Fish & Chips 130/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">125 грн</span>
										<span class="title">"Стейк New York 100 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">149 грн</span>
										<span class="title">Кебаб "Fabrika" из баранины 150/50/45 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">139 грн</span>
										<span class="title">Кебаб "Fabrika" из индейки 150/50/45 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">129 грн</span>
										<span class="title">Кебаб "Fabrika" из курицы 150/50/45 гр</span>
									</div>
									<div class="txtItem">
										<span class="price">125 грн</span>
										<span class="title">Куриное филе на гриле с гарниром на выбор 150/150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">98 грн</span>
										<span class="title">Крылья BBQ в сладком чили 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">Соба с овощами и курицей 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">Соба с овощами и телятиной 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">95 грн</span>
										<span class="title">Соба с овощами и телятиной 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">125 грн</span>
										<span class="title">Соба с овощами и морепродуктами 300 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">165 грн</span>
										<span class="title">Оссо буко из индейки 250/150/200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">149 грн</span>
										<span class="title">Свиные ребра BBQ 220/120/35 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Гарниры</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">69 грн</span>
										<span class="title">Овощи гриль 150 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">45 грн</span>
										<span class="title">Грибы с чили и кинзой 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">49 грн</span>
										<span class="title">Шпинат со сливками и грибами 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">Молодой картофель 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">45 грн</span>
										<span class="title">Картофельные дольки в сладком чили 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">49 грн</span>
										<span class="title">Картофель по-креольски 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">38 грн</span>
										<span class="title">Картофельное пюре 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">49 грн</span>
										<span class="title">Кускус с овощами 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">50 грн</span>
										<span class="title">Запеченный баклажан с тхиной 200 гр.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Десерты</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">65 грн</span>
										<span class="title">Груша запеченная в стиле крамбл 200 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">59 грн</span>
										<span class="title">Яблочно-клубничный крисп с шариком ванильного мороженого 130/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">65 грн</span>
										<span class="title">Десерт Анна Павлова 150 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">55 грн</span>
										<span class="title">Крем-Брюле 120 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">69 грн</span>
										<span class="title">Творожный кейк с вареньем 150/50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">69 грн</span>
										<span class="title">Шоколадный торт 210 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">75 грн</span>
										<span class="title">Клубничный мильфей 150 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">25 грн</span>
										<span class="title">Сорбет: черная смородина, клубника 50 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">20 грн</span>
										<span class="title">Конфеты ручной работы 8-15 гр.</span>
									</div>
									<div class="txtItem">
										<span class="price">25 грн</span>
										<span class="title">Домашнее мороженое: шоколад, ваниль, базилик, сникерс 50 гр.</span>
									</div>
								</div>
							</div>
						</div>
						
					</div>

					<!--
					<div class="rightSidebarMenuBar">
						<div class="moduleRightSidebarMenuBar">
							<span class="h2">Новые напитки</span>
							<div class="item">
								<div class="txt">
									<span class="title">Какао с маршмеллоу</span>
									<span class="price"><b>50</b> грн</span>
								</div>
								<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCacao.jpg"></div>
							</div>
						</div>
					</div>
					-->

				</div>
			</div>

		</div><!-- end #content ru-->
	<?php } ?>
	</div><!-- end #main-->

<?php get_footer(); ?>
