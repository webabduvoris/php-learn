<?php
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// $news = ['first Post', 'last Post', 'second Post', 'third Post'];
// for($x = 0; $x <= count($news); $x++) {
//   echo "News $x <br>"; 
// }


// for($x = 0; $x <= 10; $x++) {
//   echo 'Number' . $x . '<br>';
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;
// while($x <= 15){
//   echo 'Number' . $x . '<br>';
//   $x++;
// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;
// do{
//   echo 'Number' . $x . '<br>';
//   $x++;
// } while($x <= 5)



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array
$posts = ['first Post', 'last Post', 'second Post', 'third Post'];

// for($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }


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


// foreach($posts as $index => $post) {
//   echo $index . ' - ' . $post . '<br>';
// }

// foreach ($people as $person) {
//   echo "Person Details:<br>";
//   foreach ($person as $key => $value) {
//     echo "- $key: $value<br>";
//   }
// }
?>