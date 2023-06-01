<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ {
    User,
    Contact,
    Post,
    Category
};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PDF;

class Homecontroller extends Controller
{
    
    public function index() {

      // $categories = Category::all();
      
      // $post = Post::with('categories')->first();
      
      // $post->categories()->detach(['1','2']);

      // $post = Post::with('categories')->first();

      // return $post;

      //$user = User::with('contactInfo')->find(1);

      //return $user;

      //return $user->makeHidden(['password','remember_token'])->toJson();

     // $contact = Contact::with('user')->find(1);

     //return $contact->user;



   // $user = User::with('posts')->find(1);
    
    //return $user->posts;

    // $categories = Category::all();

    // $post = Post::first();
    

    // return $post;

      return view('user.create');

    }

    public function resume() {
      
      $user = User::latest()->first()->toArray();

      $pdf = PDF::loadView('user.resume', $user);

      return $pdf->stream('resume.pdf');
       
      
    }

    public function store(Request $request) {

      //$users =  DB::select('select * from users');

      DB::beginTransaction();

      try { 
        
        $user = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password)
        ]);
  
        //throw new \ErrorException('Error found');

        Post::create([
          'title' => $request->title,
          'description' => $request->description,
          'user_id'  => $user->id 
        ]);

        DB::commit();

      } catch(\Exception $e) {

        DB::rollBack();

        return back()->with('error','Something went wrong'); 

      }
      return back()->with('success','User/Post created successfully');    

    }


    public function ajaxreq() {
      $categories = Category::all();

      return view('sample',compact('categories'));
    }

    public function ajaxstore() {
      return 'success';
    }


    public function fetchcat(Request $request) {
      
      $cat_post = Category::with('posts')->findOrFail($request->id)->toArray();

      return $cat_post['posts'];
    }

}
