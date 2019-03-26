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
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    public function listMail(){
        return Mail::whereUserId(Auth::id())->get();
    }

    public function listAvatar(){
        return Avatar::whereUserId(Auth::id())->get();
    }

    public function index(){
        $mails=UserController::listMail();
        $avatars=UserController::listAvatar();
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
       return view("test");
    }

    public function imageUploadPost(request $request)
    {
        request()->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $image = $request->file('file');
        $filename = time().$image->getClientOriginalName();
        $image_resize = Image::make($image->getRealPath());              
        $image_resize->resize(100, 100);
        $uri="./avatars/" .$filename;
        $image_resize->save(public_path($uri));
        return Avatar::create([
            "user_id" => Auth::id(),
            "uri" => $uri,
            "default" => "0"//$request->default
        ]);
    }
}
