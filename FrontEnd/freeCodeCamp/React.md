# [React](https://www.freecodecamp.org/learn/front-end-development-libraries/#react)
* There are 47 units of study in this segment 
* React is a popular JavaScript library for building reusable, component-driven user interfaces for web pages or applications.
* React combines HTML with JavaScript functionality into its own markup language called JSX. 
* React also makes it easy to manage the flow of data throughout the application.
* In this course, you'll learn how to create different React components, 
* manage data in the form of state props, 
* use different lifecycle methods like componentDidMount, and much more.


## 01 [Create a Simple JSX Element](https://www.freecodecamp.org/learn/front-end-development-libraries/react/create-a-simple-jsx-element)

React is an Open Source view library created and maintained by Facebook. It's a great tool to render the User Interface (UI) of modern web applications.

React uses a syntax extension of JavaScript called JSX that allows you to write HTML directly within JavaScript. This has several benefits. It lets you use the full programmatic power of JavaScript within HTML, and helps to keep your code readable. For the most part, JSX is similar to the HTML that you have already learned, however there are a few key differences that will be covered throughout these challenges.

For instance, because JSX is a syntactic extension of JavaScript, you can actually write JavaScript directly within JSX. To do this, you simply include the code you want to be treated as JavaScript within curly braces: { 'this is treated as JavaScript code' }. Keep this in mind, since it's used in several future challenges.

However, because JSX is not valid JavaScript, JSX code must be compiled into JavaScript. The transpiler Babel is a popular tool for this process. For your convenience, it's already added behind the scenes for these challenges. If you happen to write syntactically invalid JSX, you will see the first test in these challenges fail.

It's worth noting that under the hood the challenges are calling ReactDOM.render(JSX, document.getElementById('root')). This function call is what places your JSX into React's own lightweight representation of the DOM. React then uses snapshots of its own DOM to optimize updating only specific parts of the actual DOM.

The current code uses JSX to assign a div element to the constant JSX. Replace the div with an h1 element and add the text Hello JSX! inside it.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/01_create-a-simple-jsx-element.jsx)



## 02 [Create a Complex JSX Element](https://www.freecodecamp.org/learn/front-end-development-libraries/react/create-a-complex-jsx-element)


The last challenge was a simple example of JSX, but JSX can represent more complex HTML as well.

One important thing to know about nested JSX is that it must return a single element.

This one parent element would wrap all of the other levels of nested elements.

For instance, several JSX elements written as siblings with no parent wrapper element will not transpile.

Here's an example:

Valid JSX:
```
<div>
  <p>Paragraph One</p>
  <p>Paragraph Two</p>
  <p>Paragraph Three</p>
</div>
```
Invalid JSX:
```
<p>Paragraph One</p>
<p>Paragraph Two</p>
<p>Paragraph Three</p>
```
Define a new constant JSX that renders a div which contains the following elements in order:

An h1, a p, and an unordered list that contains three li items. You can include any text you want within each element.

Note: When rendering multiple elements like this, you can wrap them all in parentheses, but it's not strictly required. Also notice this challenge uses a div tag to wrap all the child elements within a single parent element. If you remove the div, the JSX will no longer transpile. Keep this in mind, since it will also apply when you return JSX elements in React components.


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/02_create-a-complex-jsx-element.jsx)



## 03 [Add Comments in JSX](https://www.freecodecamp.org/learn/front-end-development-libraries/react/add-comments-in-jsx)

JSX is a syntax that gets compiled into valid JavaScript. Sometimes, for readability, you might need to add comments to your code. Like most programming languages, JSX has its own way to do this.

To put comments inside JSX, you use the syntax {/* */} to wrap around the comment text.

The code editor has a JSX element similar to what you created in the last challenge. Add a comment somewhere within the provided div element, without modifying the existing h1 or p elements.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/03_add-comments-in-jsx.jsx)



## 04 [Render HTML Elements to the DOM]()


[My Code]()



## 05 [Define an HTML Class in JSX]()


[My Code]()



## 06 [Learn About Self-Closing JSX Tags]()


[My Code]()



## 07 [Create a Stateless Functional Component]()


[My Code]()



## 08 [Create a React Component]()


[My Code]()



## 09 [Create a Component with Composition]()


[My Code]()



## 10 [Use React to Render Nested Components]()


[My Code]()



## 11 [Compose React Components]()


[My Code]()



## 12 [Render a Class Component to the DOM]()


[My Code]()



## 13 [Write a React Component from Scratch]()


[My Code]()



## 14 [Pass Props to a Stateless Functional Component]()


[My Code]()



## 15 [Pass an Array as Props]()


[My Code]()



## 16 [Use Default Props]()


[My Code]()



## 17 [Override Default Props]()


[My Code]()



## 18 [Use PropTypes to Define the Props You Expect]()


[My Code]()



## 19 [Access Props Using this.props]()


[My Code]()



## 20 [Review Using Props with Stateless Functional Components]()


[My Code]()



## 21 [Create a Stateful Component]()


[My Code]()



## 22 [Render State in the User Interface]()


[My Code]()



## 23 [Render State in the User Interface Another Way]()


[My Code]()



## 24 [Set State with this.setState]()


[My Code]()



## 25 [Bind 'this' to a Class Method]()


[My Code]()



## 26 [Use State to Toggle an Element]()


[My Code]()



## 27 [Write a Simple Counter]()


[My Code]()



## 28 [Create a Controlled Input]()


[My Code]()



## 29 [Create a Controlled Form]()


[My Code]()



## 30 [Pass State as Props to Child Components]()


[My Code]()



## 31 [Pass a Callback as Props]()


[My Code]()



## 32 [Use the Lifecycle Method componentWillMount]()


[My Code]()



## 33 [Use the Lifecycle Method componentDidMount]()


[My Code]()



## 34 [Add Event Listeners]()


[My Code]()



## 35 [Optimize Re-Renders with shouldComponentUpdate]()


[My Code]()



## 36 [Introducing Inline Styles]()


[My Code]()



## 37 [Add Inline Styles in React]()


[My Code]()



## 38 [Use Advanced JavaScript in React Render Method]()


[My Code]()


## 39 [Render with an If-Else Condition]()


[My Code]()


## 40 [Use && for a More Concise Conditional]()


[My Code]()


## 41 [Use a Ternary Expression for Conditional Rendering]()


[My Code]()


## 42 [Render Conditionally from Props]()


[My Code]()


## 43 [Change Inline CSS Conditionally Based on Component State]()


[My Code]()


## 44 [Use Array.map() to Dynamically Render Elements]()

[My Code]()

## 45 [Give Sibling Elements a Unique Key Attribute]()


[My Code]()

## 46 [Use Array.filter() to Dynamically Filter an Array]()

[My Code]()

## 47 [Render React on the Server with renderToString](https://www.freecodecamp.org/learn/front-end-development-libraries/react/render-react-on-the-server-with-rendertostring)


[My Code]()
