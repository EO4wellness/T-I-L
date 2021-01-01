#
# The modulus operator, represented by the % sign, returns the remainder of the division of the first operand by the second operand: 
#

<?php
    $x = 14;
    $y = 3;
    echo $x % $y; //2
    
    //If you use floating point numbers with the modulus operator, they will be converted to integers before the operation.
    
    $x = 14.0014;
    $y = 3.003;
    echo $x % $y; //2
    
?>
