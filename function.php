<?php
echo '<pre>';

echo 'Создать функцию принимающую массив произвольной вложенности и определяющий 
любой элемент номер которого передан параметром во всех вложенных массивах.'.'<br>';

/*$arr = [1=>'a', 2=>'b', 2=>'c'];
$ind = 2;
function arrFindEl (array $arr, $ind){
    foreach ($arr as $key => $value){
        if ($key == $ind){
            var_dump($value);
            var_dump($key);
            return($value);
        }
    }
}
$result = arrFindEl ($arr, $ind);
var_dump($result);*/

/*$arr = [
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
    5=>'c',
];
$ind = 2;
function arrFindEl (array $arr, $ind){
    $r_arr = [];
    foreach ($arr as $key => $value){
        if (is_array($value)){
            foreach ($value as $key_in => $val){
                if ($key_in == $ind)  {
                    $r_arr = array_push($r_arr, $val );
                }
            }
        }
    }
    return $r_arr;
}
$result = arrFindEl ($arr, $ind);
var_dump($result);*/

/*$arr = [
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
    5=>'c',
];
$ind = 2;
function arrFindEl (array $arr, $ind){
    $r_arr = [];
    foreach ($arr as $key => $value){
        if (is_array($value)){
            foreach ($value as $key_in => $val){
                if ($key_in == $ind)  {
                    $r_arr = array_push($r_arr, $val );
                }
            }
        }
    }
    return $r_arr;
}
$result = arrFindEl ($arr, $ind);
var_dump($result);*/


echo '<br>'.'Создать функцию которая считает все буквы b в переданной строке,
в случае если передается не строка функция должна возвращать false' . '<br>';

//$string = 'bbchbklbvcbbtbdgbhjbkkbfbBBBB';
$string = 123;
function strCount ($string) {
    if (is_string($string)==true){
        $a = substr_count($string, 'b');
        return $a;
    } else {
        return false;
    }
}
$res = strCount ($string);
var_dump ($res);
echo '<br>'.'количество букв b в пареданной строке '.($res).'<br>';


echo '<br>'.'Создать функцию которая считает все буквы b в переданной строке, 
в случае если передается не строка функция должна возвращать false' . '<br>';

$str = 'bbchbklbvcbbtbdgbhjbkkbfbBBBB';
//$str = 123;
function strCnt ($str){
    if (is_string($str)==true){
        $arr = str_split($str);
        foreach (count_chars($str, 1) as $i => $val) {
            echo "\"" , chr($i) , "\" встречается в строке $val раз(а).\n";
        }
        return ($arr);
    } else {
        return (false);
    }
}
$result = strCnt($str);
var_dump($result);


echo '<br>'. 'Создать функцию которая считает сумму значений всех элементов массива произвольной глубины' . '<br>';

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


echo '<br>'.'Создать функцию которая определит сколько квадратов меньшего размера 
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