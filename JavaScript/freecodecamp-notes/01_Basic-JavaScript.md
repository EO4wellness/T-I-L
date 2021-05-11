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


## [Find the Length of a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/find-the-length-of-a-string)
* You can find the length of any String value by writing .length after the string variable or string literal.
* Example:

		console.log("Alan Peter".length);
	
* Example returns the value of 10
* For example, if we created a variable var firstName = "Charles", we could find out how long the string Charles is by using the firstName.length property.
* CODE ASSIGNMENT: Use the .length property to count the number of characters in the lastName variable and assign it to lastNameLength. [My Solution](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/find-the-length-of-a-string%2Cjs.txt)


## [Use Bracket Notation to Find the First Character in a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-bracket-notation-to-find-the-first-character-in-a-string)
* Bracket notation is a way to get a character at a specific index within a string
* Most modern programming languages, like JavaScript, don't start counting at 1 like humans do. They start at 0. This is referred to as Zero-based indexing. \
* For example, the character at index 0 in the word Charles is C. So if var firstName = "Charles", you can get the value of the first letter of the string by using firstName[0].
* Example:

		var firstName = "Charles"; var firstLetter = firstName[0];

		firstLetter would have a value of the string C.
		
* CODE ASSIGNMENT: Use bracket notation to find the first character in the lastName variable and assign it to firstLetterOfLastName.


## [Understand String Immutability](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understand-string-immutability)
* In JavaScript, String values are immutable, which means that they cannot be altered once created.
* For example, the following code:

		var myStr = "Bob"; myStr[0] = "J";

* cannot change the value of myStr to Job, because the contents of myStr cannot be altered. Note that this does not mean that myStr cannot be changed, just that the individual characters of a string literal cannot be changed. The only way to change myStr would be to assign it with a new string, like this:

		var myStr = "Bob"; myStr = "Job"; 
* CODE ASSIGNMENT: Correct the assignment to myStr so it contains the string value of Hello World using the approach shown in the example above.


## [Use Bracket Notation to Find the Nth Character in a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-bracket-notation-to-find-the-nth-character-in-a-string)
* You can also use bracket notation to get the character at other positions within a string.
* Remember that computers start counting at 0, so the first character is actually the zeroth character.
* Example:
	
	var firstName = "Ada"; var secondLetterOfFirstName = firstName[1]; 
	
* In the example, the second letter of first name would haved a value of the string d. 
* CODE ASSIGNMENT: Let's try to set thirdLetterOfLastName to equal the third letter of the lastName variable using bracket notation.

## [Use Bracket Notation to Find the Last Character in a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-bracket-notation-to-find-the-last-character-in-a-string)
* In order to get the last letter of a string, you can subtract one from the string's length.
* For example, if var firstName = "Charles", you can get the value of the last letter of the string by using firstName[firstName.length - 1].
* Example

		var firstName = "Charles"; var lastLetter = firstName[firstName.length - 1]; 
		
		LastLetter would have a value of the string S 
		
* CODE ASSIGNMENT: Use bracket notation to find the last character in the lastName variable.

## [Use Bracket Notation to Find the Nth-to-Last Character in a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-bracket-notation-to-find-the-nth-to-last-character-in-a-string)
* You can use the same principle we just used to retrieve the last character in a string to retrieve the Nth-to-last character.
* For example, you can get the value of the third-to-last letter of the var firstName = "Charles" string by using firstName[firstName.length - 3]

		Example:

		var firstName = "Charles";
		var thirdToLastLetter = firstName[firstName.length - 3];

* CODE ASSIGNMENT: Use bracket notation to find the second-to-last character in the lastName string.

## [Word Blanks](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/word-blanks)
* We will now use our knowledge of strings to build a "Mad Libs" style word game we're calling "Word Blanks". You will create an (optionally humorous) "Fill in the Blanks" style sentence.

In a "Mad Libs" game, you are provided sentences with some missing words, like nouns, verbs, adjectives and adverbs. You then fill in the missing pieces with words of your choice in a way that the completed sentence makes sense.

Consider this sentence - It was really ____, and we ____ ourselves ____. This sentence has three missing pieces- an adjective, a verb and an adverb, and we can add words of our choice to complete it. We can then assign the completed sentence to a variable as follows:

var sentence = "It was really " + "hot" + ", and we " + "laughed" + " ourselves " + "silly" + ".";

In this challenge, we provide you with a noun, a verb, an adjective and an adverb. You need to form a complete sentence using words of your choice, along with the words we provide.

You will need to use the string concatenation operator + to build a new string, using the provided variables: myNoun, myAdjective, myVerb, and myAdverb. You will then assign the formed string to the wordBlanks variable. You should not change the words assigned to the variables.

You will also need to account for spaces in your string, so that the final sentence has spaces between all the words. The result should be a complete sentence.

* CODE ASSIGNMENT:

## [Store Multiple Values in one Variable using JavaScript Arrays](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/store-multiple-values-in-one-variable-using-javascript-arrays)
* allow us to store several pieces of data in one place.
* arrays always start with brackets to show the beginning and end of the array
* elements can be any data type 
* arrays always end with a ; 
* example:
    myArray = ["january", 23, 1990];
* CODE ASSIGNMENT: Modify the new array myArray so that it contains both a string and a number (in that order).

## [Nest one Array within Another Array](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/nest-one-array-within-another-array)
* We can also nest an array within an array. 
* Example:
   	
	[["bulls", 23], ["White Sox", 45]]
   
* This is also called a multi-dimensional array
* CODE ASSIGNMENT:  Create a nested array called myArray 

