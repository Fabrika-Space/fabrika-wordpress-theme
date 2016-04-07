<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
	<?php if(is_front_page()) {?>
		<title>Fabrika.space | Фабрика Харьков | Коворкинг | Ивент-зона | Бар</title>
		<meta name="description" content="FABRIKA.SPACE – хаб притяжения умов, мастерская идей и качественного отдыха">
		<link rel="image_src" href="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
		<meta itemprop="image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">

		<meta property="og:title" content="FABRIKA.SPACE | коворкинг | ивент-зона | бар">
		<meta property="og:description" content="FABRIKA.SPACE – хаб притяжения умов, мастерская идей и качественного отдыха">
		<meta property="og:url" content="http://fabrika.space/">
		<meta property="og:image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
	<?php }elseif(is_page_template( 'allnews.php' )) {?>
		<title>Новости о Fabrika.space | Фабрика Харьков | Коворкинг | Ивент-зона | Бар</title>
		<meta name="description" content="FABRIKA.SPACE – последние новости о том что происходит на Фабрике">
		<link rel="image_src" href="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
		<meta itemprop="image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">

		<meta property="og:title" content="FABRIKA.SPACE | новости">
		<meta property="og:description" content="Последние новости о том что происходит на Фабрике | FABRIKA.SPACE">
		<meta property="og:url" content="http://fabrika.space/News/">
		<meta property="og:image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
	<?php }elseif(is_page_template( 'allevents.php' )) {?>
		<title>События в Fabrika.space | Фабрика Харьков | Коворкинг | Ивент-зона | Бар</title>
		<meta name="description" content="FABRIKA.SPACE – календарь событий">
		<link rel="image_src" href="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
		<meta itemprop="image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">

		<meta property="og:title" content="FABRIKA.SPACE | события">
		<meta property="og:description" content="Календарь событий в FABRIKA.SPACE">
		<meta property="og:url" content="http://fabrika.space/Events/">
		<meta property="og:image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
	<?php }elseif(str_ends_with( $_SERVER['REQUEST_URI'], "/coworking/" )) {?>
		<title>Коворкинг в Fabrika.space | Фабрика Харьков | Ивент-зона | Бар</title>
		<meta name="description" content="FABRIKA.SPACE – лучший коворкинг в Харькове">
		<link rel="image_src" href="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
		<meta itemprop="image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">

		<meta property="og:title" content="Коворкинг в FABRIKA.SPACE ">
		<meta property="og:description" content="FABRIKA.SPACE – лучший коворкинг в Харькове">
		<meta property="og:url" content="http://fabrika.space/coworking/">
		<meta property="og:image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/coworking_banner.jpg">
	<?php }elseif(is_page_template( 'eventzone.php' ) || str_ends_with( $_SERVER['REQUEST_URI'], "/confererence/" )) {
		if ($lang=='en'){?>
			<title>Event-zone in Fabrika.space | Fabrika Kharkiv | Coworking | Bar</title>
			<meta name="description" content="FABRIKA.SPACE – the best place for your events">
			<link rel="image_src" href="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
			<meta itemprop="image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">

			<meta property="og:title" content="Event-zone in FABRIKA.SPACE">
			<meta property="og:description" content="FABRIKA.SPACE – the best place for your events">
			<meta property="og:url" content="http://fabrika.space/event-zone/">
			<meta property="og:image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/imgRoomsDescription.jpg">
		<?php }else{ ?>
			<title>Ивент-зона в Fabrika.space | Фабрика Харьков | Коворкинг | Бар</title>
			<meta name="description" content="FABRIKA.SPACE – идеальное место для проведения мероприятий">
			<link rel="image_src" href="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
			<meta itemprop="image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">

			<meta property="og:title" content="Ивент-зона в FABRIKA.SPACE">
			<meta property="og:description" content="FABRIKA.SPACE – идеальное место для проведения мероприятий">
			<meta property="og:url" content="http://fabrika.space/event-zone/">
			<meta property="og:image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/imgRoomsDescription.jpg">
	<?php }
		}elseif(str_ends_with( $_SERVER['REQUEST_URI'], "/bar/" )) {?>
		<title>Бар в Fabrika.space | Фабрика Харьков | Коворкинг | Ивент-зона</title>
		<meta name="description" content="FABRIKA.SPACE – самый просторный бар Харькова с оригинальными и классическими напитками">
		<link rel="image_src" href="http://fabrika.space/wp-content/themes/fabrika.space/img/bar_banner.jpg">
		<meta itemprop="image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/bar_banner.jpg">

		<meta property="og:title" content="Бар в FABRIKA.SPACE">
		<meta property="og:description" content="FABRIKA.SPACE – самый просторный бар Харькова с оригинальными и классическими напитками">
		<meta property="og:url" content="http://fabrika.space/bar/">
		<meta property="og:image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/bar_banner.jpg">
	<?php }elseif(str_ends_with( $_SERVER['REQUEST_URI'], "/contacts/" )) {?>
		<title>Контакты Fabrika.space | Фабрика Харьков | Коворкинг | Ивент-зона | Бар</title>
		<meta name="description" content="FABRIKA.SPACE – info@fabrika.space">
		<link rel="image_src" href="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
		<meta itemprop="image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">

		<meta property="og:title" content="FABRIKA.SPACE контакты">
		<meta property="og:description" content="FABRIKA.SPACE – info@fabrika.space">
		<meta property="og:url" content="http://fabrika.space/contacts/">
		<meta property="og:image" content="http://fabrika.space/wp-content/themes/fabrika.space/img/cover.jpg">
	<?php }else{

			$imgURL = get_post_meta($post->ID, 'Photo', true);
			$pageURL = 'http';
			if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
				$pageURL .= "://";
			if ($_SERVER["SERVER_PORT"] != "80") {
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			} else {
				$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];				
			}
			
		?>
		<title>Fabrika.space | Фабрика Харьков | Коворкинг | Ивент-зона | Бар</title>
		<meta name="description" content="FABRIKA.SPACE – хаб притяжения умов, мастерская идей и качественного отдыха">
		<link rel="image_src" href="<?php echo($imgURL); ?>">
		<meta itemprop="image" content="<?php echo($imgURL); ?>">

		<meta property="og:title" content="FABRIKA.SPACE">
		<meta property="og:description" content="FABRIKA.SPACE – хаб притяжения умов, мастерская идей и качественного отдыха">
		<meta property="og:url" content="<?php echo($pageURL); ?>">
		<meta property="og:image" content="<?php echo($imgURL); ?>">
	<?php };?>

	<link rel="icon" type="image/png" href="/wp-content/themes/fabrika.space/img/favicon.png">

	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/fabrika.space/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/fabrika.space/css/devices.css" />

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="/wp-content/themes/fabrika.space/js/main.js"></script>

	<script src="https://use.typekit.net/ofq1pbu.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<link href="/wp-content/themes/fabrika.space/css/jquery-ui.min.css" rel="stylesheet">
	<script src="/wp-content/themes/fabrika.space/js/jquery-ui.min.js"></script>

