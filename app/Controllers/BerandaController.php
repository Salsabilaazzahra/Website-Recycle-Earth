<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BerandaController Extends BaseController
{
    public function index()
    {
        return view ('users/beranda/index');
    }
    public function detail($id)
    {
        echo "Detail item with ID:2 " . $id;
    }

  
}