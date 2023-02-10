<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$t = date("H");

// if ($t < 12) {
//   echo "Good Morning";
// } elseif ($t < 17) {
//   echo "Good Afternoon";
// } else {
//   echo "Good Evening";
// }

$posts = ["First Post"];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo "No posts";
// }

// $frist_post = !empty($posts) ? $posts[0] : "No posts";
$frist_post = $posts[0] ?? null; // this does the same as above

// echo $frist_post;

$fac_color = "yellow";

switch ($fac_color) {
  case "red":
    echo "Your favourite color is red";
    break;
  case "blue":
    echo "Your favourite color is blue";
    break;
  case "green":
    echo "Your favourite color is green";
    break;
  default:
    echo "Your favourite color is not red, green or blue";
}
