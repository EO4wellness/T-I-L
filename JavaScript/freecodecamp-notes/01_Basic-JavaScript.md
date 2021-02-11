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
*	CODE ASSIGNEMENT:
		assign the value 7 to the variable a 


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

##[Initializing Variables with the Assignement Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/initializing-variables-with-the-assignment-operator}
* While in the above examples, we didn't declare a variable and set its intial value, this isn't the most common practice. 
* Generally when variables are declared, we also set their value all in the same step. 
* CODE ASSIGNEMENT: Define a variable _a_ with _var_ and initialize it to the value of _9_

## [Understanding Uninitialized Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-uninitialized-variables)
* When ever a variable is declared in JavaScript, it begins with an initial value of UNDEFINED.
* If you attempt to do a mathematical operation on an UNDEFINED variable, your result will be NaN
* NaN means Not a Number 
* if you concatenate a string with an UNDEFINED variable, you will get a literal string of "undefined"
* CODE ASSINGMENT: Initialize the 3 variables a, b, and c, with 5, 10, and "I am a" respectively, so that they will not be undefined. 

## [Understanding Case Sensitivity in Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-case-sensitivity-in-variables)
*
* CODE ASSIGNMENT: 

Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
