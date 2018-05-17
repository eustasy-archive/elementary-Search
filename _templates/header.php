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
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300">
		<link rel="stylesheet" href="assets/css/switches.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<script src="https://cdn.jsdelivr.net/combine/gh/jquery/jquery@3/dist/jquery.min.js,gh/chuckcarpenter/REM-unit-polyfill@1/js/rem.min.js,gh/LeaVerou/prefixfree@1/prefixfree.min.js,gh/js-cookie/js-cookie@2/src/js.cookie.min.js"></script>
		<script src="assets/js/script.js"></script>
		<?php

		function fallBack() {
			$backgrounds = glob(__DIR__.'/../assets/images/wallpapers/*.jpg', $Flags);
			$k = array_rand($backgrounds);
			$current = array_pop(explode('/', $backgrounds[$k]));
			var_dump($current);
			echo '<style>
			body { background: url(\'assets/images/wallpapers/', $current, '\') no-repeat center center fixed #222222; background-size: cover; }
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
