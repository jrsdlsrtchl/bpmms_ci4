<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FamilyMembers extends BaseController
{
    public function index()
    {
    }

    public function add()
    {

        return view("familymembers/add");
    }

    public function manage()
    {

        return view("familymembers/manage");
    }
}
