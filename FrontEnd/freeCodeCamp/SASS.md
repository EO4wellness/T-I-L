# [SASS](https://www.freecodecamp.org/learn/front-end-development-libraries/#sass)
* Not to be confused with SAAS
* Sass, or "Syntactically Awesome StyleSheets", is a language extension of CSS. 
* It adds features that aren't available in basic CSS, which make it easier for you to simplify and maintain the style sheets for your projects.
* In this Sass course, you'll learn how to store data in variables, nest CSS, create reusable styles with mixins, add logic and loops to your styles, and more.


## 01 [Store Data with Sass Variables]()

One feature of Sass that's different than CSS is it uses variables. They are declared and set to store data, similar to JavaScript.

In JavaScript, variables are defined using the ```let``` and ```const``` keywords. In Sass, variables start with a ```$``` followed by the variable name.

Here are a couple examples:
```
$main-fonts: Arial, sans-serif;
$headings-color: green;
```
And to use the variables:
```
h1 {
  font-family: $main-fonts;
  color: $headings-color;
}
```
One example where variables are useful is when a number of elements need to be the same color. If that color is changed, the only place to edit the code is the variable value.

Create a variable $text-color and set it to red. Then change the value of the color property for the .blog-post and h2 to the $text-color variable.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/SASS/01_store-data-with-sass-variables.html)


## 02 [Nest CSS with Sass](https://www.freecodecamp.org/learn/front-end-development-libraries/sass/nest-css-with-sass)

Sass allows nesting of CSS rules, which is a useful way of organizing a style sheet.

Normally, each element is targeted on a different line to style it, like so:
```
nav {
  background-color: red;
}

nav ul {
  list-style: none;
}

nav ul li {
  display: inline-block;
}
```
For a large project, the CSS file will have many lines and rules. This is where nesting can help organize your code by placing child style rules within the respective parent elements:
```
nav {
  background-color: red;

  ul {
    list-style: none;

    li {
      display: inline-block;
    }
  }
}
```
Use the nesting technique shown above to re-organize the CSS rules for both children of .blog-post element. For testing purposes, the h1 should come before the p element.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/SASS/02_nest-css-with-sass.html)

## 03 [Create Reusable CSS with Mixins](https://www.freecodecamp.org/learn/front-end-development-libraries/sass/create-reusable-css-with-mixins)

In Sass, a mixin is a group of CSS declarations that can be reused throughout the style sheet.

Newer CSS features take time before they are fully adopted and ready to use in all browsers. As features are added to browsers, CSS rules using them may need vendor prefixes. Consider box-shadow:
```
div {
  -webkit-box-shadow: 0px 0px 4px #fff;
  -moz-box-shadow: 0px 0px 4px #fff;
  -ms-box-shadow: 0px 0px 4px #fff;
  box-shadow: 0px 0px 4px #fff;
}
```
It's a lot of typing to re-write this rule for all the elements that have a box-shadow, or to change each value to test different effects. Mixins are like functions for CSS. Here is how to write one:
```
@mixin box-shadow($x, $y, $blur, $c){ 
  -webkit-box-shadow: $x $y $blur $c;
  -moz-box-shadow: $x $y $blur $c;
  -ms-box-shadow: $x $y $blur $c;
  box-shadow: $x $y $blur $c;
}
```
The definition starts with @mixin followed by a custom name. The parameters (the $x, $y, $blur, and $c in the example above) are optional. Now any time a box-shadow rule is needed, only a single line calling the mixin replaces having to type all the vendor prefixes. A mixin is called with the @include directive:
```
div {
  @include box-shadow(0px, 0px, 4px, #fff);
}
```
Write a mixin for border-radius and give it a $radius parameter. It should use all the vendor prefixes from the example. Then use the border-radius mixin to give the #awesome element a border radius of 15px.


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/SASS/03_create-reusable-css-with-mixins.html)

## 04 [Use @if and @else to Add Logic To Your Styles](https://www.freecodecamp.org/learn/front-end-development-libraries/sass/use-if-and-else-to-add-logic-to-your-styles)
Use @if and @else to Add Logic To Your Styles

The ```@if``` directive in Sass is useful to test for a specific case - it works just like the ```if``` statement in JavaScript.
```
@mixin make-bold($bool) {
  @if $bool == true {
    font-weight: bold;
  }
}
```
And just like in JavaScript, ```@else if and @else``` test for more conditions:
```
@mixin text-effect($val) {
  @if $val == danger {
    color: red;
  }
  @else if $val == alert {
    color: yellow;
  }
  @else if $val == success {
    color: green;
  }
  @else {
    color: black;
  }
}
```
Create a mixin called border-stroke that takes a parameter $val. The mixin should check for the following conditions using @if, @else if, and @else:
```
light - 1px solid black
medium - 3px solid black
heavy - 6px solid black
```
If $val is not light, medium, or heavy, the border should be set to none.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/SASS/04_use-if-and-else-to-add-logic-to-your-styles.html)

## 05 [Use @for to Create a Sass Loop]()

[My Code]()

## 06 [Use @each to Map Over Items in a List]()


[My Code]()

## 07 [Apply a Style Until a Condition is Met with @while]()

[My Code]()

## 08 [Split Your Styles into Smaller Chunks with Partials]()

[My Code]()


## 09 [Extend One Set of CSS Styles to Another Element]()


[My Code]()
