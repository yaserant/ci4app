<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Home | yaserantariksa'
        ];
        return view('Pages/home' , $data);
	}


	public function about()
	{
        $data = [
            'title' => 'About Me | yaserantariksa'
        ];
        return view('Pages/about' , $data );
    }
    

    public function contact()
    {
        $data = [
            'title' => 'Contact | yaserantariksa',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'komplek' => 'Komplek Griya Prima Asri',
                    'jalan' => 'Jl. Nuri D1 No.14 RT.003 RW.014',
                    'kelurahan' => 'Desa Bojongmalaka, Kecamatan Baleendah',
                    'kota kab' => 'Kabupaten Bandung, Jawa Barat',
                    'negara' => 'Indonesia, 40375'
                ],
                [
                    'tipe' => 'Kantor',
                    'komplek' => 'Komplek Griya Prima Asri',
                    'jalan' => 'Jl. Nuri D1 No.14 RT.003 RW.014',
                    'kelurahan' => 'Desa Bojongmalaka, Kecamatan Baleendah',
                    'kota kab' => 'Kabupaten Bandung, Jawa Barat',
                    'negara' => 'Indonesia, 40375'
                ]
            ]
        ];
        return view('Pages/contact' , $data );
    }

}
