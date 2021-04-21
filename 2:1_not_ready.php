<?php
//a.    Напишите функцию, которая добавляет окончание к перечисляемому слову: 1 рубль, 2 рубля, 5 рублей
ini_set('display_errors', 1);
error_reporting(E_ALL);

function ending_word(int $quantity)
{
    settype($quantity, 'string');
    $quantity = str_split($quantity);
    $word = '';
    $last_num = $quantity[count($quantity) - 1];

    settype($last_num, 'integer');


    if ((count($quantity) >= 2) and $last_num == 1 and ($quantity[(count($quantity) - 2)]) == 1) {
        $word = 'Рублей';
    } else if ($last_num == 1) {
        $word = 'Рубль';
    } else if ($last_num < 5 && $last_num > 1) {
        $word = 'Рубля';
    } else if ($last_num > 5 || $last_num == 0) {
        $word = 'Рублей';
    }
    echo $word;
};



ending_word(1136);
