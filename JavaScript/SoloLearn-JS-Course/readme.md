# SoloLearn JavaScript Course
* Began studies May 1, 2021. 
* in this course sololearn promises we will learn all the basic features of Javascript
* it can be used to make your website more interactive
* used in changing website content
* used to validate forms
* and so much more...

# Overview (6 lessons)
* Welcome to JavaScript
* Do we even need to introduce JavaScript? (Yes, someone is always "new" to any topic)
* It’s one of the most popular programming languages on the planet!
* Ever visited a website that made you think…
* "Hey, this website is really cool and interactive"? 
* Well, JavaScript was probably making it happen.
* So it’s just useful for websites right? Wrong! 
* Process data, mobile and desktop apps, games, the world’s your oyster with JavaScript. 


## [Introduction](https://www.sololearn.com/learning/1024/1123/1331/1)  
* Whether it’s client-side or server-side, create the program of your dreams by unlocking the fundamentals of JavaScript.

QUIZ: 
Welcome to JavaScript
Which is the correct statement?
- JavaScript can be used to create interactive web elements (correct answer) 
- JavaScript is not a client-side language
- JavaScript is only for web apps


## [Creating Your First JavaScript](https://www.sololearn.com/learning/1024/1124/1342/1)

### Ready. Set. JavaScript!
* Let’s start with the basics and add some JavaScript to a webpage.
* On the web, JavaScript code lives inside the HTML document, 
* and needs to be enclosed by <script> and </script>:
* The HTML:
```
<script>
    // javascript would go here inside the HTML document 
</script>
```
* Heads up!
* You can put the script tag anywhere in the HTML document.

QUIZ: Ready. Set. JavaScript!
What tag do you need to use to enclose the JavaScript code?
- style
- code
- body
- script 

### Output 
* Let's use JavaScript to print "Hello World" to the browser. 
* This is what that would look like.Notice some extra stuff there? Nothing gets past you!
* Hello World: https://www.sololearn.com/learning/1024/1124/1344/1 
* Time to introduce the document.write() function. 
* This is what we need to use to write text into our HTML document.
* Feeling fancy? Of course you are!
*  You can also use standard HTML markup language to customize the appearance text in the output: 
*  Heads up!
*  document.write() should be used only for testing. We’ll cover some other output mechanisms real soon.

QUIZ: Output
Output "Hello!" in the browser.
```
<script>
  document.write("Hello!"); 
</script>
```

### Output to console
* Right, we’re now experts in writing HTML output with document.write().
* Time for a different type of output. Let’s learn about output to the browser console.
* For this we’ll be needing the trusty console.log() function.
* Wait, not so fast! What’s this console we’re talking about?
* The console is part of the web browser and allows you to log messages, 
* run JavaScript code, and see errors and warnings.
* It looks like this:
``` console.log("Hello from console!")```
* Heads Up!
* Devs mostly use the console to test their JavaScript code. 
* Awesome! Write a program to print the expression to the console.
  Output: 
  Write a program to output the text "JavaScript is awesome!" to the console.
  Don’t forget the exclamation mark !
  Use console.log() to output the text to the console.

```
//my solution to output "JavaScript is awesome!"
console.log("JavaScript is awesome!")
```
* Result: Practice makes perfect! You have solved the challenge

QUIZ: Output to console
Complete the code to output "Hi!" to the console.
``` console.log("Hi!") ```

## [Variables](https://www.sololearn.com/learning/1024/1128/1362/1)
* Variables are containers for storing data values.
*  The value of a variable can change throughout the program.
*  Declaring a variable is as simple as using the keyword var.
*  Which would look like this: ``` var x = 10; ```
*  In this example we’ve assigned a value of 10 to the variable x.
*  We’ve used the word assigned deliberately here, because in JavaScript, 
*  the equal sign (=) is actually called the "assignment" operator, 
*  rather than an "equal to" operator.
*  Which means that in JavaScript, x = y will assign the value of y to x variable. 
*  Heads up!
*  JavaScript is sensitive, case sensitive that is. 
*  So variables like lastName and lastname are not the same.

QUIZ: Variables
How do we tell JavaScript that we're working with a variable?
- vrb
- int
- variable
- var (correct) 

