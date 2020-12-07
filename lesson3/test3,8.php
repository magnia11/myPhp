<?php

$regions = ['Московская область' => ['Москва', 'Балашиха', 'Домдедово'], 
'Краснодарский край' => ['Анапа', 'Сочи', 'Краснодар'], 
'Ленинградская область' => ['Санкт-Петербург', 'Выборг', 'Кириши']];
foreach ($regions as $region => $cities) {
    $str = implode (', ', $cities).'.';
    echo "$region:<br/>$str<br/>";
}

echo "<hr/>";
$str = "";
foreach ($regions as $region => $cities) {
    $str .= "$region:<br/>";
    foreach ($cities as $city) {
        if (mb_substr ($city, 0,1) == "К") {
            $str .= "$city, ";
        }
    }
    $str = rtrim ($str);
    $str .= ".<br/>";
}
echo $str;