<?php 

namespace App\Controllers;

use App\Models\DaftartamuModel;

use CodeIgniter\Database\Query;

class Tamu extends BaseController
{
    protected $daftartamuModel ;

    public function __construct()
    {
        
        $this->daftartamuModel = new DaftartamuModel() ;
    }
	public function index()
	{
        $data = [
            'title' => 'Daftar Tamu',
            'tamu' => $this->daftartamuModel->getTamu()
        ];

        // cara koneksi db tanpa models
        // $db = \Config\Database::connect() ;
        // $tamu = $db->query("SELECT * FROM daftartamu ");
        // foreach( $tamu->getResultArray() as $row ) {
        //     d($row) ;
        // }
        return view('tamu/index', $data);
    }


    public function detail($slug) {
        $data = [
            'title' => 'Detail Data Tamu',
            'tamu' => $this->daftartamuModel->getTamu($slug)
        ];

        
        return view('tamu/detail',$data) ;
        
    }


    public function create() {
        $data = [
            'title'=> 'Tambah Data Tamu'
        ];
        return view('tamu/create', $data);
    }

    public function save() {
        dd($this->request->getVar());
    }



}


