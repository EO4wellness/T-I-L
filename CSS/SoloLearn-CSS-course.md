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
* Cascade 
* The final appearance of a web page is a result of different styling rules.
* There are three main sources of style information that form a cascade:
   - The stylesheet created by the AUTHOR of the PAGE
   - The Browsers Default Styles 
   - Styles specified by the USER
* CSS is an acronym for Cascading Style Sheets. 

QUIZ: Cascade-Which three different sources are responsible for the styles you see on the web page?
- the styles provided by Google (while it is possible to import fonts, and such from Google, other than on Google.com and their own URLs, Google has nothing to do with the display of any one elses website(s)--they are just a directory to look up those website addresses)
- the stylesheet created by the author of the page (this is true, or in the case of wordpress it can be the content author is using a theme or other css rules created by a 3rd party--the use of author here means the person who wrote the code, not the person, in the traditional sense, authored the content on the page)
- the user customized style selections, if any (default or by choice, every browser has customization settings. also kindle is notorius for this--kindle users can set their own font so naturally any content displayed on a kindle is going to look different than the same content displaying on a non-kindle device )
- the default style of the browser its self.  (true) 

* Inheritance 
* Inheritance refers to the way properties flow through the page.
* A child element will usually take on the characteristics of a parent element
* Unless it is specifically, otherwise, defined
* Example:
```
<html>
   <head>
      <style>
      body {
         color: green;
         font-family: Arial;
      }
     </style>
   </head>
   <body>       
      <p>
      This is a text inside the paragraph. 
      </p>
   </body>
</html>
```
* SInce the paragraph tag (child element)
* is inside the body tag (parent element)
* it takes on any styles assigned to the body tag 

Quiz: Inheritance
What color does the paragraph have?

<style>
   body {color: green; }
   .mydiv {color: red; }
</style>
<body>
   <div class="mydiv">
      <p>Some text</p>
   </div>
</body>

Choices: black, read, or green.  My answer: Red.


## Module 1 Quiz
1. From the three types of styling, which one is the most useful in terms of website optimization?
  -External
  -Internal
  -Inline 
This question tests student understanding of the terms.  Inline CSS means you've added some CSS customization to a specific tag on one specific HTML page (such as modifying one paragraph <p> tag on just one page). Internal CSS means you've written your CSS styling in the <style> tag at the header of one specific HTML page. External CSS means you are linking to a CSS file not on the actual webpage. Inline CSS is best used to make a one-time exception to the over-all External CSS style.  Internal is best used to add or modify the External CSS on a specific article or series (perhaps you have an event color or theme you are using just for that event and everything related to it--such as customizing the registration forms to match the event themes)  The majority of the CSS is within the External CSS style sheet you call into a specific HTML page. An example of this is found within the "theme" level in Word Press.  The theme contains all of the various CSS, Externally, and it is called into any specific post or page you are writing.  

2. What is "Style" when creating an internal CSS?
Choices: tag, property, value.  My answer: Tag

3. The style definition rule consists of a selector, property, and: 
my answer: value.

4. Fill in the blank to apply white color to the paragraph:
```
p {
  color: #FFF;
}
```

# Working with Text ( 16 study topics)
## [Font-Family](https://www.sololearn.com/learning/1023/1084/1231/1)



## [Font-Size](#)
## [Font-Style](#)
## [Font-Weight](#)
## [Font-Variant](#)
## [Color](#)
## [Aligning Text Horizontally](#)
## [aligning Text Horizontally](#)
## [aligning Text vertically](#)
## [Text-Decoration](#)
## [Indenting the Text](#)
## [Text-Shadow](#)
## [Text-Transform](#)
## [Letter-spacing](#)
## [Word-Spacing](#)
## [White-Spacing](#)
## [Model 2 Quiz](#)

# Properties 
# Positioining and Layout
# CSS3 Basics
# transitions and Transformas
# CSS Filters 
# Certification
