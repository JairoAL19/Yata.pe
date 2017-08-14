<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Socialite;
class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('guest');
    }

       public function getSocialAuth($provider=null)
       {
           if(!config("services.$provider")) abort('404');

           return Socialite::driver($provider)->redirect();
       }


       public function getSocialAuthCallback($provider=null)
       {
          if($user = Socialite::driver($provider)->user()){
            $respons = User::Where('email', $user->email)->first();
            if($respons){
                auth()->Login($respons);
                return redirect('/Reciclar/Tec');
            }else{
                 $usuario = new User();
                 $usuario->name = $user->name;
                 $usuario->email = $user->email;   
                 $usuario->avatar =  $user->getAvatar();
                 $usuario->save();
                 auth()->Login($usuario);
                 return redirect('/Reciclar/Tec');
            }
          }else{
             return '¡¡¡Algo fue mal!!!';
          }
       }
}
