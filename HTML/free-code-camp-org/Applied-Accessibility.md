# Applied Accessibility 
* there are 22 skills in this segment of the coursework 
* I am beginning my study of this section on Feb 15, 2021. 


## [Introduction to the Applied Accessibility Challenges](https://www.freecodecamp.org/learn/responsive-web-design/#applied-accessibility)
* In web development, accessibility refers to web content and a UI (user interface) that can be understood, navigated, and interacted with by a broad audience. 
* This includes people with visual, auditory, mobility, or cognitive disabilities.
* In this course, you'll learn best practices for building webpages that are accessible to everyone.
* code assignment: none for this intro portion. 

## [Add a Text Alternative to Images for Visually Impaired Accessibility](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/add-a-text-alternative-to-images-for-visually-impaired-accessibility)
*  ALT attribute in image tags describes the content of the image
*  ALT also provides a text alternative to any image 
*  this is helpful when the image cannot load or cannot be seen by a user 
*  it is also used by search engines
*  people who are blind or have low vision rely on screen readers to convert web content to audio
*  good ALT text provides the reader a brief description of the image
*  all images posted online should include alt text for the image 
*  HTML5 considers ALT text for images mandatory 
*  Example:

		<img src="importantLogo.jpg" alt="Company Logo">

* code assignment: Camper Cat happens to be both a coding ninja and an actual ninja, who is building a website to share his knowledge. The profile picture he wants to use shows his skills and should be appreciated by all site visitors. Add an alt attribute in the img tag, that explains Camper Cat is doing karate. (The image src doesn't link to an actual file, so you should see the alt text in the display.)

## [Know When Alt Text Should be Left Blank](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/know-when-alt-text-should-be-left-blank)
* when an image has its own caption, which already describes it, then the "alt" text attribute should be left blank. 
* in this case, where it is already explained in the text or in the caption, an image should still have an ALT attribute but it should be set to a blank string. 
* ALT text should be blank for background or purly decroative images <img src="url" alt="">
* code assignment: Camper Cat has coded a skeleton page for the blog part of his website. He's planning to add a visual break between his two articles with a decorative image of a samurai sword. Add an alt attribute to the img tag and set it to an empty string. (Note that the image src doesn't link to an actual file - don't worry that there are no swords showing in the display.)

## [Use Headings to Show Hierarchical Relationships of Content](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/use-headings-to-show-hierarchical-relationships-of-content)
* H1 through H6 elements are workhorse tags. 
* screen readers can be set to read out loud JUST the headings--so that the user gets an overview or summary of the content on the page. 
* your HTML markup should thus have the headings be meaningful to the content. 
* SEMANTIC meaning-the tag you use around the content indicates the type of information it contains. 
* each page should have ONE and only ONE H1 element
* don't use H2 and H4 in the same section, due to how they look together, instead use CSS to stylize the distinctions between the heading and its paragraph contents. 
* code assignment:  Camper Cat wants a page on his site dedicated to becoming a ninja. Help him fix the headings so his markup gives semantic meaning to the content, and shows the proper parent-child relationships of his sections. Change all the h5 tags to the proper heading level to indicate they are subsections of the h2 ones. Use h3 tags for the purpose.

## [Jump Straight to the Content Using the main Element](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/jump-straight-to-the-content-using-the-main-element)
* HTML5 introduced a number of new elements that give developers more options while also incorporating accessibility features. These tags include main, header, footer, nav, article, and section, among others.
* This works like a "div" 
* The tag name alone can indicate the type of information it contains, which adds semantic meaning to that content
* The main tag also has an embedded landmark feature that assistive technology can use to quickly navigate to the main content. If you've ever seen a "Jump to Main Content" link at the top of a page, using a main tag automatically gives assistive devices that functionality.
* code assignment: Camper Cat has some big ideas for his ninja weapons page. Help him set up his markup by adding opening and closing main tags between the header and footer (covered in other challenges). Keep the main tags empty for now.

## [Wrap Content in the article Element](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/wrap-content-in-the-article-element#)
* ARTICLE is one of the HTML5 elements
* ARTICLE is intended to be used to add semantic meaning to your markup
* ARTICLE is a sectioning element 
* ARTICLE is used to wrap independent, self-contained content 
* examples of use: blog entries, forum posts or news articles 
* It is a judgement call to know if it is an article or not
* The test is: can the content stand alone?  If so, it is an article.
* TEST: if you removed the surrounding context, would that content still make sense? 
* for text, the test is, would it hold up if it were in an RSS Feed? 
* this helps those who use assistive technoligies understand the organization and semnantical meaning of your content 
* SECTION is another element added by HTML5
* SECTION has a similar use but slightly differnt meaning than ARTICLE 
* Whereas ARTICLE is for stand alone content, SECTION is for grouping thematically related content 
* Both SECTION and ARTICLE could and should be used together 
* Example:  in the context of a book, the book its self would be ARTICLE and the chapters would be SECTION 
* When ever there is NO relationship between groups of content, then use a DIV 

		<div> groups content 
		<section> groups related content 
		<article> groups independent, self-contained content 
		
* code assignment:  Camper Cat used article tags to wrap the posts on his blog page, but he forgot to use them around the top one. Change the div tag to use an article tag instead.
* [Followup:](https://forum.freecodecamp.org/t/applied-accessiblity-question/449144?u=eo4wellness)

## [Make Screen Reader Navigation Easier with the header Landmark](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/make-screen-reader-navigation-easier-with-the-header-landmark)
* HEADER is an HTML5 element
* HEADER also provides semantic meaning
* HEADER improves accessibility info 
* HEADER is a tag 
* used to wrap introductory info
* used to wrap navigation links for its parent tag
* also works around content that is repeated at the top on multiple pages (or site wide)
* HEADER allows assistive technologies to quickly navigate to the content 
* NOTE: HEADER is intended for use in a BODY tag of the HTML
* the HEADER tag is different than the HEAD ELEMENT
* the head eleemnt contains the pages title and meta info 
* code assignment: Camper Cat is writing some great articles about ninja training, and wants to add a page for them to his site. Change the top div that currently contains the h1 to a header tag instead.   

## [Make Screen Reader Navigation Easier with the nav Landmark](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/make-screen-reader-navigation-easier-with-the-nav-landmark)
* NAV element is another HTML5 item
* NAV element has an embedded landmark feature for ease of screen reader navigation
* NAV is a tag
* the Nav tag is meant to wrap around the main navigation links in our page
* NOTE: if there are repeated site links at the bottom of th epage, it is NOT necessary to mark those up wit the nav tag as well. 
* Use of FOOTER is sufficient for such content 
* code assignment: Camper Cat included navigation links at the top of his training page, but wrapped them in a div. Change the div to a nav tag to improve the accessibility on his page.

## [Make Screen Reader Navigation Easier with the footer Landmark](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/make-screen-reader-navigation-easier-with-the-footer-landmark)
* Like HEADER and NAV HTML5 also has the FOOTER element
* FOOTER has a built-in landmark feature for assistive devices to quickly navigate to it
* FOOTER is primarily used to contain copyright information or links to related documents usually at the bottom of the page. 
* code assignment: Camper Cat's training page is making good progress. Change the div he used to wrap his copyright information at the bottom of the page to a footer element.

## [Improve Accessibility of Audio Content with the audio Element](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/improve-accessibility-of-audio-content-with-the-audio-element)
* AUDIO element - an HTML5 semantic meaning used to wrap sound or audio stream content 
* audio content also needs a text alternative for those who are hard of hearing
* this can be done with either a) nearby text on the page or b) link to transcript of the content
* the AUDIO tag supports the CONTROLS attribute 
* (default play, pause or other audio controls)
* support keyboard control functionality 
* This is BOOLEAN
* it doesn't need a value
* the presence of the tag turns the setting "on"
* Example:

		
		<audio id="meowClip" controls>
		<source src="audio/meow.mp3" type="audio/mpeg" />
		<source src="audio/meow.ogg" type="audio/ogg" />
		</audio>
		
