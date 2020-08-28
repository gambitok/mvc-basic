<?php

// Require the class
include 'src\Routing\Route.php';
include 'src\helpers.php';
include 'app\Models\Home.php';
include 'app\Models\User.php';
include 'app\Controllers\HomeController.php';
include 'app\Controllers\UserController.php';

// Use this namespace
use Routing\Route;

// Define a global basepath
define('BASEPATH','/');

Route::add('/', function() {
    \App\Controllers\HomeController::nav();
});

Route::add('/user/([0-9]*)', function($id) {
    \App\Controllers\UserController::show($id);
}, 'get');

Route::add('/user/([0-9]*)/edit', function($id) {
    \App\Controllers\UserController::edit($id);
}, 'get');

Route::pathNotFound(function() {
    header('HTTP/1.0 404 Not Found');
    echo 'Error 404 :-(<br>';
});

Route::run('/');