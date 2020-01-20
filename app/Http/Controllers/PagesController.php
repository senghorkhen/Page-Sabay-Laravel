<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function sport() {
       
        $sports = array(

            "title" => "Cambodia Sport",
            "football" => [
                "Club" => "Boeng Ket",
                "Price" => "20 mullions dollars",
                "Location" => "Phnom Penh"
            ],
            "VoleyBall" => [
                "Club" => "Visakha",
                "Player" => "Duk",
                "Price" => "100 mullions dollars",
                "Location" => "Phnom Penh"
            ],
        );
        return view('pages.sport')-> with($sports);
    }
}

