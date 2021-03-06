[SoloLearn CSS](https://www.sololearn.com/learning/1023)
* This course teaches how to control the style and layout of websites. 
* This course uses exercises and practice to learn.

# The Basics
* Welcome to the CSS course! 
* There are six units of study in The Basics 

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
* font-family is a  css PROPERTY 
* this property specifies the font for an ELEMENT 
* two types:
  - font family: specific font family 
    such as: Times New roman or Arial 
    "family" in this context means all of the different variations: bold, regular, italics, etc. 
  - generic family: it isn't a specific liscensed font family but instead a type of general font shape such as Monospace, serif, or sans-serif 
* example 
```
serif: times new roman or georgia 
sans-serif: arial or verdana
monospace: courir new or lucinda console 
```
* HTML Example:
```
<p class="serif">
   This is a paragraph shown in serif font.
</p>
<p class="sansserif">
   This is a paragraph shown in sans-serif font.
</p> 
<p class="monospace">
   This is a paragraph shown in monospace font.
</p> 
<p class="cursive">
   This is a paragraph shown in cursive font.
</p> 
<p class="fantasy">
   This is a paragraph shown in fantasy font.
</p> 
```
* CSS Example: 
```
p.serif {
    font-family: "Times New Roman", Times, serif;
}
p.sansserif {
    font-family: Helvetica, Arial, sans-serif;
}
p.monospace {
    font-family: "Courier New", Courier, monospace;
}
p.cursive {
    font-family: Florence, cursive;
}
p.fantasy {
    font-family: Blippo, fantasy;
}
```
* [course code example](https://www.sololearn.com/learning/1023/1084/1231/1)
* Separate each value with a comma to indicate that they are alternatives.
* If the name of a font family is more than one word, it must be in quotation marks: "Times New Roman".

Quiz: The Font-Family Property 
Drag and drop from the options below to make the font of the paragraph "Arial":
```
p {
  font-family: Arial; 
}
```

* The font-family Property
* The font-family property should hold several font names as a "fallback" system. 
* When specifying a web font in a CSS style, add more than one font name, in order to avoid unexpected behaviors. 
* If the client computer for some reason doesn't have the one you choose, it will try the next one.
* It is a good practice to specify a generic font family, 
* to let the browser pick a similar font in the generic family, if no other fonts are available.
* CSS Example:
```
body {
   font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}
```

* If the browser does not support the font Arial, 
* it tries the next fonts (Helvetica Neue, then Helvetica). 
* If the browser doesn't have any of them, it will try the generic sans-serif.
* Remember to use quotation marks if the font name consists of more than one word.

Quiz: 
The font-family Property
Why is the name of one of the fonts put in quotes?
- to support "fallback"
- it shows a font family
- it consists of two or more words
- it is a rarely used font

My answer: it consists of two or more words 

## [Font-Size](https://www.sololearn.com/learning/1023/1085/1233/1)
* The font-size property sets the size of a font. 
* you can use keywords.
* valid font-size keywords are: 
* html example
```
<p class="small">
   Paragraph text set to be small
</p>
<p class="medium">
   Paragraph text set to be medium
</p>
<p class="large">
   Paragraph text set to be large
</p>
<p class="xlarge">
   Paragraph text set to be very large
</p>
```
* css example
```
p.small {
    font-size: small;
}
p.medium {
    font-size: medium;
}
p.large {
    font-size: large;
}
p.xlarge {
    font-size: x-large;
}
```
* Keywords are useful if you do not want the user to be able to increase the size of the font 
* because it will adversely affect your site's appearance.
* https://www.sololearn.com/learning/1023/1085/1233/1 

QUIZ: 
The font size property: 
```
p {
  font-size:large;
}
```

* The font-size Property
* You can also use numerical values in pixels or ems to manipulate font size.
* Setting the font size in pixel values (px) is a good choice when you need pixel accuracy, 
* and it gives you full control over the text size.
* The em size unit is another way to set the font size (em is a relative size unit).
* It allows all major browsers to resize the text. 
* If you haven't set the font size anywhere on the page, 
* then it is the browser default size, which is 16px.
* To calculate the em size, just use the following formula: em = pixels / 16
* For example: 
```
h1 {
    font-size: 20px;
}
```
* Example:
```
h1 {
    font-size: 1.25em; 
}
```
* Both of the examples will produce the same result in the browser, because 20/16=1.25em. 
* Try different combinations of text size and page zooming 
* in a variety of browsers to ensure that the text remains readable.

QUIZ: 
set the font-size of the paragraph to 15px; 
```p { font-size: 15px;}```

## [Font-Style](https://www.sololearn.com/learning/1023/1086/1235/1)
* The font-style property is typically used to specify italic text.
* The HTML:
``` <p class="italic">This is a paragraph in italic style.</p> ```
* The CSS:
```
p.italic {
    font-style: italic;
}
```
QUIZ: 
The font-style Property
Make the text italic:
``` #styled {font-style: italic;} ```

*  The font-style property has three values: normal, italic, and oblique.
*  Oblique is very similar to italic, but less supported.
*  The HTML:
```
<p class="normal">This paragraph is normal.</p>
<p class="italic">This paragraph is italic.</p>
<p class="oblique">This paragraph is oblique.</p>
```
* The CSS
```
p.normal {
    font-style: normal;
}
p.italic {
    font-style: italic;
}
p.oblique {
    font-style: oblique;
}
```

* The HTML <i> tag will produce exactly the same result as the italic font style. 

QUIZ: 
What value is not used with the font-style property? 
choices:  oblique, slant, normal, italic.
my answer: slant 


## [Font-Weight](https://www.sololearn.com/learning/1023/1087/1237/1)
* The font-weight Property
* The font-weight controls the boldness or thickness of the text. 
* The values can be set as normal (default size), bold, bolder, and lighter.
* The HTML:
```
<p class="light">This is a font with a "lighter" weight.</p>
<p class="bold">This is a font with a "bold" weight.</p>
<p class="bolder">This is a font with a "bolder" weight.</p>
```
* CSS
```
p.light {   
    font-weight: lighter;
}
p.bold {   
    font-weight: bold;
}
p.bolder {
    font-weight: bolder;
}
```
QUIZ: 
The font-weight Property
Which CSS property is used for bolding the text?  _font-weight_

* The font-weight Property
* You can also define the font weight with a number from 100 (thin) to 900 (thick),
* according to how thick you want the text to be.
* 400 is the same as normal, and 700 is the same as bold.
* The HTML:
```
<p class="light">This is a font with a "lighter" weight.</p>
<p class="thick">This is a font with a "bold" weight.</p>
<p class="thicker">This is a font with a "700" weight.</p>
```
* CSS
```
p.light {
    font-weight: lighter;
}
p.thick {
    font-weight: bold;
}
p.thicker {
    font-weight: 700;
}
```
* https://www.sololearn.com/learning/1023/1087/1238/1

QUIZ: What numerica values are used for the font-weight property? 
_100 to 900_



## [Font-Variant](https://www.sololearn.com/learning/1023/1088/1239/1)
* The CSS font-variant property allows you to convert your font to all small caps. 
* The values can be set as normal, small-caps, and inherit. 
* [Code Example](https://www.sololearn.com/learning/1023/1088/1239/1)
* The HTML
```
<p class="normal">Paragraph font variant set to normal.</p>
<p class="small">Paragraph font variant set to small-caps.</p>
```
* The CSS
```
p.normal {
    font-variant: normal;
}
p.small {
    font-variant: small-caps;
}
```
* Not every font supports CSS font-variant, so be sure to test before you publish. 

QUIZ: 
Make the text of the paragraph small capitals:
```
p {font-variant: small-caps;}
```

## [Color](https://www.sololearn.com/learning/1023/1089/1240/1)
* The CSS color property specifies the color of the text.
* One method of specifying the color of the text 
* is using a color name: like red, green, blue, etc.
* Here's an example of changing the color of your font.
* the HTML
```
<p class="example">The text inside the paragraph is green.</p>
The text outside the paragraph is black (by default). 
```
* the CSS
```
p.example {
    color: green;
}
```
* https://www.sololearn.com/learning/1023/1089/1240/1

QUIZ: 
```
p.colored {
  color:green;
}
```

### The Color Property 
* Another way of defining colors is using hexadecimal values and RGB.
* Hexadecimal form is a pound sign (#) followed by at most, 6 hex values (0-F).
* RGB defines the individual values for Red, Green, and Blue.
* In the example below, we use hexadecimal value 
* to set the heading color to blue, and RGB form to make the paragraph red. 
* HTML
```
<h1>This is a heading</h1>
<p class="example">This is a paragraph</p>
```
* CSS
```
h1 {
    color: #0000FF;
}
p.example {
    color: rgb(255,0,0);
}
```
* https://www.sololearn.com/learning/1023/1089/1241/1

Quiz: 
Which of the following options are accepted by the color property?
- hexadecimal
- octal
- color names 

Correct Answers: hexadecimal and color names 



## [Aligning Text Horizontally](https://www.sololearn.com/learning/1023/1090/1243/1)
* The text-align Property
* The text-align property specifies the horizontal alignment of text in an element.
* By default, text on your website is aligned to the left. 
* However, at times you may require a different alignment.
* text-align property values are as follows: left, right, center, and justify.
* The HTML:
```
<p class="left">This paragraph is aligned to <strong>left.</strong></p>
<p class="right">This paragraph is aligned to <strong>right.</strong></p>
<p class="center">This paragraph is aligned to <strong>center.</strong></p>
```
* css
```
p.left {
    text-align: left;
}
p.right {
    text-align: right;
}
p.center {
    text-align: center;
}
```
* When text-align is set to "justify", 
* each line is stretched so that every line has equal width, 
* and the left and right margins are straight (as in magazines and newspapers).
* https://www.sololearn.com/learning/1023/1090/1243/1

Quiz:  Which of the values below is NOT applicable for the text-align property? 
- left 
- center
- even (this isn't connected so this is the correct answer)
- right 



## [aligning Text vertically](https://www.sololearn.com/learning/1023/1091/1244/1)
* The vertical-align Property
* The vertical-align property sets an element's vertical alignment. 
* Commonly used values are top, middle, and bottom.
* The example below shows how to vertically align the text between the table. 
* HTML
```
<table border="1" cellpadding="2" cellspacing="0" style="height: 150px;">
  <tr>
     <td class="top">Top</td>
     <td class="middle">Middle</td>
     <td class="bottom">Bottom</td>
  </tr>
</table>
```
* CSS
```
td.top {
    vertical-align: top;
}
td.middle {
    vertical-align: middle;
}
td.bottom {
    vertical-align: bottom;
}
```
* Code 

Quiz: The Vertical-Align Property 
Fill in the blanks to set the vertical alignment of all elements having class="test" to bottom: 
```
.test {
  vertical-align:bottom; 
}
```

The vertical-align Property
The vertical-align property also takes the following values: baseline, sub, super, % and px (or pt, cm).
The example below shows the difference between them. 
https://www.sololearn.com/learning/1023/1091/1245/1
Instead of px values, you can use pt (points), cm (centimeters) and % (percentage) values.

Quiz: Negative values can be used with the vertical-align property: True. 

The vertical-align Property


Vertical align property does not act the same way for all elements.
For example, some additional CSS styling is needed for div elements. 

<div class="main">
   <div class="paragraph">
   This text is aligned to the middle
   </div>
</div>
https://www.sololearn.com/learning/1023/1091/1246/1
display: inline-table; and display: table-cell; styling rules are applied to make the vertical-align property work with divs.

QUIZ: does the vertical-align property act the same way for all elements?
no. 



## [Text-Decoration](https://www.sololearn.com/learning/1023/1092/1247/1)
* The text-decoration Property
* The text-decoration property specifies how the text will be decorated.
* Commonly used values are:
- none - The default value, this defines a normal text
- inherit - Inherits this property from its parent element
- overline - Draws a horizontal line above the text
- underline - Draws a horizontal line below the text
- line-through - draws a horizontal line through the text (substitutes the HTML ```<s>``` tag)
* The example below demonstrates the difference between each value.
```
The HTML:
<p class="none">This is default style of the text (none).</p>
<p class="inherit">This text inherits the decoration of the parent.</p>
<p class="overline">This is overlined text.</p>
<p class="underline">This is underlined text.</p>
<p class="line-through">This is lined-through text.</p>
```
    
[Example Code](https://www.sololearn.com/learning/1023/1092/1247/1)<br>
You can combine the underline, overline, or line-through values in a space-separated list to add multiple decoration lines.

Quiz: 
The text-decoaration property 
What value of the text-decoration property substitutes the HTMLS Tag?
- line-through (this is the correct answer) 
- underline
- overline
- blink 

* The text-decoration Property
* Another value of text-decoration property is blink which makes the text blink.
* CSS syntax looks like this:
```text-decoration: blink; ```
* CSS
This value is valid but is deprecated and most browsers ignore it. 

QUIZ: 
The text-decoration property 
Fillin the blanks to make the text underlined
```
#mystyle {
  text-decoration: underline; 
}
```


## [Indenting the Text](https://www.sololearn.com/learning/1023/1093/1249/1)
The text-indent Property
The text-indent property specifies how much horizontal space should be left before the beginning of the first line of the text. Property values are length (px, pt, cm, em, etc.), %, and inherit.
The HTML:
<p>This is an example of 
<strong>text-indent </strong> property. 
First line of our text is indented to the right in 60px. 
Besides pixels you can also use other measurement units, 
like pt, cm, em, etc. </p>
https://www.sololearn.com/learning/1023/1093/1249/1
Negative values are allowed. The first line will be indented to the left if the value is negative.

Quiz: The Text-Indent Property 
The position of which block is specified by the text-indent property? My answer: the first line of the text block. 

## [Text-Shadow](https://www.sololearn.com/learning/1023/1094/1251/1)
* The text-shadow Property
* The text-shadow property adds shadow to text.
* It takes four values: 
- the first value defines the distance of the shadow in the x (horizontal) direction
- the second value sets the distance in the y (vertical) direction
- the third value defines the blur of the shadow
- and the fourth value sets the color.
* The HTML: ```<h1>Text-shadow example</h1>```
* CSS:
 ```h1 {
    color: blue;
    font-size: 30pt;
    text-shadow: 5px 2px 4px grey;
}
``` 
* In the example above, we created a shadow using the following parameters:
```
5px – the X-coordinate
2px – the Y-coordinate
4px – the blur radius
grey – the color of the shadow 
```
* [Template](https://www.sololearn.com/learning/1023/1094/1251/1)
* To add more than one shadow to the text, add a comma-separated list of shadows.

QUIZ: The Text-Shadow Property 
What is the format of the value for the text-shadow property? 
- upper-left position down-right position blur color
- horizontal position vertical potion blur color (this is correct) 
- width height depth color 

### text-shadow with Blur Effect
* When working with shadows, you can use any CSS-supported color format.
* For the x and y offsets, various types of units can be used (like px, cm, mm, in, pc, pt, etc).
* Negative values are also supported.
* The example below creates a blue drop-shadow, 
* two pixels higher than the main text, 
* one pixel to the left of it, and with a 0.5em blur:
* The HTML:
```<h1>Text-shadow with blur effect</h1>```
* The CSS:
```
h1 {
    font-size: 20pt;   
    text-shadow: rgba(0,0,255,1) -1px -2px 0.5em; 
}
```
* [Basic Template](https://www.sololearn.com/learning/1023/1094/1252/1)
* Internet Explorer 9 and earlier do not support the text-shadow property.

QUIZ: Text-Shadow with Blur Effect 
Create a text shadow with horizontal and vertical distance of 5px and blur radius of 2px. 
```
p {
  text-shadow: 5px 5px 2px; 
}
```

## [Text-Transform](https://www.sololearn.com/learning/1023/1095/1253/1)
* Using text-transform property you can make text appear in all-uppercase or all-lowercase. 
* Here is an example:
* The HTML:
```
<p class="uppercase">This value transforms all characters to uppercase.</p>

<p class="lowercase">This value transforms all characters to lowercase.</p>
```
* CSS
```
p.uppercase {
    text-transform: uppercase;
}
p.lowercase {
    text-transform: lowercase;
}
```
* The value none will produce no capitalization effect at all. 

QUIZ: 
text-transform Values
Which option is NOT supported by the text-transform property?
- small-caps (correct answer--this is not supported) 
- none
- capitalize
- uppercase

* The text-transform Property
* The text-transform CSS property specifies how to capitalize an element's text. 
* For example, it can be used to make text appear with each word capitalized.

* The HTML:
```
<p class="capitalize">

    The value capitalize transforms the first 

    character in each word to uppercase; 

    all other characters remain unaffected.

</p>
```
* CSS:
```
p.capitalize {
    text-transform: capitalize;
}
```

QUIZ: The text-transform Property
Drag and drop from the options below to make each word capitalized in the paragraph:
```
p.capfirst {
    text-transform:capitalize; 
}
```

## [Letter-spacing][letter spacing](https://www.sololearn.com/learning/1023/1096/1255/1)

The letter-spacing property specifies the space between characters in a text. The values can be set as:
- normal defines the default style with no extra space between characters
- length defines an extra space between characters using measurement units like px, pt, cm, mm, etc.;
- inherit inherits the property from its parent element;

The HTML:
```
<p class="normal">This paragraph has no additional letter-spacing applied.</p>

<p class="positive ">This paragraph is letter-spaced at 4px.</p>
```
The CSS
```
p.normal { 
    letter-spacing: normal;
}
p.positive { 
    letter-spacing: 4px;
}
```

QUIZ: The letter-spacing Property
Drag and drop from the options below to set the letter spacing of the paragraph:
```
p {
    letter-spacing: 4px; 
}
```

### Using Negative Values
* For defining an extra space between characters, negative values are also permitted.
* Here is an example demonstrating the difference between positive and negative values:
* The HTML:
```
<p class="positive">This paragraph is letter-spaced at 4px.</p>
<p class="negative">This paragraph is letter-spaced at -1.5px</p>
```
* The CSS:
```
p.positive { 
    letter-spacing: 4px; 
}
p.negative { 
    letter-spacing: -1.5px; 
}
```
* Always test your result, to ensure the text is readable.

QUIZ: Using Negative Values
Fill in the blank to make the letter spacing -1cm:
``` letter-spacing: -1cm" ```

## [Word Spacing Property](https://www.sololearn.com/learning/1023/1097/1257/1)
*  The word-spacing property specifies the space between words in a text. 
*  Just like the letter-spacing property, you can set the word-spacing values as normal, length, and inherit.
* The HTML:
```
<p class="normal">This paragraph has no additional word-spacing applied.</p>
<p class="px">This paragraph is word-spaced at 30px.</p>
```
* CSS
```
p.normal { 
    word-spacing: normal;
}
p.px { 
    word-spacing: 30px;
}
```
* When a weird spacing is used, and it is necessary to keep the selected paragraph with normal word spacing, the normal option is usually used.

QUIZ: The word-spacing Property
Fill in the blanks to make the word-spacing 15px:
``` 
p {
    word-spacing:15px;
}
```

### Measurement Units
* To define an extra space between words,
*  you can use positive measurement values 
*  like px, pt, pc, cm, mm, inches, em, and ex.
*  Negative values are also permitted.
*   Here is an example to show the difference.
* The HTML:
```
<p class="positive">This paragraph is word-spaced at 20px.</p>
<p class="negative">This paragraph is word-spaced at -5px.</p>
```
* The CSS: 
```
p.positive { 
    word-spacing: 20px;
}
p.negative { 
    word-spacing: -5px;
}
```

QUIZ: Measurement Units
Which measurement units CANNOT be used with the word-spacing property?
- points
- pixels
- feet,yards (this is the correct answer) 
- cm, mm, inches 

## [White-Spacing](https://www.sololearn.com/learning/1023/1098/1259/1)
* The White-Space property
* The white-space property specifies how white-space inside an element is handled. 
* The values can be set as normal, inherit, nowrap, etc.
* The nowrap value makes the text continue on the same line until a ```<br>``` tag is encountered,
*  and also collapses all sequences of whitespace into a single whitespace.
* The HTML:
``` <p>
This paragraph has         multiple spaces      and
a line break, but it will be ignored, as we used the nowrap value. 
</p>
```
* The CSS: 
```
p {
    white-space: nowrap;
}
```

QUIZ:
The white-space Property
Which of the following indicate the purpose of the "nowrap" option?
- It separates paragraphs (incorrect) 
- It puts the whole text in one line (correct) 
- It collapses all sequences of white space into a single whitespace
(correct)

### The white-space Values
* The white-space property also supports other values:
- pre - text will only wrap on line breaks and white space
- pre-line - text will wrap where there is a break in code, but extra white space is still ignored
- pre-wrap - text will wrap when necessary, and on line breaks
* Here is an example in which all three values are used:
* The HTML:
```
<p class="pre"> 
In the markup we have multiple            spaces 
and a line break. 
</p>
<p class="preline"> 
In the markup we have multiple            spaces 
and a line break, but in the result multiple spaces are ignored. 
</p>
<p class="prewrap"> 
In the markup we have              multiple 
spaces and a line break.
</p>
```
* CSS 
```
p.pre {
    white-space: pre;
}
p.preline {
    white-space: pre-line;
}
p.prewrap {
    white-space: pre-wrap;
}
```
* [template](https://www.sololearn.com/learning/1023/1098/1260/1)
* Pre-wrap value behaves as the pre value, except that it adds extra line breaks to prevent the text breaking out of the element's box.

QUIZ: The white-space Values
What is the difference between the "pre" and "pre-line" options?
- "pre" accepts all line-breaks and whitespace, while "pre-line" ignores the whitespace (correct) 
- "pre-line" accepts all line-breaks and whitespace, while "pre" ignores the line-breaks (incorrect) 
- There is no difference (incorrect) 

## [Model 2 Quiz](https://www.sololearn.com/learning/1023/2332/1293/2)

1. What is the correct CSS syntax for making all P elements bold? 
- p {font-weight:bold;} This Is The Correct Answer 
- <p style-"text-size:bold">
- p {text-size:bold;}
- <p style="font-size:bold">

2. fill in the blanks to make the paragraph red and bold
```
p {
  color: red: 
  font-weight: bold;
  text-decoration:none;
  font-size; 16px;
}
```

3. fill in the blanks ot make all the text of the H1 elements bold, red and 14 pixels 

```
h1 {
  font-size:14px;
  font-weight:bold;
  color:read; 
}
```
![results](https://github.com/EO4wellness/T-I-L/blob/main/CSS/images/2021-04-25-CSS-Module2-Quiz.jpg)

# Properties 
* There are 13 Units of study in this section<br>
![box-model](https://github.com/EO4wellness/T-I-L/blob/main/CSS/images/example_box-model.jpg)


## [Introducing the Box Model](https://www.sololearn.com/learning/1023/1099/1262/1):


### The CSS Box Model 
* All HTML elements can be considered as boxes
* the CSS box model represents the design and layout of th esite 
* it is made up of margins, borders, paddings, and content
* the properties work in the same order: top, right, bottom, left

QUIZ: The CSS Box Model: In what order do the properties work in the box? 

A:  top right bottom left 

### More on Box Models 
* Every element of the webpage is a BOX
* CSS uses the box model to determine how big the boxes are and how to place them
* the box model is also used to calculate the actual width and height of the HTML elements 

QUIZ: More on Box Models
According to the box model, every element on a web page is a: Box.

## [Understanding the Box Model](https://www.sololearn.com/learning/1023/1100/1264/1) 

### Total Width of an Element
* When working with boxes, it is important to understand how the total width of an element is calculated.
* For example, the total width of the box with paddings will be the sum of width plus padding left and padding right

![padding-width-example](https://github.com/EO4wellness/T-I-L/blob/main/CSS/images/padding-example1.jpg)

* Here is another box with margins, border, and paddings.
* The total width is the sum of left and right margins, left and right borders, left and right paddings, and the actual width of the content.

![padding-example2](https://github.com/EO4wellness/T-I-L/blob/main/CSS/images/padding-example2.jpg)

* When you set the width and height properties of an element with CSS, you set the width and height of the content area.
When setting a background-color to a box, it covers the content area, as well as the padding.

## Borders 
## Width and Height 
## Background-Color
## Background-Image
## Background-Repeat
## Background-Attachment 
## Styling the Lists 

## [Styling the Tables](https://www.sololearn.com/learning/1023/1108/1283/1)
* The Table Properties
* The look of an HTML table can be greatly improved with CSS.
* The border-collapse property specifies whether the table borders 
* are collapsed into a single border 
* or separated as default. 
* If the borders are separate, 
* the border-spacing property can be used to change the spacing.
* The HTML:
``` 
<table border="1">
   <tr>
     <td>Red</td>
     <td>Green</td>
   </tr>
   <tr>
      <td>Blue</td>
      <td>Yellow</td>
   </tr>
</table>
```
* The CSS:
```
table {
    border-collapse: separate;
    border-spacing: 20px 40px;
}
```
* [Template](https://www.sololearn.com/learning/1023/1108/1283/1)

QUIZ: The Table Properties
The properties regarding table borders are:
- border-length
- border-collapse (correct)
- table-border-style
- border-spacing (correct) 

### The caption-side Property
* The caption-side property specifies the position of a table caption. 
* The values can be set as top or bottom.
* In the example below, we specify the placement of a table caption to top.
* The HTML:
```
<table border="1">
<caption>Some of Our Courses</caption>
<tr>
  <th>Course name</th>
  <th>Lessons</th>
  <th>Quizzes</th>
</tr>
<tr>
  <td>C++</td>
  <td>81</td>
  <td>363</td>
</tr>
<tr>
  <td>JavaScript</td>
  <td>48</td>
  <td>144</td>
</tr>
<tr>
  <td>HTML</td>
  <td>38</td>
  <td>119</td>
</tr>
<tr>
  <td>CSS</td>
  <td>70</td>
  <td>174</td>
</tr>
</table>
```
* The CSS:
 ```caption {
    caption-side: top;
}
```
* [Result](https://www.sololearn.com/learning/1023/1108/1284/1)

QUIZ: The caption-side Property
Fill in the blanks to position the caption of the table at the bottom:
```
caption {
    caption-side:bottom;
}
```

### The empty-cells Property
* The empty-cells property specifies whether 
* or not to display borders and background on empty cells in a table.
* Possible values are:
- show: the borders of an empty cell are rendered
- hide: the borders of an empty cell are not drawn
* Here is the empty-cells property that is used to hide borders of empty cells in the <table> element.
* The HTML:
```
<table border="1">
  <tr>
    <td>HTML</td>
    <td>CSS</td>
  </tr>
  <tr>
    <td>JavaScript</td>
    <td></td>
  </tr>
</table>
```
* The CSS:
```
table {
    border-collapse: separate;
    empty-cells: hide;
}
```
* [Template Example](https://www.sololearn.com/learning/1023/1108/1285/1)

QUIZ: The empty-cells Property
Fill in the blanks to hide the empty cells of the table.
```
table {
    empty-cells: hide; 
}
```

### The table-layout Property
* The table-layout specifies how the width of table columns is calculated. 
* The possible values are:
- auto - when column or cell width are not explicitly set
- the column width will be in proportion to the amount of content in the cells that make up the column
- fixed - when column or cell width are not explicitly set
- the column width will not be affected by the amount of content in the cells that make up the column.
* The table layout is set to auto by default.
* The example below shows the difference between auto and fixed.
* The HTML:
```
<p>Table-layout is set to <strong>auto</strong></p>
<table class="auto">
  <tr>
    <td width=“10%">500.000.000.000.000</td>
    <td width="90%">20.000</td>
  </tr>
</table>

<p>Table-layout is set to <strong>fixed</strong></p>
<table class="fixed">
  <tr>
    <td width="10%">500.000.000.000.000</td>
    <td width="90%">20.000</td>
  </tr>
</table>
```
* The CSS: 
```
table {
    border-collapse: separate;
    width: 100%;
    border: 1px solid gray;
} 
td {
    border: 1px solid gray;
}
table.auto {
    table-layout: auto;
}
table.fixed {
    table-layout: fixed;
}
```
* [Results](https://www.sololearn.com/learning/1023/1108/1286/1)


QUIZ: The table-layout Property
What is the default value of the table-layout property?  auto



## [Styling the Links](https://www.sololearn.com/learning/1023/1109/1287/1)

### Setting Styles to Links:
* Links can be styled with any CSS property (e.g., color, font-family, background, etc.).
* In addition, links can be styled differently, 
* depending on what state they are in. The following pseudo selectors are available:
- a:link - defines the style for normal unvisited links
- a:visited - defines the style for visited links
- a:active - a link becomes active once you click on it
- a:hover - a link is hovered when the mouse is over it
* The example below creates a link that will change the style when the mouse is moved over it.
* The HTML:
```
<p><a href="http://www.sololearn.com" target="_blank">
   This link is hovered when we mouse over it
</a></p>
```
* The CSS:
```
a:hover {
    color: red;
}
```
* [Example](https://www.sololearn.com/learning/1023/1109/1287/1)
* When setting the style for several link states, there are some order rules:
- a:hover MUST come after a:link and a:visited
- a:active MUST come after a:hover

QUIZ: Setting Styles to Links
Of what type are the :link, :visited, :active and :hover selectors?
- pseudo (correct answer) 
- universal
- E type 

### Links' Text Decoration
* By default, text links are underlined by the browser.
* One of the most common uses of CSS with links is to remove the underline. 
* In the example below, the text-decoration property is used to remove the underline.
* The HTML:
```
<p><a href="http://www.sololearn.com" target="_blank">
   This link has no underline.
</a></p>
```
* The CSS:
```
a:link {
    text-decoration: none;
}
```
* The following properties are used to control the look and feel of links:
- border:none - removes border from images with links
- outline:none - removes the dotted border on clicked lines in IE

QUIZ: Links' Text Decoration
What value is used to remove borders of images with links? 
``` border:none;```


## [Customizing the Mouse Cursor](https://www.sololearn.com/learning/1023/1110/1290/1)

### Setting the Mouse Cursor Style
* CSS allows you to set your desired cursor style when you mouse over an element. 
* For example, you can change your cursor into a hand icon, 
* help icon, and much more, rather than using the default pointer.
* In the example below, the mouse pointer is set to a help icon when we mouse over the span element: 
* HTML
```
<span style="cursor:help;">
   Do you need help?
</span>
```

Quiz: Setting the Mouse Cursor Style
Which property allows you to change the style of the mouse cursor?
``` cursor ```

### The cursor Property Values
* There are numerous other possible values for the cursor property, such as:
- default - default cursor
- crosshair - cursor displays as crosshair
- pointer - cursor displays hand icon
* The list of possible values is quite long.
* The image below demonstrates the various available styles:
* CSS allows you to set your desired cursor style when you mouse over an element.

![Cursor Styles](https://github.com/EO4wellness/T-I-L/blob/main/CSS/images/css-possible-cursor-styles.jpg)

QUIZ: The cursor Property Values
What value of the cursor property displays a plus icon? _crosshair_

### The default Value
* Usually, the appearance of the mouse cursor is altered 
* to provide a more interesting experience for website visitors. 
* However, choosing the wrong cursor style can be misleading, as well.
* For example, if the cursor value is set to default, 
* users may not "see" the links. 
* Choose your mouse cursor styles carefully.

QUIZ: The default Value
Drag and drop from the options below to make the cursor appear as a pointer on paragraphs:
```
p {
    cursor: pointer; 
}
```

## Module 3 Quiz

1. Add the padding values, so that it has 10 pixels to the top, 15 pixels to the bottom, 5 pixels to the right, 10 pixels to the left:
```
padding: 10px 5px 15px 10px;
```

2. How do you make a list not display bullet points?
- list-style-type: no bullet 
- list-style-type: none (correct answer) 
- bulletpoints: none
- list: none 

3. Fill in the blanks:
```
body {
   background-image:url("sample.png");
   background-repeat: repeat-x;
}

a:hover
{
text-decoration :underline;
color: #000000;
cursor: crosshair;
}
```

4.  Make the cursor appear as a crosshair on all links of the web page:
```
a {
    cursor: crosshair; 
}
```

# Positioining and Layout
* There are 8 units of study.

## [The Display Property](https://www.sololearn.com/learning/1023/1112/1297/1)



## The visibility Property 
## Positioning 
## Floating 
## The Clear Property 
## The overflow Property 
## The z-index Property 
## Module 4 QUIZ: 

# CSS3 Basics
* There are 12 units in this topic. 
## Introduction to CSS3
## Vendor Prefixes 
## Rounded Corners 
## Box-Shadow
## Box Shadow Techniques 
## Transparency Effect 
## Text-Shadow 
## Pseudo Classes 
## Pseudo Elements
## Word-Wrap
## @font-face
## Module 5 Quiz: 

# Gradients and Backgrounds 
* There are 8 units of study in this module. 
## Lindear Gradients
## Radial Gradients
## Background-Size
## Background-clip
## Transparent Borders 
## Multiple Background Images 
## Opacity
## Module 6 Quiz


# Transitions and Transforms
* There are 8 units of study in this module. 

## Transitions
## Transformed: Rotate()
## Transform Origin, Translate(), Skew()
## Scale(), Multiple Tranformations
## Keyframes and Animation 
## Animation Properties 
## 3D Transforms 
## Module 7 Quiz: 

# CSS Filters 
* There are 5 units in this study topic. 

## CSS Filters 
## Filter Functions 
## Opacity and Brightness 
## Using Multiple CSS Filters 
## Module 8 Quiz 

# Certification
