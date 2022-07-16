<?php

namespace App\Models;

use CodeIgniter\Model;

class QModel extends Model
{
    protected $table = 'question';
    protected $primaryKey = 'id';
    protected $allowedFields = ['question', 'filter', 'A', 'B', 'C', 'D', 'answer', 'uid'];
}

?>