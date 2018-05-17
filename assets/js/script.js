/*global $ Cookies*/

// BEGIN Vertical-Centering for the Search form and Height-Setting for it's Button
function getSize() { // Define a function to get the sizes and position them properly
	var heightTop = ($(window).height()/2) - ($('#search').height()/2) - ($('#footer').height()/2) // Get the new Heights Top
	$('#search').css('margin-top',heightTop) // Set the new Heights Top
	var heightForm = $('#search').height() // Get the new Heights Top
	$('#search-button').css('height',heightForm) // Set the new Heights Top
} // The function's finished
$(document).ready(getSize) // Run on pageload
$(window).resize(getSize) // Run on resize
// END Vertical-Centering for the Search form and Height-Setting for it's Button



// The following are only to be active once the page has completed it's loading.
$(function($) {



	// BEGIN On Load Check Cookies
	var cookies
	if ( Cookies.get('allow_cookies') === '1') {
		cookies = 'enabled'
	} else {
		cookies = 'disabled'
	}
	// END On Load Check Cookies



	// BEGIN Cookie Control
	$('.cookies-enabled').click(function() {
		Cookies.set('allow_cookies', '1', { expires: 365, path: '/' })
		cookies = 'enabled'
		$('.control.darken.enabled').css('display', 'block')
		$('.control.darken.disabled').css('display', 'none')
		var action = $('#search').attr('action')
		if (action === 'https://duckduckgo.com/') {
			Cookies.set('default_search', 'DuckDuckGo', { expires: 365, path: '/' })
		} else if (action === 'https://www.google.com/search') {
			Cookies.set('default_search', 'Google', { expires: 365, path: '/' })
		} else if (action === 'https://search.yahoo.com/search') {
			Cookies.set('default_search', 'Yahoo', { expires: 365, path: '/' })
		}
	})
	$('.cookies-disabled').click(function() {
		$('.control.darken.enabled').css('display', 'none')
		$('.control.darken.disabled').css('display', 'block')
		cookies = 'disabled'
		Cookies.remove('allow_cookies', { path: '/' })
		Cookies.remove('default_search', { path: '/' })
		Cookies.remove('darken', { path: '/' })
	})
	// END Cookie Control



	// BEGIN Darken Control
	function setDarkness(dark_name) {
		$('#darken')
			.removeClass('never')
			.removeClass('hover')
			.removeClass('always')
			.addClass(dark_name)
		if (cookies === 'enabled') {
			Cookies.set('darken', dark_name, { expires: 365, path: '/' })
		}
	}
	$('.darken-always').click(function() {
		setDarkness('always')
	})
	$('.darken-hover').click(function() {
		setDarkness('hover')
	})
	$('.darken-never').click(function() {
		setDarkness('never')
	})
	// END Darken Control



	// BEGIN Search Engine Change
	function setSearchEngine(se_name, se_url) {
		$('#search').attr('action', se_url)
		$('.current-search').html('You are currently searching with ' + se_name + '.')
		if (cookies === 'enabled') {
			Cookies.set('default_search', se_name, { expires: 365, path: '/' })
		}
	}
	$('.change-to-duckduckgo').click(function() {
		setSearchEngine('DuckDuckGo', 'https://duckduckgo.com/')
	})
	$('.change-to-google').click(function() {
		setSearchEngine('Google', 'https://www.google.com/search')
	})
	$('.change-to-yahoo').click(function() {
		setSearchEngine('Yahoo', 'https://search.yahoo.com/search')
	})
	// END Search Engine Change



	// BEGIN Settings Popup Controls
	$('a.settings').click(function() { loadSettings() })
	$('.settings.close').click(function() { disableSettings() })
	$('.settings.background').click(function() { disableSettings() })
	$(this).keyup(function(event) { if (event.which == 27) { disableSettings() }})
	var SettingsStatus = 0
	function loadSettings() {
		if (SettingsStatus === 0) {
			$('.settings.popup').fadeIn(500)
			$('.settings.background').css('opacity', '0.7')
			$('.settings.background').fadeIn(1)
			// This is an Advert in the settings menu that can be loaded only when it is opened.
			// $('.control.advert').html('<iframe src="\/\/serve.adsi.st\/iframe.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Banner&AdsistAdSize=Medium" style="width:468px;height:60px;border:none;overflow:hidden;" scrolling="no"><\/iframe>')
			SettingsStatus = 1
		}
	}
	function disableSettings() {
		if (SettingsStatus === 1) {
			$('.settings.popup').fadeOut('normal')
			$('.settings.background').fadeOut('normal')
			SettingsStatus = 0
		}
	}
	// END Settings Popup Controls



	// BEGIN Legal Popup Controls
	$('a.legal').click(function() { loadLegal() })
	$('.legal.close').click(function() { disableLegal() })
	$('.legal.background').click(function() { disableLegal() })
	$(this).keyup(function(event) { if (event.which == 27) { disableLegal() }})
	var LegalStatus = 0
	function loadLegal() {
		if (LegalStatus === 0) {
			$('.legal.popup').fadeIn(500)
			$('.legal.background').css('opacity', '0.7')
			$('.legal.background').fadeIn(1)
			LegalStatus = 1
		}
	}
	function disableLegal() {
		if (LegalStatus === 1) {
			$('.legal.popup').fadeOut('normal')
			$('.legal.background').fadeOut('normal')
			LegalStatus = 0
		}
	}
	// END Legal Popup Controls



})
