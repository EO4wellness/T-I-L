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
* You can group cells of your grid together
* group into an area and give it a custom name
* do this by using GRID-TEMPLATE-AREAS
* Example:
        
        grid-template-areas:
        "header header header"
        "advert content content"
        "footer footer footer";

* the code above merges the top three cells together into an area named HEADER
* Likewise the bottom 3 are grouped into FOOTER
* Each word in the code represents a cell
* every pair of quotation markes represents a row
* besides custom labels you can also use a period (.) 
* a period indicates an empty cell on the grid
* the period doesn't have any other words with it for that cell, just the . alone 
* Code Assignment: Place the area template so that the cell labeled advert becomes an empty cell.

## [Place Items in Grid Areas Using the grid-area Property](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/place-items-in-grid-areas-using-the-grid-area-property)
* in the prior challenge, we created an area template as part of our grid container 
* now we can place an item in our custom area by referencing the name we gave it
* use GRID-AREA property
* Example:
        
        .item1 {
          grid-area: header;
        }

* this lets the grid know you want the ITEM1 class to go in the area namde HEADER
* NOTE:  In this case, the item will use the entire top row because that whole row is named as the header area.
* Code Assignment: Place an element with the item5 class in the footer area using the grid-area property.

## [Use grid-area Without Creating an Areas Template](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/use-grid-area-without-creating-an-areas-template)
* the GRID-AREA property we learned in the last challenge can also be used in another way
* if your grid doesn't have any areas template to reference you can create an area on the fly for an item to be placed like this: 

        item1 { grid-area: 1/1/2/4; }
        
* this is using the line numbers we learned about earlier
* the item in the example, below, will consume the rows between line 1 and line 2 and columns between lines 1 and 4

        grid-area: horizontal line to start at / vertical line to start at / horizontal line to end at / vertical line to end at;

* Code Assignment: Using the grid-area property, place the element with item5 class between the third and fourth horizontal lines and between the first and fourth vertical lines.

## [Reduce Repetition Using the repeat Function](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/reduce-repetition-using-the-repeat-function)
* When you used grid-template-columns and grid-template-rows to define the structure of a grid, you entered a value for each row or column you created.
* Let's say you want a grid with 100 rows of the same height. 
* It isn't very practical to insert 100 values individually. 
* Fortunately, there's a better way - by using the repeat function to specify the number of times you want your column or row to be repeated, followed by a comma and the value you want to repeat.
* Here's an example that would create the 100 row grid, each row at 50px tall.

                grid-template-rows: repeat(100, 50px);

* You can also repeat multiple values with the repeat function and insert the function amongst other values when defining a grid structure. Here's what that looks like:

                grid-template-columns: repeat(2, 1fr 50px) 20px;

                This translates to:

                grid-template-columns: 1fr 50px 1fr 50px 20px;

* Note: The 1fr 50px is repeated twice followed by 20px.
* Code Assignment: Use repeat to remove repetition from the grid-template-columns property.

## [Limit Item Size Using the minmax Function](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/limit-item-size-using-the-minmax-function)
* There's another built-in function to use with grid-template-columns and grid-template-rows called minmax. 
* It's used to limit the size of items when the grid container changes size. 
* To do this you need to specify the acceptable size range for your item. Here is an example:

        grid-template-columns: 100px minmax(50px, 200px);

* In the code above, grid-template-columns is set to create two columns; the first is 100px wide, and the second has the minimum width of 50px and the maximum width of 200px.
* Code Assignment: Using the minmax function, replace the 1fr in the repeat function with a column size that has the minimum width of 90px and the maximum width of 1fr, and resize the preview panel to see the effect.

## [Create Flexible Layouts Using auto-fill](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/create-flexible-layouts-using-auto-fill)
* The repeat function comes with an option called auto-fill. 
* This allows you to automatically insert as many rows or columns of your desired size as possible depending on the size of the container. 
* You can create flexible layouts when combining auto-fill with minmax, like this:

        repeat(auto-fill, minmax(60px, 1fr));

* When the container changes size, this setup keeps inserting 60px columns and stretching them until it can insert another one. 
* Note: If your container can't fit all your items on one row, it will move them down to a new one.
* Code Assignment: In the first grid, use auto-fill with repeat to fill the grid with columns that have a minimum width of 60px and maximum of 1fr. Then resize the preview to see auto-fill in action.

## [Create Flexible Layouts Using auto-fit](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/create-flexible-layouts-using-auto-fit)
* auto-fit works almost identically to auto-fill. 
* The only difference is that when the container's size exceeds the size of all the items combined, auto-fill keeps inserting empty rows or columns and pushes your items to the side, 
* while auto-fit collapses those empty rows or columns and stretches your items to fit the size of the container. 
* Note: If your container can't fit all your items on one row, it will move them down to a new one.
* Code Assignment: In the second grid, use auto-fit with repeat to fill the grid with columns that have a minimum width of 60px and maximum of 1fr. Then resize the preview to see the difference.

## [Use Media Queries to Create Responsive Layouts](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/use-media-queries-to-create-responsive-layouts)
* CSS Grid can be an easy way to make your site more responsive by using media queries to rearrange grid areas, change dimensions of a grid, and rearrange the placement of items.
* In the preview, when the viewport width is 300px or more, the number of columns changes from 1 to 2. The advertisement area then occupies the left column completely.
* Code Assignment: When the viewport width is 400px or more, make the header area occupy the top row completely and the footer area occupy the bottom row completely.

## [Create Grids within Grids](https://www.freecodecamp.org/learn/responsive-web-design/css-grid/create-grids-within-grids)
* urning an element into a grid only affects the behavior of its direct descendants. So by turning a direct descendant into a grid, you have a grid within a grid.
* For example, by setting the display and grid-template-columns properties of the element with the item3 class, you create a grid within your grid.
* Code Assignment: Turn the element with the item3 class into a grid with two columns with a width of auto and 1fr using display and grid-template-columns.

![Course Completion:](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/2021-03-22_completed-grid-challenges.png)

Next: [Responsive Web Design Projects](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Responsive%20Web%20Design%20Projects.md)

Free Code Camp's Responsive Web Design Cetification Course Nav: 

[Basic HTML and HTML5](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org#basic-html-and-html5) | [Basic CSS](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/basic-css.md) | [Applied Visual Design](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Visual-Design.md) | [Applied Accessiblity](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Applied-Accessibility.md) | [Responsive Web Design Principles](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/ResponsiveWebDesignPrinciples.md) | [CSS Flexbox](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Flexbox.md) | [CSS Grid](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/CSS-Grid.md) | [Responsive Web Design Projects](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/Responsive%20Web%20Design%20Projects.md) | [Code Exercise Solutions](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org/exercise-solutions)
