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
* FONT-SIZE proerpty is used to specify how large the text is for any given element. 
* helps with visual consistency of the page. 
* you can set H1 thru H6 to balance the heading styles. 
* Code Assignment: In the style tags, set the font-size of the:

    h1 tag to 68px.
    h2 tag to 52px.
    h3 tag to 40px.
    h4 tag to 32px.
    h5 tag to 21px.
    h6 tag to 14px.



## [Set the font-weight for Multiple Heading Elements](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/set-the-font-weight-for-multiple-heading-elements)
* there is a FONT-SIZE which can be also set, like FONT-WEIGHT was

* Code Assignment: Set the various elements of the H1 thru H6 tags to the weights specified in the exercise. 

## [Set the font-size of Paragraph Text](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/set-the-font-size-of-paragraph-text)
* FONT-SIZE isn't just limited to headings.
* in CSS FONT-SIZE can be added to any element containing text. 
* Code Assignment: change font-size for the paragraph to 16 px. 

## Set the line-height of Paragraphs
* CSS offers LINE-HEIGHT peropty
* this changes the hieght of each line in a block of text 
* changes the amount of vertical space that each line of text gets.
* Code Assignment: add a 'line-height' propertyt to the P tag and set it to 25 px. 

## Adjust the Hover State of an Anchor Tag
* this is use of a "pseudo-class"
* a psuedo-class is a keyword that can be added to selectors in order to select a specific state of the element.
* as an example, an anchor tag, can be changes for its hover state using the :hover pseudo-class selector
* Example:  this use of a HOVER psuedo class selector within an anchor changes the color of the link.

            a:hoover {
                color: red;
            }
            
* Code Assignment: the code editor has a css rule to style all A tags black. Add a rule so that when the user hoevers over the a tag, the color is blue.  

## Change an Element's Relative Position
* CSS treats HTML as its own box. 
* Generally, this is referred to as the CSS Box MOdel.
* Block level items automatically start on a new line. (Think Headings, paragraphs, divs)
* Inline items sit within the surrounding content (like images or spans)
* the default layout of elements is called the nromal flow of the document. 
* however, this normal flow cna be overwriden. 
* when an element's position is set to RELATIVE it allows you to specify how CSS should move it relative to its current position. 
this pairs with offset properties of left or right, top or bottom. 
* these are expressed in how many pixels or percentages or ems to move the item away from where it was normally positioned in the normal flow. 
* Example to move a paragraph 10 pixels away from the bottom

            p {
                position: relative;
                bottom: 10px;
            }
* changing an element's position to relative does not remove it from the normal flow.  
* the other elements around it, still behave as if that item were in its default position. 
* positioning gives you a lot of flexibility in the visual layout of a page. 
* even if your page looks differently, you need to still keep in mind the normal HTML (without the positioning adjustments) needs to make sense as many webpage visitors use text read outloud due to visual impairment (assistive devices like screen readers) 
* Code Assignment: change th epoisition of the H2 tag to relative and use CSS to offset move it 15 pixels away from the top of where it sits in the normal flow.


![100th-lesson](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/2021-02-06-completed-100-lessons.jpg)

This completes my first 100 lessons with FreeCode Camp.

## Move a Relatively Positioned Element with CSS Offsets
* CSS offsets of TOP, BOTTOM, LEFT, or RIGHT tell the browser how far to offest an item relative to where it would have been in the normal flow of the page. 
* if you are offsetting an element away from a given spot (effectively in th opposit direction) 
* Code Assignment: Use CSS offsets to move the H2 15 pixels to the R and 10 pixels up. 

