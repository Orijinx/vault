<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\statistics;

class MainController extends Controller
{
    //функция для обработки запроса главной страницы
    public function IndexView(){
        $stat = statistics::latest()->first();

        return view('welcome',compact('stat'));
    }
}
