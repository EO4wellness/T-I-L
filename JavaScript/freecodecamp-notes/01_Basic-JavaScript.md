# Basic JavaScript 
    
## [Comment Your JavaScript Code](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comment-your-javascript-code) 
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

## [Understanding Case Sensitivity in Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-case-sensitivity-in-variables)
* all variables are case sensitive.
* capitalization matters! 
* MYVAR is not the same as MyVar or myvar or even myVar
* while you can use all of these as different variables (due to the difference, only, in capital verses lower case letters) it is not recommended as it is difficult to follow/understand and difficult for debugging. 
* Best Practice: Write variable names in JavaScript in camelCase. In camelCase, multi-word variable names have the first word in lowercase and the first letter of each subsequent word is capitalized.
* Examples: 

		var someVariable;
		var anotherVariableName;
		var thisVariableNameIsSoLong;

* CODE ASSIGNMENT: Modify the existing declarations and assignments so their names use camelCase. Do not create any new variables.

## [Add Two Numbers with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/add-two-numbers-with-javascript)
* Number is a data type in JavaScript which represents numerica data. 
* JavaScript uses the + symbol as an addition operator when placed between two numbers. 
* Example:  myVar = 5 + 10; // assigned 15 
* CODE ASSIGNMENT: Change the 0 so that sum will equal 20.

## [Subtract One Number from Another with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/subtract-one-number-from-another-with-javascript)
* likewise this works the same for subtration.  
* JavaScript uses the - symbol as the subtraction operator. 
* Example: myVar = 12 - 6; // assigned 6 
* CODE ASSIGNMENT: Change the 0 so the difference is 12.

## [Multiply Two Numbers with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/multiply-two-numbers-with-javascript)
* likewise we can multiple one number by another number. 
* JavaScript uses the * symbol for multiplication 
* Example: myVar = 13 * 13; // assigned 169
* CODE ASSIGNMENT: Change the 0 so that product will equal 80.


## [Divide One Number by Another with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/divide-one-number-by-another-with-javascript)
* likewise we can divide. 
* JavaScript uses the / symbol as the division operator
* Example: myVar = 16 / 2; // assigned 8
* CODE ASSIGNMENT: Change the 0 so that the quotient is equal to 2.


## [Increment a Number with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/increment-a-number-with-javascript)
* need to add one (increment) to a variable?  
* then the ++ operator accomplishes it. 
* i++;  is the code equivalent to i = i + 1; 
* CODE ASSIGNMENT: Change the code to use the ++ operator on myVar.


## [Decrement a Number with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/decrement-a-number-with-javascript)
* to decrease a variable by one is called DECREMENT 
* you can decease the variable by one using the -- operator 
* i--; is the equivalent of i = i - 1;
* CODE ASSIGNMENT: Change the code to use the -- operator on myVar.

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


## [Compound Assignment With Augmented Addition](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/compound-assignment-with-augmented-addition)
* We use assignments, as a common practice of programming, to change the contents of a variable. 
* Recall: everything to the RIGHT of the EQUAL SIGN = is evaluated first.
* Thus the equation 'myVar = myVar + 5' means to take the value currently stored in myVar and add five to it, so that myVar now contains it former value plus five. 
* The equavalent to the above can also be accomplished in one step.
* To do so, use the += operator.
* Example:

		var myVar = 1;
		myVar += 5;
		console.log(myVar); // Returns 6


* CODE ASSIGNMENT: Convert the assignments for a, b, and c to use the += operator.

## [Compound Assignment With Augmented Subtraction](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/compound-assignment-with-augmented-subtraction)
* We can do the exact same thing with subtraction. 
* When we do so the operator is -=
* Example:
	
	Instead of using : 
	myVar = myVar -5;
	
	We can use the code: 
	myVar -=5;
	
* CODE ASSIGNMENT: Convert the assignments for a, b, and c to use the -= operator.


## [Compound Assignment With Augmented Multiplication](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/compound-assignment-with-augmented-multiplication)
* the '*=' operator multiplies a variable by a number 
* Example: 

		myVar *= 5;
		
		is 
		
		myVar = myVar * 5;
		
* CODE ASSIGNMENT: Convert the assignments for a, b, and c to use the *= operator.


## [Compound Assignment With Augmented Division](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/compound-assignment-with-augmented-division)
* The /= operator divides a variable by another number.
* myVar = myVar / 5;
* Will divide myVar by 5. This can be rewritten as:
* myVar /= 5;
* CODE ASSIGNMENT: Convert the assignments for a, b, and c to use the /= operator.


## [Declare String Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/declare-string-variables)
* In the previous code example of: "var myName = "your name:;
* the "your name" is a STRING LITERAL
* It is a string because it is a series of zero or more characters inclodes in a single or double quotes. 
* CODE ASSIGNMENT: Create two new string variables: myFirstName and myLastName and assign them the values of your first and last name, respectively.


