/* The information here are notes from the 
# WordPress:Internationalization LinkedIn course
# https://www.linkedin.com/learning/wordpress-internationalization/translate-strings
#
# To achieve this means to an end all you need to change as a developer are your strings
# The big picture of why is so that it can be translated and localized by machine language
# The other option requires translators (human involvement)
#
# You can find the WordPress documentaion about this code at: https://codex.wordpress.org/L10n  
*/

<?php
  $greeting = ('hello world'); 
  echo $greeting;
// this is normal code. it outputs: hello world
?>




<?php
// this is WP localized code.
  $greeting = __('hello world', 'my-text-domain'); 
  echo $greeting;
// this code outputs: hello world, and preps this string for internationalization
?>




<?php
// this is WP localized code.
  $greeting = _e('hello world', 'my-text-domain'); 
// this code example outputs hello world, preps it, and shortens code line length
?>


/* Likewise, we can use this same concept 
# while escaping HTML
# This example includes when you have a link and some text and you want the text to display
# and function as a link, without the HTML of the link displaying
# i.e. you aren't showing the code
# when it comes to internationalization the HTML (link) is NOT translated 
# the HTML link text IS translated
# below are the methods to achieve this effect:  
*/

<?php
// this is normal code. it outputs: Click Here (with a functioning link to google) 
  $html = esc_html ( 'a href="https://google.com/">Click Here</a>' );
  echo $html; 
?>

<?php
// this is WP localized-friendly code.  
  $html = esc_html__( 'a href="https://google.com/">Click Here</a>' );
  echo $html; 
// this code outputs: Click Here (w/functioning link) and preps the code for internationalization
?>

<?php
// this is normal code. it outputs: Click Here (with a functioning link to google) 
  $html = esc_html_e( 'a href="https://google.com/">Click Here</a>' );
// this code outputs: Click Here (w/functioning link), preps it, and shortens code line length
?>

/* Placeholders literally leave an available spot to insert some dynamic data at run time 
# typically placeholders are used when the code has variables within a string 
# Example: this could be someone's name.  
# If you had some data you do want translated, but not the name, 
# then you'd use a placeholder for the name
*/

<?php
// Text "hello" needs to be translatable but the name varriable shouldn't be
  $user = 'Carrie';
  $greeting = 'Hello $user!';
?>

/* In PHP placeholders are implemented using  a combo 
# of these functions: 
# printf() which outputs a formatted string 
# or 
# sprint() which returns a formatted string
# both of these functions are used with a type specifier 
#
# documentation for each from w3schools can be found: 
# https://www.w3schools.com/php/func_string_printf.asp
# https://www.w3schools.com/php/func_string_sprintf.asp
# 
# common ones include: 
# for integers use:  %d
# for strings use: %s 
*/

<?php
// time for an example of this code concept in action 
  $user = 'Carrie';
  $greeting = sprintf('Hello %s!', $user);
//we pass in variable 'user' to string placeholder %s
?>

/* However the code above isn't ready for translation yet
# the code doesn't have any of the formatting for localization
# below, we've finished that process combinint these concepts
*/

<?php
// variable and translation ready  
  $user = 'Carrie';
  $greeting = sprintf(__('Hello %s!', 'my-text-domain'), $user);
?>


/* This works well
# However, this is just a SINGLE placeholder
# Sometimes, we need to use more than one.  
# following this same example, let's assume we want to output 
# Hello (username) you are (some particular status) 
# Hello Carrie! You're employee 99. 
*/

<?php
// set up variables 
  $user = 'Carrie';
  $employee_number = 99;
// pass variables into translation-friendly sprint function 
  $greeting = sprintf(__( 'Hello %s! You are employee %d.', 'my-text-domain' ), $user , $employee_number );
?>


/* From language to language word ordering in sentence structure varies 
* the translator therefore often has to change the sentence structure
# this is solved via ARGUMENT SWAPPING
# argument swapping lets the translator determine which argument is placed where 
#
# How does this work?  For our example we will start with this sentence: 
# I present you with THIS and THAT.
# if the translator needed it to read:
# I present you with THAT and THIS
# 
# we use the same code, as above, but add a $ and a number
# the number indicates the position 
*/

<?php
// variables 
  $arg1 = 'this';
  $arg2 = 'that';

  $format = 'I present you with %2$s and %1$s';
  sprint(__( $format, 'my-text-domain' ), $arg1, $arg2 ); 
?>

/* The case of Plurals 
# when the number involved increses some words change spelling for plurals 
# our code needs to take this into account
# we do this using the _n() function 
# WordPress Codex documentation can be found here:
# https://developer.wordpress.org/reference/functions/_n/ 
*/

<?php
// declaring the varriable for the total number of comments (could be any number)
  $comment_number = 1;

// writing the _n() function 
  _n( 'There is %d comment', 'There are %d comments', $comment_number, 'my-text-domain' );

// making this translatable  for localization 
$string = sprint( _n( 'There is %d comment', 'There are %d comments', $comment_number, 'my-text-domain' ), $comment_number );
?>

/* Context
# as we know, context often changes everything
# example the word "live" has two prouncuations and two meanings 
# short I sound; such as: I live at this address. 
# long I sound; such as: join us for our live-stream . . . 
#
# to cope with context we use the _x() function 
# _x() is similar to the double underscore __() function
# however it accepts an additional context parameter so context can be added
#
# Sister Functions (similar but add functionality) 
# _x() which returns the string 
# _ex() which echos the string 
# _nx() hybrid supports both plurals and context 
#
# When uncertain error on the side of providing TOO much information
# translators need it
#
*/

<?php
//example word: lead whose translation depends on context 
  $string = _x ( 'Lead', 'a leash for a dog', 'my-text-domain' );
  $string = _x ( 'Lead', 'a metal', 'my-text-domain' );
  $string = _x ( 'Lead', 'a verb meaning to innfluence or guide others', 'my-text-domain' );
?>

/* JavaScriipt
# Currently, WordPress only supports localization in PHP
# it is not currently available in javascript 
# however wordpress has this slated for a future update release 
# link to follow its progress: https://core.trac.wordpress.org/ 
#
# despite this there is a WordPress method to translate now
# wp_localize_script()
# https://developer.wordpress.org/reference/functions/wp_localize_script/
# if you have a registered script you can use it 
# this function takes 3 parameters: 
# 1) Handel (string; same as when you registered your script) 
# 2) Name (string; name of the variable which contains the data; unique)
# 3) Data (array; data you will pass in) 
# 
# Example: given this very simple script, how would we prepare it for translation?
#
# my-simple-script.js (example) 
# alert ( 'Hello world! ');
# 
# before you can use this script in your PHP you need to register it 
# reference how to register JavaScript in PHP in WordPress codex 
# https://codex.wordpress.org/Using_Javascript
# https://developer.wordpress.org/reference/functions/wp_enqueue_script/ 
#
# format and parameters:
# wp_enqueue_script( string $handle, string $src = '', 
# string[] $deps = array(), string|bool|null $ver = false, 
# bool $in_footer = false )
#
*/

<?php

wp_enqueue_script( 'my-simple-script', 'my-simple-script.js' );

// wp_localize_script ($handle, $name, $data );

wp_localize_script ( 'my-simple-script', 'my_vars' , 
  array(
    'message1' => __( 'Hello world!', 'my-text-domain' ),
    'message2' => __( 'Hello Mars!', 'my-text-domain' ),
  )
);
?>

/* text of the my-simple-script.js file 
*
* alert( 'Hello World! ');
*
* alert( my_vas.message1 );
*
* alert( my_vas.message2 );
*/


