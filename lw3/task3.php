<?php
header("Content-Type: text/plain");
if ($_GET['password'] !== null)
{
    $passwordString = $_GET['password'];
    if (!preg_match('/^[a-zA-Z0-9]+$/', $passwordString))
        echo 'Password is invalid!';
    else
    {
        $len = strlen($passwordString);
        $passwordStrength = 0;
        $passwordStrength = $passwordStrength + 4 * strlen($passwordString);
        $passwordStrength = $passwordStrength + 4 * strlen(preg_replace('/[a-zA-Z]/', '', $passwordString));
        if (preg_match('/[A-Z]+/', $passwordString))
            $passwordStrength = $passwordStrength + 2 * ($len - strlen(preg_replace('/[a-z0-9]/', '', $passwordString)));
        if (preg_match('/[a-z]+/', $passwordString))
            $passwordStrength = $passwordStrength + 2 * ($len - strlen(preg_replace('/[A-Z0-9]/', '', $passwordString)));
        if ((preg_match('/^[a-zA-Z]+$/', $passwordString)) || (preg_match('/^[0-9]+$/', $passwordString)))
            $passwordStrength = $passwordStrength - $len;
        if (preg_match('/(.){1,}/', $passwordString))
            $passwordStrength = $passwordStrength - ($len - strlen(preg_replace('/(.){1,}/', '', $passwordString)));
        if (preg_match('/(.).*(.)/', $passwordString))
            $passwordStrength = $passwordStrength - ;

//        $passwordStrength = $passwordStrength + 
        echo "Password Strength: $passwordStrength", "\n";



    }

} 
else
    echo 'Not found the password parameter';