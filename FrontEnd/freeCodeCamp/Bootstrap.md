# Bootstrap 
* Begin studies: 9/9/2021
* 31 Units of study in this section 

## Introduction: 
Bootstrap is a front end framework used to design responsive web pages and applications. It takes a mobile-first approach to web development, and includes pre-built CSS styles and classes, plus some JavaScript functionality.

In this course, you'll learn how to build responsive websites with Bootstrap, and use its included classes to style buttons, images, forms, navigation, and other common elements.


# Units of Study: 

## [01 Use Responsive Design with Bootstrap Fluid Containers](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/use-responsive-design-with-bootstrap-fluid-containers)

In the HTML5 and CSS section of freeCodeCamp we built a Cat Photo App. Now let's go back to it. This time, we'll style it using the popular Bootstrap responsive CSS framework.

Bootstrap will figure out how wide your screen is and respond by resizing your HTML elements - hence the name responsive design.

With responsive design, there is no need to design a mobile version of your website. It will look good on devices with screens of any width.

You can add Bootstrap to any app by adding the following code to the top of your HTML:
```
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
```

In this case, we've already added it for you to this page behind the scenes. Note that using either > or /> to close the link tag is acceptable.

Code Assignment: 
To get started, we should nest all of our HTML (except the link tag and the style element) in a div element with the class container-fluid.

When I went to do this assignment, I quickly realized: 
1.  I can still read code (this code given)
2.  I forgot the syntax for classes in HTML.  
3.  So I looked it up and succeeded in coding the assignment. 
    [div class](https://www.w3schools.com/html/html_classes.asp).

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/01_use-responsive-design-with-bootstrap-fluid-containers.html)


## [02 Make Images Mobile Responsive](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/make-images-mobile-responsive)


First, add a new image below the existing one. Set its src attribute to https://bit.ly/fcc-running-cats.

It would be great if this image could be exactly the width of our phone's screen.

Fortunately, with Bootstrap, all we need to do is add the img-responsive class to your image. Do this, and the image should perfectly fit the width of your page.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/02_make-images-mobile-responsive.html)

## [03 Center Text With Bootstrap](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/center-text-with-bootstrap)

Now that we're using Bootstrap, we can center our heading element to make it look better. All we need to do is add the class text-center to our h2 element.

Remember that you can add several classes to the same element by separating each of them with a space, like this:
```
<h2 class="red-text text-center">your text</h2>
```

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/03_center-text-with-bootstrap.html)\

## [04-Create a Bootstrap Button](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/create-a-bootstrap-button)

Bootstrap has its own styles for button elements, which look much better than the plain HTML ones.

Create a new button element below your large kitten photo. Give it the btn and btn-default classes, as well as the text of Like.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/04_create-a-bootstrap-button.html)

## [05-Create a Block Element Bootstrap Button](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/create-a-block-element-bootstrap-button)
