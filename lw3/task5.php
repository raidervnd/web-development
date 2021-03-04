<?php
header("Content-Type: text/plain");
if (($_GET['email'] !== null) && ($_GET['email'] !== ''))
{
    $email = $_GET['email'];
    if (file_exists("data/$email.txt"))
        echo file_get_contents("data/$email.txt");
    else
        echo "Данных о пользователе $email нет ";

} else
    echo "не найден параметр";