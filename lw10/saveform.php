<?php
sendResponse();
function sendResponse(): void
{
    $promiseData = file_get_contents('php://input');
    $promiseData = json_decode($promiseData, true);

    if (!empty($promiseData['name'])) {
        if (!preg_match('/^[a-zA-Z]+$/', $promiseData['name'])) {
            $status['name'] = true;
        }
    } else 
        $status['name'] = true;

    if (!empty($promiseData['email'])) {
        if (!filter_var($promiseData['email'], FILTER_VALIDATE_EMAIL)) {
            $status['email'] = true;
        }
    } else 
        $status['email'] = true;

    if (empty($promiseData['message'])) 
        $status['message'] = true;
    
    if ((!$status['name']) && (!$status['email']) && (!$status['message'])) 
        $status['done'] = true;

    if ($status['done']) 
    {
        $email = $promiseData['email'];
        $promiseData = json_encode($promiseData);
        file_put_contents("data/" . $email . ".txt", $promiseData);
    }
    $status = json_encode($status);
    echo $status;
}