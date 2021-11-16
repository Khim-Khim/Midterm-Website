<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function getFoodPage(){

        return view('page.Food');
    }
}
