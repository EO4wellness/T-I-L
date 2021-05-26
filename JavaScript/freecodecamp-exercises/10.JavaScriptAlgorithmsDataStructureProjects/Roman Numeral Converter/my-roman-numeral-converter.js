function convertToRoman(num) {
var digits = String(+num).split(""),
key = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM",
"","X","XX","XXX","XL","L","LX","LXX","LXXX","XC",
"","I","II","III","IV","V","VI","VII","VIII","IX"],
roman_num = "",
i = 3;
while (i--)
roman_num = (key[+digits.pop() + (i * 10)] || "") + roman_num;
return Array(+digits.join("") + 1).join("M") + roman_num;
}


convertToRoman(36);