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

// $age = 78;
// if($age >= 79) {
//   echo "Year true you can continue";
// } else{
//   echo "Ooops it's wrong";
// }


// $time = 20;
// echo $time;

// if($time < 8) {
//   echo "GM";
// } elseif($time < 15) {
//   echo "Good afternoon";
// } else {
//   echo "Good evening";
// }


// $posts = ['Post 1'];

// if(!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo "No posts";
// }

// $first_post = !empty($posts) ? $posts[0] : 'No posts';
// $first_post = $posts[0] ?? null;
// echo $first_post; 


// $fav_color = 'yellow';
// switch($fav_color) {
//   case 'red': 
//     echo 'Your favourite color is red';
//     break;
//   case 'green':
//     echo 'Your favourite color is green';
//     break;
//   case 'blue':
//     echo 'Your favourite color is blue';
//     break;
//   case 'gray':
//     echo 'Your favourite color is gray';
//     break;
//   default:
//     echo 'Your favourite color is not matched here';
// }

$news = ['US News', 'Ru News', 'World News'];


// if(!empty($news)) {
//   echo "Welcome to " . $news[2];
// } else {
//   echo 'No news available';
// }

// $news = !empty($news) ? $news[2] : 'No news available';
$news = $news[2] ?? 'No news available';
echo $news;
?>