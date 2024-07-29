<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Registration extends BaseController
{
    public function index()
    {
        return view("registration/registration");
    }

    public function addUser()
    {
        if ($this->request->getMethod() == 'post') {
            echo "Success";
        }
    }
}
