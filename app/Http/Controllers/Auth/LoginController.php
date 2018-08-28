<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
class LoginController extends Controller
{   
    public function __construct(){
        $this->middleware('guest',['only'=>'showLoginForm']);
    }
   public function showLoginForm(){
       return  view('auth.login');
   } 
   public function login(){

    $credentials = $this->validate(request(),[
        'email'=>'email|required|string',
        'password'=> 'required|string'
    ]);
    
    if(Auth::attempt($credentials)){
        return redirect()->route('posts.index');
    }

    return back()
                ->withErrors(['email'=>'Esta credenciales no coinciden'])
                ->withInput(request(['email']));
    
    
   }

   public function logout(){
        Auth::logout();
        return redirect('login');
   }


   public function reset(){
   
    
     return view('auth.perfil');
     
    
   }
  
   public function resetPass(Request $request){

      $rules = [
        'password' =>'required',
        'newpassword' => 'required|min:6|same:repassword',
      ];

      $messages = [
        'newpassword.required'=>'Nueva contrasenia requerida',
      ];

      $validator = 
      Validator::make($request->all(), $rules, $messages);
      if($validator->fails()){
        return redirect('perfil')->withErrors($validator);
      }else{
          if(Hash::check($request->password, Auth::user()->password)){
            $user =new User;
            $user->where('email','=',Auth::user()->email)
                ->update(['password'=>bcrypt($request->newpassword)]);
            return redirect('perfil')->with('info','Cambio con exito');
          }else{
            return redirect('perfil')->with('infoError','Credenciales erroneas');
          }
      }
      
   }
   

    
}
