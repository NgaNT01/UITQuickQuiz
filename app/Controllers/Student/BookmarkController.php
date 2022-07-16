<?php
namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\Quiz_model;

class BookmarkController extends BaseController
{
    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Đánh dấu', 'Bookmark', 'Bookmark', 0);
        return view('Student/main', $PageInfo);
    }

    public function getBookmarkedQuiz()
    {
        $userID = $_POST['userid'];
        $model = new Quiz_model();
        $data = $model->getBookmarkedQuiz($userID);
        return json_encode($data);
    }

    public function bookmarkQuiz()
    {
        $userID = $_POST['userid'];
        $quizID = $_POST['quizid'];

        $model = new Quiz_model();
        $check = $model->isExistsInInteraction($quizID, $userID);

        $data = 0;

        // check = 0, nghĩa là thông tin chưa tồn tại trong interaction
        if($check == 0){
            $model->bookmarkQuiz($userID, $quizID);
            $data = 1;
        }else{
            $model->bookmarkQuizByUpdate($userID, $quizID);
            $data = 1;
        }

        // return 1 nếu được bookmark, 0 nếu đã được bookmak rồi
        return json_encode($data);
    }

    public function removeFromBookmark()
    {
        $userID = $_POST['userid'];
        $quizID = $_POST['quizid'];
        $model = new Quiz_model();
        $model->removeFromBookmark($userID, $quizID);

        $data = 1;
        return json_encode($data);
    }
}
