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


Remember in the last challenge we mentioned that splice() can take up to three parameters? Well, you can use the third parameter, comprised of one or more element(s), to add to the array. This can be incredibly useful for quickly switching out an element, or a set of elements, for another.

const numbers = [10, 11, 12, 12, 15];
const startIndex = 3;
const amountToDelete = 1;

numbers.splice(startIndex, amountToDelete, 13, 14);
console.log(numbers);

The second occurrence of 12 is removed, and we add 13 and 14 at the same index. The numbers array would now be [ 10, 11, 12, 13, 14, 15 ].

Here, we begin with an array of numbers. Then, we pass the following to splice(): The index at which to begin deleting elements (3), the number of elements to be deleted (1), and the remaining arguments (13, 14) will be inserted starting at that same index. Note that there can be any number of elements (separated by commas) following amountToDelete, each of which gets inserted.

CODE ASSIGNEMENT: We have defined a function, htmlColorNames, which takes an array of HTML colors as an argument. Modify the function using splice() to remove the first two elements of the array and add 'DarkSalmon' and 'BlanchedAlmond' in their respective places.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/05.BasicDataStructures/06_add-items-using-splice.js)


7. [Copy Array Items Using slice()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/copy-array-items-using-slice)


The next method we will cover is slice(). Rather than modifying an array, slice() copies or extracts a given number of elements to a new array, leaving the array it is called upon untouched. slice() takes only 2 parameters — the first is the index at which to begin extraction, and the second is the index at which to stop extraction (extraction will occur up to, but not including the element at this index). Consider this:

let weatherConditions = ['rain', 'snow', 'sleet', 'hail', 'clear'];

let todaysWeather = weatherConditions.slice(1, 3);

todaysWeather would have the value ['snow', 'sleet'], while weatherConditions would still have ['rain', 'snow', 'sleet', 'hail', 'clear'].

In effect, we have created a new array by extracting elements from an existing array.


CODE ASSIGNEMENT: We have defined a function, forecast, that takes an array as an argument. Modify the function using slice() to extract information from the argument array and return a new array that contains the string elements warm and sunny.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/05.BasicDataStructures/07_copy-array-items-using-slice.js)


8. [Copy an Array with the Spread Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/copy-an-array-with-the-spread-operator)


While slice() allows us to be selective about what elements of an array to copy, among several other useful tasks, ES6's new spread operator allows us to easily copy all of an array's elements, in order, with a simple and highly readable syntax. The spread syntax simply looks like this: ...

In practice, we can use the spread operator to copy an array like so:

let thisArray = [true, true, undefined, false, null];
let thatArray = [...thisArray];

thatArray equals [true, true, undefined, false, null]. thisArray remains unchanged and thatArray contains the same elements as thisArray.

CODE ASSIGNEMENT: We have defined a function, copyMachine which takes arr (an array) and num (a number) as arguments. The function is supposed to return a new array made up of num copies of arr. We have done most of the work for you, but it doesn't work quite right yet. Modify the function using spread syntax so that it works correctly (hint: another method we have already covered might come in handy here!).
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/05.BasicDataStructures/08_copy-an-array-with-the-spread-operator.js)


9. [Combine Arrays with the Spread Operator](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/combine-arrays-with-the-spread-operator)

Another huge advantage of the spread operator is the ability to combine arrays, or to insert all the elements of one array into another, at any index. With more traditional syntaxes, we can concatenate arrays, but this only allows us to combine arrays at the end of one, and at the start of another. Spread syntax makes the following operation extremely simple:

let thisArray = ['sage', 'rosemary', 'parsley', 'thyme'];

let thatArray = ['basil', 'cilantro', ...thisArray, 'coriander'];

thatArray would have the value ['basil', 'cilantro', 'sage', 'rosemary', 'parsley', 'thyme', 'coriander'].

Using spread syntax, we have just achieved an operation that would have been more complex and more verbose had we used traditional methods.

CODE ASSIGNEMENT: We have defined a function spreadOut that returns the variable sentence. Modify the function using the spread operator so that it returns the array ['learning', 'to', 'code', 'is', 'fun'].

[My Code]()


10. [Check For The Presence of an Element With indexOf()](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/check-for-the-presence-of-an-element-with-indexof)

Since arrays can be changed, or mutated, at any time, there's no guarantee about where a particular piece of data will be on a given array, or if that element even still exists. Luckily, JavaScript provides us with another built-in method, indexOf(), that allows us to quickly and easily check for the presence of an element on an array. indexOf() takes an element as a parameter, and when called, it returns the position, or index, of that element, or -1 if the element does not exist on the array.

