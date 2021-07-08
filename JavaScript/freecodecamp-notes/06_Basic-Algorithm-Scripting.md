 # [Basic Algorithm Scripting](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/#basic-algorithm-scripting) (16 Units) 
* An algorithm is a series of step-by-step instructions that describe how to do something.
* To write an effective algorithm, it helps to break a problem down into smaller parts, and think carefully about how to solve each part with code.
* In this course, you'll learn the fundamentals of algorithmic thinking by writing algorithms that do everything from converting temperatures to handling complex 2D arrays.
 
 # [01-Convert Celsius to Fahrenheit](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/convert-celsius-to-fahrenheit)
CODE CHALLENGE:  The algorithm to convert from Celsius to Fahrenheit is the temperature in Celsius times 9/5, plus 32. You are given a variable celsius representing a temperature in Celsius. Use the variable fahrenheit already defined and assign it the Fahrenheit temperature equivalent to the given Celsius temperature. Use the algorithm mentioned above to help convert the Celsius temperature to Fahrenheit.
```
function convertToF(celsius) {
  let fahrenheit=((celsius*(9/5))+32);
  return fahrenheit;
}
```
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/01_convert-celsius-to-fahrenheit.js)

# [02- Reverse a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/reverse-a-string)
CODE CHALLENGE: Reverse the provided string. You may need to turn the string into an array before you can reverse it. Your result must be a string.

```
function reverseString(str) {
    var newString = "";
    for (var i = str.length - 1; i >= 0; i--) {
        newString += str[i];
    }
    return newString;
}
```
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/02_reverse-a-string.js)


# [03-Factorialize a Number ](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/factorialize-a-number)
CODE CHALLENGE: Return the factorial of the provided integer.If the integer is represented with the letter n, a factorial is the product of all positive integers less than or equal to n. Factorials are often represented with the shorthand notation n! For example: 5! = 1 * 2 * 3 * 4 * 5 = 120 Only integers greater than or equal to zero will be supplied to the function.
```
function factorialize(num, factorial = 1) {
  if (num == 0) {
    return factorial;
  } else {
    return factorialize(num - 1, factorial * num);
  }
}
```
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/03_factorialize-a-number.js)


# [04-Find the Longest Word in a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/find-the-longest-word-in-a-string)
CODE CHALLENGE: Return the length of the longest word in the provided sentence.Your response should be a number.
```
function findLongestWordLength(str) {
  return Math.max(...str.split(" ").map(word => word.length));
}
```
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/04_find-the-longest-word-in-a-string.js)


# [05-Return Largest Numbers in Arrays](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/return-largest-numbers-in-arrays)
CODE CHALLENGE: Return an array consisting of the largest number from each provided sub-array. For simplicity, the provided array will contain exactly 4 sub-arrays. Remember, you can iterate through an array with a simple for loop, and access each member with array syntax arr[i].
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/05_return-largest-numbers-in-arrays.js)

# [06-Confirm the EndingPassed](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/confirm-the-ending)
CODE CHALLENGE: 
Check if a string (first argument, str) ends with the given target string (second argument, target).

This challenge can be solved with the .endsWith() method, which was introduced in ES2015. But for the purpose of this challenge, we would like you to use one of the JavaScript substring methods instead.

[My Code - Example 1](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/06_a_confirm-the-ending.js)
[My Code - Example 2](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/06_b_confirm-the-ending.js)
[My Code - Example 3](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/06_c_confirm-the-ending.js)


# [07-Repeat a String Repeat a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/repeat-a-string-repeat-a-string)
CODE CHALLENGE: Repeat a given string ```str``` (first argument) for ```num``` times (second argument). Return an empty string if ```num``` is not a positive number. For the purpose of this challenge, do not use the built-in ```.repeat()``` method.
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/07_repeat-a-string-repeat-a-string.js)


# [08-Truncate a String](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/truncate-a-string)
CODE CHALLENGE: Truncate a string (first argument) if it is longer than the given maximum string length (second argument). Return the truncated string with a ... ending.
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/08_truncate-a-string.js)


# [09-Finders Keepers](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/finders-keepers)
CODE CHALLENGE: Create a function that looks through an array arr and returns the first element in it that passes a 'truth test'. This means that given an element x, the 'truth test' is passed if func(x) is true. If no element passes the test, return undefined.
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/09_finders-keepers.js)


# [10-Boo who](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/boo-who)
CODE CHALLENGE: 

Check if a value is classified as a boolean primitive. Return true or false.

Boolean primitives are true and false.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/06.BasicAlgorithmScripting/10_boo-who.js)


# [11-Title Case a Sentence](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/title-case-a-sentence)
CODE CHALLENGE: 

Return the provided string with the first letter of each word capitalized. Make sure the rest of the word is in lower case.

For the purpose of this exercise, you should also capitalize connecting words like the and of.

[My Code](#)


# [12-Slice and Splice](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/slice-and-splice)
CODE CHALLENGE: 

You are given two arrays and an index.

Copy each element of the first array into the second array, in order.

Begin inserting elements at index n of the second array.

Return the resulting array. The input arrays should remain the same after the function runs.

[My Code](#)


# [13-Falsy Bouncer](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/falsy-bouncer)
CODE CHALLENGE: 

Remove all falsy values from an array.

Falsy values in JavaScript are false, null, 0, "", undefined, and NaN.

Hint: Try converting each value to a Boolean.

[My Code](#)


# [14-Where do I Belong](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/where-do-i-belong)
CODE CHALLENGE: 

Return the lowest index at which a value (second argument) should be inserted into an array (first argument) once it has been sorted. The returned value should be a number.

For example, getIndexToIns([1,2,3,4], 1.5) should return 1 because it is greater than 1 (index 0), but less than 2 (index 1).

Likewise, getIndexToIns([20,3,5], 19) should return 2 because once the array has been sorted it will look like [3,5,20] and 19 is less than 20 (index 2) and greater than 5 (index 1).

[My Code](#)


# [15-Mutations](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/mutations)
CODE CHALLENGE: 

Return true if the string in the first element of the array contains all of the letters of the string in the second element of the array.

For example, ["hello", "Hello"], should return true because all of the letters in the second string are present in the first, ignoring case.

The arguments ["hello", "hey"] should return false because the string hello does not contain a y.

Lastly, ["Alien", "line"], should return true because all of the letters in line are present in Alien.

[My Code](#)


# [16-Chunky Monkey](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/chunky-monkey)
CODE CHALLENGE: Write a function that splits an array (first argument) into groups the length of size (second argument) and returns them as a two-dimensional array.
[My Code](#)

	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