* often content has both visual and auditory components
* best practice: synchronized captions and a transcript 
* generally a web developer isn't responsible f or creating the caption or the transcripts but needs to know to include them or ask for them
* code assignment: Time to take a break from Camper Cat and meet fellow camper Zersiax (@zersiax), a champion of accessibility and a screen reader user. To hear a clip of his screen reader in action, add an audio element after the p. Include the controls attribute. Then place a source tag inside the audio tags with the src attribute set to https://s3.amazonaws.com/freecodecamp/screen-reader.mp3 and type attribute set to "audio/mpeg".

## [Improve Chart Accessibility with the figure Element](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/improve-chart-accessibility-with-the-figure-element)
* HTML5 introduced FIGURE element and its related FIGCAPTION
* these two are used togehter to wrap visual items (like an image, a diagram, or chart) 
* when used it wraps the caption together with the visual content
* when used it also provides a semantic grouping of related content 
* CAPTIONS for charts should provide a brief overall conclusion of what the data shows (for those who are visually impaired) 
* Example: 

		<figure>
			<img src="roundhouseDestruction.jpeg" alt="Photo of Camper Cat executing a roundhouse kick">
			<br>
			<figcaption>
			Master Camper Cat demonstrates proper form of a roundhouse kick.
			</figcaption>
		</figure>


