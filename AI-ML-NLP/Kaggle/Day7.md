# Day 7: August 8, 2021
* Final Lesson in this Kaggle Python course. 

![Assignment](#)


# Python: Lesson 7
[Working with External Libraries](https://www.kaggle.com/colinmorris/working-with-external-libraries)
Imports, operator overloading, survival tips for venturing into the world of External Libraries

* Python has two types of libraries: Built In and External.  
* There are a vast number of libraries available.  
* The built in libraries are called the "standard library" 
* You can call standard library items from anywhere you run Python.  
* But not every library ships with Python.  No worries you can add them easily.
* We access library codes with ```import```
* Example: Let's practice by importing the math library (this is in the standard library) 
```
import math
print ("It's math! It has type {}".format(type(math)))

```
* run the code above
* you will see that math is a module 
* a module is a collection of variables
* you can also say: a module is a collection of namespace
* the collection is defined by someone else 
* want to see all of the built-in function of a module?  use ```dir()```
* Example: 
```
print(dir(math))

returns: 
```

![print-dir-math-returns](#)

* The variables listed in dir(math) can be accessed by using dot syntax
* some of them refer to values like math.pi which contains the value of pi
* Example: 
```
print(pi to 4 significant digits = {:.4}".format(math.pi))

returns:
```

![print-pi](#)
* most of the rest of the math module are functions such as ```math.log```
* Example: 
```
math.log(32,2)

returns:

5.0 
```
* recall if we don't know what math.log does (or any other item in any library) we can call ```help()```
* Example: 

![Example-help-math.log](#)



