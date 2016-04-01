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
				</div>
				<div class="part">
					<div class="item"><a href="mailto:info@fabrika.space" class="icon_mail">info@fabrika.space</a></div>
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
