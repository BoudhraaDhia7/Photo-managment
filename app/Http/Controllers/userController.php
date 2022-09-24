<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class userController extends Controller
{
    function UserSetting($id)
    {
        $user=User::where('id',$id)->get()->first();
        return view('setting',compact("user",$user));
    }
    public function store(Request $request)
    {
        $req=$request->all();
        $user=User::where('email',$req['email'])->get()->first();
        if($user->email!=$request->email){
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'lastname'=>['required', 'string', 'max:255'],
                'sexe'=>['required'],
                'town'=>['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);    
        }else
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'lastname'=>['required', 'string', 'max:255'],
                'sexe'=>['required'],
                'town'=>['required'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]); 
        }
        
        User::where('email',$request->email)->update([
            'name' => $request->name,
            'email' => $request->email,
            'lastname'=>$request->lastname,
            'sexe'=>$request->sexe,
            'town'=>$request->town,
            'password' => Hash::make($request->password),
        ]);

        

        

        return redirect(route('dashboard'));
    }
    public function userProfile($id)
    {
        $data=User::where('id',$id)->get()->first();
        $posts=Post::where('userId',$id)->get()->all();
        return view('profile',compact('data',$data,'posts',$posts));
    }
}
