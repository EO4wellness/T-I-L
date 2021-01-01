# Increment and Decrement in PHP 
# The Increment operators are used to increment a variable’s value. 
# The decrement operators are used to decrement a variables value. 
# 
# $x++; // equivalent to $x = $x+1;
# $x--; // equivalent to $x = $x-1;
# 
# Increment and decrement operators either precede or follow a variable.
# 
# $x++; // post-increment
# $x--; // post-decrement
# ++$x; // pre-increment
# --$x; // pre-decrement
# The difference is that the post-increment returns the original value before it changes the variable, while the pre-increment changes the variable first and then returns the value.
# 
# Example:
# $a = 2; $b = $a++; // $a=3, $b=2
# $a = 2; $b = ++$a; // $a=3, $b=3
# 
# The increment operators are used to increment a variable’s value. 
# 
<?php  
$num = 18; 
$num--;
echo $num; //17 
?>
