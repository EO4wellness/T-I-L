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
