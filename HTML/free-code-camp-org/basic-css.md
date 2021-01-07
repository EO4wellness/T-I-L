# Basic CSS
* there are 44 tasks to complete within this segment of the coursework as outlined below
* Cascading style Sheets is abbreviated CSS
* CSS communicate with the browser explaining how the text and other HTML content should display
* CSS is case sentitive
* be careful about capitalization 
* support for the use of CSS is now adopted by all major browsers
* when HTML first arrived on the sceen it did all of the formatting functions you find in CSS
* now with CSS you can control or change the 
        
        color
        font
        positioning 
        spacing
        sizing
        decorations
        transitions

* how to apply CSS
        inline (directly into your HTML page elements)
        by placing CSS rules within STYLE tags
        write CSS to an eternal style sheet and then call on it from your HTML document 
* external CSS style sheets called upon from within the HTML document are the most common use as this improves the overall readability of the HTML code 
* document Object Model (DOM) 
(NOTE: specific to our course, some of our pesonal browser choices, particularly with extensions, may interfer with the successful progress in the course.  If your tests fail, try disabling browser exensions as a solution)

    

## Introduction to Basic CSS
* this portion of the course continues using the same example (Cat Photo App) 
* RESUME studies here: https://www.freecodecamp.org/learn/responsive-web-design/basic-css/change-the-color-of-text

### Change the Color of Text
* to change the text color use the STYLE in the H2 element.
* COLOR style property does this 
* Example: 
                to set the H2 text to dispaly as blue we would code:
                <h2 style="color: blue;">CatPhotoApp</h2>
                end all INLINE color attributes with a ; 
                
* Code Assignment:

                Change this H2 element so its text is RED 
                
                MY CODE:
                <h2 style="color: red;">CatPhotoApp</h2>

### Use CSS Selectors to Style Elements
* CSS has 100s of properties which can be used to change the way an element looks.
* our example above, of turning the H2 text to read is an example of inline CSS.
* another method is to create a style block. 
* style blocks open with <style> and close with </style>
* within any style block, you can create a rule to change everything within the style block.
* when creating such a rule we alway begin and end each rule with the curly brackets. those are the ones which look like this { and }
* end each style's rules with a semicolon ; 
* Code Assignment:      

                Delete the H2 style attribute
                instead use a CSS style block
                add the needed CSS to turn all of the H2 elements blue. 
                
                MY CODE SOLUTION
                
                <style>
                h2 {
                color: blue;
                }
                </style>
                <h2>CatPhotoApp</h2>


### Use a CSS Class to Style an Element
* Resume Studies here 
https://www.freecodecamp.org/learn/responsive-web-design/basic-css/use-a-css-class-to-style-an-element
* Code Assignment:

### Style Multiple Elements with a CSS Class
* Code Assignment:

### Change the Font Size of an Element
* Code Assignment:

### Set the Font Family of an Element
* Code Assignment:

### Import a Google Font
* Code Assignment:

### Specify How Fonts Should Degrade
* Code Assignment:

### Size Your Images
* Code Assignment:

### Add Borders Around Your Elements
* Code Assignment:

### Add Rounded Corners with border-radius
* Code Assignment:

### Make Circular Images with a border-radius
* Code Assignment:

### Give a Background Color to a div Element
* Code Assignment:

### Set the id of an Element
* Code Assignment:

### Use an id Attribute to Style an Element
* Code Assignment:

### Adjust the Padding of an Element
* Code Assignment:

### Adjust the Margin of an Element
* Code Assignment:

### Add a Negative Margin to an Element
* Code Assignment:

### Add Different Padding to Each Side of an Element
* Code Assignment:

### Add Different Margins to Each Side of an Element
* Code Assignment:

### Use Clockwise Notation to Specify the Padding of an Element
* Code Assignment:

### Use Clockwise Notation to Specify the Margin of an Element
* Code Assignment:

### Use Attribute Selectors to Style Elements
* Code Assignment:

### Understand Absolute versus Relative Units
* Code Assignment:

### Style the HTML Body Element
* Code Assignment:

### Inherit Styles from the Body Element
* Code Assignment:

### Prioritize One Style Over Another
* Code Assignment:

### Override Styles in Subsequent CSS
* Code Assignment:

### Override Class Declarations by Styling ID Attributes
* Code Assignment:

### Override Class Declarations with Inline Styles
* Code Assignment:

### Override All Other Styles by using Important
* Code Assignment:

### Use Hex Code for Specific Colors
* Code Assignment:

### Use Hex Code to Mix Colors
* Code Assignment:

### Use Abbreviated Hex Code
* Code Assignment:

### Use RGB values to Color Elements
* Code Assignment:

### Use RGB to Mix Colors
* Code Assignment:

### Use CSS Variables to change several elements at once
* Code Assignment:

### Create a custom CSS Variable
* Code Assignment:

### Use a custom CSS Variable
* Code Assignment:

### Attach a Fallback value to a CSS Variable
* Code Assignment:

### Improve Compatibility with Browser Fallbacks
* Code Assignment:

### Inherit CSS Variables
* Code Assignment:

### Change a variable for a specific area
* Code Assignment:

### Use a media query to change a variable
* Code Assignment:

next - [applied visual design](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Visual-Design.md)
