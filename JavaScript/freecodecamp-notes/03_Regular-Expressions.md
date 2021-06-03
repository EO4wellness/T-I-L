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

## [3. Match a Literal String with Different Possibilities](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-a-literal-string-with-different-possibilities)
* Using regexes like /coding/, 
* you can look for the pattern coding in another string.
* This is powerful to search single strings, 
* but it's limited to only one pattern. 
* You can search for multiple patterns 
* using the alternation or OR operator: |.
* This operator matches patterns either before or after it. 
* For example, if you wanted to match the strings yes or no, 
* the regex you want is /yes|no/.
* You can also search for more than just two patterns. 
* You can do this by adding more patterns with more 
* OR operators separating them, like /yes|no|maybe/.

* CODE CHALLENGE: Complete the regex petRegex to match the pets dog, cat, bird, or 

## [4. Ignore Case While Matching](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/ignore-case-while-matching)
* Up until now, you've looked at regexes to do literal matches of strings. 
* But sometimes, you might want to also match case differences.
* Case (or sometimes letter case) is the difference between uppercase letters and lowercase letters. 
* Examples of uppercase are A, B, and C. Examples of lowercase are a, b, and c.
* You can match both cases using what is called a flag. 
* There are other flags but here you'll focus on the flag that ignores case - the i flag. 
* You can use it by appending it to the regex. An example of using this flag is /ignorecase/i. 
* This regex can match the strings ignorecase, igNoreCase, and IgnoreCase.

* CODE CHALLENGE: Write a regex fccRegex to match freeCodeCamp, no matter its case. Your regex should not match any abbreviations or variations with spaces.

I didn't see a place to report this within FCC but this is the first coding lesson and challenge, that I had no clue what they were getting at.  I understood what was desired.  I understood the logic behind solving the problem.  I didn't understand the syntax which was expected and therefore I think this lesson could be helped, greatly, thru a syntax example being given. 

## [5. Extract Matches](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/extract-matches)
* So far, you have only been checking if a pattern exists or not within a string. 
* You can also extract the actual matches you found with the .match() method.
* To use the .match() method, apply the method on a string and pass in the regex inside the parentheses.
* Here's an example:
```
"Hello, World!".match(/Hello/);
let ourStr = "Regular expressions";
let ourRegex = /expressions/;
ourStr.match(ourRegex);
```
* Here the first match would return ["Hello"] and the second would return ["expressions"].
* Note that the .match syntax is the "opposite" of the .test method you have been using thus far:
```
'string'.match(/regex/);
/regex/.test('string');
```
* CODE CHALLENGE: Apply the .match() method to extract the string coding. 
challenge starting code: 
```
let extractStr = "Extract the word 'coding' from this string.";
let codingRegex = /change/; // Change this line
let result = extractStr; // Change this line
```
my code: 
```
let extractStr = "Extract the word 'coding' from this string.";
let codingRegex = /coding/; 
let result = extractStr.match(codingRegex); 
```

## [6. Find More Than the First Match](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/find-more-than-the-first-match)
* So far, you have only been able to extract or search a pattern once.
```
let testStr = "Repeat, Repeat, Repeat";
let ourRegex = /Repeat/;
testStr.match(ourRegex);
```
Here match would return ["Repeat"].

To search or extract a pattern more than once, you can use the g flag.
```
let repeatRegex = /Repeat/g;
testStr.match(repeatRegex);
```
And here match returns the value ["Repeat", "Repeat", "Repeat"]

* CODE CHALLENGE: 

Using the regex starRegex, find and extract both Twinkle words from the string twinkleStar.

Note
You can have multiple flags on your regex like /search/gi


## [7. Match Anything with Wildcard Period](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-anything-with-wildcard-period)
* 
* CODE CHALLENGE: 

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
	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
