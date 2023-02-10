<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

$numbers = [1, 2, 3, 4, 5, 6];
$fruits = array('apple', 'orange', 'banana');

// var_dump($fruits);
// echo $fruits[1];
// print_r($numbers);

$colors = [
  1 => 'red',
  2 => 'blue'
];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['blue'];

$person = [
  'first_name' => 'Marlon',
  'last_name' => 'Lavanda',
  'email' => 'marlon@lavandaindustries.com',
  'age' => 28,
];

$people = [
  [
    'first_name' => 'Fanny',
    'last_name' => 'Romero',
    'email' => 'fanny@lavandaindustries.com',
    'age' => 28,
  ],
  [
    'first_name' => 'Marlon',
    'last_name' => 'Lavanda',
    'email' => 'marlon@lavandaindustries.com',
    'age' => 61,
  ],
  [
    'first_name' => 'Jordan',
    'last_name' => 'Lavanda',
    'email' => 'jordan@lavandaindustries.com',
    'age' => 26,
  ],
  [
    'first_name' => 'Andrea',
    'last_name' => 'Lavanda',
    'email' => 'andrea@lavandaindustries.com',
    'age' => 21,
  ],
];

// echo $people[0]['email'];
// json_emcode transform an array of arrays into an array of objects
var_dump(json_encode($people));
