<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Porfolio;
use App\Models\Price;
use App\Models\Team;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale',$request->lang);
        $portfolios = Porfolio::all();
        $teams = Team::all();
        $testimonails = Testimonials::all();
        $prices = Price::all();

        return view('main.index', compact('teams','portfolios', 'testimonails', 'prices'));
    }
}
