const source = [1,2,3,4,5,6,7,8,9,10];
function removeFirstTwo(list) {
  // Only change code below this line
  "use strict";
  const [a, b, ...arr] = list;
  // Only change code above this line
  return arr;
}
const arr = removeFirstTwo(source);