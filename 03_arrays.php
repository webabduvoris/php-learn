<?php
  // Simple array of numbers
// $numbers = [1, 2, 3, 4, 5];

// Simple array of strings
// $colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
// $numbers = [1, 2, 3, 4, 5];

// Outputting values from an array
// echo $numbers[0];
// echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
// var_dump($numbers);

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/
$colors = [
  1 => 'red',
  2 => 'blue',
  5 => 'green',
  8 => 'yellow',
];
echo $colors[2];

$cars = [
  'bmw' => 'BMW M5 Competition',
  'Mercedes' => 'Mercedes G63'
];

echo $cars['bmw'] . ',' . $cars['Mercedes'];


// $hex_color = [
//   'red' => '#FF0000',
//   'blue' => '#0000FF',
//   'gray' => '#808080',
// ];
// var_dump($hex_color);
// echo $hex_color['gray'];

// $person = [
//   'name' => 'John',
//   'email' => 'john@example.com',
//   'phone' => '+998999999999'
// ];
// different ways to output
// extract($person);
// echo "$name, $email, $phone";

// echo $person['name'] . ', ' . $person['email'] . ', ' . $person['phone'];


// $people = [
//   [
//     'name' => 'John',
//     'email' => 'john@example.com',
//     'phone' => '+998999999999'
//   ],
//   [
//     'name' => 'Sancho',
//     'email' => 'sancho@example.com',
//     'phone' => '+998555555555'
//   ],
//   [
//     'name' => 'Alex',
//     'email' => 'alex@example.com',
//     'phone' => '+998777777777'
//   ],
// ];

// echo $people[2]['name'];

// var_dump(json_encode($people))
?>