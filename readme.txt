=== Sketchfab oEmbed ===
Contributors: ramiy
Tags: Sketchfab, oEmbed, 3d, models
Requires at least: 3.5
Tested up to: 4.2
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed 3D models from sketchfab.com into your WordPress site

== Description ==

[Sketchfab](https://www.sketchfab.com) is the place to be for 3D files: a platform to publish and find the best 3D content. Millions of people make 3D models or scan the real world in 3D, why would they share this in 2D? What YouTube did for video makers, or Soundcloud for musicians, we are doing it for creators of 3D content.

Sketchfab integrates with all major 3D creation tools, and is natively built in Photoshop, Modo and Blender. Sketchfab supports 28 native 3D formats, and displays them in browser in real-time.

The Sketchfab 3D viewer can be embedded on any web page, as easily as a YouTube video. This plugin will enables you to embed 3d models from sketchfab using nothing but the URL. Just copy the model URL from [sketchfab.com](https://www.sketchfab.com) and paste it to your post.

https://vimeo.com/43600255

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Sketchfab oEmbed".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Updating =
* Use WordPress automatic updates to upgrade to the latest version. Ensure to backup your site just in case.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended  Requirements =
* The latest WordPress version.
* PHP version 5.4 or greater.
* MySQL version 5.5 or greater.

== Frequently Asked Questions ==

= How do I embed 3D models from sketchfab? =

With this plugin you can use the model URL, just paste the URL into your post editor:
`https://sketchfab.com/models/g9uB1BAArLX0tLxmuxHYJfdRMbH`

= How do I set custom dimentions to my models? =

In wordpress 4.2 you can double click the embedded models and set max `width` and max `height` dimentions. It will add the WordPress `[embed]` shortcode:
`[embed width="400" height="300"]https://sketchfab.com/models/g9uB1BAArLX0tLxmuxHYJfdRMbH[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works  with all the themes.

== Screenshots ==
1. Pasting the URL to the text editor.
2. Pasting the URL to the visual editor.

== Changelog ==

= 1.3 (2015-04-21) =
* Prevent direct access to php files.
* Prevent direct access to directories.

= 1.2 (2015-03-04) =
* Add branding text and a video to the readme file.
* Add two screenshots.

= 1.1 (2015-03-02) =
* Add i18n support.
* Add hebrew (he_IL) traslation.

= 1.0 (2015-03-01) =
* Initial release
* Register oEmbed provider.
