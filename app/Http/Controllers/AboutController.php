<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class AboutController extends Controller
{
    public function index(){
        $aboutPage = Page::find('1');
        return view('pages.aboutus',compact('aboutPage'));
    }
}
