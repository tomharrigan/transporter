=== Transporter ===
Contributors: TomHarrigan
Tags: AJAX, endless, pagination, reading, scroll, scrolling
Requires at least: 3.1
Tested up to: 4.0.0
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Infinite scroll extended to single post pages

== Description ==

In addition to normal infinite scroll behavior, this plugin adds infinite scroll to the single post page. When reading a single post, once the reader reaches the bottom of the page, the next post loads in. This is similar to functionality on big news sites such as Time.com, LA Times, Quartz, Vogue.com

Relies on add_theme_support, expects specific styling from each theme; including fixed footer.

== Installation ==

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' Plugin Dashboard
1. Select `transporter.zip` from your computer
1. Upload
1. Activate the plugin on the WordPress Plugin Dashboard

= Using FTP =

1. Extract `transporter.zip` to your computer
1. Upload the `transporter` directory to your `wp-content/plugins` directory
1. Activate the plugin on the WordPress Plugins dashboard

Add the following to your themes functions.php file: `add_theme_support( 'infinite-transporter');`

The default WordPress TwentySomething themes are already compatable with this plugin and ready to go! 

== Frequently Asked Questions ==
=Ask a question=

== Screenshots ==


== Changelog ==

= 1.0 =
* Initial release