### Using Variables
* Ok, let’s put some of what we’ve learned together!
* How about we assign a value to a variable and output it to the browser. We’ve got this! 
```
var x = 100;
document.write(x);
```
* But what’s the point of variables anyway? 
* Well, imagine your program has 1000 lines of code that include the variable x. 
* With variables you can change the value of the variables 
* and use them multiple times in your code:
* Like this:
```
var x = 100;
console.log(x);

x = 42;
console.log(x);
```
* Heads Up!
* Every written "instruction" is called a statement. 
* JavaScript statements are separated by semicolons.

QUIZ: Using Variables
Choose the correct keyword to declare a variable and assign the value of 32.
```
var my_variable = 32;
```

### Naming Variables
* Let’s talk about names.
* It’s super important to remember that JavaScript variable names are case-sensitive.
* What do you think the output of the following code would be? 
```
var x = 100;
document.write(X);
```
* output is an error (because there is a smaller-case x and a capital-case X)
* That’s right! An error. That’s because x and X are different, and we didn't declare the X variable.
* Brace yourself for more rules!
- The first character of a variable name must be a letter, underscore (_), or a dollar sign ($) (Subsequent characters can be letters, digits, underscores, or dollar signs).
- The first character of a variable name can’t be a number.
- Variable names can’t include a mathematical or logical operator in their name. For instance, 2*something or this+that;
- Variable names can’t contain spaces.
- You’re not allowed to use any special symbols, like my#num, num%, etc.
* Heads up! JavaScript is a hyphen free zone. They’re reserved for subtractions. 

QUIZ: Naming Variables
Which of these characters can we use to start a variable?
- numbers (incorrect) 
- letters (correct)
- mathematical operators (incorrect) 
- underscore sign (_) (Correct) 

## [Comments](https://www.sololearn.com/learning/1024/1126/1356/1)
* Statements are instructions within our program which get executed. 
* Comments are not executed.  They never run.
* The program ignores comments. 
* Any code after a double sash //
* or between /* and */
* are treated as a comment
* comments are ignored and not executed
* comments are just there for people to read
* to write a single line comment, use double sashes like this: 
```
// This is a single line comment
```
* why write code which is never going to be executed? 
* it isn't a waste of time
* comments are a great idea
* especially comments relating to large functions
* they help make our code more readable to our future self and others
* Heads Up! ``` alert() ``` is used to create a message box in JS
```
alert("This is an alert box!")
```

QUIZ: JavaScript Comments
What does a single line comment look like?
- %%this is a comment
- ** this is a comment 
- // this is a comment (Correct)
- <!--this is a comment-->

### Multiple-Line Comments
* What if we have more to say?
* If we want to create a multi-line comment,
* we write it between /*and */
* Like this:
```
/* This code 
   creates an 
   alert box */
alert("This is an alert box!");
```
* Heads up!
* We use comments to describe and explain what the code is doing.

QUIZ:  Multiple-Line Comments
Create a multi-line comment in JavaScript.
```
/* This is a 
multiple line 
comment*/
```

## [Data Types](https://www.sololearn.com/learning/1024/1129/1370/1) 
* Data Types
* The term data type refers to the types of values a program can work with. 
* The sky's the limit with JavaScript variables,
*  which can hold a bunch of different data types–numbers, strings, arrays, you name it.
* Let's start simple though.
* Numbers can be written with or without decimals. Like this:
``` var num = 42; // A number without decimals ```
* Numbers can be written with or without decimals
* Heads up!
* Changing this variable is a breeze, 
* just assign to it any other data type value,
*  like num = 'some random string'.

QUIZ: Data Types
Fill in the blanks to declare a variable age and assign it the number 18:
``` 
var age = 18;
```


### Strings
* Ok, let’s turn up the heat...
* In JavaScript we can use strings to store and manipulate text.
* A string can be any text wrapped in quotes. 
* Single or double quotes, it doesn’t matter, 
* so long as you’re consistent with them. Like this:
```var name = 'John';
   var text = "My name is John Smith";
```
* What if we want to use quotes inside a string though?? 
* No problem! You can use quotes inside a string, 
* as long as they don't match the quotes
*  enclosing the string itself. Take a look:
```
var text = "My name is 'John' ";
```
* Heads up!
* You can get double quotes inside of double quotes using the escape character like this: \" or \' inside of single quotes.

