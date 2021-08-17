<?php

namespace App\Http\Controllers;

use App\AccessToken;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiKeyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(Request $request){
        $token = AccessToken::where('user_id', auth()->user()->id)->where('expires_at', '>', Carbon::now())
            ->orderBy('created_at', 'desc')->first();
        $if_first = true;
       

        if($request->ajax()){
            if($request->type == 'key-generate'){
                if($token){
                    auth()->user()->tokens()->delete();
                    $if_first = false;
                }
                $token = auth()->user()->createToken('AuthToken')->accessToken;
                return [
                    'token' =>$token,
                    'created_at' => auth()->user()->tokens()->first()->created_at ?? null,
                    'if_first' => $if_first,
                ];
            }
        }else{
            return view('api-key', compact('token'));
        }
    }
}