## [Access Array Data with Indexes](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/access-array-data-with-indexes)
* we use indexes to access the data inside arrays
* array indexes are writtin in BRACKET notion
* both arrays and indexes use the same bracket notation
* indexes always use zero-based indexing
* the first element in any array has an idex of zero 0
* Example:
	
		var array = [50,60,70];
		array[0];
		var data = array[1[;
		
		Result: array [0] is now 50, and data has the value 60
* NOTE: there should't be any spaces between the array name and the square brackets.
* Example: 

	Syntax Should be: 
	array[0]
	
	Should not be:
	array [0]
	
* although JavaScript may be able to process the wrong code correctly, it will confuse other programers reading your code
* CODE ASSIGNMENT: Create a variable called myData and set it to equal the first value of myArray using bracket notation.

## [Modify Array Data With Indexes](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/modify-array-data-with-indexes)
* unlike strings, entries of arrays are mutable and can be changed freely.
* Note: there should not be any spaces between teh array name and the square brackets.
* Example:

		var ourArray = [50,40,30];
		ourArray[0] = 15;
		
		result: ourArray now has the values: 15, 40, 30
		
* CODE ASSIGNMENT: Modify the data stored at index 0 of myArray to a value of 45.

## [Access Multi-Dimensional Arrays With Indexes](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/access-multi-dimensional-arrays-with-indexes)
* one way to think about a multi-dimensional array is as an array of arrays. 
* when you use brackets to access the array, the first set of brackets refers to the entries in the outer most array
* each additional pair of brackets referes to the next level of entries inside. 
* CODE ASSIGNMENT: Using bracket notation select an element from myArray such that myData is equal to 8.

## [Manipulate Arrays With push()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/manipulate-arrays-with-push)
* to append data to the end of an array is bia the function: 
	
	push()
	
* .push() takes one or more parameters and pushes tthem onto the end of the array
* CODE ASSIGNMENT: Push ["dog", 3] onto the end of the myArray variable. 

## [Manipulate Arrays With pop()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/manipulate-arrays-with-pop)
* the .pop() function can also change teh data in an array
* .pop() pops a value off the END of an array 
* it removes the last element 
* it can be used with any array value: string, numbers, nested arrays
* var threeArr = [1, 4, 6];
var oneDown = threeArr.pop();
console.log(oneDown);
console.log(threeArr);

The first console.log will display the value 6, and the second will display the value [1, 4].
* CODE ASSIGNMENT: Use the .pop() function to remove the last item from myArray, assigning the popped off value to removedFromMyArray.

## [Manipulate Arrays With shift()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/manipulate-arrays-with-shift)
* .shift() is a function which works similarly to the .pop() function
* .shift() removes and returns the FIRST element in an array, whereas .pop() removes the last. 
* CODE ASSIGNMENT: use .shift() to remove the first array element and assisgn it to the variable. 

## [Manipulate Arrays With unshift()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/manipulate-arrays-with-unshift)
* just as we used .shift() to remove the first element, we can use .unshift() to add elements to the beginning of an array. 
* .unshift() adds elements to the front of the array
* CODE ASSIGNMENT: Add ["Paul",35] to the beginning of the myArray variable using unshift().

## [Shopping List](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/shopping-list)
* Shopping List
* Create a shopping list in the variable myList. The list should be a multi-dimensional array containing several sub-arrays.
* The first element in each sub-array should contain a string with the name of the item. The second element should be a number representing the quantity i.e.

	["Chocolate Bar", 15]

* CODE ASSIGNMENT: There should be at least 5 sub-arrays in the list.

## [Write Reusable JavaScript with Functions](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/write-reusable-javascript-with-functions)
* in JavaScript we can divide up our code into REUSABLE parts called FUNCTIONS
* An example of a function:
 	
	function functionName() {
	   console.log("Hello World");
	}
	
* you can call (INVOKE) a function by using its name followed by parenthesis
* Example: 
	
	functionName();
	
* CODE ASSIGNMENT: 

    Create a function called reusableFunction which prints "Hi World" to the dev console.
    Call the function.



## [Passing Values to Functions with Arguments](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/passing-values-to-functions-with-arguments)
* PARAMETERS are variables acting as placeholders. 
* PARAMETERS will be put into a function when it is called. 
* Paramter values are input into the fuction, or are PASSED into the function.
* Parameter values are known as ARGUMENTS

###  Example
* The example function below has two parameters: param1 and param2

		function testFun(param1, param2) {
		  console.log(param1, param2);
		}  

* We call testFun like this: 

		testFun("Hello", "World");

* now we have passed two string arguments Hello and World
* In this example, param1 is now equal to the string "Hello" 
* param2 is now equal to the string "World" 
* NOTE: you could call testFun again with different arguments and the parameters would take on the value of th enew arguments

* CODE ASSIGNMENT:  Create a function called functionWithArgs that accepts two arguments and outputs their sum to the dev console.  Call the function with two numbers as arguments.


## [Global Scope and Functions](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/global-scope-and-functions)
* SCOPE refers to the VISIBILITY of VARIABLES
* Any variable defined OUTSIDE a function block have GLOBAL SCOPE
* This means they can be "seen" (used) everywhere in your JavaScript code
* variables which are used without the VAR keywords are automatically created in the GLOBAL SCOPE
* this can create UNINTENDED CONSEQUENCES when running a function again 
* YOU should ALWAYS declare your variables with VAR
* CODE ASSIGNMENT:  
	- Using var, declare a global variable named myGlobal outside of any function. Initialize it with a value of 10.
	-Inside function fun1, assign 5 to oopsGlobal without using the var keyword.


## [Local Scope and Functions](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/local-scope-and-functions)
* When a variable is declared within a function AND has function paramaeters, it is said to have LOCAL SCOPE
* it is only available/visible within that specific function 

### Example: 
* Here is a function named myTest with a local variable called loc

		function myTest() {
 		   var loc = "foo";
		   console.log(loc);
		}
		myTest();
		console.log(loc);


* The myTest() function call will display the string "foo" in the console
* The console.log(loc) line will throw an error
* the error is caused because loc is not defined outside of the function 

* CODE ASSIGNMENT:
  -  The editor has two console.logs to help you see what is happening. Check the console as you code to see how it changes. 
  -  Declare a local variable myVar inside myLocalScope and run the tests.
  -  Note: The console will still display ReferenceError: myVar is not defined, but this will not cause the tests to fail.
* Code Assignements like this one, are what's GREAT about freeCodeCamp's instruction!  Wow!  This is a type of error we should be learning about so we know, when we see it, how to fix it. Great idea!  I've never seen any other coding instruction which actually includes debugging as part of their instructional plan. 

## [Global vs. Local Scope in Functions](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/global-vs--local-scope-in-functions)
* It is possible to have both LOCAL and GLOBAL variables with the same name :( 
* When this happens, the LOCAL vraible takes precedence over the GLOBAL vairable. 
* Example:

	var someVar = "Hat";
	function myFun() {
	  var someVer = "Head";
	  return someVer;
	}

* The function myFun from our example, will return the string HEAD because the local version of the variable is present. 
* CODE ASSIGNMENT: Add a local variable to myOutfit function to override the value of outerWear with the string sweater.

## [Return a Value from a Function with Return](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/return-a-value-from-a-function-with-return)
*  using ARGUMENTS we can pass values into a function 
*  you can use a RETURN statement to send a value back out of a function 
*  Example:

		function plusThree(num) {
		  return num + 3; 
		}
		
		var answer = plusThree(5);

*  ANSWER has the value of 8
*  plusThree takes an argument for NUM and returns a value equal to num + 3
* CODE ASSIGNMENT:  Create a function timesFive that accepts one argument, multiplies it by 5, and returns the new value.

## [Understanding Undefined Value returned from a Function](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-undefined-value-returned-from-a-function)
* a function can include the RETURN statement (but it doesn't have to)
* if a function doesn't have a return statement, when it is called, it processes the inner code but returned value is undefined
* Example:

	var sum = 0;
	function addSum(num) {
	  sum = sum + num;
	}
	addSum(3);

* addSum is a function without a return statement
* the function will change the global sum variable 
* the returned function is undefined
* CODE ASSIGNMENT: Create a function addFive without any arguments. This function adds 5 to the sum variable, but its returned value is undefined.

## [Assignment with a Returned Value](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/assignment-with-a-returned-value)
* recall: everything to the right of the equal sign is reslved before the value is assigned. 
* this means we can take the return function and assign it to a variable 
* assume we have a pre-defined function SUM which adds two numbers together
* then: 

		ourSum = sum(5,12);

* we call SUM function, which returns the value of 17 and assigns it to ourSum variable 
* CODE ASSIGNMENT:Call the processArg function with an argument of 7 and assign its return value to the variable processed.

## [Stand in Line](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/stand-in-line)
* In computer science, a QUEUE is an abstract DATA STRUCTURE
* items in a queue are kept in order
* new items can be added to the BACK of the queue
* old items can be taken off from the front of the queue
* we already learned how to do this in earlier lessons with other functions. 
* push()
* shift()
* CODE ASSIGNMENT:
  - Write a function nextInLine which takes an array (arr) and a number (item) as arguments.
  - Add the number to the end of the array, then remove the first element of the array.
  - The nextInLine function should then return the element that was removed.

## [Understanding Boolean Values](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/understanding-boolean-values)
* Another DATA TYPE is called BOOLEAN 
* Booleans may only be one of two values
* All Booleans are either TRUE or they are FALSE
* they are basically on-off switches
* true is ON
* false is OFF
* the boolean two states are mutually exclusive 
* Note: Boolean values are never written with quotes. The strings "true" and "false" are not Boolean and have no special meaning in JavaScript.
* CODE ASSIGNMENT: Modify the welcomeToBooleans function so that it returns true instead of false when the run button is clicked.

## [Use Conditional Logic with If Statements](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-conditional-logic-with-if-statements)
* IF satements are used to make decsions within code. 
* the keyword IF tells JavaScripte to exectue the code in the curly braces under certain conditions. 
* the conditions are known as BOOLEAN conditions
* thus the condition is true (run th ecode) or false (do not run the code)
* pseudocode:

	if (condition is true) {
  	  statement is executed
	}

* Example: 
function test (myCondition) {
  if (myCondition) {
     return "It was true";
  }
  return "It was false";
}
test(true);
test(false);

* CODE ASSIGNMENT Create an if statement inside a function to return, Yes, that was true if the parameter wasThatTrue is true and return No, that was false otherwise. 

## [Comparison with the Equality Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparison-with-the-equality-operator)
* JavaScript has a lot of comparison operators.
* all comparison operators return a boolean TRUE or FALSE value 
* the most basic operator is the equality operator
* the equality operator is writen as == (equal sign, equal sign)
* the equality operator compares to values.
* it returns TRUE if they are equivalent
* it returns FALSE if they are not 
* this is different from the ASSIGNMENT (=) which assigns the value on the right to a variable on the left 
* function equalityTest(myVal) {
  if (myVal == 10) {
     return "Equal";
  }
  return "Not Equal";
}

If myVal is equal to 10, the equality operator returns true, so the code in the curly braces will execute, and the function will return Equal. Otherwise, the function will return Not Equal. In order for JavaScript to compare two different data types (for example, numbers and strings), it must convert one type to another. This is known as Type Coercion. Once it does, however, it can compare terms as follows:

1   ==  1
1   ==  2
1   == '1'
"3" ==  3


* CODE ASSIGNMENT:  Add the equality operator to the indicated line so that the function will return the string Equal when val is equivalent to 12.

## [Comparison with the Strict Equality Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparison-with-the-strict-equality-operator)
*
* CODE ASSIGNMENT: Use the strict equality operator in the if statement so the function will return the string Equal when val is strictly equal to 7

## [Practice comparing different values](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/practice-comparing-different-values)
* In the last two challenges, we learned about the equality operator (==) and the strict equality operator (===). Let's do a quick review and practice using these operators some more.
* If the values being compared are not of the same type, the equality operator will perform a type conversion, and then evaluate the values. However, the strict equality operator will compare both the data type and value as-is, without converting one type to the other.
* CODE ASSIGNMENT: The compareEquality function in the editor compares two values using the equality operator. Modify the function so that it returns the string Equal only when the values are strictly equal.

## [Comparison with the Inequality Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparison-with-the-inequality-operator)
* != is the inequality operator
* it will return true if something is not equal to the value
* it will return false if it is equal 
* CODE ASSIGNMENT: Add the inequality operator != in the if statement so that the function will return the string Not Equal when val is not equivalent to 99

## [Comparison with the Strict Inequality Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparison-with-the-strict-inequality-operator)
* The strict inequality operator (!==) is the logical opposite of the strict equality operator. It means "Strictly Not Equal" and returns false where strict equality would return true and vice versa. The strict inequality operator will not convert data types.
* CODE ASSIGNMENT: Add the strict inequality operator to the if statement so the function will return the string Not Equal when val is not strictly equal to 17

## [Comparison with the Greater Than Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparison-with-the-greater-than-operator)
* The greater than operator (>)
* compares the value of two numbers 
* if the number on the left is Greaer than the number on the right
* it returns TRUE
* otherwise, it returns FALSE
* Examples:

	5 > 3 (returns true)
	7 > '3' (returns true)
	2 > 3 (returns false)
	'1' > 9 (returns false)

* CODE ASSIGNMENT: Add the greater than operator to the indicated lines so that the return statements make sense.

## [Comparison with the Greater Than Or Equal To Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparison-with-the-greater-than-or-equal-to-operator)
* The greater than or equal to operator (>=)
* compares the values of two numbers 
* if the number on the left is greater than or equal to the number on the right
* then it returns true
* otherwise it returns false 
* like the equality operator, the greater than or equal to operator will convert data types while comparing 
* Examples:
	
	6 >= 6 (returns true)
	7 >= '3' (returns true)
	2 >= 3 (returns false)
	'7' >= 9 (returns false)
	
* CODE ASSIGNMENT: Add the greater than or equal to operator to the indicated lines so that the return statements make sense.

## [Comparison with the Less Than Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparison-with-the-less-than-operator)
* The less than operator <
* compares the values of two numbers 
* if the number to the left is less than the number to the right
* then it returns TRUE
* otherwise, it returns FALSE 
* like the equalit operator, the less than operator converts data types while comparing. 
* Example:
	
	2   < 5 (returns true)
	'3' < 7 (returns true)
	5   < 5 (returns false)
	3   < 2 (returns false)
	'8' < 4 (returns false) 


* CODE ASSIGNMENT: Add the less than operator to the indicated lines so that the return statements make sense.

## [Comparison with the Less Than Or Equal To Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparison-with-the-less-than-or-equal-to-operator)
* The less than or equal to operator (<=) 
* compares the values of two numbers.
*  If the number to the left is less than or equal 
*  to the number to the right, it returns true. 
*  If the number on the left is greater than the number on the right,
*   it returns false.
*    Like the equality operator, 
*    the less than or equal to operator converts data types.
*  Examples:
```
4   <= 5 (returns true)
'7' <= 7 (returns true)
5   <= 5  (returns true)
3   <= 2  (returns false)
'8' <= 4  (returns false) 
```

* CODE ASSIGNMENT: Add the less than or equal to operator to the indicated lines so that the return statements make sense.


## [Comparisons with the Logical And Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparisons-with-the-logical-and-operator)
* Sometimes you will need to test more than one thing at a time. 
* The logical and operator (&&) returns true if and only if the operands to the left and right of it are true.
* The same effect could be achieved by nesting an if statement inside another if:
```
if (num > 5) {
  if (num < 10) {
    return "Yes";
  }
}
return "No";
```
* will only return Yes if num is greater than 5 and less than 10. The same logic can be written as:
```
if (num > 5 && num < 10) {
  return "Yes";
}
return "No";
```
* CODE ASSIGNMENT: Replace the two if statements with one statement, using the && operator, which will return the string Yes if val is less than or equal to 50 and greater than or equal to 25. Otherwise, will return the string No.

## [Comparisons with the Logical Or Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/comparisons-with-the-logical-or-operator)

* The logical or operator (||) returns true if either of the operands is true. Otherwise, it returns false.
* The logical or operator is composed of two pipe symbols: (||). 
* This can typically be found between your Backspace and Enter keys.
* The pattern below should look familiar from prior waypoints:
```
if (num > 10) {
  return "No";
}
if (num < 5) {
  return "No";
}
return "Yes";
```
* will return Yes only if num is between 5 and 10 (5 and 10 included). The same logic can be written as:
```
if (num > 10 || num < 5) {
  return "No";
}
return "Yes";
```
* CODE ASSIGNMENT: Combine the two if statements into one statement which returns the string Outside if val is not between 10 and 20, inclusive. Otherwise, return the string Inside. 

## [Introducing Else Statements](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/introducing-else-statements)
* When a condition for an if statement is true, 
* the block of code following it is executed. 
* What about when that condition is false? Normally nothing would happen. 
* With an else statement, an alternate block of code can be executed.
* example
```
if (num > 10) {
  return "Bigger than 10";
} else {
  return "10 or Less";
}
```
* CODE ASSIGNMENT: Combine the if statements into a single if/else statement.

## [Introducing Else If Statements](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/introducing-else-if-statements)
* If you have multiple conditions 
* you can chain IF statements together
* using the else if statements 
```
if (num > 15) {
  return "Bigger than 15";
} else if (num < 5) {
  return "Smaller than 5";
} else {
  return "Between 5 and 15";
}
```
* CODE ASSIGNMENT: Convert the logic to use else if statements.

## [Logical Order in If Else Statements](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/logical-order-in-if-else-statements)
* Order is important in if, else if statements.
* The function is executed from top to bottom so you will want to be careful of what statement comes first.
* Take these two functions as an example.
* Here's the first:
```
function foo(x) {
  if (x < 1) {
    return "Less than one";
  } else if (x < 2) {
    return "Less than two";
  } else {
    return "Greater than or equal to two";
  }
}
```
* And the second just switches the order of the statements:
```
function bar(x) {
  if (x < 2) {
    return "Less than two";
  } else if (x < 1) {
    return "Less than one";
  } else {
    return "Greater than or equal to two";
  }
}
```
* While these two functions look nearly identical if we pass a number to both we get different outputs.
```
foo(0)
bar(0)
```
* foo(0) will return the string Less than one, and bar(0) will return the string Less than two. 
* CODE ASSIGNMENT: Change the order of logic in the function so that it will return the correct statements in all cases.


## [Chaining If Else Statements](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/chaining-if-else-statements)
* if/else statements can be chained together for complex logic. 
* Here is pseudocode of multiple chained if / else if statements:
```
if (condition1) {
  statement1
} else if (condition2) {
  statement2
} else if (condition3) {
  statement3
. . .
} else {
  statementN
}
```
* CODE ASSIGNMENT: Write chained if/else if statements to fulfill the following conditions:
```
num < 5 - return Tiny
num < 10 - return Small
num < 15 - return Medium
num < 20 - return Large
num >= 20 - return Huge
```


## [Golf Code](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/golf-code)
* In the game of golf, each hole has a par, 
* meaning, the average number of strokes a golfer is expected to make in order to sink the ball in the hole 
* to complete the play. Depending on how far above or below par your strokes are, there is a different nickname.
* Your function will be passed par and strokes arguments. 
* Return the correct string according to this table which lists the strokes 
* in order of priority; top (highest) to bottom (lowest):
```
Strokes	Return
1	"Hole-in-one!"
<= par - 2	"Eagle"
par - 1	"Birdie"
par	"Par"
par + 1	"Bogey"
par + 2	"Double Bogey"
>= par + 3	"Go Home!"
```
* example:
```
var names = ["Hole-in-one!", "Eagle", "Birdie", "Par", "Bogey", "Double Bogey", "Go Home!"];
function golfScore(par, strokes) {
if (strokes ==1) {
  return names [0]
} else if (strokes <= par - 2) {
  return names [1]
} else if (strokes == par - 1) {
  return names [2]
} else if (strokes == par) {
  return names [3]
} else if (strokes == par + 1) {
  return names [4]
} else if (strokes == par + 2) {
  return names [5]
} else if (strokes >= par + 3){
  return names [6]
}
}
```
* CODE ASSIGNMENT: par and strokes will always be numeric and positive. We have added an array of all the names for your convenience.



## [Selecting from Many Options with Switch Statements](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/selecting-from-many-options-with-switch-statements)
* If you have many options to choose from, use a switch statement. 
* A switch statement tests a value and can have many case statements 
* which define various possible values. 
* Statements are executed from the first matched case value until a break is encountered.
* Here is an example of a switch statement:
```
switch(lowercaseLetter) {
  case "a":
    console.log("A");
    break;
  case "b":
    console.log("B");
    break;
}
```
* case values are tested with strict equality (===). 
* The break tells JavaScript to stop executing statements. 
* If the break is omitted, the next statement will be executed.
* CODE ASSIGNMENT: Write a switch statement which tests val and sets answer for the following conditions:
```
1 - alpha
2 - beta
3 - gamma
4 - delta
```


## [Adding a Default Option in Switch Statements](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/adding-a-default-option-in-switch-statements)
* In a switch statement you may not be able to specify all possible values as case statements. 
* Instead, you can add the default statement which will be executed if no matching case statements are found. 
* Think of it like the final else statement in an if/else chain.
* A default statement should be the last case.
```
switch (num) {
  case value1:
    statement1;
    break;
  case value2:
    statement2;
    break;
    ...
  default:
    defaultStatement;
    break;
}
```
* CODE ASSIGNMENT: Write a switch statement to set answer for the following conditions:
```
a - apple
b - bird
c - cat
default - stuff
```


## [Multiple Identical Options in Switch Statements](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/multiple-identical-options-in-switch-statements)
* If the break statement is omitted from a switch statement's case, 
* the following case statement(s) are executed 
* until a break is encountered. 
* If you have multiple inputs with the same output, 
* you can represent them in a switch statement like this:
```
var result = "";
switch(val) {
  case 1:
  case 2:
  case 3:
    result = "1, 2, or 3";
    break;
  case 4:
    result = "4 alone";
}

```
* Cases for 1, 2, and 3 will all produce the same result.

* CODE ASSIGNMENT: 
Write a switch statement to set answer for the following ranges:
1-3 - Low
4-6 - Mid
7-9 - High

Note: You will need to have a case statement for each number in the range.



## [Replacing If Else Chains with Switch](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/replacing-if-else-chains-with-switch)
* If you have many options to choose from, a switch statement can be easier to write 
* than many chained if/else if statements. 
* The following:
```
if (val === 1) {
  answer = "a";
} else if (val === 2) {
  answer = "b";
} else {
  answer = "c";
}
```
* can be replaced with:
```
switch(val) {
  case 1:
    answer = "a";
    break;
  case 2:
    answer = "b";
    break;
  default:
    answer = "c";
}
```
* CODE ASSIGNMENT:  Change the chained if/else if statements into a switch statement. 


## [Returning Boolean Values from Functions](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/returning-boolean-values-from-functions)
* You may recall from Comparison with the Equality Operator that 
* all comparison operators return a boolean true or false value.
* Sometimes people use an if/else statement to do a comparison, like this:
```
function isEqual(a,b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}
```
* But there's a better way to do this. 
* Since === returns true or false, we can return the result of the comparison:
```
function isEqual(a,b) {
  return a === b;
}
```
* CODE ASSIGNMENT: Fix the function isLess to remove the if/else statements.


## [Return Early Pattern for Functions](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/return-early-pattern-for-functions)
* When a return statement is reached, 
* the execution of the current function stops
*  and control returns to the calling location.
*  Example
```
function myFun() {
  console.log("Hello");
  return "World";
  console.log("byebye")
}
myFun();
```
* The above will display the string Hello in the console, 
* and return the string World. 
* The string byebye will never display in the console, 
* because the function exits at the return statement.

* CODE ASSIGNMENT: Modify the function abTest so that if a or b are less than 0 the function will immediately exit with a value of undefined. Hint: Remember that undefined is a keyword, not a string.


## [Counting Cards](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/counting-cards)
* In the casino game Blackjack, a player can gain an advantage over the house by keeping track of the relative number of high 
* and low cards remaining in the deck. This is called Card Counting.
* Having more high cards remaining in the deck favors the player. 
* Each card is assigned a value according to the table below. 
* When the count is positive, the player should bet high. 
* When the count is zero or negative, the player should bet low.
```
Count Change	Cards
+1	        2, 3, 4, 5, 6
0	        7, 8, 9
-1	        10, 'J', 'Q', 'K', 'A'
```
* CODE ASSIGNMENT: You will write a card counting function. It will receive a card parameter, which can be a number or a string, and increment or decrement the global count variable according to the card's value (see table). The function will then return a string with the current count and the string Bet if the count is positive, or Hold if the count is zero or negative. The current count and the player's decision (Bet or Hold) should be separated by a single space.
```
Example Outputs: -3 Hold or 5 Bet

Hint
Do NOT reset count to 0 when value is 7, 8, or 9.
Do NOT return an array.
Do NOT include quotes (single or double) in the output.
```

## [Build JavaScript Objects](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/build-javascript-objects)
* You may have heard the term object before.
* Objects are similar to arrays, except that instead of using indexes to access 
* and modify their data, you access the data in objects through what are called properties.
* Objects are useful for storing data in a structured way, and can represent real world objects, like a cat.
```
var cat = {
  "name": "Whiskers",
  "legs": 4,
  "tails": 1,
  "enemies": ["Water", "Dogs"]
};
```
* In In this example, all the properties are stored as strings, such as - name, legs, and tails. 
* However, you can also use numbers as properties. 
* You can even omit the quotes for single-word string properties, as follows:

Here's a sample cat object:
* CODE ASSIGNMENT: Make an object that represents a dog called myDog which contains the properties name (a string), legs, tails and friends.
You can set these object properties to whatever values you want, as long as name is a string, legs and tails are numbers, and friends is an array.



## [Accessing Object Properties with Dot Notation](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/accessing-object-properties-with-dot-notation)
* There are two ways to access the properties of an object: dot notation (.) 
* and bracket notation ([]), similar to an array.
* Dot notation is what you use when you know the name of the property you're trying to access ahead of time.
* Here is a sample of using dot notation (.) to read an object's property:
```
var myObj = {
  prop1: "val1",
  prop2: "val2"
};
var prop1val = myObj.prop1;
var prop2val = myObj.prop2;
```
* prop1val would have a value of the string val1, and prop2val would have a value of the string val2.

* CODE ASSIGNMENT:  Read in the property values of testObj using dot notation. Set the variable hatValue equal to the object's property hat and set the variable shirtValue equal to the object's property shirt.


## [Accessing Object Properties with Bracket Notation](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/accessing-object-properties-with-bracket-notation)
*  The second way to access the properties of an object is bracket notation ([]). 
*  If the property of the object you are trying to access has a space in its name, you will need to use bracket notation.
*  However, you can still use bracket notation on object properties without spaces.
*  Here is a sample of using bracket notation to read an object's property:
```
var myObj = {
  "Space Name": "Kirk",
  "More Space": "Spock",
  "NoSpace": "USS Enterprise"
};
myObj["Space Name"];
myObj['More Space'];
myObj["NoSpace"];
```
* myObj["Space Name"] would be the string Kirk, myObj['More Space'] would be the string Spock, 
* and myObj["NoSpace"] would be the string USS Enterprise.
* Note that property names with spaces in them must be in quotes (single or double).

* CODE ASSIGNMENT: Read the values of the properties an entree and the drink of testObj using bracket notation and assign them to entreeValue and drinkValue respectively. 


## [Accessing Object Properties with Variables](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/accessing-object-properties-with-variables)
*  Another use of bracket notation on objects is to access a property which is stored as the value of a variable. 
*  This can be very useful for iterating through an object's properties or when accessing a lookup table.
*  Here is an example of using a variable to access a property:
```
var dogs = {
  Fido: "Mutt",  Hunter: "Doberman",  Snoopie: "Beagle"
};
var myDog = "Hunter";
var myBreed = dogs[myDog];
console.log(myBreed);
```
*  The string Doberman would be displayed in the console.
*  Another way you can use this concept is when the property's name is collected dynamically during the program execution, as follows:
```
var someObj = {
  propName: "John"
};
function propPrefix(str) {
  var s = "prop";
  return s + str;
}
var someProp = propPrefix("Name");
console.log(someObj[someProp]);
```
* someProp would have a value of the string propName, and the string John would be displayed in the console.
* Note that we do not use quotes around the variable name when using it to access the property because we are using the value of the variable, not the name.

* CODE ASSIGNMENT: Set the playerNumber variable to 16. Then, use the variable to look up the player's name and assign it to player.


## [Updating Object Properties](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/updating-object-properties)
* After you've created a JavaScript object, 
* you can update its properties at any time just 
* like you would update any other variable. 
* You can use either dot or bracket notation to update.

For example, let's look at ourDog:
* CODE ASSIGNMENT: Update the myDog object's name property. Let's change her name from Coder to Happy Coder. You can use either dot or bracket notation.


## [Add New Properties to a JavaScript Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/add-new-properties-to-a-javascript-object)
* You can add new properties to existing JavaScript objects
* this is done the same way you would modify them
* here is an example of adding "bark" property to "ourDog"
```
ourDog.bark = "bow-wow";
```
* or
```
ourDog["bark"] = "bow-wow";
```
* now when we evaluate ourDog.bark we will get back bow-wow
* example: 
```
var ourDog = {
  "name": "Camper",
  "legs": 4,
  "tails": 1,
  "friends": ["everything!"]
};

ourDog.bark = "bow-wow";
```
* CODE ASSIGNMENT: Add a bark property to myDog and set it to a dog sound, such as "woof". You may use either dot or bracket notation.


## [Delete Properties from a JavaScript Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/delete-properties-from-a-javascript-object)
* We can also delete properties from objects like this:
```
delete ourDog.bark;
```
* Example:
```
var ourDog = {
  "name": "Camper",
  "legs": 4,
  "tails": 1,
  "friends": ["everything!"],
  "bark": "bow-wow"
};

delete ourDog.bark;
```
* After the last line shown above, ourDog looks like:
```
{
  "name": "Camper",
  "legs": 4,
  "tails": 1,
  "friends": ["everything!"]
}
```
* CODE ASSIGNMENT: Delete the tails property from myDog. You may use either dot or bracket notation.


## [Using Objects for Lookups](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/using-objects-for-lookups)
* Objects can be thought of as a key/value storage, like a dictionary. 
* If you have tabular data, you can use an object to lookup values 
* rather than a switch statement or an if/else chain. 
* This is most useful when you know that your input data is limited to a certain range.
* Here is an example of a simple reverse alphabet lookup:
```
var alpha = {
  1:"Z",
  2:"Y",
  3:"X",
  4:"W",
  ...
  24:"C",
  25:"B",
  26:"A"
};
alpha[2];
alpha[24];

var value = 2;
alpha[value];
```
* alpha[2] is the string Y, alpha[24] is the string C, and alpha[value] is the string Y.

* CODE ASSIGNMENT: Convert the switch statement into an object called lookup. Use it to look up val and assign the associated string to the result variable.
```
  var lookup = {
    "alpha": "Adams",
    "bravo": "Boston",
    "charlie": "Chicago",
    "delta": "Denver",
    "echo": "Easy",
    "foxtrot":"Frank",
  };
  result=lookup[val]
```

## [Testing Objects for Properties](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/testing-objects-for-properties)
* Sometimes it is useful to check if the property of a given object exists or not. 
* We can use the .hasOwnProperty(propname) method of objects
*  to determine if that object has the given property name. 
*  .hasOwnProperty() returns true or false if the property is found or not.
*  Example
```
var myObj = {
  top: "hat",
  bottom: "pants"
};
myObj.hasOwnProperty("top");
myObj.hasOwnProperty("middle");
```
* The first hasOwnProperty returns true, while the second returns false.

* CODE ASSIGNMENT: Modify the function checkObj to test if an object passed to the function (obj) contains a specific property (checkProp). If the property is found, return that property's value. If not, return "Not Found".
if(obj.hasOwnProperty(checkProp)) {
  return obj[checkProp];
  } else { 
  return "Not Found";
  }

## [Manipulating Complex Objects](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/manipulating-complex-objects)
* Sometimes you may want to store data in a flexible Data Structure. 
* A JavaScript object is one way to handle flexible data. 
* They allow for arbitrary combinations of strings, numbers, booleans, arrays, functions, and objects. 
* Here's an example of a complex data structure:
```
var ourMusic = [
  {
    "artist": "Daft Punk",
    "title": "Homework",
    "release_year": 1997,
    "formats": [ 
      "CD", 
      "Cassette", 
      "LP"
    ],
    "gold": true
  }
];
```
* This is an array which contains one object inside. 
* The object has various pieces of metadata about an album. 
* It also has a nested formats array.
*  If you want to add more album records, 
*  you can do this by adding records to the top level array. 
*  Objects hold data in a property, which has a key-value format. 
*  In the example above, "artist": 
*  "Daft Punk" is a property that has a key of artist 
*  and a value of Daft Punk. 
*  JavaScript Object Notation or JSON is a related data interchange format used to store data.
```
{
  "artist": "Daft Punk",
  "title": "Homework",
  "release_year": 1997,
  "formats": [ 
    "CD",
    "Cassette",
    "LP"
  ],
  "gold": true
}
```
* Note: You will need to place a comma after every object in the array, unless it is the last object in the array.

* CODE ASSIGNMENT: Add a new album to the myMusic array. Add artist and title strings, release_year number, and a formats array of strings.


## [Accessing Nested Objects](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/accessing-nested-objects)
* The sub-properties of objects can be accessed by chaining together the dot or bracket notation.
* Here is a nested object:
```
var ourStorage = {
  "desk": {
    "drawer": "stapler"
  },
  "cabinet": {
    "top drawer": { 
      "folder1": "a file",
      "folder2": "secrets"
    },
    "bottom drawer": "soda"
  }
};
ourStorage.cabinet["top drawer"].folder2;
ourStorage.desk.drawer;
```
* ourStorage.cabinet["top drawer"].folder2 would be the string secrets, and ourStorage.desk.drawer would be the string stapler.
* CODE ASSIGNMENT: Access the myStorage object and assign the contents of the glove box property to the gloveBoxContents variable. Use dot notation for all properties where possible, otherwise use bracket notation.


## [Accessing Nested Arrays](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/accessing-nested-arrays)
* As we have seen in earlier examples, objects can contain both nested objects and nested arrays. 
* Similar to accessing nested objects, array bracket notation can be chained to access nested arrays.
* Here is an example of how to access a nested array:
```
var ourPets = [
  {
    animalType: "cat",
    names: [
      "Meowzer",
      "Fluffy",
      "Kit-Cat"
    ]
  },
  {
    animalType: "dog",
    names: [
      "Spot",
      "Bowser",
      "Frankie"
    ]
  }
];
ourPets[0].names[1];
ourPets[1].names[0];
```
* ourPets[0].names[1] would be the string Fluffy, and ourPets[1].names[0] would be the string Spot.

* CODE ASSIGNMENT: Using dot and bracket notation, set the variable secondTree to the second item in the trees list from the myPlants object. 


## [Record Collection](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/record-collection)
* CODE ASSIGNMENT: 
You are given an object literal representing a part of your musical album collection. Each album has a unique id number as its key and several other properties. Not all albums have complete information.

You start with an updateRecords function that takes an object literal, records, containing the musical album collection, an id, a prop (like artist or tracks), and a value. Complete the function using the rules below to modify the object passed to the function.

    Your function must always return the entire record collection object.
    If prop isn't tracks and value isn't an empty string, update or set that album's prop to value.
    If prop is tracks but the album doesn't have a tracks property, create an empty array and add value to it.
    If prop is tracks and value isn't an empty string, add value to the end of the album's existing tracks array.
    If value is an empty string, delete the given prop property from the album.

Note: A copy of the recordCollection object is used for the tests.



## [Iterate with JavaScript While Loops](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/iterate-with-javascript-while-loops)
* You can run the same code multiple times by using a loop.
* The first type of loop we will learn is called a while loop
*  because it runs while a specified condition is true 
*  and stops once that condition is no longer true.
```
var ourArray = [];
var i = 0;
while(i < 5) {
  ourArray.push(i);
  i++;
}
```
* In the code example above, 
* the while loop will execute 5 times 
* and append the numbers 0 through 4 to ourArray.
* CODE ASSIGNMENT: Add the numbers 5 through 0 (inclusive) in descending order to myArray using a while loop.
```
var myArray = [];

var i = 0;
while(i < 5) {
  myArray.push(i);
  i++;
}
```

## [Iterate with JavaScript For Loops](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/iterate-with-javascript-for-loops)
* You can run the same code multiple times by using a loop
* the most common type of JavaScript loop is known as a "FOR" loop
* the name is due to the fact it runs for a specific number of times
* loops are decalared with 3 optional expression separated by semicolons
* format: ``` for (a; b; c) ```
* in the format above:
- a stands for the initalization statement 
- b is the condition statemtn
- c is the final expression
* The initalization statement is executed one time only 
* the initialization statement executes before the loop starts
* this statement is typically used to define and set up your loop variable
* the condition statemetn is evaluated at the beginning of every loop iteration 
* it will continue as long as it evaluates to true
* when the condition is false, at the start of the new iteration, the loop will stop executing
* if the condition starts false, the loop will never execute
* likewise, if the condition always remains true, the loop will never stop executing
* the final expression i sexecuted at the end of each loop iteration
* this is prior to th enext condition check 
* the final expression usually increments or decrements your loop counter
* Time for an EXAMPLE:
* In the following example we initialize with i = 0 
* and iterate while our condition i < 5 is true.
*  We'll increment i by 1 in each loop iteration
*   with i++ as our final expression.
```
var ourArray = [];
for (var i = 0; i < 5; i++) {
  ourArray.push(i);
}
```
* ourArray will now have the value [0,1,2,3,4].
* CODE ASSIGNMENT: Use a for loop to push the values 1 through 5 onto myArray.


## [Iterate Odd Numbers With a For Loop](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/iterate-odd-numbers-with-a-for-loop)
*  For loops don't have to iterate one at a time. 
*  By changing our final-expression, 
*  we can count by even numbers.
*  We'll start at i = 0 
*  and loop while i < 10. 
*  We'll increment i by 2 each loop with i += 2.
```
var ourArray = [];
for (var i = 0; i < 10; i += 2) {
  ourArray.push(i);
}
```
* ourArray will now contain [0,2,4,6,8].
*  Let's change our initialization 
*  so we can count by odd numbers.

* CODE ASSIGNMENT: Push the odd numbers from 1 through 9 to myArray using a for loop. 


## [Count Backwards With a For Loop](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/count-backwards-with-a-for-loop)
* A for loop can also count backwards, 
* so long as we can define the right conditions.
* In order to decrement by two each iteration, 
* we'll need to change our initialization, condition, and final expression.
* We'll start at i = 10 and loop while i > 0.
*  We'll decrement i by 2 each loop with i -= 2.
```
var ourArray = [];
for (var i = 10; i > 0; i -= 2) {
  ourArray.push(i);
}
```
* ourArray will now contain [10,8,6,4,2]. 
* Let's change our initialization
*  and final expression so we can count backwards
*  by twos to create an array of descending odd numbers.

* CODE ASSIGNMENT: Push the odd numbers from 9 through 1 to myArray using a for loop.


## [Iterate Through an Array with a For Loop](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/iterate-through-an-array-with-a-for-loop)
*  A common task in JavaScript is to iterate through the contents of an array. 
*  One way to do that is with a for loop. 
*  This code will output each element of the array arr to the console:
```
var arr = [10, 9, 8, 7, 6];
for (var i = 0; i < arr.length; i++) {
   console.log(arr[i]);
}
```
* Remember that arrays have zero-based indexing, 
* which means the last index of the array is length - 1.
* Our condition for this loop is i < arr.length,
* which stops the loop when i is equal to length. 
* In this case the last iteration is i === 4 i.e.
*  when i becomes equal to arr.length - 1 
*  and outputs 6 to the console. 
*  Then i increases to 5, and the loop 
*  terminates because i < arr.length is false.

* CODE ASSIGNMENT: Declare and initialize a variable total to 0. Use a for loop to add the value of each element of the myArr array to total.


## [Nesting For Loops](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/nesting-for-loops)
* If you have a multi-dimensional array, 
* you can use the same logic as the prior waypoint
*  to loop through both the array and any sub-arrays. 
*  Here is an example:
```
var arr = [
  [1,2], [3,4], [5,6]
];
for (var i=0; i < arr.length; i++) {
  for (var j=0; j < arr[i].length; j++) {
    console.log(arr[i][j]);
  }
}
```
* This outputs each sub-element in arr one at a time. 
* Note that for the inner loop, 
* we are checking the .length of arr[i], 
* since arr[i] is itself an array.

* CODE ASSIGNMENT: Modify function multiplyAll so that it returns the product of all the numbers in the sub-arrays of arr.
* [This one takes a while](https://forum.freecodecamp.org/t/freecodecamp-challenge-guide-nesting-for-loops/18248/9) to start to "see" the concept


## [Iterate with JavaScript Do...While Loops](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/iterate-with-javascript-do---while-loops)
* The next type of loop you will learn is called a do...while loop. It is called a do...while loop because it will first do one pass of the code inside the loop no matter what, and then continue to run the loop while the specified condition evaluates to true.
```
var ourArray = [];
var i = 0;
do {
  ourArray.push(i);
  i++;
} while (i < 5);
```
The example above behaves similar to other types of loops, and the resulting array will look like [0, 1, 2, 3, 4]. However, what makes the do...while different from other loops is how it behaves when the condition fails on the first check. Let's see this in action: Here is a regular while loop that will run the code in the loop as long as i < 5:
```
var ourArray = []; 
var i = 5;
while (i < 5) {
  ourArray.push(i);
  i++;
}
```
In this example, we initialize the value of ourArray to an empty array and the value of i to 5. When we execute the while loop, the condition evaluates to false because i is not less than 5, so we do not execute the code inside the loop. The result is that ourArray will end up with no values added to it, and it will still look like [] when all of the code in the example above has completed running. Now, take a look at a do...while loop:
```
var ourArray = []; 
var i = 5;
do {
  ourArray.push(i);
  i++;
} while (i < 5);
```
In this case, we initialize the value of i to 5, just like we did with the while loop. When we get to the next line, there is no condition to evaluate, so we go to the code inside the curly braces and execute it. We will add a single element to the array and then increment i before we get to the condition check. When we finally evaluate the condition i < 5 on the last line, we see that i is now 6, which fails the conditional check, so we exit the loop and are done. At the end of the above example, the value of ourArray is [5]. Essentially, a do...while loop ensures that the code inside the loop will run at least once. Let's try getting a do...while loop to work by pushing values to an array.

* CODE ASSIGNMENT: Change the while loop in the code to a do...while loop so the loop will push only the number 10 to myArray, and i will be equal to 11 when your code has finished running.


## [Replace Loops using Recursion](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/replace-loops-using-recursion)
* Recursion is the concept that a function can be expressed in terms of itself. To help understand this, start by thinking about the following task: multiply the first n elements of an array to create the product of those elements. Using a for loop, you could do this:
```
  function multiply(arr, n) {
    var product = 1;
    for (var i = 0; i < n; i++) {
        product *= arr[i];
    }
    return product;
  }
```
However, notice that multiply(arr, n) == multiply(arr, n - 1) * arr[n - 1]. That means you can rewrite multiply in terms of itself and never need to use a loop.
```
  function multiply(arr, n) {
    if (n <= 0) {
      return 1;
    } else {
      return multiply(arr, n - 1) * arr[n - 1];
    }
  }
```
The recursive version of multiply breaks down like this. In the base case, where n <= 0, it returns 1. For larger values of n, it calls itself, but with n - 1. That function call is evaluated in the same way, calling multiply again until n <= 0. At this point, all the functions can return and the original multiply returns the answer.

Note: Recursive functions must have a base case when they return without calling the function again (in this example, when n <= 0), otherwise they can never finish executing.

* CODE ASSIGNMENT: Write a recursive function, sum(arr, n), that returns the sum of the first n elements of an array arr.


## [Profile Lookup](#)
*
* CODE ASSIGNMENT:


## [Generate Random Fractions with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/generate-random-fractions-with-javascript)
* Generate Random Fractions with JavaScript
* Random numbers are useful for creating random behavior.
* JavaScript has a Math.random() function that generates a random decimal number
*  between 0 (inclusive) and not quite up to 1 (exclusive). Thus Math.random() can return a 0 but never quite return a 1
*  Note: Like Storing Values with the Equal Operator, 
*  all function calls will be resolved before the return executes, so we can return the value of the Math.random() function.

* CODE ASSIGNMENT: Change randomFraction to return a random number instead of returning 0.



## [Generate Random Whole Numbers with JavaScript](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/generate-random-whole-numbers-with-javascript)
* to generate random whole numbers we: 
  1. Use ``` Math.random() ``` to generate a random decimal
  2. multiply that random decimal by 20
  3. use another function ``` Math.floor() ```
     to round the number down to its nearest whole number 
* remember that ``` ath.random() ``` can never quite return a 1 
* because we are rounding down, it is impossible to actually get 20
* this technique will give us whole numbers between 0 and 19
* pulling together all of this lesson, this is what our code looks like 
``` Math.floor(Math.random() * 20); ```
* we are calling Math.random()
* we are multiplying the result by 20 
* then we are passing the value to Math.floor()
* which is a function to round the value down to the nearest whole number. 
* Thus we have gerated random whole numbers. 
* CODE ASSIGNMENT:  Use this technique to generate and return a random whole number between 0 and 9.


## [Generate Random Whole Numbers within a Range](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/generate-random-whole-numbers-within-a-range)
*  Instead of generating a random whole number between zero and a given number like we did before, we can generate a random whole number that falls within a range of two specific numbers.To do this, we'll define a minimum number min and a maximum number max.
Here's the formula we'll use. Take a moment to read it and try to understand what this code is doing:
``` Math.floor(Math.random() * (max - min + 1)) + min ```
* CODE ASSIGNMENT: Create a function called randomRange that takes a range myMin and myMax and returns a random whole number that's greater than or equal to myMin, and is less than or equal to myMax, inclusive.


## [Use the parseInt Function](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-the-parseint-function)
* The parseInt() function parses a string
*  and returns an integer. Here's an example:
``` var a = parseInt("007"); ```
* The above function converts the string 007 to the integer 7. 
* If the first character in the string
*  can't be converted into a number,
*   then it returns NaN.

* CODE ASSIGNMENT: Use parseInt() in the convertToInteger function so it converts the input string str into an integer, and returns it.


## [Use the parseInt Function with a Radix](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-the-parseint-function-with-a-radix)
* The parseInt() function parses a string and returns an integer.
* It takes a second argument for the radix, 
* which specifies the base of the number in the string. 
* The radix can be an integer between 2 and 36.
* The function call looks like:
```parseInt(string, radix);```
* And here's an example:
``` var a = parseInt("11", 2); ```
* The radix variable says that 11 is in the binary system, 
* or base 2. 
* This example converts the string 11 to an integer 3.

* CODE ASSIGNMENT: Use parseInt() in the convertToInteger function so it converts a binary number to an integer and returns it.


## [Use the Conditional (Ternary) Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-the-conditional-ternary-operator)
* The conditional operator, also called the ternary operator, 
* can be used as a one line if-else expression.
* The syntax is a ? b : c, where a is the condition, b is the code to run 
* when the condition returns true, 
* and c is the code to run when the condition returns false.
* The following function uses an if/else statement to check a condition:
```
function findGreater(a, b) {
  if(a > b) {
    return "a is greater";
  }
  else {
    return "b is greater";
  }
}
```
* This can be re-written using the conditional operator:
```
function findGreater(a, b) {
  return a > b ? "a is greater" : "b is greater";
}
```
* CODE ASSIGNMENT: Use the conditional operator in the checkEqual function to check if two numbers are equal or not. The function should return either the string Equal or the string Not Equal.


## [Use Multiple Conditional (Ternary) Operators](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-multiple-conditional-ternary-operators)
* In the previous challenge, you used a single conditional operator. 
* You can also chain them together to check for multiple conditions.
* The following function uses if, else if, and else statements to check multiple conditions:
```
function findGreaterOrEqual(a, b) {
  if (a === b) {
    return "a and b are equal";
  }
  else if (a > b) {
    return "a is greater";
  }
  else {
    return "b is greater";
  }
}
```
* The above function can be re-written using multiple conditional operators:
```
function findGreaterOrEqual(a, b) {
  return (a === b) ? "a and b are equal" 
    : (a > b) ? "a is greater" 
    : "b is greater";
}
```
* It is considered best practice to format multiple conditional operators 
* such that each condition is on a separate line, as shown above. 
* Using multiple conditional operators without proper indentation 
* may make your code hard to read. For example:
```
function findGreaterOrEqual(a, b) {
  return (a === b) ? "a and b are equal" : (a > b) ? "a is greater" : "b is greater";
}
```
* CODE ASSIGNMENT: In the checkSign function, use multiple conditional operators - following the recommended format used in findGreaterOrEqual - to check if a number is positive, negative or zero. The function should return positive, negative or zero.



## [Use Recursion to Create a Countdown](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-recursion-to-create-a-countdown)
* CODE ASSIGNMENT: 

In a previous challenge, you learned how to use recursion to replace a for loop. Now, let's look at a more complex function that returns an array of consecutive integers starting with 1 through the number passed to the function.

As mentioned in the previous challenge, there will be a base case. The base case tells the recursive function when it no longer needs to call itself. It is a simple case where the return value is already known. There will also be a recursive call which executes the original function with different arguments. If the function is written correctly, eventually the base case will be reached.

For example, say you want to write a recursive function that returns an array containing the numbers 1 through n. This function will need to accept an argument, n, representing the final number. Then it will need to call itself with progressively smaller values of n until it reaches 1. You could write the function as follows:
```
function countup(n) {
  if (n < 1) {
    return [];
  } else {
    const countArray = countup(n - 1);
    countArray.push(n);
    return countArray;
  }
}
console.log(countup(5));
```
The value [1, 2, 3, 4, 5] will be displayed in the console.

At first, this seems counterintuitive since the value of n decreases, but the values in the final array are increasing. This happens because the push happens last, after the recursive call has returned. At the point where n is pushed into the array, countup(n - 1) has already been evaluated and returned [1, 2, ..., n - 1].

We have defined a function called countdown with one parameter (n). The function should use recursion to return an array containing the integers n through 1 based on the n parameter. If the function is called with a number less than 1, the function should return an empty array. For example, calling this function with n = 5 should return the array [5, 4, 3, 2, 1]. Your function must use recursion by calling itself and must not use loops of any kind.



## [Use Recursion to Create a Range of Numbers](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/use-recursion-to-create-a-range-of-numbers)
* CODE ASSIGNMENT: Continuing from the previous challenge, we provide you another opportunity to create a recursive function to solve a problem.

We have defined a function named rangeOfNumbers with two parameters. The function should return an array of integers which begins with a number represented by the startNum parameter and ends with a number represented by the endNum parameter. The starting number will always be less than or equal to the ending number. Your function must use recursion by calling itself and not use loops of any kind. It should also work for cases where both startNum and endNum are the same.


![Finished: May 10, 2021](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/Images/2021-05-10_FCC_completed-basic-javascript.jpg)




Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
