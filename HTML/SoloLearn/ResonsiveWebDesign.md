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

### Building the Header
https://www.sololearn.com/learning/1162/4804/12336/1

### Styling the Button 
### Building the Features Section 
### The Quote Section 
### Building the Footer 
### Module Quiz

## Make it Responsive 
### The Viewport 
### Media Queries 
### Responsive Header 
### Reponsive Features 
### Responsive Quote and Footer 
### CSS Units
### Module Quiz 

## Adding JavaScript and JQuery 
###  Adding a Submenu
###  Adding an Animation
###  Summary 
###  Module Quiz 

## Certification 
