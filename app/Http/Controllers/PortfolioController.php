<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Slider;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::where([
            ['status','=',1]
        ])->get();
        return view('pages.portfolio',compact('portfolios'));
    }

    public function show($id){
        $portfolio = Portfolio::find($id);
        $html = array();
            foreach (json_decode($portfolio->img_portfolio) as $file){
                $file_url = asset('storage/'.$file);
                $html[] .= '<img src="'.$file_url . '" class="img-responsive"><hr>';
            }
        return $html;
    }
}
