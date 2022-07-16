<?php

namespace App\Controllers;

use App\Models\Quiz_model;
use CodeIgniter\CLI\Console;

class CoachController extends BaseController
{
    // public function showInfo()
    // {
    //     $model = new Scroll_pagination_model();
    //     $data['userlist'] = $model->getData();
    //     return view('emp', $data);
    // }

    public function index()
    {
        return view('Coach/Home');
    }

    public function home()
    {
        return View('Coach/Home');
    }

    public function questionbank()
    {
        return View('Coach/question_bank');
    }

    public function addquestion()
    {
        return View('Coach/add-question');
    }

    public function fetch_c()
    {
        if (isset($_POST['limit'])) {
            $limit = $_POST['limit'];
            $start = $_POST['start'];

            $model = new Quiz_model();
            $data = $model->fetch_question($limit, $start);

            echo json_encode($data);
        }
    }

    public function fetch_t()
    {

        $model = new Quiz_model();
        $data = $model->fetch_tag();

        echo json_encode($data);
    }
}
