[elementary-Search](http://labs.eustasy.org/esearch/)
================

###Features
- Search with Google, Yahoo! or DuckDuckGo.
- Uses no Cookies by default.
- Prompt to allow cookies when changing search engine to remember default when cookies are not allowed.
- Saveable dimming state.

###Minor Upcoming Changes
- Add NoScript fallbacks that utilise PHP pages to update cookies for settings.
- Allow selection of a default background (or rotation).
- Maintain footer:hover when popovers are open.

###Major Upcoming Changes
- Add in-page search results (default, but will not remove alternative options).
- Synchronize wallpaper selection with elementary Accounts.

###Notes
JavaScript shouldn't check cookies that might have changed since the page loaded, because the version they are checking _are from_ when the page loaded. It is for this reason that Script.js uses a cookie variable instead of constantly checking for an "allow_cookies" cookie value of 1.
