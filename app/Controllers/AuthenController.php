<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User_model;

class AuthenController extends BaseController
{
    public function index()
    {
        return view('General/Login.php');
    }

    public function login()
    {
        $username = $_POST['user'];
        $pass = $_POST['pass'];

        $model = new User_model();
        $userInfo = $model->getUserLoginInfo($username);
        // $userInfo = $model->getAll();

        $info = [];        
        $err = 0;
        
        if (empty($userInfo)) {
            return json_encode($err);
        } 
        else 
        {
            foreach ($userInfo as $row) {
                if ($row['pass'] == $pass) 
                {
                    $info['userid'] = $row['userid'];
                    $info['iscoach'] = $row['iscoach'];
                    $info['name'] = $row['name'];
                    return json_encode($info);
                } 
                else {
                    if ($row['pass'] != $pass)
                    {
                        return json_encode($err);
                    }
                }
            }
        }
    }

    public function signup()
    {
        $username = $_POST['username'];
        $pass1 = $_POST['pass1'];
        $fullname = $_POST['fullname'];
        $iscoach = $_POST['iscoach'];

        $model = new User_model();
        $model->createUser($username, $pass1, $fullname, $iscoach);

        $result = 1;
        return json_encode($result);
    }

}
