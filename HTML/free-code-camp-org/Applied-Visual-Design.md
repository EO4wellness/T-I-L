# Applied Visual Design
* This is part 3 of the Responsive Web Design Certification FreeCode Camp program. 
* this is the next segment after [Basic CSS](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/basic-css.md) studies
* this segment has 52 skills within it 
* Beginning this study of portion of the Design course on Jan 24, 2021. 

## Introduction to the Applied Visual Design Challenges
* Visual Design is a broad topic in web development. 
* Visual design encompasses: graphics, typography, color theory, animation, and apge layout all intended to deliver content (the site's message)
( 
most web content provides the users with information 
\

## Create Visual Balance Using the text-align Property
* Text is often a larger part of the web content. 
* CSS has many options how to align text. 
* 

    text-alight propery 
    text-align: justify 
    text-align: center;
    text-align: left; 

* Code Assignment alight H4 to center 
      justify the P tag

## Adjust the Width of an Element Using the width Property
* CSS can be adjusted by using a WIDTH property.
* Width values can be either relative length or aboslute length.
* An example of relative length is using "em" 
* An example of absolute length is PX or Pixels
* You can set the width to a percentage (absolute length) of the parent element it is in 
* Example code: 

        img {
            width: 220 px;
        }
        

* Code Assignment: set the width property to the FULL CARD class element to 245 pixels.

## Adjust the Height of an Element Using the height Property
* like width, above, you can also set the height.
* this can be set within CSS
* Example:

        img {
            height: 20px;
        }

* Code Assignment: add height property to the H4 tag and set it to 25 pixels. 


## Use the strong Tag to Make Text Bold
* Use the STRONG tag to make text appear bold. 
* BOLD text is often used to draw attention to text
* BOLD text generally symbolizes it is important.
* thus, don't over use it
* with the STRONG tag, the browser applies CSS of 
font-weight: bold; to the element 
* Code Assignment: wrap a strong tag around "Stanford University" inside the "p" tag. 

## Use the u Tag to Underline Text
* the U tag is used when you want underlined text
* primarily used to show that some section of text is important or should be remembeed 
* U tag - the browser applies the CSS of 
        text-decoration: underline; 
        to the element
* Avoid use of the U element when and where it could be confused as a link. 
* Code Assignment : Wrap the U tag around the trext "Ph.D. students"

## Use the em Tag to Italicize Text
* If you need to emphasize text, you can use the EM tag.
* Text with the EM tag will display as italicized.
* the browser applies CSS of 'font-style: italic;' to the element 
* Code Assignment: wrap an em tag around the contents within the P tags

## Use the s Tag to Strikethrough Text
* strikethrough text is when a horizontal line cuts across the text characters. 
* it is often used to strike out old information, or show what's changed (such as edits, or when a deadline has passed).
* use the S tag to cause strikethrough text
* the browser applies CSS of 'text-decoration: line-through'
* Code Assignment: but the S tag around Google in the H4 element.  Then add "Alphabet" beside it. 

## Create a Horizontal Line Using the hr Element
* use the HR tag to add a horizontal line
* the line will run across the width of its containing element
* this may indicate a change in topic
* it can also be used graphically to make a visually distinction between groups of content. 
* an HR tag is SELF closing
* Code Assignment: Add an HR tag underneath the H4 element 

## [Adjust the background-color Property of Text](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/adjust-the-background-color-property-of-text)
* you can add "background-color" to any element holding text to emphasize the text. 
* this uses RGBA () 
* the other color formats we previously learned, to rreview, are HEX coses or RGB ()
* RGBA stands for:
    
        r=red
        g=green
        b=blue
        a=alpha/level of opacity 
* RGB values, to review, can range from 0 to 255.
* alpha value can range from 1 (fully opaque, which is a solid color) to 0 (which is fully trnasparent, or see-thru)
* RGBA is good to use because you can let some of the background show thru by adjusting the "A" or opacity/transparency levels.
* Code Assignment-make the text stand out more by adjusting thre bacground-color of the H4 element to rgba value 

## [Adjust the Size of a Header Versus a Paragraph Tag](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/adjust-the-size-of-a-header-versus-a-paragraph-tag)
* Best design practice, includes the text of any header (so namely, H1 tru H6) should be larger than the font size of the paragraph tags in your document. 
* following this design principle, helps to make your design visiually able to be understood more easily, as well as lends its seslf to better read-a-bility 
* use the FONT-SIZE property to adjust the size of the text in an element.
* Code Assignment: To make the heading significantly larger than the paragraph, change the FONT-SIZE of the H4 tag to 27 pizels. 

## [Add a box-shadow to a Card-like Element](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/add-a-box-shadow-to-a-card-like-element)
* the BOX-SHADOW property applies one or more shadows to an element.
* the 'box-shadow' proeprty takes values for:
        
        offset-x (how far to push the shadow horizontally from the element)
        offset-y (how far to push the shadow vertically from the element)
        blur-radius 
        spread-radius
        color
* the 'box-shadow' property values are considered in the exact above order 
* multiple box-shadows can be created using commas to seperate the various properties of each of the different box-shadow elements. 
* Example: 

        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);

* Code Assignment 

## [Decrease the Opacity of an Element](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/decrease-the-opacity-of-an-element)
* use the 'opacity' CSS proterty to adjust opacity 
* this property can also adjust transparency of an item. 
* A value of 1 is opaque, which isn't transparent at all.
* A value of 0.5 is half see-through.
* A value of 0 is completely transparent.
* Code Assignment : set opacity of the anchor tags to 0.7 using LINKS class to slect them. 

## [Use the text-transform Property to Make Text Uppercase](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/use-the-text-transform-property-to-make-text-uppercase)
* TEXT-TRANSFORM property in CSS
* convenient way to make certain text on the page is consisten
* 'text-transform' values change

        VALUE               RESULT 
        lowercase           "transform me"
        uppercase           "TRANSFORM ME"
        capitalize          "Transform Me"
        initial             Use the default value 
        inherit             Use the 'text-transform' value from the parent element 
        none                Default: Use the original text
    
* Code Assignment: Make H4 uppercase via the Text-Transform proerty.

## [Set the font-size for Multiple Heading Elements](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/set-the-font-size-for-multiple-heading-elements)
* Code Assignment 

## Set the font-weight for Multiple Heading Elements
* Code Assignment 

## Set the font-size of Paragraph Text
* Code Assignment 

## Set the line-height of Paragraphs
* Code Assignment 

## Adjust the Hover State of an Anchor Tag
* Code Assignment 

## Change an Element's Relative Position
* Code Assignment 

## Move a Relatively Positioned Element with CSS Offsets
* Code Assignment 

## Lock an Element to its Parent with Absolute Positioning
* Code Assignment 

## Lock an Element to the Browser Window with Fixed Positioning
* Code Assignment 

## Push Elements Left or Right with the float Property
* Code Assignment 

## Change the Position of Overlapping Elements with the z-index Property
* Code Assignment 

## Center an Element Horizontally Using the margin Property
* Code Assignment 

## Learn about Complementary Colors
* Code Assignment 

## Learn about Tertiary Colors
* Code Assignment 

## Adjust the Color of Various Elements to Complementary Colors
* Code Assignment 

## Adjust the Hue of a Color
* Code Assignment 

## Adjust the Tone of a Color
* Code Assignment 

## Create a Gradual CSS Linear Gradient
* Code Assignment 

## Use a CSS Linear Gradient to Create a Striped Element
* Code Assignment 

## Create Texture by Adding a Subtle Pattern as a Background Image
* Code Assignment 

## Use the CSS Transform scale Property to Change the Size of an Element
* Code Assignment 

## Use the CSS Transform scale Property to Scale an Element on Hover
* Code Assignment 

## Use the CSS Transform Property skewX to Skew an Element Along the X-Axis
* Code Assignment 

## Use the CSS Transform Property skewY to Skew an Element Along the Y-Axis
* Code Assignment 

## Create a Graphic Using CSS
* Code Assignment 

## Create a More Complex Shape Using CSS and HTML
* Code Assignment 

## Learn How the CSS @keyframes and animation Properties Work
* Code Assignment 

## Use CSS Animation to Change the Hover State of a Button
* Code Assignment 

## Modify Fill Mode of an Animation
* Code Assignment 

## Create Movement Using CSS Animation
* Code Assignment 

## Create Visual Direction by Fading an Element from Left to Right
* Code Assignment 

## Animate Elements Continually Using an Infinite Animation Count
* Code Assignment 

## Make a CSS Heartbeat using an Infinite Animation Count
* Code Assignment 

## Animate Elements at Variable Rates
* Code Assignment 

## Animate Multiple Elements at Variable Rates
* Code Assignment 

## Change Animation Timing with Keywords
* Code Assignment 

## Learn How Bezier Curves Work
* Code Assignment 

## Use a Bezier Curve to Move a Graphic
* Code Assignment 

## Make Motion More Natural Using a Bezier Curve
* Code Assignment 

## Final Thoughts 
