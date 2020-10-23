<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($nama, $npm)
    {
        echo $nama. "<br>";
        echo $npm;
    }
    public function show()
    {
        echo "Asbiq<br>";
        echo $this->name;
    }
}