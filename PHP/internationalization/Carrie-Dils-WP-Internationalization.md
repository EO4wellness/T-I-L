# LinkedIn Learning 
* Topic: How to Internationalize within WordPress 
* Ongoing/evolving process
* Polyglot 
* Course Instructor: Carrie Dils 
* [Course URL](https://www.linkedin.com/learning/wordpress-internationalization/best-practices-for-internationalization)


## Best Practices:
* Use proper English 
* Not everything translates well (idioms) 
* User translation functions with CONTEXT
* Do not use abgreviations
* Do not use acronyms 
* Do not use slang
* Do not use texting language 
* Use complete sentences 
* Do not use long strings. 
* Do not concatenate strings. 
* Use placeholders with argument swapping to keep the sentence together. 
* Do not hardcode:
  - dates 
  - times
  - currency 

### [Localization/Internationaliztion](https://en.wikipedia.org/wiki/Internationalization_and_localization)
- I have to note: 
- on the very slide the instructor outlines the above best practices
- she has the slide labeled "i18n" 
- googling "i18n" I find it is a common abbreviation for internationalization 
- [What is i18n?](https://lingoport.com/what-is-i18n/)
- [W3Schools](https://www.w3.org/International/questions/qa-i18n)
- [Building JavaScript with Internationalization I18N in Mind](https://medium.com/adobetech/building-in-javascript-with-internationalization-i18n-in-mind-815b6bf2c25e)
- [Angular I18N](https://angular.io/guide/i18n)
- [AngluarJS i18n I10n](https://docs.angularjs.org/guide/i18n)
- [Mozilla Dev](https://developer.mozilla.org/en-US/docs/Mozilla/Add-ons/WebExtensions/API/i18n)
- [Ruby on the Rails](https://guides.rubyonrails.org/i18n.html)
- [Phrase Article](https://phrase.com/blog/posts/i18n-a-simple-definition/)
- [stackOverFlow](https://stackoverflow.com/questions/6953528/best-way-to-internationalize-simple-php-website)
- [PHP](http://php-flp.sourceforge.net/getting_started_english.htm)
- [WordPress](https://wordpress.org/search/i18n)

## Text Domains
* to make your text translatable
* you need a unique text domain 
* it should refer to your specific theme or plugin 
* this helps translators use automated tools 
* Submitting to the WordPress repository?
  - do not use underscores 
``` my_text_domain ```
  - do not use special characters 
``` !my!text$domain ```
  - use dashes to separate words 
``` my-text-domain ```
  - the folder name of your plugin or theme must match your text domain 
* for Wordpress:
   1. Create your plugin folder
   2. Use the same name as the folder for your php file (this is your text domain)
   3. add the following to the text domain header:
      ```- plugin name 
         - author 
         - text domain 

        Example:
        
        <?php
        /* 
        * Plugin Name: My Plugin
        * Author: First Name Last Name 
        * Text Domain: my-plugin
        * /
      ```
   4. [load them to Wordpress reponsitory](https://developer.wordpress.org/plugins/)
      ```
      load_plugin_textdomain( $domain, $abs_rel_path, $plugin_rel_path )
      load_theme_textdomain( $domain, $path ) 
      load_child_theme_textdomain( $domain, $path ) 
      ```
* Example of a plugin being loaded into WP
```
        <?php
        /* 
        * Plugin Name: My Plugin
        * Author: First Name Last Name 
        * Text Domain: my-plugin
        * /
        
        $path= dirname( plugin_basename(__FILE__)), '/languages';
        load_plugin_textdomain( 'my-plugin, false, $path ); 
        
        // Echo translated string
        _e( 'Hello World!', 'my-plugin' );
        
        // Echo translated string with context 
        _ex( 'Lead', 'a leash for a dog', 'my-plugin' ); 

```
* [Translating WordPress Plugins and Themes: Do Not Get Clever](https://markjaquith.wordpress.com/2011/10/06/translating-wordpress-plugins-and-themes-dont-get-clever/)
* Use a string, not a variable for your Text Domain 
* [Automating WordPress themes i18n](https://poststatus.com/automating-i18n-wordpress-themes/)
* [WP Handbook-Automation](https://developer.wordpress.org/block-editor/how-to-guides/internationalization/)
* [WP I18n Automation](https://codex.wordpress.org/I18n_for_WordPress_Developers)

## Generate POT File 
* Portable Objects Template file (POT) 
* Generate a POT file from the WP admin page for plugins/themes in WP Repo
* Download and use WP i18n tools 
* (this requires a gettext package to be installed locally)
* Use Grunt or Gulp translation package 
* Poedit (free and pro versions) 
* Launch Poedit
  - file new 
  - English 
  - catalog properties menu
  - save file first (languages folder of plugin)
    naming: text-domain-local (en for english, etc)  
  - catalog properties
  - check source location
  - aim at the correct folder 
  - check sources keywords 
  - use __ (double underscore) or other functions we are using 
  - others to add such as _e _ex etc 
  - save the changes 
  - change the file name from .po to .pot and remove the local (en for english)
  - click OKAY for the file extension change warning 
  - delete the old MO file 
  - we are going to regenerate it now we've changed the file name
  - this time in poedit select NEW from a POT file 
  - select the file 
  - select the language 
  - follow naming convention (my text domain + EN or other language) 
  - save it 
  - it generates two files (po and mo files) 
  - to translate into other languages, besides English, 
  - we need to consult the [LOCALE codes in WP](https://translate.wordpress.org/)


## Automating Tasks: Grunt Gulp 
* research available packages on NPM
* grunt-wp-i18n
* gulp-wp-pot 

## Reading 
* RTL (right to left)
* LTR (left to right) 
* this distinction is used to make your content diversely available 
* do this thru a CSS style sheet 
  - style.css 
```
    float: right; 
    margin-left: 1em; 
    text-align: left; 
```
  - style-rtl.css 
```
    float: left; 
    margin-left: 0; 
    margin-right: 1em;
    text-align: right; 
```
* grunt or gulp has autoformatted RTL style sheets: rtlcss 
* you can even set a task to triggers this 

## Translation Opportunities 
* [contribute to WP](https://make.wordpress.org/polyglots/handbook/translating/glotpress-translate-wordpress-org/)
* you need to speak 2 languages 
* you need a wordpress account
* get started 
* glotpress is their collab tool 
* [Translator Handbook](https://translate.wordpress.org/)
* [How to use GlotPress](https://remkus.devries.frl/how-to-use-glotpress-for-your-translations/)

[Course Code Snippets](https://github.com/EO4wellness/T-I-L/blob/main/PHP/internationalization/WordPress_internationalization.php)

