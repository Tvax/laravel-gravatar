<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ApiController extends Controller{
    public function config(){
        return response()->json($this->getConfig());
    }

    public function avatar(Request $request){
        validateEmail($request);
        //TODO get avatar picture
        if($avatar != null){
            return $this->sendJson($avatar);
        }
        //if unknown adress
        return $this->sendJson($this->getError404());
    }

    private function getConfig(){
        return [
            'status' => 'success',
            'version' => '1',
            'size' => '50',
            'defaultSize' => '50',
            'format' => 'jpg',
        ];
    }

    public function error(){
        return $this->sendJson($this->getError404());
    }

    private function getAvatar($avatar){
        return [
            'status' => 'success',
            'avatar' => $avatar,
        ];
    }

    private function getError404(){
        return [
            'status' => 'error',
            'code' => '404',
            'message' => 'Email not found',
        ];
    }

    private function sendJson($data){
        return response()->json($data);
    }

    private function validateEmail($request){
        $request->validate([
            'email' => 'required|email'
        ]);
    }
}
