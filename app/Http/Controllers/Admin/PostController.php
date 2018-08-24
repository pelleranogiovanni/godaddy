<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Requests\PostStoreRequest;


use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Image;
use Input;
use App\Image as Imagen;



class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('admin.posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(PostStoreRequest $request)
    {

        $post = new Post;
       
        if ($request->file('file')) {
          $fotos = $request->file('file');
        $image = $fotos[0];

        $ruta = public_path().'/img/posts/';
    
      
      
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img/posts/' . $filename);

        Image::make($image->getRealPath())->resize(468, 249)->save($path);
        
        $post->file = '/img/posts/'.$filename;
        }else{
            
            $image= 'default.jpg';
            $post->file = '/img/posts/'.$image;
           
        }
        
        $post->title = $request->input('titulo');
        $post->user_id = 1;
        $post->description = $request->input('descripcion');
        
        
        $post->category_id = intval($request->input('category_id'));
        $post->author = $request->input('autor');
        $post->body = $request->input('contenido');
        

       

        $post->save();

        
        $post = DB::table('posts')
                ->latest()
                ->first();

        $ultimo = $post->id;
        
  
        return redirect('/posts')->with('info','Post creado exitosamente');
   
        
    }

    public function store(PostStoreRequest $request){

             $validated = $request->validated();


            $ruta = public_path().'/img/posts/';
              // recogida del form
            $imagenOriginal = $request->file('file');
         
            // crear instancia de imagen
            $imagen = Image::make($imagenOriginal);
         
          // generar un nombre aleatorio para la imagen
            $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
         
            // $imagen->resize(600,400,function($constraint){
            //     $constraint->aspectRatio();
            // });
         
          // guardar imagen
          // save( [ruta], [calidad])
           $imagen->save($ruta . $temp_name, 70);
         
         
        $post = new Post;

        $post->file = '/img/posts/'.$temp_name;
        $post->title = $request->input('titulo');
        $post->user_id = 1;
        $post->description = $request->input('descripcion');
            
            
            $post->category_id = intval($request->input('category_id'));
            $post->author = $request->input('autor');
            $post->body = $request->input('contenido');

          $post->save();

          $post = DB::table('posts')
                ->latest()
                ->first();

        $ultimo = $post->id;
        
        if($request->file('foto')){
            foreach ($request->file('foto') as $img) {

            $ruta = public_path().'/img/posts/';
              // recogida del form
            $imagenOriginal = $img;
         
            // crear instancia de imagen
            $imagen = Image::make($imagenOriginal);
         
          // generar un nombre aleatorio para la imagen
            $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
         
            $imagen->resize(300,200);

            $image = new Imagen;

            $image->ruta = '/img/posts/'.$temp_name;

            $image->titulo ='Post';
            $image->tipo =2;
            
            $image->post_id = $ultimo;

             $imagen->save($ruta . $temp_name, 100);
             $image->save();
       }
        }
       
            
           return redirect('/posts')->with('info','Post creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $post = Post::find($id);
        $images = Imagen::all()->where('post_id',$post->id);
        return view('admin.posts.show',compact('post','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post = Post::find($id);
        $categories = Category::all();
        $images = Imagen::all()->where('post_id',$id);
        return view('admin.posts.edit', compact('post','categories','images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

          $post = Post::find($id);

        if ($request->file('file')) {
             $ruta = public_path().'/img/';
 
        $image = $request->file('file');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img/posts/' . $filename);

        Image::make($image->getRealPath())->resize(468, 249)->save($path);

         $post->file = '/img/posts/'.$filename;
        }else{
           // $filename = 'default.png';
        }
       

      
        $post->title = $request->input('title');
        $post->user_id = 1;
        $post->description = $request->input('description');
        
       
        $post->category_id = $request->input('categories');
        $post->author = $request->input('author');
        $post->body = $request->input('body');

        $post->save();

        return redirect('/posts/'.$post->id)->with('info','Post actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $post = Post::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }



    protected function random_string()
    {
        $key = '';
        $keys = array_merge( range('a','z'), range(0,9) );
     
        for($i=0; $i<10; $i++)
        {
            $key .= $keys[array_rand($keys)];
        }
     
        return $key;
    }
}
