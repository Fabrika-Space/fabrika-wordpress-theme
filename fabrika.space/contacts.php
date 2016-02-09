<?php
/*
Template Name: contacts
*/
?>
<?php get_header(); ?>

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
	<div id="googleMap"></div>

	<!--**************** MAIN ****************-->
	<div id="main" class="pageStyleLikeHome contactsMain">
		<!--**************** CONTENT ****************-->
		<div id="content" class="clear">
			<h1>Где нас искать</h1>

			<div class="simpleTextBlock">
				<p>Мы находимся в здании фабрики сортировки семян на улице Карла Маркса, 1 (рядом с Благовещенским собором), ближайшие станции метро – Центральный рынок, Исторический музей. Пешком от Южного железнодорожного вокзала – 7 минут.</p>
			</div>

		</div><!-- end #content-->
	</div><!-- end #main-->

<?php get_footer(); ?>
