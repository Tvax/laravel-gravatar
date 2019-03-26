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
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function listMail(request $request){
        return Mail::whereUserId(Auth::id())->get();
    }

    public function listAvatar(request $request){
        return Avatar::whereUserId(Auth::id())->get();
        foreach($avatars as $avatar){
            echo "<img src='".$avatar->uri."' alt=''/><br>";
        }
    }

    public function index(request $request){
        $mails=UserController::listMail($request);
        $avatars=UserController::listAvatar($request);
        echo "<h3>Vos mails : </h3><br>";
        foreach($mails as $mail){
            echo $mail->mail.'<br>';
        }
        echo "<h3>Vos avatar : </h3><br>";
        foreach($avatars as $avatar){
            echo "<img src='".$avatar->uri."' alt=''/><br>";
        }
    }
}
