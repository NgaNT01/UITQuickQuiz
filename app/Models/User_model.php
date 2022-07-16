<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    public function getUserLoginInfo($username)
    {
        $query = $this->db->query("select id userid, isCoach iscoach, account username, password pass, name name from user where account ='".$username."'");
        $data = $query->getResult('array');
        return $data;
    }

    public function createUser($username, $pass, $name, $iscoach)
    {
        $query = $this->db->query("
            INSERT INTO user(name, account, password, isCoach) VALUES ('".$name."', '".$username."', '".$pass."', '".$iscoach."')
        ");
    }


    // public function getAll()
    // {
    //     $query = $this->db->query("select id userid, isCoach iscoach, account username, password pass from user");
    //     return $query;
    // }


}