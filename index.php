<?php

// Require the class
include 'src\Routing\Route.php';
include 'app\Controllers\HomeController.php';

// Use this namespace
use Routing\Route;

// Define a global basepath
define('BASEPATH','/');

Route::add('/', function() {
    \App\Controllers\HomeController::nav();
    echo 'Welcome home, my son';
});

Route::add('/user/([0-9]*)/edit', function($id) {
    echo 'Edit user with id '.$id.'<br>';
}, 'get');

Route::run('/');