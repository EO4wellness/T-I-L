# Applied Accessibility 
* there are 22 skills in this segment of the coursework 
* I am beginning my study of this section on Feb 15, 2021. 


## Introduction to the Applied Accessibility Challenges
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
* 
* code assignment: Camper Cat is writing some great articles about ninja training, and wants to add a page for them to his site. Change the top div that currently contains the h1 to a header tag instead.   

## Make Screen Reader Navigation Easier with the nav Landmark
* code assignment: 

## Make Screen Reader Navigation Easier with the footer Landmark
* code assignment: 

## Improve Accessibility of Audio Content with the audio Element
* code assignment: 

## Improve Chart Accessibility with the figure Element
* code assignment: 

## Improve Form Field Accessibility with the label Element
* code assignment: 

## Wrap Radio Buttons in a fieldset Element for Better Accessibility
* code assignment: 

## Add an Accessible Date Picker
* code assignment: 

## Standardize Times with the HTML5 datetime Attribute
* code assignment: 

## Make Elements Only Visible to a Screen Reader by Using Custom CSS
* code assignment: 

## Improve Readability with High Contrast Text
* code assignment:  

## Avoid Colorblindness Issues by Using Sufficient Contrast
* code assignment:  

## Avoid Colorblindness Issues by Carefully Choosing Colors that Convey Information
* code assignment:  

## Give Links Meaning by Using Descriptive Link Text
* code assignment: 

## Make Links Navigable with HTML Access Keys
* code assignment: 

## Use tabindex to Add Keyboard Focus to an Element
* code assignment: 

## Use tabindex to Specify the Order of Keyboard Focus for Several Elements
* code assignment: 

