<?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) {
	header('Location: http://labs.eustasy.org/esearch/',TRUE,302);
	exit();
} 
setcookie('allow_cookies', '1', time()+2419200, '/', '.eustasy.org');
header('Location: http://labs.eustasy.org/esearch/',TRUE,302);
exit();
?>
