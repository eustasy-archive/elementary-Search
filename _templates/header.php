<!DocType html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<?php echo $Meta; ?>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300">
		<link rel="stylesheet" href="switches.css">
		<link rel="stylesheet" href="styles.css">
		<script src="https://cdn.jsdelivr.net/g/jquery,jquery.cookie"></script>
		<script src="script.js"></script>
		<?php

		function fallBack() {
			$backgrounds = array( '159', '16', '164', '168', '173', '2', '94', 'Cold Evening', 'Horseshoe Bend Sunset', 'Lake McDonald', 'Lake Tahoe Colors', 'Leaves', 'Lighthouse', 'Our Night Under The Stars', 'Paris la Tour Eiffel', 'Star River', 'The Coast', 'Tunnel', 'Urban Dream', 'Water Lily', 'morning');
			$k = array_rand($backgrounds);
			$current = $backgrounds[$k];
			echo '<style>
			@media (max-width:1280px) { body { background: url(\'backgrounds/small/', $current, '_mini.jpg\') no-repeat center center fixed #222222; background-size: cover; } }
			@media (min-width:1281px) { body { background: url(\'backgrounds/', $current, '_mini.jpg\') no-repeat center center fixed #222222; background-size: cover; } }
		</style>';
		}
// This is where the cool new accounts stuff will go,
// but first, in page selections!
//		if (isset($_COOKIE['allow_cookies']) && isset($_COOKIE['chosen_background']) ) {
			fallBack();
//		} else {
//			fallBack();
//		}

		?>

	</head>
	<body>
		<div id="darken" class="<?php
			if (
				isset($_COOKIE['allow_cookies']) &&
				$_COOKIE['allow_cookies'] == 1 &&
				isset($_COOKIE['darken'])
			) {
				echo htmlentities($_COOKIE['darken'], ENT_QUOTES, 'UTF-8');
			}
		?>">
