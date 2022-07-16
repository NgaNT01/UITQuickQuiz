<?php

namespace App\Controllers\Coach;

use App\Controllers\BaseController;

use App\Models\QuestionModel;
use App\Models\Quiz_model;
use CodeIgniter\CLI\Console;

class AddquestionController extends BaseController
{

    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Thêm câu hỏi', 'add-question', 'add-question', 1);
        return view('Coach/main', $PageInfo);
    }
    public function edit()
    {
        $PageInfo = $this->loadMasterLayout('Sửa câu hỏi', 'edit-question', 'edit-question', 1);
        return view('Coach/main', $PageInfo);
    }

    public function addQuestion()
    {
        if (isset($_POST['question'])) {
            $question = $_POST['question'];
            $opta = $_POST['opta'];
            $optb = $_POST['optb'];
            $optc = $_POST['optc'];
            $optd = $_POST['optd'];
            $answer = $_POST['answer'];
            $uid = $_POST['uid'];
        }
        $model = new Quiz_model();
        $model->addQuestion($question, $opta, $optb, $optc, $optd, $answer, $uid);
    }

    public function updateQuestion()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $question = $_POST['question'];
            $filter = $_POST['filter'];
            $opta = $_POST['opta'];
            $optb = $_POST['optb'];
            $optc = $_POST['optc'];
            $optd = $_POST['optd'];
            $answer = $_POST['answer'];
        }
        $model = new Quiz_model();
        $model->edit_question($id, $question, $filter, $opta, $optb, $optc, $optd, $answer);
    }
    public function updateQuiz()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $filter = $_POST['filter'];
            $time = $_POST['time'];
        }
        $model = new Quiz_model();
        $model->edit_quiz($id, $title, $description, $filter, $time);
    }

    public function deleteQuestion()
    {

        $id = $_GET['id'];


        $model = new Quiz_model();
        $model->delete_question($id);
        $PageInfo = $this->loadMasterLayout('Ngân hàng câu hỏi', 'question_bank', 'question_bank', 1);
        return view('Coach/main', $PageInfo);
    }

    public function deleteQuiz()
    {

        $id = $_GET['id'];


        $model = new Quiz_model();
        $model->delete_quiz($id);
        $PageInfo = $this->loadMasterLayout('Quản lý bài trắc nghiệm', 'quiz_generator', 'quiz_generator', 1);
        return view('Coach/main', $PageInfo);
    }



    public function editQuestion()
    {

        // hoai nhan
        $model = new QuestionModel();


        $QuizID = $_GET['id'];
        $data = $model->getQuestionByID($QuizID);

        foreach ($data as $row) {
            return view('Coach/Pages/edit_question', $row);
        }
    }
    public function previewQuiz()
    {

        // hoai nhan

        $model = new Quiz_model();

        $QuestionID = $_POST['arr1'];

        $data = $model->fetch_quiz($this->handle($QuestionID));

        echo json_encode($data);
        /*  echo json_encode($QuizID); */
    }
    public function addquiz()
    {
        if (isset($_POST['question'])) {
            $question = $_POST['question'];
            $filter = $_POST['filter'];
            $opta = $_POST['opta'];
            $optb = $_POST['optb'];
            $optc = $_POST['optc'];
            $optd = $_POST['optd'];
            $answer = $_POST['answer'];
            $uid = $_POST['uid'];
        }
        $model = new Quiz_model();
        $model->addQuestion($question, $filter, $opta, $optb, $optc, $optd, $answer, $uid);
    }
    private function handle($data)
    {
        $string = $data[0];
        for ($i = 1; $i < count($data); $i++) {
            $string = $string . ', ' . $data[$i];
        }

        return $string;
    }

    public function editQuiz()
    {

        // hoai nhan
        $model = new QuestionModel();


        $QuizID = $_GET['qid'];
        $data = $model->getQuizByID($QuizID);

        foreach ($data as $row) {
            return view('Coach/Pages/edit_quiz', $row);
        }
    }
}
