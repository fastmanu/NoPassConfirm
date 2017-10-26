=== NoPassConfirm ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://topi.io/
Tags: registration, password, confirm
Requires at least: bp 2.8
Tested up to: 4.3 and bp 2.9
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to remove the password confirmation field on your buddypress registration page, 
in order to make it a little bit shorter.

== Description ==

Ever wanted to increase your signup rate, by reducing the size of your registration form ? This plugin is for you :)

In fact, the shorter the form, the better it is. The NoPassConfirm (for buddypress) plugin removes the password confirmation 
field from the user registration page. Your user will not have to type their password twice.

== Installation ==

Very straightforward:

1. Upload the `nopassconfirm` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enjoy :)

== Frequently Asked Questions ==

= What happens if the user misstypes his password during registration =

Simple: he will not be able to login, and will have to use the 'lost-my-password' feature.

= What about security =

This plugin fills the password-confirmation field with the one provided by the user. This is done 
on the fly, there's no read or write from the database. 

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* Initial release
