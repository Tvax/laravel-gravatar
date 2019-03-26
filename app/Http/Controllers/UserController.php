<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\Mail;
use App\Avatar;

class UserController extends Controller
{
    public function listMail(request $request){
        $mails = Mail::whereUserId($request->user_id)->get();
        foreach($mails as $mail){
            echo $mail->mail.'<br>';
        }
    }

    public function listAvatar(request $request){
        $avatars = Avatar::whereUserId($request->user_id)->get();
        foreach($avatars as $avatar){
            echo "<img src='".$avatar->uri."' alt=''/><br>";
        }
    }

    public function index(){
        return view("welcome");
    }
}
