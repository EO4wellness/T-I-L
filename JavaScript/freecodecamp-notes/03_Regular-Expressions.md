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
*  Sometimes, you need to match a character (or group of characters) that appears one or more times in a row. 
*  This means it occurs at least once, and may be repeated.
*  You can use the + character to check if that is the case. 
*  Remember, the character or pattern has to be present consecutively. 
*  That is, the character has to repeat one after the other.
*  For example, /a+/g would find one match in abc and return ["a"]. 
*  Because of the +, it would also find a single match in aabc and return ["aa"].
*  If it were instead checking the string abab, it would find two matches and return ["a", "a"] because the a characters are not in a row - there is a b between them. Finally, since there is no a in the string bcd, it wouldn't find a match.

* CODE CHALLENGE: You want to find matches when the letter s occurs one or more times in Mississippi. Write a regex that uses the + sign.

## [13. Match Characters that Occur Zero or More Times](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-characters-that-occur-zero-or-more-times)
* challenge used the plus + sign to look for characters that occur one or more times. 
* There's also an option that matches characters that occur zero or more times.
* The character to do this is the asterisk or star: *.
```
let soccerWord = "gooooooooal!";
let gPhrase = "gut feeling";
let oPhrase = "over the moon";
let goRegex = /go*/;
soccerWord.match(goRegex);
gPhrase.match(goRegex);
oPhrase.match(goRegex);
```
* In order, the three match calls would return the values ["goooooooo"], ["g"], and null.

* CODE CHALLENGE: For this challenge, chewieQuote has been initialized as the string Aaaaaaaaaaaaaaaarrrgh! behind the scenes. Create a regex chewieRegex that uses the * character to match an uppercase A character immediately followed by zero or more lowercase a characters in chewieQuote. Your regex does not need flags or character classes, and it should not match any of the other quotes.

## [14. Find Characters with Lazy Matching](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/find-characters-with-lazy-matching)
* In regular expressions, a greedy match finds the longest possible part of a string 
* that fits the regex pattern and returns it as a match. 
* The alternative is called a lazy match, which finds the smallest possible part of the string that satisfies the regex pattern.
* You can apply the ```regex /t[a-z]*i/``` to the string "titanic". 
* This regex is basically a pattern that starts with t, ends with i, and has some letters in between.
* Regular expressions are by default greedy, so the match would return ["titani"]. 
* It finds the largest sub-string possible to fit the pattern.
* However, you can use the ? character to change it to lazy matching. 
* "titanic" matched against the adjusted ```regex of /t[a-z]*?i/ returns ["ti"]```.
* Note: Parsing HTML with regular expressions should be avoided, 
* but pattern matching an HTML string with regular expressions is completely fine.

* CODE CHALLENGE: Fix the``` regex /<.*>/``` to return the ```HTML tag <h1> and not the text "<h1>Winter is coming</h1>".``` 
	Remember the ```wildcard . ``` in a regular expression matches any character.

## [15. Find One or More Criminals in a Hunt](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/find-one-or-more-criminals-in-a-hunt) 
* Time to pause and test your new regex writing skills. A group of criminals escaped from jail and ran away, but you don't know how many. However, you do know that they stay close together when they are around other people. You are responsible for finding all of the criminals at once.Here's an example to review how to do this:
* The regex /z+/ matches the letter z when it appears one or more times in a row. 
* It would find matches in all of the following strings:
```
"z"
"zzzzzz"
"ABCzzzz"
"zzzzABC"
"abczzzzzzzzzzzzzzzzzzzzzabc"
```
* But it does not find matches in the following strings since there are no letter z characters:
```
""
"ABC"
"abcabc"
```
* CODE CHALLENGE: Write a greedy regex that finds one or more criminals within a group of other people. A criminal is represented by the capital letter C.
	
	
## [16. Match Beginning String Patterns](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-beginning-string-patterns)
* Prior challenges showed that regular expressions can be used to look for a number of matches. 
* They are also used to search for patterns in specific positions in strings.
* In an earlier challenge, you used the caret character (^) inside a character set to create 
* a negated character set in the form ```[^thingsThatWillNotBeMatched]```. 
* Outside of a character set, the caret is used to search for patterns at the beginning of strings.
```
let firstString = "Ricky is first and can be found.";
let firstRegex = /^Ricky/;
firstRegex.test(firstString);
let notFirst = "You can't find Ricky now.";
firstRegex.test(notFirst);
```
* The first test call would return true, while the second would return false.

* CODE CHALLENGE: Use the caret character in a regex to find Cal only in the beginning of the string rickyAndCal.

	
## [17. Match Ending String Patterns](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-ending-string-patterns)
* In the last challenge, you learned to use the caret character 
* to search for patterns at the beginning of strings. 
* There is also a way to search for patterns at the end of strings.
* You can search the end of strings 
* using the dollar sign character $ at the end of the regex.
```
let theEnding = "This is a never ending story";
let storyRegex = /story$/;
storyRegex.test(theEnding);
let noEnding = "Sometimes a story will have to end";
storyRegex.test(noEnding);
```
* The first test call would return true, while the second would return false.

