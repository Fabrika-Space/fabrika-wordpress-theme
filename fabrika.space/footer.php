<?php
/**
 * The template for displaying the footer
 */
?>

<?php
		$lang = 'ru';
		$altLang = 'en';

		$urlLang = $_GET["lang"]; //getting language from the query string

		if ($urlLang && strcmp($urlLang, $lang) < 0) { //swap language settings
				$tmp = $lang;
				$lang = $altLang;
				$altLang=$tmp;
		}
		$langToken="?lang=".$lang;
?>

	<footer id="footer">
		<div class="footContacts">
			<div class="innerFootContacts">
				<div class="part">
					<div class="item"><span class="icon_location"><?php echo($lang=='ru'?'Харьков, ул. Благовещенская, 1 (бывшая Карла Маркса)':'Blagovischenska str. 1, Kharkiv, Ukraine') ?></span></div>
				</div>
				<div class="part">
					<div class="item"><a href="tel:+380681001144" class="icon_tel">+38 (068) 100 11 44</a></div>
					<div class="item"><a href="tel:+380995023246" class="icon_tel">+38 (099) 502 32 46</a></div>
					<div class="item"><a href="mailto:info@fabrika.space" class="icon_mail">info@fabrika.space</a></div>
				</div>
				<div class="part">
					<div class="item">Будь в курсе последних событий</div>
					<div class="item">
						<!-- <input type="text" placeholder="email" />
						<input type="submit" placeholder="Subscribe" /> -->

						<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
						<style type="text/css">
						    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
						    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
						</style>
						<div id="mc_embed_signup">
						<form action="//space.us12.list-manage.com/subscribe/post?u=b8c7a127bdc373e0aa6813c5d&amp;id=fe24f30006" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
						    <label for="mce-EMAIL">Еженедельная рассылка лучших событий Fabrika.space</label>
						    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b8c7a127bdc373e0aa6813c5d_fe24f30006" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
						</div>
						<!--End mc_embed_signup-->
					</div>
				</div>
				<!--div class="part">
					<div class="item"><a href="tel:80501234567" class="icon_tel">8 (050) 123 45 67</a></div>
					<div class="item"><a href="mailto:info@fabrika.space" class="icon_mail">info@fabrika.space</a></div>
				</div-->
			</div>
		</div>
	</footer><!-- #footer -->

</div><!-- end #all-->

<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-68425202-1', 'auto');
 ga('send', 'pageview');

</script>

</body>
</html>
