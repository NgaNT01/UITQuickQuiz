<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    // protected $table = 'question';
    // protected $primaryKey = 'id';
    // protected $allowedFields = [
    //     'question',
    //     'filter',
    //     'A',
    //     'B',
    //     'C',
    //     'D',
    //     'answer',
    //     'uid'
    // ];

    public function getQuestionByID($questID)
    {
        $query = $this->db->query("select * from question where id = " . $questID . "");
        $data = $query->getResult('array');
        /* foreach ($data as $row) {

            echo $row['filter'];
        } */
        return $data;
    }

    public function getQuizByID($quizID)
    {
        $query = $this->db->query("select * from multiplechoice where id = " . $quizID . ";");
        $data = $query->getResult('array');
        /* foreach ($data as $row) {

            echo $row['filter'];
        } */
        return $data;
    }
}
