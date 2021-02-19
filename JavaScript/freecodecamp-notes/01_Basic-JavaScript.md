# Basic JavaScript 
    
## Comment Your JavaScript Code 
* Comments in JavaScript are either one line or multiple lines. 
* a one line comment follows this formatting:

		// This is a one-line comment
		
* a multiple line comment always begins wwith "/*" and ends with "*/"

		/* this is a 
		multiple line
		comment */
		
* The best practice when writing comments is to use them often within your code. 
* Comments help others (on your team), yourself (debugging), and your future self figure out what each portion of code was intended to do and why you're doing it. 


### Coding assignment:  
[Write one comment of each type.](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/01.1_comment-your-javascript-code.txt)
* End of 2021-01-21 Study Session 

## [Declare JavaScript Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/declare-javascript-variables)
* DATA - is anything which is meaningful to the computer. 
* JavaScript has 8 different data types.
*  JavaScripte Data Types:
 
	undefined
	null
	boolean
	string
	symbol
	bigint
	number 
	object 
* STRINGS - are collections of characters 
* A mathematical operation can be performed on a number, but not on a string.
* VARIABLES - allow computers to store and manipulate data in a dynamic way.
* Computers use a label to point to the data, rather than using the data its self.
* All 8 of the data types can be stored in a variable. 
* Variables are similar to the "X" or "Y" variables used in mathematics.
* Variables are a simple name which represent the data we want to refer to
* Computer variables are different than math variables as they can store different values at different times.
* We declare or create a JavaScript variable by butting the keyword "VAR" in front of it. 

	Example:
	var ourName; 
	
* The above Example code creates a VARIABLE called OurName
* In JavaScript we end statements with semicolons, as shown in the example above
* VARIABLE names can be made up of numbers, letters, $ or _
* VARIABLE names cannot contain spaces or start with a number 

	Code Assignment: Use VAR to create a variable called mnName
	
* End of 2021-01-22 Study Session 
	
## [Storing Values with the Assignment Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/storing-values-with-the-assignment-operator)
* in JavaScript you can store information in a variable using the assignment operator. 
* the ASSIGNMENT OPERATOR is the = symbol. 
* Example: 

		myVariable = 5; 
		this assigns the number value of 5
		to the variable named myVariable 
		
* if there are any calculations to the right of the = operator, those are performed before the value is assigned to the variable on the left of the operator. 

		Example:
		
		var myVar; 
		myMar = 5;
		
* The above example code creates a variable named myVar
* it then assigns 5 to the myVar variable 
* if myVar occurs anywhere else in the code, it will now treat it as if it were 5 (unless it is changed)
* CODE ASSIGNEMENT: assign the value 7 to the variable a 


## [Assigning the Value of One Variable to Another](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/assigning-the-value-of-one-variable-to-another)
* once a variable's value is assigned using the ASSIGNEMENT OPERATOR, you can assign the value of that variable to another variable.
* Example Code of Concept: 
			var myVar;
			myVar = 5;
			var myNum;
			myNum = myVar;
			
* this sample code beings by declaring myVar but doesn't give it any value.
* next, the declared variable (myVar) is given the value of 5
* then a new variable named myNum is declared.  again it is not yet given any value.
* then myNum is given the value of myVar (which is 5)
* now myNum and myVar both have the value of 5 associated with them
* CODE ASSIGNMENT: Assign the contents of a to b

## [Initializing Variables with the Assignement Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/initializing-variables-with-the-assignment-operator)
* While in the above examples, we didn't declare a variable and set its intial value, this isn't the most common practice. 
* Generally when variables are declared, we also set their value all in the same step. 
* CODE ASSIGNEMENT: Define a variable _a_ with _var_ and initialize it to the value of _9_

## [Understanding Uninitialized Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-uninitialized-variables)
* When ever a variable is declared in JavaScript, it begins with an initial value of UNDEFINED.
* If you attempt to do a mathematical operation on an UNDEFINED variable, your result will be NaN
* NaN means Not a Number 
* if you concatenate a string with an UNDEFINED variable, you will get a literal string of "undefined"
* CODE ASSINGMENT: Initialize the 3 variables a, b, and c, with 5, 10, and "I am a" respectively, so that they will not be undefined. 


_End of 2021-02-12 Study Session_

## [Understanding Case Sensitivity in Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-case-sensitivity-in-variables)
*
* CODE ASSIGNMENT: 

## [Understanding Case Sensitivity in Variables](#)
*
* CODE ASSIGNMENT: 

## [Add Two Numbers with JavaScript](#)
*
* CODE ASSIGNMENT: 

## [Subtract One Number from Another with JavaScript](#)
*
* CODE ASSIGNMENT:

## [Multiply Two Numbers with JavaScript](#)
*
* CODE ASSIGNMENT:


## [Divide One Number by Another with JavaScript](#)
*
* CODE ASSIGNMENT:


## [Increment a Number with JavaScript](#)
*
* CODE ASSIGNMENT:


## [Decrement a Number with JavaScript](#)
*
* CODE ASSIGNMENT:


