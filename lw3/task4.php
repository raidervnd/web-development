<?php
header("Content-Type: text/plain");
function getGETParameter(string $key): ?string
{
    return isset($_GET[$key]) ? (string) $_GET[$key] : null;
}
$firstName = getGETParameter('first_name');
$lastName = getGETParameter('last_name');
$email = getGETParameter('email');
$age = getGETParameter('age');
if (($email !== null) && ($email !== ''))
{
    $file = fopen("data/$email.txt", "w");
    fwrite($file, "First Name: $firstName\n");
    fwrite($file, "Last Name: $lastName\n");   
    fwrite($file, "Email: $email\n");
    fwrite($file, "Age: $age\n");
    fclose($file);
} else
    echo "email was't written or written incorrect";