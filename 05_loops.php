<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "$x <br>";
}

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;
while ($x <= 15) {
  echo "Number $x <br>";
  $x = $x + 1;
}

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

$x = 1;

do {
  echo "Number: $x <br>";
  $x++;
} while ($x <= 5);

/* ---------- For Loop ---------- */
$posts = ['Post One', 'Post Two', 'Post Three'];

for ($x = 0; $x < count($posts); $x++) {
  echo $posts[$x];
}

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $index => $x) {
  // echo "Number: $x <br>";
  echo "$index - $x <br>";
}

// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

foreach ($person as $key => $value) {
  echo "$key - $value <br>";
}
