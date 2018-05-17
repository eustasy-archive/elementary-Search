<?php

function cookie_is(string $cookie_name, string $cookie_value, string $return_if_true = ' checked'): string {
	if (
		isset($_COOKIE[$cookie_name]) &&
		$_COOKIE[$cookie_name] == $cookie_value
	) {
		return $return_if_true;
	}
	return '';
}
