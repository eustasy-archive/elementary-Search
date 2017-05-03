# [elementary-Search](https://labs.eustasy.org/elementary-Search/)

[![Build Status](https://travis-ci.org/eustasy/elementary-Search.svg?branch=master)](https://travis-ci.org/eustasy/elementary-Search)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/60bde73a651e4e05ae52039c36b62021)](https://www.codacy.com/app/lewisgoddard/elementary-Search?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=eustasy/elementary-Search&amp;utm_campaign=Badge_Grade)
[![Code Climate](https://codeclimate.com/github/eustasy/elementary-Search/badges/gpa.svg)](https://codeclimate.com/github/eustasy/elementary-Search)
[![Bountysource](https://www.bountysource.com/badge/tracker?tracker_id=240433)](https://www.bountysource.com/teams/eustasy/issues?tracker_ids=240433)

### Features
- Search with Google, Yahoo! or DuckDuckGo.
- Uses no Cookies by default.
- Prompt to allow cookies when changing search engine to remember default when cookies are not allowed.
- Saveable dimming state.

### Minor Upcoming Changes
- Add NoScript fallbacks that utilise PHP pages to update cookies for settings.
- Allow selection of a default background (or rotation).
- Maintain footer:hover when popovers are open.

### Major Upcoming Changes
- Add in-page search results (default, but will not remove alternative options).
- Synchronize wallpaper selection with elementary Accounts.

### Notes
JavaScript shouldn't check cookies that might have changed since the page loaded, because the version they are checking _are from_ when the page loaded. It is for this reason that Script.js uses a cookie variable instead of constantly checking for an "allow_cookies" cookie value of 1.