## [Escaping Literal Quotes in Strings](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/escaping-literal-quotes-in-strings)
* When you are defining a string you must start and end with a single or double quote. What happens when you need a literal quote: " or ' inside of your string?
* In JavaScript, you can escape a quote from considering it as an end of string quote by placing a backslash (\) in front of the quote.
* var sampleStr = "Alan said, \"Peter is learning JavaScript\".";
* This signals to JavaScript that the following quote is not the end of the string, but should instead appear inside the string. So if you were to print this to the console, you would get:
* Alan said, "Peter is learning JavaScript".
* CODE ASSIGNMENT: Use backslashes to assign a string to the myStr variable so that if you were to print it to the console, you would see: I am a "double quoted" string inside "double quotes".


## [Quoting Strings with Single Quotes](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/quoting-strings-with-single-quotes)
* String values in JavaScript may be written with single or double quotes, as long as you start and end with the same type of quote. 
* Unlike some other programming languages, single and double quotes work the same in JavaScript.
* The reason why you might want to use one type of quote over the other is if you want to use both in a string. 
* This might happen if you want to save a conversation in a string and have the conversation in quotes. 
* Another use for it would be saving an <a> tag with various attributes in quotes, all within a string
* However, this becomes a problem if you need to use the outermost quotes within it. Remember, a string has the same kind of quote at the beginning and end. But if you have that same quote somewhere in the middle, the string will stop early and throw an error.
* EXAMPLES:	

		doubleQuoteStr = "This is a string"; 
		singleQuoteStr = 'This is also a string';
		
		conversation = 'Finn exclaims to Jake, "Algebraic!"';
		
		goodStr = 'Jake asks Finn, "Hey, let\'s go on an adventure?"'; 
		badStr = 'Finn responds, "Let's go!"'; // Throws an error


* CODE ASSIGNMENT: Change the provided string to a string with single quotes at the beginning and end and no escape characters.  Right now, the <a> tag in the string uses double quotes everywhere. You will need to change the outer quotes to single quotes so you can remove the escape characters.


## [Escape Sequences in Strings](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/escape-sequences-in-strings)
* besides quotes you can also use escaping charactres for...
* 1. allow you to ue characters you may not otherwise be able to type out such as a carriage return
* 2.  to allow you to represent multiple quotes in a string without JavaScript misunderstanding what is meant. 
* For a back slash to display as a back slash, it must be escaped. 
* EXAMPLE:

		CODE   OUTPUT
		
		\'	single quote
		\"	double quote
		\	backslash
		\n	newline
		\r	carriage return
		\t	tab
		\b	word boundary
		\f	form feed
		
		
* CODE ASSIGNMENT:


Assign the following three lines of text into the single variable myStr using escape sequences.

    FirstLine
        \SecondLine
    ThirdLine

You will need to use escape sequences to insert special characters correctly. You will also need to follow the spacing as it looks above, with no spaces between escape sequences or words.

Note: The indentation for SecondLine is achieved with the tab escape character, not spaces.



## [Concatenating Strings with Plus Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/concatenating-strings-with-plus-operator)
* When the + operator is used with a STRING value in JavaScript is referred to as the CONCATENATION OPERATOR.
* You can make a new string, out of other strings, but CONCATENATING them together. 
* NOTE: Watch out for spaces. 
* Spaces are not added or removed from your string(s) when using the CONCATENATION Operator.
* If you need a space, add it, as needed. 
* EXAMPLE:
		
		var ourStr = "I come first. " + "I come second.";
		// ourStr is "I come first. I come second."
		
		verses
		
		var ourStr = "I come first." + "I come second.";
		// ourStr is "I come first.I come second."


* CODE ASSIGNMENT: Build myStr from the strings "This is the start. " and "This is the end." using the + operator.


## [Concatenating Strings with the Plus Equals Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/concatenating-strings-with-the-plus-equals-operator)
* the += operator will also concatenate a string
* this can be very helpful when used to break up a long string over several lines. 
* again, watch out for spaces.
* CODE ASSIGNMENT:  Build myStr over several lines by concatenating these two strings: "This is the first sentence. " and "This is the second sentence." using the += operator. Use the += operator similar to how it is shown in the editor. Start by assigning the first string to myStr, then add on the second string.



## [Constructing Strings with Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/constructing-strings-with-variables)
* Some times the string you are trying to build will need to be built "Mad Libs" style.
* Concatenation works great for this. 
* You can insert one or more variables into a string your building
* CODE ASSIGNMENT: Set myName to a string equal to your name and build myStr with myName between the strings "My name is " and " and I am well!"


## [Appending Variables to Strings](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/appending-variables-to-strings)
* Just as we can build a string over multiple lines out of string literals, we can also append variables to a string using the plus equals (+=) operator.
* Example:

		var anAdjective = "awesome!";
		var ourStr = "freeCodeCamp is ";
		ourStr += anAdjective;

* Example result: 

		ourStr would have the value freeCodeCamp is awesome!.

* CODE ASSIGNMENT: Set someAdjective to a string of at least 3 characters and append it to myStr using the += operator. [My Solution](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/appending-variables-to-strings.js)


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
*
* CODE ASSIGNMENT: 

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
