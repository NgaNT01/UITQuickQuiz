<?php

namespace App\Models;

use CodeIgniter\Model;

class Scroll_pagination_model extends Model
{
    // protected $table = 'users';
    // protected $primaryKey = 'id';
    // protected $returnType = 'array'; 
    // protected $allowedField = [
    //     'id',
    //     'name',
    //     'email',
    //     'designation',
    // ];

    public function fetch_data($limit, $start)
    {
        $query = $this->db->query("select * from tracnghiem limit $start, $limit");
        $data = $query->getResult('array');
        return $data;
    }

    public function getData()
    {
        $query = $this->db->query("select * from users order by id asc limit 2, 5");
        $data = $query->getResult('array');
        return $data;
    }
}
