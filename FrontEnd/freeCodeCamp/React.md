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



## 04 [Render HTML Elements to the DOM](https://www.freecodecamp.org/learn/front-end-development-libraries/react/render-html-elements-to-the-dom)

So far, you've learned that JSX is a convenient tool to write readable HTML within JavaScript. With React, we can render this JSX directly to the HTML DOM using React's rendering API known as ReactDOM.

ReactDOM offers a simple method to render React elements to the DOM which looks like this: ReactDOM.render(componentToRender, targetNode), where the first argument is the React element or component that you want to render, and the second argument is the DOM node that you want to render the component to.

As you would expect, ReactDOM.render() must be called after the JSX element declarations, just like how you must declare variables before using them.

The code editor has a simple JSX component. Use the ReactDOM.render() method to render this component to the page. You can pass defined JSX elements directly in as the first argument and use document.getElementById() to select the DOM node to render them to. There is a div with id='challenge-node' available for you to use. Make sure you don't change the JSX constant.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/04_render-html-elements-to-the-dom.jsx.jsx)



## 05 [Define an HTML Class in JSX](https://www.freecodecamp.org/learn/front-end-development-libraries/react/define-an-html-class-in-jsx)
Now that you're getting comfortable writing JSX, you may be wondering how it differs from HTML.

So far, it may seem that HTML and JSX are exactly the same.

One key difference in JSX is that you can no longer use the word class to define HTML classes. This is because class is a reserved word in JavaScript. Instead, JSX uses className.

In fact, the naming convention for all HTML attributes and event references in JSX become camelCase. For example, a click event in JSX is onClick, instead of onclick. Likewise, onchange becomes onChange. While this is a subtle difference, it is an important one to keep in mind moving forward.

Apply a class of myDiv to the div provided in the JSX code.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/05_define-an-html-class-in-jsx.jsx)

with this lesson, the only thing I didn't understand is the syntax.  it was pretty much assumed we know the syntax.  so it turns out the syntax is pretty much what is expected:  myClass="camelCaseName" 

## 06 [Learn About Self-Closing JSX Tags](https://www.freecodecamp.org/learn/front-end-development-libraries/react/learn-about-self-closing-jsx-tags)



So far, you’ve seen how JSX differs from HTML in a key way with the use of className vs. class for defining HTML classes.

Another important way in which JSX differs from HTML is in the idea of the self-closing tag.

In HTML, almost all tags have both an opening and closing tag: <div></div>; the closing tag always has a forward slash before the tag name that you are closing. However, there are special instances in HTML called “self-closing tags”, or tags that don’t require both an opening and closing tag before another tag can start.

For example the line-break tag can be written as <br> or as <br />, but should never be written as <br></br>, since it doesn't contain any content.

In JSX, the rules are a little different. Any JSX element can be written with a self-closing tag, and every element must be closed. The line-break tag, for example, must always be written as <br /> in order to be valid JSX that can be transpiled. A <div>, on the other hand, can be written as <div /> or <div></div>. The difference is that in the first syntax version there is no way to include anything in the <div />. You will see in later challenges that this syntax is useful when rendering React components.

Fix the errors in the code editor so that it is valid JSX and successfully transpiles. Make sure you don't change any of the content - you only need to close tags where they are needed.

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
