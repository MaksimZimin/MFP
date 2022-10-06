<?php

    echo '<pre>';

    function array_fill_rand($limit, $min, $max): array
    {
        $array = array();

        for ($i=0; $i<$limit; $i++)
        {
            $array[$i] = rand($min, $max);
        }
        return $array;
    }

    $rand_array = array_fill_rand(50, -100, 100);

    echo 'Созданный массив:' . '<br>';
    print_r($rand_array);

    echo '1) Сумма всех элементов массива.' . '<br>';

    $sum = array_sum($rand_array);

    echo $sum . '<br>';

    echo '2) Среднее всех элементов массива (среднее арифметическое).' . '<br>';

    print_r ($sum / count($rand_array));

    echo '<br>';
    echo '3) Вывести 5 минимальных чисел из массива.' . '<br>';

    $min = asort($rand_array);
    print_r(array_slice($rand_array, 0, 5));

    echo '4) Вывести 5 максимальных чисел из массива.' . '<br>';

    $max = arsort($rand_array);
    print_r(array_slice($rand_array, 0, 5));

    echo '5) Отсортированный массив по возрастанию.' . '<br>';

    asort($rand_array);
    print_r($rand_array);

    echo '6) Отсортированный массив по убыванию.' . '<br>';

    arsort($rand_array);
    print_r($rand_array);

?>