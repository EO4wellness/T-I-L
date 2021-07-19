function Dog(name) {
  this.name = name;
}

Dog.prototype = {
  numLegs: 2, 
  eat: function() {
    console.log("Kibbles and Bits");
  },
  describe: function() {
    console.log("My name is " + this.name);
  }
};