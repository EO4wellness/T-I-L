# Day 8: 
!][assignment](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day8-assignment.jpg)


# How Models Work
* While overly simplified, Decision Tree(s) make a good visual reference point to talk about ML models. 

![Sample-Decision-Tree](https://i.imgur.com/7tsb5b1.png)

![More-Advanced-Decision-Tree](https://i.imgur.com/prAjgku.png)

## Machine Learning Modeling 
* First use the historical data to decide how to break the houses into two groups
* then again to determine the predicted price in each group
* Training a Model: this step of capturing patterns from data
* Training a model is also known as Fitting. 
* Training Data: The data used to fit the model.
* Predict: Once a model has been fit, then we can predict prices. 

![Simple-model](https://i.imgur.com/prAjgku.png)
* Which will work better?  
* One of the left. 
* Why?  
* Because the more bedrooms a home has, more like it wil fetch a higher price. 
* Simple models like this aren't perfect. 
* They do help us to see simple data and simple relationships 
* But--they leave out things like bathrooms, lot size, location, etc. 
* SPLITS: Capture more factors, making a more complex model.
* Model Splits are also called DEEPER trees. 
* It may look like this: 
![Deeper-Tree](https://i.imgur.com/R3ywQsR.png)


* Predict the price by tracing thru the decision tree 
* pick the path (no mater how complex of a tree) by the path which best corresponds to the houses characteristics 
* LEAF: the place where we make the prediction (at the bottom)


# Basic Data Exploration

## Using Pandas
* the purpose is to get familiar with your data 
* Pandas is a library 
* Pandas is an important Data Scientist tool 
* Pandas can be used to explore and manipulate data 
* Pandas is abbreviated as PD
* The command for pandas is: 
```
import pandas as pd 
```

## Data Frame 
* An  important part of Pandas.  
* A data frame holds the type of data most commonly thought of as a table 
* Pandas Dataframe is similar to Excel or SQL table 
* But pandas has some different, powerful methods
* Example:
```
# save filepath to variable for easier access
melbourne_file_path = '../input/melbourne-housing-snapshot/melb_data.csv'
# read the data and store data in DataFrame titled melbourne_data
melbourne_data = pd.read_csv(melbourne_file_path) 
# print a summary of the data in Melbourne data
melbourne_data.describe()
```

## Data Description/Interpretation
* COUNT: how many rows have non-missing values 
* missing data is a big topic (addressed later) 
* MEAN (average)
* STD (Standard Deviation) measurment of how numerically spread out the values are from one another 
* MIN 25% 50% 75% and Max values are from statstics 
* these are prounced "percentile" such as 25% is twenty-fifth percentile 

# Exercises:

### Step 1: Loading Data: 

![Loading Data](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day8-load-data.jpg) 



### Step 2: Review the Data: 
![Table](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/Day8-exercise2.jpg)
