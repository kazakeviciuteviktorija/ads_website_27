<?php

declare(strict_types=1);

$requestPath = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestPath === '/list') {
    $ads = json_decode(file_get_contents('./data/ads.json'), true);
    $inner = './view/list.php';
} else if ($requestPath === '/registration') {
    if ($requestMethod === 'GET') {
        $inner = './view/registration.php';
    } else if ($requestMethod === 'POST') {
        $data =json_decode(file_get_contents('./data/user.json'), true);
       if ($_POST['password'] !== $_POST['password_repeat']) {
           die;
       } else {
           $newUser = [
               'email' => $_POST['email'],
               'password' => $_POST['password'],
               'phone_number' => $_POST['phone_number'],
               'register_data' => new DateTime(),
           ];
           $data[] = $newUser;
           file_put_contents('./data/user.json', json_encode($data, JSON_PRETTY_PRINT|JSON_FORCE_OBJECT));
       }

        /*
        issaugoti vartotojo suvestus duomenis i faila ./data/user.json
        - email
        - password
        - phone_number
        - created_at
        - updated_at
        */

        //header('Location: /login');
    } else {
        die('Unknown request type');
    }
} else if ($requestPath === '/login') {
    echo 'Login form goes here';
}
require './view/page.php';