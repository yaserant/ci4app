<?php 

namespace App\Controllers;

class Portofolio extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Daftar Portofolio'

        ];
        return view('portofolio/index', $data);
    }
}