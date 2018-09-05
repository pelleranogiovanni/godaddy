<?php

namespace App\Http\Controllers\Web;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use App\Image;
use Mail;
use Session;
use Redirect;

class PageController extends Controller
{
    public function blog(){

        $publi = Image::orderBy('created_at','asc')->where('tipo',1)->get();
    	$posts = Post::orderBy('created_at','desc')->paginate(5);
       
    	return view('web.posts',compact('publi','posts'));
    }

    public function post($id){
        $publi = Image::orderBy('created_at','asc')->where('tipo',1)->get();
    	$post = Post::where('id',$id)->first();
        $images = Image::all()->where('post_id',$id);
        return view('web.post',compact('post','images'));
    	
    }

    public function category($id){
    	$publi = Image::orderBy('created_at','asc')->where('tipo',1)->get();
    	$posts = Post::where('category_id',$id)
    	 		->orderBy('id','desc')->paginate(3);

    	 return view('web.posts',compact('posts','publi'));		

    }

    // pendiente tags
     public function tag($id){
    	// $category = Category::where('id',$id)->pluck('id')->first();
    	$posts = Post::where('category_id',$id)
    	 		->orderBy('id','desc')->paginate(3);

    	 return view('web.posts')->with('posts',$posts);		

    }

    public function contacto(){

        return view('web.contacto');
    }

    public function mail(Request $request){


        $data = array(
            'nombre' => $request->nombre,
            'email' =>$request->email,
            'asunto' =>$request->asunto,
            'mensaje' =>$request->mensaje
        );


          Mail::send('web.mensaje', $data, function($message) use ($data) {
                        $message->to('silvaluis905@yahoo.com.ar');
                        $message->subject($data['asunto']);
                        $message->from($data['email']);
                    });

         Session::flash('enviado');
        return Redirect::to('/contacto');

        
    }

    public function acerca(){

       return view('web.acerca');
            
    }

    


}
