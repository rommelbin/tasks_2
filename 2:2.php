<?php
//Напишите функцию, которая будет проверять является ли входящая строка палиндромом.

function check(string $str)
{
    $str = str_split($str);
    $old_str = $str;
    krsort($str);
    $str = implode('', $str);
    $old_str = implode('', $old_str);

    if ($old_str === $str) {
        echo $str . ' = ' . $old_str . '<br>';
        echo 'Это слово палиндром.';
    } else {
        echo $old_str   . ' != ' . $str . '<br>';
        echo 'Это слово не палиндром';
    }

}

check("moor");