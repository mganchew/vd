<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function index()
    {
        return view('pages.welcome');
    }

    public function info()
    {
        return view('pages.info');
    }

    public function registration()
    {

        return view('pages.registration');

    }

    public function gallery()
    {


        $files = \File::allFiles(public_path('/images/gallery'));
        foreach ($files as $file) {
            $fileName = '/images/gallery/' . $file->getFileName();
            $gallery[] = ['src' => $fileName, 'w' => 1600, 'h' => 1080];
        }

        return $gallery;
    }

}