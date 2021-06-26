# [Basic Data Structures](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/#basic-data-structures):
* there are 20 units of study in this section 
* Data can be stored and accessed in many ways. 
* We aready know some common JavaScript data structures: namely arrays and objects.
* In this basic Data Structures segment of the course, we're going to learn morea bout the differences
* between arrays and objects
* which of these to use in different situations 
* we will also learn JS methods like ```splice()``` and ```Object.keys()``` to access and manipulate data
* Began Course of study: 2021-06-21


1. [Use an Array to Store a Collection of Data](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/use-an-array-to-store-a-collection-of-data)


The below is an example of the simplest implementation of an array data structure. This is known as a one-dimensional array, meaning it only has one level, or that it does not have any other arrays nested within it. Notice it contains booleans, strings, and numbers, among other valid JavaScript data types:
```
let simpleArray = ['one', 2, 'three', true, false, undefined, null];
console.log(simpleArray.length);
```
The console.log call displays 7.

All arrays have a length property, which as shown above, can be very easily accessed with the syntax Array.length. A more complex implementation of an array can be seen below. This is known as a multi-dimensional array, or an array that contains other arrays. Notice that this array also contains JavaScript objects, which we will examine very closely in our next section, but for now, all you need to know is that arrays are also capable of storing complex objects.
```
let complexArray = [
  [
    {
      one: 1,
      two: 2
    },
    {
      three: 3,
      four: 4
    }
  ],
  [
    {
      a: "a",
      b: "b"
    },
    {
      c: "c",
      d: "d"
    }
  ]
];
```

CODE ASSIGNEMENT: We have defined a variable called yourArray. Complete the statement by assigning an array of at least 5 elements in length to the yourArray variable. Your array should contain at least one string, one number, and one boolean.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/05.BasicDataStructures/01_use-an-array-to-store-a-collection-of-data.js)

2. [Access an Array's Contents Using Bracket Notation](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/access-an-arrays-contents-using-bracket-notation)
The fundamental feature of any data structure is, of course, the ability to not only store data, but to be able to retrieve that data on command. So, now that we've learned how to create an array, let's begin to think about how we can access that array's information.

When we define a simple array as seen below, there are 3 items in it:
```
let ourArray = ["a", "b", "c"];
```
In an array, each array item has an index. This index doubles as the position of that item in the array, and how you reference it. However, it is important to note, that JavaScript arrays are zero-indexed, meaning that the first element of an array is actually at the zeroth position, not the first. In order to retrieve an element from an array we can enclose an index in brackets and append it to the end of an array, or more commonly, to a variable which references an array object. This is known as bracket notation. For example, if we want to retrieve the a from ourArray and assign it to a variable, we can do so with the following code:
```
let ourVariable = ourArray[0];
```
Now ourVariable has the value of a.

In addition to accessing the value associated with an index, you can also set an index to a value using the same notation:
```
ourArray[1] = "not b anymore";
```
Using bracket notation, we have now reset the item at index 1 from the string b, to not b anymore. Now ourArray is ["a", "not b anymore", "c"].

CODE ASSIGNEMENT: In order to complete this challenge, set the 2nd position (index 1) of myArray to anything you want, besides the letter b.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/05.BasicDataStructures/02_access-an-arrays-contents-using-bracket-notation.js)

3. [Add Items to an Array with push() and unshift()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/add-items-to-an-array-with-push-and-unshift)
An array's length, like the data types it can contain, is not fixed. Arrays can be defined with a length of any number of elements, and elements can be added or removed over time; in other words, arrays are mutable. In this challenge, we will look at two methods with which we can programmatically modify an array: ```Array.push()``` and ```Array.unshift()```.

Both methods take one or more elements as parameters and add those elements to the array the method is being called on; the ```push()``` method adds elements to the end of an array, and ```unshift()``` adds elements to the beginning. Consider the following:
```
let twentyThree = 'XXIII';
let romanNumerals = ['XXI', 'XXII'];

romanNumerals.unshift('XIX', 'XX');
```
```romanNumerals``` would have the value ```['XIX', 'XX', 'XXI', 'XXII']```.

```romanNumerals.push(twentyThree);```

```romanNumerals``` would have the value ```['XIX', 'XX', 'XXI', 'XXII', 'XXIII']```. Notice that we can also pass variables, which allows us even greater flexibility in dynamically modifying our array's data.