* CODE CHALLENGE: Use the anchor character ($) to match the string caboose at the end of the string caboose.

## [18. Match All Letters and Numbers](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-all-letters-and-numbers)
* Using character classes, you were able to search for all letters of the alphabet with [a-z]. 
* This kind of character class is common enough that there is a shortcut for it, although it includes a few extra characters as well.
* The closest character class in JavaScript to match the alphabet is \w. This shortcut is equal to [A-Za-z0-9_]. 
* This character class matches upper and lowercase letters plus numbers. 
* Note, this character class also includes the underscore character (_).
```
let longHand = /[A-Za-z0-9_]+/;
let shortHand = /\w+/;
let numbers = "42";
let varNames = "important_var";
longHand.test(numbers);
shortHand.test(numbers);
longHand.test(varNames);
shortHand.test(varNames);
```
* All four of these test calls would return true.
* CODE CHALLENGE: Use the shorthand character class \w to count the number of alphanumeric characters in various quotes and strings.

## [19. Match Everything But Letters and Numbers](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-everything-but-letters-and-numbers)
* You've learned that you can use a shortcut to match alphanumerics [A-Za-z0-9_] using \w. 
* A natural pattern you might want to search for is the opposite of alphanumerics.
* You can search for the opposite of the \w with \W. Note, the opposite pattern uses a capital letter. 
* This shortcut is the same as [^A-Za-z0-9_].
```
let shortHand = /\W/;
let numbers = "42%";
let sentence = "Coding!";
numbers.match(shortHand);
sentence.match(shortHand);
```
* The first match call would return the value ["%"] and the second would return ["!"].

* CODE CHALLENGE: Use the shorthand character class \W to count the number of non-alphanumeric characters in various quotes and strings. 

## [20. Match All Numbers](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-all-numbers)
* You've learned shortcuts for common string patterns like alphanumerics. 
* Another common pattern is looking for just digits or numbers.
* The shortcut to look for digit characters is \d, with a lowercase d. 
* This is equal to the character class [0-9], which looks for a single character of any number between zero and nine.

* CODE CHALLENGE: Use the shorthand character class \d to count how many digits are in movie titles. Written out numbers ("six" instead of 6) do not count.

## [21. Match All Non-Numbers](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-all-non-numbers)
*  The last challenge showed how to search for digits using the shortcut \d with a lowercase d. 
* You can also search for non-digits using a similar shortcut that uses an uppercase D instead.
* The shortcut to look for non-digit characters is \D. This is equal to the character class [^0-9], 
* which looks for a single character that is not a number between zero and nine.

* CODE CHALLENGE: Use the shorthand character class for non-digits \D to count how many non-digits are in movie titles.

## [22. Restrict Possible Usernames](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/restrict-possible-usernames)
* Usernames are used everywhere on the internet. 
* They are what give users a unique identity on their favorite sites.
* You need to check all the usernames in a database. 
* Here are some simple rules that users have to follow when creating their username.
* Usernames can only use alpha-numeric characters.
* The only numbers in the username have to be at the end. 
* There can be zero or more of them at the end. Username cannot start with the number.
* Username letters can be lowercase and uppercase.
* Usernames have to be at least two characters long. A two-character username can only use alphabet letters as characters.

* CODE CHALLLENGE: Change the regex userCheck to fit the constraints listed above.

## [23. Match Whitespace](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/match-whitespace)
* The challenges so far have covered matching letters of the alphabet and numbers. 
* You can also match the whitespace or spaces between letters.
* You can search for whitespace using \s, which is a lowercase s. 
* This pattern not only matches whitespace, but also carriage return, tab, form feed, and new line characters. 
* You can think of it as similar to the character class [ \r\t\f\n\v].
```
let whiteSpace = "Whitespace. Whitespace everywhere!"
let spaceRegex = /\s/g;
whiteSpace.match(spaceRegex);
```
* This match call would return [" ", " "].

* CODE CHALLLENGE: Change the regex countWhiteSpace to look for multiple whitespace characters in a string.

## [24. Match Non-Whitespace Characters](#)
* 

You learned about searching for whitespace using \s, with a lowercase s. You can also search for everything except whitespace.

Search for non-whitespace using \S, which is an uppercase s. This pattern will not match whitespace, carriage return, tab, form feed, and new line characters. You can think of it being similar to the character class [^ \r\t\f\n\v].

let whiteSpace = "Whitespace. Whitespace everywhere!"
let nonSpaceRegex = /\S/g;
whiteSpace.match(nonSpaceRegex).length;

The value returned by the .length method would be 32.

* CODE CHALLENGE Change the regex countNonWhiteSpace to look for multiple non-whitespace characters in a string.

## [25. Specify Upper and Lower Number of Matches](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/specify-upper-and-lower-number-of-matches)
* 

Recall that you use the plus sign + to look for one or more characters and the asterisk * to look for zero or more characters. These are convenient but sometimes you want to match a certain range of patterns.

