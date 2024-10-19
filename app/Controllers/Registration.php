<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RegistrationModel;

class Registration extends BaseController
{
    public $regModel;

    public function __construct()
    {
        $this->regModel = new RegistrationModel();
    }

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

    public function checkEmail()
    {
        $emailid = $this->request->getPost('emailid');

        $count = $this->regModel->checkEmail($emailid);

        if ($count) {
            echo 'exists';
        } else {
            echo 'not_exists';
        }
    }
}
