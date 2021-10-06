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

In HTML, almost all tags have both an opening and closing tag: ```<div></div>```; the closing tag always has a forward slash before the tag name that you are closing. However, there are special instances in HTML called “self-closing tags”, or tags that don’t require both an opening and closing tag before another tag can start.

For example the line-break tag can be written as ```<br> ```or as ```<br />```, but should never be written as ```<br></br>```, since it doesn't contain any content.

In JSX, the rules are a little different. Any JSX element can be written with a self-closing tag, and every element must be closed. The line-break tag, for example, must always be written as ```<br />``` in order to be valid JSX that can be transpiled. A ```<div>```, on the other hand, can be written as ```<div />``` or ```<div></div>```. The difference is that in the first syntax version there is no way to include anything in the ```<div />```. You will see in later challenges that this syntax is useful when rendering React components.

Fix the errors in the code editor so that it is valid JSX and successfully transpiles. Make sure you don't change any of the content - you only need to close tags where they are needed.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/06_learn-about-self-closing-jsx-tags.jsx)



## 07 [Create a Stateless Functional Component](https://www.freecodecamp.org/learn/front-end-development-libraries/react/create-a-stateless-functional-component)


Components are the core of React. Everything in React is a component and here you will learn how to create one.

There are two ways to create a React component. The first way is to use a JavaScript function. Defining a component in this way creates a stateless functional component. The concept of state in an application will be covered in later challenges. For now, think of a stateless component as one that can receive data and render it, but does not manage or track changes to that data. (We'll cover the second way to create a React component in the next challenge.)

To create a component with a function, you simply write a JavaScript function that returns either JSX or null. One important thing to note is that React requires your function name to begin with a capital letter. Here's an example of a stateless functional component that assigns an HTML class in JSX:
```
const DemoComponent = function() {
  return (
    <div className='customClass' />
  );
};
```
After being transpiled, the ```<div>``` will have a CSS class of customClass.

Because a JSX component represents HTML, you could put several components together to create a more complex HTML page. This is one of the key advantages of the component architecture React provides. It allows you to compose your UI from many separate, isolated components. This makes it easier to build and maintain complex user interfaces.

The code editor has a function called MyComponent. Complete this function so it returns a single div element which contains some string of text.

Note: The text is considered a child of the div element, so you will not be able to use a self-closing tag.


[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/07_create-a-stateless-functional-component.jsx)



## 08 [Create a React Component](https://www.freecodecamp.org/learn/front-end-development-libraries/react/create-a-react-component)

The other way to define a React component is with the ES6 class syntax. In the following example, Kitten extends React.Component:
```
class Kitten extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
      <h1>Hi</h1>
    );
  }
}
```
This creates an ES6 class Kitten which extends the React.Component class. So the Kitten class now has access to many useful React features, such as local state and lifecycle hooks. Don't worry if you aren't familiar with these terms yet, they will be covered in greater detail in later challenges. Also notice the Kitten class has a constructor defined within it that calls super(). It uses super() to call the constructor of the parent class, in this case React.Component. The constructor is a special method used during the initialization of objects that are created with the class keyword. It is best practice to call a component's constructor with super, and pass props to both. This makes sure the component is initialized properly. For now, know that it is standard for this code to be included. Soon you will see other uses for the constructor as well as props.

MyComponent is defined in the code editor using class syntax. Finish writing the render method so it returns a div element that contains an h1 with the text Hello React!.

  
[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/08_create-a-react-component.jsx)



## 09 [Create a Component with Composition](https://www.freecodecamp.org/learn/front-end-development-libraries/react/create-a-component-with-composition)
Now we will look at how we can compose multiple React components together. Imagine you are building an app and have created three components: a Navbar, Dashboard, and Footer.

To compose these components together, you could create an App parent component which renders each of these three components as children. To render a component as a child in a React component, you include the component name written as a custom HTML tag in the JSX. For example, in the render method you could write:
```
return (
 <App>
  <Navbar />
  <Dashboard />
  <Footer />
 </App>
)
```
When React encounters a custom HTML tag that references another component (a component name wrapped in < /> like in this example), it renders the markup for that component in the location of the tag. This should illustrate the parent/child relationship between the App component and the Navbar, Dashboard, and Footer.

In the code editor, there is a simple functional component called ChildComponent and a class component called ParentComponent. Compose the two together by rendering the ChildComponent within the ParentComponent. Make sure to close the ChildComponent tag with a forward slash.

Note: ChildComponent is defined with an ES6 arrow function because this is a very common practice when using React. However, know that this is just a function. If you aren't familiar with the arrow function syntax, please refer to the JavaScript section.

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/09_create-a-component-with-composition.jsx)



## 10 [Use React to Render Nested Components](https://www.freecodecamp.org/learn/front-end-development-libraries/react/use-react-to-render-nested-components)

