# [Regular Expressions](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/#regular-expressions)
Regular expressions, often shortened to "regex" or "regexp", are patterns that help programmers match, search, and replace text. Regular expressions are very powerful, but can be hard to read because they use special characters to make more complex, flexible matches.

In this course, you'll learn how to use special characters, capture groups, positive and negative lookaheads, and other techniques to match any text you want.

This section contains 33 sections and coding challenges

positive and negative lookaheads, and other techniques to match any text you want.

# [1. Using the Test Method](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/using-the-test-method)
* Began study of this session on May 30th, 2021.
* Regular Expressions are used in programming languages to match parts of strings. 
* you create patterns to help you do that matching. 
* For example, let's say you want to find "the" in a string "The dog chased the cat"
* You could use the following regular expression: ```/the/```
* notice the quote marks are not required with the regular expression.
* JS has multiple ways to use regexes. 
* one way to test a regex is using the ``` .test() ``` method 
* the ``` .test() ``` method takes the regex
* and applies it to a string
* which is placed inside the parentheses 
* and returns true or false 
* if your pattern is found or not 
* Example: 
```
let testStr = "freeCodeCamp";
let testRegex = /Code/;
testRegex.test(testStr);
```
* The test method here returns TRUE 
* CODE CHALLENGE: apply the regex meRegex on the string myString using the .text() method.

NOTE TO SELF: I have to be careful.  Several times I typoed TEXT for TEST.  

# [2. Match Literal Strings](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-literal-strings)

Match a Literal String with Different Possibilities

Ignore Case While Matching

Extract Matches

Find More Than the First Match

Match Anything with Wildcard Period

Match Single Character with Multiple Possibilities

Match Letters of the Alphabet

Match Numbers and Letters of the Alphabet

Match Single Characters Not Specified

Match Characters that Occur One or More Times

Match Characters that Occur Zero or More Times

Find Characters with Lazy Matching

Find One or More Criminals in a Hunt

Match Beginning String Patterns

Match Ending String Patterns

Match All Letters and Numbers

Match Everything But Letters and Numbers

Match All Numbers

Match All Non-Numbers

Restrict Possible Usernames

Match Whitespace

Match Non-Whitespace Characters

Specify Upper and Lower Number of Matches

Specify Only the Lower Number of Matches

Specify Exact Number of Matches

Check for All or None

Positive and Negative Lookahead

Check For Mixed Grouping of Characters

Reuse Patterns Using Capture Groups

Use Capture Groups to Search and Replace

Remove Whitespace from Start and End
	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/Basic-Data-Structures.md) | [Basic Algorithm Scripting] |  [Object Oriented Programming] | [Functional Porgramming] | [Intermediate algorithm Scripting] | [JavaScript Algorithms and Data Structures Projects]
