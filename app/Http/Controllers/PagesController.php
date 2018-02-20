<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel !';
        return view('Pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'who we are?';
        return view('Pages.about')->with('title',$title);
    }
    public function services(){
        $data=array(
        'title' => 'We know our clients requirments. Hence,',
        'services'=>['Web Design','Programming','SEO']
        );
        return view('Pages.services')->with($data);
    }
}
