# [FREE CODE CAMP](https://www.freecodecamp.org)
This service allows you to log in and begin learning coding from scratch using just your GitHub profile to log in. If you are totally new to coding, FreeCodeCamp recommends starting at the very beginning (link on their study course outline). 


## Responsive Web Design Cetification (300 Hours)
Course outline
* [Basic HTML and HTML5](https://github.com/EO4wellness/T-I-L/tree/main/HTML/free-code-camp-org#basic-html-and-html5)
* Basic CSS
* Applied Visual Design 
* Applied Accessiblity 
* Responsive Web Design Principles
* CSS Flexbox
* CSS Grid
* Responsive Web Design Projects 

## Basic HTML and HTML5

### Introduction to Basic HTML and HTML5 
* HTML stands for Hyper Text Markup Language. 
* HTML gives structure to a web page. 
* HTML has its own syntax. 
* HTML Elments generally have open and close tags, which surround the content to give meaning to the content. 
* Historically, HTML pages generally contained static information. 
* The W3 Consortium works to ensure any browser can display HTML or HTML5 consistently. 


### Say Hello to HTML Elements
* The course is set up to be a step-by-step guide to web develoopment. 
* To take this course, you do not need any special software or hardware: as everything you need is provided for you within the course, including the workspaces to practice code and see the results. 
* <h1>Hello</h1> is an HTML code element 
* the majority of HTML elements have an open tag, content, and then a close tag. 
* a forward slash, or in other words the keyboard item commonly on the same key as the question mark: ? / , is the only thing different about the "close" tag, than the open. 
* the first code assignment is 

        given
        <h1>Hello</h1>
        modify the code to say Hello World. 
        
        my solution:
        <h1>Hello World</h1>
        

### Headline with the h2 Element
* the goal of the next few lessons, combined, is to end up wtih an HTML5 cat photo web app
* the example app will be built step-by-step, logically 
* H1 is generally used for Main Headings, where as the H2 element is generally used for subheadings. 
* additional heading elements also include H3, H4, H5, and H6
* code assignment: 

        To our existing code, 
        Add an H2 tag that says "CatPhotoApp" 
        
        my solution: 
        
        <h1>Hello World</h1>
        <h2>CatPhotoApp</h2>

### Inform with the Paragraph Element
* use "p" elements for paragraph text on a website.
* other options exist, such as just using text; however, the best/recommended practice is to set paragraphs of content on a webpage off with the P element.
* code assignement:

        Create a paragraph element to the "Hello Paragraph" content. 
        
        my solution: 
        
        <h1>Hello World</h1>
        <h2>CatPhotoApp</h2>
        <p>Hello Paragraph</p>

### Fill in the Blank with Placeholder Text
* sometimes when we design a website, we do not know yet what the content on the page will be. we only know the general shape and function. 
* it is common for website developers to fill in an OBVIOUSLY blank text, which is meant to be useful as a placeholder while testing the function of the design, and later such blank text would be relpaced with the real content. 
* this is known as "lorem ipsum text" 
* lorem ipsum was used since 16th century by typesetters to hold the place of later inserted content. 
* to continue the traddition, yet switch it up, we will be using "Kitty" ipsum. 
* code assignment:

            Rplace the "P" text with the Kitty Ipsum text. 
            
            my solution: 
            <h1>Hello World</h1>
            <h2>CatPhotoApp</h2>
            <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
            

### Uncomment HTML
* leaving comments in code, is a way to help yourself and other coders decypher your code at a later date and time
* comments can also help with debugging or security issues as a comment can indicated the intented correct functioning 
* comments are not readibly visible to the person who views the webpage your coding in their browser
* in HTML comments start with the <!-- tag and close with the --> tag. 
* code assingment: 

                Uncomment this code:
                
                <!--
                <h1>Hello World</h1>
                <h2>CatPhotoApp</h2>
                <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
                -->
                
                my solution: 
                <h1>Hello World</h1>
                <h2>CatPhotoApp</h2>
                <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
                


### Comment out HTML
* apply what you know in this sections code assingment

            Uncomment just the h2 element, but comment the h1 and p elements in this code:
            <!--
            <h1>Hello World</h1>
            <h2>CatPhotoApp</h2>
            <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
            -->
            
            my solution 
            <!-- this comment will make the H1 element not visible
            <h1>Hello World</h1>
            -->
            <h2>CatPhotoApp</h2>
            <!-- this comment will make the P element not visible
            <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
            -->


### Delete HTML Elements
* because mobile devices are so common these days
* because phones don't have much vertical space
* it is important to remove all unnecessary elements
* Code assingment:

        delete the H1 element to simplify the view 
        
        my solution: 
        <h2>CatPhotoApp</h2>
        <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>


### Introduction to HTML5 Elements
* HTML5 was released October 28, 2014 after first being drafted in 2008. 
* HTML5 adds several tags.  these include:
        
            main
            header
            footer
            nav
            video
            article
            section
            ... as well as a few others ...
            
 * HTML5 tags add descriptive structure
 * this helps with SEO (Search Engine Optimization)
 * Example use case (this is the MAIN element with 2 child elements nested inside MAIN) 
 
            <main> 
                <h1>Hello World</h1>
                <p>Hello Paragraph</p>
            </main>
  * more about this in a later study session (below) 
  * code assignment: 
  
            create a second paragraph
            create a man element
            next the two paragraphs within the main element 
            
            my solution:
            <h2>CatPhotoApp</h2>
            <main>
            <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
            
            <p>Purr jump eat the grass rip the couch scratched sunbathe, shed everywhere rip the couch sleep in the sink fluffy fur catnip scratched.</p>
            </main>


### Add Images to Your Website
* images use the IMG element 
* the IMG element must point to a specific image URL
* the URL is pointed to using the SRC attribute 
* the IMG element is an exception to the OPEN and CLOSE tags rule of ELEMNTS 
* the IMG element is self closing
* all IMG elements must have an ALT attribute 
* the text of the ALT attribute is used for screen readers, accessiblity, and displays if the image fails to load 
* if an image is purely decorative, using an empty ALT attribute is the best practice
* ALT attributes should not contian special characters 
* example: <img src="https://www.freecatphotoapp.com/your-image.jpg">
* example with ALT: <img src="https://www.freecatphotoapp.com/your-image.jpg" alt="A business cat wearing a necktie."> 
* code assignement: 

            within the existing code, add this image https://bit.ly/fcc-relaxing-cat to the main element 
            
            my solution:
            <h2>CatPhotoApp</h2>
            <main>
            <img src="https://bit.ly/fcc-relaxing-cat" alt="two kittens playing with one another" >
            <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
            <p>Purr jump eat the grass rip the couch scratched sunbathe, shed everywhere rip the couch sleep in the sink fluffy fur catnip scratched.</p>
            </main>
            


### Link to External Pages with Anchor Elements
* A is known as an anchor element 
* anchor elements are used to link to content outside the webpage you are writing 
* because of this, all a elements need a destination 
* the desination is a web address called an HREF attribute 
* example of an anchor text: <a href="https://freecodecamp.org">this links to freecodecamp.org</a>
  this example will display the text "this links to freecodecamp.org" as a link you can click to visit https://www.freecodecamp.org
* code assingment: 

        create an A element that links to this website and has "cat photos as its anchor text. 
        
        my solution:
        <h2>CatPhotoApp</h2>
        <main>
        <img src="https://bit.ly/fcc-relaxing-cat" alt="A cute orange cat lying on its back.">
        <a href="https://freecatphotoapp.com">cat photos</a>
        <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
        <p>Purr jump eat the grass rip the couch scratched sunbathe, shed everywhere rip the couch sleep in the sink fluffy fur catnip scratched.</p>
        </main>
        

### Link to Internal Sections of a Page with Anchor Elements
* the A (anchor) element isn't just useful for links to other pages or websites
* the Anchor element can also jump to different regions within the same webpage which are called internal links
* to create an internal link you will need to assign the HREF attribute a hash (number) symbol but the value of the ID for the element you want to jump to (usually further down the page) 
* an ID attribute uniquely describes an element 
* code assignement 

            change the external link in our code to an internal link with the "#footer" attribute
            change the text "cat photos" to "Jump to Bottom" 
            remove the target="_blank" attribute
            add the ID attrivbute with a value of FOOTER to the <footer> element 
            
            my solution 
            <h2>CatPhotoApp</h2>
            <main>
            <a href="#footer">Jump to Bottom</a>
            <img src="https://bit.ly/fcc-relaxing-cat" alt="A cute orange cat lying on its back.">
            <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff. Purr jump eat the grass rip the couch scratched sunbathe, shed everywhere rip the couch sleep in the sink fluffy fur catnip scratched. Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
            <p>Purr jump eat the grass rip the couch scratched sunbathe, shed everywhere rip the couch sleep in the sink fluffy fur catnip scratched. Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff. Purr jump eat the grass rip the couch scratched sunbathe, shed everywhere rip the couch sleep in the sink fluffy fur catnip scratched.</p>
            <p>Meowwww loved it, hated it, loved it, hated it yet spill litter box, scratch at owner, destroy all furniture, especially couch or lay on arms while you're using the keyboard. Missing until dinner time toy mouse squeak roll over. With tail in the air lounge in doorway. Man running from cops stops to pet cats, goes to jail.</p>
            <p>Intently stare at the same spot poop in the plant pot but kitten is playing with dead mouse. Get video posted to internet for chasing red dot leave fur on owners clothes meow to be let out and mesmerizing birds leave fur on owners clothes or favor packaging over toy so purr for no reason. Meow to be let out play time intently sniff hand run outside as soon as door open yet destroy couch.</p>
            </main>
            <footer id="footer">Copyright Cat Photo App</footer>

### Nest an Anchor Element within a Paragraph
* links can be nested within other text elements
* example: <p>Here's a <a target="_blank" href="http://freecodecamp.org"> link to freecodecamp.org</a> for you to follow.</p>
* the course outlines a description of what each part of the code above does, function wise
* code assignment:
        
            nest the existing a element withi a new p element 
            have the new P text saying "View more cat photos"
            
            my solution:
            <h2>CatPhotoApp</h2>
            <main>
            <p> View more cat photos
            <a href="https://freecatphotoapp.com" target="_blank">cat photos</a>
            <img src="https://bit.ly/fcc-relaxing-cat" alt="A cute orange cat lying on its back.">
            </p>
            <p>Kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff.</p>
            <p>Purr jump eat the grass rip the couch scratched sunbathe, shed everywhere rip the couch sleep in the sink fluffy fur catnip scratched.</p>
            </main>
            


### Make Dead Links Using the Hash Symbol
* what happens in web design when you know a link will be placed on the page, but you don't yet know what the link will be, or you haven't yet received/made the content page you are going to link to? 
* later in our studies, we will see this is also really useful/helpful when we use JAVA SCRIPT 
* code assignment

            currently the HREF attribute value is "https://freecatphotoapp.com"
            repalce it with a # (which is also known as the HASH or NUMBER symbol.  This will create a dead link. 
            example: href="#" 
            
            my solution:
              <p>Click here to view more <a href="#" target="_blank">cat photos</a>.</p>


### Turn an Image into a Link
* make an element into a link by nesting them within an "A" element 
* to next an image you can do likewise 
* here is an example: <a href="#"><img src="https://bit.ly/fcc-running-cats" alt="Three kittens running towards the camera."></a>


### Create a Bulleted Unordered List
notes

### Create an Ordered List
notes

### Create a Text Field
notes

### Add Placeholder Text to a Text Field
notes

### Create a Form Element
notes

### Add a Submit Button to a Form
notes

### Use HTML5 to Require a Field
notes

### Create a Set of Radio Buttons
notes

### Create a Set of Checkboxes
notes

### Use the value attribute with Radio Buttons and Checkboxes
notes

### Check Radio Buttons and Checkboxes by Default
notes

### Nest Many Elements within a Single div Element
notes

### Declare the Doctype of an HTML Document
notes

### Define the Head and Body of an HTML Document
notes
     
     
## Course Review
I already knew basic HTML so for me, this part of the course was *too basic* but, having said that, it was indeed very logical and easy to follow.  The only thing I think which may be difficult to a beginner is the interface.  For example, the instruction on the screen says to do "control + enter" to go to the next screen.  However, since the user interface is designed (very brilliant design, by the way) to look like a code editor (not a normal website interace) after you've switched screens it would be possible for some individuals, not to notice the screen changed. If I had not made an outline for taking notes about this course, for example, to which I could refer back to, I may not have noticed the topics were changing after I did the step as prompted.  Visually the screen looked nearly identical EXCEPT for that heading text--then as I read further down the page-I realized it was the next lesson, not the one I assumed (incorrectly) I didn't complete correctly for this website. 

Havine said that, once you are used to this quirk in design, perhaps not working as you would have expected it to visually work, it is no big deal and isn't even difficult to navigate the website--but perhaps it would have been better, given that the majority of people are visual learners, to give people a heads-up the content is going to visually change as much in this course, as it would in other websites. I think the design is brilliant because it is a combo of what they will need to be doing to code, but still functional enough to be a website experience, not a coding experience exclusively. 
