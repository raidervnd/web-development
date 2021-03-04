<?php
header("Content-Type: text/plain");
if (($_GET['identifier'] !== null) && ($_GET['identifier'] !== ''))
{
    $identifier = $_GET['identifier'];
    if (preg_match('/^[a-zA-Z][a-zA-Z0-9]*$/', $identifier))
        echo 'Yes!:)';
    else 
    {
        echo 'No:( ', "\n";
        if (preg_match('/^[0-9].*$/', $identifier))
            echo "The first symbol is number \n"; 
        if (preg_match('/^.*[а-яА-Я\p{P}]+.*$/', $identifier))
            echo "There are unacceptable symbols \n";       
    }
} else
    echo 'not found the identifier';