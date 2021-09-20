# [Bootstrap](https://www.freecodecamp.org/learn/front-end-development-libraries/#bootstrap)
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

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/03_center-text-with-bootstrap.html)

## [04-Create a Bootstrap Button](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/create-a-bootstrap-button)

Bootstrap has its own styles for button elements, which look much better than the plain HTML ones.

Create a new button element below your large kitten photo. Give it the btn and btn-default classes, as well as the text of Like.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/04_create-a-bootstrap-button.html)

## [05-Create a Block Element Bootstrap Button](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/create-a-block-element-bootstrap-button)
Normally, your button elements with the btn and btn-default classes are only as wide as the text that they contain. For example:

<button class="btn btn-default">Submit</button>

This button would only be as wide as the word Submit.

By making them block elements with the additional class of btn-block, your button will stretch to fill your page's entire horizontal space and any elements following it will flow onto a "new line" below the block.

<button class="btn btn-default btn-block">Submit</button>

This button would take up 100% of the available width.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/05_create-a-block-element-bootstrap-button.html)

## [06-Taste the Bootstrap Button Color Rainbow](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/taste-the-bootstrap-button-color-rainbow)


The btn-primary class is the main color you'll use in your app. It is useful for highlighting actions you want your user to take.

Replace Bootstrap's btn-default class with btn-primary in your button.

Note that this button will still need the btn and btn-block classes.

Your button should have the class btn-primary.

Your button should still have the btn and btn-block classes.

All your button elements should have closing tags.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/06_taste-the-bootstrap-button-color-rainbow.html)

## [07-Call out Optional Actions with btn-info](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/call-out-optional-actions-with-btn-info)

Bootstrap comes with several pre-defined colors for buttons. The btn-info class is used to call attention to optional actions that the user can take.

Create a new block-level Bootstrap button below your Like button with the text Info, and add Bootstrap's btn-info and btn-block classes to it.

Note that these buttons still need the btn and btn-block classes.

You should create a new button element with the text Info.

Both of your Bootstrap buttons should have the btn and btn-block classes.

Your new button should have the class btn-info.

NOTE: the criteria for this coding session said to make the button text say "info" 
however that didn't past the end-of-unit test (it must be a typo) 
what passed the test was switching the text to "Information" 

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/07_call-out-optional-actions-with-btn-info.html)

## [08-Warn your Users of a Dangerous Action](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/warn-your-users-of-a-dangerous-action-with-btn-danger)

Warn Your Users of a Dangerous Action with btn-danger

Bootstrap comes with several pre-defined colors for buttons. The btn-danger class is the button color you'll use to notify users that the button performs a destructive action, such as deleting a cat photo.

Create a button with the text Delete and give it the class btn-danger.

Note that these buttons still need the btn and btn-block classes.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/08_warn-your-users-of-a-dangerous-action-with-btn-danger.html)

## [09 - Use the Bootstrap Grid to Put Elements Side By Side](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/use-the-bootstrap-grid-to-put-elements-side-by-side)

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/09_use-the-bootstrap-grid-to-put-elements-side-by-side.html)


## [10-Ditch Custom  CSS for Bootstrap](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/ditch-custom-css-for-bootstrap)

We can clean up our code and make our Cat Photo App look more conventional by using Bootstrap's built-in styles instead of the custom styles we created earlier.

Don't worry - there will be plenty of time to customize our CSS later.

Delete the .red-text, p, and .smaller-image CSS declarations from your style element so that the only declarations left in your style element are h2 and thick-green-border.

Then delete the p element that contains a dead link. Then remove the red-text class from your h2 element and replace it with the text-primary Bootstrap class.

Finally, remove the smaller-image class from your first img element and replace it with the img-responsive class.


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/10_ditch-custom-css-for-bootstrap.html)

## [11-Use a span to Target Inline Elements]()

You can use spans to create inline elements. Remember when we used the btn-block class to make the button fill the entire row?

That illustrates the difference between an "inline" element and a "block" element.

By using the inline span element, you can put several elements on the same line, and even style different parts of the same line differently.

Using a span element, nest the word love inside the p element that currently has the text Things cats love. Then give the span the class text-danger to make the text red.

Here's how you would do this for the p element that has the text Top 3 things cats hate:
```
<p>Top 3 things cats <span class="text-danger">hate:</span></p>
```

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/11_use-a-span-to-target-inline-elements.html)


## [12- Create a Custom Heading](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/create-a-custom-heading) 


[My Code]()

## [13-]()

[My Code]()



