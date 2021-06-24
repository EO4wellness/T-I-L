Python Data Structures
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