QUIZ: Strings
To create a string, we need to put the text inside....
- <string> </string> tag (incorrect, this looks like HTML not JS)
- Quotastion Marks (Correct answer) 
- / symbols (incorrect, this is closer to comments)

### Strings
* Now is a good time to talk about the backslash 
* (\) escape character. 
* He comes to the rescue when you need to put quotes 
* within strings (and a bunch of other situations) 
* by transforming special characters into string characters.
* Take a look:
```
var sayHello = 'Hello world! \'I am a JavaScript programmer.\' ';
document.write(sayHello);
```
* But the escape character (\) isn’t just for quotes, 
* it works when you need to put 
* other special characters inside strings too! '

```
SPECIAL CHARACTERS CODE AND OUTPUTS CHART
\' Single Quote 
\" Double Quote 
\\ backslash 
\n new line (equivalent to ending this lin and going to the next)
\r carriage return  (equivalent to "enter") 
\t tab 
\b backspace 
\f form feed (equivalent to pint on the next page) 
```
* Heads up!
If you start a string with a single quote, then you need to end it with a single quote too. This applies to double quotes. Otherwise, JavaScript will get confused. Poor JavaScript.

QUIZ: Strings 
Which of the following is the ecape character? 
- \ (correct) 
- " (incorrect)
- /* (incorrect) 
- / (incorrect) 

### Booleans
* Not just fun to say, Booleans in JavaScript 
* serve a useful function by leting you have one of two values, 
* either true or false.
* when you need a data type that can
*  only have one of two possible values, like Yes/No, on/off or true/false, 
* look no further than Mr Boolean.
*  Let’s look at an example:
```
var isActive = true; 
var isHoliday = false;
```
* Heads up!
* The Boolean value of 0 (zero), null, undefined, 
* empty string is false. 
* Everything with a "real" value is true.

QUIZ: Booleans:
Which two values does the Boolean data type accept? 
- false  (correct) 
- right
- wrong
- true  (correct) 

## Module 1 Quiz
1. Fill in the blanks to output "JS is cool!" to the console:
```
console.log("JS is cool!");
```

2.  Declare a variable called x, assign the value 42 to it and output it to the console.
```
x = 42;
console.log(x);
```

3. What is the output of this code?
```
//x=8;
x=2;
//x=3;
console.log(x);
```
Choices include:
- 3
- 8
- 0
- 2 (this is correct as the other math operations are in comments and therefore ignored) 

4. Rearrange to form valid JavaScript code that declares a variable and outputs it to the console.
```
<script>
name = "James";
console.log(name);
</script>
```



# Basic Concepts (7 lessons)
## Math Operators 
### [Arithmetic Operators](https://www.sololearn.com/learning/1024/1130/1375/1)

## [Assignment Operators](https://www.sololearn.com/learning/1024/1131/1382/1)
* Next in a series very logically named operators is: 
* Assingment Operators 
* We use these to assign values to JS variables 
```
Chart:
Operator: Example:  Is Equivalent to: 
=  | x=y | x=y
+= | x+=y | x= x+ y
-= | x-=y | x = x-y
*= | x*=y | x = x * y
/= | x/=y | x = x/y
%= | x%=y | x=x%y
```
* You can use multiple assignment operators in one line, such as x -= y += 9.

QUIZ: Assignment Operators 
Calculate and enter the resulting value of this expression: 
```
var result = 20;
result *=5
```
My Answer: 100 

## [Comparison Operators](https://www.sololearn.com/learning/1024/1132/1384/1)

We can use comparison operators in logical statements to find out if variables or values are different.

You get either true or false.
For example, the equal to (==) operator checks whether the operands' values are equal.

Heads up!
You can compare all types of data with comparison operators, they’ll always return true or false. 

QUIZ: Comparison Operators
What do comparison operators return?
- false (correct answer)
- wrong (incorrect)
- true (correct answer)
- right (incorrect)

* Check out this table to see a breakdown of Comparison Operators
```
Operator | Description | Example 
==      | Equal to      | 5 == 10 False 
===     | Identical to (equal and of the same data type) | 5===10 Flase
!=      | Not equal to      | 5!=10 true
!==     | Not identical     | 1)!==10 false 
>       | Greater than      | 10 > 5 true
>=      | Greater than or equal to | 10 >=5 true 
<       | Less than         | 10 < 5 false 
<=      | less than or equal to | 10 , = 5 false 

```
Heads up!
One important thing to remember when we use operators, is that they only work when they’re comparing the same data type; numbers with numbers, strings with strings, you get the idea. 

QUIZ: Comparison Operators 
Enter the corresponding operators accordng to the comments at the right
```
val1 == val2 // are equal 
val1 != val 2 // not equal 
val1 < val 2//less than 
val1 === val2 // are strict equal 
```

## [Logical or Boolean Operators](https://www.sololearn.com/learning/1024/1133/1387/1)

### Logical Operators
Logical Operators, also known as Boolean Operators, (or the Vulcan Operators….ok, that one isn't true) evaluate an expression and return true or false.
Check out the table below to see more details on the logical operators (AND, OR, NOT). 
```
Logical Operators 
&& Returns true, if both operands are true 
|| Returns true, if one of hte operands is true 
! Returns true, if the oerand is false and it returns false if the operand is true. 
```
You can check all types of data; comparison operators always return true or false. 

QUIZ: Logical Operators
Logical AND (&&) returns true if:
- If one of the operands is true, but not both 
- If both operands are true. (correct) 
- If only one of the operands is true. 

### Logical Operators
Let's take a look at an example. Here we’ve connected two Boolean expressions with the AND operator. 
``` document.write((4 > 2) && (10 < 15)); ```
For this expression to be true, both conditions need to be true.
- The first condition determines whether 4 is greater than 2, which is true.
- The second condition determines whether 10 is less than 15, which is also true.

Ta da! The whole expression is true...very logical!

### Conditional (Ternary) Operator

Conditional, or Ternary, operators assign a value to a variable, based on some condition.

This is what the syntax would look like: 
``` variable = (condition) ? value1: value2  ```

And another example: 
```
var age = 42;
var isAdult = (age < 18) ? "Too young": "Old enough";
document.write(isAdult);
```

If the variable age is a value below 18, the value of the variable isAdult will be "Too young". Otherwise the value of isAdult will be "Old enough".
Heads up!
With logical operators you can connect as many expressions as you want or need to. 

QUIZ: Logical Operators 
Logical NOT returns true if: 
- The operaand is true
- The operand is false. (correct) 

## String Operators 
String Operators


Time to introduce the most useful operator for strings...drum roll please.

...Concatenation.

We can use concatenation (represented by the + sign) to build strings made up of multiple smaller strings, or by joining strings with other types. Check it out: 

```
var mystring1 = "I am learning ";
var mystring2 = "JavaScript with SoloLearn.";
document.write(mystring1 + mystring2);
```
This example declares and initializes two string variables, and then concatenates them. Simple...but super useful! 

Heads up!
Numbers in quotes are treated as strings: So "42" is not the number 42, it’s a string that includes the two separate characters, 4 and 2. 

Quiz: String Operators
What’s the output of the following code?
```
var x = "50";
var y = "100";
document.write(x+y);
```

- 50100 (correct) 
- Null
- 150 
- 5000

## Module 2 Quiz

1. Which of these names are acceptable for JavaScript variables?
```
- total%sum
- firstNumber (correct)
- 1tv
- _module (correct) 
```

2. Fill in the data types of the data shown below in the comments field: 

12 // number 
"some text" // string
true // boolean 

3. What's the result of the expression var1&&var2, if var1=true and var2=false?
 
- undefined 
- true
- false (correct) 



## Trip Planner Project 
```
function main() {
    var distance = parseInt(readLine(), 10);
    //your code goes here
    var travelTime = (distance/40) * 60
    console.log(travelTime)
}
```
End of Module Project: Trip Planner

You need to plan a road trip. You are traveling at an average speed of 40 miles an hour.
Given a distance in miles as input (the code to take input is already present), output to the console the time it will take you to cover it in minutes.

Sample Input:
150

Sample Output:
225
Explanation: It will take 150/40 = 3.75 hours to cover the distance, which is equivalent to 3.75*60 = 225 minutes. 



# Conditionals and Loops (10 lessons)
## Unit

# Functions (7 lessons)
## Unit

# Objects (6 lessons)
## Unit

# Core Objects (8 lessons) 
## Unit

# DOM & Events (10 lessons)
## Unit

# ECMA Script 6 (11 lesssons)
## Unit


# Certirfication

## Projects 