## [Lock an Element to its Parent with Absolute Positioning](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/lock-an-element-to-its-parent-with-absolute-positioning)
* like "relative" we also have "absolute" for the CSS position property 
* absolute locks the element in place relative to its parent container. 
* unlike relative position, absolute position removes the element from the normal flow of the document. 
* items surrounding an absolute position element, ignore the absolute element. 
* One nuance with absolute positoning is that it is locked relative to its closest positioned ancestor.  
*  If you forget to add a position rule to the parent item, (this is typically done using position: relative;), the browser will keep looking up the chain and ultimately default to the body tag.
* Code Assignment: Lock the #searchbar element to the top-right of its section parent by declaring its position as absolute. Give it top and right offsets of 5o px each. 

## [Lock an Element to the Browser Window with Fixed Positioning](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/lock-an-element-to-the-browser-window-with-fixed-positioning)
* Fixed Position is another layout style CSS offers. 
* Fixed positionin is a type of absolute positioning that locks an element relative to the brower window. 
* Fixed positioning is used with the CSS offest properties
* Fixed positioning removes an element from the normal flow. 
* One key difference between the FIXED and ABSOLUTE positions is that an element with a fixed position will not more when the website visitor scrolls. 
* Code Assignment The navigation bar in the code is labeled with an id of navbar. Change its position to fixed, and offset it 0 pixels from the top and 0 pixels from the left. After you have added the code, scroll the preview window to see how the navigation stays in place.

## [Push Elements Left or Right with the float Property](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/push-elements-left-or-right-with-the-float-property)
* there is also a positioning tool called FLOAT
* the FLOAT property of an element bypasses normal positioning
* float pushes the content either to the left or the right of its containing parent element 
* it is commonly used with the WIDTH property to speciify how much of the horizontal space the floated element requires. 
* Code Assignment: The given markup would work well as a two-column layout, with the section and aside elements next to each other. Give the #left item a float of left and the #right item a float of right. 

## [Change the Position of Overlapping Elements with the z-index Property](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/change-the-position-of-overlapping-elements-with-the-z-index-property)
* if elements are positioined to overlap (from position: aboslute | relative | fixed | or sticky) the element cooming later int he HTML markup will by default appear on the top of the other elements. 
* the Z-INDEX property element moves it higher in the stack than those with lower values. 
* Code Assignment: Add a z-index property to the element with the class name of first (the red rectangle) and set it to a value of 2 so it covers the other element (blue rectangle).

## Center an Element Horizontally Using the margin Property
* to center a block element horizontally, the MARGIN value can be used
* setting MARGIN to auto will center it
* this method works for images as well 
* by default, images are inline
* images can be changed to block elements when you set the DISPLAY poperty to BLOCK 
* Code Assignment: Center the div on the page by adding a margin property with a value of auto.

## [Learn about Complementary Colors](https://www.freecodecamp.org/learn/responsive-web-design/applied-visual-design/learn-about-complementary-colors)
* Color theory has an important impact within design. 
* only the basics are covered in this course. 
* other information is available as this is a deep topic. 
* changing the colors make the websie look very differently even with the same content
* a lot of thought can go into the color palette which best matches the content. 
* one tool is the color wheel
* it can help us visualize how the colors relate to one another
* in the color wheel, the hues closer in relationship are nearer to one another.
* the colors farther away are less similar in hue.
* completmentary colors "cancel" each other out when combined. 
* complementary colors combined are generally grey. 
* side-by-side complementary colors have the most vibrant contrast.
* examples of complementary colors and their HEX code
    
            red (#FF0000) and cyan (#00FFFF)
            green (#00FF00) and magenta (#FF00FF)
            blue (#0000FF) and yellow (#FFFF00)

* the HEB colors are differeent complementary colors schemes than the outdated RYB color model used in elementary schools. 
* modern color theory uses the additive RGB model
and the substractive CMY model 
* more info: https://en.wikipedia.org/wiki/Color_model 
* online there are many color picking tools. 
* Color can convey powerful messages. 
* however, color alone should not be the only way to communicate the message, as there are visually impared websie visitors.
* more info on the visually impared later on 
* Code Assignment " Change the background-color property of the blue and yellow classes to their respective colors. Notice how the colors look different next to each other than they do compared against the white background. 

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
