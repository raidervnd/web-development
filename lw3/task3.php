<?php
header("Content-Type: text/plain");
if (($_GET['password'] !== null) && ($_GET['password'] !== ''))
{
    $strPassword = $_GET['password'];
    if (!preg_match('/^[a-zA-Z0-9]+$/', $strPassword))
        echo 'Password is invalid!';
    else
    {
        $len = strlen($strPassword);
        $passwordStrength = 0;
        $passwordStrength += 4 * strlen($strPassword);
        $passwordStrength += 4 * strlen(preg_replace('/[a-zA-Z]/', '', $strPassword));
        if (preg_match('/[A-Z]+/', $strPassword))
            $passwordStrength += 2 * ($len - strlen(preg_replace('/[a-z0-9]/', '', $strPassword)));
        if (preg_match('/[a-z]+/', $strPassword))
            $passwordStrength += 2 * ($len - strlen(preg_replace('/[A-Z0-9]/', '', $strPassword)));
        if ((preg_match('/^[a-zA-Z]+$/', $strPassword)) || (preg_match('/^[0-9]+$/', $strPassword)))
            $passwordStrength -= $len;
        for ($i = 0; $i < $len; $i++)
            for ($j = 0; $j < $len; $j++)
                if (($strPassword[$i] === $strPassword[$j]) && ($i !== $j))
                    $passwordStrength -= 1;
        echo "Password Strength: $passwordStrength\n";
    }
} 
else
    echo 'Not found the password parameter';