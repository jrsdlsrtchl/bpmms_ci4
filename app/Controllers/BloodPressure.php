<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BloodPressure extends BaseController
{
    public function index()
    {
    }

    public function add()
    {

        return view("bloodpressure/add");
    }

    public function manage()
    {

        return view("bloodpressure/manage");
    }
}
