<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserAuthController extends Controller
{


    public function Auth(Request $request)
    {





        $user = User::where('email', $request->email)->first();

        if($user){

                return response()->json(['user'=>$user,'status'=> 200]);
             }

             return response()->json(['message'=>'usuario nao cadastrado']);

        }




}
