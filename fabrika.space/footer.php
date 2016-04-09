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
					<div class="item"><span class="icon_location"><?php echo($lang=='ru'?'Харьков, ул. Благовещенская, 1':'Blagovischenska str. 1, Kharkiv, Ukraine') ?></span></div>
				</div>
				<div class="part">
					<div class="item"><a href="tel:+380681001144" class="icon_tel">+38 (068) 100 11 44</a></div>
					<div class="item"><a href="tel:+380995023246" class="icon_tel">+38 (099) 502 32 46</a></div>
					<div class="item"><a href="mailto:info@fabrika.space" class="icon_mail">info@fabrika.space</a></div>
				</div>
				<div class="part">
					<label class="item" for="mce-EMAIL">Будь в курсе последних событий</label>
					<div class="item">
						<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
						<style type="text/css">
							#mc_embed_signup form {
								text-align: left;
								padding: 10px 0;
							}
							#mc_embed_signup input.email {
								width: calc(100% - 105px - 10px);
								margin: 0 5px 0 0;
								padding: 0 5px 0 12px;
								border: none;
								background: #fff;
								border-radius: 3px;
								-webkit-box-sizing: border-box;
								-moz-box-sizing: border-box;
								box-sizing: border-box;
								height: 32px;
								line-height: 32px;
								font-size: 14px;
								display: inline-block;
								text-indent: 0;
							}
							#mc_embed_signup .mc-field-group .button {
								width: 100px;
								height: 32px;
								line-height: 32px;
								font-size: 12px;
								margin: 0;
								padding: 0;
								background: #000;
								border-radius: 3px;
								text-indent: 0;
								display: inline-block;
							}
							#mc_embed_signup .mc-field-group .button:hover {
								background: #000;
							}
							#mc_embed_signup .mc-field-group {
								padding-bottom: 0;
								min-height: initial;
								float: left;
								clear: none;
							}
							#mc_embed_signup div#mce-responses {
								position: absolute;
								left: 0;
								top: -30px;
								background: #cfccc8;
								margin: 0;
								padding: 10px;
							}
							#mc_embed_signup #mce-success-response {
								color: #fff;
								font-size: 16px;
								margin: 0;
								padding: 0;
								width: initial;
								line-height: 20px;
							}
						</style>
						<div id="mc_embed_signup">
							<form action="//space.us12.list-manage.com/subscribe/post?u=b8c7a127bdc373e0aa6813c5d&amp;id=b4163bb809" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">
									<div class="mc-field-group">
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email">
										<input type="submit" value="<?php echo($lang=='ru'?'Подписаться':'Subscribe') ?>" name="subscribe" id="mc-embedded-subscribe" class="button">
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>
									<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b8c7a127bdc373e0aa6813c5d_b4163bb809" tabindex="-1" value=""></div>
								</div>
							</form>
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
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
