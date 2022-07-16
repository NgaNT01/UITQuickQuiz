<?php
namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\Quiz_model;

class QuizController extends BaseController
{
    public function startQuiz()
    {
        $QuizID = $_GET['id'];
        $model = new Quiz_model();
        $data['masterData'] = $model->startQuiz($QuizID);
        return view('Student/Quiz/StartQuiz', $data);
    }

    public function checkResultOfQuestion($QuizID, $QuestionID, $Opt)
    {
        $model = new Quiz_model();
        $QuizResult = $model->checkResult($QuizID);

        $ScoreCount = 0;

        for($i = 0; $i < count($QuizResult); $i++)
        {
            if($QuestionID == $QuizResult[$i]['id'])
            {
               if($Opt == $QuizResult[$i]['answer'])
               {
                    $ScoreCount += 1;
                    break;
               }
            }
        }

        return $ScoreCount;
    }

    public function checkResult()
    {
        $quizID = $_POST['quizID'];
        $submittedAnswer = $_POST['answerList'];
        $quesNum = $_POST['quesNum'];
        $userID = $_POST['userID'];

        $totalScore = 0;
        
        foreach($submittedAnswer as $row)
        {
            $totalScore += $this->checkResultOfQuestion($quizID, $row['id'], $row['opt']);
        }

        $totalScore = ($totalScore / $quesNum) * 10;

        $model = new Quiz_model();

        // cộng vào cho số lượng joiner của bài thi này
        $model->increaseJoinerForQuiz($quizID);

        $isDone = 0;
        // kiểm tra để cập nhật điểm vào trong interaction -> nếu đã có điểm rồi thì k cập nhật lại
       
        $isExists = $model->isExistsInInteraction($quizID, $userID);

        // nếu thông tin của user, quiz này chưa từng tồn tại trong interaction thì dùng insert
        if($isExists == 0){
            $model->addScoreToUser($userID, $quizID, $totalScore);
            $totalScore = 'them thanh cong';
        }else{
            // nếu thông tin đã tồn tại mà done = 0 thì dùng hàm update
            $isDone = $model->isQuizDoneByUser($quizID, $userID);
            if($isDone == 0)
            {
                $model->addScoreToUserByUpdate($userID, $quizID, $totalScore);
            }
        }

        return json_encode($totalScore);
    }

    public function showResult()
    {
        $QuestionID = $_GET['id'];
        $model = new Quiz_model();
        $data['masterData'] = $model->getResultByQuizID($QuestionID);
        return view('Student/Quiz/ShowResult', $data);
    }
}   
