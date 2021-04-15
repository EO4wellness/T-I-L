[SoloLearn CSS](https://www.sololearn.com/learning/1023)
* This course teaches how to control the style and layout of websites. 
* This course uses exercises and practice to learn.

# The Basics
* Welcome to the CSS course! 

## What is CSS
* CSS stands for Cascading Style Sheets.
- Cascading refers to the way CSS applies one style on top of another.
- Style Sheets control the look and feel of web documents.
* CSS and HTML work hand in hand:
- HTML sorts out the page structure.
- CSS defines how HTML elements are displayed.
* To understand CSS, you should already have a basic knowledge of HTML.
* If you want to study HTML, check out the free SoloLearn Learn HTML app.

QUIZ: 
What are style sheets used for?  _to control the look and feel of web documents_

* Why Use CSS?
* CSS allows you to apply specific styles to specific HTML elements.
* The main benefit of CSS is that it allows you to separate style from content.
* Using just HTML, all the styles and formatting are in the same place, 
* which becomes rather difficult to maintain as the page grows.
* All formatting can (and should) be removed from the HTML document and stored in a separate CSS file.

QUIZ: 
Why use CSS? _it allows for the separation of style and content_


## Inline Embedded External CSS
* Inline CSS
* Using an inline style is one of the ways to insert a style sheet. 
* With an inline style, a unique style is applied to a single element.
* In order to use an inline style, add the style attribute to the relevant tag.
* The example below shows how to create a paragraph with a gray background and white text: 
```
<p style="color:white; background-color:gray;">

    This is an example of inline styling. 

</p>
```
* The style attribute can contain any CSS property. 

QUIZ: Inline CSS 
Select the attribute that organizes the inline styling:  _style_

* Embedded/Internal CSS
* Internal styles are defined within the <style> element, inside the head section of an HTML page.
* For example, the following code styles all paragraphs:

```
<html>

   <head>

      <style>

      p {

         color:white;

         background-color:gray;

      }

      </style>

   </head>

   <body>

      <p>This is my first paragraph. </p>

      <p>This is my second paragraph. </p>

   </body>

</html>
```

* All paragraphs have a white font and a gray background:
* An internal style sheet may be used if one single page has a unique style.

Quiz: Where should the style tag be declared to organize an internal CSS? _head_

* External CSS
* With this method, all styling rules are contained in a single text file, 
* which is saved with the .css extension.
* This CSS file is then referenced in the HTML using the <link> tag. 
* The <link> element goes inside the head section.
* Here is an example:
* The HTML:

```
<head>

   <link rel="stylesheet" href="example.css">

</head>

<body>

   <p>This is my first paragraph.</p>

   <p>This is my second paragraph. </p>

   <p>This is my third paragraph. </p>

</body>
```

* The CSS: 

```
p {
    color:white;
    background-color:gray;
}
```

* [Course Template](https://www.sololearn.com/learning/1023/1079/1218/1)
* Both relative and absolute paths can be used to define the href for the CSS file. 
* In our example, the path is relative, as the CSS file is in the same directory as the HTML file.

QUIZ: External CSS: Fill in the blanks to call an external style sheet called 'test.css':
```
<head>
  <link rel="stylesheet" href="test.css">
</head>
```

## [CSS Rules and Selectors](https://www.sololearn.com/learning/1023/1080/1219/1)
* CSS Syntax 
* CSS is composed of style rules that the browser interprets 
* and then applies to the corresponding elements in your document.
* A style rule has three parts: selector, property, and value.
* For example, the headline color can be defined as: 
  ``` h1 { color: orange; } ```
* https://www.sololearn.com/learning/1023/1080/1219/1 

![example](https://api.sololearn.com/DownloadFile?id=2584)

H1: Selector 
color: Property 
orange: Value 

* The selector points to the HTML element you want to style. 
* The declaration block contains one or more declarations, separated by semicolons.
* Each declaration includes a property name and a value, separated by a colon.

QUIZ: CSS Syntax: In the rule, the "selector"  _selects which element to style_

* Type Selectors
* The most common and easy to understand selectors are TYPE SLECTORS
* This selector targets element types on the page. 
* Example:  https://www.sololearn.com/learning/1023/1080/1221/1 

```
p {
    color: red;
    font-size:130%;
} 

```
* A CSS declaration always ends with a semicolon, and declaration groups are surrounded by curly braces.

QUIZ: Rearrange the code to create a valid CSS Style rule: 
```
p {
  color: blue;
}
```

* id and class Selectors
* id selectors allow you to style an HTML element that has an id attribute, 
* regardless of their position in the document tree. 
* Here is an example of an id selector:
* HTML

```
<div id="intro">

   <p> This paragraph is in the intro section.</p>

</div>

<p> This paragraph is not in the intro section.</p>
```

* CSS  https://www.sololearn.com/learning/1023/1080/1222/1

```
#intro {
    color: white;
    background-color: gray;
}
```

* To select an element with a specific id, use a hash character, and then follow it with the id of the element.
* Class selectors work in a similar way. 
* The major difference is that IDs can only be applied once per page, 
* while classes can be used as many times on a page as needed.
* In the example below, both paragraphs having the class "first" will be affected by the CSS: 

HTML:

```
<div>

   <p class="first">This is a paragraph</p>

   <p> This is the second paragraph. </p>

</div>

<p class="first"> This is not in the intro section</p>

<p> The second paragraph is not in the intro section. </p>
```

CSS: 
```
.first {font-size: 200%;}
```

https://www.sololearn.com/learning/1023/1080/1222/1

* To select elements with a specific class, 
* use a period character, followed by the name of the class.
* Do NOT start a class or id name with a number!

QUIZ: Fill in the blanks to give yellow background color to the element with id="intro" and black text color to the class="mytext";

```
#intro {
  background-color: yellow; 
}
.mytext {
  color: black; 
}

```

Descendant Selectors


These selectors are used to select elements that are descendants of another element. When selecting levels, you can select as many levels deep as you need to.

For example, to target only <em> elements in the first paragraph of the "intro" section:

The HTML:
```
<div id="intro">

   <p class="first">This is a <em> paragraph.</em></p>

   <p> This is the second paragraph. </p>

</div>

<p class="first"> This is not in the intro section.</p>

<p> The second paragraph is not in the intro section. </p>
```

The CSS:
```
#intro .first em {
    color: pink; 
    background-color:gray;
}
```
https://www.sololearn.com/learning/1023/1080/1645/1

* The descendant selector matches all elements that are descendants of a specified element.

Quiz: Descendant Selectors
Drag and drop from the options below to create a style rule for all paragraphs belonging to the element with id="test":

```
# test p {
  color: red; 
}
```


## [CSS Comments](https://www.sololearn.com/learning/1023/1081/1224/1) 
* Comments are used to explain your code, and may help you when you edit the source code later. Comments are ignored by browsers. 
* A CSS comment look like this:

   ```
   /* Comment goes here */
   ```
   
* CSS Example:  https://www.sololearn.com/learning/1023/1081/1224/1  
```
p { 
    color: green; 
    /* This is a comment */
    font-size: 150%;
}
```
* The comment does not appear in the browser:
* Comments can also span multiple lines.


## style Cascade and Inheritance 
## Module 1 Quiz


# Working with Text
# Properties 
# Positioining and Layout
# CSS3 Basics
# transitions and Transformas
# CSS Filters 
# Certification
