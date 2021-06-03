# [JavaScript Algorithms and Data Structures Projects](https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/#javascript-algorithms-and-data-structures-projects)
* This is it!  
* Time to put your new JavaScript skills to the test!  
* These projects are similar to the algorithm scripping challenges you have done previously.
* The projects are just more difficult/realistic.
* Complete all 5 projects to earn _JavaScript Algorithms and Data Structures_ certification. 

1:  [Palindrome Checker](https://github.com/EO4wellness/T-I-L/tree/main/JavaScript/freecodecamp-exercises/10.JavaScriptAlgorithmsDataStructureProjects/Palindrome%20Checker)

```
function palindrome(str) {

  str = str.toLowerCase().replace(/[\W_]/g, '');
  for(var i = 0, len = str.length - 1; i < len/2; i++) {
    if(str[i] !== str[len-i]) {
      return false;
    }
  }
  return true;
}

palindrome("eye");
```

2:  [Roman Numberal Converter](https://github.com/EO4wellness/T-I-L/tree/main/JavaScript/freecodecamp-exercises/10.JavaScriptAlgorithmsDataStructureProjects/Roman%20Numeral%20Converter)

```
function convertToRoman(num) {
var digits = String(+num).split(""),
key = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM",
"","X","XX","XXX","XL","L","LX","LXX","LXXX","XC",
"","I","II","III","IV","V","VI","VII","VIII","IX"],
roman_num = "",
i = 3;
while (i--)
roman_num = (key[+digits.pop() + (i * 10)] || "") + roman_num;
return Array(+digits.join("") + 1).join("M") + roman_num;
}


convertToRoman(36);
```

3:  [Caesars Cipher](https://github.com/EO4wellness/T-I-L/tree/main/JavaScript/freecodecamp-exercises/10.JavaScriptAlgorithmsDataStructureProjects/Caesars%20Cipher)

4:  [Telephone Number Validator](https://github.com/EO4wellness/T-I-L/tree/main/JavaScript/freecodecamp-exercises/10.JavaScriptAlgorithmsDataStructureProjects/Telephone%20Number%20Validator)

5:  [Cash Register](https://github.com/EO4wellness/T-I-L/tree/main/JavaScript/freecodecamp-exercises/10.JavaScriptAlgorithmsDataStructureProjects/Cash%20Register)


Nav: [Basic JavaScript](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/01_Basic-JavaScript.md) | [ES6](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/02_ES6.md) | [Regular Expressions](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/03_Regular-Expressions.md) |  [Debugging](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/04_Debugging.md) | [Basic Data Structures](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/05_Basic-Data-Structures.md) | [Basic Algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/06_Basic-Algorithm-Scripting.md) |  [Object Oriented Programming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/07_Object-Oriented-Programming.md) | [Functional Porgramming](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/08_Functional-Porgramming.md) | [Intermediate algorithm Scripting](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/09_Intermediate-Algorithm-Scripting.md) | [JavaScript Algorithms and Data Structures Projects](https://github.com/EO4wellness/T-I-L/blob/main/JavaScript/freecodecamp-notes/10_JavaScript-Algorithms-and-Data-Structures-Projects.md)