## [Create Decimal Numbers with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/create-decimal-numbers-with-javascript)
* Decimal numbers can also be stored in variables too. 
* FLOATING POINT numbers or FLOATS are yet another name referring to decimal numbers. 
* It is important to note: not all real numbers can be accurately represented as a floating point.  
* Floating point can lead to rounding errors.
* Wiki article about the [float accuracy problem](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/create-decimal-numbers-with-javascript).
* CODE ASSIGNMENT: Create a variable myDecimal and give it a decimal value with a fractional part (e.g. 5.7).


## [Multiply Two Decimals with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/multiply-two-decimals-with-javascript)
* you can use decimal numbers, just like whole numbers, to perform various calculations with them
* CODE ASSIGNMENT: Change 0.0 so that the product will equal 5.0 

## [Divide One Decimal by Another with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/divide-one-decimal-by-another-with-javascript)
* Using JavaScript you can also divide one decimal by another. 
* CODE ASSIGNMENT: Change the 0.0 so that quotient will equal to 2.2.


## [Finding a Remainder in JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/finding-a-remainder-in-javascript)
* the "remainter" operator % gives the remainder of the division of two numbers 
* Usage
In mathematics, a number can be checked to be even or odd by checking the remainder of the division of the number by 2.
* Note
The remainder operator is sometimes incorrectly referred to as the "modulus" operator. It is very similar to modulus, but does not work properly with negative numbers.
* CODE ASSIGNMENT:Set remainder equal to the remainder of 11 divided by 3 using the remainder (%) operator.


## [Compound Assignment With Augmented Addition](#)
*
* CODE ASSIGNMENT:

## [Compound Assignment With Augmented Subtraction](#)
*
* CODE ASSIGNMENT:


## [Compound Assignment With Augmented Multiplication](#)
*
* CODE ASSIGNMENT:


## [Compound Assignment With Augmented Division](#)
*
* CODE ASSIGNMENT:


## [Declare String Variables](#)
*
* CODE ASSIGNMENT:


## [Escaping Literal Quotes in Strings](#)
*
* CODE ASSIGNMENT:


## [Quoting Strings with Single Quotes](#)
*
* CODE ASSIGNMENT:


## [Escape Sequences in Strings](#)
*
* CODE ASSIGNMENT:


## [Concatenating Strings with Plus Operator](#)
*
* CODE ASSIGNMENT:


## [Concatenating Strings with the Plus Equals Operator](#)
*
* CODE ASSIGNMENT:


## [Constructing Strings with Variables](#)
*
* CODE ASSIGNMENT:


## [Appending Variables to Strings](#)
*
* CODE ASSIGNMENT:


## [Find the Length of a String](#)
*
* CODE ASSIGNMENT:


## [Use Bracket Notation to Find the First Character in a String](#)
*
* CODE ASSIGNMENT:


## [Understand String Immutability](#)
*
* CODE ASSIGNMENT:


## [Use Bracket Notation to Find the Nth Character in a String](#)

*
* CODE ASSIGNMENT:

## [Use Bracket Notation to Find the Last Character in a String](#)

*
* CODE ASSIGNMENT:

## [Use Bracket Notation to Find the Nth-to-Last Character in a String](#)
*
* CODE ASSIGNMENT:

## [Word Blanks](#)

*
* CODE ASSIGNMENT:

## [Store Multiple Values in one Variable using JavaScript Arrays](#)
*
* CODE ASSIGNMENT:

## [Nest one Array within Another Array](#)
*
* CODE ASSIGNMENT:

## [Access Array Data with Indexes](#)
*
* CODE ASSIGNMENT:

## [Modify Array Data With Indexes](#)
*
* CODE ASSIGNMENT:

## [Access Multi-Dimensional Arrays With Indexes](#)
*
* CODE ASSIGNMENT:

## [Manipulate Arrays With push()](#)
*
* CODE ASSIGNMENT:

## [Manipulate Arrays With pop()](#)
Not Passed
## [Manipulate Arrays With shift()](#)
*
* CODE ASSIGNMENT:

## [Manipulate Arrays With unshift()](#)
*
* CODE ASSIGNMENT:

## [Shopping List](#)
*
* CODE ASSIGNMENT:

## [Write Reusable JavaScript with Functions](#)
*
* CODE ASSIGNMENT:

## [Passing Values to Functions with Arguments](#)
*
* CODE ASSIGNMENT:

## [Global Scope and Functions](#)
*
* CODE ASSIGNMENT:

## [Local Scope and Functions](#)
*
* CODE ASSIGNMENT:

## [Global vs. Local Scope in Functions](#)
*
* CODE ASSIGNMENT:

## [Return a Value from a Function with Return](#)
*
* CODE ASSIGNMENT:

## [Understanding Undefined Value returned from a Function](#)
*
* CODE ASSIGNMENT:

## [Assignment with a Returned Value](#)

*
* CODE ASSIGNMENT:

## [Stand in Line](#)
*
* CODE ASSIGNMENT:

