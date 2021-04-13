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



## CSS Comments 
## style Cascade and Inheritance 
## Module 1 Quiz


# Working with Text
# Properties 
# Positioining and Layout
# CSS3 Basics
# transitions and Transformas
# CSS Filters 
# Certification
