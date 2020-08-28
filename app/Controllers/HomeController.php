<?php

namespace App\Controllers;

use App\Models\Home;

class HomeController
{
    public function __construct()
    {
        //
    }

    public static function nav()
    {
        echo '
        Navigation:
        <ul>
            <li><a href="'.BASEPATH.'">HOME</a></li>
            <li><a href="'.BASEPATH.'user/1">USER</a></li>
            <li><a href="'.BASEPATH.'user/1/edit">USER EDIT</a></li>
        </ul>
        ';
        new Home();
        echo view('home');
    }
}