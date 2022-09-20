<?php
echo '<pre>';
echo 'посчитать длинну массива' . '<br>';
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
print_r (count ($arr));//первый вариант
echo '<br>';
print_r (sizeof ($arr));//второй вариант
echo '<br>';

echo ('переместить первые 4 элемента массива в конец массива') . '<br>';
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$slice_element = array_slice($arr, 0, 4);
$output = array_slice($arr, 4);
$new_arr = array_merge($output, $slice_element);
print_r($new_arr);

echo ('получить сумму 4,5,6 элемента') . '<br>';
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$sum = array_sum(array_slice($arr, 3, 3));
echo $sum . '<br>';

echo ('найти все элементы которые отсутствуют в первом массиве и присутствуют во втором') . '<br>';
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
print_r (array_diff ($secondArr, $firstArr));

echo ('найти все элементы которые присутствую в первом и отсутствуют во втором') . '<br>';
print_r (array_diff ($firstArr, $secondArr));

echo ('найти все элементы значения которых совпадают') . '<br>';
print_r (array_intersect ($firstArr, $secondArr));
echo '<br>';

echo ('найти все элементы значения которых отличается') . '<br>';
print_r (array_diff ($firstArr, $secondArr));
print_r (array_diff ($secondArr, $firstArr));
echo '<br>';

echo ('получить все вторые элементы вложенных массивов') . '<br>';
$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
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
foreach ($firstArr as $key => $arr) {
    if (is_array ($arr)) {
        print_r( array_slice( $arr, 1, 1 ) );

    }
}

echo ('получить общее количество элементов в массиве') . '<br>';
$count = count($firstArr, $mode = COUNT_RECURSIVE);
    print_r ($count);
    echo '<br>';

echo ('получить сумму всех значений в массиве') . '<br>';
$result = 0;

foreach ($firstArr as $key => $value) {
    if (is_array ($value)) {
        foreach ($value as $key_new => $value_in) {
            $result = $result + $value_in;
        }
    } else {
        $result = $result + $value;
    }
}
print_r ($result);
echo '</pre>';
?>

