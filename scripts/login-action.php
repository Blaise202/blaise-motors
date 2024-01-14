<?php 
require_once __DIR__.'/vendor/autoload.php';

use Illuminate\Support\Facades\Auth;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $credentials = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];

    if(Auth::attempt($credentials)){
        redirect();
    }
}

?>