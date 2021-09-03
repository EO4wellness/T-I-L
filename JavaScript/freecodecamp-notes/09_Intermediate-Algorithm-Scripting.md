# [Intermediate Algorithm Scripting](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/#intermediate-algorithm-scripting)
* Now that you know the basics of algorithmic thinking, along with OOP and Functional Programming, 
* test your skills with the Intermediate Algorithm Scripting challenges.
* There are 21 study units in this section 
* Begain study of this section of the course on: Aug 23, 2021

## 01 [Sum All Numbers in a Range](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/sum-all-numbers-in-a-range)

We'll pass you an array of two numbers. Return the sum of those two numbers plus the sum of all the numbers between them. The lowest number will not always come first.

For example, sumAll([4,1]) should return 10 because sum of all the numbers between 1 and 4 (both inclusive) is 10.

This is an iteration to add all the numbers between the starting number and the ending number into a sum.  
```Math.min()``` is the code to find the minium value of two numbers 
```Math.max()``` is the code to find the maximum value of two numbers 

```
function sumAll(arr) {
  let max = Math.max(arr[0], arr[1]);
  let min = Math.min(arr[0], arr[1]);
  let sumBetween = 0;
  for (let i = min; i <= max; i++) {
    sumBetween += i;
  }
  return sumBetween;
}

sumAll([1, 4]);
```

Starter Code: 
```
function sumAll(arr) {
  return 1;
}

sumAll([1, 4]);
```

My Code(https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/09.IntermediateAlgorithmScripting/01_sum-all-numbers-in-a-range.js)

Additional Notes from the "Help" forum article: 
### Problem Explanation

You need to create a program that will take an array of two numbers who are not necessarily in order, and then add not just those numbers but any numbers in between. For example, [3,1] will be the same as 1+2+3 and not just 3+1

