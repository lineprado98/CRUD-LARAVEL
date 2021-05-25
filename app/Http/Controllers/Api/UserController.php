<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{


    public function create(Request $request) {

            try {
                    error_log($request);
                $user = User::create([
                    'name' => $request->nome,
                    'email'=>$request->email,
                    'id_address' =>1,
                    'token'=>'token'

                    ]);
         if($user){

                return response()->json(['user'=>$user,'status'=> 200]);
             }

             return response()->json(['message'=>'usuario nao cadastrado']);



            } catch(Throwable $e) {
                report($e);

                return false;
            }
    }




}
