function telephoneCheck(str) {
 var phoNum = /^(1\s?)?(\(\d{3}\)|\d{3})[\s\-]?\d{3}[\s\-]?\d{4}$/;
 console.log(phoNum.test(str));
 return phoNum.test(str);
};

telephoneCheck("555-555-5555");