<?php

function translit($str) {
    $converter = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'];
    return strtr(mb_strtolower($str), $converter);
}

echo translit("Римская Анна Андреевна");


echo "<hr/>";
function replaceSpaceWithUnderscore($str) {
    return str_replace(" ", "_", $str);
}
echo replaceSpaceWithUnderscore("Римская Анна Андреевна");


echo "<hr/>";
function transliteration ($str) {
    return replaceSpaceWithUnderscore(translit($str));
} 

echo transliteration ("Римская Анна Андреевна");