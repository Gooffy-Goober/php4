<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//TODO: 14,15

//Задание 1
echo "-----Задание 1</br></br>";

$string1 = 'london is the capital of great britain';

echo(ucwords($string1));


//Задание 2
echo "</br></br>-----Задание 2</br></br>";

$string2 = 'html <b>css</b> php';


$a = explode(' ', strip_tags($string2));
print_r($a);


//Задание 3
echo "</br></br>-----Задание 3</br></br>";

$string3 = 'abcdefg h i j k lmnop';

echo(str_shuffle($string3));


//Задание 4
echo "</br></br>-----Задание 4</br></br>";

echo(date("t"));


//Задание 5
echo "</br></br>-----Задание 5</br></br>";

echo(date("'Y-m-d'"));
echo "</br>";
echo(date("'d.m.Y'"));
echo "</br>";
echo(date("'d.m.y'"));
echo "</br>";
echo(date("'H:i:s'"));


//Задание 6
echo "</br></br>-----Задание 6</br></br>";

$date = '2025-12-31';

echo(date("Y-m-d", strtotime('+2 day', strtotime($date))));
echo "</br>";
echo(date("Y-m-d", strtotime('+1 month 3 day', strtotime($date))));
echo "</br>";
echo(date("Y-m-d", strtotime('+1 year', strtotime($date))));
echo "</br>";
echo(date("Y-m-d", strtotime('-3 day', strtotime($date))));


//Задание 7
echo "</br></br>-----Задание 7</br></br>";
$numdel = '1a2b3c4b5d6e7f8g9h0';
$numdel = preg_replace('/[0-9]/', '', $numdel);
echo($numdel);


//Задание 8
echo "</br></br>-----Задание 8</br></br>";

echo(min(4, -2, 5, 19, -130, 0, 10));
echo "</br>";
echo(max(4, -2, 5, 19, -130, 0, 10));


//Задание 9
echo "</br></br>-----Задание 9</br></br>";

echo(rand(1, 100));


//Задание 10
echo "</br></br>-----Задание 10</br></br>";

$DayWeek = [
    '1' => 'Понедельник',
    '2' => 'Вторник',
    '3' => 'Среда',
    '4' => 'Четверг',
    '5' => 'Пятница',
    '6' => 'Суббота',
    '7' => 'Воскресенье',
];

echo($DayWeek[date('N')]);


//Задание 11
echo "</br></br>-----Задание 11</br></br>";

$Numbers11 = [[1, 2, 3], [4, 5], [6]];
$sum = 0;

foreach ($Numbers11 as $value) {
    $sum += array_sum($value);
}

echo($sum);


//Задание 12
echo "</br></br>-----Задание 12</br></br>";

$array = [1, 1, 1, 2, 2, 2, 2, 3];
$arRes = [];

foreach ($array as $value) {
    $arRes[$value] = $value;
}

print_r($arRes);
echo '</br></br>';


print_r(array_unique($array));

//Задание 13
echo "</br></br>-----Задание 13</br></br>";

$Menu = [
    'Home' => 'Home',
    'About' => 'About',
    'Services' => 'Services',
    'Catalog' => 'Catalog',
    'Contacts' => 'Contacts',
];
?>
<ul>
    <?php foreach ($Menu as $key => $value): ?>
        <li><a href="#"><?= $value ?></a></li>
    <?php endforeach; ?>
</ul>
<?php

//Задание 14
echo "</br></br>-----Задание 14</br></br>";

//Задание 15
echo "</br></br>-----Задание 15</br></br>";

//Задание 16
echo "</br></br>-----Задание 16</br></br>";



function countSum($arrays, $number){
    $res = 0;
    $arIndex = array_keys($arrays, $number);

    if (count($arIndex)>1){
        $indexStart = min($arIndex);
        $indexEnd = max($arIndex);
        $i = $indexStart + 1;

        for(;$i < $indexEnd;$i++){
            $res += $arrays[$i];
        }
        return $res;
    }
    else{
        return "Мало чисел";
    }
}

$arrays = [1,1,1,0,111,1,1,1,0,1,1,1,1,1,1,1,1];

print_r(countSum($arrays, 0));

//Задание 17
echo "</br></br>-----Задание 17</br></br>";

function rand_color()
{
    return '#' . str_pad(dechex(mt_rand(0, 16777215)), 6, "0");
}

?>
    <div style="background-color:<?= rand_color() ?>; width:100px; height:100px; margin:10px;"></div>
<?php


//Задание 18
echo "</br></br>-----Задание 18</br></br>";

$string18 = '332 441 550';

echo(preg_replace('#(\d)\1#i', '!', $string18));


//Задание 19
echo "</br></br>-----Задание 19</br></br>";

function checkNumber($number)
{
    $pattern = '/^(\+375|80)(\(\d{2}\)|\d{2})\d{7}$/';
    return preg_match($pattern, $number) == 1 ? 'true' : 'false';
}

echo(checkNumber('+375(29)2398185'));

//Задание 20
echo "</br></br>-----Задание 20</br></br>";

function checkEmail($email)
{
    $pattern = '/^[A-Za-z]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+@[A-Za-z0-9]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+\.[A-Za-z]{2,11}$/';
    return preg_match($pattern, $email) == 1 ? 'верно' : 'не верно';
}

function checkEmails($emails)
{

    if (filter_var($emails, FILTER_VALIDATE_EMAIL)) 
    {
        echo("адрес указан верно");
    } 
    else 
    {
        echo("адрес указан не верно");
    }

}

echo(checkEmail('basovets.sasha@gmail.com'));
echo '</br></br>';
echo(checkEmails('basovets.sasha@gmail.com'));

#https://www.php.net/manual/ru/filter.filters.validate.php
?>
</body>
</html>