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
