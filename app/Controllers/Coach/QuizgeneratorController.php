<?php

namespace App\Controllers\Coach;

use App\Controllers\BaseController;
use App\Models\Quiz_model;
use CodeIgniter\CLI\Console;
use CodeIgniter\View\View;

class QuizgeneratorController extends BaseController
{
    // public function showInfo()
    // {
    //     $model = new Scroll_pagination_model();
    //     $data['userlist'] = $model->getData();
    //     return view('emp', $data);
    // }

    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Quản lý bài trắc nghiệm', 'quiz_generator', 'quiz_generator', 1);
        return view('Coach/main', $PageInfo);
    }

    public function addquiz()
    {
        $PageInfo = $this->loadMasterLayout('Thêm bài trắc nghiệm', 'add-question', 'add_quiz', 1);
        return view('Coach/main', $PageInfo);
    }

    public function editquiz()
    {
        return View('Coach/Pages/edit_quiz');
    }

    public function add_quiz()
    {
        if (isset($_POST['title'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $rating = $_POST['rating'];
            $time = $_POST['time'];
            $total = $_POST['total'];
            $status = $_POST['status'];
            $participant = $_POST['participant'];
            $createDate = $_POST['createDate'];
        }
        $model = new Quiz_model();
        $model->addQuiz($title, $description, $rating, $time, $total, $status, $participant, $createDate);
    }
    public function preQuiz()
    {
        return View('Coach/Pages/pre_quiz');
    }
    public function fetch()
    {
        if (isset($_POST['limit'])) {
            $limit = $_POST['limit'];
            $start = $_POST['start'];
            $userID = $_POST['userID'];

            $model = new Quiz_model();
            $data = $model->fetch_dataByUser($limit, $start, $userID);

            echo json_encode($data);
        }
    }

    public function add__quiz()
    {
        if (isset($_POST['title'])) {
            $title = $_POST['title'];
            $descriprion = $_POST['description'];
            $filter = $_POST['filter'];
            $time = $_POST['time'];
            $total = $_POST['total'];
            $createDate = $_POST['createDate'];
            $qid = $_POST['arr'];
        }



        $model = new Quiz_model();
        $model->add_quiz($title, $descriprion, $filter, $time, $total, $createDate);
        $mcid = $model->findQ($title, $descriprion);
        $saveid = 0;
        foreach ($mcid as $row) {
            $saveid = $row['id'];
        }
        for ($i = 0; $i < count($qid); $i++) {
            $model->insert_belong($qid[$i], $saveid);
        }

        $a = 0;
        return json_encode($a);
    }
}
