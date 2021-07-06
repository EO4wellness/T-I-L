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


# [07- ]()
CODE CHALLENGE: 
[My Code](#)


# [08- ]()
CODE CHALLENGE: 
[My Code](#)


# [09- ]()
CODE CHALLENGE: 
[My Code](#)


# [10- ]()
CODE CHALLENGE: 
[My Code](#)


# [11- ]()
CODE CHALLENGE: 
[My Code](#)


# [12- ]()
CODE CHALLENGE: 
[My Code](#)


# [13- ]()
CODE CHALLENGE: 
[My Code](#)


# [14- ]()
CODE CHALLENGE: 
[My Code](#)


# [15- ]()
CODE CHALLENGE: 
[My Code](#)


# [16- ]()
CODE CHALLENGE: 
[My Code](#)

	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
