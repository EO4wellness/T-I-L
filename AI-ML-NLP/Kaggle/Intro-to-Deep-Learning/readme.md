# Introduction to Deep Learning 

## Lesson 1: A Single Neuron
* we will use Keras and TensorFlow 
* overview: 
    - creating fully-connected Neural network architecture 
    - apply Neural Networks to 2 classic ML problems
      1. Regression
      2. Classification 
    - train Neural Networks with Stochastic Gradient descent
    - improve performance using techniques such as:
       1. Dropout
       2. Batch normalization
       3. Other techniques 
### What is Deep Learning? 
* DL is an approach to machine learning 
* DL is characterized by Deep stacks of computations
* Neural Networks are powerful and Scalable
* Neural Networks are composed of Neurons
* each Neuron performs a simple computations 
* Use Cases:
- NLP (Natural Laungage Processing) 
- Image Recognition 
- gaming

### The Linear Unit
* An individual Neuron is the basic building block of all Neural Networks
* the linear unit 
``` y = we + b ```

![Linear Unit image](https://github.com/EO4wellness/T-I-L/blob/main/AI-ML-NLP/Kaggle/Images/mfOlDR6.png)


* the INPUT is x
* w is the weight
* w is multiplied by x
* this is how a model "learns"
* the models weights are adjusted to "learn"
* b is a specific weight called the bias
* a bias doesn't have any specific input value associated with it 
``` 1 * b = b```
* a bias allows for modification independently of inputs
* y is the value the Neuron outputs
* Neuron activation:  
```
y = w * x + b

or as a formula that is:

y=we + b
```
* this is also the maths equation for a line 

![Example](https://i.imgur.com/yjsfFvY.png)

Example with 3 inputs: 

![Exaple](https://i.imgur.com/vyXSnlZ.png)

Math Formula: 

The formula for this neuron would be y=w0x0+w1x1+w2x2+b. A linear unit with two inputs will fit a plane, and a unit with more inputs than that will fit a hyperplane.

```
from tensorflow import keras
from tensorflow.keras import layers

# Create a network with 1 linear unit
model = keras.Sequential([
    layers.Dense(units=1, input_shape=[3])
])

```


## Lesson 2: Deep Neural Networks

## Lesson 3: Stochastic Gradient

## Lesson 4: Overfitting  and  Underfitting

## Lesson 5: Dropout and Batch Normalivation

## Lesson 6: Binary Classification 

Detecting Higgs Boston
