# Day 12:
* August 13, 2021
* Intermediate Machine Learning 
  1. Introduction 
  2. Missing Values 
  3. Categorical Variables 

![Day-12-Assignment](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day-12-Assignment.jpg)

# [Introduction](https://www.kaggle.com/alexisbcook/introduction)
* this is a ML micro course at the intermediate level 
* course covers how to improve the quality of ML models 
* learn to: 
  1. real-world datasets (missing values, categorical variables, etc) 
  2. design pipelines (improves quality of ML models and code) 
  3. advanced technique of model validation such as cross-validation 
  4. state-of-the-art models (XGBoost) 
  5. avoid leakage/common mistakes 
* Prerequisites to already be familiar with: 
  1. model validation 
  2. underfitting
  3. overfitting
  4. random forests 

# Exercise: 
![Ames Housing dataset image](https://i.imgur.com/lTJVG4e.png)


We're working now with the data from [Housing Prices competition](https://www.kaggle.com/c/home-data-for-ml-course)

If you need to [Review Random Forests](https://www.kaggle.com/dansbecker/random-forests)

Lots of Jupyter Notebook cells to run without changes to prep everything before arriving at the exercises: 

## Step 1: Evaluate Several Models 
![Day12-step1](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day-12-exercise-step1.jpg)


## Step 2: Generate Test Predictions
![Day12-Step2](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day-12-exercises_step2.jpg)

### Personal Reflections: 
* WOW!  I just submitted my 3rd ever kaggle submission.  
* This is becoming a habit.  
* While the process is fresh in my mind, I'm writing it up. 
* Seems each time I submit, I forget one or more step. 
* Over time it will become familiar and habitual. 
* Until then: notes!  :) 
* How-To Document: [Kaggle Submissions](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Kaggle-Submissions_How-To.md)

# [Missing Values](https://www.kaggle.com/alexisbcook/missing-values)
* Lesson 2 in this intermediate course. 
* we have 3 ways to deal with missing data/values 
* Just why does data go missing some times?  
* Life isn't perfect.  
* Things don't always match 100% (a 2 bedroom home will never have data for a 3rd or 4th bedroom) 
* Someone may have missed a question, or skipped it, when filling out a survey. 
* There may have been some coruption in the data. 
* Data could have been entered wrong. 
* Most ML libraries have error messages for missing data. 
* SciKit-Learn also has such an error message for missing values. 
* When you see the error messages, you need to use one of these methods: 

## MIssing Value Approaches: 
1. Simple Option: Drop all columns with missing values. 
2. Imputation: Fills in the missing values with some number. Usually the "fill" is the mean value for that column. 
3. Extension to Imputation: You still fill in the missing value with the column mean, but you create a new column 
   recording if you filled in some data or not. 
   
* Each of the 3 methods to deal with missing values has pros and cons. 
* In the extnesion to imputation, in some cases it is helpful and in other cases it is a waste of time. 
* In the simple option, it is silly to toss out an entire column for ONE missing row of information 
* With Imputation you could have the mean over or under representing the missing value(s) 

### Define Function to Measure Quality of Each Approach 
* Define a function ```score_dataset()``` to compare different approaches dealing with missing values. 
* The function will report the mean absolute error (MAE) from our random forest model. 
* Examples: 
```
1.  MAE from Approach 1 (Drop columns with missing values):
183550.22137772635 

2.  MAE from Approach 2 (Imputation):
178166.46269899711

3. MAE from Approach 3 (An Extension to Imputation):
178927.503183954 
```

Generalizations:  If less than 1/2 of the entries in a column are missing, then dropping the column to resolve missing values, also drops a lot of useful info. In this case, Imputation will perform better. 

# Exercise: Lesson 2 Missing Values 
* Again we are working with the [Housing Prices Competition for Kaggle](https://www.kaggle.com/c/home-data-for-ml-course)
* Getting Started (lots of code to set up our exercises) 

![Getting Started](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day-12-missing-data-getting-started.jpg) 

## Step 1: Preliminary Investigation 

![Step1-Preliminary Shape](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day-12-Step1-exercise.jpg) 

![Part A](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day-12-Step1-PartA-exercise.jpg)

![Part B](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day-12-Step1-PartB-exercise1.jpg)

## Step 2: Drop Columns of Missing Values  

![Part A]()

![Part B]()


## Step 3: Imputation 

![Part A1]()

![Part A2]()

![Part B]()

## Step 4: Generate Test Predictions 

![Part A]()

![Part B]()

# Submit Results! 
This is my 4th submission!  WOW!  
