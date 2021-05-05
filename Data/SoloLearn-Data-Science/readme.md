# Data Science 
* [SoloLearn Course link](https://www.sololearn.com/learning/1093)
* Began SoloLearn Studies: May, 2021
* Data Science is a must know discipline in the era of big data. 
* Today, companies and industries must make data-driven decisions to survive. 
* Learn how Data Science works.

## Data Manipulation (8 lessons) 

1. [Welcome to Data Science](https://www.sololearn.com/learning/1093/3365/7586/1)
* Congratulations on taking a big step toward becoming a data scientist!
* In addition to working through this course, 
* be sure to take advantage of all of the learning support available to you on SoloLearn, 
* including the daily tips, Try it Yourself practices, code coach challenges, 
* code playground, and engagement with our amazing learner community. 
* We love to hear from you, so please leave comments and feedback as you learn with us.
* Let's get started!

QUIZ: Welcome to Data Science
Which of the following are related to this course?
- data visualization (correct) 
- building a game engine
- complier optimization
- creat a personal blog

2. [Overview](https://www.sololearn.com/learning/1093/2987/6489/1) 
### What is Data Science?
* There are many use cases in business for data science including 
* finding a better housing price prediction algorithm for Zillow, 
* finding key attributes associated with wine quality, 
* and building a recommendation system to increase the click-through-rate for Amazon.
* Extracting insights from seemingly random data, data science normally involves collecting data,
* cleaning data, performing exploratory data analysis, building and evaluating machine learning models,
*  and communicating insights to stakeholders.
*  Data science is a multidisciplinary field that unifies statistics, data analysis, 
*  machine learning and their related methods to extract knowledge and insights.

QUIZ: What is Data Science?
Which of the following is part of data scientist’s job?
- build machine learning models (correct) 
- build robots (incorrect) 
- build a self-driving car (incorrect) 
- perform exploratory data analysis (correct) 

### Why Python?
* In this Introduction to Data Science course we’re learning data science with Python. As a general-purpose programming language, Python is now the most popular programming language in data science. It’s easy to use, has great community support, and integrates well with other frameworks (e.g., web applications) in an engineering environment. 
* This course focuses on exploratory data analysis with three fundamental Python libraries: numpy, pandas and matplotlib. The machine learning library scikit-learn will be covered as well.
* In the later modules, we will be predicting home values using linear regression, identifying classes of iris with classification algorithms, and finding clusters within wines, just a few examples of what we can do in data science.
* In data science, there are other popular programming languages, such as R, which has an edge in statistical modeling.

QUIZ: Why Python?
Which of the following Python libraries will be covered in this course?
- pandas, tensorflow, and matplotlip (incorrect)
- numpy, pandas, and matplotlip (correct) 
- numpy, scipy, and tensorflow (incorrect) 

3. Getting Started with Numpy 
### [Numerical Data](https://www.sololearn.com/learning/1093/2998/6504/1)
* Datasets come from a wide range of sources and formats: it could be collections of numerical measurements, text corpus, images, audio clips, or basically anything. No matter the format, the first step in data science is to transform it into arrays of numbers.
* We collected 45 U.S. president heights in centimeters in chronological order and stored them in a list, a built-in data type in python.

```
heights = [189, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]
```

* In this example, George Washington was the first president, and his height was 189 cm.
* If we wanted to know how many presidents are taller than 188cm, we could iterate through the list, compare each element against 188, and increase the count by 1 as the criteria is met. 

```
heights = [189, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]

cnt = 0
for height in heights:
    if height > 188:
        cnt +=1
print(cnt)
```
* This shows that there are five presidents who are taller than 188 cm.
No matter the format of the data, the first step in data science is to transform it into arrays of numbers.

QUIZ: Numerical Data
The first step to analyzing data in data science is to transform the data into arrays of what?
- text 
- images
- numbers (correct) 

### Introduction to Numpy


Numpy (short for Numerical Python) allows us to find the answer to how many presidents are taller than 188cm with ease. Below we show how to use the library and start with the basic object in numpy. 

```
import numpy as np

heights = [189, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]

heights_arr = np.array(heights)
print((heights_arr > 188).sum())
```

The import statement allows us to access the functions and modules inside the numpy library. The library will be used frequently, so by convention numpy is imported under a shorter name, np. The second line is to convert the list into a numpy array object, via np.array(), that tools provided in numpy can work with. The last line provides a simple and natural solution, enabled by numpy, to the original question.

As our datasets grow larger and more complicated, numpy allows us the use of a more efficient and for-loop-free method to manipulate and analyze our data. Our dataset example in this module will include the US Presidents' height, age and party.

Python modules can get access to code from another module by importing the file/function using the import statement.

QUIZ: Introduction to Numpy
Fill in the blanks to create a numpy array 'arr' from the list 'lst' given below:
```
import numpy as np 
lst = [1,0,1,0]
arr = np.array \(lst) 
```

### Size and Shape
An array class in Numpy is called an ndarray or n-dimensional array. We can use this to count the number of presidents in heights_arr, use attribute numpy.ndarray.size

```
import numpy as np

heights = [189, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]

heights_arr = np.array(heights)
print(heights_arr.size)
```
Note that once an array is created in numpy, its size cannot be changed. 

Size tells us how big the array is, shape tells us the dimension. To get current shape of an array use attribute shape:

```
import numpy as np

heights = [189, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]

heights_arr = np.array(heights)
print(heights_arr.shape)
```

The output is a tuple, recall that the built-in data type tuple is immutable whereas a list is mutable, containing a single value, indicating that there is only one dimension, i.e., axis 0. Along axis 0, there are 45 elements (one for each president) Here, heights_arr is a 1d array.

Attribute size in numpy is similar to the built-in method len in python that is used to compute the length of iterable python objects like str, list, dict, etc.

QUIZ: Size and Shape
Which of the following methods would you use to find the dimensions of a numpy array?
- dim 
- shape (correct) 
- size 

### Reshape
Other data we have collected includes the ages of the presidents:
```
ages = [57, 61, 57, 57, 58, 57, 61, 54, 68, 51, 49, 
64, 50, 48, 65, 52, 56, 46, 54, 49, 51, 47, 55, 55, 
54, 42, 51, 56, 55, 51, 54, 51, 60, 62, 43, 55, 56, 
61, 52, 69, 64, 46, 54, 47, 70]
```
Since both heights and ages are all about the same presidents, we can combine them:
```
import numpy as np

heights = [189, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]

ages = [57, 61, 57, 57, 58, 57, 61, 54, 68, 51, 49, 64, 50, 48, 65, 52, 56, 46, 54, 49, 51, 47, 55, 55, 54, 42, 51, 56, 55, 51, 54, 51, 60, 62, 43, 55, 56, 61, 52, 69, 64, 46, 54, 47, 70]

heights_and_ages = heights + ages 
# convert a list to a numpy array
heights_and_ages_arr = np.array(heights_and_ages)
print(heights_and_ages_arr.shape)
```

This produces one long array. It would be clearer if we could align height and age for each president and reorganize the data into a 2 by 45 matrix where the first row contains all heights and the second row contains ages. To achieve this, a new array can be created by calling numpy.ndarray.reshape with new dimensions specified in a tuple:

The reshaped array is now a 2darray, yet note that the original array is not changed. We can reshape an array in multiple ways, as long as the size of the reshaped array matches that of the original.

Numpy can calculate the shape (dimension) for us if we indicate the unknown dimension as -1. For example, given a 2darray `arr` of shape (3,4), arr.reshape(-1) would output a 1darray of shape (12,), while arr.reshape((-1,2)) would generate a 2darray of shape (6,2).

QUIZ: Reshape
Review the code below and reshape the 1darray o shape (45,) to a 2darray with shape of (5,9)
```
heights_arr.shape
>>> (45, )
heights_arr-reshaped =
   heights_arr.reshape((5,9))
```

### Data Type
Another characteristic about numpy array is that it is homogeneous, meaning each element must be of the same data type.

For example, in heights_arr, we recorded all heights in whole numbers; thus each element is stored as an integer in the array. To check the data type, use numpy.ndarray.dtype

```
import numpy as np

heights = [189, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]

heights_arr = np.array(heights)
print(heights_arr.dtype)
```

If we mixed a float number in, say, the first element is 189.0 instead of 189:

```
heights_float = [189.0, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]
```

Then after converting the list into an array, we’d see all other numbers are coerced into floats:

```
import numpy as np

heights_float = [189.0, 170, 189, 163, 183, 171, 185, 168, 173, 183, 173, 173, 175, 178, 183, 193, 178, 173, 174, 183, 183, 180, 168, 180, 170, 178, 182, 180, 183, 178, 182, 188, 175, 179, 183, 193, 182, 183, 177, 185, 188, 188, 182, 185, 191]

heights_float_arr = np.array(heights_float)
print(heights_float_arr)
print("\n")
print(heights_float_arr.dtype)
```

Numpy supports several data types such as int (integer), float (numeric floating point), and bool (boolean values, True and False). The number after the data type, ex. int64, represents the bitsize of the data type.

QUIZ: Data Type
What is the data type of heights_and_ages_arr?
Recall:
heights = [189, 170, 189, 163, ... 182, 185, 191]
ages = [57, 61, 57, ... 62, 43, 55, 56]
- float 
- int (correct) 
- bool 

4. [Indexing and Slicing in Numpy](https://www.sololearn.com/learning/1093/2996/6492/1)
5. Assigning Values 
6. Operations 
7. Module 1 Quiz:
8. Average of Rows (coding project) 

## Data Analysis (7 lessons)

## Data Visualization (4 lessons) 

## Linear Regression (8 lessons) 

## Classification (8 lessons)

## Clustering Wines (6 lessons) 

# Certification 

