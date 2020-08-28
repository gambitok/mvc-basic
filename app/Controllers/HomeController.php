<?php

namespace App\Controllers;

//use App\Models\Home;

class HomeController
{
    public static function nav()
    {
        echo '
        Navigation:
        <ul>
            <li><a href="'.BASEPATH.'">HOME</a></li>
            <li><a href="'.BASEPATH.'user/1/edit">EDIT USER</a></li>
        </ul>
        ';
    }
}