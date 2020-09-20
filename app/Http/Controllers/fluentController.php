<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class fluentController extends Controller
{
    public function index(Request $request){

        return $request->fullUrl();
       // echo "fluent";

        // $slice = Str::of("Wellcome Our Youtube Channnel")->after("Wellcome Our");
        // echo $slice;

        // $slice2 = Str::of("Illuminate\Support\Str\controller")->afterLast("\\");
        // echo $slice2;

        // $slice2 = Str::of("Hello ")->append("World");
        // echo $slice2;

        // $slice2 = Str::of("Hello ")->lower();
        // echo $slice2;

        // $slice2 = Str::of("Laravel 7.0")->replace("7","8");
        // echo $slice2;

        // $slice2 = Str::of("laravel framework ")->title();
        // echo $slice2;

        // $slice2 = Str::of("laravel framework ")->slug('-');
        // echo $slice2;

        // $slice2 = Str::of("laravel framework ")->upper();
        // echo $slice2;

        // $slice2 = Str::of("laravel framework ")->substr(8);
        // echo $slice2;

        // $slice2 = Str::of("/laravel/")->trim('/');
        // echo $slice2;
    }

    public function getSession(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else {
            echo "No Data show in Session";
        }
    }
    public function setSession(Request $request){
        $request->session()->put('name','Raihan');
        echo "Data has been set in session";
    }
    public function removeSession(Request $request){
        $request->session()->forget('name');
    }

    public function posts(){
        $post = DB::table('posts')->get();
        return view('posts',compact('post'));
    }

    public function addPost(){
        return view('addPost');
    }
    public function postSubmit(Request $request){
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return back()->with('post_created','Post has been Created Successfully');
    }
    public function postView($id){
        $single = DB::table('posts')->where('id',$id)->first();
        return view('singlePost',compact('single'));

    }

    public function postDelete($id){
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_delete','Post has been Deleted Successfully');
    }

    public function postUpdate(Request $request,$id){
        DB::table('posts')->where('id',$id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->to('/posts');
    }
}
