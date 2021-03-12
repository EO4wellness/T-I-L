# [CSS Flexbox](https://www.freecodecamp.org/learn/responsive-web-design/#css-flexbox)
* Began studies: 2021-03-08
* Flexbox is a powerful, well-supported layout method that was introduced with the latest version of CSS, CSS3. 
* With flexbox, it's easy to center elements on the page and create dynamic user interfaces that shrink and expand automatically.
* In this course, you'll learn the fundamentals of flexbox and dynamic layouts by building a Twitter card.

## [Use display: flex to Position Two Boxes](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/use-display-flex-to-position-two-boxes)
* Placing the CSS property display: flex; on an element allows you to use other flex properties to build a responsive page.
* Code Assignment: Add the CSS property display to #box-container and set its value to flex.

## [Add Flex Superpowers to the Tweet Embed](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/add-flex-superpowers-to-the-tweet-embed)
* in our code we have the tweet embedded so it can be used as an example.
* some of the elements could display better if we change the layout a bit.
* here we will explore several display: flex additions.
* Code Assignment: Add the CSS property display: flex to all of the following items - note that the selectors are already set up in the CSS:header, the header's .profile-name, the header's .follow-btn, the header's h3 and h4, the footer, and the footer's .stats.


## [Use the flex-direction Property to Make a Row](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/use-the-flex-direction-property-to-make-a-row)
* Adding display: flex to an element turns it into a flex container.
* This makes it possible to allign children of that element into rows or columns
* to do so, add flex-direction property to the parent items
* set it to either rowor column
* creating a row will aligh th echildren horizontally
* creating a column will align the children vertically
* other options of flex-direction are row-reverse and column-reverse
* the default value for flex-direction is row
* Code Assignment: Add the CSS property flex-direction to the #box-container element, and give it a value of row-reverse.

## [Apply the flex-direction Property to Create Rows in the Tweet Embed](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/apply-the-flex-direction-property-to-create-rows-in-the-tweet-embed)
* the HEADER and FOOTER in the tweet embed example have child items.
* they could be arranged as rows using the flex-direction property 
* this tells CSS to allign the children horizontally
* Code Assignment: Add the CSS property flex-direction to both the header and footer and set the value to row.

## [Use the flex-direction Property to Make a Column](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/use-the-flex-direction-property-to-make-a-column)
* use the FLEX-DIRECTION property to set a column
* Code Assignment: Add the CSS property flex-direction to the #box-container element, and give it a value of column.

## [Apply the flex-direction Property to Create a Column in the Tweet Embed](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/apply-the-flex-direction-property-to-create-a-column-in-the-tweet-embed)
* the tweet embed HEADER and FOOTER use the flex-direction property with a row value
* similarly the itmes inside the .profile-name element would work well stacked as a column
* Code Assignment: Add the CSS property FLEX-DIRECTION to the header's .profile-name element and set the value to column. 

## [Align Elements Using the justify-content Property](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/align-elements-using-the-justify-content-property)
* when the contents of a flex container, won't fill the entire container, it is common to want to instruct the content how to be positioned.
* the JUSTIFY-CONTENT property has several options to help with this scenario
* for each direction the flex items are arranged it scalled the main axis
* row is a horizontal line that cuts thru each item
* for a cloumn the main axis is the vertical line thru the items
* JUSTIFY-CONTENT: CENTER: will align all of the flex items to the center inside the flex container 
* other options are available.  they include:
* flex-start: aligns items to the start of the flex container 
  flex-star in a row pushes the items to the left of the container
  for a column, flex-start pushes the items to the top of the container.
* FLEX-END aligns all of the content to the end of the container
* SPACE-BETWEEN aligns items to the center of th emain exis. 
* SPACE-AROUND similar to SPACE-BETWEEN but the first and last items are not locked into the edges of the continer. 
* SPACE-EVENLY: 
* Code Assignment: An example helps show this property in action. Add the CSS property justify-content to the #box-container element, and give it a value of center.  Bonus: Try the other options for the justify-content property in the code editor to see their differences. But note that a value of center is the only one that will pass this challenge.


## [Use the justify-content Property in the Tweet Embed](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/use-the-justify-content-property-in-the-tweet-embed)
* this challenge is to see what happens when applying this to the tweet embed
* no new info is given other than what we see when we complete the code challenge assignement below 
* Code Assignment: Add the CSS property justify-content to the header's .profile-name element and set the value to any of the options from the last challenge.

## [Align Elements Using the align-items Property](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/align-elements-using-the-align-items-property)
* ALIGN-ITEMS property is similar to the JUSTIFY-CONTENT property
* JUSTIFY-CONTENT aligns flex items along the main axis. 
* For ROWS the main axis is a horizontal line. 
* For COLUMNS the main axis is a verticle line. 
* Flex containers also have a CROSS AXIS.
* The Cross Axis is opposite the Main Axis. 
* For ROWS the cross axis is vertical
* For COLUMNS the cross axis is horizontal.
* In CSS, the align-items property aligns flex items along the cross axis.
* For a row, it tells CSS how to push the items in the entire row up or down within th econtainer.
* For a column, it tells how to push the items left or right within the container. 
* There are differfent possible values for ALIGHT-ITEMS. 
* values include:
   - FLEX-START: aligns items to the start of the flex container. 
   - FLEX-END: aligns items to the end of the flex container. 
   - CENTER: alligns items to the center 
   - STRETCH: stretches the items to fill the flex continaer
   - BASELINE: aligh itmes to their baslines.
* NOTE: if no value is specified, then the default value is stretch.
* Code Assignment: An example helps show this property in action. Add the CSS property align-items to the #box-container element, and give it a value of center.
* Bonus-  Try the other options for the align-items property in the code editor to see their differences. But note that a value of center is the only one that will pass this chal

## [Use the align-items Property in the Tweet Embed](https://www.freecodecamp.org/learn/responsive-web-design/css-flexbox/use-the-align-items-property-in-the-tweet-embed)
* 
* Code Assignment: 

## Use the flex-wrap Property to Wrap a Row or Column
* 
* Code Assignment: 

## Use the flex-shrink Property to Shrink Items
* 
* Code Assignment: 

## Use the flex-grow Property to Expand Items
* 
* Code Assignment: 

## Use the flex-basis Property to Set the Initial Size of an Item
* 
* Code Assignment: 

## Use the flex Shorthand Property
* 
* Code Assignment: 

## Use the order Property to Rearrange Items
* 
* Code Assignment: 

## Use the align-self Property
* 
* Code Assignment: 

[Course Completion](#)

Next: [CSS Grid](#)
 
Free Code Camp's Responsive Web Design Cetification Course Nav: 

[Basic HTML and HTML5](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org#basic-html-and-html5) | [Basic CSS](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/basic-css.md) | [Applied Visual Design](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Visual-Design.md) | [Applied Accessiblity](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Accessibility.md) | [Responsive Web Design Principles](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/ResponsiveWebDesignPrinciples.md) | [CSS Flexbox](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Flexbox.md) | [CSS Grid](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Grid.md) | [Responsive Web Design Projects](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Responsive%20Web%20Design%20Projects.md) | [Code Exercise Solutions](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org/exercise-solutions)

