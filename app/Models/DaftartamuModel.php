<?php namespace App\Models;

use CodeIgniter\Model;

class DaftartamuModel extends Model
{
protected $table = 'daftartamu' ;
protected $useTimestamps = true ;

public function getTamu($slug = false) {
    if( $slug == false) {
        return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
}

}