You can specify the lower and upper number of patterns with quantity specifiers. Quantity specifiers are used with curly brackets ({ and }). You put two numbers between the curly brackets - for the lower and upper number of patterns.

For example, to match only the letter a appearing between 3 and 5 times in the string ah, your regex would be /a{3,5}h/.

let A4 = "aaaah";
let A2 = "aah";
let multipleA = /a{3,5}h/;
multipleA.test(A4);
multipleA.test(A2);

The first test call would return true, while the second would return false.

* CODE CHALLENGE Change the regex ohRegex to match the entire phrase Oh no only when it has 3 to 6 letter h's.

## [26. Specify Only the Lower Number of Matches](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/specify-only-the-lower-number-of-matches)
* You can specify the lower and upper number of patterns with quantity specifiers using curly brackets. 
* Sometimes you only want to specify the lower number of patterns with no upper limit.
* To only specify the lower number of patterns, keep the first number followed by a comma.
* For example, to match only the string hah with the letter a appearing at least 3 times, 
* your regex would be ```/ha{3,}h/.```
```
let A4 = "haaaah";
let A2 = "haah";
let A100 = "h" + "a".repeat(100) + "h";
let multipleA = /ha{3,}h/;
multipleA.test(A4);
multipleA.test(A2);
multipleA.test(A100);
```
* In order, the three test calls would return true, false, and true.

* CODE CHALLENGE: Change the regex haRegex to match the word Hazzah only when it has four or more letter z's.

## [27. Specify Exact Number of Matches](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/specify-exact-number-of-matches)
* You can specify the lower and upper number of patterns with quantity specifiers using curly brackets. 
* Sometimes you only want a specific number of matches.
* To specify a certain number of patterns, just have that one number between the curly brackets.
* For example, to match only the word hah with the letter a 3 times, your regex would be``` /ha{3}h/```.
```
let A4 = "haaaah";
let A3 = "haaah";
let A100 = "h" + "a".repeat(100) + "h";
let multipleHA = /ha{3}h/;
multipleHA.test(A4);
multipleHA.test(A3);
multipleHA.test(A100);
```
* In order, the three test calls would return false, true, and false.

* CODE CHALLENGE: Change the regex timRegex to match the word Timber only when it has four letter m's.


## [28. Check for All or None](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/check-for-all-or-none)
* Sometimes the patterns you want to search for may have parts of it that may or may not exist. 
* However, it may be important to check for them nonetheless.
* You can specify the possible existence of an element with a question mark, ?. 
* This checks for zero or one of the preceding element. 
* You can think of this symbol as saying the previous element is optional.
* For example, there are slight differences in American and British English 
* and you can use the question mark to match both spellings.
```
let american = "color";
let british = "colour";
let rainbowRegex= /colou?r/;
rainbowRegex.test(american);
rainbowRegex.test(british);
```
* Both uses of the test method would return true.

* CODE CHALLENGE: Change the regex favRegex to match both the American English (favorite) and the British English (favourite) version of the word.

## [29. Positive and Negative Lookahead](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/positive-and-negative-lookahead)
* Lookaheads are patterns that tell JavaScript to look-ahead in your string to check for patterns further along. This can be useful when you want to search for multiple patterns over the same string.
* There are two kinds of lookaheads: positive lookahead and negative lookahead.
* A positive lookahead will look to make sure the element in the search pattern is there, but won't actually match it. A positive lookahead is used as ```(?=...)``` where the ... is the required part that is not matched.
* On the other hand, a negative lookahead will look to make sure the element in the search pattern is not there. A negative lookahead is used as ```(?!...)``` where the ... is the pattern that you do not want to be there. The rest of the pattern is returned if the negative lookahead part is not present.
* Lookaheads are a bit confusing but some examples will help.
```
let quit = "qu";
let noquit = "qt";
let quRegex= /q(?=u)/;
let qRegex = /q(?!u)/;
quit.match(quRegex);
noquit.match(qRegex);
```
* Both of these match calls would return ```["q"]```.
* A more practical use of lookaheads is to check two or more patterns in one string. Here is a (naively) simple password checker that looks for between 3 and 6 characters and at least one number:
```
let password = "abc123";
let checkPass = /(?=\w{3,6})(?=\D*\d)/;
checkPass.test(password);
```

* CODE CHALLENGE: A more practical use of lookaheads is to check two or more patterns in one string. Here is a (naively) simple password checker that looks for between 3 and 6 characters and at least one number:

## [30. Check For Mixed Grouping of Characters](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/regular-expressions/check-for-mixed-grouping-of-characters)
* 
* CODE CHALLENGE: 

## [31. Reuse Patterns Using Capture Groups](#)
* 
* CODE CHALLENGE: 

## [32. Use Capture Groups to Search and Replace](#)
* 
* CODE CHALLENGE: 

## [33. Remove Whitespace from Start and End](#)
* 
* CODE CHALLENGE: 
	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
