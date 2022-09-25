<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$h3 = 'список';
$list = ['punkt_1', 'punkt_2', 'punkt_3'];
$type_list = 'ol'; // Задаём тип списка
function outputDate($h3, $list, $type_list) {
    $html = '<h3>' . $h3 . '</h3>';
    if ($type_list == 'ul'){
        $html .= '<ul>';
        foreach ($list as $value){
            $html .= '<li>' . $value . '</li>';
        }
        $html .= '</ul>';
    } elseif ($type_list == 'ol'){
        $html .= '<ol>';
        foreach ($list as $value){
            $html .= '<li>' . $value . '</li>';
        }
        $html .= '</ol>';
    } else {
        $html .= 'Некорректно задан тип списка';
    }

    return $html;
}

echo outputDate($h3, $list, $type_list);

?>

</body>
</html>

