# [Python for Beginners](https://www.sololearn.com/learning/1157)
* Began course study: 2021-05-04
* Course intro: 
```
Python is a popular, easy-to-learn, and very powerful 
programming language, which is used in software and web development,
data science, machine learning, and many other fields. 
In this course, we’ll cover the basic concepts of Python, 
as well as build real-life projects 
and solve different coding challenges. 
Python for Beginners requires no prior programming experience, 
so let’s dive right in!
```

# Course Outline and Notes: 

## Basic Concepts (8 lessons) 
### Introduction 
![started learning]()

* The first thing you notice about this course?
* Yep!  The sense of humor! From the name, thru the lessons.

Want to build a slick website? Develop a video game? Or maybe create an artificial intelligence? Python’s got you covered, and then some. Python is a high-level programming language, with a ton of applications.

It’s seriously flexible and accessible, which makes it popular with some of the world's biggest (and coolest) organizations–think Google, NASA, Disney...*whispers* even the CIA.

In this course, we’ll cover the basic concepts of Python, as well as build real-life projects and solve different coding challenges!
We will be learning Python version 3, which is the most recent major version of Python.

QUIZ: Welcome to Python!
Each lesson will be followed by a quiz designed to help you practice and retain the concepts learned. Ready? Let's jump right in!
Which version of Python are we going to learn in this course?

_ Python 7 (incorrect)
_ Python 2 (incorrect)
_ Python 3 (correct) 