* code assignment: Camper Cat is hard at work creating a stacked bar chart showing the amount of time per week to spend training in stealth, combat, and weapons. Help him structure his page better by changing the div tag he used to a figure tag, and the p tag that surrounds the caption to a figcaption tag.

## [Improve Form Field Accessibility with the label Element](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/improve-form-field-accessibility-with-the-label-element)
* to be semantically using HTML we need to use appropriate tag names and attributes
* LABEL tag wrps the text for specific form content
* FOR atribute on a LABEL tag assocates that label with the form control 
* example: 
		<form>
 			 <label for="name">Name:</label>
			 <input type="text" id="name" name="name">
		</form>


* code assignment: Camper Cat expects a lot of interest in his thoughtful blog posts and wants to include an email sign up form. Add a for attribute on the email label that matches the id on its input field.

## [Wrap Radio Buttons in a fieldset Element for Better Accessibility](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/wrap-radio-buttons-in-a-fieldset-element-for-better-accessibility)
* The next form topic covers the accessibility of radio buttons. Each choice is given a label with a for attribute tying to the id of the corresponding item as covered in the last challenge. Since radio buttons often come in a group where the user must choose one, there's a way to semantically show the choices are part of a set.

The fieldset tag surrounds the entire grouping of radio buttons to achieve this. It often uses a legend tag to provide a description for the grouping, which is read by screen readers for each choice in the fieldset element.

The fieldset wrapper and legend tag are not necessary when the choices are self-explanatory, like a gender selection. Using a label with the for attribute for each radio button is sufficient.
* Example: 

	<form>
	  <fieldset>
   		 <legend>Choose one of these three items:</legend>
    		 <input id="one" type="radio" name="items" value="one">
   		 <label for="one">Choice One</label><br>
   		 <input id="two" type="radio" name="items" value="two">
   		 <label for="two">Choice Two</label><br>
   		 <input id="three" type="radio" name="items" value="three">
  		 <label for="three">Choice Three</label>
  	  </fieldset>
	</form>


* code assignment: Camper Cat wants information about the ninja level of his users when they sign up for his email list. He's added a set of radio buttons and learned from our last lesson to use label tags with for attributes for each choice. Go Camper Cat! However, his code still needs some help. Change the div tag surrounding the radio buttons to a fieldset tag, and change the p tag inside it to a legend.

## [Add an Accessible Date Picker](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/add-an-accessible-date-picker)
* forms often need to include an input field
* input fiels can have several different controls
* the TYPE attribute indicates what kind of INPUT element will be created 
* TEXT and SUBMIT input types were used in previous lessons in this course 
* HTML5 now has also added a DATE field. 
* Different browsers display this differently.
* Generally, when the portion of the form is in view on the screen where the date input is located, a date picker will appear. 
* the date picker helps a wide variety of users select and input the correct date 
* Older browsers won't support this feature. 
* Older browsers then display TEXT as default.
* Due to older browsers, use the expected date format YYYYMMDD MMDDYY etc in the PLACEHOLDER text just in case someone is using an old browser 
* code examples 

			<label for="input1">Enter a date:</label>
			<input type="date" id="input1" name="input1">

* code assignment: Camper Cat is setting up a Mortal Kombat tournament and wants to ask his competitors to see what date works best. Add an input tag with a type attribute of date, an id attribute of pickdate, and a name attribute of date.

