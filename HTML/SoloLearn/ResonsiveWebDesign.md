# SoloLearn-Responsive Web Design
* These are my notes I made while taking the sololearn course

# Intro: Responsive Web Design
Responsive web design is the practice of building websites that can adapt to every 
device and every screen size. During this course, we will learn how to build modern, 
responsive websites using HTML and CSS. As our course project, we will build a website
from scratch and, as a bonus, we will add some functionality to it using JavaScript at
the end of the course!

## Getting Started 
### Introduction
* Welcome to our Responsive Web Design Course!
* During this course we will learn how to build modern, 
* responsive websites using HTML and CSS.
* As our course project, we will build a real website from scratch!
* As a bonus, we will also add some functionality to the website 
* using JavaScript at the end of the course! 
* SoloLearn recommends completion of their HTML and CSS course before taking this one. 

QUIZ: 
Responsive Web Design
Complete the HTML document 

  ```
  <html>
    <head>
    </head>
    <body>
      <p> Hello! </p>
    </body>
  </html>
  ```
  
* Responsive web design is the practice of building websites that can adapt to every device 
* and every screen size.
* A responsive website is usable on different screen sizes, 
* from large desktops to small mobile screens. 
* The main concept of responsive web design is building layouts 
* that respond to screen size change by adapting and changing the style of the page.

QUIZ:
Which of the following best describes the term Responsive Web Design?
* same layout for all screen sizes (wrong)
* consistent structure on different screen sizes (wrong: 
   same content is possible but not same structure) 
* separate pages for web and desktop (in some use cases this could be true) 
* adapting to different screen sizes (correct) 


### Course Project 
* Let's take a look at the project we will build: a generic Landing Page for an app.
This is how it will look like on a desktop:
![course-image](example_desktop-app)
* As you can see, the landing page has a number of sections:
- a header with texts and a button
- a features section
- a quote section
- a footer with a menu 
* A landing page is where users land when clicking on promotional/marketing links.
* For example, when you want to promote your app, you share its landing page URL on social
* and other media.

QUIZ: 
Course Project
Let's check your CSS knowledge.
Complete the following code to define the text color of the paragraphs.

  ```
  p {
    color: #868686;
  }
  
  ```

* Course Project
* We will create the landing page as a responsive page, 
* so it can adapt to different screen sizes.
* For example, this is how it will look on mobile:

![course-image](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/example_app.png)


* As you can see, some sections change their layouts on mobile. 
* For example, the features section 
* and the footer menu become vertical lists, 
* the download button gets wider, etc.

QUIZ: 
In HTML, fill in the blanks to define a valid image tag from the file test.png.

  ```
  
  <img src="test.png" alt="" />
  
  ```
  
