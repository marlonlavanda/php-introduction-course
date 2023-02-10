<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/

// $y = 10;
// function registerUser($email)
// {
//   // global allows to use a global variable iside the function scope
//   // global $y;
//   echo "$email regisered";
// }

// registerUser("marlon@lavandaindustries.com");

function sum($n1, $n2)
{
  return $n1 + $n2;
}

// echo sum(3, 6);

// Anonymus function
$substract = function ($n1, $n2) {
  return $n1 - $n2;
};

// echo $substract(11, 2);

// Short way to declare an Anonymus function
$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(3, 3);
