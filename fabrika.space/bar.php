<?php
/*
Template Name: bar
*/
?>
<?php get_header(); ?>

	<!--**************** MAIN ****************-->
	<div id="main" class="pageStyleLikeHome barMain">
		<!--**************** CONTENT ****************-->
		<div id="content" class="clear">
			<h1>Бар</h1>

			<div class="section aboutBar bgWhite clear">
				<div class="sectionTitle borderBottomTitle">О нас</div>
				<div class="sectionContent clear">
					<div class="txtAboutBar">					
						<p>Две фразы о чем речь. In lacinia, mi at dignissim volutpat, neque quam vestibulum arcu, sit amet placerat turpis libero id risus.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis sodales orci, eget molestie lorem pharetra vel. Nam neque neque, rhoncus in tincidunt in, volutpat a lacus. Aliquam pulvinar fringilla posuere.</p>
						<p>Maecenas dui ex, facilisis id lorem eget, gravida suscipit nunc. In at vehicula nisl. Suspendisse consequat, ligula mattis hendrerit vulputate.</p>
					</div>
					<div class="worktimeAboutBar">
						<img src="/wp-content/themes/fabrika.space/img/services/imgServiceWorktime.png" />
						<div class="txt">
							<p>Работаем<br /> семь дней в неделю<br />в Пятницу и Субботу с 9:00 до 3:00<br />с Воскресенья по Четверг с 9:00 до 24:00</p>
							<p>Харьков,<br /> ул. Благовещенская (бывш. Карла Маркса), 1</p>
						</div>
					</div>
				</div>
			</div>

			<!--div class="section reservation bgWhite">
				<div class="sectionTitle borderBottomTitle">Бронь</div>
				<div class="sectionContent">
					<div class="data">
						<div class="numberPeople">
							<label class="select">
								<select>
									<option>на 1 человека</option>
									<option>на 2 человека</option>
									<option>на 3 человека</option>
								</select>
							</label>
						</div>
						<div class="date">
							<label></label>
							<input type="date">
						</div>
						<div class="time">
							<label></label>
							<input type="time" />
						</div>
						<div class="name">
							<label>Имя</label>
							<input type="text" placeholder="Иван Петров" />
						</div>
						<div class="phone">
							<label>Ваш телефон</label>
							<input type="text" placeholder="+38 (      )" />
						</div>
					</div>

					<div class="ourTel">
						<span class="title">Наш телефон: </span>
						<span class="phone">+38 (123) 456-78-90</span>
						<span class="desc">(на случай если вы захотите что-то уточнить)</span>
					</div>
					<div class="textareaComment">
						<textarea placeholder="Пожелания (если есть)"></textarea>
					</div>

					<div class="note">Заявка будет обработана в течении 15 минут.<br /> Если возникнут вопросы, мы вам перезвоним.</div>
					<div class="submit"><input type="submit" value="Забронировать столик" /></div>
				</div>
			</div-->

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
											<span class="desc">(140 ml) spicy rum, vermouth rosso, spicy mango cordial, raspberry, lime, egg white, pineapple</span>
											<span class="price">90 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barFabrika.jpg" /></div>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>CILANTRO SOUR</span></div></span>
											<span class="desc">(110 ml) bourbon, cilantro cordial, egg white</span>
											<span class="price">80 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barCilantroSour.jpg" /></div>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>AMIGO</span></div></span>
											<span class="desc">(135 ml) tequila, agave sec, cranberry, gomme syrup, lime, egg white, cardamom</span>
											<span class="price">100 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barAmigo.jpg" /></div>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PEAR SOUR</span></div></span>
											<span class="desc">(120 ml) bourbon, pear cordial, lime, egg white</span>
											<span class="price">80 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPearSour.jpg" /></div>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>WILD SOUR</span></div></span>
											<span class="desc">(120 ml) grand marnier, lime cordial, sugar, egg white, rosemary</span>
											<span class="price">85 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barWildSour.jpg" /></div>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PASSION APHRODITE</span></div></span>
											<span class="desc">(200 ml) pineapple, baileys, grape brandy, mascarpone</span>
											<span class="price">120 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPassionAphrodite.jpg" /></div>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>PINK FUME</span></div></span>
											<span class="desc">(100 ml) yogurt liquor, sloe gin, amaretto, mascarpone</span>
											<span class="price">90 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barPinkFume.jpg" /></div>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>HLEB</span></div></span>
											<span class="desc">(110 ml) rye bread bourbon, lime, gomme syrup, prune, bread</span>
											<span class="price">90 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barHleb.jpg" /></div>
									</div>
									<div class="itemWithImage">
										<div class="data">
											<span class="title"><div><span>RYE OLD FASHIONED</span></div></span>
											<span class="desc">(80 ml) rye bourbon, whisky barrel bitters, sugar</span>
											<span class="price">135 грн</span>
										</div>
										<div class="img"><img src="/wp-content/themes/fabrika.space/img/barRyeOldFashioned.jpg" /></div>
									</div>

								</div>
							</div>
						</div>

						<div class="categoryMenuBar">
							<div class="titleCategoryMenuBar act">Cocktails</div>
							<div class="bodyCategoryMenuBar">
								<div class="listTxtItems">
									<div class="txtItem">
										<span class="price">100 грн</span>
										<span class="title">MICHURIN 150 ml</span>
										<span class="desc">Gin, lime cordial, cilantro, cucumber, egg white, mascarpone</span>
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
										<span class="price">50 грн</span>
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
						<!--div class="moduleRightSidebarMenuBar">
							<span class="h2">Акции</span>
							<div class="item">
								<div class="txt">
									<span class="title">Сэт «Бронепоезд» 5 шт</span>
									<span class="price"><b>35</b> грн</span>
								</div>
								<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgModuleRightSidebarMenuBar.jpg"></div>
								<span class="desc">Шот сет из 5 шотов за 100 грн.</span>
							</div>
						</div-->
					</div>

				</div>
			</div>

			<!--div class="section staffBar bgWhite">
				<div class="sectionTitle borderBottomTitle">Персонал</div>
				<div class="sectionContent">
					<div class="listStaffBar">
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgBarmen1.jpg" height="300" /></div>
							<span class="workPosition">Барриста</span>
							<span class="name">Иван Петров</span>
							<span class="desc">многократный призер-чемпионер</span>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgBarmen2.jpg" height="300" /></div>
							<span class="workPosition">Бармен</span>
							<span class="name">Иван Петров</span>
							<span class="desc">на все руки мастер</span>
						</div>
						<div class="item">
							<div class="img"><img src="/wp-content/themes/fabrika.space/img/imgBarmen3.jpg" height="300" /></div>
							<span class="workPosition">Администратор</span>
							<span class="name">Иван Петров</span>
							<span class="desc">держит руку на пульсе</span>
						</div>
					</div>
				</div>
			</div-->

		</div><!-- end #content-->
	</div><!-- end #main-->

<?php get_footer(); ?>
