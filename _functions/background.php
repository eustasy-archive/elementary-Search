<?php

function background(): string {
	$backgrounds = glob(__DIR__.'/../assets/images/wallpapers/*.jpg');
	$random = array_rand($backgrounds);
	$current = array_pop(explode('/', $backgrounds[$random]));
	return '<style>body { background: url(\'assets/images/wallpapers/'.$current.
		'\') no-repeat center center fixed #222222; background-size: cover; }</style>'.PHP_EOL;
}
