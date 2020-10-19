<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrijinxNews;

class OrijinxPageController extends Controller
{
    //
    public function IndexView(){
        $news = OrijinxNews::all();
        return view('main.orijinx',compact('news'));
    }
}