For example:
```
let fruits = ['apples', 'pears', 'oranges', 'peaches', 'pears'];

fruits.indexOf('dates');
fruits.indexOf('oranges');
fruits.indexOf('pears');
```
indexOf('dates') returns -1, indexOf('oranges') returns 2, and indexOf('pears') returns 1 (the first index at which each element exists

CODE ASSIGNEMENT: indexOf() can be incredibly useful for quickly checking for the presence of an element on an array. We have defined a function, quickCheck, that takes an array and an element as arguments. Modify the function using indexOf() so that it returns true if the passed element exists on the array, and false if it does not.

[My Code]()


11. [Iterate Through All an Array's Items Using For Loops](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/iterate-through-all-an-arrays-items-using-for-loops)



Sometimes when working with arrays, it is very handy to be able to iterate through each item to find one or more elements that we might need, or to manipulate an array based on which data items meet a certain set of criteria. JavaScript offers several built in methods that each iterate over arrays in slightly different ways to achieve different results (such as every(), forEach(), map(), etc.), however the technique which is most flexible and offers us the greatest amount of control is a simple for loop.

Consider the following:
```
function greaterThanTen(arr) {
  let newArr = [];
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > 10) {
      newArr.push(arr[i]);
    }
  }
  return newArr;
}

greaterThanTen([2, 12, 8, 14, 80, 0, 1]);
```
Using a for loop, this function iterates through and accesses each element of the array, and subjects it to a simple test that we have created. In this way, we have easily and programmatically determined which data items are greater than 10, and returned a new array, [12, 14, 80], containing those items.


CODE ASSIGNEMENT: We have defined a function, filteredArray, which takes arr, a nested array, and elem as arguments, and returns a new array. elem represents an element that may or may not be present on one or more of the arrays nested within arr. Modify the function, using a for loop, to return a filtered version of the passed array such that any array nested within arr containing elem has been removed.
[My Code]()


12. [Create complex multi-dimensional arrays](#)

CODE ASSIGNEMENT: 
[My Code]()


13. [Add Key-Value Pairs to JavaScript Objects](#)

CODE ASSIGNEMENT: 
[My Code]()


14. [Modify an Object Nested Within an Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/modify-an-object-nested-within-an-object)


Now let's take a look at a slightly more complex object. Object properties can be nested to an arbitrary depth, and their values can be any type of data supported by JavaScript, including arrays and even other objects. Consider the following:
```
let nestedObject = {
  id: 28802695164,
  date: 'December 31, 2016',
  data: {
    totalUsers: 99,
    online: 80,
    onlineStatus: {
      active: 67,
      away: 13,
      busy: 8
    }
  }
};
```
nestedObject has three properties: id (value is a number), date (value is a string), and data (value is an object with its nested structure). While structures can quickly become complex, we can still use the same notations to access the information we need. To assign the value 10 to the busy property of the nested onlineStatus object, we use dot notation to reference the property:
```
nestedObject.data.onlineStatus.busy = 10;
```


CODE ASSIGNEMENT: Here we've defined an object userActivity, which includes another object nested within it. Set the value of the online key to 45.

[My Code]()


15. [Access Property Names with Bracket Notation](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/access-property-names-with-bracket-notation)


In the first object challenge we mentioned the use of bracket notation as a way to access property values using the evaluation of a variable. For instance, imagine that our foods object is being used in a program for a supermarket cash register. We have some function that sets the selectedFood and we want to check our foods object for the presence of that food. This might look like:
```
let selectedFood = getCurrentFood(scannedItem);
let inventory = foods[selectedFood];
```
This code will evaluate the value stored in the selectedFood variable and return the value of that key in the foods object, or undefined if it is not present. Bracket notation is very useful because sometimes object properties are not known before runtime or we need to access them in a more dynamic way.

CODE ASSIGNEMENT: We've defined a function, checkInventory, which receives a scanned item as an argument. Return the current value of the scannedItem key in the foods object. You can assume that only valid keys will be provided as an argument to checkInventory.

[My Code]()


16. [Use the delete Keyword to Remove Object Properties](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/use-the-delete-keyword-to-remove-object-properties)


Now you know what objects are and their basic features and advantages. In short, they are key-value stores which provide a flexible, intuitive way to structure data, and, they provide very fast lookup time. Throughout the rest of these challenges, we will describe several common operations you can perform on objects so you can become comfortable applying these useful data structures in your programs.

In earlier challenges, we have both added to and modified an object's key-value pairs. Here we will see how we can remove a key-value pair from an object.

Let's revisit our foods object example one last time. If we wanted to remove the apples key, we can remove it by using the delete keyword like this:
```
delete foods.apples;
```
CODE ASSIGNEMENT: Use the delete keyword to remove the oranges, plums, and strawberries keys from the foods object.
[My Code]()


17. [Check if an Object has a Property](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/check-if-an-object-has-a-property)


Now we can add, modify, and remove keys from objects. But what if we just wanted to know if an object has a specific property? JavaScript provides us with two different ways to do this. One uses the hasOwnProperty() method and the other uses the in keyword. If we have an object users with a property of Alan, we could check for its presence in either of the following ways:

users.hasOwnProperty('Alan');
'Alan' in users;

Both of these would return true.

CODE ASSIGNEMENT: Finish writing the function so that it returns true if the object passed to it contains all four names, Alan, Jeff, Sarah and Ryan and returns false otherwise.
[My Code]()


18. [Iterate Through the Keys of an Object with a for...in Statement](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-data-structures/iterate-through-the-keys-of-an-object-with-a-for---in-statement)

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
