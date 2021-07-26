# Object Oriented Programming (26 Units of study) 
OOP, or Object Oriented Programming, is one of the major approaches to the software development process. In OOP, objects and classes are used to organize code to describe things and what they can do.

In this course, you'll learn the basic principles of OOP in JavaScript including the ```this``` keyword, prototype chains, constructors, and inheritance.


## 01 [Create a Basic JavaScript Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/create-a-basic-javascript-object) 

Notes: Think about things people see every day, like cars, shops, and birds. These are all objects: tangible things people can observe and interact with.

What are some qualities of these objects? A car has wheels. Shops sell items. Birds have wings.

These qualities, or properties, define what makes up an object. Note that similar objects share the same properties, but may have different values for those properties. For example, all cars have wheels, but not all cars have the same number of wheels.

Objects in JavaScript are used to model real-world objects, giving them properties and behavior just like their real-world counterparts. Here's an example using these concepts to create a duck object:
```
let duck = {
  name: "Aflac",
  numLegs: 2
};
```
This duck object has two property/value pairs: a name of Aflac and a numLegs of 2.

Code Assignement: Create a dog object with name and numLegs properties, and set them to a string and a number, respectively. 

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/01_create-a-basic-javascript-object.js)


## 02 [Use Dot Notation to Access the Properties of an Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/use-dot-notation-to-access-the-properties-of-an-object) 

Notes: The last challenge created an object with various properties. Now you'll see how to access the values of those properties. Here's an example:
``
let duck = {
  name: "Aflac",
  numLegs: 2
};
console.log(duck.name);
``
Dot notation is used on the object name, duck, followed by the name of the property, name, to access the value of Aflac.


Code Assignement:  Print both properties of the dog object to your console.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/02_use-dot-notation-to-access-the-properties-of-an-object.js)


## 03 [Create a Method on an Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/create-a-method-on-an-object) 

Notes:  Objects can have a special type of property, called a method.

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

Notes:  The last challenge introduced a method to the duck object. It used duck.name dot notation to access the value for the name property within the return statement:
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

Constructors are defined with a capitalized name to distinguish 
them from other functions that are not constructors.

Constructors use the keyword this to set properties of the object they will create. 
Inside the constructor, this refers to the new object it will create.
    
Constructors define properties and behaviors instead of returning a value as other functions might.


Code Assignement: Create a constructor, Dog, with properties name, color, and numLegs that are set to a string, a string, and a number, respectively.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/05_define-a-constructor-function.js)


## 06 [Use a Constructor to Create Objects](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/use-a-constructor-to-create-objects) 
Notes: Here's the Bird constructor from the previous challenge:
```
function Bird() {
  this.name = "Albert";
  this.color  = "blue";
  this.numLegs = 2;
}

let blueBird = new Bird();
```
NOTE: this inside the constructor always refers to the object being created.

Notice that the new operator is used when calling a constructor. This tells JavaScript to create a new instance of Bird called blueBird. Without the new operator, this inside the constructor would not point to the newly created object, giving unexpected results. Now blueBird has all the properties defined inside the Bird constructor:
```
blueBird.name;
blueBird.color;
blueBird.numLegs;
```
Just like any other object, its properties can be accessed and modified:
```
blueBird.name = 'Elvira';
blueBird.name;
```

Code Assignement: Use the Dog constructor from the last lesson to create a new instance of Dog, assigning it to a variable hound.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/06_use-a-constructor-to-create-objects.js)


## 07 [Extend Constructors to Receive Arguments](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/extend-constructors-to-receive-arguments) 
Notes: The Bird and Dog constructors from the last challenge worked well. However, notice that all Birds that are created with the Bird constructor are automatically named Albert, are blue in color, and have two legs. What if you want birds with different values for name and color? It's possible to change the properties of each bird manually but that would be a lot of work:
```
let swan = new Bird();
swan.name = "Carlos";
swan.color = "white";
```
Suppose you were writing a program to keep track of hundreds or even thousands of different birds in an aviary. It would take a lot of time to create all the birds, then change the properties to different values for every one. To more easily create different Bird objects, you can design your Bird constructor to accept parameters:
```
function Bird(name, color) {
  this.name = name;
  this.color = color;
  this.numLegs = 2;
}
```
Then pass in the values as arguments to define each unique bird into the Bird constructor: let cardinal = new Bird("Bruce", "red"); This gives a new instance of Bird with name and color properties set to Bruce and red, respectively. The numLegs property is still set to 2. The cardinal has these properties:
```
cardinal.name
cardinal.color
cardinal.numLegs
```
The constructor is more flexible. It's now possible to define the properties for each Bird at the time it is created, which is one way that JavaScript constructors are so useful. They group objects together based on shared characteristics and behavior and define a blueprint that automates their creation.

Code Assignement: Create another Dog constructor. This time, set it up to take the parameters name and color, and have the property numLegs fixed at 4. Then create a new Dog saved in a variable terrier. Pass it two strings as arguments for the name and color properties.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/07_extend-constructors-to-receive-arguments.js)


