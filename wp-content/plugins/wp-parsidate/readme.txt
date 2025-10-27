=== پارسی دیت – Parsi Date ===
Contributors: lord_viper, man4toman, parselearn, yazdaniwp, saeedfard, iehsanir, wordpress-parsi
Donate link: https://wp-parsi.com/support/
Tags: shamsi, persian, jalali, ووکامرس, woocommerce
Requires at least: 5.3
Tested up to: 6.8
Stable tag: 5.1.8
License: GPLv3

Persian date support for WordPress

== Description ==

ParsiDate is a powerful plugin developed by Persian contributors to enhance the WordPress experience for Farsi users. It provides full support for the Shamsi (Jalali) calendar across the WordPress dashboard and front-end, fixes character display issues, and improves Right-to-Left (RTL) compatibility. With seamless integration into core features and popular plugins like WooCommerce and Gravity Forms, ParsiDate makes managing Persian websites easier and more professional.

List of some features:

* Shamsi (Jalali) day-picker in Block Editor (Gutenberg)
* Shamsi (Jalali) jQuery UI date-picker
* Shamsi (Jalali) dates in posts, pages, comments, archives, categories, search results, and permalinks
* Full WooCommerce support (checkout fields, orders, reports, widgets, and date-pickers)
* Shamsi (Jalali) dates in admin sections: post list, comment list, page list, and Quick Edit panels
* Shamsi (Jalali) calendar widget and archive widget
* RTL and fixed TinyMCE editor for a better writing experience
* Add Persian features to WooCommerce
* Advanced compatibility with ACF (Advanced Custom Fields)
* Powerful and fast function for fixing Arabic (ي , ك) to Persian (ی , ک)
* Automatic conversion of English numbers to Persian numbers
* Lightweight and optimized for low resource usage
* [WP-Planet.ir](https://wp-planet.ir) Widget

== Installation ==

1. Upload plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. To use the archives widget, go to 'Widgets' and choose 'بایگانی تاریخ خورشیدی'
4. To use the calender widget, go to 'Widgets' and choose 'گاه‌شمار تاریخ خورشیدی'

== Screenshots ==

1. Plugin main settings
2. Conversions settings
3. Tools
4. Other plugin compatibility
5. Persian date picker in WooCommerce
6. Persian date type in ACF

== Changelog ==

= 5.1.8 =
* Improved multilingual compatibility
* Added compatibility with Ultimate Dashboard
* Major update to Rank Math compatibility
* Fixed an issue with the Parsian Gateway
* Fixed Wazir font compatibility
* Made general enhancements to the core and UI

= 5.1.7 =
* Fix date format in ISO 8601
* Update dashboard.css
* Fix postalCode Validate
* Fix editor rtl
* Fix show gateway logo
* Central Gateways Method
* Fix Mellat Gateway + Support Block API
* Add Melli Gateway + Support Block API
* Fixes Media view Select box and returns in Jalali Format Date
* Compatible with Sales Countdown Timer plugin
* Fix block editor datepicker wrong date

= 5.1.6 =
* Some additional/unused options have been removed
* The sponsors widget loading mechanism has been optimized 

= 5.1.5 =
* Revert 'wpp_fix_post_time' and 'wpp_fix_post_date' to fix recent date time issue

= 5.1.4 =
* Fix NuSoap Required file Path
* Fix wp_kses allowed html
* Fix the time hook

= 5.1.3 =
* Fix convert order date to Gregorian in edit order screen
* Update fixes-dates.php
* Warning REQUEST Params in PHP
* Fix: Translations not loading
* Fix: The posting time of posts in the block editor
* Fix some reported bugs

= 5.1.2 =
* Fix some reported bugs
* Fix security issue
* Fix translation problem in new version of WordPress

= 5.1.1 =
* Fix Woo mails dates direction
* Fix Fatal error in Woo product edit screen 
* Fix in_array() fetal error in 8.1 
* Remove error_log 

= 5.1.0 =
* HPOS compatible
* Block-based gateways Woocommerce
* Iranian cities for Woocommerce
* Persian datepicker in Block editor 
* Fixed conflict with Jetpack.
* Resolved dashboard page warning.
* Addressed conflict with DATE_W3C format.
* Fixed date problem in comments feed.
* Resolved error while saving ACF fields.
* Fixed "Undefined index: date_i18n" notice.
* Addressed notice error in archive.php pages.
* Resolved conflicts with RevSlider.
* Fixed date conversion problem in WordPress 5.3.
* Addressed conflict with get_the_modified_date.
* Fixed Parsi Widget error.
* Resolved "Undefined index: wp_date" notice in disable.php.
* Fixed WooCommerce order detail issue.
* Addressed conflict with Polylang and WPML.
* Fixed duplicate activity date in the dashboard.
* Resolved type error in editor date picker.
* Fixed direction problem in the legacy editor.
* Corrected wrong callback in get_the_time hook.
* Addressed default timezone problem.
* Displaying "@" instead of "at" in the Jalali version.
* Added Persian numbers in WooCommerce prices.
* Improved support for Persian dates in WooCommerce.
* Added Persian date picker in WooCommerce.
* Added ACF Parsi date.
* Mini support for WPML and Polylang.
* Updated calendar widgets.
* Updated attachments filter dropdown.
* New looks and feels for the settings panel.
* Added Vazir font to the admin area.
* Fix convert order date to Gregorian in edit order screen.
* Compatiblity with WordPress 6.5x and WooCommerce 8.7x.

= 4.0.0 =
* This release contains huge bug fix:
  - Conflict with jetpack
  - Dashboard page warrning
  - Conflict with DATE_W3C format 
  - Date problem in comments feed
  - Error while save ACF fields
  - Notice: Undefined index: date_i18n
  - Notice error in archive.php pages
  - RevSlider conflicts
  - Date convertion problem in WordPress 5.3
  - Conflict with get_the_modified_date
  - Parsi Widget error
  - Notice: Undefined index: wp_date, disable.php
  - WooCommerce order detail fix
  - Conflict with polylang and wpml
  - Duplicate activity date in dashbaord
  - Type error in editor datepicke
  - Direction problem in legacy editor 
  - Wrong callback in get_the_time hook
  - Default timezone problem
* Displaying "@" instead of "at" in Jalali version
* Persian number in WooCommerce prices
* Better support of Persian date in WooCommerce 
* Persian datepicker in WooCommerce 
* ACF Parsi date
* Mini support of WMPL and Polylang
* Update Calendar widgets
* Update attachments filter dropdown 
* New looks and feels of settings panel
* Add Vazir font to admin area

= 3.0.3 =
* Fix widgets fatal errors
* Fix get_post_modified_time output
* Replace @ with persian character in edit posts
* Fix notice in disable section

= 3.0.2 =
* Now we support WordPress 5.3!
* Replace/add wp_date instead old function
* Small fix in Woocommerce dates
* Fix date in media files
* All core codes cleaned and beautified

= 3.0.1 =
* The Woocommerce hook has been temporarily disabled

= 3.0.0 =
* Added Shamsi (Jalali) day-picker in Block Editor (Gutenberg)
* Added Shamsi (Jalali) jQuery UI date-picker

= 2.4 =
* Fix for admin_posts_where
* Added new version of planet on dashboard
* New fixes for dates
* Fix month in permalink
* New fix for hook disabler

= 2.3.4 =
* Fix diagnosis leap year function ( WPP_ParsiDate::IsLeapYear() )

= 2.3.3 =
* Fix WooCommerce Sale Price Dates (From/To)

= 2.3.2 =
* Change date based on WordPress language (Persian/Farsi)
* Compatible with WP Multilingual plugin (WPML)

= Development Log
* Fix Wrong usage of $wp_query in posts_where filter that create "old posts" issue in WP_Query!

= 2.3.1 =
* Fix date picker's month dropdown bug in admin edit post. [#issue](https://github.com/wordpress-parsi/wp-parsidate/issues/5)

= 2.3.0.2 =
* Fix set editor font css

= 2.3 =
* Add [WP-Planet.ir](https://wp-planet.ir) widget
* Fix some bug

= 2.2.3 =
* Conflict timezone with wordpress default timezone [#issue](https://github.com/wordpress-parsi/wp-parsidate/issues/1)

= 2.2.2 =
* Fix error in PHP 7

= 2.2.1 =
* Compatible with WP 4.7
* Fixed: Notice error in acf group page. [#issue](https://wordpress.org/support/topic/need-a-conditional-for-posts-in-wpp_fix_post_date-function/)
* Fixed: Undefined variable `$predate` error in admin lists-fix.php [#issue](https://wordpress.org/support/topic/undefined-variable-predate-in-admin-lists-fix-php/)
* Fixed by: [Mostafa Soufi](https://profiles.wordpress.org/mostafas1990/)

= 2.2 =
* Fixed: Widgets bug causes Deprecated notices in WordPress >= 4.3
* Fixed: the_modified_date() is now in Shamsi. [Reported by Amirhossein Habibi]
* New: Added EDD support to convert prices digits in Persian digits.

= 2.1.7 =
* Fixed timezone bug [Reported by HANNANStd]
* Paragraph style returned to its previous style [Reported by WP-Parsi community]

= 2.1.6 =
* Fixed assets folder issue with community.

= 2.1.5 =
* Added "Droid Sans" & "Roboto" font family to back-end environment & editor by default, also an option for returning that
* Added an option for moving menu item to submenu
* Fixed timezone bug that was set to "Asia/Tehran" by default
* Cleaned codes and documentation

= 2.1.2 =
* Admin menu problem fixed

= 2.1.2 =
* Fix Broken Plugins Update Link (Farsi Locale)

= 2.1.1 =
* Fix Post permalink with custom structure (%category%/%postname%/)

= 2.1 =
* Post Permalink Fixed
* WordPress SEO OpenGraph Dates fixed
* WooCommerce order detail date fixed
* New option for set locale in plugin page settings
* LTR post editor text mode

= 2.0.0-alpha =
* Fully recorded!
* WordPress languages (Persian) files removed
* Persian calendar widget added
* Performance enhanced
* Woocommerce prices problem fixed

= 1.3.5 =
* Wordpress 4.0 ready
* languages updated

= 1.3.4 =
* unix timstamp problems fixed
* languages fixed
* core functions improved

= 1.3.3 =
* editor problems fixed

= 1.3.2 =
* update language files

= 1.3.1 =
* tested on wordpress 3.9 
* added new language files

= 1.3 =
* core function enhanced
* some date function problem fixed

= 1.2 =
* fix memory error
* fix post_where hook

= 1.1 =
* Fix TinyMce text direction
* Fix sitemaps date problems
* New features on plugin settings
* Add persian numbers on the_excerpt function
* Some bugfixs on core functions

= 1.0 =
* Hello world...
