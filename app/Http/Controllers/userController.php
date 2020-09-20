<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
    public function index(){
        $name = "raihan";
        $info = array('A','B','C');
        return view('welcome',compact('info'));
    }
    public function posts(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function postsId($id){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }

    public function addPost(){
        $response = Http::post('https://jsonplaceholder.typicode.com/posts/',[
            'userId' => 66,
            'title'=>'new post',
            'body'=>'new post body'
        ]);
        return $response->json();
    }
    public function update(){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title'=>'new post update',
            'body'=>'new post body update'
        ]);
        return $response->json();
    }

    public function delete($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }

}
