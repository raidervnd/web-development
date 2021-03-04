<?php
header("Content-Type: text/plain");
if (($_GET['text'] !== null) && ($_GET['text'] !== ''))
{
    $text = $_GET['text'];
    echo $text ."\n";
    $text = trim($text); // убирает лишние пробелы с начала и конца строки
    $text = preg_replace('/ +/', ' ', $text); // если пробелов больше 1, то заменяем все на 1
    echo $text;
} else 
    echo 'not found text';