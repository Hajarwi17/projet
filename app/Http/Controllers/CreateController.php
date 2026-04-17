<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CreateController extends Controller
{

public function index()
{
    return User::all();
}
public function afficher ($id){
    $user=User::find($id);
    if($user){
       return response()->json($user);
    }

}



    public function creer(Request $request){
  User::create([
       'name'=>$request->name,
         'email'=>$request->email,
           'password'=>$request->password
  ]);
         
    }
    public function modifier(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
            return'Modifié!';
    }
}

public function delete ($id){
    $user=User::find($id);
    if($user){
       $user->delete();
    }

}





}

