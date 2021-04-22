<?php
function saveFeedbackPage()
{
    $data = [
        "name" => trim(getPostParameter("name")),
        "email" => strtolower(trim(getPostParameter("email"))),
        "country" => getPostParameter("country"),
        "gender" => getPostParameter("gender"),
        "message" => trim(getPostParameter("message"))
    ];
    $form["data"] = $data;
    
    if (empty($data["name"])) 
        $errors["name_error"] = "Введите имя!";
    if (empty($data["email"])) 
        $errors["email_error"] = "Введите email!";
    if (empty($data["message"])) 
        $errors["message_error"] = "Введите ваше сообщение!";

    $form["errors"] = $errors;

    if (empty($form["errors"])) 
    {
        $file = fopen("data/" . $data['email'] . ".txt", "wt");
        foreach( $data as $key => $value ) 
            fwrite($file, "'" . $key . "': '" . $value . "',\n");
        fclose($file);
        $form = [];
        $form["sent"] = "Сообщение отправлено!";
    }
    renderTemplate("main.tpl.php", $form);
}