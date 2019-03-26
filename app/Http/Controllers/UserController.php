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

    public function addMail(request $request){
        return Mail::create([
            "user_id" => Auth::id(),
            "mail" => "testmail@test.com",//$request->mail,
            "default" => "0"//$request->default
        ]);
    }

    public function addAvatar(request $request){
        return Avatar::create([
            "user_id" => Auth::id(),
            "uri" => "https://farm8.staticflickr.com/7907/40388884403_183783007c_h.jpg",//$request->uri,
            "default" => "0"//$request->default
        ]);
    }
}
