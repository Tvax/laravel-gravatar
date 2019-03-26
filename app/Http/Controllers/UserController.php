<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{
    public function listMail(request $request){
        return Mail::WhereUserId($request->user_id)->get();
    }

    public function listAvatar(request $request){
        return Avatar::WhereUserId($request->user_id)->get();
    }

    public function index(){
        return view("welcome");
    }
}
