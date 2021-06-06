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
* Sometimes you don't need to know the exact characters in your patterns. 
* Sometimes you need to but just don't know. 
* For example, what are all of the words which match a misspelling?
* This is when we use a wildcard character. 
* The wildcard character ```.``` will match any one character
* the Wild Card is also called DOT or PERIOD 
* you can use the wildcard character just like any other character in the regex.
* for example, if you want to match hug huh hut and hum
* then use regex /hu/ to match all four words
```
let humStr = "I'll hum a song";
let hugStr = "Bear hug";
let huRegex = /hu./;
huRegex.test(humStr);
huRegex.test(hugStr);
```
* Both of these test calls would return true.

* CODE CHALLENGE: Complete the regex unRegex so that it matches the strings run, sun, fun, pun, nun, and bun. Your regex should use the wildcard character.


## [8. Match Single Character with Multiple Possibilities](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-single-character-with-multiple-possibilities)
*  You learned how to match literal patterns (/literal/) and wildcard character (/./). 
*  Those are the extremes of regular expressions, where one finds exact matches and the other matches everything. 
*  There are options that are a balance between the two extremes.
*  You can search for a literal pattern with some flexibility with character classes. 
*  Character classes allow you to define a group of characters you wish to match by placing them inside square ([ and ]) brackets.
*  For example, you want to match bag, big, and bug but not bog. 
*  You can create the regex /b[aiu]g/ to do this. The [aiu] is the character class that will only match the characters a, i, or u.
```
let bigStr = "big";
let bagStr = "bag";
let bugStr = "bug";
let bogStr = "bog";
let bgRegex = /b[aiu]g/;
bigStr.match(bgRegex);
bagStr.match(bgRegex);
bugStr.match(bgRegex);
bogStr.match(bgRegex);
```
* CODE CHALLENGE:  Use a character class with vowels (a, e, i, o, u) in your regex vowelRegex to find all the vowels in the string quoteSample. Note: Be sure to match both upper- and lowercase vowels.


## [9. Match Letters of the Alphabet](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-letters-of-the-alphabet)
* You saw how you can use character sets to specify a group 
* of characters to match, 
* but that's a lot of typing when you need to 
* match a large range of characters 
* (for example, every letter in the alphabet). 
* Fortunately, there is a built-in feature that 
* makes this short and simple.
* Inside a character set, you can define a range of characters
*  to match using a hyphen character: -.
*  For example, to match lowercase letters a through e you would use [a-e].
```
let catStr = "cat";
let batStr = "bat";
let matStr = "mat";
let bgRegex = /[a-e]at/;
catStr.match(bgRegex);
batStr.match(bgRegex);
matStr.match(bgRegex);
```
* In Order, the 3 match calls would return the valutes ["cat"].["bat"]and null
* CODE CHALLENGE: Match all the letters in the string quoteSample.
* Note: Be sure to match both uppercase and lowercase letters.


## [10. Match Numbers and Letters of the Alphabet](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-numbers-and-letters-of-the-alphabet)
* Using the hyphen (-) to match a range of characters 
* is not limited to letters. It also works to match a range of numbers.
* For example, /[0-5]/ matches any number between 0 and 5, 
* including the 0 and 5.
* Also, it is possible to combine a range of letters 
* and numbers in a single character set.
```
let jennyStr = "Jenny8675309";
let myRegex = /[a-z0-9]/ig;
jennyStr.match(myRegex);
```
* CODE CHALLENGE: Create a single regex that matches a range of letters between h and s, and a range of numbers between 2 and 6. Remember to include the appropriate flags in the regex.


## [11. Match Single Characters Not Specified](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-single-characters-not-specified)
* So far, you have created a set of characters 
* that you want to match, 
* but you could also create a set of characters 
* that you do not want to match. 
* These types of character sets are called negated character sets.
* To create a negated character set, you place a caret character (^) 
* after the opening bracket 
* and before the characters you do not want to match.
* For example, /[^aeiou]/gi matches all characters 
* that are not a vowel. 
* Note that characters like ```., !, [, @, / ```
* and white space are matched - 
* the negated vowel character set only excludes the vowel characters.

* CODE CHALLENGE: Create a single regex that matches all characters that are not a number or a vowel. Remember to include the appropriate flags in the regex.

## [12. Match Characters that Occur One or More Times](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-characters-that-occur-one-or-more-times)
* 

Sometimes, you need to match a character (or group of characters) that appears one or more times in a row. This means it occurs at least once, and may be repeated.

You can use the + character to check if that is the case. Remember, the character or pattern has to be present consecutively. That is, the character has to repeat one after the other.

For example, /a+/g would find one match in abc and return ["a"]. Because of the +, it would also find a single match in aabc and return ["aa"].

If it were instead checking the string abab, it would find two matches and return ["a", "a"] because the a characters are not in a row - there is a b between them. Finally, since there is no a in the string bcd, it wouldn't find a match.

* CODE CHALLENGE: You want to find matches when the letter s occurs one or more times in Mississippi. Write a regex that uses the + sign.

## [13. Match Characters that Occur Zero or More Times](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-characters-that-occur-zero-or-more-times)

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