[Math Max](https://forum.freecodecamp.org/t/javascript-math-max-explained-with-examples/14682)
[Math Mix](https://forum.freecodecamp.org/t/javascript-math-min-explained-with-an-example/14684)
[For Loops](https://forum.freecodecamp.org/t/javascript-for-loops-explained-with-examples/14666)

Solution 1: 
```
function sumAll(arr) {
  let max = Math.max(arr[0], arr[1]);
  let min = Math.min(arr[0], arr[1]);
  let sumBetween = 0;
  for (let i = min; i <= max; i++) {
    sumBetween += i;
  }
  return sumBetween;
}

sumAll([1, 4]);
```

[Array.sort()](https://forum.freecodecamp.org/t/how-to-use-javascript-array-prototype-sort-javascript-sort-explained-with-examples/14306)
[Arithmetic Progression summing formula](https://en.wikipedia.org/wiki/Arithmetic_progression#Sum)
[ES6 arrow function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/Arrow_functions)

Solution 2: 
```
const sumAll = arr => {
  // Buckle up everything to one!
  const startNum = arr[0];
  const endNum = arr[1];

  // Get the count of numbers between the two numbers by subtracting them and add 1 to the absolute value.
  // ex. There are |1-4| + 1 = 4, (1, 2, 3, 4), 4 numbers between 1 and 4.
  const numCount = Math.abs(startNum - endNum) + 1;

  // Using Arithmetic Progression summing formula
  const sum = ((startNum + endNum) * numCount) / 2;
  return sum;
};
```

Solution 3 is pretty much my solution. links given with this are:
[Spread Operator](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_syntax)
[Using Spread Operator in Math.max()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/max)

Solution 4 
```
function sumAll(arr) {
  const [first, last] = [...arr].sort((a, b) => a - b);
  return first !== last
    ? first + sumAll([first + 1, last])
    : first;
}

sumAll([1, 4]);
```


## 02 [Diff Two Arrays](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/diff-two-arrays)
Notes: 

Compare two arrays and return a new array with any items only found in one of the two given arrays, but not both. In other words, return the symmetric difference of the two arrays.

Note: You can return the array with its elements in any order.

Starter Code:
```
function diffArray(arr1, arr2) {
  var newArr = [];
  return newArr;
}

diffArray([1, 2, 3, 5], [1, 2, 3, 4, 5]);
```
My Code(https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/09.IntermediateAlgorithmScripting/02_diff-two-arrays.js)


## 03 [Seek and Destroy](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/seek-and-destroy)
Notes: 

You will be provided with an initial array (the first argument in the destroyer function), followed by one or more arguments. Remove all elements from the initial array that are of the same value as these arguments.

Note: You have to use the arguments object.

Review: [Arguments Object](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/arguments)


Starter Code:
```
function destroyer(arr) {
  return arr;
}

destroyer([1, 2, 3, 1, 2, 3], 2, 3);
```
My Code(https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/09.IntermediateAlgorithmScripting/03_seek-and-destroy.js)


## 04 [Wherefore art thou](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/wherefore-art-thou)
Notes: 

Make a function that looks through an array of objects (first argument) and returns an array of all objects that have matching name and value pairs (second argument). Each name and value pair of the source object has to be present in the object from the collection if it is to be included in the returned array.

For example, if the first argument is [{ first: "Romeo", last: "Montague" }, { first: "Mercutio", last: null }, { first: "Tybalt", last: "Capulet" }], and the second argument is { last: "Capulet" }, then you must return the third object from the array (the first argument), because it contains the name and its value, that was passed on as the second argument.

Starter Code:
```
function whatIsInAName(collection, source) {
  var arr = [];
  // Only change code below this line


  // Only change code above this line
  return arr;
}

whatIsInAName([{ first: "Romeo", last: "Montague" }, { first: "Mercutio", last: null }, { first: "Tybalt", last: "Capulet" }], { last: "Capulet" });
```
My Code(https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/09.IntermediateAlgorithmScripting/04_wherefore-art-thou.js)


## 05 [Spinal Tap Case](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/spinal-tap-case)
Notes: Convert a string to spinal case. Spinal case is all-lowercase-words-joined-by-dashes.
Relevant Links

    [String global object(https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String)
    [JS Regex Resources](https://forum.freecodecamp.org/t/a-quick-and-simple-guide-to-javascript-regular-expressions/190263)
    [JS String Prototype Replace](http://forum.freecodecamp.com/t/javascript-string-prototype-replace/15942)
    [JS String Prototype ToLowerCase](http://forum.freecodecamp.com/t/javascript-string-prototype-tolowercase/15948)

Starter Code:
```
function spinalCase(str) {
  return str;
}

spinalCase('This Is Spinal Tap');
```
My Code(https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/09.IntermediateAlgorithmScripting/05_spinal-tap-case.js)

## 06 [Pig Latin](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/pig-latin)
Notes: 

Pig Latin is a way of altering English Words. The rules are as follows:

- If a word begins with a consonant, take the first consonant or consonant cluster, move it to the end of the word, and add ay to it.

- If a word begins with a vowel, just add way at the end.

Translate the provided string to Pig Latin. Input strings are guaranteed to be English words in all lowercase.

Starter Code:
```
function translatePigLatin(str) {
  return str;
}

translatePigLatin("consonant");
```
My Code(https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/09.IntermediateAlgorithmScripting/06_pig-latin.js)

## 07 [Search and Replace](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/search-and-replace)
Notes: 

Perform a search and replace on the sentence using the arguments provided and return the new sentence.

First argument is the sentence to perform the search and replace on.

Second argument is the word that you will be replacing (before).

Third argument is what you will be replacing the second argument with (after).

Note: Preserve the case of the first character in the original word when you are replacing it. For example if you mean to replace the word Book with the word dog, it should be replaced as Dog

Starter Code:
```
function myReplace(str, before, after) {
  return str;
}

myReplace("A quick brown fox jumped over the lazy dog", "jumped", "leaped");
```
My Code(https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/09.IntermediateAlgorithmScripting/07_search-and-replace.js)

## 08 [DNA Pairing](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/dna-pairing)
Notes: 

The DNA strand is missing the pairing element. Take each character, get its pair, and return the results as a 2d array.

Base pairs are a pair of AT and CG. Match the missing element to the provided character.

Return the provided character as the first element in each array.

For example, for the input GCG, return [["G", "C"], ["C","G"], ["G", "C"]]

The character and its pair are paired up in an array, and all the arrays are grouped into one encapsulating array.

Starter Code:
```
function pairElement(str) {
  return str;
}

pairElement("GCG");
```
My Code(#)

## 09 [Missing letters](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/missing-letters)
Notes: Missing lettersPassed

Find the missing letter in the passed letter range and return it.

If all letters are present in the range, return undefined.

Starter Code:
```
function fearNotLetter(str) {
  return str;
}

fearNotLetter("abce");
```
My Code(#)

## 10 [Sorted Union](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/sorted-union)
Notes: 

Write a function that takes two or more arrays and returns a new array of unique values in the order of the original provided arrays.

In other words, all values present from all arrays should be included in their original order, but with no duplicates in the final array.

The unique numbers should be sorted by their original order, but the final array should not be sorted in numerical order.

Check the assertion tests for examples.

Starter Code:
```
function uniteUnique(arr) {
  return arr;
}

uniteUnique([1, 3, 2], [5, 2, 1, 4], [2, 1]);
```

Hints
[JS Arguments](https://forum.freecodecamp.org/t/how-arguments-work-in-javascript-javascript-arguments-guide/14283) 
1. Hint 1
Since you have no idea how many parameters were passed, it would be best to loop through the arguments before looping through the arrays.
2. Hint 2
It isn’t necessary to use loops. You can use functions such as map(), reduce() or others if you want.
3. Hint 3
You will have to check if the current value is already on the array to be returned for every value.


My Code(#)

## 11 [Convert HTML Entities](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/convert-html-entities)
Notes: Convert the characters &, <, >, " (double quote), and ' (apostrophe), in a string to their corresponding HTML entities.
Starter Code:
```
function convertHTML(str) {
  return str;
}

convertHTML("Dolce & Gabbana");
```
My Code(#)

## 12 [Sum All Odd Fibonacci Numbers](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/sum-all-odd-fibonacci-numbers)
Notes: What are [Fibonacci Numbers](https://en.wikipedia.org/wiki/Fibonacci_number):
```
In mathematics, the Fibonacci numbers, commonly denoted Fn, form a sequence, called the Fibonacci sequence, 
such that each number is the sum of the two preceding ones, starting from 0 and 1. That is,[1]
F 0 = 0 , F 1 = 1 , {\displaystyle F_{0}=0,\quad F_{1}=1,}
{\displaystyle F_{0}=0,\quad F_{1}=1,}
and
F n = F n − 1 + F n − 2 {\displaystyle F_{n}=F_{n-1}+F_{n-2}}
{\displaystyle F_{n}=F_{n-1}+F_{n-2}}
for n > 1.

The sequence starts:[2]

    0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ...
```

Given a positive integer num, return the sum of all odd Fibonacci numbers that are less than or equal to num.

The first two numbers in the Fibonacci sequence are 1 and 1. Every additional number in the sequence is the sum of the two previous numbers. The first six numbers of the Fibonacci sequence are 1, 1, 2, 3, 5 and 8.

For example, sumFibs(10) should return 10 because all odd Fibonacci numbers less than or equal to 10 are 1, 1, 3, and 5.

Hints
Hint 1

To get the next number of the series, you need to add the current one to the previous and that will give you the next one.
Hint 2

To check if a number is even all you have to check is if number % 2 == 0.
Hint 3

As you get the next odd one, don’t forget to add it to a global variable that can be returned at the end. result += currNumber; will do the trick.

Starter Code:
```
function sumFibs(num) {
  return num;
}

sumFibs(4);
```
My Code(#)

## 13 [Sum All Primes](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/intermediate-algorithm-scripting/sum-all-primes)
Notes: 

A prime number is a whole number greater than 1 with exactly two divisors: 1 and itself. For example, 2 is a prime number because it is only divisible by 1 and 2. In contrast, 4 is not prime since it is divisible by 1, 2 and 4.

Rewrite sumPrimes so it returns the sum of all prime numbers that are less than or equal to num.

Starter Code:
```
function sumPrimes(num) {
  return num;
}

sumPrimes(10);
```
My Code(#)

## 14 [Smallest Common Multiple](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 15 [Drop it](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 16 [Steamroller](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 17 [Binary Agents](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 18 [Everything Be True](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 19 [Arguments Optional](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 20 [Make a Person](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 21 [Map the Debris](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)
	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
