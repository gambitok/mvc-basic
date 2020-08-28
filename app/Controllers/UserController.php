<?php

namespace App\Controllers;

//use App\Models\User;

class UserController
{
    public function __construct()
    {
        echo 'User';
    }

    public function show($id) {
        echo "User #$id";
    }

    public function edit($id) {
        echo "Edit #$id ?";
    }
}