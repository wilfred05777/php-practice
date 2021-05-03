<?php 
// $greeting = "Hellow, World";

// require 'index.view.php';


// arrays
$names = [
    'Julian Manuel',
    'Bingo',
    'Maya'
];
sort($names);
// foreach($names as $name){
//     echo $name .'<br>';
// }

require 'index.view.php';


$animals = [
    'Cat', 
    'Dog',
    'Tiger',
    'Lion',
    'Wolf'
];
sort($animals);
require 'animalArrays.php';

// Assosiativ Array
$person = [
    'name' => 'Wilfred',
    'age' => 34,
    'career' => 'Web Developer',
   
];
// push to an array
$person['class'] ='S rank'; 

// var_dump($person);
// die(var_dump($person));

require 'assosiativeArray.php';