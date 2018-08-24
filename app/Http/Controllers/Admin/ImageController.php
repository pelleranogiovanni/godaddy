<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageStoreRequest;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Image;
use Input;
use App\Image as Imagen;




class ImageController extends Controller
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
      $images = Imagen::orderBy('created_at','desc')->paginate(5);

        return view('admin.images.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create($id)
    // {   

    //     return view('admin.images.create');
    // }

    public function crear($id){
        $post = Post::find($id);
        return view('admin.images.create',compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageStoreRequest $request)
    {

             
            if ($request->file('foto')) {
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
            $image->tipo = 2;
            $image->post_id = $request->post_id;
            if ($request->titulo) {
                $image->titulo = $request->titulo;
            }else{
                $image->titulo ='Post';
            }

             $imagen->save($ruta . $temp_name, 100);
             $image->save();
            }  

        }
    
        
     
  
        return redirect('/images/'.$request->post_id)->with('info','Creado exitosamente');
   
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
        $images = Imagen::all()->where('post_id',$id);

        return view('admin.images.show',compact('images','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Imagen::find($id)->delete();
        return back()->with('info', 'Eliminada correctamente');
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
