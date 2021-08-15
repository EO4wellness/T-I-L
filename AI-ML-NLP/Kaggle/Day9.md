# Day 9:
* August 10, 2021
* Your First Machine Learning Model 

![Day9-Assignment](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-assignement.jpg)

## Lesson 3: Building your first Model: 


## Select Data for Modeling 
* When data has too many variables, it is hard to visualize 
* To understand it, we need something pared down to not be overwhelmed
* Select a few variables. 
* Use your intuition for which variables. 
* Command to choose variables in columns 
```


import pandas as pd

melbourne_file_path = '../input/melbourne-housing-snapshot/melb_data.csv'
melbourne_data = pd.read_csv(melbourne_file_path) 
melbourne_data.columns


```

## Missing Data: 
* we have two approaches
* Take the [Kaggle Pandas Course](https://www.kaggle.com/learn/pandas) for more. 

Approach 1: Dot Notation (we select a prediction target)
Approach 2: Features (we select with a Column List) 

## Select the Prdiction Target 
* pull the variable with dot-notation 
* result is a single column 
* the column is stored in a SERIES 
* it is like a DataFrame, only with 1 column of data 
* PREDICTION TARGET: the column we want to predict
* the prediciton target is found by using dot notation 
* convention has it the prediction target is Y 
* Example: 
```
y = melbourne_data.Price 
```

## Features 
* FEATURES: the columns that are inputted into our model
* we use FEATURES to make predictions 
* in some cases, you will use every column except the target as features
* some use cases require the use of fewer features 
* our first model will have a few features 
* later we will iterate over more features 
* then compare models built with different features 
* Reastures Example: 
```
melbourne_features = ['Rooms', 'Bathroom', 'Landsize', 'Lattitude', 'Longtitude']
```

## Data:
* by convention data is called X 
* Example: 
```
X = melbourne_data[melbourne_features]
```

## Print or View the Data 
* Review: 
```
X.describe()
```
* New method is the HEAD METHOD
* the HEAD METHOD only prints out the first few rows so it is represntative 
* Example: 
```


X.head()


```
* Data Scientists must visually check the data with these commands before going on
* Often there are surprises when you do
* Better to fix before training the model 

## Building the Model 
* we are using scikit-learn library 
* when coding it is written as ```sklearn```
* scikit-learn is the most popular library for modeling DataFrame data 

## Steps Used to Build Model: 
* DEFINE: What type of modle is it?  
* FIT: Capture paterns from the data.  This is the core heart of the model 
* PREDICT: Outcome 
* EVALUATE: Determine if the model's predictions are accurate or not 
* Example of a Decision Tree Model with SCIKIT-LEARN 

```
from sklearn.tree import DecisionTreeRegressor

# Define model. Specify a number for random_state to ensure same results each run
melbourne_model = DecisionTreeRegressor(random_state=1)

# Fit model
melbourne_model.fit(X, y)

# Output 
DecisionTreeRegressor(random_state=1)
```

## Randomness 
* ML models allow for some randomness
* specify a number for ``` random_state ``` 
* after specifying we have a fitted model ready to make predictions 
* NOTE: in real life we want to predict what's on the market now, not whats already sold 
* Example: 

```
print("Making predictions for the following 5 houses:")
print(X.head())
print("The predictions are")
print(melbourne_model.predict(X.head()))
```
```
# output: 
Making predictions for the following 5 houses:
   Rooms  Bathroom  Landsize  Lattitude  Longtitude
1      2       1.0     156.0   -37.8079    144.9934
2      3       2.0     134.0   -37.8093    144.9944
4      4       1.0     120.0   -37.8072    144.9941
6      3       2.0     245.0   -37.8024    144.9993
7      2       1.0     256.0   -37.8060    144.9954
The predictions are
[1035000. 1465000. 1600000. 1876000. 1636000.]

```

## Exercises: 
* Today, I had some issues getting this exercise to run properly without error messages. 
* I watched 4X Kaggle winner Abhishek Thakur's video to work past the issue(s) for today. 
* https://www.youtube.com/watch?v=Ja6CzCuwbpc 
* Figured I would also take notes on his presentation while working thru the specific problem. 

### YouTube Notes: 
* Simple machine learning models all have two things to keep in mind: X and Y 
* X:   X is your samples and features 
* Y:   Y is the target varable 
* f is usually used for "features
* targets are represented by Y
* features are represented by X
* Binary Classification Problem: you only have two targets
* Multi Classification Problem (lots of targets) 
* MultiLabel Classification: Y: 1 0 1 0 1 0 1 0 1 0 
* MultiColumn Regresion (many different floats in many different columns) 
* Single Column Regresion (one float in each row) 

### STEP 1: Specify Prediction Target:
Print Head (just first few rows of data) example: 
![Day9-print-head-just-1st-few-rows](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-data.head_example.jpg)

Practice printing the data: 
![Day9-Data](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise1_read-data.jpg)


Acctual Assignment (not the above practice session for what we just learned) to print the columns: 
![Columns](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise1-solution.jpg)


### STEP 2: Create X: 
* Note CASE sensitive 
* This is a capital letter X (and later a LOWER case y) 
![Day9-Exercise2](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise2.jpg)

Review the Data: 
![Day9-Review](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-review-data-1.jpg)

![Review-Data](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-review-data-2.jpg)


### STEP 3:
Fit the Model 
![Step3](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise3-fit-the-modle.jpg) 

### STEP 4:
Make Predictions 
![Predictions](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-step4-predictions.jpg)

### Results:
![Think-Results](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-results.jpg)


## Lesson 4: Model Validation 
* Measure the performance of your model
* Test and compare alternatives
* How good is your model? 
* MODEL VALIDATION: used to measure the quality of the model
* Key to improving models over time 

### Model Validation: 
* evaluate every model you ever build 
* usually looking for predictive accuracy 
* In simple terms: did your model's predictions come close to what actually happens? 
* HUGE MISTAKE: DO NOT make predictions with your TRAINING DATA 
* do not compare target values in the training data 
* there are many metrics used to narrow down the quality of predictions vs actual real outcomes 
* one is MAE 
* MEAN ABSOLUTE ERROR (MAE) 
* The prediction error for each house is 
``` error = actual-predicted ```
* Example: A house costs 150,000.  The model predicted 100,000 for cost.  The error is 50,000. 
* When using the MAE metric, it converts all values to a positive number (absolute value) 
* "On average, our model predictions are off by about X"

### Calculating MAE 
* Begin with a model: 
```
# Data Loading Code Hidden Here
import pandas as pd

# Load data
melbourne_file_path = '../input/melbourne-housing-snapshot/melb_data.csv'
melbourne_data = pd.read_csv(melbourne_file_path) 
# Filter rows with missing price values
filtered_melbourne_data = melbourne_data.dropna(axis=0)
# Choose target and features
y = filtered_melbourne_data.Price
melbourne_features = ['Rooms', 'Bathroom', 'Landsize', 'BuildingArea', 
                        'YearBuilt', 'Lattitude', 'Longtitude']
X = filtered_melbourne_data[melbourne_features]

from sklearn.tree import DecisionTreeRegressor
# Define model
melbourne_model = DecisionTreeRegressor()
# Fit model
melbourne_model.fit(X, y)
```
Outcome  of above model: 
```
DecisionTreeRegressor()
```
* Calculation of the Mean Absolute Error (MAE) of the above model is: 
```
from sklearn.metrics import mean_absolute_error

predicted_home_prices = melbourne_model.predict(X)
mean_absolute_error(y, predicted_home_prices)
```
* Which outputs: 
```
434.71594577146544
```

### In-Sample Scores 
* causes a problem 
* the above example is called an in-sample score 
* we used a single sample of houses for both building the model and then also for evaluating it. 
* these models can look accurate in training data, but not preform well in real life based on other features and the role of other features in pricing (predictions) 

### Coding It 
```
train_test_split
```
* The above code is a built-in Scikit-learn lirbary function 
* it is used to break up the data into two pieces 
* one part is used as training data to fit the model 
* the other data is as validation data to calculate the ``` mean_absolute_error ``` 
* Example: 
```


from sklearn.model_selection import train_test_split

# split data into training and validation data, for both features and target
# The split is based on a random number generator. Supplying a numeric value to
# the random_state argument guarantees we get the same split every time we
# run this script.
train_X, val_X, train_y, val_y = train_test_split(X, y, random_state = 0)
# Define model
melbourne_model = DecisionTreeRegressor()
# Fit model
melbourne_model.fit(train_X, train_y)

# get predicted prices on validation data
val_predictions = melbourne_model.predict(val_X)
print(mean_absolute_error(val_y, val_predictions))


```
* Result: this outputs: 261425.9928986443 

This illustrates the problem of using training data to validate training results, rather than using a validation data set to validate the model. 

The mean absolute error rate for the in sample data was 500 dollars. 
the MAE for the out of sample data is 250,000 dollars 

As a point of reference, the average home value in the validation data is 1.1 million dollars. So the error in new data is about a quarter of the average home value.

There are many ways to improve this model, such as experimenting to find better features or different model types.

## Exercises: You've built a model. In this exercise you will test how well the model functions. 

## Start: Import Data 

## Step 1: Split your Data

Use the train_test_split function to split up your data.

Give it the argument random_state=1 so the check functions know what to expect when verifying your code.

Recall, your features are loaded in the DataFrame X and your target is loaded in y.

![image of step 1](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise4-1.jpg)

## Step 2: Specify and Fit the Model 
![image of step 2](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise4-2.jpg)

## Step 3: Make Predictions with Validation Data 
![Image step 3](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise3-4.jpg) 

![results continued](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise3-4-cont.jpg)


## Step 4: Calculate the MAE in validation data 
![exercise 4](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-exercise4-4.jpg)
