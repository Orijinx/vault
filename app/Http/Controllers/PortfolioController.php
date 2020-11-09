<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //Функция, которая возвращает вид страницы
    public function HomeView()
    {
        return view('ProfilePage.portfolio');
    }
    //Функция, которая сохраняет пользовательские изменения
    public function UpdatePortfolio(Request $request)
    {
        if (Auth::Check()) {
            $user = Auth::User(); //Получили текущего пользователя
            ///Проверяем блок с основной информацией
            if (isset($request->name)) {
                $user->name = $request->name;
            }
            if (isset($request->second_name)) {
                $user->second_name = $request->second_name;
            }
            if(isset($request->last_name)){
                $user->last_name = $request->last_name;
            }
            if(isset($request->citizenship)){
                $user->citizenship = $request->citizenship;
            }
            // if(isset($request->address)){
            //     $user->address = $request->address;
            // }
            if(isset($request->about)){
                $user->about = $request->about;
            }
            $user->save();
            return back();
        }
        else{
            return back();
        }

    }
}
