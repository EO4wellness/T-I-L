function rot13(str) {
var abc = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F', 'G','H','I','J','K','L','M'];
var decodedArr = [];
for (let i=0; i<str.length; i++) {
  var newArr = abc.indexOf(str[i]) + 13;
  if(abc.indexOf(str[i]) == -1) {
  decodedArr.push(str[i]);
} else {
  decodedArr.push(abc[newArr]);
 }
}
return decodedArr.join("");
}
rot13("SERR PBQR PNZC");