### The HTML Structure 
* Let's start by building the basic HTML structure of our landing page. 
* We will start by building the desktop version and then will adapt it for mobile and make it responsive.
* We will use HTML5 semantic tags to define the sections:
* [SoloLearn Course HTML Template](https://www.sololearn.com/learning/1162/4803/12334/1)
* [Git Course HTML Template](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/course-code/Responsive%20Web%20Course%20project%20template%2004112021.html)
* We used a header tag for the header, 
* section tags for the features and quote sections, 
* and a footer tag for the footer.
* We gave corresponding class names to the features and quote sections 
* so we can define CSS styles for them. 
* We do not have any CSS styles defined yet, 
* so the sections are just white blocks with dummy text.

QUIZ: Fill in the blanks to define a section element and give it the class name "description".

  ``` 
    <section class="description">
      some text goes here 
    </section>
    
  ```

* HTML Structure 
* Now, we need to add some basic CSS styles to give our sections some color and size.
* [SoloLearn course CSS template](https://www.sololearn.com/learning/1162/4803/12335/1)
* [GIT course css template](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/course-code/course-template.css)
* We have used padding to give the sections some height. 
* Since we provided only two values for the padding, it will set both the top and bottom padding to the provided value. (padding: 40px 0; is the same as padding: 40px 0 40px 0;)
* We have also defined background and text colors for the sections.
* We have not given any width to the sections, 
* so they will occupy the entire width available.
* This means that when the screen is resized, 
* the section's width will always remain 100% of the available width.
* Since we are planning to create a responsive page, 
* we do not establish any fixed width values for our sections; 
* rather we make it occupy the entire width of the screen. 

QUIZ: What will be the bottom margin of a DIV with the following style? 

```
  div {
    padding:10px 5px;
    margin:15px 0;
  }
  
```
correct: 15 px; other wrong choices: 10px, 0px, 30px; 


### Module Quiz 

1. What is the total height of the following element?
```
.test {

  height: 10px;

  padding: 5px 0;

}
```
Choices: 20px, 15px, 10px;  Correct Answer: 20 px.  Why?  10 px height plus 5 px top padding 5 px bottom padding. 


2. Fill in the blanks to give the page a valid title.
```
<html>
  <head>
    <title>A Title</title>
  </head>
</html>
```

3. Fill in the blanks to make the element with id="text" take the full width of the page.
```
#text {
  width:100%;
}
```

4. The HTML5 section element is: 
* an inline element (incorrect)
* a block-level element (correct)

![results](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/result-intro-quiz.png)

## Working with HTML & CSS
Now that we have the basic structure of our page, we can start building each of its sections. 

### Building the Header
https://www.sololearn.com/learning/1162/4804/12336/1
* Let's start with the header. 
* We use h1 and h2 tags for the texts and an a tag for the button. 
* Also, we wrap the whole header on a container div, so we can style it with CSS:
* HTML: 
```
<header>

<div class="container">
  <h1>Awesome App</h1>
  <h2>This app will change your life!</h2>
  <a class="btn">Download Now</a>
</div>

</header>

```
* CSS: 
```
header {
    color: #FFFFFF;
    background-color: #284b63;
    padding: 80px 0;
    text-align: center;
}


```
* We define corresponding classes for our container div and the Download Now link. 
* Run the code to see the result. 
* Next, it is time to add some CSS Styles 

QUIZ: 
Building the Header: How do you define CSS styles for an element with the class="test"?
choices: #test, --test, test, .test 
Correct Answer: .test 

* Now It's time to add some CSS styles to our header elements.
* Let's start with the h1 and h2 tags:
* CSS Example Code:

```
h1 {
  font-size: 48px;
  margin: 0 0 16px 0;
}
h2 {
  font-weight: 300;
  font-size: 24px;
  margin: 0 0 16px 0;
}
```

* Here we define the font sizes and margins. 
* Recall how the margin values work: 
* the first value is the top margin, 
* the second value is the right margin, 
* third is the bottom margin 
* and the last one defines the left margin. 
* This means the values go in the clockwise direction, 
* starting from the top.

QUIZ: Building The Header
What is the left margin of the following definition?
``` margin: 15px 5px 20px 10px; ```
Choices: 5px, 15px, 10px, 20px
Correct Answer: 10 px (or the left margin is the LAST parameter specified because we go clockwise from the TOP ) 

* For our container div, we will define the following styles:
* Example CSS Code:
```
.container {
    margin: 0 auto;
    padding: 0 20px 0 20px;
    max-width: 900px;
}
```
* Since our header takes the full width of the browser, 
* we limited the maximum width 
* the text container can have to 900px 
* using the max-width property.
* This makes the div stop expanding 
* so that the text does not get too wide.
* Because we will reuse our container class for other sections, 
* we defined some left and right paddings, 
* which ensures that the child elements 
* stay 20px away from the edges of the screen.
*  margin: 0 auto; 
*  ensures that the content stays at the center of the container, 
*  irrespective of its size.
*  On a screen that is larger than 900px in width, 
*  the container div will have the width of 900px,
*  so we align it to the center of the screen. 

QUIZ: Building the Header: What does margin: 0 autho; do? 
choices: 
- Aligns the element to the vertical center
- Aligns the element to the center of its parent
- Resets all margins to zeros
- Sets the right margin to 0

Correct answer: Aligns the element to the center of its parent. 

* Our header is almost ready!
* However, currently our Download Now button is just a link without any style.
* To make it look like a button, we need to add the following styles: 
* CSS Button Example:

```
.btn {
    display: inline-block;
    color: white;
    font-weight: 500;
    font-size: 20px;
    background: #549DA0;
    border: none;
    border-radius: 5px;
    padding: 12px 16px;
    cursor: pointer;
}
```

* The display property specifies the display behavior of the element. 
* We have set it to inline-block, 
* so that the link behaves as an inline block container.
* We have also set the colors and font size, 
* as well as the border-radius, _resulting in rounded corners_.

QUIZ: Building The Header
Fill in the blanks to define a style that rounds the corners of the element with 5px radius and sets a 1px black border.

```
.my-item {
    border-radius: 5px;
    border: 1px solid black;
}
```

### Styling the Button 
* Building the Header
* Our button also needs a hover effect, 
* so it changes its background color when the mouse hovers over it.
* To define the style, we will use the :hover selector:
* Hover selector CSS Example:

```
.btn:hover {
    background: #468486;
}
```

* Now, when the cursor hovers over the button, the button's background color changes.
* Our header section is read!
* we can run the code to see the result: 
* [on sololearn](https://www.sololearn.com/learning/1162/4805/12342/1)
* on GitHub[html](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/course-code/project%20template%20with%20header%2004112021.html) and the corresponding [css](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/course-code/course-template_with-header.css)

QUIZ: Building the Header: Fill in the blanks to define a style for the element.  When the mouse cursor travels over the button, it should change its color to white. 

```

.item:hover{
  color: white;
}

```
NOTE TO SELF:  Need to be careful as I typo "hover" as "hoover" every time--and that doesn't work! 


### Building the Features Section 
https://www.sololearn.com/learning/1162/4806/12343/1
* Let's start building our features section:
* Our goal is to have the finished section [look like this](https://www.sololearn.com/learning/1162/4806/12343/1): 
* It has 3 features, 3 images, 3 bits of text. 
* the features are aligned horizontally next to one another
* we will reuse our CONTAINER div to wrap all  the elements of the features section: 
* HTML Coding Example:

```
<section class="features">
  <div class="container">
    
<div class="feature">
      <img src="https://www.sololearn.com/uploads/img_blue_pin.png" alt=""/>
      <p>An awesome feature</p>
    </div>

    <div class="feature">
      <img src="https://www.sololearn.com/uploads/img_blue_chart.png" alt=""/>
      <p>An awesome feature</p>
    </div>

    <div class="feature">
      <img src="https://www.sololearn.com/uploads/img_blue_msg.png" alt=""/>
      <p>An awesome feature</p>
    </div>

  </div>
</section>  

```
* Cordinating CSS Example:

```
@import url(//fonts.googleapis.com/css?family=Open+Sans:400,700,800,300);

body {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans','Helvetica Neue',Helvetica, sans-serif;
    line-height: 1.45;
}
section {
    text-align: center;
    padding: 40px 0;
}
.container {
    margin: 0 auto;
    padding: 0 20px 0 20px;
    max-width: 900px;
}
.features {
    background: #FFFFFF;
    color: #000000;
}
```

* Each feature is wrapped in a div with class "feature", 
* which we will use to position the features.
* It contains an image and a paragraph of text.
* Right now, they are simply positioned below each other, 
* so we need to add some CSS styles to fix that.
* We are using sample image files that we have uploaded to our server.

QUIZ: The Features Section: Why are the feature divs positioned below each other?
- Because divs are block level elements
- Because of the text inside of the divs
- Because we have images in them
- Because divs are inline elements
Correct Answer: Because these divs are Block Level elements

* The Features Section: In order to position the feature divs 
* next to each other horizontally, 
* we will use display: inline-block to make them inline-level block containers 
* and provide a width:
* CSS Code Example: 

```

.features {
    background: #FFFFFF;
    color: #000000;
}
.feature {
    width: 32%;
    display: inline-block;
    font-size:16px;
}
.feature img {
    width:40%;
}

```

* Because we have 3 features, we gave each feature div 32% of the width of their container.
* The remaining space will be left for the space between the elements.
* We also set the width of the images to be 40% of their containers.
* By using only % values for the widths, 
* the features will always remain next to each other 
* and be positioned horizontally, [irrespective of the browser (or device) width](https://www.sololearn.com/learning/1162/4806/12344/1).

QUIZ: The Features Section -
You have 2 div elements on your page. You need to position them so that the first div occupies 70% of the page and while the second div takes the remaining 30%.

```

.first {
 width:70%;
 display:inline-block;
}
.second {
 width:30%;
 display:inline-block;
}

```

### The Quote Section 
https://www.sololearn.com/learning/1162/4807/12345/1
* Typical to may pages, the quote section contains testimonials from satisfied customer(s)
* Let's build the HTML using semantic tags:

```
<section class="quote">
  <blockquote class="container">
    <p>"Some great quote!"</p>
    <cite>Satisfied Customer</cite>
  </blockquote>
</section> 
```

* We used the blockquote tag as the container and reused our container class on it.
* Inside the blockquote, we have a paragraph of text representing the quote, and a cite tag, containing the name of the customer.
* The blockquote element specifies a section that is quoted, while cite is used to define a title.

QUIZ: The Quote Section
Build the correct HTML structure to display text from the SoloLearn website and show it as the source.

```
<blockquote>
  <p>Learn Playing, Play Learning</p>
  <cite>www.sololearn.com</cite>
</blockquote>
```

* The Quote section: Time to define the styles! 
* First, we need to reset the padding/margin of the blockquote element 
* since the browsers have some default values for them.
* We also define the font sizes and margins for the elements.
* Last but not least, we use the :before selector to set a dash before the cite element.
* We could have added the dash in the text of the cite tag, but this is a fancier way of doing the same thing.

QUIZ: The Quote Section
Fill in the blanks to add three stars *** before and after all div elements of the page.

```

div:before {
  content:"***";
}
div:after {
  content;"***";
}

```

### Building the Footer 
* The last section of a typical landing page is the footer. 
* Generally it has some type of menu and copyright info. 
* It is common practice to use a list for the menu items. 
* We have reused our container div to provide the necessary paddings and center alignment.
* Each of the menu links are contained in list items.
* The copyright text is a simple paragraph.
* By default, the list items are styled as a vertical bullet list. 
* We will change that style with CSS in the next part of this lesson.
* HTML Example:

```
<footer>
  <div class="container">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contacts</a></li>
    </ul>
    <p>&copy; All rights reserved.</p>
  </div>
</footer> 

```

* CSS Example: 

```
footer {
    background: #353535;
    padding: 32px 0;
    text-align: center;
    color: #868686;
}
.container {
    margin: 0 auto;
    padding: 0 20px 0 20px;
    max-width: 900px;
}

```
* [course basic footer template example](https://www.sololearn.com/learning/1162/4808/12347/1)

Quiz: Building the Footer 
Fill in the blanks to create a list of items.

```
<ul>
   <li>One</li>
   <li>Two</li>
   <li>Three</li>
</ul>

```

* To make the menu list horizontal and remove the bullets, we used list-style: none; for the ul element.
* We also set display: inline-block; 
* for the list items to make them inline-level element containers 
* and so they are positioned next to each other horizontally.
* The rest of the styles are simple text and background colors, as well as text sizes.
* Run the code to see the result. 
* [We have completed building the desktop version of our landing page!](https://www.sololearn.com/learning/1162/4808/12354/1)
* However, while it always occupies the entire width of the browser, 
* it is not really responsive, as the layout remains the same for smaller screens 
* and is not very mobile-friendly.
* We will make it responsive in the next module! 

### Module Quiz
1. Building The Footer
Fill in the blanks to align the list items to the left, position them below each other, and remove the bullet point.

```

ul {
  margin: 0;
  padding: 0;
  list-style:none;
  text-align:left;
}

```

2. Define the correct styles for the ul and li elements to arrange the list elements next to each other horizontally without any bullet points.

```

ul {
  list-style:none;
}

li {
  display:inline;
}

```

3. Your HTML page has 2 div elements with the ids "left" and "right". Define the correct CSS styles to make the "left" div take 60% of the page, and the "right" div 40% of the page.

```

# left {
  display: inline-block;
  width: 60%; 
}

# right {
  display: inline-block;
  width: 40% 
}

```

4. Your HTML includes 3 div elements with some content.  Define the correct style to make the divs arrange horizontally next to each other, instead of being on separate lines. Also, define a 1px wide green border for the divs.

```

div {
  display:inline-block;
  border:1px solid green;
}

```


5. What will be the total width of the following div?

```

div {
  width:100px;
  padding:10px;
  margin:5px;
}

```

Choices: 110px, 130px, 100px, 120px. 
My Answer: 120 px. 


![result](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/2021-04-12-quiz-results.png)


## Make it Responsive 
* Having completed the main content styling, now we move onwards to make the template we're creating more mobile friendly. 

### The Viewport 
* Before we start making our landing page responsive, we need to cover a few concepts.
* The first concept is the viewport: the visible area of a web page.
* Usually, a web page with a fixed width becomes too large to fit the viewport on a small screen, 
* such as a mobile device or tablet. 
* To fix this, browsers on those devices scaled down the entire web page to fit the screen.
* You can control the viewport of your web pages. 

QUIZ: Viewport 
What is the view port? 
  - the invisible area of a web page 
  - a mobile-friendly website
  - the visible area of a web page (correct answer)
  - an HTTP port

* You can control your viewport in HTML5 using a meta tag:
* HTML example:

```
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
```
* width=device-width sets the width of the page to follow the screen-width of the device.
* initial-scale=1.0 sets the initial zoom level when the page is first loaded by the browser.
* You can also use custom values for the viewport tag, 
* however in most cases it is recommended you use the defaults by applying the device-width value.

Quiz: Viewport
Fill in the blanks to define a default viewport, which takes the whole width of the screen and sets the zoom level to 1.0.

```
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

_Unless the course goes into this in greater depth, later, I find this discussion is MISSING an important detail--this should be a part of the HTML header tags (not the body) and it is standard practie to include this right after the <!HTML... statement._

### Media Queries 
* Media queries provide the ability to specify different CSS styles for different widths of the viewport, 
* or other specifications.
* This makes it possible for a web page to define different layout styles for different screen sizes
* and make the page responsive!
* You define a media query using the @media rule inside of your existing style sheet:
*  CSS CODE EXAMPLE: 

```
@media screen and (max-width: 600px) {
   body {
     background-color: blue;
   }
}
```
 
* The @media rule is followed by the media type we are targeting 
* (the screen in our case) 
* and sets the condition when the rules apply 
* (max-width:600px in our case).
* So now, the style will apply if the page has a width up to 600px.

QUIZ: Media Queries 
Define a media query for screen sizes up to 800px
```
@media screen and (max-width:800px) {...}
```

* You can also define multiple conditions, 
* for example a max and min width of the viewport:
* @media screen and (min-width: 800px) and (max-width: 1024px) {
* CSS Code Example: 
```
   body {

     background-color: blue;

  }

}  
```

* Now the style will apply for screen sizes from 800 to 1024px.
* You can also define multiple media queries for a single web page.
* Media queries allow you to define breakpoints when the page layout 
* and style should change, 
* as well as define the corresponding CSS styles for these breakpoints.

Quiz: Media Queries
What will be the color of a paragraph of text on a 800px screen using the following styles?


```
p {

  color: red;

}

@media screen and (max-width: 1024px) {

p {

  color: blue;

}

}
```
My Answer: Blue. 


### Responsive Header 
https://www.sololearn.com/learning/1162/4817/12358/1
* Now, that we know how to define CSS styles for different screen sizes, 
* we can start making our landing page responsive!
* A typical breakpoint for a mobile screen is 480px width.
* Let's define the viewport and empty media query target for our landing page:
* We will create separate styles for our sections when the screen size is lower than 480px in width.
* 480px is the typical breakpoint for mobile devices.


Quiz: Responsive Header
Create a media query to target screens with width 480px up to 800px.
```
@media screen and (min-width:480px) and (max-width:800px) {
...
]
```


### Reponsive Features 
* On a mobile screen we want to change the text-size of our header texts 
* and make the Download Now button span the entire width of the container.
* To accomplish this, we define the corresponding styles in our media query:
* As you can see, we changed some font-size properties, 
* changed the paddings of the section container, 
* and changed the button's display property to block, 
* making it a block level element which takes the whole width of its container.

![The result on a mobile screen:](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/screenshot-course-example-different-screen-sizes.png)

* Note, that we do not need to redefine the whole style for the elements in the media query. 
* We only need to define the style we want to change.

Quiz: 

### Responsive Quote and Footer 
What is the font-size of the button on a 800px screen?
```
button {

  font-size: 18px;

}

@media screen and (min-width: 480px) {

  button {

    font-size: 16px;

  }

}
```
My Answer: 16px

* Time to make the features section responsive!
* It currently includes 3 features aligned next to each other.
* On a small screen we want to place them horizontally, 
* with each feature taking the entire width of the container.
* Here is the style that we will use in our media query:
* We changed the width of each feature div to 100% and set the display property to flex 
* which makes the div a flexbox container. 
* This allows us to position the child features horizontally 
* and also set the alignment of its child elements -- the icon and the text -- 
* using the align-items and justify-content properties.
* We also set the width of the icons and defined some margins. 
* Now, the features will be aligned next to each other on larger screens 
* and under each other on smaller screens.

Quiz: Responsive Features 
to create a flexbox layout, you need to set display: flex, on: 

Choices: the head element; the child elements; the meta element; the parent container. 
My Answer: The Parent container. 

* Flexbox
* The flexbox layout model allows to create flexible layouts easily, 
* without the need to use CSS positioning and floats.
* Let's demonstrate how it works using a simple example:
* 
```

<div class="container">
  <div>A</div>
  <div>B</div>
  <div>C</div>
</div>  

```

* To use flexbox, we first define a container 
* and set its display property to flex.

```

.container {
  display: flex;
}

```

* Now, we can play around with the alignments of the child div elements 
* using flexbox properties:
* This will make all child elements ahve the same width
* flex:1
* and fill the enitre containder width
* you can read more about flexbox here: [A complete guide to flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)

* HTML
```
<div class="container">
    <div>A</div>
    <div>B</div>
    <div>C</div>
</div>
```
* CSS
```
.container {
  display: flex;
  align-items: stretch;
}
.container div {
  background-color: red;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px; 
  flex: 1;
}
```
https://www.sololearn.com/learning/1162/4818/12361/1

Quiz: Flexbox
A container div encloses multiple child divs.

What is the width of the div with id="test" if the div with id="one" is 100px in width?

The following CSS is used for the divs.
```
.container {

display: flex;

align-items: stretch;

}

.container #one {

flex: 1;

}

.container #test {

flex: 2;

}
```
My Answer:  200 px 

* Responsive Quote
* For our quote section, we will just change the text size and some paddings:
* We don't need to change the position of the section elements, as they are already aligned to the center of the screen. 
* Run the code to see the result. https://www.sololearn.com/learning/1162/4819/12362/1

Quiz: Responsive quote 
Fill in the blanks to define a padding style that sets the left padding to 15px, the right padding to 5px, and the top and bottom paddings to 0.
```
padding: 0 5px 0 15px;
```

* Responsive Footer
* Last, but not least, we need to change our footer section.
* We need to position the menu links below each other:
* The display:block; style makes the list items block level elements 
* so they take the entire width of their container. 
* This makes the items align under each other: 

![screenshot-example](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/footer-example.png)


* Now our landing page is fully responsive, having different layouts for mobile and desktop screens. 
* Customize the landing page, add more sections and breakpoints, and share your creation in the comments section below!

Quiz: Responsive Footer 
by default, inline elements are positioned: _next to each other_

### CSS Units
https://www.sololearn.com/learning/1162/4814/12364/1
* An important part of our layout was not using any fixed units for our widths.
* We used percentage values, which made the elements span relative to the width of their parents.
* This approach allows elements to be more flexible, 
* which is essential when putting together a responsive design.
* CSS also allows you to define relative unit sizes for font-sizes:
* The em unit size will be relative to the parent's font-size.
* For example, if our page's body has a font size of 16px, using 1.5em will be equal to 24px (16*1.5):
* This is useful because when you have to change the font-size, you need to change it only on the top parent.
* All child elements will get the corresponding relative size from it using the em units. 
* However, when you define all sizes using em, you would be hit by a cascading effect. 
* In this situation, you have many nested elements which use font-sizes 
* relative to their corresponding parents,
* which results in hard-to-control unit sizes.

Quiz: CSS Units
What is the font size of a paragraph, that is inside a div element using the following CSS?

```
body {
  font-size: 10px;
}

div {
  font-size: 0.5em; 
}

p {
  font-size: 3em;
}
```
My Answer: 15 px. 

* rem
* Another relative unit is rem. 
* It stands for Root Em, 
* meaning that it only looks at the font-size of the root element, 
* which is the html element.
* This makes it easier to use than em.
* Let's change the font-sizes of our landing page to rem units:
* We set the html elements font-size to 16px and used that to set all the other font-sizes using rem.
* You can also use relative CSS units for margins and paddings.

Quiz: rem
Fill in the blanks to set the font-size of the "test" element to 16px using rem units.
```
html {
  font-size: 8px;
}

#test {
  font-size: 2rem;
}
```

### Module Quiz 

1. Create a media query to target screens up to 800px in width.
```
@media screen and (max-width:800px) {
...
}
```

2. Values defined using "rem" units are relative to the: _html element_

3. Fill in the blanks to make the "section" element a flexbox container.
```
section {
  display:flex;
}
```

4. Which tag is used to define the viewport?  _meta_

5. True/False: You can define a padding using the rem unit.  _True_

![results](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/quiz-results2021-04-12.png)

## Adding JavaScript and JQuery 
* last unit in this course...

###  Adding a Submenu
* Modern websites include interactive elements and animations, 
* which improve the user experience and aesthetics.
* Let's add a submenu to our responsive landing page that will open 
* and close when tapping on the Download Now button.
* Our submenu will be responsive as well -- it will appear over elements on desktop, 
* and will push down the elements when on mobile. 
* The submenu will open when you tap on the Download Now button.

![desktop-example](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/example-dropdown-menu-desktop.png)

![mobile-example](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/example-dropdown-menu-menu.png)

Submenu Quiz:
Fill in the blanks to create a link to "www.sololearn.com".
```
<a href="https://www.sololearn.com">  Click me </a>
```

* We start by creating the submenu using HTML/CSS.
* Our submenu will be a simple div element with links inside our header's container div:
* HTML code example:
```

<div class="submenu">
   <a href="#">Link 1</a>
   <a href="#">Link 2</a>
</div> 

```

* Then, we will style it using CSS:
```
.submenu {
    left: 50%;
    transform: translate(-50%, 0);
    text-align:center;
    position: absolute;
    background-color: #549DA0;
    min-width: 160px;
    border-radius: 5px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.submenu a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.submenu a:hover {
    background-color: #468486;
}
```
* We used a CSS hack in order to position our submenu in the center of the screen. 
* The combination of absolute positioning, using the left and transform property, 
* results in our submenu being positioned in the center of the screen 
* and opened over the page elements. 
* We also used display: block; for our links, to make them behave as block-level elements.

QUIZ: A submenu 
Where will the following div get positioned?
```
div {

    position: absolute;

    bottom: 0;

    right: 0;

}
```
Answer:  bottom right corner

* to finish work on our submenu, now it is time to use CSS in our media query.
* We need to make the submenu wider and push down the page, instead of opening it over the elements.
* We only need to change the width and the position property of the submenu. 
* Currently, the submenu is always open. We will add the open/close animation in the next lesson.

Quiz: A Submenu 
Position the element with the id="test" to the top right corner of its parent. 
```
# test {
  position:absolute;
  top:0;
  right:0;
}
```

###  Adding an Animation
https://www.sololearn.com/learning/1162/4812/12454/1
* Let's use JavaScript to open/close the submenu when the button is tapped.
* Since we want to open the submenu using a nice sliding animation,
* we will use the JQuery library, which supports simple animations.
* We start by including jQuery in our page:
```
<head>
  <title>App Landing Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head> 
```
* We used the script tag to import the jQuery library.
* jQuery is a fast, small, and feature-rich JavaScript library.
* It makes things like HTML document traversal and manipulation, event handling, 
* and animation much simpler.
* Learn more with our [jQuery Tutorial](https://www.sololearn.com/learning/1082).
* Helped out with [course deadlink](https://www.sololearn.com/Discuss/2753255/404-error-in-responsive-course-link-update-needed)

Quiz: Animation
What is the file extension of the jQuery library?  _.js_

* I had questions about this, so I did some googling about typical file extensions. 


      All jQuery code is JavaScript, but jQuery doesn't include all the JavaScript code. 
      One thing you should understand is that they are not two programming languages; 
      instead, they both are JavaScript. jQuery is just optimized to do the common 
      scripting functions with fewer lines of code

* Also, found a nifty artcile about discovering file extension types: https://www.encodedna.com/2014/02/find-the-file-extension-using-javascript-jquery.htm 
* https://stackoverflow.com/questions/14852090/jquery-check-for-file-extension-before-uploading 
* https://code.jquery.com/jquery-3.6.0.js

* Animation:
* We need to handle the click event of our button, which should open and close our submenu.
* We will use the slideToggle() method, which switches between visible
* and invisible states of the element selected using a slide animation:
```
$(function() {
    $(".btn").click(function() {
        $(".submenu").slideToggle(500);
    });
}); 
```
* In the .js code above, we handled the click event of out .btn, 
* selected the .submenu element and opened/closed it 
* using the slideToggle method, providing 500ms for the animation speed.
* Now, the only thing left is to hide the submenu by default:
* https://www.sololearn.com/learning/1162/4812/12455/1 
* We have a fully functional submenu, which uses a slide animation.
* Customize the code and create your own unique animations and effects!
* Share your creation in the comments section below.

Quiz: Animation
Fill in the blanks to ahndle the click event of the ".download" button 
```
$(".download").click(function() {
  alert("Clicked");
});
```

###  Summary 

Congratulations, you have completed our Responsive Web Design Course!

Here are some of the most common practices to follow when building a responsive web page:
- Use relative units (such as percentages) for the sizes of the elements and fonts.
- Use CSS media queries to define breakpoints and layout changes.
- Define the viewport to adapt to mobile screens.
- Use CSS Flexbox to make it easier to create flexible layouts.

Always test your page using different browser widths; you can resize your browser to see how your page adapts to the new width.

Modern browsers also support emulating a mobile device screen size, which makes it easy to test using predefined widths.


![congrats](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/2021-04-12-Finished.png)

###  Module Quiz 
1. Which of the following allows you to specify when certain CSS rules should be applied? _media queries_

2. Using JQuery, fill in the blanks to show an alert message when the document is ready. 

```
$(function(){
  alert("Hey");
});
```

3. Which tag is used to include the JQuery library? _script_

4. Using JQuery, fill in the blanks to call the show() function for the element with the id="test".

```
$("#test").show();
```

5. What is flexbox?  _A CSS layout model_

![finished](https://github.com/EO4wellness/T-I-L/blob/main/HTML/SoloLearn/images/EO4Wellnes_SoloLearn_Responsive_course-completion.png)

## [Certification](https://www.sololearn.com/Certificate/1162-15619122/jpg)

![certified](https://www.sololearn.com/Certificate/1162-15619122/jpg)