## [Standardize Times with the HTML5 datetime Attribute](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/standardize-times-with-the-html5-datetime-attribute)
* HTML5 also introduced the TIME element and a DATETIME attrribute 
* the function of these two were to standarize times. 
* this is an inline element that can wrap a date or time on a page
* a valid format of that date is held by the datetime attribute 
* assistive devices can access this value 
* this standardizes time (even when it is written in another format such as informal or colloquial)
* Example:

		<p>Master Camper Cat officiated the cage match between Goro and Scorpion <time datetime="2013-02-13">last Wednesday</time>, which ended in a draw.</p>
		
* code assignment: Camper Cat's Mortal Kombat survey results are in! Wrap a time tag around the text Thursday, September 15<sup>th<sup> and add a datetime attribute to it set to 2016-09-15.

## [Make Elements Only Visible to a Screen Reader by Using Custom CSS](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/make-elements-only-visible-to-a-screen-reader-by-using-custom-css)
* if a logical document outline is used, assistive tech doesn't need much CSS
* however, it can use the visual design aspect, too. 
* CSS can improve accessiblity because it can HIDE content for users who DO NOT use screen readers
* one example of a use case is a chart. 
* in a chart you want the info to dispaly in chart format for those who can see, and in text format for those who cannot see or use a screen reader
* in such use case, the CSS is used to position the screen-reader only elements OFF the visual browser window 
* there are some other CSS which will NOT work the same.  these include: 

		
    		display: none; or visibility: hidden; hides content for everyone, including screen reader users
		
		Zero values for pixel sizes, such as width: 0px; height: 0px; removes that element from the flow of your document, meaning screen readers will ignore it


* Example: 

		.sr-only {
		   position: absolute;
		   left: -10000px;
		   width: 1px;
		   height: 1px;
		   top: auto;
		   overflow: hidden;
		}

* code assignment: Camper Cat created a really cool stacked bar chart for his training page, and put the data into a table for his visually impaired users. The table already has an sr-only class, but the CSS rules aren't filled in yet. Give the position an absolute value, the left a -10000px value, and the width and height both 1px values.

## [Improve Readability with High Contrast Text](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/improve-readability-with-high-contrast-text)
* text is more difficult to read if there is low contrast between the foreground and background color schemes. 
* sufficient contrast imrpoves readability of content 
* The Web Content Accessibility Guidelines (WCAG) recommend at least a 4.5 to 1 contrast ratio for normal text. 
* This is calculated by comparing the lelative luminance vlaues of the two colors in use. 
* white on black, or black on white, is the strongest contrast possible. 
* the same two colors (exactly) are the lowest contrast possible. 
* Contrast calculations range from 1:1 for the same color, or no contrast, to 21:1 for white against black.
* code assignment: Camper Cat's choice of light gray text on a white background for his recent blog post has a 1.5:1 contrast ratio, making it hard to read. Change the color of the text from the current gray (#D3D3D3) to a darker gray (#636363) to improve the contrast ratio to 6:1.  

## [Avoid Colorblindness Issues by Using Sufficient Contrast](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/avoid-colorblindness-issues-by-using-sufficient-contrast)
* color is a huge part of visiual design. 
* however, the use of color brings with it accessibility issues 
* color alone should not be the ONLY way we convey vital information 
* screen readers or color blind individuals won't have that information 
* the foreground and background colors need to be sufficient contrast so colorblind users can distinguish them 
* The WCAG-recommended contrast ratio of 4.5:1 applies for color use as well as gray-scale combinations.
* Colorblind users have trouble distinguishing some colors from others
* usually in hue but sometimes lightness as well. 
* You may recall the contrast ratio is calculated using the relative luminance (or lightness) values of the foreground and background colors.
* In practice, the 4.5:1 contrast ratio can be reached by shading (adding black to) the darker color and tinting (adding white to) the lighter color. 
* Darker shades on the color wheel are considered to be shades of blues, violets, magentas, and reds, 
* whereas lighter tinted colors are oranges, yellows, greens, and blue-greens.
* code assignment:  Camper Cat is experimenting with using color for his blog text and background, but his current combination of a greenish background-color with maroon text color has a 2.5:1 contrast ratio. You can easily adjust the lightness of the colors since he declared them using the CSS hsl() property (which stands for hue, saturation, lightness) by changing the third argument. Increase the background-color lightness value from 35% to 55%, and decrease the color lightness value from 20% to 15%. This improves the contrast to 5.9:1.

