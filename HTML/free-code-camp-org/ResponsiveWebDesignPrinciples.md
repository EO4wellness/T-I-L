# [Responsive Web Design Principles](https://www.freecodecamp.org/learn/responsive-web-design/#responsive-web-design-principles)
* Began studies: 2021-03-07
* There are a wide variety of types of devices which can access the web.
* Responsive web design is the practice of designing flexible websites
* Flexible websites respond to the different screen sizes, orientations and resolutions
* responsive designs allow for the best exeprience for all users
* Completed studies: 2021-03-07

## [Create a Media Query](https://www.freecodecamp.org/learn/responsive-web-design/responsive-web-design-principles/create-a-media-query)
* Media Queries were added to CSS3.
* Media Queries allow us to display different content based on different VIEWPORT dimensions. 
* a VIEWPORT is the visible area of a web page on any given device (smart TV, laptop, smart phone, etc)
* Media Queries consist of Media Type 
* if the Media Type is matched, then the associated content is displayed. 
* you can have as many selectors and/or styles inside a media query as you want 
* @media (max-width: 100px) is an example of code which displays content on devices when the width of the device is less than or equal to 100px.
* Code Assignment: Add a media query, so that the p tag has a font-size of 10px when the device's height is less than or equal to 800px.

## [Make an Image Responsive](https://www.freecodecamp.org/learn/responsive-web-design/responsive-web-design-principles/make-an-image-responsive)
* to make an image responsive within CSS add these properties to the image:

            img {
               max-width: 100%;
               height: auto;
            }

* The max-width of 100% will make sure the image is never wider than the container it is in, and the height of auto will make the image keep its original aspect ratio.
* Code Assignment: 

Add the style rules to the responsive-img class to make it responsive. It should never be wider than its container (in this case, it's the preview window) and it should keep its original aspect ratio. After you have added your code, resize the preview to see how your images behave.


## [Use a Retina Image for Higher Resolution Displays](https://www.freecodecamp.org/learn/responsive-web-design/responsive-web-design-principles/use-a-retina-image-for-higher-resolution-displays) 
* Pixel Density is an aspect that could be different on one device from all others. 
* This density is known as Pixel Per Inch or PPI
* It can also be known as DPI or Dots per Inch 
* the most well known display is Retina Display of the Apple Macbook Pro Notebooks 
* High-Resolution display 
* it should not look pixelated 
* define images by thei width and height values to assure they dislay properly on Retina Image Display 
* Example: 

        <style>
              img { height: 250px; width: 250px; }
        </style>
        <img src="coolPic500x500" alt="A most excellent picture">

* Code Assignment: Set the width and height of the img tag to half of their original values. In this case, both the original height and the original width are 200px.

## [Make Typography Responsive](https://www.freecodecamp.org/learn/responsive-web-design/responsive-web-design-principles/make-typography-responsive)
* Instead of using em or px to size text, you can use viewport units for responsive typography. 
* Viewport units, like percentages, are relative units, but they are based off different items. 
* Viewport units are relative to the viewport dimensions (width or height) of a device, 
* and percentages are relative to the size of the parent container element.
* The four different viewport units are:

       vw (viewport width): 10vw would be 10% of the viewport's width.
       vh (viewport height): 3vh would be 3% of the viewport's height.
       vmin (viewport minimum): 70vmin would be 70% of the viewport's smaller dimension (height or width).
        vmax (viewport maximum): 100vmax would be 100% of the viewport's bigger dimension (height or width).
* Here is an example that sets a body tag to 30% of the viewport's width.

              body { width: 30vw; }

* Code Assignment: Set the width of the h2 tag to 80% of the viewport's width and the width of the paragraph as 75% of the viewport's smaller dimension.

## Completed Studies:
![finished](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/2021-03-07_finished-course-segment.jpg)

Free Code Camp's Responsive Web Design Cetification Course Nav: 

[Basic HTML and HTML5](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org#basic-html-and-html5) | [Basic CSS](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/basic-css.md) | [Applied Visual Design](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Visual-Design.md) | [Applied Accessiblity](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Accessibility.md) | [Responsive Web Design Principles](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/ResponsiveWebDesignPrinciples.md) | [CSS Flexbox](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Flexbox.md) | [CSS Grid](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Grid.md) | [Responsive Web Design Projects](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Responsive%20Web%20Design%20Projects.md) | [Code Exercise Solutions](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org/exercise-solutions)


Next: [CSS Flexbox](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Flexbox.md) 
