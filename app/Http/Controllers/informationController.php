<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\category;
use App\Models\information;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class informationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $info = information::paginate(10);
        return view('info.index')->with(compact('info'));
    }
    public function create(){
        $categories= category::All();
        return view('info.create')->with(compact('categories'));
    }

    public function store(Request $request){

        if ($request->hasFile('file'))
        {
            $url =$request->file('file')->store('public/section');
        }else{
            $url= NULL;
        }
        $information= new information();
        $information->title = $request->input('title');
        $information->description = $request->input('description');
        $information->descriptionck = $request->input('summary-ckeditor');
        $information->url = $url;
        $information->category_id = $request->input('category');
        $information->user_id = auth()->user()->id;
        $information->save();

        $image = Image::make(Storage::get($information->url))
                        ->resize(null,1200, function ($constraint) {
                            $constraint->aspectRatio();
                        })->encode();
        Storage::put($information->url,(string) $image);

        return back()->with('notification','Sección creada correctamente');

    }
    public function edit($id){
        $info = information::findOrFail($id);
        $categories = category::All();
        return view('info.edit')->with(compact('info','categories'));
    }
    public function update(Request $request, $id){

        if ($request->hasFile('file'))
        {
          $info =  information::findOrFail($id);
          Storage::delete($info->url);
          $url =  $request->file('file')->store('public/section');
        }else{
            $url= NULL;
        }

        $information = information::findOrFail($id);
        $information->title = $request->input('title');
        $information->description = $request->input('description');
        $information->descriptionck = $request->input('summary-ckeditor');
        $information->url = $url;
        $information->category_id = $request->input('category');
        $information->user_id = auth()->user()->id;
        $information->save();

        $image = Image::make(Storage::get($information->url))
                        ->resize(null,1200, function ($constraint) {
                            $constraint->aspectRatio();
                        })->encode();
        Storage::put($information->url,$image);

        return back()->with('notification','Sección actualizada correctamente');

    }

    public function delete($id)
    {
        try {
            $info = information::findOrFail($id);
            Storage::delete($info->url);
            $info->delete();

            return back()->with('notification','Sección eliminada correctamente');
        } catch (Exception $e) {
            return back()->with('error','No se ha podido eliminar, por que esta sección tiene categorias vinculadas');
        }
    }

    public function indexCategory(){
        $categories = category::paginate(10);
        return view('info.index_category')->with(compact('categories'));
    }
    public function createCategory(){
        return view('info.create_category');
    }
    public function storeCategory(Request $request){
     category::create([
         'title'=>$request['title'],
         'description'=>$request['description']
     ]);
     return back()->with('notification','Categoría creada correctamente');

    }
    public function editCategory($id){
        $category = category::findOrFail($id);
        return view('info.edit_category')->with(compact('category'));
    }
    public function updateCategory(Request $request,$id){
        $category = category::findOrFail($id);
        $category->update([
            'title'=>$request['title'],
            'description'=>$request['description']
        ]);
        return back()->with('notification','Categoría actualizada correctamente');
    }
    public function deleteCategory($id){
        try {
            $c = category::findOrFail($id);
            $c->delete();
            return back()->with('notification','Categoría eliminada correctamente');
        } catch (Exception $e) {
            return back()->with('error','No se ha podido eliminar, por que esta categoria pertenece a alguna sección');
        }
    }
    public function upload(Request $request){
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
