<?php

namespace App\Http\Controllers;

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

}