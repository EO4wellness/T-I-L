# CodeGym Java Basics
* Source: https://codegym.cc/  
* Programs written in Java are executed by the Java virtual machine (JVM). 
* The JVM is a special program that knows how to execute programs written in Java.
* The list of its commands is quite extensive. 
* For example, this command could be used to display 'Robots are friends to humans' on the screen."
Here's a super simple command:
```
System.out.println("Robots are friends to humans");
```
* In the Java programming language, each command is written on its own line. 
* A semicolon must be placed at the end of a command.
* Example: 
```
Suppose we want to display 'Humans and robots are friends forever' on the screen three times. This is how it would look:"
The program is made up of three commands:

System.out.println("Humans and robots are friends forever");
System.out.println("Humans and robots are friends forever");
System.out.println("Humans and robots are friends forever");
```
* Quick Task to Illustrate these points: 
* Assignement and my Solution: 

![task](https://github.com/EO4wellness/T-I-L/blob/main/JAVA/Images/CodeGym/JavaBasics/01_task-assignment.jpg)


* Results: 
* 
![task1-image](https://github.com/EO4wellness/T-I-L/blob/main/JAVA/Images/CodeGym/JavaBasics/2021-09-09-task1.jpg)


* A program can’t consist of nothing but commands.
* programs consist of classes, classes consist of methods, and methods consist of commands!
* Programs in Java consist of classes. There might be tens of thousands of classes. 
* A minimal program is one class. For each class, a separate file is created. 
* The name of the file matches the name of the class.
* Use Case Example: 
```
Suppose you decide to create a class that describes a home. You’ll need to create a Home class that will be saved in the file Home.java."

"If you want to describe a cat in the program, then you’ll have to create a file Cat.java and declare the Cat class in it, etc."

"The files contain code (text) written in the Java programing language. Usually a class’s code consists of the 'class name' and 'class body'. The class body is written in curly brackets. This is how the Home class (file Home.java) should look:

```

![example-image](https://github.com/EO4wellness/T-I-L/blob/main/JAVA/Images/CodeGym/JavaBasics/ex_public-class-home.jpg)


* The class body may contain variables (also known as data) and methods ('functions').

![example2](https://github.com/EO4wellness/T-I-L/blob/main/JAVA/Images/CodeGym/JavaBasics/ex_2.jpg)

* JAVA Code Example of above concepts:
```
public class Home
{
    int a;
    int b;

    public static void main(String[] args)
    {
        System.out.print("1");
    }

    public static double pi()
    {
        return 3.14;
    }
}
```
* int a and int b are variables
* main and pi are methods
* classes can exist without variables
* In JAVA: a minimal program must contain at least one class that must include at least one method/function to get the program running 
* JAVA minimal program: 
```
public class Home
{
    public static void main (String[] args)
    {
    }
}
```
* The class that starts the program can have any name, but the 'main' method used to start the program must always look the same:

![image](https://github.com/EO4wellness/T-I-L/blob/main/JAVA/Images/CodeGym/JavaBasics/ex_3.jpg) 

## [Ready for the first program](https://codegym.cc/quests/lectures/questsyntax.level00.lecture03)
