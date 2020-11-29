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
            'title' => 'Contact | yaserantariksa'
        ];
        return view('Pages/contact' , $data );
    }

}
