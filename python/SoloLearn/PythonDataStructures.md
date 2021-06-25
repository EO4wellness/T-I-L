# Python Data Structures
Almost no program can work properly without data. Python has a number of built-in data structures, which allow you to store, organize, and manage your data. In this course, we will learn about different Python Data Structures such as strings, lists, dictionaries, tuples, sets, and much more.

## Working with Strings 
1.1 Data Structures 
2.1 Strings 
3.1 Accessing Strings 
3.2 How Many Vowels? 
4.1 String Operations 
5.1 Manipulating strings 
6.1 Module Quiz
7.1 Code Project 
Letter Frequency


You are making a program to analyze text.
Take the text as the first input and a letter as the second input, and output the frequency of that letter in the text as a whole percentage.

Sample Input:
hello
l

Sample Output:
40

The letter l appears 2 times in the text hello, which has 5 letters. So, the frequency would be (2/5)*100 = 40.
Division result is a float. Use the int() function to convert the result to an integer.

![code-project](https://github.com/EO4wellness/T-I-L/blob/main/python/SoloLearn/Images/code-1-data-structures_letter-frequency.jpg) 


## Lists 

## Dictionaries Tuples Sets 

### Summary: 
Lists enclose with SQUARE Brackets [ ]
Dictionaries enclose with CURLY Brackets { }
Tuples enclose with PARENTHESES ( )  

As we have seen in the previous lessons, Python supports the following collection types: Lists, Dictionaries, Tuples, Sets.

Here are some general guidelines for choosing the correct data structure:
- Use a dictionary, when you need a logical association between a key:value
- Use lists if you have a collection of data that does not need random access. Try to choose lists when you need a simple, iterable collection that is modified frequently.
- Use a set if you need uniqueness for the elements.
- Use tuples when your data cannot/should not change.
Many times, a tuple is used in combination with a dictionary, for example, a tuple can represent a key, because it's immutable. 

## User-Defined Data Structures

### Introduction

In the previous modules we have seen the built-in data structures in Python, which include Lists, Dictionaries, Tuples and Sets.

Some applications require additional functionality when working with data, for example, word processors have an undo-redo function, task schedulers need queuing mechanisms, maps need to find the shortest path, etc.
In these cases we need to define our own data structures that provide the required functionality.

Some of the most popular data structures are:
- Stacks
- Queues
- Linked Lists
- Graphs

We will implement the above data structures and use them to solve popular problems.

Quiz: User-Defined Data Structures
Which of the following is a user-defined data structure?

Choices: 
- List
- Set
- Dictionary
- Linked List

 My Answer: Linked List

### Stack


A stack is a simple data structure that adds and removes elements in a particular order.

Every time an element is added, it goes on the "top" of the stack. Only an element at the top of the stack can be removed, just like a stack of plates. This behavior is called LIFO (Last In, First Out). contentImage

![Push-pop-image](https://api.sololearn.com/DownloadFile?id=3192)

Terminology
Adding a new element onto the stack is called push.
Removing an element from the stack is called pop.

Applications
Stacks can be used to create undo-redo functionalities, parsing expressions (infix to postfix/prefix conversion), and much more.

A stack can be implemented using a list in Python. 

QUIZ: Stack
The numbers 1, 2, 3 are pushed to the stack in the given order.
Which number will be on top of the stack?

My Answer: 3 

### Stack in Python


Let's define and implement the Stack class with its corresponding push, pop, is_empty and print_stack methods.

We will use a list to store the data. 

[link to code example](https://www.sololearn.com/learning/1159/4740/12173/1)

As you can see, it's easy to create a stack using a list.
We use a list called items to store our elements.
The push method adds an element at the beginning of the list, while the pop method removes the first element of the list. 

QUIZ: 
Stack in Python
What does calling list.pop(0) do?

choices: 
adds a new item to the list
removes the first item of the list
removes the value 0 from the list
deletes the whole list

my answer: removes the first item of the list

Queue


A queue is similar to a stack, but defines a different way to add and remover elements.
The elements are inserted from one end, called the rear, and deleted from the other end, called the front.
This behavior is called FIFO (First in First Out). 

![example-image-of-concept](https://api.sololearn.com/DownloadFile?id=3193)

Terminology
The process of adding new elements into the queue is called enqueue.
The process of removal of an element from the queue is called dequeue.

Applications
Queues are used whenever we need to manage objects in order starting with the first one in.
Scenarios include printing documents on a printer, call center systems answering people on hold, and so on.
Python lists are the easiest way to implement a queue functionality.

QUIZ: 
Queue
What does FIFO stand for?

My answer: first in first out 


Queue in Python


Let's implement the Queue class with it's corresponding enqueue, dequeue, is_empty and print methods.

We will use a list to store the elements. 

The enqueue method adds an element at the beginning of the list, while the dequeue method removes the last element. 

[Coding Example](https://www.sololearn.com/learning/1159/4741/12175/1)

Quiz: 
Queue in Python
We add the letters 'A', 'B', 'C' to a Queue in the given order.

Which letter will be the last in the queue (at the back)?

My Answer: C

Linked List


A linked list is a sequence of nodes where each node stores its own data and a link to the next node.
One node links to another forming what can be thought of as a linked chain: contentImageThe first node is called the head, and it's used as the starting point for any iteration through the list. The last node must have its link pointing to None to determine the end of the list.

Unlike stacks and queues, you can insert and remove nodes in any position of the linked list (similar to a standard list).

Applications


Linked lists are useful when your data is linked. For example when you need undo/redo functionality, the nodes can represent the state with links to the previous and next states. Another example would be a playlist of music, where each clip is linked with the next one.
Linked lists can also be used to create other data structures, such as stack, queues and graphs. 

Quiz
In a linked list, what should the last item's link point to? 

Choices: 
0  
None  
itself

My Answer: None.

Linked List in Python  
Each node will include data and the link to the next node.

Let's start by creating the Node class:  
``n
class Node:
  def __init__(self, data, next):
    self.data = data
    self.next = next 
``` 
Now we can create the LinkedList class with the corresponding methods:  

class LinkedList:
  def __init__(self):
    self.head = None
    
  def add_at_front(self, data):
    self.head = Node(data, self.head)      

  def add_at_end(self, data):
    if not self.head:
      self.head = Node(data, None)
        return
    curr = self.head
return
    curr = self.head
    while curr.next:
      curr = curr.next
    curr.next = Node(data, None)

  def get_last_node(self):
    n = self.head
    while(n.next != None):
      n = n.next
    return n.data

  def print_list(self):
    n = self.head
    while n != None:
      print(n.data, end = " => ")
      n = n.next
    print()  
```
  
The add_at_front() method adds a new Node as the head of the list and links the previous head to it.
The add_at_end() method iterates to the end of the list using a while loop and adds the new node as the link of the last node.  
Run the code and see how it works!

Quiz:
Fill in the blanks to iterate over the linked list named myList and output the data of each node  
```
x = myList.  head  
while   x != None:  
  print(x.  data  )  
  x = x.  next
``` 

## Graph
Graphs are used to represent many real-life applications like networks, transportation paths of a city, and social network connections.

A graph is a set of connected nodes where each node is called a Vertex and the connection between two of them is called an Edge.

Here is an example graph:

![contentImage](https://api.sololearn.com/DownloadFile?id=4552)

This can represent, for example, connections on a social network, where each Vertex represents a person and the Edges represent connections.

Quiz: Graph
A node of a graph is called a:

Choices: 
- Circle
- Vertex (my answer) 
- Edge
- Path

Graph in Python
A graph can be represented using a square matrix, where each element represents the edges: 0 indicates no edge, while 1 indicates an edge. The rows and columns represent the vertices.

For example:
```
0 1 1

1 0 0

1 0 0
```
 
The matrix above represents a graph with 3 vertices (that's why it's a 3x3 matrix).
The 1s represent the edges. There are 2 edges: the 1st vertex is connected with the 2nd and 3rd.
There are four 1s in the matrix, because if A is connected with B, then B is connected to A.
This type of matrix is called an adjacency matrix, because it shows if the corresponding vertices are adjacent or not.

Quiz: 
Graph in Python
Consider a graph with 5 vertices.
How many elements will the corresponding adjacency matrix contain?
My Answer: 25 



[Graph in Python](https://www.sololearn.com/learning/1159/4743/12180/1)


Let's implement the Graph class: We store the matrix in a two-dimensional list, called adj.
The __init__ method creates the adj matrix with the given size (number of vertices) and initializes all values to zeros.
The add_edge() method is used to add an edge by setting the corresponding values to 1.
Similarly, the remove_edge() method sets the values to 0.
Run the code to see their implementation and the whole program in action!

Quiz: 
Graph in Python
True or False: for any "x" and "y" in an adjacency matrix "m", m[x][y] == m[y][x] 
False
True (my answer) 

End of Module Quiz: 

1. You are using a stack to store numbers. Which number will be on top of the stack after the following actions:
```
push(8)

push(1)

pop()

push(4)

push(2)

pop()

pop()
```
My answer: 8 


2. How many nodes are there in the following graph, which is represented as an adjacency matrix?

```
0100

1000

0001

0010
```
My answer: 4 

3. Drag and drop the behavior names to their corresponding data structures.

Stack: LIFO
Queue: FIFO


4. You are given an adjacency matrix of a graph.



How many edges does the first node have?
```
011
100
100
```
My answer: 2 

End of Course Coding Assingment: 

Balanced Parentheses


Parentheses are balanced, if all opening parentheses have their corresponding closing parentheses.

Given an expression as input, we need to find out whether the parentheses are balanced or not.
For example, "(x+y)*(z-2*(6))" is balanced, while "7-(3(2*9))4) (1" is not balanced.

The problem can be solved using a stack.
Push each opening parenthesis to the stack and pop the last inserted opening parenthesis whenever a closing parenthesis is encountered.
If the closing bracket does not correspond to the opening bracket, then stop and say that the brackets are not balanced.
Also, after checking all the parentheses, we need to check the stack to be empty -- if it's not empty, then the parentheses are not balanced.

Implement the balanced() function to return True if the parentheses in the given expression are balanced, and False if not.

Sample Input:
(a( ) eee) )

Sample Output:
False
You can use a simple list for a stack. Use list.insert(0, item) to push on the stack, and list.pop(0) to pop the top item. You can access the top element of the stack using list[0].

Given: 
```
def balanced(expression):
    #your code goes here
    

print(balanced(input()))
```

