# GO - SoloLearn 
* Course Link: https://www.sololearn.com/learning/1164
* Go (sometimes called Golang) is one of the most popular and powerful open-source programming languages today. 
* Developed by Google, it’s used on servers, web development, and even command-line interfaces. 
* In this course, we’ll cover the main concepts of Go, as well as build real-life projects and solve different coding challenges. 
* Let’s Go!

## Getting Started: 
![Cute-Go-Logo]() 

1.1 Lesson
* Wecome to GO
* Go is an OPEN SOURCE programming language 
* It is easy to learn 
* It makes building simple, reliable, and efficient software easier. 
* Designed in 2007
* created to improve programming productivity 
* Often called GOLANG because of its domain name: golang.org 
* but the proper name is GO 

1.1 Hello World Quiz: 
Welcome to Go.  Go was designed at? 
- Microsoft
- Oracle 
- Apple 
- Google (this is the correct answer) 

1.2 Practice 
* Example: Hellow World program: 
```
package main 

import "fmt"

func main() {
    fmt.Println("Hello, World!") 
}
```

* Your turn to practice. 
* Write a simple GO program which outputs "Go is fun" to the screen. 
* Mu coding solution: 
```
package main
import "fmt"

func main() {
    fmt.Println("Go is fun")
} 
```

Hello World Quiz: 
Drag and Drop the result in the output "Learning Go!". 
```
package main

import "fmt"

func main() {
    fmt.Println("Learning Go!")
}

```

2.1 Packages 
* every GO program is made up of PACKAGES. 
* every GO programs starts running the MAIN package. 
* the main package is also declared first in any GO code 
* the main package makes the program run and create its output 
* The first line of code defines that it is the main package 
* Example:  ``` package main ``` 

Packages Quiz: 
Which package is used when you run a Go program? 
- math 
- package 
- main (my answer) 
- rand 


3.1 Imports 
* besides MAIN there are many other GO packages 
* other go packages need to be imported to be used in the code
* each other package accomplishes a different task 
* one popular package is FMT ("fmt") 
* this package stands for FORMAT 
* fmt provides input and output function to GO programs 
* to import a package, use the IMPORT statement
* Example: 
```
package main 

import "fmt"

function main(){
    fmt.Println("Hello, World!") 
}
```

* In addition to what's shown here in our example, we can also import multiple packages all at once.  
* Do import more than one package, we use parentheses.  
* Example Code Snippet: 
```
import (
"fmt"
"math"
) 

```

Packages Quiz: 
Imports: Fill in the blanks to import the math package: 
```import "math"   ```


Imports: 
* Each package has exported names. 
* You can use these names to access them after you've imported them. 
* How can you tell if a name is exported in GO? 
* Simple: exported items begin with a CAPITAL LETTER 
* Access exported names by using the package name, a dot, and the exported name. 
* Examples above: Here we access the PrintIn() function from the "fmt" package which is used to generate our output. 
* PrintIn() is an exported name. 
* We can tell this because it starts with a capital letter 
* Output we want to generate is placed inside parentheses and enclosed in quotes. 

Imports Quiz: 
Create a program that outputs "Go is awesome" to the screen. 
```
package main

import "fmt" 

function main() {
  fmt.Println("Go is awesome") 
}
```
other available (but unused for this solution) words from the word bank: 
- main 
- export 
- println
- import 

Imports: 
* ```func main()``` is the entry point of our GO program 
* this is similar to other programming languages such as Java or C++
* this function gets execudted when we run our program 
* In our example: 
1. You can see the code defines the ```main``` package 
2. imports the ```"fmt"``` package used for output 
3. defines the ```main()``` function 
4. uses the ```Println()``` function of the ```fmt``` package to generate the output 

Imports Quiz: 
Rearrange the code to create a valid GO program that outputs "Hi" to the screen: 
```
package main 
import "fmt" 
func main() {
fmt.Println("Hi") 
}
```


4.1 Comments 
* Comments are statements in the code which do not execute or run but explain the code and what it is doing 
* Comments are useful to yourself and others later on. 
* a single line comment in Go is accomplished by using two slashes ```//```
* Example: 
```
// generate the output of our Go program 
fmt.Println("some text")
```
* anything which follows the slashes is consider a comment 
* writing comments is always a good practice 
* it allows yourself and other developers to easier read and understand what the code is doing
* it helps with debugging code
* it helps your future self recall what you were accomplishing or where to edit code in the future when goals change 

Comments Quiz: 
Fill in the blank to create a valid comment: 
```
//output is a number 
fmt.Println(42) 
```
Comments: 
* You can also create multi-line comments
* Do this by putting your multi-line content inside ```/*``` and ```*/```
* Example: 
```
func main() {
  /*
  This is an example GO program 
  that only gnerates a simple text
  output using the "fmt" package
  */
  fmt.Println("Hey") 
}
```
* Recall: Comments are not executed as code 
* so you can always use ```/*  */ ``` to comment out code blocks
* this is handy to test and debug. 

Comments Quiz: 
Rearrange the code to create a valid comment: 
```
/* 
some comment content 
in multiline format 
*/
```

5.1 Module Quiz: 

Quiz: 1 
Fill in the blanks to create a valid program that outputs "Go".
```
package main 
import  "fmt"
func main() {
   fmt.Println("Go")
}
```
on a side note! laughing at myself "main space" doesn't equal a correct answer when "package ____" is in a quiz.  :) hard to see an extra space--and soooo good to recall that! 

Quiz: 2 
How many lines will the following code output?
```
package main

import "fmt"

func main() {

  /* fmt.Println("1") */

  fmt.Println("2")

  //fmt.Println("3")

}
```
My answer: 1.  Namely "fmt.Println("2") will output the digit two, where as the other lines will not output anything because they are comments. 

QUIZ: 3 
Fill in the blanks to import the "fmt" and "math" packages
```
import (
"fmt" 
"math"
)
```

Quiz: 4 
Exported names from packages should: 
- result in an output 
- start with a capital letter (my answer) 
- start with a number 
- start with a lower case letter 



6.1 Code Project 
Debug & Fix

Your colleague tried to make a program that is intended to output "GO" three times on separate lines.
However, he is still new to Go and has made a number of mistakes in the code.

Debug and fix the code to produce the desired output.
The output should be in all caps.

My Solution: 
```
package main
import "fmt"

func main() {
   // outputs GO 3 times
    fmt.Println("GO")
    fmt.Println("GO")
    fmt.Println("GO")
}

```
![Section-Completed]()


## Basic Concepts: 
7.1 [Variables](https://www.sololearn.com/learning/1164/4857/12474/1)

8.1 Data Types 
Another interesting feature of Go are zero values: variables that are declared without a value take the zero value of their type:
0 for numeric types,
false for the boolean type, 
"" for strings.

9.1 Constants 



## Functions: 

## Pointers and Structures: 

## Array, Range, Map:

## concurrency: 

# Certification: 

