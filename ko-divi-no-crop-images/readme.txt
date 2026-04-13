=== KO – Divi No Crop Images ===
Contributors: ko
Tags: divi, images, featured image, blog module
Requires at least: 5.8
Tested up to: 6.7
Stable tag: 1.0.0
License: GPLv2 or later

Prevents Divi's Blog Module from cropping featured images by forcing an effectively-unlimited image width/height via Divi's filters.

== What it does ==
- Hooks:
  - et_pb_blog_image_width
  - et_pb_blog_image_height
- Returns "9999" for both, which prevents Divi from generating a cropped size for the Blog Module.

== Installation ==
1. Upload the plugin folder to /wp-content/plugins/ (or upload the ZIP in WP Admin > Plugins > Add New).
2. Activate "KO – Divi No Crop Images".

== Notes ==
- This targets the Divi Blog Module image sizing logic specifically.
- If you still see cropped images, ensure the module is not set to a fixed thumbnail size in its design/settings.
