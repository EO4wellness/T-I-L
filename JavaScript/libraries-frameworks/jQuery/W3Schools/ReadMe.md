# [jQuery Tutorial](https://www.w3schools.com/jquery/default.asp)
[Example Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/libraries-frameworks/jQuery/code-snippets/click-to-hide-text.html)


## [Intro](https://www.w3schools.com/jquery/jquery_intro.asp)
* jQuery is a JavaScript Library.
* jQuery greatly simplifies JavaScript programming.
* jQuery is easy to learn.
* Should know HTML, CSS, JavaScript first 
* Still widely used (but some off-site news it is being phased out) 

### [jQuery Get Started](https://www.w3schools.com/jquery/jquery_get_started.asp)
How to add jQuery to your web pages?
1. Download the jQuery library from [jQuery.com](http://jquery.com/download/)
   - Production Version (minified and compressed) 
   - Development Version (uncompressed, readable core) 
```
The jQuery library is a single JavaScript file, and you reference it with the HTML <script> tag (notice that the <script> tag should be inside the <head> section):
<head>
<script src="jquery-3.5.1.min.js"></script>
</head>

Tip: Place the downloaded file in the same directory as the pages where you wish to use it.
```
2. Include jQuery from a CDN like Google 
If you don't want to download and host jQuery yourself, you can include it from a CDN (Content Delivery Network).

Google is an example of someone who host jQuery:
Google CDN:
```
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head> 
```

One big advantage of using the hosted jQuery from Google:

Many users already have downloaded jQuery from Google when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.

[Google CDN Code Snippet](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/libraries-frameworks/jQuery/code-snippets/jQuery-via-GoogleCDN.html)

### [jQuery Syntax](https://www.w3schools.com/jquery/jquery_syntax.asp)
* This is VERY basic! 
* With jQuery you select (query) HTML elements and perform "actions" on them.
* The jQuery syntax is tailor-made for selecting HTML elements and performing some action on the element(s).
* Basic syntax is: $(selector).action()

    A $ sign to define/access jQuery
    A (selector) to "query (or find)" HTML elements
    A jQuery action() to be performed on the element(s)

* Examples: 
```
$(this).hide() - hides the current element.

$("p").hide() - hides all <p> elements.

$(".test").hide() - hides all elements with class="test".

$("#test").hide() - hides the element with id="test".
```

* jQuery uses CSS syntax to select elements. 
[CSS Selectors Refresher](https://www.w3schools.com/css/default.asp)


The Document Ready Event
... resume study here 


## Effects 

## HTML 

## Taversing 

## AJAX 

## Misc

## Examples 

## References 


### [Test Your jQuery Knowledge:](https://www.w3schools.com/jquery/exercise_jq.asp?filename=exercise_jq_selectors1) 