## [Avoid Colorblindness Issues by Carefully Choosing Colors that Convey Information](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/avoid-colorblindness-issues-by-carefully-choosing-colors-that-convey-information)
* There are different types of colorblindness
* close colors can be thought of as neighbors on the color wheel
* those combintations should be avaoided when they convey important information 
* there are some online color picking tools which simulate different types of colorblindness
* code assignment:  Camper Cat is testing different styles for an important button, but the yellow (#FFFF33) background-color and the green (#33FF33) text color are neighboring hues on the color wheel and virtually indistinguishable for some colorblind users. (Their similar lightness also fails the contrast ratio check). Change the text color to a dark blue (#003366) to solve both problems.

## [Give Links Meaning by Using Descriptive Link Text](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/give-links-meaning-by-using-descriptive-link-text)
* Screen reader users have different options for what type of content their device reads. 
* This includes skipping to (or over) landmark elements, jumping to the main content, or getting a page summary from the headings. 
* Another option is to only hear the links available on a page.
* Screen readers do this by reading the link text, or what's between the anchor (a) tags. 
* Having a list of "click here" or "read more" links isn't helpful. 
* Instead, you should use brief but descriptive text within the a tags to provide more meaning for these users.
* code assignment: The link text that Camper Cat is using is not very descriptive without the surrounding context. Move the anchor (a) tags so they wrap around the text information about batteries instead of Click here.

## [Make Links Navigable with HTML Access Keys](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/make-links-navigable-with-html-access-keys)
* HTML offers the accesskey attribute to specify a shortcut key to activate or bring focus to an element. This can make navigation more efficient for keyboard-only users.
* HTML5 allows this attribute to be used on any element, but it's particularly useful when it's used with interactive ones. This includes links, buttons, and form controls.
* Here's an example:

		<button accesskey="b">Important Button</button>

* code assignment: Camper Cat wants the links around the two blog article titles to have keyboard shortcuts so his site's users can quickly navigate to the full story. Add an accesskey attribute to both links and set the first one to g (for Garfield) and the second one to c (for Chuck Norris).

## [Use tabindex to Add Keyboard Focus to an Element](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/use-tabindex-to-add-keyboard-focus-to-an-element)
* The HTML tabindex attribute has three distinct functions relating to an element's keyboard focus. 
* When it's on a tag, it indicates that the element can be focused on. 
* The value (an integer that's positive, negative, or zero) determines the behavior.
* Certain elements, such as links and form controls, automatically receive keyboard focus when a user tabs through a page. 
* It's in the same order as the elements come in the HTML source markup. 
* This same functionality can be given to other elements, such as div, span, and p, by placing a tabindex="0" attribute on them. 
* Here's an example:

		<div tabindex="0">I need keyboard focus!</div>
		
		Note: A negative tabindex value (typically -1) indicates that an element is focusable, but is not reachable by the keyboard. This method is generally used to bring focus to content programmatically (like when a div used for a pop-up window is activated), and is beyond the scope of these challenges.

* code assignment: Camper Cat created a new survey to collect information about his users. He knows input fields automatically get keyboard focus, but he wants to make sure his keyboard users pause at the instructions while tabbing through the items. Add a tabindex attribute to the p tag and set its value to 0. Bonus - using tabindex also enables the CSS pseudo-class :focus to work on the p tag.

## [Use tabindex to Specify the Order of Keyboard Focus for Several Elements](https://www.freecodecamp.org/learn/responsive-web-design/applied-accessibility/use-tabindex-to-specify-the-order-of-keyboard-focus-for-several-elements)
* the TABINDEX attribute can also be set to order the tab sequence through the page for keyboard users 
* code assignment: Camper Cat has a search field on his Inspirational Quotes page that he plans to position in the upper right corner with CSS. He wants the search input and submit input form controls to be the first two items in the tab order. Add a tabindex attribute set to 1 to the search input, and a tabindex attribute set to 2 to the submit input.

![finished](https://github.com/EO4wellness/T-I-L/blob/main/HTML/images/2021-03-06-Completed-Accessiblity-unit-study.png)
 
Completed this set of study topics and code assignments on 2021-03-06.
Next: [Responsive Web Design Priciples](https://github.com/EO4wellness/T-I-L/blob/main/HTML/free-code-camp-org/ResponsiveWebDesignPrinciples.md)
