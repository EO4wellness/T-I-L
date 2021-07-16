# Object Oriented Programming (26 Units of study) 
OOP, or Object Oriented Programming, is one of the major approaches to the software development process. In OOP, objects and classes are used to organize code to describe things and what they can do.

In this course, you'll learn the basic principles of OOP in JavaScript including the ```this``` keyword, prototype chains, constructors, and inheritance.


## 01 [Create a Basic JavaScript Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/create-a-basic-javascript-object) 

Notes:

Think about things people see every day, like cars, shops, and birds. These are all objects: tangible things people can observe and interact with.

What are some qualities of these objects? A car has wheels. Shops sell items. Birds have wings.

These qualities, or properties, define what makes up an object. Note that similar objects share the same properties, but may have different values for those properties. For example, all cars have wheels, but not all cars have the same number of wheels.

Objects in JavaScript are used to model real-world objects, giving them properties and behavior just like their real-world counterparts. Here's an example using these concepts to create a duck object:

let duck = {
  name: "Aflac",
  numLegs: 2
};

This duck object has two property/value pairs: a name of Aflac and a numLegs of 2.

Code Assignement: Create a dog object with name and numLegs properties, and set them to a string and a number, respectively. 

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/01_create-a-basic-javascript-object.js)


## 02 [Use Dot Notation to Access the Properties of an Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/use-dot-notation-to-access-the-properties-of-an-object) 

Notes: 

The last challenge created an object with various properties. Now you'll see how to access the values of those properties. Here's an example:

let duck = {
  name: "Aflac",
  numLegs: 2
};
console.log(duck.name);

Dot notation is used on the object name, duck, followed by the name of the property, name, to access the value of Aflac.


Code Assignement:  Print both properties of the dog object to your console.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/02_use-dot-notation-to-access-the-properties-of-an-object.js)


## 03 [Create a Method on an Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/create-a-method-on-an-object) 

Notes:
Objects can have a special type of property, called a method.

Methods are properties that are functions. This adds different behavior to an object. Here is the duck example with a method:
```
let duck = {
  name: "Aflac",
  numLegs: 2,
  sayName: function() {return "The name of this duck is " + duck.name + ".";}
};
duck.sayName();
```
The example adds the sayName method, which is a function that returns a sentence giving the name of the duck. Notice that the method accessed the name property in the return statement using duck.name. The next challenge will cover another way to do this.

Code Assignement: Using the dog object, give it a method called sayLegs. The method should return the sentence This dog has 4 legs.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/03_create-a-method-on-an-object.js)


## 04 [Make Code More Reusable with the this Keyword](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/make-code-more-reusable-with-the-this-keyword)

Notes: 

The last challenge introduced a method to the duck object. It used duck.name dot notation to access the value for the name property within the return statement:
```
sayName: function() {return "The name of this duck is " + duck.name + ".";}
```
While this is a valid way to access the object's property, there is a pitfall here. If the variable name changes, any code referencing the original name would need to be updated as well. In a short object definition, it isn't a problem, but if an object has many references to its properties there is a greater chance for error.

A way to avoid these issues is with the this keyword:
```
let duck = {
  name: "Aflac",
  numLegs: 2,
  sayName: function() {return "The name of this duck is " + this.name + ".";}
};
```
this is a deep topic, and the above example is only one way to use it. In the current context, this refers to the object that the method is associated with: duck. If the object's name is changed to mallard, it is not necessary to find all the references to duck in the code. It makes the code reusable and easier to read.

Code Assignement: Modify the dog.sayLegs method to remove any references to dog. Use the duck example for guidance.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/04_make-code-more-reusable-with-the-this-keyword.js)


## 05 [Define a Constructor Function](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/define-a-constructor-function) 

Notes: Constructors are functions that create new objects. 
They define properties and behaviors that will belong to the new object. 
Think of them as a blueprint for the creation of new objects.

Here is an example of a constructor:
```
function Bird() {
  this.name = "Albert";
  this.color = "blue";
  this.numLegs = 2;
}
```
This constructor defines a Bird object with properties name, color, and numLegs set to Albert, blue, and 2, respectively. Constructors follow a few conventions:

    Constructors are defined with a capitalized name to distinguish them from other functions that are not constructors.
    Constructors use the keyword this to set properties of the object they will create. Inside the constructor, this refers to the new object it will create.
    Constructors define properties and behaviors instead of returning a value as other functions might.


Code Assignement: Create a constructor, Dog, with properties name, color, and numLegs that are set to a string, a string, and a number, respectively.
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/05_define-a-constructor-function.js)


## 06 [Use a Constructor to Create Objects](#) 
Notes:
Code Assignement: 
[My Code]()


## 07 [Extend Constructors to Receive Arguments](#) 
Notes:
Code Assignement: 
[My Code](#)


## 08 [Verify an Object's Constructor with instanceof](#) 
Notes:
Code Assignement: 
[My Code](#)


## 09 [Understand Own Properties](#) 
Notes:
Code Assignement: 
[My Code](#)


## 10 [Use Prototype Properties to Reduce Duplicate Code](#) 
Notes:
Code Assignement: 
[My Code](#)


## 11 [Iterate Over All Properties](#) 
Notes:
Code Assignement: 
[My Code](#)


## 12 [Understand the Constructor Property](#) 
Notes:
Code Assignement: 
[My Code](#)


## 13 [Change the Prototype to a New Object](#) 
Notes:
Code Assignement: 
[My Code](#)


## 14 [Remember to Set the Constructor Property when Changing the Prototype](#) 
Notes:
Code Assignement: 
[My Code](#)


## 15 [Understand Where an Object’s Prototype Comes From](#) 
Notes:
Code Assignement: 
[My Code](#)


## 16 [Understand the Prototype Chain](#) 
Notes:
Code Assignement: 
[My Code](#)


## 17 [Use Inheritance So You Don't Repeat Yourself](#) 
Notes:
Code Assignement: 
[My Code](#)


## 18 [Inherit Behaviors from a Supertype](#) 
Notes:
Code Assignement: 
[My Code](#)


## 19 [Set the Child's Prototype to an Instance of the Parent](#) 
Notes:
Code Assignement: 
[My Code](#)


## 20 [Reset an Inherited Constructor Property](#) 
Notes:
Code Assignement: 
[My Code](#)


## 21 [Add Methods After Inheritance](#) 
Notes:
Code Assignement: 
[My Code](#)


## 22 [Override Inherited Methods](#) 
Notes:
Code Assignement: 
[My Code](#)


## 23 [Use a Mixin to Add Common Behavior Between Unrelated Objects](#) 
Notes:
Code Assignement: 
[My Code](#)


## 24 [Use Closure to Protect Properties Within an Object from Being Modified Externally](#) 
Notes:
Code Assignement: 
[My Code](#)


## 25 [Understand the Immediately Invoked Function Expression (IIFE)](#) 
Notes:
Code Assignement: 
[My Code](#)


## 26 [Use an IIFE to Create a Module](#) 
Notes:
Code Assignement: 
[My Code](#)


![End of Study Course](#)

	
Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
