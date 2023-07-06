<?php
$fruits = ['apple', 'banana', 'orange', 'melon', 'limon'];
// unset($fruits[0]);
// array_shift($fruits);
// print_r($fruits);
// var_dump($fruits);
// Get length
// echo count($fruits);


// Search array
// var_dump(in_array('apple', $fruits));

// Add to array
// $fruits[] = 'grape';
// array_push($fruits, 'watermelon', 'strawberry');

// array_unshift($fruits, 'coconut');

// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[1]);


// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);


// Spread operator
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);


// Combine keys and values
$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'juice'];
$c = array_combine($a, $b);
// print_r($c);


// Keys
$keys = array_keys($c);
print_r($keys);

// Flipped 
$flipped = array_flip($c);
// print_r($flipped);

// range
$numbers = range(1, 30);
// print_r($numbers);


$newNumbers = array_map(function($number){
  return "Number $number";
}, $numbers);
// print_r($newNumbers);


// $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
// print_r($lessThan10);


$lessThan10 = array_filter($numbers, function($number) {
  return $number <= 10;
});

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

print_r($sum);






?>