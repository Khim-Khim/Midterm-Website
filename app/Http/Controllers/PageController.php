<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use App\User;
use App\advertisement;
class PageController extends Controller
{
    public function getIndex(){

        $hotstatus = status::where('hot',1)->leftjoin('users','status.user_id','=','users.id')->paginate(6);
        $advertisement = advertisement::all();
       
        return view('page.index',compact('hotstatus','advertisement'));
    }
  

}
