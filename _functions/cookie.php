<?php

function cookie_is(string $cookie_name, string $cookie_value, string $return_if_true = ' checked'): string {
	$cookie = filter_input(INPUT_COOKIE, $cookie_name);
	if (
		isset($cookie) &&
		$cookie == $cookie_value
	) {
		return $return_if_true;
	}
	return '';
}
