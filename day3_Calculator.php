<?php
Function Add($val1 ,$val2){
   echo "Addition of two Num: " . ($val1 + $val2);
    
}
Function Substraction($val1 ,$val2){
   echo "Substraction of two Num: " . ($val1 - $val2);
    
}
Function Multiplication($val1 ,$val2){
  echo "Multiplication of two Num: " . ($val1 * $val2);
   
}
Function Division($val1 ,$val2){
   if($val2==0){
    echo "Error";
   }
   else{
    echo "Division of two Num: " . ($val1 / $val2);
   }
    
}
$val1 = (float)readline("Enter first number: ");    
$val2 = (float)readline("Enter second number: ");    
$Operator = readline("Enter operator (+, -, *, /): "); 
switch ($Operator) {
    case "+":
        Add($val1 ,$val2);
        break;
    case "-":
        Substraction($val1 ,$val2);
        break; 
    case "*":
        Multiplication($val1 ,$val2);
        break;
    case "/":
        Division($val1 ,$val2);
        break;
    default:
    echo "Error: Wrong Operator";
}

?>