### Hello World 
* Let's kick things off by creating a simple program 
* that displays the text "Hello world!".
* In Python, we use the print function to output text.
* So to generate our message, the code would look like this: 
```  print("Hello World!") ```
* Nice work! You’ve just written your first Python program. 
* Easy, right? You’ll be triggering the singularity in no time! 
* The print statement is always followed by parentheses 
* containing the output we want to generate.
* [My very frist code in this course](https://github.com/EO4wellness/T-I-L/blob/main/python/SoloLearn/code-scripts/SL_Hello-World.py)

QUIZ: Hello World!
Drag and Drop the correct option to output "Learning Python".
``` print (L"Learning Python") ```

### Printing Text
* MOre to say?  Of course you do! 
* You can use the print statemtn to output multiple lines of text.
* Example: 
```
print('Hello world!')
print('Hello world!')
print('Spam and eggs...')
```
* Viola. Each print statement will output its text on a new line.
* Python code contains lots of references to Monty Python. 
* So you’ll see "spam" and "eggs" used as placeholder variables.
* [My second code in this course](https://github.com/EO4wellness/T-I-L/blob/main/python/SoloLearn/code-scripts/SL_Hello-World-multi-line-example.py) this one adds a bit of personal flare (i.e. my love of learning other languages) to the original code, above.

### Simple Operations 
### Data Types 
### Exponentiation 
### Outient And Remainder 
### Module 1: Quiz
### Flight Time: Project

## Strings (5 lessons)
* We met strings in module 1, 
* but now it’s time to get better acquainted.
* Simply put, if you want to use text in Python, 
* you have to use a string. 
* But there’s a lot more to it than that, 
* as we’ll find out together!
* We can create a string by entering text 
* between two single or double quotation marks. 
* Like this: 
```
print("Python is fun!")
print('Always look on the bright side of life')
```
* The delimiter (" or ') used for a string doesn't affect how it behaves in any way.

QUIZ: Strings 
Drag and drop the correct option to output the string 'Hi there'
``` print('Hi there') ```

### Backslash
* But what if you want to include a single quote 
* in a single-quoted string 
* (or a double quote in a double-quoted string)?
*  Normally this would confuse Python and break the code, 
*  that is unless you escape the quotes using a backslash.
*  For Example:
```
print('Brian\'s mother: He\'s not an angel. He\'s a very naughty boy!')
```
*  Backslashes that we use for escaping, don’t get displayed in the output.

QUIZ: Backslash 
``` print('I\'m learning!') ```

### Newlines
* Ok, so we can generate text, but it’d be pretty hard to read 
* if everything was on one single line, right?
* To create a new line we use \n.
* \n can be used in strings to create multi-line outputs. Like this:
``` print('One \nTwo \nThree') ```
* Based on what we just learned, can you guess how we represent tab? That’s right, it’s \t.

QUIZ: Newlines
Which of the following options results in exactly two lines?
- "Hello world" (incorrect: 1 line) 
- 'one \' two\' three' (incorrect)
- "Hello \n world" (correct) 
- Some \n text \n goes here" (incorrect: 3 lines) 

### Newlines


\n is useful, but it can be a bit of a pain if we’re trying to format lots of multiline text.

There’s another way though! Newlines are automatically added for strings created using three quotes.
For example:
```
print("""this
is a
multiline
text""")
```
This makes it easier to format long, multi-line texts without the need to explicitly put \n for line breaks.


Quiz: Newlines
How many lines will the following code output?
```
print("Hi")
print("""This 
is
great""")
```
- 2
- 3
- 4 (correct)
- 5

### [Concatenation](https://www.sololearn.com/learning/1157/4587/11720/1)
* In Python math works with words as well as numbers.
* So not only can we add integers and floats, but also strings,
* using something called concatenation, which can be done on any
* two strings. Like this: ``` print("Spam" + 'eggs') ``` 
* And it even works with numbers! 
* Strings containing numbers are still added as strings 
* rather than integers. Like this: ``` print("2" + "2") ```
* But don’t try to add a string to a number! 
* Even though they might look similar, 
* they are two different entities,
* so doing this will break the code and produce an error.

QUIZ: Concatenation
Fill in the blanks to produce “Python rocks”.

``` print("Python " + "rocks") ``` 

### String Operations
* You may not be able to add strings to integers,
* but you can multiply by them!
* Multiplying a string by an integer, 
* produces a repeated version of the original string. 
* Like this:
```
print("spam" * 3)
print(4 * '2')
```
* But don’t try to multiply a string by another string. 
* This will just generate an error. 
* The same will happen if you try to multiply a string by a float,
* even if the float is a number.

QUIZ: String Operations
What is the output of this code?
```
print(3 * '7')
```
777

### Module 2 Quiz: 
1. Which of the following is a string? 
- 42.0 
- '42' (correct)
- 42

2. Fill in the blanks to output "Welcome".
```  print("Welcome") ```

3. What's theoutput of this code? 
``` print("42"+'5') ```
- error 
- 425 (correct)
- 42.5 
- 47

4. Fill in the blanks to output "ABC":
``` print("A"+"B"+"C") ```

5. Which of the following is the escape character?
- \ (correct) 
- * 
- +
- /

### [Leaderboard:](https://www.sololearn.com/learning/eom-project/1157/1058)
* Strings
* You need to make a program for a leaderboard.
* The program needs to output the numbers 1 to 9, 
* each on a separate line, 
* followed by a dot:
* Example:
 ```
1.
2.
3.
```
* You can use the \n newline character to create line breaks, 
* or, alternatively, 
* create the desired output using three double quotes """.

## Variables (7 lessons)

## Control Flow (8 lessons) 

### Project

[Simple BMI Calculator-My Code](https://github.com/EO4wellness/T-I-L/blob/main/python/SoloLearn/code-scripts/BMI-Calculator.py)
![simple bmi calculator](https://github.com/EO4wellness/T-I-L/blob/main/python/SoloLearn/Images/2021-05-06-bmi-calculator.jpg)

## Lists (8 lessons)
* Great work getting this far! 
* You’ll be a Python master in no time.
* Let’s kick off module 5 by talking about lists
* At their simplest, Lists are used to store items.
* We can create a list by using square brackets with commas separating items. 
* Like this: ``` words = ["Hello", "world", "!"]  ```


## Functions (9 lessons) 

# Certification 



