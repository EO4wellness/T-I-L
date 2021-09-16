# [jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/#jquery)
* 18 study units 
* jQuery is one of the most widely used JavaScript libraries in the world.
* In 2006 when it was released, all major browsers handled JavaScript slightly differently. 
* jQuery simplified the process of writing client-side JavaScript, and also ensured that your code worked the same way in all browsers.
* In this course, you'll learn how to use jQuery to select, remove, clone, and modify different elements on the page.

## 01 [Learn How Script Tags and Document Ready Work](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/learn-how-script-tags-and-document-ready-work)

Now we're ready to learn jQuery, the most popular JavaScript tool of all time.

Before we can start using jQuery, we need to add some things to our HTML.

First, add a script element at the top of your page. Be sure to close it on the following line.

Your browser will run any JavaScript inside a script element, including jQuery.

Inside your script element, add this code: $(document).ready(function() { to your script. Then close it on the following line (still inside your script element) with: });

We'll learn more about functions later. The important thing to know is that code you put inside this function will run as soon as your browser has loaded your page.

This is important because without your document ready function, your code may run before your HTML is rendered, which would cause bugs.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/01_learn-how-script-tags-and-document-ready-work.js)

As I've never seen code like this, I had a bit of trouble getting the syntax correct and needed to search for it and look it up until I resolved the various error messages


## 02 [Target HTML Elements with Selectors Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/target-html-elements-with-selectors-using-jquery)



Now we have a document ready function.

Now let's write our first jQuery statement. All jQuery functions start with a $, usually referred to as a dollar sign operator, or as bling.

jQuery often selects an HTML element with a selector, then does something to that element.

For example, let's make all of your button elements bounce. Just add this code inside your document ready function:
```
$("button").addClass("animated bounce");
```
Note that we've already included both the jQuery library and the Animate.css library in the background so that you can use them in the editor. So you are using jQuery to apply the Animate.css bounce class to your button elements.


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/02_target-html-elements-with-selectors-using-jquery.js)

## 03 [Target Elements by Class Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/target-elements-by-class-using-jquery)


You see how we made all of your button elements bounce? We selected them with $("button"), then we added some CSS classes to them with .addClass("animated bounce");.

You just used jQuery's .addClass() function, which allows you to add classes to elements.

First, let's target your div elements with the class well by using the $(".well") selector.

Note that, just like with CSS declarations, you type a . before the class's name.

Then use jQuery's .addClass() function to add the classes animated and shake.

For example, you could make all the elements with the class text-primary shake by adding the following to your document ready function:
```
$(".text-primary").addClass("animated shake");
```

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/03_arget-elements-by-class-using-jquery.js)

## 04 [Target Elements by id Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/target-elements-by-class-using-jquery)

You see how we made all of your button elements bounce? We selected them with $("button"), then we added some CSS classes to them with .addClass("animated bounce");.

You just used jQuery's .addClass() function, which allows you to add classes to elements.

First, let's target your div elements with the class well by using the $(".well") selector.

Note that, just like with CSS declarations, you type a . before the class's name.

Then use jQuery's .addClass() function to add the classes animated and shake.

For example, you could make all the elements with the class text-primary shake by adding the following to your document ready function:
```
$(".text-primary").addClass("animated shake");
```

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/04_target-elements-by-id-using-jquery.js)


## 05 [Delete Your jQuery Functions](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/delete-your-jquery-functions)


These animations were cool at first, but now they're getting kind of distracting.

Delete all three of these jQuery functions from your document ready function, but leave your document ready function itself intact.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/05_delete-your-jquery-functions.js)


## 06 [Target the Same Element with Multiple jQuery Selectors](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/target-the-same-element-with-multiple-jquery-selectors)


Now you know three ways of targeting elements: by type: $("button"), by class: $(".btn"), and by id $("#target1").

Although it is possible to add multiple classes in a single .addClass() call, let's add them to the same element in three separate ways.

Using .addClass(), add only one class at a time to the same element, three different ways:

Add the animated class to all elements with type button.

Add the shake class to all the buttons with class .btn.

Add the btn-primary class to the button with id #target1.

Note: You should only be targeting one element and adding only one class at a time. Altogether, your three individual selectors will end up adding the three classes shake, animated, and btn-primary to #target1.


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/06_target-the-same-element-with-multiple-jquery-selectors.js.js)

## 07 [Remove Classes from an Element with jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/remove-classes-from-an-element-with-jquery)


In the same way you can add classes to an element with jQuery's addClass() function, you can remove them with jQuery's removeClass() function.

Here's how you would do this for a specific button:
```
$("#target2").removeClass("btn-default");
```
Let's remove the btn-default class from all of our button elements.


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/07_remove-classes-from-an-element-with-jquery.js)

## 08 [Change the CSS of an Element Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/change-the-css-of-an-element-using-jquery)

We can also change the CSS of an HTML element directly with jQuery.

jQuery has a function called .css() that allows you to change the CSS of an element.

Here's how we would change its color to blue:

$("#target1").css("color", "blue");

This is slightly different from a normal CSS declaration, because the CSS property and its value are in quotes, and separated with a comma instead of a colon.

Delete your jQuery selectors, leaving an empty document ready function.

Select target1 and change its color to red.


[My Code]()

My solution for this unit doesn't pass, though it appears to be correct. 
```
<script>
  $(document).ready(function() {
    $("#target1").css("color", "red");

  });
</script>
```

## 09 [Disable an Element Using jQuery]()



  
[My Code]()

## 10 [Change Text Inside an Element Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/change-text-inside-an-element-using-jquery)


Using jQuery, you can change the text between the start and end tags of an element. You can even change HTML markup.

jQuery has a function called .html() that lets you add HTML tags and text within an element. Any content previously within the element will be completely replaced with the content you provide using this function.

Here's how you would rewrite and emphasize the text of our heading:

$("h3").html("<em>jQuery Playground</em>");

jQuery also has a similar function called .text() that only alters text without adding tags. In other words, this function will not evaluate any HTML tags passed to it, but will instead treat it as the text you want to replace the existing content with.

Change the button with id target4 by emphasizing its text.

View our news article for <em> to learn the difference between <i> and <em> and their uses.

Note that while the <i> tag has traditionally been used to emphasize text, it has since been adopted for use as a tag for icons. The <em> tag is now widely accepted as the tag for emphasis. Either will work for this challenge.
  
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/10_change-text-inside-an-element-using-jquery.js)

## 11 [Remove an Element Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/remove-an-element-using-jquery)

[My Code]()

## 12 [Use appendTo to Move Elements with jQuery]()

[My Code]()

## 13 [Clone an Element Using jQuery]()

[My Code]()

## 14 [Target the Parent of an Element Using jQuery]()

[My Code]()

## 15 [Target the Children of an Element Using jQuery]()

[My Code]()

## 16 [Target a Specific Child of an Element Using jQuery]()

[My Code]()

## 17 [Target Even Elements Using jQuery]()

[My Code]()

## 18 [Use jQuery to Modify the Entire Page]()

[My Code]()
