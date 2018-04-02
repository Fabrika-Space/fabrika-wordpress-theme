<?php
/*
Template Name: coworking
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
	<div id="main" class="pageStyleLikeHome coworkingMain">

	<?php if($lang == 'en') {?>
		<!--**************** CONTENT EN****************-->
		<div id="content" class="clear">
			<h1>Coworking</h1>
			
			<div class="simpleTextBlock">
				<p>One of the best coworking spaces of Ukraine and definitely the best coworking space of Kharkiv (according to our guests feedback) is located on the fourth floor of Fabrika.space. We did our best to create an atmosphere of coziness combined with a complete working environment.</p>
				<p>Here you will get everything you need: office equipment, free strong Wi-Fi connection, comfortable sitting and standing desks and chairs. Between work sessions you can treat yourself with cookies, toasts, tea and delicious coffee at our rest zone.</p>
			</div>

			<div class="section pricing">
				<div class="sectionTitle">Prices</div>
				<div class="sectionContent">

					<div class="popupPayCoworking">
						<div class="bg"></div>
						<div class="popup">
							<div class="title">Reservation</div>

							<div class="date">
								<div class="item">
									<div class="label">Date</div>
									<input type="text" class="datepicker" name="startDate" />
								</div>
							</div>

							<div class="phone">
								<div class="label">phone number</div>
								<div class="prefixPhone">+38</div>
								<div class="codePhone"><input type="text" maxlength="3" name="phone3" /></div>
								<div class="numbPhone"><input type="text" maxlength="9" name="phone9" /></div>
							</div>

							<div class="name">
								<div class="label">Name</div>
								<input type="email" name="name" />
							</div>

							<div class="email">
								<div class="label">Email</div>
								<input type="email" name="email" />
							</div>

							<div class="btns">
								<div class="btn btnCancel">Cancel</div>
								<div class="btn btnOk">Pay</div>
							</div>
						</div>
					</div>

					<div class="priceCategory">
						<div class="head">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgDev.png" /></div>
							<div class="title">For one person</div>
						</div>
						<div class="body">
							<div class="typePriceCategories">
								<div class="typePriceCategory">
									<span class="title">For a short stay</span>
									<div class="table">
										<table>
											<tr>
												<td>1 hour</td>
												<td>—</td>
												<td>100 UAH</td>
											</tr>
											<tr>
												<!--<td colspan="3">
													<span class="btnPayCoworking" data-title="1 hour - 100 UAH" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMTAwIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6IjEg0YfQsNGBIiwidHlwZSI6ImJ1eSIsImxhbmd1YWdlIjoicnUifQ%3D%3D&signature=xZVmTOc24yIumDtcbB31mwpWAOQ%3D">Purchase</span>
												</td>-->
											</tr>
											<tr>
												<td>2 hours</td>
												<td>—</td>
												<td>180 UAH</td>
											</tr>
											<tr>
												<!--<td colspan="3">
													<span class="btnPayCoworking" data-title="2 hours - 180 UAH" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMTgwIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6IjIg0YfQsNGB0LAiLCJ0eXBlIjoiYnV5IiwibGFuZ3VhZ2UiOiJydSJ9&signature=AVdjPrxT6CC0I4YPER2fhK1V76I%3D">Purchase</span>
												</td>-->
											</tr>
											<tr class="border">
												<td>1 day</td>
												<td>—</td>
												<td>220 UAH</td>
											</tr>
											<tr>
												<!--<td colspan="3">
													<span class="btnPayCoworking" data-title="1 day - 220 UAH" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMjIwIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6IjEg0LTQtdC90YwiLCJ0eXBlIjoiYnV5IiwibGFuZ3VhZ2UiOiJydSJ9&signature=NCTp%2BlUqnaOBaJSZMlFxgnB6g8Y%3D">Purchase</span>
												</td>-->
											</tr>
											<tr>
												<td>5 days</td>
												<td>—</td>
												<td>800 UAH</td>
											</tr>
											<tr>
												<!--<td colspan="3">
													<span class="btnPayCoworking" data-title="5 days - 800 UAH" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiODAwIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6IjUg0LTQvdC10LkgIiwidHlwZSI6ImJ1eSIsImxhbmd1YWdlIjoicnUifQ%3D%3D&signature=pjkLQYvIWSiTVYmCUMc4oq0%2FBbs%3D">Purchase</span>
												</td>-->
											</tr>
										</table>
									</div>
								</div>
								<div class="typePriceCategory">
									<span class="title">Assigned seat</span>
									<div class="table">
										<table>
											<tr>
												<td>1 month</td>
												<td>—</td>
												<td>3400 UAH</td>
											</tr>
											<tr>
												<!--<td colspan="3">
													<span class="btnPayCoworking" data-title="1 month - 3400 UAH" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMzQwMCIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiIxINC80LXRgdGP0YYg0YTQuNC60YHQuNGA0L7QstCw0L3QvdC%2B0LUg0LzQtdGB0YLQviIsInR5cGUiOiJidXkiLCJsYW5ndWFnZSI6InJ1In0%3D&signature=bGEyhdU7xcnOCKKssEb9ukTBgek%3D">Purchase</span>
												</td>-->
											</tr>
										</table>
									</div>
								</div>
								<div class="typePriceCategory">
									<span class="title">Non assigned seat</span>
									<div class="table">
										<table>
											<tr>
												<td>10 days</td>
												<td>—</td>
												<td>1500 UAH</td>
											</tr>
											<tr>
												<!--<td colspan="3">
													<span class="btnPayCoworking" data-title="10 days - 1500 UAH" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMTUwMCIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiIxMCDQtNC90LXQuSAiLCJ0eXBlIjoiYnV5IiwibGFuZ3VhZ2UiOiJydSJ9&signature=bAL%2Fbp1aiobi5HrxNwyOrSlbyf0%3D">Purchase</span>
												</td>-->
											</tr>
											<tr>
												<td>1 month</td>
												<td>—</td>
												<td>3200 UAH</td>
											</tr>
											<tr>
												<!--<td colspan="3">
													<span class="btnPayCoworking" data-title="1 month - 3200 UAH" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMzIwMCIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiIxINC80LXRgdGP0YYg0L3QtSDRhNC40LrRgdC40YDQvtCy0LDQvdC90L7QtSDQvNC10YHRgtC%2BIiwidHlwZSI6ImJ1eSIsImxhbmd1YWdlIjoicnUifQ%3D%3D&signature=1o5RXvmvyKdXY9Xxamf%2B3pnqHL0%3D">Purchase</span>
												</td>-->
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="priceCategory">
						<div class="head">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgTeam.png" /></div>
							<div class="title">For teams</div>
						</div>
						<div class="body">
							<div class="teamPricing">
								<div class="titlePriceTeam">Team of 3 persons — 8100 UAH/month</div>
								<div class="notePriceTeam">(3 assigned seats will be charged as non assigned)</div>
								
								<!--<span class="btnPayCoworking" data-title="Three persons - 8100 UAH" data-url="https://www.liqpay.com/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTg1MjQ1MDYwODIyIiwiYW1vdW50IjoiODEwMCIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiIzINGH0LXQu9C%2B0LLQtdC60LAgIiwidHlwZSI6ImJ1eSIsImxhbmd1YWdlIjoicnUifQ%3D%3D&signature=wf9elQp2afQdzQhMq2HIUPgD0%2BU%3D">Purchase</span>-->

								<div class="grayLine"></div>
								<div class="titlePriceTeam">Teams of over 3 persons get individual offers</div>
								<div class="notePriceTeam2">*Get a 10% discount by paying one year forward or 5% discount by paying 6 months forward</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section services">
				<div class="sectionTitle">Services</div>
				<div class="sectionContent">
					<div class="itemsServices">
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceInternet.png" /></div>
							<div class="title">Free<br />high-speed<br />Wi-Fi</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceSkypeRooms.png" /></div>
							<div class="title">4 separate skype-rooms</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceCookies.png" /></div>
							<div class="title">Free<br /> treats</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceCoffeeAndTea.png" /></div>
							<div class="title">Free<br /> tea & coffee </div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceWorktime.png" /></div>
							<div class="title">9:00 to 21:00 schedule<br /> 7 days/week</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceMarkerBoard.png" /></div>
							<div class="title">Whiteboards</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceRestroomOnTheRoof.png" /></div>
							<div class="title">Terrace <br />with beautiful view</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServicePrinter.png" /></div>
							<div class="title">Office<br />supplies</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceMeetingRoom.png" /></div>
							<div class="title">Meeting<br /> room</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceBar.png" /></div>
							<div class="title">Bar & Restaurant<br /> on the 1st floor</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceKitchen.png" /></div>
							<div class="title">Rest zone <br />with kitchen equipment</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServicePersonalLocker.png" /></div>
							<div class="title">Lockers</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceShower.png" /></div>
							<div class="title">Shower</div>
						</div>

					</div>
				</div>
			</div>

			<div class="section coworkingMap">
				<div class="sectionTitle">Map</div>
				<div class="sectionContent">
					<div class="mapWrapper">
						<span class="subtitleCoworking">Working seats</span>
						<img src="/wp-content/themes/fabrika.space/img/coworkingScheme.jpg" />
					</div>
					<div class="mapWrapper">
						<span class="subtitleCoworking">Lounge</span>
						<img src="/wp-content/themes/fabrika.space/img/coworkingRestPlace.gif" style="margin-top: 20px;" />
					</div>
				</div>
			</div>

			<div class="section coworkingFriendly">
				<div class="sectionTitle">Coworking friendly</div>
				<div class="sectionContent">
					<div class="descriptionCoworkingFriendly">Our residents can work for free in one of coworking spaces of our partner network in Lviv, Kyiv and Odessa.</div>
					<div class="itemsCoworkingFriendly">
						<div class="item">
							<div class="city">Lviv</div>
							<div class="space">Startup depot</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/friends/logoStartupdepot.jpg" /></div>
							<div class="itemContacts">
								<a href="http://startupdepot.lviv.ua" target="_blank">http://startupdepot.lviv.ua</a>
								<br />
								<a href="mailto:office@startupdepot.lviv.ua">office@startupdepot.lviv.ua</a>
								<br />
								+38 (096) 96-93-641
							</div>
						</div>
						<div class="item">
							<div class="city">Kyiv</div>
							<div class="space">Chasopys</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/friends/logoChasopys.jpg" /></div>
							<div class="itemContacts">
								<a href="http://coworking.chasopys.ua" target="_blank">http://coworking.chasopys.ua</a>
								<br />
								<a href="mailto:coworking@chasopys.kiev.ua">coworking@chasopys.kiev.ua</a>
								<br />
								+38 (095) 20-68-621
							</div>
						</div>
						<div class="item">
							<div class="city">Odessa</div>
							<div class="space">TERMINAL42</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/friends/logoTerminal24.jpg" /></div>
							<div class="itemContacts">
								<a href="http://terminal42.com.ua/" target="_blank">http://terminal42.com.ua/</a>
								<br />
								<a href="mailto:info@terminal42.com.ua">info@terminal42.com.ua</a>
								<br />
								+38 (048) 735-72-75
							</div>
						</div>
						<div class="item">
							<div class="city">Dnipropetrovsk</div>
							<div class="space">Coworking "365"</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/friends/logoCoworking365.jpg" /></div>
							<div class="itemContacts">
								<a href="http://coworking365.com.ua/" target="_blank">http://coworking365.com.ua/</a>
								<br />
								<a href="mailto:wow@coworking365.com.ua">wow@coworking365.com.ua</a>
								<br />
								+38 (067) 777-73-65
							</div>
						</div>
					</div>
				</div>
			</div>

		</div><!-- end #content en-->

	<?php }else{ ?>

		<!--**************** CONTENT RU****************-->
		<div id="content" class="clear">
			<h1>Коворкинг</h1>
			
			<div class="simpleTextBlock">
				<p>На четвертом этаже Фабрики расположился уютный коворкинг. Мы постарались создать атмосферу с домашним уютом и полноценной рабочей обстановкой.</p>
				<p>Здесь вы получите все необходимые условия: оргтехника, свободный доступ Интернет, удобные столы и стулья. Кроме этого есть оборудованная кухня, где можно приготовить тосты с вкусным чаем или ароматным кофе.</p>
			</div>

			<div class="section pricing">
				<div class="sectionTitle">цены</div>
				<div class="sectionContent">

					<div class="popupPayCoworking">
						<div class="bg"></div>
						<div class="popup">
							<div class="title">бронирование</div>

							<div class="date">
								<div class="item">
									<div class="label">Дата</div>
									<input type="text" class="datepicker" name="startDate" />
								</div>
							</div>

							<div class="phone">
								<div class="label">телефон</div>
								<div class="prefixPhone">+38</div>
								<div class="codePhone"><input type="text" maxlength="3" name="phone3" /></div>
								<div class="numbPhone"><input type="text" maxlength="9" name="phone9" /></div>
							</div>

							<div class="name">
								<div class="label">Имя</div>
								<input type="email" name="name" />
							</div>

							<div class="email">
								<div class="label">email</div>
								<input type="email" name="email" />
							</div>

							<div class="btns">
								<div class="btn btnCancel">ОТМЕНА</div>
								<div class="btn btnOk">оплатить</div>
							</div>
						</div>
					</div>

					<div class="priceCategory">
						<div class="head">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgDev.png" /></div>
							<div class="title">Для одного человека</div>
						</div>
						<div class="body">
							<div class="typePriceCategories">
								<div class="typePriceCategory">
									<span class="title">На короткое время</span>
									<div class="table">
										<table>
											<tr>
												<td>1 час</td>
												<td>—</td>
												<td>90 грн</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="btnPayCoworking" data-title="1 час - 90 грн" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiOTAiLCJjdXJyZW5jeSI6IlVBSCIsImRlc2NyaXB0aW9uIjoiMSDRh9Cw0YEiLCJ0eXBlIjoiYnV5IiwibGFuZ3VhZ2UiOiJydSJ9&signature=qkhBNh95%2FrupQFYMNC88jW%2F3Qlg%3D">Оплатить</span>
												</td>
											</tr>
											<tr>
												<td>2 часа</td>
												<td>—</td>
												<td>150 грн</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="btnPayCoworking" data-title="2 часа - 150 грн" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMTUwIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6IjIg0YfQsNGB0LAiLCJ0eXBlIjoiYnV5IiwibGFuZ3VhZ2UiOiJydSJ9&signature=mqJRy933hzDv70%2BMZozdcRd%2B6Gs%3D">Оплатить</span>
												</td>
											</tr>
											<!--<tr>
												<td>3 часа</td>
												<td>—</td>
												<td>180 грн</td>
											</tr>
											<tr>
												<!--<td colspan="3">
													<span class="btnPayCoworking" data-title="3 часа - 180 грн" data-url="https://www.liqpay.com/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTg1MjQ1MDYwODIyIiwiYW1vdW50IjoiMTgwIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6IjMg0YfQsNGB0LAgICIsInR5cGUiOiJidXkiLCJsYW5ndWFnZSI6InJ1In0%3D&signature=XXSlsGmaYpRGL5XRRDDcC7TliEU%3D">Оплатить</span>
												</td>
											</tr>-->
											<tr class="border">
												<td>1 день</td>
												<td>—</td>
												<td>180 грн</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="btnPayCoworking" data-title="1 день - 180 грн" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMTgwIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6IjEg0LTQtdC90YwiLCJ0eXBlIjoiYnV5IiwibGFuZ3VhZ2UiOiJydSJ9&signature=NCx26mAo7uUWs%2BnfCImsz82wZRs%3D">Оплатить</span>
												</td>
											</tr>
											<tr>
												<td>5 дней</td>
												<td>—</td>
												<td>650 грн</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="btnPayCoworking" data-title="5 дней - 650 грн" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiNjUwIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6IjUg0LTQvdC10LkgIiwidHlwZSI6ImJ1eSIsImxhbmd1YWdlIjoicnUifQ%3D%3D&signature=AHO7LJCmD6FTkv8Qxs0PmCYw%2BvY%3D">Оплатить</span>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="typePriceCategory">
									<span class="title">Фиксированное место</span>
									<div class="table">
										<table>
											<tr>
												<td>1 месяц</td>
												<td>—</td>
												<td>2900 грн</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="btnPayCoworking" data-title="1 месяц - 2900 грн" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMjkwMCIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiIxINC80LXRgdGP0YYg0YTQuNC60YHQuNGA0L7QstCw0L3QvdC%2B0LUg0LzQtdGB0YLQviAiLCJ0eXBlIjoiYnV5IiwibGFuZ3VhZ2UiOiJydSJ9&signature=CHu0ub2ucuIAutTmkXtvh8Vx4LM%3D">Оплатить</span>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="typePriceCategory">
									<span class="title">Плавающее место</span>
									<div class="table">
										<table>
											<tr>
												<td>10 дней</td>
												<td>—</td>
												<td>1200 грн</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="btnPayCoworking" data-title="10 дней - 1200 грн" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMTIwMCIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiIxMCDQtNC90LXQuSDQv9C70LDQstCw0Y7RidC10LUg0LzQtdGB0YLQviAiLCJ0eXBlIjoiYnV5IiwibGFuZ3VhZ2UiOiJydSJ9&signature=FAhf%2BuRLwScUvExiXGyF4519%2FJo%3D">Оплатить</span>
												</td>
											</tr>
											<tr>
												<td>1 месяц</td>
												<td>—</td>
												<td>2700 грн</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="btnPayCoworking" data-title="1 месяц - 2700 грн" data-url="https://www.liqpay.ua/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTU4ODI2ODMxMzIwIiwiYW1vdW50IjoiMjcwMCIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiIxINC80LXRgdGP0YYg0L%2FQu9Cw0LLQsNGO0YnQtdC1INC80LXRgdGC0L4gIiwidHlwZSI6ImJ1eSIsImxhbmd1YWdlIjoicnUifQ%3D%3D&signature=64GiVhGcfy4UIKEHquKaUMKljKA%3D">Оплатить</span>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					</div>
				</div>
			</div>

			<div class="section services">
				<div class="sectionTitle">Услуги</div>
				<div class="sectionContent">
					<div class="itemsServices">
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceInternet.png" /></div>
							<div class="title">бесплатный<br /> скоростной<br /> интернет</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceSkypeRooms.png" /></div>
							<div class="title">3 отдельные комнаты<br /> для скайп<br /> переговоров и<br /> телефонных звонков</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceCookies.png" /></div>
							<div class="title">бесплатные<br /> печеньки</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceCoffeeAndTea.png" /></div>
							<div class="title">бесплатные<br /> кофе и чай </div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceWorktime.png" /></div>
							<div class="title">работаем<br /> семь дней в неделю<br /> с девяти до девяти</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceMarkerBoard.png" /></div>
							<div class="title">маркерная доска</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceRestroomOnTheRoof.png" /></div>
							<div class="title">зона отдыха<br /> на крыше</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServicePrinter.png" /></div>
							<div class="title">принтер,<br /> сканер</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceMeetingRoom.png" /></div>
							<div class="title">комната для<br /> переговоров</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceBar.png" /></div>
							<div class="title">бар и ресторан<br /> на 1 этаже</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceKitchen.png" /></div>
							<div class="title">кухня:<br /> холодильник,<br /> тостер,<br /> чайник,<br /> вода и кофемашина</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServicePersonalLocker.png" /></div>
							<div class="title">шкафчики под ключ<br /> для личных вещей</div>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/services/imgServiceShower.png" /></div>
							<div class="title">душ</div>
						</div>

					</div>
				</div>
			</div>

			<div class="section coworkingMap">
				<div class="sectionTitle">Карта</div>
				<div class="sectionContent">
					<div class="mapWrapper">
						<span class="subtitleCoworking">Зона работы</span>
						<img src="/wp-content/themes/fabrika.space/img/coworkingScheme.jpg" />
					</div>
					<div class="mapWrapper">
						<span class="subtitleCoworking">Зона отдыха</span>
						<img src="/wp-content/themes/fabrika.space/img/coworkingRestPlace.gif" style="margin-top: 20px;" />
					</div>
				</div>
			</div>

			<div class="section coworkingFriendly">
				<div class="sectionTitle">Coworking friendly</div>
				<div class="sectionContent">
					<div class="descriptionCoworkingFriendly">Наши резиденты могут воспользоваться бесплатным днем для работы в коворкинг-сети наших партнеров: во Львове, Киеве и Одессе.</div>
					<div class="itemsCoworkingFriendly">
						<div class="item">
							<div class="city">Львов</div>
							<div class="space">Startup depot</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/friends/logoStartupdepot.jpg" /></div>
							<div class="itemContacts">
								<a href="http://startupdepot.lviv.ua" target="_blank">http://startupdepot.lviv.ua</a>
								<br />
								<a href="mailto:office@startupdepot.lviv.ua">office@startupdepot.lviv.ua</a>
								<br />
								+38 (096) 96-93-641
							</div>
						</div>
						<div class="item">
							<div class="city">Киев</div>
							<div class="space">Часопис</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/friends/logoChasopys.jpg" /></div>
							<div class="itemContacts">
								<a href="http://coworking.chasopys.ua" target="_blank">http://coworking.chasopys.ua</a>
								<br />
								<a href="mailto:coworking@chasopys.kiev.ua">coworking@chasopys.kiev.ua</a>
								<br />
								+38 (095) 20-68-621
							</div>
						</div>
						<div class="item">
							<div class="city">Одесса</div>
							<div class="space">ТЕРМИНАЛ42</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/friends/logoTerminal24.jpg" /></div>
							<div class="itemContacts">
								<a href="http://terminal42.com.ua/" target="_blank">http://terminal42.com.ua/</a>
								<br />
								<a href="mailto:info@terminal42.com.ua">info@terminal42.com.ua</a>
								<br />
								+38 (048) 735-72-75
							</div>
						</div>
						<div class="item">
							<div class="city">Днепропетровск</div>
							<div class="space">Coworking "365"</div>
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/friends/logoCoworking365.jpg" /></div>
							<div class="itemContacts">
								<a href="http://coworking365.com.ua/" target="_blank">http://coworking365.com.ua/</a>
								<br />
								<a href="mailto:wow@coworking365.com.ua">wow@coworking365.com.ua</a>
								<br />
								+38 (067) 777-73-65
							</div>
						</div>
					</div>
				</div>
			</div>

		</div><!-- end #content ru-->
	<?php } ?>
	</div><!-- end #main-->

<?php get_footer(); ?>
