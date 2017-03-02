<?php
$Meta = '<title>elementary Search</title>';
require __DIR__.'/_templates/header.php';
?>
			<form id="search" action="<?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1 && isset($_COOKIE['default_search'])) {
				if ($_COOKIE['default_search'] == 'Google') {
					echo 'https://www.google.com/search';
				} elseif ($_COOKIE['default_search'] == 'Yahoo') {
					echo 'https://search.yahoo.com/search';
				} else {
					echo 'https://duckduckgo.com/';
				}
			} else {
				echo 'https://duckduckgo.com/';
			} ?>" method="get">
				<!--[if lte IE 9]>
					<input type="text" value="Search" id="search-entry" name="q" onfocus="javascript: if(this.value == 'Search'){ this.value = ''; }" onblur="javascript: if(this.value==''){this.value='Search';}" autocomplete="off" autofocus>
				<![endif]-->
				<![if !IE]>
					<input type="text" placeholder="Search" id="search-entry" name="q" autocomplete="off" autofocus>
				<![endif]>
				<input type="submit" value="" id="search-button">
				<div class="clear"></div>
			</form>
		</div>
		<footer id="footer">
			<a href="https://elementary.io/" title="elementary OS"><img class="floatleft faded" src="logo.png"></a>
			<span class="current-search">You are currently searching with <?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1 && isset($_COOKIE['default_search'])) {
				if ($_COOKIE['default_search'] == 'Google') {
					echo 'Google';
				} elseif ($_COOKIE['default_search'] == 'Yahoo') {
					echo 'Yahoo';
				} else {
					echo 'DuckDuckGo';
				}
			} else {
				echo 'DuckDuckGo';
			} ?>.</span> &nbsp;&middot;&nbsp;
			<?php
			if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) {
				echo '
			<ul>
				<li><a class="change-search" href="#change-search">Change</a>
					<ul>
						<li><a class="change-to-duckduckgo" href="#change-to-duckduckgo">DuckDuckGo</a></li>
						<li><a class="change-to-google" href="#change-to-google">Google</a></li>
						<li><a class="change-to-yahoo" href="#change-to-yahoo">Yahoo!</a></li>
					</ul>
				</li>
			</ul>';
			} else {
				echo '<a class="change-search" href="allowcookies.php">Change</a>';
			}
			?>
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
					<input id="view" type="checkbox"<?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) echo ' checked'; ?>/>
					<p>
						<span class="cookies-enabled">Enabled</span>
						<span class="cookies-disabled">Disabled</span>
					</p>
					<a class="slide-button"></a>
				</label>
				<h3><label>Darken</label></h3>
				<div class="control darken enabled switch switch-three candy" onclick="" <?php if (!isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] != 1) echo ' style="display:none;"'; ?>>
					<input id="never" name="view" type="radio"<?php if (isset($_COOKIE['darken']) && $_COOKIE['darken'] == 'never') echo ' checked'; ?>>
					<label class="darken-never" for="never" onclick="">Never</label>
					<input id="hover" name="view" type="radio"<?php if (isset($_COOKIE['darken']) && $_COOKIE['darken'] == 'hover') echo ' checked'; ?>>
					<label class="darken-hover" for="hover" onclick="">On Hover</label>
					<input id="always" name="view" type="radio"<?php
						if (
							!isset($_COOKIE['darken']) ||
							(
								isset($_COOKIE['darken']) &&
								$_COOKIE['darken'] == 'always'
							)
						) {
							echo ' checked';
						}
					?>>
					<label class="darken-always" for="always" onclick="">Always</label>
					<span class="slide-button"></span>
				</div>
				<div class="control darken disabled switch switch-three candy" onclick="" <?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) echo ' style="display:none;"'; ?>>
					<h4>You must enable cookies to change this setting.</h4>
				</div>

			</div>
		</div>
	 	<div class="settings background"></div>
	</body>
</html>
