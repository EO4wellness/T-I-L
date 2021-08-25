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

my lesson 1 notebook: https://www.kaggle.com/eo4wellness/exercise-a-single-neuron 

## Lesson 2: Deep Neural Networks
* a key concept is modularity 
* modularity:  building up a complex network from simpler (but functional) 
 units

### Layers
* Neurons are organized into layers
* dense layer: collection of linear units with a common set of inputs

![dense layer image](https://i.imgur.com/2MA4iMV.png)

* transformation of inputs
* in Keras a layer is very general 
* convolution
* recurrent

### Activation Function
* 2 dense layers dont perform any better than 1
* our models needs something to move us from linear planes
* we need nonlinear 
* without activation functions: 
   -neural Networks can only learn linear relationships 
   - we also need to fit curves

![Image of non linear relationship(https://i.imgur.com/OLSUEYT.png)

* activations: eachblayers outputs
* activation function: 
 A function where we apply each layers outputs

Most common: rectifier function ```max(0,x)```

Rectifier function has a line with the "nevative part" rectified to zero

The net result is to bend the data
Bent data is not linear

ReLU: rectified linear unit

Applying a ReLU activation to a linear unit means the output becomes max(0, w * x + b)

![Image to visualize this](https://i.imgur.com/aeIyAlF.png)

![Image](https://i.imgur.com/eFry7Yu.png)

### StackingDense Layers
Now we increased the complexity by stacking.  Here is an image to visualize this: 

![Image](https://i.imgur.com/Y5iwFQZ.png)

Illustration of a FULLY CONNECTED network of dense layers 

The layers before the output layer are sometimes called hidden since we never see their outputs directly.

Now, notice that the final (output) layer is a linear unit (meaning, no activation function). That makes this network appropriate to a regression task, where we are trying to predict some arbitrary numeric value. Other tasks (like classification) might require an activation function on the output.


Stacking Dense Layers

Now that we have some nonlinearity, let's see how we can stack layers to get complex data transformations.
An input layer, two hidden layers, and a final linear layer.
A stack of dense layers makes a "fully-connected" network.

The layers before the output layer are sometimes called hidden since we never see their outputs directly.

Now, notice that the final (output) layer is a linear unit (meaning, no activation function). That makes this network appropriate to a regression task, where we are trying to predict some arbitrary numeric value. Other tasks (like classification) might require an activation function on the output.
Building Sequential Models

The Sequential model we've been using will connect together a list of layers in order from first to last: the first layer gets the input, the last layer produces the output. This creates the model in the figure above:

from tensorflow import keras
from tensorflow.keras import layers

Building Sequential Models
The sequential model = keras.Sequential([
    # the hidden ReLU layers
    layers.Dense(units=4, activation='relu', input_shape=[2]),
    layers.Dense(units=3, activation='relu'),
    # the linear output layer 
    layers.Dense(units=1),
])

Be sure to pass all the layers together in a list, like [layer, layer, layer, ...], instead of as separate arguments. To add an activation function to a layer, just give its name in the activation argument.

Alternatives to ReLU

There is a whole family of variants of the 'relu' activation -- 'elu', 'selu', and 'swish', among others -- all of which you can use in Keras. Sometimes one activation will perform better than another on a given task, so you could consider experimenting with activations as you develop a model. The ReLU activation tends to do well on most problems, so it's a good one to start with.

Let's look at the graphs of some of these. Change the activation from 'relu' to one of the others named above. Then run the cell to see the graph. (Check out the documentation for more ideas.)

my lesson 2 workbook: https://www.kaggle.com/eo4wellness/exercise-deep-neural-networks

## Lesson 3: Stochastic Gradient

## Lesson 4: Overfitting  and  Underfitting

## Lesson 5: Dropout and Batch Normalivation

## Lesson 6: Binary Classification 

[Detecting Higgs Boston](https://www.kaggle.com/ryanholbrook/detecting-the-higgs-boson-with-tpus)
