<?php
function feedbackListPage(): void 
{
    $email = trim(getPostParameter("email"));
    $message = [];
    if (file_exists("data/" . $email . ".txt") && !empty($email)) 
    {
        $message["answer"] = file_get_contents("data/" . $email . ".txt");
    } 
    else 
    {
        $message["error"] = "Такой пользователь не отправлял вам сообщение";
    }
    renderTemplate("feedbacks.tpl.php", $message);
}