The last challenge showed a simple way to compose two components, but there are many different ways you can compose components with React.

Component composition is one of React's powerful features. When you work with React, it is important to start thinking about your user interface in terms of components like the App example in the last challenge. You break down your UI into its basic building blocks, and those pieces become the components. This helps to separate the code responsible for the UI from the code responsible for handling your application logic. It can greatly simplify the development and maintenance of complex projects.

There are two functional components defined in the code editor, called TypesOfFruit and Fruits. Take the TypesOfFruit component and compose it, or nest it, within the Fruits component. Then take the Fruits component and nest it within the TypesOfFood component. The result should be a child component, nested within a parent component, which is nested within a parent component of its own!

[My Code](https://github.com/EO4wellness/T-I-L/blob/main/FrontEnd/freeCodeCamp/exercises/React/10_use-react-to-render-nested-components.jsx)



## 11 [Compose React Components](https://www.freecodecamp.org/learn/front-end-development-libraries/react/compose-react-components)

As the challenges continue to use more complex compositions with React components and JSX, there is one important point to note. Rendering ES6 style class components within other components is no different than rendering the simple components you used in the last few challenges. You can render JSX elements, stateless functional components, and ES6 class components within other components.

In the code editor, the TypesOfFood component is already rendering a component called Vegetables. Also, there is the Fruits component from the last challenge.

Nest two components inside of Fruits — first NonCitrus, and then Citrus. Both of these components are provided for you behind the scenes. Next, nest the Fruits class component into the TypesOfFood component, below the h1 header and above Vegetables. The result should be a series of nested components, which uses two different component types.

[My Code]()



## 12 [Render a Class Component to the DOM](https://www.freecodecamp.org/learn/front-end-development-libraries/react/render-a-class-component-to-the-dom)

You may remember using the ReactDOM API in an earlier challenge to render JSX elements to the DOM. The process for rendering React components will look very similar. The past few challenges focused on components and composition, so the rendering was done for you behind the scenes. However, none of the React code you write will render to the DOM without making a call to the ReactDOM API.

Here's a refresher on the syntax: ReactDOM.render(componentToRender, targetNode). The first argument is the React component that you want to render. The second argument is the DOM node that you want to render that component within.

React components are passed into ReactDOM.render() a little differently than JSX elements. For JSX elements, you pass in the name of the element that you want to render. However, for React components, you need to use the same syntax as if you were rendering a nested component, for example ReactDOM.render(<ComponentToRender />, targetNode). You use this syntax for both ES6 class components and functional components.

Both the Fruits and Vegetables components are defined for you behind the scenes. Render both components as children of the TypesOfFood component, then render TypesOfFood to the DOM. There is a div with id='challenge-node' available for you to use.

[My Code]()



## 13 [Write a React Component from Scratch](https://www.freecodecamp.org/learn/front-end-development-libraries/react/write-a-react-component-from-scratch)

Now that you've learned the basics of JSX and React components, it's time to write a component on your own. React components are the core building blocks of React applications so it's important to become very familiar with writing them. Remember, a typical React component is an ES6 class which extends React.Component. It has a render method that returns HTML (from JSX) or null. This is the basic form of a React component. Once you understand this well, you will be prepared to start building more complex React projects.

Define a class MyComponent that extends React.Component. Its render method should return a div that contains an h1 tag with the text: My First React Component! in it. Use this text exactly, the case and punctuation matter. Make sure to call the constructor for your component, too.

Render this component to the DOM using ReactDOM.render(). There is a div with id='challenge-node' available for you to use.

[My Code]()



## 14 [Pass Props to a Stateless Functional Component](https://www.freecodecamp.org/learn/front-end-development-libraries/react/pass-props-to-a-stateless-functional-component)

The previous challenges covered a lot about creating and composing JSX elements, functional components, and ES6 style class components in React. With this foundation, it's time to look at another feature very common in React: props. In React, you can pass props, or properties, to child components. Say you have an App component which renders a child component called Welcome which is a stateless functional component. You can pass Welcome a user property by writing:
```
<App>
  <Welcome user='Mark' />
</App>
```
You use custom HTML attributes created by you and supported by React to be passed to the component. In this case, the created property user is passed to the component Welcome. Since Welcome is a stateless functional component, it has access to this value like so:
```
const Welcome = (props) => <h1>Hello, {props.user}!</h1>
```
It is standard to call this value props and when dealing with stateless functional components, you basically consider it as an argument to a function which returns JSX. You can access the value of the argument in the function body. With class components, you will see this is a little different.

There are Calendar and CurrentDate components in the code editor. When rendering CurrentDate from the Calendar component, pass in a property of date assigned to the current date from JavaScript's Date object. Then access this prop in the CurrentDate component, showing its value within the p tags. Note that for prop values to be evaluated as JavaScript, they must be enclosed in curly brackets, for instance date={Date()}.


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
