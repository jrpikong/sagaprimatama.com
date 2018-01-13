<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        /*Slider for home*/
        $sliders = Slider::where([
            ['status','=',1]
        ])
            ->orderby('order','ASC')
            ->get();
        return view('pages.home',compact('sliders'));
    }
}
