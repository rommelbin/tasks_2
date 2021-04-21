<?php
//Написать функцию, которая меняет местами два последних слова предложения,
// например, при вызове f(‘Мама мыла раму’) выведет: Мама раму мыла

function change_words(string $str): array
{
    $keywords = preg_split("/[\s,]+/", $str);
    $saved = $keywords[count($keywords) - 1];
    $keywords[count($keywords) -1] = $keywords[0];
    $keywords[0] = $saved;
    print_r($keywords);
    return $keywords;
}
change_words('строка здесь должна быть');

