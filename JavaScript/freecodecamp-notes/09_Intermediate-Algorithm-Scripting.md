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
My Code(#)


## 03 [Seek and Destroy](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 04 [Wherefore art thou](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 05 [Spinal Tap Case](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 06 [Pig Latin](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 07 [Search and Replace](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 08 [DNA Pairing](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 09 [Missing letters](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 10 [Sorted Union](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 11 [Convert HTML Entities](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 12 [Sum All Odd Fibonacci Numbers](#)
Notes: 
Starter Code:
```
(#)
```
My Code(#)

## 13 [Sum All Primes](#)
Notes: 
Starter Code:
```
(#)
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
