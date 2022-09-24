<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class postController extends Controller
{
    public function addPost()
    {        
        return view('addPost');
    }
    public function storePost(Request $req)
    {
        $data=$req->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'Desc' => ['required', 'string', 'max:255'],
                'town' => ['required', 'string', 'max:255'],
                'userId' => ['required', 'string', 'max:255'],
                'img' => ['required', 'image'],
                'gmapX' => ['required', 'string', 'max:255'],
                'gmapY' => ['required', 'string', 'max:255'],
            ]
            );
            $imgpath=$req->img->store('uploads','public');
            $post = Post::create([
                'name' => $req->name,
                'desc' => $req->Desc,
                'town'=>$req->town,
                'userId'=>$req->userId,
                'gmapX'=>$req->gmapX,
                'gmapY'=>$req->gmapY,
                'img'=>$imgpath,                
            ]);
           $img=Image::make(public_path("storage/{$imgpath}"))->fit(6000,6000);
           $img->save();
           dd("zzzz"); 
         return redirect(route("user.profile",['id'=>auth::user()->id]));
    }
}
