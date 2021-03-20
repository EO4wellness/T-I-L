# [CSS Grid](https://www.freecodecamp.org/learn/responsive-web-design/#css-grid)
* Began studies: 2021-03-16
* The CSS grid is a newer standard that makes it easy to build complex responsive layouts. 
* It works by turning an HTML element into a grid, and lets you place child elements anywhere within.
* In this course, you'll learn the fundamentals of CSS grid by building different complex layouts, including a blog.

## [Create Your First CSS Grid](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/create-your-first-css-grid)
* Turn any HTML element into a grid container by setting its display property to drid. 
* you can then use all the properties associated with CSS Grid. 
* Code Assignment: Change the display of the div with the container class to grid.

## [Add Columns with grid-template-columns](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/add-columns-with-grid-template-columns)
* just creating a grid element, doesn't do much on its own. 
* you need the grid structure, defined, too. 
* add some columns by using the GRID-TEMPLATE-COLUMNS property
* Example:

        .container {
          display: grid;
          grid-template-columns: 50px 50px;
        }
        
* the above example codes, results in 2 columns which are each 50 px wide.
* the number of parameters in the grid-template-columns indicates the number of columans in the grid.
* Code Assignment: Give the grid container three columns that are each 100px wide. 

## [Add Rows with grid-template-rows](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/add-rows-with-grid-template-rows)
* the last challenge grid, created the number of rows automatically
* to adjust the rows manually, use the grid-template-rows property 
* this new property can be used in the same as the previous one 
* Code Assignment: Add two rows to the grid that are 50px tall each.

## [Use CSS Grid units to Change the Size of Columns and Rows](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/use-css-grid-units-to-change-the-size-of-columns-and-rows)
* you can use absolute and relative units like PX and EM in CSS Grid
* use these to define the size of rows and/or columns.
* Also you can use:

              FR: sets the column or row to a fraction of the available space
              AUTO: sets the column or row to the width or hieght of its content automatically.
              %: adjusts the column or row to the # width of its container
              
*  Code Example:

        grid-template-columns: auto 50px 10% 3fr 1 fr; 
        
*  this creates 5 columns
*  the first colomn is as wide as its conent
*  the secound comlomu is 50 px
*  the 3rd column is 10% of its container
* Code Assignment: Make a grid with three columns whose widths are as follows: 1fr, 100px, and 2fr.

## [Create a Column Gap Using grid-column-gap](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/create-a-column-gap-using-grid-column-gap) 
* so far, our grids have all been tightly aligned next to one another
* sometimes you need a gap between the columns 
* to obtian a gap, use the grid-column-gap properly
* example:

                gride-column-gap: 10px;
                
* This creates 10 px of empty space between all of our columns. 
* Code Assignment: Give the columns in the grid a 20px gap. 

## [Create a Row Gap using grid-row-gap](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/create-a-row-gap-using-grid-row-gap)
* you can also add a gap in between the rows
* use grid-row-gap to do so 
* use this in the same way as we did with the columns
* Code Assignment: Create a gap for the rows that is 5px tall. 

## [Add Gaps Faster with grid-gap](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/add-gaps-faster-with-grid-gap)
* GRID-GAP is a shorthand property for GRID-ROW-GAP and GRID-COLUMN-GAP.
* If gid-grap has one value, it will create a gap between all rows and columns.
* if it has two values, it will use the first one to set the gap between rows, and the second value for the columns.
* Code Assignment: Use grid-gap to introduce a 10px gap between the rows and 20px gap between the columns.

## [Use grid-column to Control Spacing](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/use-grid-column-to-control-spacing)
* so far, the properties above are for grid contianers.
* now we look at gird contents.
* grid-column proerty is for grid items.
* the hypothetical horizontal and vertical lines that create the grid are referred to as LINES
* these lines are numbered starting with 1 at the top left corner of the grid
* move right for columans and down for rows
* to control the number of columns an item will consume, you cau use the grid-column property in conjunction with the line numbers you want the item to star and stop at. 
* Example:

                grid-column: 1 / 3; 

* the example code makes an item start at the first verticle line of the grid on the left and span to the 3rd line of the grid, consuming two columns. 
* Code Assignment: Make the item with the class item5 consume the last two columns of the grid.

## [Use grid-row to Control Spacing](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/use-grid-row-to-control-spacing)
* you can also make an item consume multiple rows, just like we did with the columns. 
* define the horizontal lines you wan an item to start and stop at using the GRID-ROW property 
* Code Assignment: Make the element with the item5 class consume the last two rows.


## [Align an Item Horizontally using justify-self](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/align-an-item-horizontally-using-justify-self)
* Within the CSS Grid the content is located in a box which is called a CELL
* justify-self can align the grid
* this property has a value of STRETCH
* this will fill the content to the whole cell
* this CSS Grid acceps other values as well
* START-aligns the content at the left of the cell
* CENTER-aligns the content in the center of the cell
* END-aligns the center at the right of the cell
* Code Assignment: Use the justify-self property to center the item with the class item2.

## [Align an Item Vertically using align-self](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/align-an-item-vertically-using-align-self)
* just as you can align an item horizontally, there is a way to aling an item vertically as well.
* to do this use the ALIGN-SELF property on an item
* this property accepts all ofthe same values as JUSTIFY-SELF
* Code Assignment: Align the item with the class item3 vertically at the end.

## [Align All Items Horizontally using justify-items](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/align-all-items-horizontally-using-justify-items)
* sometimes you want items to share the same alignments.
* you can use the previously learned properties and align them idinvidually
* or you can align them all atonce horizontally by using JUSTIFY-ITEMS
* Code Assignment: Use this property to center all our items horizontally.


## [Align All Items Vertically using align-items](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/align-all-items-vertically-using-align-items)
* Using the align-items property on a grid container will set the vertical alignment for all the items in our grid.
* Code Assignment: Use it now to move all the items to the end of each cell.


## [Divide the Grid Into an Area Template](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/divide-the-grid-into-an-area-template)
* 
* Code Assignment: 

## [Place Items in Grid Areas Using the grid-area Property](#)
* 
* Code Assignment: 

## [Use grid-area Without Creating an Areas Template](#)
* 
* Code Assignment: 

## [Reduce Repetition Using the repeat Function](#)
* 
* Code Assignment: 

## [Limit Item Size Using the minmax Function](#)
* 
* Code Assignment: 

## [Create Flexible Layouts Using auto-fill](#)
* 
* Code Assignment: 

## [Create Flexible Layouts Using auto-fit](#)
* 
* Code Assignment: 

## [Use Media Queries to Create Responsive Layouts](#)
* 
* Code Assignment: 

## [Create Grids within Grids](#)
* 
* Code Assignment: 

[Course Completion:](#)

Next: [Responsive Web Design Projects](#)

Free Code Camp's Responsive Web Design Cetification Course Nav: 

[Basic HTML and HTML5](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org#basic-html-and-html5) | [Basic CSS](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/basic-css.md) | [Applied Visual Design](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Visual-Design.md) | [Applied Accessiblity](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Accessibility.md) | [Responsive Web Design Principles](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/ResponsiveWebDesignPrinciples.md) | [CSS Flexbox](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Flexbox.md) | [CSS Grid](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Grid.md) | [Responsive Web Design Projects](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Responsive%20Web%20Design%20Projects.md) | [Code Exercise Solutions](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org/exercise-solutions)
