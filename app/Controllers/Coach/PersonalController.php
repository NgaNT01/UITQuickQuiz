<?php

namespace App\Controllers\Coach;

use App\Controllers\BaseController;
use App\Models\Quiz_model;

class PersonalController extends BaseController
{
    // public function showInfo()
    // {
    //     $model = new Scroll_pagination_model();
    //     $data['userlist'] = $model->getData();
    //     return view('emp', $data);
    // }

    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Thông tin cá nhân', 'personal', 'personal', 1);
        return view('Coach/main', $PageInfo);
    }
}
