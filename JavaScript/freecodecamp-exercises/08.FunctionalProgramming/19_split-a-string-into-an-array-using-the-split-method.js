function splitify(str) {
  // Only change code below this line

  return str.split(/\W/);

  // Only change code above this line
}
splitify("Hello World,I-am code");
// '/\W/'	Matches any non-word character. This includes spaces and punctuation, 
// but not underscores. It’s equivalent to /[^A-Za-z0-9_]/.
// more documenation on this feature: 
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions
