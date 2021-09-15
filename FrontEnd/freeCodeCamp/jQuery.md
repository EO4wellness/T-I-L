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


## o5 [Delete Your jQuery Functions](https://www.freecodecamp.org/learn/front-end-development-libraries/jquery/delete-your-jquery-functions)


These animations were cool at first, but now they're getting kind of distracting.

Delete all three of these jQuery functions from your document ready function, but leave your document ready function itself intact.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/jQuery/05_delete-your-jquery-functions.js)


## 06 [Target the Same Element with Multiple jQuery Selectors]()

[My Code]()

## 07 [Remove Classes from an Element with jQuery]()

[My Code]()

## 08 [Change the CSS of an Element Using jQuery]()

[My Code]()

## 09 [Disable an Element Using jQuery]()

[My Code]()

## 10 [Change Text Inside an Element Using jQuery]()

[My Code]()

## 11 [Remove an Element Using jQuery]()

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
