<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ApiController extends Controller{
    public function config(){
        return response()->json([
            'version' => '1',
            'size' => '50',
            'defaultSize' => '50',
            'format' => 'jpg',
        ]);
    }
}
