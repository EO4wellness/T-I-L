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


Bootstrap uses a responsive 12-column grid system, which makes it easy to put elements into rows and specify each element's relative width. Most of Bootstrap's classes can be applied to a div element.

Bootstrap has different column width attributes that it uses depending on how wide the user's screen is. For example, phones have narrow screens, and laptops have wider screens.

Take for example Bootstrap's col-md-* class. Here, md means medium, and * is a number specifying how many columns wide the element should be. In this case, the column width of an element on a medium-sized screen, such as a laptop, is being specified.

In the Cat Photo App that we're building, we'll use col-xs-*, where xs means extra small (like an extra-small mobile phone screen), and * is the number of columns specifying how many columns wide the element should be.

Put the Like, Info and Delete buttons side-by-side by nesting all three of them within one <div class="row"> element, then each of them within a <div class="col-xs-4"> element.

The row class is applied to a div, and the buttons themselves can be nested within it.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/09_use-the-bootstrap-grid-to-put-elements-side-by-side.html)


## [10-Ditch Custom  CSS for Bootstrap](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/ditch-custom-css-for-bootstrap)

We can clean up our code and make our Cat Photo App look more conventional by using Bootstrap's built-in styles instead of the custom styles we created earlier.

Don't worry - there will be plenty of time to customize our CSS later.

Delete the .red-text, p, and .smaller-image CSS declarations from your style element so that the only declarations left in your style element are h2 and thick-green-border.

Then delete the p element that contains a dead link. Then remove the red-text class from your h2 element and replace it with the text-primary Bootstrap class.

Finally, remove the smaller-image class from your first img element and replace it with the img-responsive class.


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/10_ditch-custom-css-for-bootstrap.html)

## [11-Use a span to Target Inline Elements](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/use-a-span-to-target-inline-elements)

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

We will make a simple heading for our Cat Photo App by putting the title and relaxing cat image in the same row.

Remember, Bootstrap uses a responsive grid system, which makes it easy to put elements into rows and specify each element's relative width. Most of Bootstrap's classes can be applied to a div element.

Nest your first image and your h2 element within a single <div class="row"> element. Nest your h2 element within a <div class="col-xs-8"> and your image in a <div class="col-xs-4"> so that they are on the same line.

Notice how the image is now just the right size to fit along the text?


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/12-create-a-custom-heading.html)
    
    
## [13-Add Font Awesome Icons to our Buttons](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/add-font-awesome-icons-to-our-buttons)


Font Awesome is a convenient library of icons. These icons can be webfonts or vector graphics. These icons are treated just like fonts. You can specify their size using pixels, and they will assume the font size of their parent HTML elements.

You can include Font Awesome in any app by adding the following code to the top of your HTML:

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

In this case, we've already added it for you to this page behind the scenes.

The i element was originally used to make other elements italic, but is now commonly used for icons. You can add the Font Awesome classes to the i element to turn it into an icon, for example:

<i class="fas fa-info-circle"></i>

Note that the span element is also acceptable for use with icons.

Use Font Awesome to add a thumbs-up icon to your like button by giving it an i element with the classes fas and fa-thumbs-up. Make sure to keep the text Like next to the icon.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/14_add-font-awesome-icons-to-all-of-our-buttons.html)
    
## [14-Add Font Awesome Icons to ALL our Buttons](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/add-font-awesome-icons-to-all-of-our-buttons)   

Font Awesome is a convenient library of icons. These icons can be web fonts or vector graphics. These icons are treated just like fonts. You can specify their size using pixels, and they will assume the font size of their parent HTML elements.

Use Font Awesome to add an info-circle icon to your info button and a trash icon to your delete button.

Note: The span element is an acceptable alternative to the i element for the directions below.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/14_add-font-awesome-icons-to-all-of-our-buttons.html) 
    
## [15-Responsively Style Radio Buttons](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/responsively-style-radio-buttons)

You can use Bootstrap's col-xs-* classes on form elements, too! This way, our radio buttons will be evenly spread out across the page, regardless of how wide the screen resolution is.

Nest both your radio buttons within a ```<div class="row"> ```element. Then nest each of them within a ```<div class="col-xs-6">``` element.

Note: As a reminder, radio buttons are input elements of type radio.
```
    All of your radio buttons should be nested inside one div with the class row.

Each of your radio buttons should be nested inside its own div with the class col-xs-6.

All of your div elements should have closing tags.
```
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/15_responsively-style-radio-buttons.html)
    
## [16-Responsively Style Checkboxes](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/responsively-style-checkboxes)

