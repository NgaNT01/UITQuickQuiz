<?php

namespace App\Controllers\Coach;

use App\Controllers\BaseController;
use App\Models\Quiz_model;

class HomeController extends BaseController
{
    // public function showInfo()
    // {
    //     $model = new Scroll_pagination_model();
    //     $data['userlist'] = $model->getData();
    //     return view('emp', $data);
    // }

    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Trang chủ', 'Home', 'Home', 1);
        return view('Coach/main', $PageInfo);
    }
}
