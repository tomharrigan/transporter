=== Infinite Post Transporter ===
Contributors: TomHarrigan, codeandtheory, jmarx75
Tags: AJAX, endless, pagination, reading, scroll, scrolling, genesis, canvas
Requires at least: 3.1
Tested up to: 4.0.1
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Infinite scroll extended to single post pages

== Description ==

In addition to normal infinite scroll behavior, this plugin adds infinite scroll to the single post page. When reading a single post, once the reader reaches the bottom of the page, the next post loads in. This is similar to functionality on big news sites such as Time.com, LA Times, Quartz, Vogue.com

The default WordPress TwentySomething themes, Genesis themes and Canvas themes are already compatable with this plugin and ready to go!

Relies on add_theme_support. If your theme is not in the above list, add the folliwing to your themes functions.php file: `add_theme_support( 'infinite-transporter' );`

See installation section for more on getting set up. 

== Installation ==

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' Plugin Dashboard
1. Select `infinite-transporter.zip` from your computer
1. Upload
1. Activate the plugin on the WordPress Plugin Dashboard

= Using FTP =

1. Extract `infinite-transporter.zip` to your computer
1. Upload the `infinite-transporter` directory to your `wp-content/plugins` directory
1. Activate the plugin on the WordPress Plugins dashboard

The default WordPress TwentySomething themes, Genesis themes and Canvas themes are already compatable with this plugin and ready to go!

Otherwise, add the following to your themes functions.php file: `add_theme_support( 'infinite-transporter' );`

The available options are the same as those in Jetpack Infinite Scroll. To configure further, see the following: http://jetpack.me/support/infinite-scroll/

The plugin assumes that your themes content container is named 'content', unless otherwise defined. If posts are loaded in a container named differently than that, for example inside of a div named 'main', then in your 'add_theme_support' declaration, include the 'container' argument with name of your themes container div like so: 

```
add_theme_support( 'infinite-transporter', array(
	'container' => 'main',
);
```
 

== Frequently Asked Questions ==
=Ask a question=

== Screenshots ==


== Changelog ==

= 1.1 =
* Add Google Analytics integration support
* Add support for Genesis themes
* Add support for Canvas themes
* Add support for Twenty Fifteen theme
* Add 'post_order' parameter to allow loading of posts in sequential reverse-chron order (true), or by starting from latest post after scrolling through initial post (default, false).
* Add 'single_infinite_transporter_query_args' filter
* Fix bug with second post not updating URL
* Fix bug with page parameter being appended in single post page

= 1.0 =
* Initial release
