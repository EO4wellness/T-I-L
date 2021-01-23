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
* [Resumed Studies](https://www.freecodecamp.org/learn/responsive-web-design/basic-css/use-a-css-class-to-style-an-element) on 2021-01-07
* Classes are reusable styles 
* Classes can be added to HTML elements 
* Example 

                <style> 
                         .blue-text {
                                 color: blue;
                         }
                </style>

* here the style is called "blue-text"
* class names begin with a period (dot) . 
* while the code starts with a period, the actual class name does not include the perio 
* Code Assignment:

                inside a style element change the H2 selector to .red-text 
                update th color's value from blue to red 
                give the H2 element the CLASS attribute with a value of 'red-text' 
                
                My Solution:
                <style>
                  .red-text {color:red};          
                  </style>
                  <h2 class="red-text" >CatPhotoApp</h2>


### Style Multiple Elements with a CSS Class
* Likewise a class, once defined, can apply to any HTML element. 
* Code Assignment:

                *Try this for yourself. Make the code we already have, to use this .red-text for the 1st paragraph's content. 
                
                
                MY SOLUTION : 
                <style>
                .red-text {
                color: red;
                }
                </style>
                <h2 class="red-text">CatPhotoApp</h2>
                <main>
                <p class="red-text">Click here to view more <a href="#">cat photos</a>.</p>
                  <a href="#"><img src="https://bit.ly/fcc-relaxing-cat" alt="A cute orange cat lying on its back."></a>
                  <div>
                  <p>Things cats love:</p>
                  <ul>
                  <li>cat nip</li>
                  <li>laser pointers</li>
                  <li>lasagna</li>
                  </ul>
                  <p>Top 3 things cats hate:</p>
                      <ol>
                            <li>flea treatment</li>
                                  <li>thunder</li>
                                        <li>other cats</li>
                                            </ol>
                   </div>
                   <form action="https://freecatphotoapp.com/submit-cat-photo">
                   <label><input type="radio" name="indoor-outdoor" checked> Indoor</label> 
                   <label><input type="radio" name="indoor-outdoor"> Outdoor</label><br> 
                   <label><input type="checkbox" name="personality" checked> Loving</label> 
                       <label><input type="checkbox" name="personality"> Lazy</label>
                           <label><input type="checkbox" name="personality"> Energetic</label><br>
                           <input type="text" placeholder="cat photo URL" required>
                           <button type="submit">Submit</button>
                   </form>
                   </main>

### Change the Font Size of an Element
* use the FONT-SIZE css property to change the font size. 
* the FONT-SIZE property is placed inside the < S T Y L E > tag 
* example: 

        h1 {
        font-size: 30px;
        }


* Code Assignment:

                inside your .red-text style tag, create an entry for the P elements which will set the font size to 16 pixels. 
                note that's 16px 
                
                MY SOLUTON: 
                
                
                <style>
  .red-text {
    color: red;
  }
  p {
    font-size: 16px;
  }
</style>

               
                
[Resume Studies here](https://www.freecodecamp.org/learn/responsive-web-design/basic-css/change-the-font-size-of-an-element)


### Set the Font Family of an Element
* to set the FONT FAMILY we use the font-family property
* for example, to set the font family to Sans-serif you would use this code to set all H2 content to this font family

        h2 {
                font-family: sans-serif;
           }

* Code Assignment:

        set all paragraphs to monospace
        
        My Code:
        
        <style> 
        .red-text {
        color: red;
        }
        p {
        font-size: 16px;
        font-family: monospace;
        }
        </style>


### Import a Google Font
* wasn't previously awware of google (or any other) font library prior to this lesson.  
* this google find was significant enough for its own entry on the [T-I-L: Today I Learned readme](https://github.com/EO4wellness/T-I-L/blob/main/Google/README.md)
* [Google Font Library](https://fonts.google.com/)
* free library of web fonts which can be called upon in your CSS
* such libraries are referenced using the font's URL
* "import" the library font, and then apply it. 
* reserach other font directories as google is blocked in some countries (where?) 
* before the opening STYLE element add:

                <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
                
* now use the linked by URL font from the font library simply by naming it (as you would any other font): font-family: FAMILY_NAME, GENERIC_NAME;
* The GENERIC_NAME is optional, and is a fallback font in case the other specified font is not available. This is covered in later study materials.
* fonts are CASE SENSITIVE 
* font names need to be wrapped in quotes if there is a space in the name, but not if there aren't any spaces. . 

* Code Assignment:

                        Import LOBSTER font to your webpage 
                        Use the element selector to set LOBSTER as the font-family for the H2 element 
                        
                        MY CODE: 
                        
                        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
                        <style>
                        h2 {
                        font-family: Lobster;
                        }
                        .red-text {
                            color: red;
                              }
                        p {
                            font-size: 16px;
                                font-family: monospace;
                           }
                           </style>



### Specify How Fonts Should Degrade
* monospace, serif, and sans-serif are all generic font families
* generic fonts are available in all browsers
* if one font is not available, you can let the browser know to "degrate" to another specified font.
* Example: you design the page in HELVETICA but need to specify the degrate to the default sans-serif if Helvetica isn't available. 
* Example code:

        p {
                font-family: Helvetica, sans-serif;
           }
           
 * these generic font families are NOT case sensitive
 * generic fonts do not use quotes because they are CSS keywords

* Code Assignment:

                apply monospacce font to the H2 element \
                comment out the "import" link from google 
               
                


### Size Your Images
* CSS has a WIDTH property
* just like with FONTS we use PX for Pixels 
* Example: 500 pixels 

                <style>
                  .larger-image {
                       width: 500px;
                    }
                </style?
                    
           
* Code Assignment:

                create a class called SMALLER-IMAGE 
                use it to resite the image so it is only 100 px wide
                

### Add Borders Around Your Elements
* CSS borders can all have properties such as STYLE, COLOR, and WIDTH
* example: wants a 5 px boarder around an HTML element? Then code:
        
                <style>
                         .thin-red-border {
                                 border-color: red;
                                 border-width: 5px;
                                 border-style: solid;
                         }
                </style>


* Code Assignment:

        create a class called "thick-green-boarder
        make the class 10 px solid and green 
        apply this class to our cat photo 


### Add Rounded Corners with border-radius
* The default border is square (sharp corners)
* You can round the corners using the BORDER-RADIUS CSS property 
* specify it in pixels.

* Code Assignment:

                specify the border-radius of 10px
                

### Make Circular Images with a border-radius
* the border radiius property can also be set as a percentage 

* Code Assignment:

                assign the cat photo a border-radious of 50%
                NOTE: a border radius of 50% makes a circle 


### Give a Background Color to a div Element
* set any element's background color with the BACKGROUND-COLOR property
* Example:

                .green-background {
                background-color: green;
                }



* Code Assignment:

                create the silver-background class
                assign this class to your div element 
                

### Set the id of an Element
* HTML elements can have classes
* they can also have and ID attribute 
* we will be learning more about uses of IDs in JavaScript (later in the course)
* for now, know it is best practice to have each ID unique so that each element has one ID attribute 
* Example:

        <h2 id="cat-photo-app">

* Code Assignment:


        in the form element, made the ID cat-photo-form 
        

### Use an id Attribute to Style an Element
* like classes, you can style ID attributes with CSS 
* ID is not reusable
* ID should only be used for one element 
* ID is higher in importance than a class 
* if an element has both a class and an ID, the ID will be applied and the class ignored
* example: 

                #cat-photo-element {
                background-color: green;
                }
* note: recall with a style element you always use a . in front of the style name.  
with IDs you always use a # in front of the ID names. 

* Code Assignment:

                give the form with the ID attribute of cat-photo-form
                a green background 


### Adjust the Padding of an Element
* for a while, the next code assignments won't be using the cat photo app.  
* we will return to the app a bit later. 
* HTML elements tend to be rectangles. 
* properties which control the space that surrounds HTML elements: Padding, Border, Margin
* Pading: amount of space between the elements content and its border.
*
* Code Assignment:

                Change th Padding of the BLUE box to match the RED box
                

### Adjust the Margin of an Element
* margins control the amount of space between any element's border and the nearest surrounding elements 
* Code Assignment:

        given the starting code, change the margin of the blue box to match that of the red box
        to start with the margin of red box is 20 px and to start with the margin of the blue box is 10 px 

### Add a Negative Margin to an Element
* the element's margin controls the amount of space between an element's border and the surrounding elements. 
* when an element's margin is set to a negative value, the element grows larger. 

* Code Assignment:

                set the margin to a negative vblaue 

### Add Different Padding to Each Side of an Element
* CSS allows you to control the padding of all four individual sides of an element.  
* this padding control is achieved by the following properties 
* padding-top
* padding-right
* padding-bottom
* padding-left 

* Code Assignment:

                give the blue box a padding of 40 on its top and left sides
                give 20 px on the bottom and right sides 


### Add Different Margins to Each Side of an Element
* likewise you can control the margin an all four sides of any element. 
* this control is achieved via setting the following properties

                margin-top
                margin-right
                margin-bottom
                margin-left 

* Code Assignment:

                give the blue box a margin of 40px on its top and left sides but only 20 at its bottom and right sides 

### [Use Clockwise Notation to Specify the Padding of an Element](https://www.freecodecamp.org/learn/responsive-web-design/basic-css/use-clockwise-notation-to-specify-the-padding-of-an-element) resumne next study session here
* Code Assignment:

### Use Clockwise Notation to Specify the Margin of an Element
Instead of specifying an element's padding-top, padding-right, padding-bottom, and padding-left properties individually, you can specify them all in one line, like this:

padding: 10px 20px 10px 20px;

These four values work like a clock: top, right, bottom, left, and will produce the exact same result as using the side-specific padding instructions.

* Code Assignment:

        Use clockwise notation to give the blue box class 
        a padding of 40 px on its top and left side, but only 
        20 px on its bottom and right sides

### Use Attribute Selectors to Style Elements
* Code Assignment:

### Understand Absolute versus Relative Units


The last several challenges all set an element's margin or padding with pixels (px). Pixels are a type of length unit, which is what tells the browser how to size or space an item. In addition to px, CSS has a number of different length unit options that you can use.

The two main types of length units are absolute and relative. Absolute units tie to physical units of length. For example, in and mm refer to inches and millimeters, respectively. Absolute length units approximate the actual measurement on a screen, but there are some differences depending on a screen's resolution.

Relative units, such as em or rem, are relative to another length value. For example, em is based on the size of an element's font. If you use it to set the font-size property itself, it's relative to the parent's font-size.

Note: There are several relative unit options that are tied to the size of the viewport. They are covered in the Responsive Web Design Principles section.

* Code Assignment: Change the padding in the red box to 1.5 em

### Style the HTML Body Element
Every has a body. 

* Code Assignment:
                body {
                  background-color: black;
                  }


### Inherit Styles from the Body Element
This segment is all about the coding assignment. 
* Code Assignment:

### Prioritize One Style Over Another
This assignement is primarily taught by trying some code to see what happens. 
* Code Assignment:

### Override Styles in Subsequent CSS
* Code Assignment:

        assign two conflicting classes to the same element 
        (in this case the element is H1 and pint-text and blue-text
        to do so use the format of 
        class="class1 class2"
        
        What happens? WHy? Note: It doesn't matter which order the classes are listed in the HTML element. However, the order of the class declarations in the <style> section is what is important. The second declaration will always take precedence over the first. Because .blue-text is declared second, it overrides the attributes of .pink-text

### Override Class Declarations by Styling ID Attributes
* browsers read CSS from top to bottom
* browsers read CSS in the order from which they were declared
* in the event of a conflic, the browser will display which ever CSS declaration came last
* using two obvious element classes such as blue-text and pink-text proves this to us.  if we declare the classes in the order pink (first) and (blue) last, no matter what order we place the class in the element (H1 in our example here in class or any other such element in our HTML) no matter if within that element we place our class as equal to blue text or pink or both, the text is still going to display as BLUE because it was declared last in the '<style></style>' portion of the page. 
* ID attributes can and do also override Class Declarations
* Example: 

                #brown-text {
                        color: brown;
                }



* Code Assignment:

                to see how this works, leave the class code as is
                which include the preior class declarations of pint-text and blue-text
                likewise, leave the pink and blue class in the H1 element
                add an ID of '#orange-text' 
                also apply the orange-text ID to the H1 element 


### Override Class Declarations with Inline Styles
* In CSS, ID declarations override CLASS declarations, irregardless of where they are declared in your style element of your CSS
* Inline styles also override CDSS 
* inline styles are written 

        <h1 style="color: green;">

* Code Assignment:

        leaving the class code as it is with the 
        blue text and pink text in your H1 element
        next, add an inline style to your H1 element
        to make it WHITE 


### Override All Other Styles by using Important
* Inline styles will override all CSS declarations in your style element. 
* in modern coding, we often use CSS libraries. 
* libraries save time (such as those included in WordPress themes)
* however, libraries can also override your own design elements
* therefore, you need to know when to selectively override the library
in order to accomplish your design(s)
* when you absolutely need to be sure an element uses specific CSS use !IMPORTANT
* example of !important coding in use:

                color: red !important; 

* Code Assignment:

### [Use Hex Code for Specific Colors](https://www.freecodecamp.org/learn/responsive-web-design/basic-css/use-hex-code-for-specific-colors)
* hexadecimal is the long form 
* hex code is the short form
* hex(adecimal) code ways to represent color. 
* when using numbers in every day life, we use decimals or base 10. 
* hexadecimals are base 16 numbers. 
* hex has 16 disctinct symbols (like decimals)
* there are 0-9, A, B, C D, E, F
* hex is 0 to F
* Want more info? [Look here](https://en.wikipedia.org/wiki/Hexadecimal).
* In CSS, we can use Hex to represent colors. 
* There are two each for Red (R) green (G) and Blue (B) 
* #000000 is black (and is also the lowest possible value 
* you can find out more about [the RGB color system here](https://en.wikipedia.org/wiki/RGB_color_model). 

        Example:
        
        body {
                color: #000000;
             }

* Code Assignment:

### Use Hex Code to Mix Colors
with the 6 hexadecimal digits to represent color
two each from R (red) G (green) and B (blue)
we can make 16 million other colors 

Orange:  Pure red, mixed with some green, but no blue
#FFA500

Digit zero 0 is the lowest number in hex code. 
Zero represents the complete absence of color.

The Digit F is the highest number in hex code colors.
It represents the maximum possible brightness. 


* Code Assignment:

### [Use Abbreviated Hex Code](https://www.freecodecamp.org/learn/responsive-web-design/basic-css/use-abbreviated-hex-code)
* since HEX code allows for more than 16 million colors, some designers get overwhelmed. 
* you can also shorten it. 
* Example: 

        #FF0000
        (which is hex code for red)
        can be shortened to:
        #F00 
* Shorten hex code gives on digit for red, one for green, and one for blue. 
* Using shortened hex, provides for 4,000 colors
* #FF0000 and #F00 is exactly the same color in any browser display. 

* Code Assignment:

                Use the following hex codes to color each word in the style to the correct color. 
                COLOR           Short Hex Code 
                CYAN            #0FF
                GREEN           #0F0
                RED             #F00
                Fuchsia         #F0F 

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
