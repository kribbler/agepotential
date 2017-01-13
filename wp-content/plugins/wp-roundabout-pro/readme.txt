=== wp-roundabout-pro ===
Contributors: sakush100 
Tags: round, about, roundabout, jquery, slider, plugin
Requires at least: 3.0
Tested up to: 3.5.2
Stable tag: trunk
License: GPLv2 or later

Create awesome 3D rotating or flying slides with this free wordpress plugin.

== Description ==

This plugin allows you to create awesome 3D RoundAbout Pro Sliders. Here are the main features of this slider

*   More than 10 different Effects for 3D RoundAbout Pro slider
*   Cross browser compatible(IE7 and above, firefox, chrome, opera, safari, etc)
*   Highly customizable, Easy management and implementation via wp-admin
*   Shortcodes to be used in pages/posts and php function for templating purpose
*   Facade 2D slider is also provided, implemented using RoundAbout Pro
*   Lifetime Free Support and Updates
*   <a href=\"http://roundabout.phploaded.com/roundabout-3d/\" target=\"_blank\" title=\"Live demo\">Click here for live demo</a>

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.
== Frequently Asked Questions ==

How to use the different effects in plugin?

Find and goto \'RoundAbout Pro\' tab. Create a slider with basic info. After a slider is created, you will be taked to that slider\'s settings page to configure it. Once you are finished creating slider, you can create slides for it by clicking on \'Manage slides\' icon. Once you are finished creating slides, come back to main \'RoundAbout Pro\' tab and copy the shortcode for the slider that you want to use.

To display the slider in pages, posts or custom posts simply use the shortcode. It looks something like this

    [wprbt slider_id=\"4\"]  
      
    **OR**  
      
    <?php echo render_wprbt(4); ?>

if you are using in php inside theme files. This will create the slider with default \'lazySusan\' effect. We have more than 10 3D effects to choose from. Here is the list

1.  **lazySusan : **The default movement of a Roundabout
2.  **waterWheel : **A vertical version of the Lazy Susan shape. 
3.  **figure8 : **Items travel in a horizontal figure-8. 
4.  **square : **Items move in a flat, square shape. 
5.  **conveyorBeltLeft : **Items travel in a conveyor-belt angled towards the left.
6.  **conveyorBeltRight : **Items travel in a conveyor-belt angled towards the right.
7.  **diagonalRingLeft : **Similar to the Lazy Susan, but the left side is tilted up.
8.  **diagonalRingRight : **Similar to the Lazy Susan, but the right side is tilted up.
9.  **rollerCoaster : **Items move in rollercoaster style.
10. **tearDrop : **The front side is pointy, but the back side is rounded.
11. **theJuggler : **Sort of a helix-type path.
12. **goodbyeCruelWorld : **Towards the end of an animation that will put a moving item into focus, the item drops sharply off the screen. (Or, will jump quickly out of no where, depending on which direction you move.) 

To use another effect instead of default effect, we will add a new parameter to the shortcode. Shortcode will become

    [wprbt animation=\"waterWheel\" slider_id=\"4\"]

and php code will become

    <?php echo render_wprbt(4, \'waterWheel\'); ?>

please note that you can replace **waterWheel** with any of the effect names listed above. Hence same slider can be implemented in different styles by just changing the shortcode instead of creating a complete new slider. All other options can be set from the settings option.

To create any of the other sliders (example: facade) simply choose the desired option while creating the slider.
== Screenshots ==
1. displaying a normal roundabout slider in website front end.

2. admin panel area

3. managing slides in admin area

4. managing options in admin area

5. facade slider

== Changelog ==
no changes, initial version.