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
* In the last challenge, you searched for the word Hello 
* using the regular expression /Hello/. 
* That regex searched for a literal match of the string Hello. 
* Here's another example searching for a literal match 
* of the string Kevin:
```
let testStr = "Hello, my name is Kevin.";
let testRegex = /Kevin/;
testRegex.test(testStr);
```
* The above example code will return true.
* Any other forms of Kevin will not match. 
* For example, the regex /Kevin/ will not match kevin or KEVIN.
```
let wrongRegex = /kevin/;
wrongRegex.test(testStr);
```
* The above example code will return false.
* In a future challenge will show how to match those other forms as well.

* CODE CHALLENGE: Complete the regex waldoRegex to find "Waldo" in the string waldoIsHiding with a literal match.

## [3. Match a Literal String with Different Possibilities](#)

## [4. Ignore Case While Matching](#)

## [5. Extract Matches](#)

## [6. Find More Than the First Match](#)

## [7. Match Anything with Wildcard Period](#)

## [8. Match Single Character with Multiple Possibilities](#)

## [9. Match Letters of the Alphabet](#)

## [10. Match Numbers and Letters of the Alphabet](#)

## [11. Match Single Characters Not Specified](#)

## [12. Match Characters that Occur One or More Times](#)

## [13. Match Characters that Occur Zero or More Times](#)

## [14. Find Characters with Lazy Matching](#)

## [15. Find One or More Criminals in a Hunt](#)

## [16. Match Beginning String Patterns](#)

## [17. Match Ending String Patterns](#)

## [18. Match All Letters and Numbers](#)

## [19. Match Everything But Letters and Numbers](#)

## [20. Match All Numbers](#)

## [21. Match All Non-Numbers](#)

## [22. Restrict Possible Usernames](#)

## [23. Match Whitespace](#)

## [24. Match Non-Whitespace Characters](#)

## [25. Specify Upper and Lower Number of Matches](#)

## [26. Specify Only the Lower Number of Matches](#)

## [27. Specify Exact Number of Matches](#)

## [28. Check for All or None](#)

## [29. Positive and Negative Lookahead](#)

## [30. Check For Mixed Grouping of Characters](#)

## [31. Reuse Patterns Using Capture Groups](#)

## [32. Use Capture Groups to Search and Replace](#)

## [33. Remove Whitespace from Start and End](#)
	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/Basic-Data-Structures.md) | [Basic Algorithm Scripting] |  [Object Oriented Programming] | [Functional Porgramming] | [Intermediate algorithm Scripting] | [JavaScript Algorithms and Data Structures Projects]