## [Understanding Boolean Values](#)

*
* CODE ASSIGNMENT:

## [Use Conditional Logic with If Statements](#)
*
* CODE ASSIGNMENT:

## [Comparison with the Equality Operator](#)
*
* CODE ASSIGNMENT:

## [Comparison with the Strict Equality Operator](#)
*
* CODE ASSIGNMENT:

## [Practice comparing different values](#)
*
* CODE ASSIGNMENT:

## [Comparison with the Inequality Operator](#)
*
* CODE ASSIGNMENT:

## [Comparison with the Strict Inequality Operator](#)
*
* CODE ASSIGNMENT:

## [Comparison with the Greater Than Operator](#)
*
* CODE ASSIGNMENT:

## [Comparison with the Greater Than Or Equal To Operator](#)
*
* CODE ASSIGNMENT:

## [Comparison with the Less Than Operator](#)
*
* CODE ASSIGNMENT:

## [Comparison with the Less Than Or Equal To Operator](#)
*
* CODE ASSIGNMENT:
## [Comparisons with the Logical And Operator](#)
*
* CODE ASSIGNMENT:

## [Comparisons with the Logical Or Operator](#)
*
* CODE ASSIGNMENT:

## [Introducing Else Statements](#)
*
* CODE ASSIGNMENT:

## [Introducing Else If Statements](#)
*
* CODE ASSIGNMENT:

## [Logical Order in If Else Statements](#)
*
* CODE ASSIGNMENT:


## [Chaining If Else Statements](#)
*
* CODE ASSIGNMENT:


## [Golf Code](#)
*
* CODE ASSIGNMENT:


## [Selecting from Many Options with Switch Statements](#)
*
* CODE ASSIGNMENT:


## [Adding a Default Option in Switch Statements](#)
*
* CODE ASSIGNMENT:


## [Multiple Identical Options in Switch Statements](#)
*
* CODE ASSIGNMENT:


## [Replacing If Else Chains with Switch](#)
*
* CODE ASSIGNMENT:


## [Returning Boolean Values from Functions](#)
*
* CODE ASSIGNMENT:


## [Return Early Pattern for Functions](#)
*
* CODE ASSIGNMENT:


## [Counting Cards](#)
*
* CODE ASSIGNMENT:


## [Build JavaScript Objects](#)
*
* CODE ASSIGNMENT:


## [Accessing Object Properties with Dot Notation](#)
*
* CODE ASSIGNMENT:


## [Accessing Object Properties with Bracket Notation](#)
*
* CODE ASSIGNMENT:


## [Accessing Object Properties with Variables](#)
*
* CODE ASSIGNMENT:


## [Updating Object Properties](#)
*
* CODE ASSIGNMENT:


## [Add New Properties to a JavaScript Object](#)
*
* CODE ASSIGNMENT:


## [Delete Properties from a JavaScript Object](#)
*
* CODE ASSIGNMENT:


## [Using Objects for Lookups](#)
*
* CODE ASSIGNMENT:


## [Testing Objects for Properties](#)
*
* CODE ASSIGNMENT:


## [Manipulating Complex Objects](#)
*
* CODE ASSIGNMENT:


## [Accessing Nested Objects](#)
*
* CODE ASSIGNMENT:


## [Accessing Nested Arrays](#)
*
* CODE ASSIGNMENT:


## [Record Collection](#)
*
* CODE ASSIGNMENT:


## [Iterate with JavaScript While Loops](#)
*
* CODE ASSIGNMENT:


## [Iterate with JavaScript For Loops](#)
*
* CODE ASSIGNMENT:


## [Iterate Odd Numbers With a For Loop](#)
Not Passed
## [Count Backwards With a For Loop](#)
*
* CODE ASSIGNMENT:


## [Iterate Through an Array with a For Loop](#)
*
* CODE ASSIGNMENT:


## [Nesting For Loops](#)
*
* CODE ASSIGNMENT:


## [Iterate with JavaScript Do...While Loops](#)
*
* CODE ASSIGNMENT:


## [Replace Loops using Recursion](#)
*
* CODE ASSIGNMENT:


## [Profile Lookup](#)
*
* CODE ASSIGNMENT:


## [Generate Random Fractions with JavaScript](#)
*
* CODE ASSIGNMENT:


## [Generate Random Whole Numbers with JavaScript](#)
*
* CODE ASSIGNMENT:


## [Generate Random Whole Numbers within a Range](#)
*
* CODE ASSIGNMENT:


## [Use the parseInt Function](#)
*
* CODE ASSIGNMENT:


## [Use the parseInt Function with a Radix](#)
*
* CODE ASSIGNMENT:


## [Use the Conditional (Ternary) Operator](#)
*
* CODE ASSIGNMENT:


## [Use Multiple Conditional (Ternary) Operators](#)
*
* CODE ASSIGNMENT:


## [Use Recursion to Create a Countdown](#)
*
* CODE ASSIGNMENT:


## [Use Recursion to Create a Range of Numbers](#)
*
* CODE ASSIGNMENT:





Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
