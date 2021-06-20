# [Debugging](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/#debugging)
* Debugging is the process of going through your code, finding any issues, and fixing them.
* Issues in code generally come in three forms: 
    - syntax errors that prevent your program from running, 
    - runtime errors where your code has unexpected behavior, 
    - or logical errors where your code doesn't do what you intended.
* In this course, you'll learn how to use the JavaScript console to debug programs 
* and prevent common issues before they happen.

## Open JS Console:
* This varries by Browser Type.  
* Google your browser for documentation or updates
* At the current time you can open the JavaScript console in the following browsers:
```
Depending on your browser, in order to open up the JavaScript console you need to:
Chrome:

    Click the the following: Menu->More Tools->Developer Tools->Console tab
    or else , for keyboard shortcut: Ctrl + Shift + J (Windows/Linux)

Firefox:

    Click the the following: Menu->Developer->Web Console
    or else , for keyboard shortcut: Ctrl + Shift + K (Windows/Linux)

Safari:

    Click the the following: Safari->Preferences->Advanced
    and to the option presented enable: “Show Develop menu in menu bar”
    Lastly, click: Develop->Show Error Console

Edge:

    Click the the following: ‘’…’’ symbol->Developer Tools-> Console tab

```

## 01. [Use the JavaScript Console to Check the Value of a Variable](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/debugging/use-the-javascript-console-to-check-the-value-of-a-variable)
* Both Chrome and Firefox have excellent JavaScript consoles, also known as DevTools, for debugging your JavaScript.
* You can find Developer tools in your Chrome's menu or Web Console in Firefox's menu. If you're using a different browser, or a mobile phone, we strongly recommend switching to desktop Firefox or Chrome.
* The console.log() method, which "prints" the output of what's within its parentheses to the console, will likely be the most helpful debugging tool. Placing it at strategic points in your code can show you the intermediate values of variables. It's good practice to have an idea of what the output should be before looking at what it is. Having check points to see the status of your calculations throughout your code will help narrow down where the problem is.
* Here's an example to print the string Hello world! to the console:
```
console.log('Hello world!');
```

* CODE ASSIGNMENT: Use the console.log() method to print the value of the variable a where noted in the code.
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/04.Debugging/01_use-the-javascript-console-to-check-the-value-of-a-variable.js)

## 02. [Understanding the Differences between the freeCodeCamp and Browser Console](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/debugging/understanding-the-differences-between-the-freecodecamp-and-browser-console)
* When you run ordinary JavaScript, the browser's console will display your console.log() statements the exact number of times it is called.

The freeCodeCamp console will print your console.log() statements a short time after the editor detects a change in the script, as well as during testing.

The freeCodeCamp console is cleared before the tests are run and, to avoid spam, only prints the logs during the first test (see the note below for exceptions).

If you would like to see every log for every test, run the tests, and open the browser console. If you prefer to use the browser console, and want it to mimic the freeCodeCamp console, place console.clear() before any other console calls, to clear the browser console.

Note: console.logs inside functions are printed to the freeCodeCamp console whenever those functions are called. This can help debugging functions that are called during testing.
* CODE ASSIGNMENT: First, use console.log to log the output variable. Then, use console.clear to clear the browser console. 
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/04.Debugging/02_understanding-the-differences-between-the-freecodecamp-and-browser-console.js)

## 03. [Use typeof to Check the Type of a Variable](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/debugging/use-typeof-to-check-the-type-of-a-variable)
You can use typeof to check the data structure, or type, of a variable. This is useful in debugging when working with multiple data types. If you think you're adding two numbers, but one is actually a string, the results can be unexpected. Type errors can lurk in calculations or function calls. Be careful especially when you're accessing and working with external data in the form of a JavaScript Object Notation (JSON) object.

Here are some examples using typeof:
```
console.log(typeof "");
console.log(typeof 0);
console.log(typeof []);
console.log(typeof {});
```
In order, the console will display the strings string, number, object, and object.

JavaScript recognizes six primitive (immutable) data types: Boolean, Null, Undefined, Number, String, and Symbol (new with ES6) and one type for mutable items: Object. Note that in JavaScript, arrays are technically a type of object.

* CODE ASSIGNMENT: Add two console.log() statements to check the typeof each of the two variables seven and three in the code.
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/04.Debugging/03_use-typeof-to-check-the-type-of-a-variable.js)

## 04. [Catch Misspelled Variable and Function Names](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/debugging/catch-misspelled-variable-and-function-names)

The console.log() and typeof methods are the two primary ways to check intermediate values and types of program output. Now it's time to get into the common forms that bugs take. One syntax-level issue that fast typers can commiserate with is the humble spelling error.

Transposed, missing, or mis-capitalized characters in a variable or function name will have the browser looking for an object that doesn't exist - and complain in the form of a reference error. JavaScript variable and function names are case-sensitive.

* CODE ASSIGNMENT: Fix the two spelling errors in the code so the netWorkingCapital calculation works.
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-exercises/04.Debugging/04_catch-misspelled-variable-and-function-names.js)

## 05. [Catch Unclosed Parentheses, Brackets, Braces and Quotes](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/debugging/catch-unclosed-parentheses-brackets-braces-and-quotes)
* 
* CODE ASSIGNMENT: 
[My Code](#)

## 06. [Catch Mixed Usage of Single and Double Quotes]()
* 
* CODE ASSIGNMENT: 
[My Code](#)

## 07. [Catch Use of Assignment Operator Instead of Equality Operator]()
* 
* CODE ASSIGNMENT: 
[My Code](#)

## 08. [Catch Missing Open and Closing Parenthesis After a Function Call]()
* 
* CODE ASSIGNMENT: 
[My Code](#)

## 09. [Catch Arguments Passed in the Wrong Order When Calling a Function]()
* 
* CODE ASSIGNMENT: 
[My Code](#)

## 10. [Catch Off By One Errors When Using Indexing]()
* 
* CODE ASSIGNMENT: 
[My Code](#)

## 11. [Use Caution When Reinitializing Variables Inside a Loop]()
* 
* CODE ASSIGNMENT: 
[My Code](#)

## 12. [Prevent Infinite Loops with a Valid Terminal Condition]()
* 
* CODE ASSIGNMENT: 
[My Code](#)

## Finished Debug Section: ![completion date](#)

Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
