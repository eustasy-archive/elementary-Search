<?php

if ( isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1 ) {
	header('Location: https://labs.eustasy.org/elementary-Search/', true, 302);
	exit;
}

$Meta = '<title>Allow Cookies? &nbsp;&middot;&nbsp; elementary Search</title>';
require __DIR__.'/_templates/header.php'; ?>
			<div id="search">
				<div id="search-entry">
					<h2>Do you want to allow Cookies?</h2>
					<h4>You can change your decision at any time in the settings menu.</h4>
					<p>Cookies are small pieces of information that your browser only displays to the website that sets them. They often work much like name badges, but we use them to store settings. Other sites may use them to keep you signed in, log searches or target advertising.</p>
					<h3 class="button"><a href="https://labs.eustasy.org/elementary-Search/">No</a></h3>
					<h3 class="button positive"><a href="enablecookies.php">Yes</a></h3>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<footer id="footer">
			<a href="https://elementary.io/" title="elementary OS"><img class="floatleft faded" src="assets/images/logo.png"></a>
			<nav class="floatright">
				<a href="#settings" class="settings">Settings</a> &nbsp;&middot;&nbsp;
				<a href="#legal" class="legal">Legal</a>
			</nav>
		</footer>
		<?php require 'legal.php'; ?>
		<div class="settings popup">
			<div class="settings close"></div>
			<div class="settings content">
				<h2>Settings</h2>
				<div class="control advert"></div>
				<h3>Cookies</h3>
				<label class="control cookies checkbox toggle candy" onclick="">
					<input id="view" type="checkbox"<?php echo cookie_is('allow_cookies', '1'); ?>/>
					<p>
						<span class="cookies-enabled">Enabled</span>
						<span class="cookies-disabled">Disabled</span>
					</p>
					<a class="slide-button"></a>
				</label>
				<h3><label>Darken</label></h3>
				<div class="control darken enabled switch switch-three candy" onclick=""<?php echo cookie_is('allow_cookies', '1', ' style="display:none;"'); ?>>
					<input id="never"  name="view" type="radio"<?php echo cookie_is('darken', 'never'); ?>>
					<label class="darken-never" for="never" onclick="">Never</label>
					<input id="hover"  name="view" type="radio"<?php echo cookie_is('darken', 'hover'); ?>>
					<label class="darken-hover" for="hover" onclick="">On Hover</label>
					<input id="always" name="view" type="radio"<?php echo cookie_is('darken', 'always'); ?>>
					<label class="darken-always" for="always" onclick="">Always</label>
					<span class="slide-button"></span>
				</div>
				<div class="control darken disabled switch switch-three candy" onclick="" <?php echo cookie_is('allow_cookies', '1', ' style="display:none;"'); ?>>
					<h4>You must enable cookies to change this setting.</h4>
				</div>

			</div>
		</div>
	 	<div class="settings background"></div>
	</body>
</html>
