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


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/08_change-the-css-of-an-element-using-jquery.js)

My solution for this unit doesn't pass, though it appears to be correct. 
```
<script>
  $(document).ready(function() {
    $("#target1").css("color", "red");

  });
</script>
```

Post about this problem.  Also encountered the exact same problem below with changing the color on the parent and child units below.  This is the solution.  Once I turned off the Dark browser extension, the code passed the test(s). 

## 09 [Disable an Element Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/disable-an-element-using-jquery)

You can also change the non-CSS properties of HTML elements with jQuery. For example, you can disable buttons.

When you disable a button, it will become grayed-out and can no longer be clicked.

jQuery has a function called .prop() that allows you to adjust the properties of elements.

Here's how you would disable all buttons:

$("button").prop("disabled", true);

Disable only the target1 button.

  
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/09_disable-an-element-using-jquery.js)

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

Now let's remove an HTML element from your page using jQuery.

jQuery has a function called .remove() that will remove an HTML element entirely

Remove the #target4 element from the page by using the .remove() function.
  
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/11_remove-an-element-using-jquery.js)

## 12 [Use appendTo to Move Elements with jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/use-appendto-to-move-elements-with-jquery)
  

Now let's try moving elements from one div to another.

jQuery has a function called appendTo() that allows you to select HTML elements and append them to another element.

For example, if we wanted to move target4 from our right well to our left well, we would use:
```
$("#target4").appendTo("#left-well");
```
Move your target2 element from your left-well to your right-well.

  
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/12_use-appendto-to-move-elements-with-jquery.js)

## 13 [Clone an Element Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/clone-an-element-using-jquery)

In addition to moving elements, you can also copy them from one place to another.

jQuery has a function called clone() that makes a copy of an element.

For example, if we wanted to copy target2 from our left-well to our right-well, we would use:
```
$("#target2").clone().appendTo("#right-well");
```
Did you notice this involves sticking two jQuery functions together? This is called function chaining and it's a convenient way to get things done with jQuery.

Clone your target5 element and append it to your left-well.
 
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/13_clone-an-element-using-jquery.js)

## 14 [Target the Parent of an Element Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/target-the-parent-of-an-element-using-jquery)

Every HTML element has a parent element from which it inherits properties.

For example, your jQuery Playground h3 element has the parent element of <div class="container-fluid">, which itself has the parent body.

jQuery has a function called parent() that allows you to access the parent of whichever element you've selected.

Here's an example of how you would use the parent() function if you wanted to give the parent element of the left-well element a background color of blue:
```
$("#left-well").parent().css("background-color", "blue")
```
Give the parent of the #target1 element a background-color of red.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/14_target-the-parent-of-an-element-using-jquery.js)

## 15 [Target the Children of an Element Using jQuery]()
Target the Children of an Element Using jQueryPassed

When HTML elements are placed one level below another they are called children of that element. For example, the button elements in this challenge with the text #target1, #target2, and #target3 are all children of the <div class="well" id="left-well"> element.

jQuery has a function called children() that allows you to access the children of whichever element you've selected.

Here's an example of how you would use the children() function to give the children of your left-well element the color blue:
```
$("#left-well").children().css("color", "blue")
```
Give all the children of your right-well element the color orange.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/15_target-the-children-of-an-element-using-jquery.js)

## 16 [Target a Specific Child of an Element Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/target-a-specific-child-of-an-element-using-jquery)

You've seen why id attributes are so convenient for targeting with jQuery selectors. But you won't always have such neat ids to work with.

Fortunately, jQuery has some other tricks for targeting the right elements.

jQuery uses CSS Selectors to target elements. The target:nth-child(n) CSS selector allows you to select all the nth elements with the target class or element type.

Here's how you would give the third element in each well the bounce class:
```
$(".target:nth-child(3)").addClass("animated bounce");
```
Make the second child in each of your well elements bounce. You must select the elements' children with the target class.

  
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/16_target-a-specific-child-of-an-element-using-jquery.js)

## 17 [Target Even Elements Using jQuery](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/target-even-elements-using-jquery)


You can also target elements based on their positions using :odd or :even selectors.

Note that jQuery is zero-indexed which means the first element in a selection has a position of 0. This can be a little confusing as, counter-intuitively, :odd selects the second element (position 1), fourth element (position 3), and so on.

Here's how you would target all the odd elements with class target and give them classes:
```
$(".target:odd").addClass("animated shake");
```
Try selecting all the even target elements and giving them the classes of animated and shake. Remember that even refers to the position of elements with a zero-based system in mind.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/17_target-even-elements-using-jquery.js)

## 18 [Use jQuery to Modify the Entire Page](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/use-jquery-to-modify-the-entire-page)


We're done playing with our jQuery playground. Let's tear it down!

jQuery can target the body element as well.

Here's how we would make the entire body fade out: $("body").addClass("animated fadeOut");

But let's do something more dramatic. Add the classes animated and hinge to your body element.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/18_use-jquery-to-modify-the-entire-page.js)
  
Finished Study of jQuery units: 2021-09-16
  
![finito](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/Images/2021-09-16-finished-jQueryUnits.jpg)
