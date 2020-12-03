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

        // jika data tamu tidak ditemukan di table
        if(empty($data['tamu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tamu atas nama ' .$slug. ' tidak ditemukan.');
        }

        
        return view('tamu/detail',$data) ;
        
    }


    public function create() {
    

        $data = [
            'title'=> 'Tambah Data Tamu',
            'validation' => \Config\Services::validation()
        ];
        return view('tamu/create', $data);
    }

    public function save() {
        
        // validasi data yang di input
        if(!$this->validate([
            'nama' => [
                'rules' =>'required|is_unique[daftartamu.nama]',
                'errors' => [
                    'required' => '{field} tamu harus diisi',
                    'is_unique' => '{field} tamu sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            
            return redirect()->to('/tamu/create')->withInput()->with('validation',$validation);
        }

        $slug = url_title($this->request->getVar('nama'), '_', true);
        $this->daftartamuModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'foto' => $this->request->getVar('foto')
        ]);

        session()->setFlashdata('pesan','Data berhasil ditambahkan.') ;

        return redirect()->to('/tamu');
    }


    public function delete($id) {
        $this->daftartamuModel->delete($id);

        session()->setFlashdata('pesan','Data berhasil dihapus.') ;

        return redirect()->to('/tamu');
    }

    public function edit($slug) {
        $data = [
            'title'=> 'Ubah Data Tamu',
            'validation' => \Config\Services::validation(),
            'tamu' => $this->daftartamuModel->getTamu($slug)
        ];
        return view('tamu/edit', $data);
    }
    public function update($id)
    {
       dd($this->request->getVar()) ;
    }



}