## 08 [Verify an Object's Constructor with instanceof](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/verify-an-objects-constructor-with-instanceof) 

Notes: Anytime a constructor function creates a new object, that object is said to be an instance of its constructor. JavaScript gives a convenient way to verify this with the instanceof operator. instanceof allows you to compare an object to a constructor, returning true or false based on whether or not that object was created with the constructor. Here's an example:
```
let Bird = function(name, color) {
  this.name = name;
  this.color = color;
  this.numLegs = 2;
}

let crow = new Bird("Alexis", "black");

crow instanceof Bird;
```
This instanceof method would return true.

If an object is created without using a constructor, instanceof will verify that it is not an instance of that constructor:
```
let canary = {
  name: "Mildred",
  color: "Yellow",
  numLegs: 2
};

canary instanceof Bird;
```
This instanceof method would return false.

Code Assignement: Create a new instance of the House constructor, calling it myHouse and passing a number of bedrooms. Then, use instanceof to verify that it is an instance of House.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/08_verify-an-objects-constructor-with-instanceof.js)


## 09 [Understand Own Properties](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/understand-own-properties) 
Notes:In the following example, the Bird constructor defines two properties: name and numLegs:
```
function Bird(name) {
  this.name  = name;
  this.numLegs = 2;
}

let duck = new Bird("Donald");
let canary = new Bird("Tweety");
```
name and numLegs are called own properties, because they are defined directly on the instance object. That means that duck and canary each has its own separate copy of these properties. In fact every instance of Bird will have its own copy of these properties. The following code adds all of the own properties of duck to the array ownProps:
```
let ownProps = [];

for (let property in duck) {
  if(duck.hasOwnProperty(property)) {
    ownProps.push(property);
  }
}

console.log(ownProps);
```
The console would display the value ["name", "numLegs"].
 
Code Assignement: Add the own properties of canary to the array ownProps. 

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/09_understand-own-properties.js)


## 10 [Use Prototype Properties to Reduce Duplicate Code](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/use-prototype-properties-to-reduce-duplicate-code) 

Notes: Since numLegs will probably have the same value for all instances of Bird, you essentially have a duplicated variable numLegs inside each Bird instance.

This may not be an issue when there are only two instances, but imagine if there are millions of instances. That would be a lot of duplicated variables.

A better way is to use the prototype of Bird. Properties in the prototype are shared among ALL instances of Bird. Here's how to add numLegs to the Bird prototype:
```
Bird.prototype.numLegs = 2;
``
Now all instances of Bird have the numLegs property.
``
console.log(duck.numLegs);
console.log(canary.numLegs);
```
Since all instances automatically have the properties on the prototype, think of a prototype as a "recipe" for creating objects. Note that the prototype for duck and canary is part of the Bird constructor as Bird.prototype. Nearly every object in JavaScript has a prototype property which is part of the constructor function that created it.

Code Assignement: Add a numLegs property to the prototype of Dog

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/10_use-prototype-properties-to-reduce-duplicate-code.js)


## 11 [Iterate Over All Properties](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/iterate-over-all-properties) 

Notes: You have now seen two kinds of properties: own properties and prototype properties. Own properties are defined directly on the object instance itself. And prototype properties are defined on the prototype.
```
function Bird(name) {
  this.name = name;  //own property
}

Bird.prototype.numLegs = 2; // prototype property

let duck = new Bird("Donald");
```
Here is how you add duck's own properties to the array ownProps and prototype properties to the array prototypeProps:
```
let ownProps = [];
let prototypeProps = [];

for (let property in duck) {
  if(duck.hasOwnProperty(property)) {
    ownProps.push(property);
  } else {
    prototypeProps.push(property);
  }
}

console.log(ownProps);
console.log(prototypeProps);
```
console.log(ownProps) would display ["name"] in the console, and console.log(prototypeProps) would display ["numLegs"].


Code Assignement: Add all of the own properties of beagle to the array ownProps. Add all of the prototype properties of Dog to the array prototypeProps. 

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/11_iterate-over-all-properties.js)


## 12 [Understand the Constructor Property](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/understand-the-constructor-property) 

Notes: There is a special constructor property located on the object instances duck and beagle that were created in the previous challenges:
```
let duck = new Bird();
let beagle = new Dog();

console.log(duck.constructor === Bird); 
console.log(beagle.constructor === Dog);
```
Both of these console.log calls would display true in the console.

Note that the constructor property is a reference to the constructor function that created the instance. The advantage of the constructor property is that it's possible to check for this property to find out what kind of object it is. Here's an example of how this could be used:
```
function joinBirdFraternity(candidate) {
  if (candidate.constructor === Bird) {
    return true;
  } else {
    return false;
  }
}
```
Note: Since the constructor property can be overwritten (which will be covered in the next two challenges) it’s generally better to use the instanceof method to check the type of an object.


Code Assignement: Write a joinDogFraternity function that takes a candidate parameter and, using the constructor property, return true if the candidate is a Dog, otherwise return false. 

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/12_understand-the-constructor-property.js)


