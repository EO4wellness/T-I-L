# [Python Core](https://www.sololearn.com/learning/1073)
* I started this course in 2018. 
* I didn't finish the course. 
* The course was updated. 
* Today (2021-05-26) I reset my progress in this course to ZERO so I could start again with the new coursework included too.
* SoloLearn Course link: https://www.sololearn.com/learning/1073 
* Learn Python, one of today's most in-demand programming languages on-the-go! 
* Practice writing Python code, collect points, & show off your skills now!

## Basic Concepts (8 Units of Study) 
### 1.1 Welcome to Python! 
* we begin by writing our first code
* it uses the '''print ()''' function 
* Example: 
```
print('Hello world!')
```
* Note that the text should be enclosed into single or double quotes. 
* The print statement needs to be followed by parentheses, which enclose the output we want to generate.

QUIZ: Finish this code to output "Hi" 
``` print("Hi")```

* The print statement can also be used to output multiple lines of text. 
* Python code often contains references to the comedy group Monty Python. 
* This is why the words, "spam" and "eggs" are often used as placeholder variables in Python.
```
print('Hello world!')
print('Hello world!')
print('Spam and eggs...')
```

QUIZ: arange the code to generate the following output: A /n B /n C
```
print("A")
print("B")
print("C")
```

### 2.1 Why Python 
Python is a high-level programming language, with applications in numerous areas, including web programming, scripting, scientific computing, and artificial intelligence!

It is very popular and used by organizations such as Google, NASA, the CIA, and Disney.
In this course we will be learning Python version 3, which is the most recent major version of Python.

QUIZ: Python is a:
- set of editing tools
- develoopment environment 
- programming language (correct answer) 

Why Python?


There are almost no limitations on what can be built using Python. These include standalone apps, web apps, games, data science and machine learning models, and much more.

To use Python, you first need to install it on your computer. In our course, you will be able to run, save, and share your Python code on our Code Playground without installing any additional software.
Fun fact: According to the creator Guido Van Rossum, the name of Python was derived from the British comedy series "Monty Python's Flying Circus".

QUIZ: Can Python be used in Machine Learning?
Yes! 


### 3.1 Simple Operations 
* Python has the capability of carrying out calculations.
* Enter a calculation directly into the print statement:
* Examples: 
```
print(2 + 2)
priint(5 + 4 -3)
```
* The spaces around the plus and minus signs here are optional (the code would work without them), 
* but they make it easier to read.

QUIZ: What does this code output? 
```
print(1 + 2 +3)
```
6

* Python also carries out multiplication and division, 
* using an asterisk * to indicate multiplication 
* and a forward slash / to indicate division.
* Use parentheses to determine which operations are performed first.
* Examples: 
```
print( 2 * (3 + 4) ) 
print( 10 / 2 )
```
* these examples output, respectively, 14 and 5.0 (divsion produces a float) 
* Using a single slash to divide numbers produces a decimal (or float, as it is called in programming). 
* We'll have more about floats in the next lesson.

Quiz: 
which option is output by this code? 
``` print((4+8)/2)```
- 6.0 (correct answer) 
- 6
- 8

### 4.1 [Floats](https://www.sololearn.com/learning/1073/2272/4564/1)
* Floats are used in Python to represent numbers that aren't integers (whole numbers).
Some examples of numbers that are represented as floats are 0.5 and -7.8237591.
They can be created directly by entering a number with a decimal point, or by using operations such as division on integers.

```
print( 3/4 )
print( 0.42 )
```
This code example outputs:  0.75 /n 0.42

Computers can't store floats perfectly accurately, in the same way that we can't write down the complete decimal expansion of 1/3 (0.3333333333333333...). Keep this in mind, because it often leads to infuriating bugs!

QUIZ: Which of these will not be stored as a float?
- 7.0
- 7 (correct answer) 
- 2/4 


As you saw previously, dividing any two integers produces a float.
A float is also produced by running an operation on two floats, or on a float and an integer.

```
print( 8 / 2 )
print( 6 * 7.0 )
print( 4 + 1.65 )
```
The output of this example is: 4.0 /n 42.0 /n 5.65 

A float can be added to an integer, because Python silently converts the integer to a float.

Quiz: 
what is the outcome of this code?
print(1+2+3+4.0+5)
my answer: 15.0 


### 5.1 Exponentiation 
Besides addition, subtraction, multiplication, and division, Python also supports exponentiation, which is the raising of one number to the power of another. This operation is performed using two asterisks.
You can chain exponentiations together. In other words, you can rise a number to multiple powers. For example, 2**3**2.

QUIZ: 
print 5 raised to the 3rd power

``` print(5**3)```

You can also use floats in exponentiation.

For example, the following code will result in the square root of 9:
Note that the result will be a float.

QUIZ: what is the output of this code? 
print(8**(1/3))
2.0 



### 6.1 [Quotient and Remainder](https://www.sololearn.com/learning/1073/4430/4566/1)
* Floor division is done using two forward slashes 
* it is used to determine the quotient of a division 
* (the quantity produced by the division of two numbers).
* You can also use floor division on floats.
* For example:
``` print( 20 // 6 )  ```
* The code above will output 3, because 6 goes into 20 three times. 
* You can also use floor division on floats.

