<?php
$a = random_int (0,100);
$b = random_int (0,100);
$c = ($a + $b) ;
echo "$a + $b = ". $c ;

echo "<br>";

function generateRandomString($length = 10):string {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLenght = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $lenght; $i++) {
        $randomString .= $characters[rand(0, $charactersLenght -1)];
    }
    return $randomString;
}

$str_one = generateRandomString(0);
$str_two = generateRandomString(9);

echo "<br>";


echo "$str_one + $str_two = ". $str_one.$str_two;


$str_one = 'qwe';
$str_two = 'srsr';

echo "$str_one + $str_two = ". $str_one.$str_two;

$dog = "Шарик";
$cat = "Барсик";
$fish = "Немо";

$type_animals = ['dog','cat','fish','other'];
function chosenanimal ($type_chosen = '') {
    if ($type_chosen == 'dog')
        echo 'Шарик';
    if ($type_chosen =='cat')
        echo 'Барсик';
    if ($type_chosen == 'fish')
        echo 'Немо';
    if (($type_chosen == 'fish' || $type_chosen == 'cat' || $type_chosen == 'dog') === false)
     ## if (in_array($type_chosen, $type_animals) === false)
        echo 'Другое';
}
// $type_chosen = 

echo "<br>";

echo chosenanimal($type_animals[rand(0, count($type_animals) - 1)]);

echo "<br>";


