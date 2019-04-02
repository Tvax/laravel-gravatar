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
            echo "<a href=".route('mails.default', $id = $mail->id).">default</a> ";
            echo "<a href=".route('mails.delete', $id = $mail->id).">delete</a><br>";
        }
        echo "<h3>Vos avatar : </h3><br>";
        foreach($avatars as $avatar){
            echo "<img src='".$avatar->uri."' alt=''/><br>";
        }
    }

    ///////////////////ADD FUNCTION/////////////////////
    public function addMail(request $request){
        $data = Mail::create([
            "user_id" => Auth::id(),
            "mail" => $request->mail,
            "default" => 0,
        ]);
        return redirect()->route('index');
    }

    public function addAvatar(request $request)
    {
        request()->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048', //Accept just jpeg, png, jpg image
        ]);
        $image = $request->file('file');
        $filename = time().$image->getClientOriginalName();
        $image_resize = Image::make($image->getRealPath());              
        $image_resize->resize(100, 100);
        $uri="./avatars/" .$filename;
        $image_resize->save(public_path($uri));
        $data = Avatar::create([ //Insert the new avatar in db
            "user_id" => Auth::id(),
            "uri" => $uri,
            "default" => 0,
        ]);
        return redirect()->route('index');
    }
    ///////////////////DELETE FUNCTION/////////////////////
    public function deleteMail(request $request){
        Mail::whereId($request->id)->delete();
        return redirect()->route('index');
    }

    public function deleteAvatar(request $request){
        Avatar::whereId($request->id)->delete();
        return redirect()->route('index');
    }

    ///////////////////UPDATE FUNCTION/////////////////////
    public function updateDefaultMail(request $request){
        Mail::whereUserId(Auth::id())->update([ //Change all user's mail on default 0
            "default" => 0,
        ]);
        Mail::whereUserId(Auth::id())->whereId($request->id)->update([ //Change one mail on default 1
            "default" => 1,
        ]);
        return redirect()->route('index');
    }

    public function updateMail(request $request){
        Mail::whereUserId(Auth::id())->whereId($request->id)->update([ //Change one mail on default 1
            "mail" => $request->mail,
        ]);
        return redirect()->route('index');
    }

    public function updateDefaultAvatar(request $request){
        Avatar::whereUserId(Auth::id())->update([ //Change all user's image on default 0
            "default" => 0,
        ]);
        Avatar::whereUserId(Auth::id())->whereId($request->id)->update([ //Change one image on default 1
            "default" => 1,
        ]);
        return redirect()->route('index');
    }
}
