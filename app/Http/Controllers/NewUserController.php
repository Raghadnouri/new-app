<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newUser;
class NewUserController extends Controller
{
    public function get_all_users(Request $request)
    {
        $users=newUser::all();
       return response()->json($users);
    }

   public function create_user(Request $request)
   {
      $newuser=newUser::create($request->all());
      return response()->json($newuser);

   }
   public function delete_user($id)
   {
    $nuser=newUser::find($id);
    $nuser->delete();

    $res =[
    "message"=>"deleted Sucsesfully",
    "status"=>"200",
    "data"=>$nuser,
    ];
   return response()->json($res);
    

   }
}