Since Bootstrap's ```col-xs-* ``` classes are applicable to all form elements, you can use them on your checkboxes too! This way, the checkboxes will be evenly spread out across the page, regardless of how wide the screen resolution is.

Nest all three of your checkboxes in a ```<div class="row">``` element. Then nest each of them in a ```<div class="col-xs-4"> ``` element.

    
```
    All of your checkboxes should be nested inside one div with the class row.

Each of your checkboxes should be nested inside its own div with the class col-xs-4.

All of your div elements should have closing tags.
```
    
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/16_responsively-style-checkboxes.html)
    
## [17-Style Text Inputs as Form Controls](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/style-text-inputs-as-form-controls)

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/17_style-text-inputs-as-form-controls.html)
    
You can add the fa-paper-plane Font Awesome icon by adding ```<i class="fa fa-paper-plane"></i> ``` within your submit button element.

Give your form's text input field a class of form-control. Give your form's submit button the classes ```btn btn-primary```. Also give this button the Font Awesome icon of ```fa-paper-plane```.

All textual ```<input>, <textarea>, and <select>``` elements with the class ```.form-control``` have a width of 100%.

## [18-Line up Form Elements Responsively with Bootstrap](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/line-up-form-elements-responsively-with-bootstrap)
  
Now let's get your form input and your submission button on the same line. We'll do this the same way we have previously: by using a div element with the class row, and other div elements within it using the col-xs-* class.

Nest both your form's text input and submit button within a div with the class row. Nest your form's text input within a div with the class of col-xs-7. Nest your form's submit button in a div with the class col-xs-5.

This is the last challenge we'll do for our Cat Photo App for now. We hope you've enjoyed learning Font Awesome, Bootstrap, and responsive design!
  
```
Your form submission button and text input should be nested in a div with class row.

Your form text input should be nested in a div with the class col-xs-7.

Your form submission button should be nested in a div with the class col-xs-5.

All of your div elements should have closing tags. 
```
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/18_line-up-form-elements-responsively-with-bootstrap.html)
    
## [19-Create a Bootstrap Headline](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/create-a-bootstrap-headline)  

Now let's build something from scratch to practice our HTML, CSS and Bootstrap skills.

We'll build a jQuery playground, which we'll soon put to use in our jQuery challenges.

To start with, create an h3 element, with the text jQuery Playground.

Color your h3 element with the text-primary Bootstrap class, and center it with the text-center Bootstrap class.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/19_create-a-bootstrap-headline.html)
    
## [20-House our page within a Bootstrap container-fluid div](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/house-our-page-within-a-bootstrap-container-fluid-div)
House our page within a Bootstrap container-fluid div

Now let's make sure all the content on your page is mobile-responsive.

Let's nest your h3 element within a div element with the class container-fluid.
```
Your div element should have the class container-fluid.

Each of your div elements should have closing tags.

Your h3 element should be nested inside a div element. 
```    
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/20_house-our-page-within-a-bootstrap-container-fluid-div.html)
    
    
## [21 Create a Bootstrap Row](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/create-a-bootstrap-row)
    
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/bootstrap/20_house-our-page-within-a-bootstrap-container-fluid-div.html)
    
## [22-Split Your Bootstrap Row](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/split-your-bootstrap-row)


Now that we have a Bootstrap Row, let's split it into two columns to house our elements.

Create two div elements within your row, both with the class col-xs-6.

[My Code]()
                 
## [23-Create Bootstrap Wells](https://www.freecodecamp.org/learn/front-end-development-libraries/bootstrap/create-bootstrap-wells)

[My Code]()  
    
## [24-Add Elements within Your Bootstrap Wells]()

[My Code]()    
                 
## [25-Apply the Default Bootstrap Button Style]()

[My Code]()
                 
## [26-Create a Class to Target with jQuery Selectors]()

[My Code]()
    
                 
## [27-Add id Attributes to Bootstrap Elements]()

[My Code]()
                 
## [28-Label Bootstrap Wells]()

[My Code]()
                 
## [29-Give Each Element a Unique id]()

[My Code]()
    
                 
## [30-Label Bootstrap Buttons]()

[My Code]()
    
                 
## [31-Use Comments to Clarify Code]()

When we start using jQuery, we will modify HTML elements without needing to actually change them in HTML.

Let's make sure that everyone knows they shouldn't actually modify any of this code directly.

Remember that you can start a comment with <!-- and end a comment with -->

Add a comment at the top of your HTML that says Code below this line should not be changed
```  
You should start a comment with <!-- at the top of your HTML.

Your comment should have the text Code below this line should not be changed.

You should close your comment with -->.

You should have the same number of comment openers and closers.
```
[My Code]()    