## 13 [Change the Prototype to a New Object](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/change-the-prototype-to-a-new-object) 
Notes: Up until now you have been adding properties to the prototype individually:
```
Bird.prototype.numLegs = 2;
```
This becomes tedious after more than a few properties.
```
Bird.prototype.eat = function() {
  console.log("nom nom nom");
}

Bird.prototype.describe = function() {
  console.log("My name is " + this.name);
}
```
A more efficient way is to set the prototype to a new object that already contains the properties. This way, the properties are added all at once:
```
Bird.prototype = {
  numLegs: 2, 
  eat: function() {
    console.log("nom nom nom");
  },
  describe: function() {
    console.log("My name is " + this.name);
  }
};
```

Code Assignement: Add the property numLegs and the two methods eat() and describe() to the prototype of Dog by setting the prototype to a new object. 

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/13_change-the-prototype-to-a-new-object.js)


## 14 [Remember to Set the Constructor Property when Changing the Prototype](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/remember-to-set-the-constructor-property-when-changing-the-prototype) 

Notes: There is one crucial side effect of manually setting the prototype to a new object. It erases the constructor property! This property can be used to check which constructor function created the instance, but since the property has been overwritten, it now gives false results:
```
duck.constructor === Bird;
duck.constructor === Object;
duck instanceof Bird;
```
In order, these expressions would evaluate to false, true, and true.

To fix this, whenever a prototype is manually set to a new object, remember to define the constructor property:
```
Bird.prototype = {
  constructor: Bird,
  numLegs: 2,
  eat: function() {
    console.log("nom nom nom");
  },
  describe: function() {
    console.log("My name is " + this.name); 
  }
};
```
Code Assignement:  Define the constructor property on the Dog prototype.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/14_remember-to-set-the-constructor-property-when-changing-the-prototype.js)


## 15 [Understand Where an Object’s Prototype Comes From](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/understand-where-an-objects-prototype-comes-from) 

Notes:  Just like people inherit genes from their parents, an object inherits its prototype directly from the constructor function that created it. For example, here the Bird constructor creates the duck object:
```
function Bird(name) {
  this.name = name;
}

let duck = new Bird("Donald");
```
duck inherits its prototype from the Bird constructor function. You can show this relationship with the isPrototypeOf method:
```
Bird.prototype.isPrototypeOf(duck);
```
This would return true.

Code Assignement: Use isPrototypeOf to check the prototype of beagle.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/15_understand-where-an-objects-prototype-comes-from.js)


## 16 [Understand the Prototype Chain](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/understand-the-prototype-chain) 

Notes: All objects in JavaScript (with a few exceptions) have a prototype. Also, an object’s prototype itself is an object.
```
function Bird(name) {
  this.name = name;
}

typeof Bird.prototype;
```
Because a prototype is an object, a prototype can have its own prototype! In this case, the prototype of Bird.prototype is Object.prototype:
```
Object.prototype.isPrototypeOf(Bird.prototype);
```
How is this useful? You may recall the hasOwnProperty method from a previous challenge:
```
let duck = new Bird("Donald");
duck.hasOwnProperty("name");
```
The hasOwnProperty method is defined in Object.prototype, which can be accessed by Bird.prototype, which can then be accessed by duck. This is an example of the prototype chain. In this prototype chain, Bird is the supertype for duck, while duck is the subtype. Object is a supertype for both Bird and duck. Object is a supertype for all objects in JavaScript. Therefore, any object can use the hasOwnProperty method.


Code Assignement: Modify the code to show the correct prototype chain.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/16_understand-the-prototype-chain.js)



## 17 [Use Inheritance So You Don't Repeat Yourself](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/use-inheritance-so-you-dont-repeat-yourself) 

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


## 21 [Add Methods After Inheritance](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/add-methods-after-inheritance) 

Notes:  A constructor function that inherits its prototype object from a supertype constructor function can still have its own methods in addition to inherited methods.

For example, Bird is a constructor that inherits its prototype from Animal:
```
function Animal() { }
Animal.prototype.eat = function() {
  console.log("nom nom nom");
};
function Bird() { }
Bird.prototype = Object.create(Animal.prototype);
Bird.prototype.constructor = Bird;
```
In addition to what is inherited from Animal, you want to add behavior that is unique to Bird objects. Here, Bird will get a fly() function. Functions are added to Bird's prototype the same way as any constructor function:
```
Bird.prototype.fly = function() {
  console.log("I'm flying!");
};
```
Now instances of Bird will have both eat() and fly() methods:
```
let duck = new Bird();
duck.eat();
duck.fly();
```
duck.eat() would display the string nom nom nom in the console, and duck.fly() would display the string I'm flying!.


Code Assignement: Add all necessary code so the Dog object inherits from Animal and the Dog's prototype constructor is set to Dog. Then add a bark() method to the Dog object so that beagle can both eat() and bark(). The bark() method should print Woof! to the console.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/07.ObjectOrientedProgramming/21_add-methods-after-inheritance.txt)


## 22 [Override Inherited Methods](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/object-oriented-programming/override-inherited-methods) 

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
