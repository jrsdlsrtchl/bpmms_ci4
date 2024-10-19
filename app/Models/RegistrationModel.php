<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    public function checkEmail($emailID)
    {
        $builder = $this->db->table('tbluserregistration')
            ->select('id')
            ->where('emailid', $emailID)
            ->get()->getNumRows();

        return $builder;
    }
}