</head>
<body class="<?php if(is_front_page()) {echo "homePage";}else{echo "innerPage";}; ?>  tk-proxima-nova">

<div id="all">


	<!--****************HEADER****************-->
	<header id="header">
		<div class="innerHeader">
			<div class="mainMenu">
				<span class="sandwich"></span>
				<span class="closeMainMenu"></span>
				<ul>
					<li <?php if(is_front_page()) {echo "class='act'"; }; ?>><a href="/<?php echo($langToken.($lang=='ru'?'">Главная':'">Main'));?></a></li>
					<li <?php if(is_page_template( 'allnews.php' )) {echo "class='act'"; }; ?>><a href="/News<?php echo($langToken.($lang=='ru'?'">Новости':'">News'));?></a></li>
					<li <?php if(is_page_template( 'allevents.php' )) {echo "class='act'"; }; ?>><a href="/Events<?php echo($langToken.($lang=='ru'?'">События':'">Events'));?></a></li>

					<li <?php if(strpos($_SERVER['REQUEST_URI'], "/coworking/" )!==false) {echo "class='act'"; }; ?>><a href="/coworking/<?php echo($langToken.($lang=='ru'?'">Коворкинг':'">Coworking'));?></a></li>
					<li <?php if(strpos($_SERVER['REQUEST_URI'], "/event-zone/" )!==false) {echo "class='act'"; }; ?>><a href="/event-zone/<?php echo($langToken.($lang=='ru'?'">Ивент-зона':'">Event-zone'));?></a></li>
					<li <?php if(strpos($_SERVER['REQUEST_URI'], "/bar/" )!==false) {echo "class='act'"; }; ?>><a href="/bar/<?php echo($langToken.($lang=='ru'?'">Бар':'">Bar'));?></a></li>
					<li <?php if(strpos($_SERVER['REQUEST_URI'], "/contacts/" )!==false) {echo "class='act'"; }; ?>><a href="/contacts/<?php echo($langToken.($lang=='ru'?'">Контакты':'">Contacts'));?></a></li>
					<li><a href="?lang=<?php echo($altLang)?>"><?php echo($altLang)?></a></li>
				</ul>
			</div>
			<a href="/<?php echo($langToken); ?>" class="logo"><img src="/wp-content/themes/fabrika.space/img/logo.svg" /></a>
		</div>
	</header><!-- end #header-->

	<?php function str_ends_with($haystack, $needle)
		{
		    return strrpos($haystack, $needle) + strlen($needle) ===
		        strlen($haystack);
		}?>