CODE ASSIGNEMENT: We have defined a function, mixedNumbers, which we are passing an array as an argument. Modify the function by using push() and unshift() to add 'I', 2, 'three' to the beginning of the array and 7, 'VIII', 9 to the end so that the returned array contains representations of the numbers 1-9 in order.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/05.BasicDataStructures/03_add-items-to-an-array-with-push-and-unshift.js)


4. [Remove Items from an Array with pop() and shift()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/remove-items-from-an-array-with-pop-and-shift)


Both push() and unshift() have corresponding methods that are nearly functional opposites: pop() and shift(). As you may have guessed by now, instead of adding, pop() removes an element from the end of an array, while shift() removes an element from the beginning. The key difference between pop() and shift() and their cousins push() and unshift(), is that neither method takes parameters, and each only allows an array to be modified by a single element at a time.

Let's take a look:

let greetings = ['whats up?', 'hello', 'see ya!'];

greetings.pop();

greetings would have the value ['whats up?', 'hello'].

greetings.shift();

greetings would have the value ['hello'].

We can also return the value of the removed element with either method like this:

let popped = greetings.pop();

greetings would have the value [], and popped would have the value hello.

CODE ASSIGNEMENT: We have defined a function, popShift, which takes an array as an argument and returns a new array. Modify the function, using pop() and shift(), to remove the first and last elements of the argument array, and assign the removed elements to their corresponding variables, so that the returned array contains their values.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/05.BasicDataStructures/04_remove-items-from-an-array-with-pop-and-shift.js)


5. [Remove Items Using splice()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/remove-items-using-splice)

Ok, so we've learned how to remove elements from the beginning and end of arrays using shift() and pop(), but what if we want to remove an element from somewhere in the middle? Or remove more than one element at once? Well, that's where splice() comes in. splice() allows us to do just that: remove any number of consecutive elements from anywhere in an array.

splice() can take up to 3 parameters, but for now, we'll focus on just the first 2. The first two parameters of splice() are integers which represent indexes, or positions, of the array that splice() is being called upon. And remember, arrays are zero-indexed, so to indicate the first element of an array, we would use 0. splice()'s first parameter represents the index on the array from which to begin removing elements, while the second parameter indicates the number of elements to delete. For example:
```
let array = ['today', 'was', 'not', 'so', 'great'];

array.splice(2, 2);
```
Here we remove 2 elements, beginning with the third element (at index 2). array would have the value``` ['today', 'was', 'great']```.

splice() not only modifies the array it's being called on, but it also returns a new array containing the value of the removed elements:
```
let array = ['I', 'am', 'feeling', 'really', 'happy'];

let newArray = array.splice(3, 2);
```
newArray has the value ['really', 'happy'].


CODE ASSIGNEMENT: We've initialized an array arr. Use splice() to remove elements from arr, so that it only contains elements that sum to the value of 10.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/05.BasicDataStructures/05_remove-items-using-splice.js)


6. [Add Items Using splice()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/add-items-using-splice)

CODE ASSIGNEMENT: 
[My Code]()


7. [Copy Array Items Using slice()](#)

CODE ASSIGNEMENT: 
[My Code]()


8. [Copy an Array with the Spread Operator](#)

CODE ASSIGNEMENT: 
[My Code]()


9. [Combine Arrays with the Spread Operator](#)

CODE ASSIGNEMENT: 
[My Code]()


10. [Check For The Presence of an Element With indexOf()](#)

CODE ASSIGNEMENT: 
[My Code]()


11. [Iterate Through All an Array's Items Using For Loops](#)

CODE ASSIGNEMENT: 
[My Code]()


12. [Create complex multi-dimensional arrays](#)

CODE ASSIGNEMENT: 
[My Code]()


13. [Add Key-Value Pairs to JavaScript Objects](#)

CODE ASSIGNEMENT: 
[My Code]()


14. [Modify an Object Nested Within an Object](#)

CODE ASSIGNEMENT: 
[My Code]()


15. [Access Property Names with Bracket Notation](#)

CODE ASSIGNEMENT: 
[My Code]()


16. [Use the delete Keyword to Remove Object Properties](#)

CODE ASSIGNEMENT: 
[My Code]()


17. [Check if an Object has a Property](#)

CODE ASSIGNEMENT: 
[My Code]()


18. [Iterate Through the Keys of an Object with a for...in Statement](#)

CODE ASSIGNEMENT: 
[My Code]()


19. [Generate an Array of All Object Keys with Object.keys(#)

CODE ASSIGNEMENT: 
[My Code]()


20. [Modify an Array Stored in an Object](#)

CODE ASSIGNEMENT: 
[My Code]()


Course Completion: ![Date of completion](#)
	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
