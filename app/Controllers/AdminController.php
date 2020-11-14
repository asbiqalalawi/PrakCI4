<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        echo view('Admin/layouts/header');
        // echo view('Admin/layouts/sidebar');
        echo view('Admin/index');
        echo view('Admin/layouts/footer');
        // return view('Admin/index');
    }

    public function widget()
    {
        echo view('Admin/layouts/header');
        // echo view('Admin/layouts/sidebar');
        echo view('Admin/widget');
        echo view('Admin/layouts/footer');
    }

    public function gallery()
    {
        echo view('Admin/layouts/header');
        // echo view('Admin/layouts/sidebar');
        echo view('Admin/gallery');
        echo view('Admin/layouts/footer');
    }
}
