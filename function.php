<?php
echo '<pre>';

echo '1. Создать функцию принимающую массив произвольной вложенности и определяющий 
любой элемент номер которого передан параметром во всех вложенных массивах.'.'<br>';
$arr = [
    1=>'a1',
    2=>'b1',
    3=>[
        1=>'b2',
        2=>'c2',
        3=>[
            1=>'g3',
            2=>'h3',
            3=>'z3',
        ],
        4=>'a2',
    ],
    5=>[
        1=>'h2',
        2=>'k2',
    ],
    6=>'l1',
    7=>[
        2=>'g2',
    ],
];
$ind = 2;//номер для вложенных массивов

function arrFindEl (array $arr, $ind) {
    foreach ($arr as $array) {
        if (is_array($array)) {
            if (isset($array[$ind])) {
                var_dump($array[$ind]);
            }
            arrFindEl ($array, $ind);
        }
    }
}


$result = arrFindEl ($arr, $ind);


echo '<br>'.'2. Создать функцию которая считает все буквы b в переданной строке,
в случае если передается не строка функция должна возвращать false' . '<br>';

$string = 'bbchbklbvcbbtbdgbhjbkkbfbBBBB';
$letter = 'b';
//$string = 123;
function strCount ($string, $letter) {
    if (is_string($string)==true){

        $a = substr_count(strtolower($string), $letter);
        return $a;
    } else {
        return (false);
    }
}
$res = strCount ($string, $letter);
if ($res == false) {
    var_dump ($res);
}
else {
    echo '<br>'.'количество букв b (во всех регистрах) в переданной строке '.($res).'<br>';
}


echo '<br>'. '3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины' . '<br>';

$arr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        [1,
            2,
            3,
            4,
            5,
        ],
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];

function arrRecursiveSum (array $arr)
{
    $result = 0;
    foreach ($arr as $value) {
        if (is_array ($value)) {
            $result += arrRecursiveSum($value);
        } else {
            $result += $value;
        }
    }
    return $result;
}
$sum =  arrRecursiveSum ($arr);
echo '<br>'.'Сумма элементов массива '. $sum .'<br>';


echo '<br>'.'4. Создать функцию которая определит сколько квадратов меньшего размера 
можно вписать в квадрат большего размера размер возвращать в float'.'<br>';

$a = 7;
$b = 2;
function sCount ($a, $b) {
    $sa = $a * $a;
    $sb = $b * $b;
    $res = (round ($sa / $sb));
    return $res;
}
$c = sCount ($a, $b);
var_dump($c);

echo '</pre>';
?>