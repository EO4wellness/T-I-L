# Introduction to Python for Everybody
* Python for Everybody is a video course that teaches the basics of programming computers using Python 3.
* The course is freely available at: [https://www.freecodecamp.org/learn/scientific-computing-with-python/python-for-everybody/](https://www.freecodecamp.org/learn/scientific-computing-with-python/python-for-everybody/)
* The course was created by Dr. Charles Severance (a.k.a. Dr. Chuck). 
He is a Clinical Professor at the University of Michigan School of Information, 
where he teaches various technology-oriented courses including programming, 
database design, and Web development.
* Python for Everybody is the first course in a two-course part of "Scientific Computing with Python Certification 
coursework with FreeCodeCamp.
* The overall-certification course is expected to take 300 hours of study to complete. 
* _Python for Everybody_ includes 56 lessons: 


# Upcoming Lessons
##  [Introduction: Why Program?](https://github.com/EO4wellness/T-I-L/tree/main/python/FreeCode-Camp)
* computers want to do things for us. 
* all tech basically does nothing until you tell it what to do.
* pretty much all tech is basically waiting, asking, "what do you want to do next" 
* when we learn the tech and tell it what to do, we're making the most of the tech 
* coding is learning to speak the language of our tech so we can tell it what to do
* programmers anticipate needs 
* this course will take you from a tech user to a tech programmer 
* the course is a gateway to even more 
* Resources: 
        
        Install Python on Windows 
        https://youtu.be/F7mtLrYzZP8 
        Install Python on MacOS 
        https://youtu.be/wfLnZP-4sZw
        
* Why be a programmer?  
        
        get tasks accomplished 
        solve problems you have to solve 
        make a living 
        clean up data 
        produce something for others 
        fix a problem 
        add something to a website 
        
* programmers serve the needs of the end user. 
* programmers give intructions to accomplish the goals of the end user. 
* programs are a sequence of stored instructions. 
* Sakai - open source learning platform.
* programming is percise
* tiny errors cause issues 
* everything needs to be perfect to work 
* text analysis is something computers are very good at 
* QUIZ:  Who should learn to program?  A: Everytone. 


## [Introduction: Hardware Architecture](https://youtu.be/wfLnZP-4sZw)
* rewarding job.
* raspberryPI - small computer 
* the architecture stays the same even though we go smaller and smaller 
* Software - central processing unit and main memories. 
* microprocessing unit 
* input and output devices 
* secondary memory 
* CPU asks over and over again "what's next"
* the memory tells it (because it has the software)
* motherboard (older computers have it--the memory plugs into the motherboard)
* hard drive (plugs into the mother board) 
* a hard drive is secondary storage. 
* hard drives differs from main memory 
* main memory is FAST but the memory is lost once the power goes off
* the hard drive is slower but stores things when the power is off 
* hard drives use magentic materials to write the memory to the storage 
* the hard drive is where your OS, files live, applications live 
* revolutions per minute is how most hard drives are rated 
* Central Processing Unit has capicitors resistors and transistors 
* now days the CPU is smaller and smaller due to microsizing everything 
* CENTRAL PROCESSING UNIT - not smart, but fast.  Runs the program.  it is always wondering "what's next?"
* INPUT DEVICES: Keyboard, mouose, touch screen
* OUTPUT DEVICES: screen, speakers, printer, DVD burner
* MAIN MEMORY: fast, small, temporary storage, all its data is lost on rebook, aka RAM
* SECONDARY MEMORY: slower large permanent storage, lasts until deleted, examples are disk drive or memory stick 
* main memory can send instructions 3 billion times a second. 
* your programming python code is writen and stored in secondary memory 
* Python is translated into machine language.
* it sends machine language to the memory to be able to answer the "what's next" question over and over again
* the CPU produces a lot of heat 
* https://www.py4e.com
* QUIZ: Where are you programs stored when they are running?  Memory.  

## [Introduction: Python as a Language](https://youtu.be/0QeGbZNS_bY)
* Python is the language of the Python Interpreter 
* an individual who can speak python is known as pythonista 
* Guido van Rossum 
* ease of learning it 
* the programs are short
* early learner: syntax errors (part of programming woes) 
* > > > is known as the 3 cheveron prompt and it means Python is asking you, "What next?"
* to see the 3 cheveron prompt you should (have) 

      installed python
      open your python terminal 
      type "python"
      wait
      next you will see the python 3 cheveron prompt 
* [Quiz and my answer](https://github.com/EO4wellness/T-I-L/blob/main/python/Images/2021-01-24-fcc-Python-as-a-Language.jpg)


## [Introduction: Elements of Python](https://youtu.be/aRY_xjL35v0)
* continuing this lesson, I saw there is more code to type into Python for the quiz (if we want to)
* the lesson also has everything you need to know the quiz answer without checking it in code
* however, I'm not the type of person to skip the code practice--learning by doing-along with the instructor
* so!  i needed to be able to clear my terminal between quiz questions. 
* i googled and learned the way to clear your scren in Python is typing into the shell/terminal
      
      control key + L 
      
 * once you've done this I found, it accomplishes a clean 3 cheveron prompt for "what's next" 
 * exactly what I was looking for while doing this course
 * i learned this from reading on the [Geeks for Geek's website](https://www.geeksforgeeks.org/clear-screen-python/)
 * to write in Python, we need to learn, like we did in English the components.
 * it will be confusing until you know all of the parts: such as words, make sentences, sentences make paragraphs, paragraphs make essays or stories, or novels, etc. 
 * RESERVED WORDS: - cannot use them for any other purpose than Python commands 
 
        False       Class       Return      is        finally     none      if
        for         lambda      continue    true      def         from      while
        nonlocal    and         del         global    not         with      as
        elif        try         or          yield     assert      else      import
        pass        break       except      in        raise       
        
* a python program is a series of lines, a series of statements. 
* X = 2 is not a mathematical statement
* in Python X = 2 is an assignment statement
* it means, to python, 2 is to be stored in a location and python should remember the name of the location is x 
* Assignment with Expression x = x + 2
* Opperators do things.  Examples of operatores are = + - 
* Programming in Paragraphs - 
* Python Scripts - as your programs get a little large you need to store your python in a script 
* these tend to be named as filename.py 
* a program is a SEQUENCE of steps done in order 
* Some steps are CONDITIONAL (they may be skippped)
* some times a step (or group of steps) are to be repeated (over and over again) 
* python executes instructions in order. 
* flow charts show the steps the program is following as it does each step along the route of your instructions 
* CONDITIONAL STEPS - only do the instructions if something is true (or what ever you set up) 
* Conditional steps are generally IF statements.  If it is greater than or equal to, then do this or that...
* In conditionals : means we are in a block of statements 
                  they are also indented to find the block of steps 
* EXIT condition is how we get out of repeated steps                   
        WHILE is part of the repeated steps coding 
        LOOPS (repeated steps) have ITErATION VARIABLES that change each time through the loop
* [Quiz Question and my Work](https://github.com/EO4wellness/T-I-L/blob/main/python/Images/2021-01-24-fcc-Python-as-a-Language.jpg)       
    
    End of 1/24-2021 study session.
    
## Variables, Expressions, and Statements
* [Resume Studies-next session here](https://www.freecodecamp.org/learn/scientific-computing-with-python/python-for-everybody/variables-expressions-and-statements)


## Intermediate Expressions
* 


## Conditional Execution
* 


##  More Conditional Structures
* 



##  Python Functions
* 



## Build your own Functions
* 



##  Loops and Iterations
* 



##  Iterations: Definite Loops
* 



## Iterations: Loop Idioms
* 



## Iterations: More Patterns
* 



## Strings in Python
* 



## Intermediate Strings
* 



##  Reading Files
* 



##  Files as a Sequence
* 



## Python Lists
* 



##  Working with Lists
* 



## Strings and Lists
* 



##  Python Dictionaries
* 



##  Dictionaries: Common Applications
* 



## Dictionaries and Loops
* 



##  The Tuples Collection
* 



## Comparing and Sorting Tuples
* 



## Regular Expressions
* 



## Regular Expressions: Matching and Extracting Data
* 



## Regular Expressions: Practical Applications
* 



## Networking with Python
* 



## Networking Protocol
* 



##  Networking: Write a Web Browser
* 



## Networking: Text Processing
* 



## Networking: Using urllib in Python
* 



## Networking: Web Scraping with Python
* 



##  Using Web Services
* 



## Web Services: XML
* 



## Web Services: XML Schema
* 



##  Web Services: JSON
* 



##  Web Services: Service Oriented Approach
* 



##  Web Services: APIs
* 



## Web Services: API Rate Limiting and Security
* 



##  Python Objects
* 



## Objects: A Sample ClassObject Lifecycle
* 



##  Objects: Inheritance
* 



## Relational Databases and SQLite
* 



## Make a Relational Database
* 



## Relational Database Design
* 



## Representing Relationships in a Relational Database
* 



## Relational Databases: Relationship Building
* 



## Relational Databases: Join Operation
* 

## Relational Databases: Many-to-many Relationships
* 


## Visualizing Data with Python
* 


## Data Visualization: Page Rank
* 


## Data Visualization: Mailing Lists
* 