QUIZ: What is the output of this code? 
print(10//4)
-3 
-0
-2 (correct answer) 

* remainder 
* The modulo operator is carried out with a percent symbol (%) 
* it is used to get the remainder of a division.
* For example:
```
print(20 % 6)
print(1.25 % 0.5) 
```

QUIZ: What is the result of this code? 
```print(7%(5//2))```
-7 
-1 (correct answer) 
-0

### 7.1 Module 1 Quiz 
1. What is the result of the following code? 
```print(1+4*3)```
-15
-13 (correct answer) 
-12

2. Code the output I love Python: 
```
print("I love Python")
```

3. What is the output of this code? 
``` print( (3**2)//2 ) ```
Answer: 4 (which is nine devided by 2) 

4. Which of the following operators is used to calculate the remainder of division? 
- % (this is the correct answer) 
- //
- /
- **

5. Fill in the blank to output the quotient of dividing 100 by 42.
```print(100//42)```

6. Code output that raises 10 to the 5th power 
```
print(10**5)
```

### 8.1 Code Project - Exponentiation 
Exponentiation


Exponentiation is the raising of one number to the power of another.
This operation is performed using two asterisks **.

Let's use exponentiation to solve a known problem.
You are offered a choice of either $1.000.000 or $0.01 (one penny) doubled every day for 30 days (the resulting amount is doubled every day).

Task:
Write a program to calculate the amount that will result from the doubling to understand which choice results in a larger amount.

Hint:
Let's see how exponentiation can be useful to perform the calculation.
For example, if we want to calculate how much money we will have on the 5th day, we can use this expression: 0.01*(2**5) = 0.32 dollars (multiply the penny by 2 raised to the power of 5).
Use the print statement to output the resulting amount. 


'''
# your code goes here
# day =range (1,30)
# print("If I were to offer you $1,000.00 dollars a day, for the next 30 days")
# print('Or would you prefer')
print (0.01 *(2 **30))
'''
https://www.sololearn.com/Discuss/2629244/write-program-to-calculate-the-amount-that-will-result-from-the-doubling-to-understand-which-choice
```
To solve the Python Core Unit 1 challenge you will need to: 
1) Comment out the other lines of code you are given by placing a "#" before each line of code. 
2) Add this single line of code: print(.01*(2**30)) 
3) Run

Strategy to Solve: 
Step 1: If you don't do step one, your output will not match the information in the expected outcome.  Run your code and you will see nothing in the "input" area, a bunch of sentences and the correct answer in the second "your output" area, and expected outcome to just be the amount of money you will have after 30 days if you take the one-penny/cent doubling each day. 

Step 2: This step means the one cent/penny doubling every day for 30 days. 

Step 3 Running the code, the first time, is necessary to learn you need to do step one to solve this problem (even if everything else is correct). 

Hope this helps.
```

## Strings and Variables (10 Units of Study) 
### 1.1 [Strings](https://www.sololearn.com/learning/1073/2274/4567/1)
* to use text, you have to use strings
* a string is created by entering text between two single qutation marks
* alternatively, you can put text between two double quotation marks
* The delimiter (" or ') used for a string doesn't affect how it behaves in any way.
* Example: 
```
print("Python is fun!")
print('Always look on the bright side of life')
```
QUIZ: complete the code to output "hello world" 
```
print("Hello world!")
```

* Backslash
* Some characters can't be directly included in a string. For instance, double quotes can't be directly included in a double quote string; this would cause it to end prematurely.

Characters like these must be escaped by placing a backslash before them.
Double quotes only need to be escaped in double quote strings, and the same is true for single quote strings.

For Example:
```
print('Brian\'s mother: He\'s not an angel. He\'s a very naughty boy!')

```

Backslashes can also be used to escape tabs, arbitrary Unicode characters, and various other things that can't be reliably printed.

QUIZ: Backslash
Complete the code to output a string containing a single quote.

print('I\'m learning!')

### 2.1 Newlines
Newlines
\n represents a new line 
it can be usedin strings to create multi-line output 
similarly \t represents a tab 

QUIZ: Newlines 
Which of the following options results in exactly two lines? 
- 'one \' two \' three'
- "Some \n text \n goes here"
- Hello World"
- "Hello \n world" (correct answer) 

Newlines will be automatically added for strings that are created using three quotes
For example: 

HOw many lines will the following code output? 
```
print("Hi")
print("""THis
is
great""")
```
four lines of output 


### 3.1 [String Operations](https://www.sololearn.com/learning/1073/2427/4952/1)
* Concatenation 
* as with integers and floats
* strings in Python can be added
* using a process called CONCATENATION
* which can be done on any two strings
``` print("Spam" + 'eggs')```
* even if your strings contain numbers 
* they are still added as strings rather than integers
``` print('2' + '2') ```
* Adding a string to a number produces an error
* as even though they might look similar
* they are two different entities 

QUIZ: code for output of Python is Awesome using concatenation
``` print("Python" + "is" + "awesome")```

* string operations
* strings can also be multipled by integers 
* this produces a repeated version of the original string
* the order of the string and the integer doesn't matter
* however, the string usually comes first
``` print('spam' * 3)
print (4 * "2") ```
* strings cannot be ultipled by other strings
strings also cannot be multipled by floast
even if the floats are whole numbers 

quiz: 
what is the output of this code?
``` 
print(3*'7`) 
```
777


### 4.1 [Variables](https://www.sololearn.com/learning/1073/2428/4957/1)

### 5.1 Working with Variables 
### 6.1 Taking User Input  
### 7.1 Working with Input 
### 8.1 In-Place and Walrus Operators 
### 9.1 Modeul 2 Quiz 
### 10.1 Code Project - Simple Calculator 

## Control Structures (13 Units of Study)

## Functions and Modules (10 Units of Study)

## Exceptions and Files (11 Units of Study) 

## More Types (11 Units of Study) 

## Functional Programming (10 Units of Study)

## OOP (10 Units of Study)

## Regular Expressions (9 Units of Study) 

## Pythonicness and Packaging (12 Units of Study) 

# Certification 
In order to get you certificate you should complete the course. 
Certificates allow you to prove your education.
