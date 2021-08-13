# Day 9: Your First Machine Learning Model 
![Day9-Assignment](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day9-assignement.jpg)


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

### STEP 1: Specify Prediction Target:

### STEP 2: Create X: 
![Day9-Exercise2]
