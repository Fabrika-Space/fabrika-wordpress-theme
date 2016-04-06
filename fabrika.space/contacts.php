<?php
/*
Template Name: contacts
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

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
			var mapCanvas = document.getElementById('googleMap');
			var myLatlng = new google.maps.LatLng(49.98916, 36.22252);
			var mapOptions = {
				center: myLatlng,
				zoom: 16,
				mapTypeControl: false,
				draggable: false,
				scaleControl: false,
				scrollwheel: false,
				navigationControl: false,
				streetViewControl: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(mapCanvas, mapOptions)
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title: 'Fabrika',
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<div id="googleMap" class="gMapInContacts"></div>

	<!--**************** MAIN ****************-->
	<div id="main" class="pageStyleLikeHome contactsMain">
		<?php if($lang == 'en') {?>
			<!--**************** CONTENT EN****************-->
			<div id="content" class="clear">
				<h1>How to find us</h1>

				<div class="simpleTextBlock">
					<p>We are located in an old industrial building at Blagovishenska street,1 (former Karl Marx st, 1) next to the Blagovishensky cathedral.</p>
					<p>Nearest metro stations: Tsentralniy Rynok, Istorychnyi Muzei, Pivdennyi Vokzal.</p>
				</div>
			</div><!-- end #content en-->
		<?php }else{ ?>
			<!--**************** CONTENT RU****************-->
			<div id="content" class="clear">
				<h1>Где нас искать</h1>

				<div class="simpleTextBlock">
					<p>Мы находимся в здании фабрики сортировки семян на улице Карла Маркса, 1 (рядом с Благовещенским собором), ближайшие станции метро – Центральный рынок, Исторический музей. Пешком от Южного железнодорожного вокзала – 7 минут.</p>
				</div>

			</div><!-- end #content ru-->
		<?php } ?>
	</div><!-- end #main-->

<?php get_footer(); ?>
