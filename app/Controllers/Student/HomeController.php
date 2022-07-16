<?php
namespace App\Controllers\Student;

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
        $PageInfo = $this->loadMasterLayout('Trang chủ', 'Home', 'Home', 0);
        return view('Student/main', $PageInfo);
    }

    // Lấy dữ liệu cho phần infinitive scroll pagination của Home.php
    public function fetch()
    {
        if (isset($_POST['limit'])) {
            $limit = $_POST['limit'];
            $start = $_POST['start'];

            $model = new Quiz_model();
            $data = $model->fetch_data($limit, $start);
            
            echo json_encode($data);
        }
    }

    public function searchQuiz()
    {
        $filter = $_GET['filter'];
        $text = $_GET['text'];

        $model = new Quiz_model();
        $data = $model->searchQuiz($filter, $text);
        
        return json_encode($data);
    }
}
