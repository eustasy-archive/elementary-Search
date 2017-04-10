<?php
if ( !isset($_COOKIE['allow_cookies']) || $_COOKIE['allow_cookies'] != 1 ) {
	setcookie('allow_cookies', '1', time() + 2419200, '/', '.eustasy.org');
}
header('Location: https://labs.eustasy.org/elementary-Search/', true, 302);
