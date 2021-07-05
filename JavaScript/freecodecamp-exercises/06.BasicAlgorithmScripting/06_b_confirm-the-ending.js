function confirmEnding(str, target) {
  let re = new RegExp(target + "$", "i");

  return re.test(str);
}

confirmEnding("Bastian", "n");