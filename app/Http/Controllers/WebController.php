<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view('home');
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function danhSach(){
        return view('page.danhsach');
    }

    public function addDanhsach(){
        return view('page.themmoi');
    }

    public function dsLoaiSP(){
        return view('page.dsloaisp');
    }
    public function themLoaiSP(){
        return view('page.themloaisp');
    }

}
