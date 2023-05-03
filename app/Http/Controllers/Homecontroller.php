<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ {
    User,
    Contact,
    Post,
    Category
};

class Homecontroller extends Controller
{
    
    public function index() {

      // $categories = Category::all();
      
      // $post = Post::with('categories')->first();
      
      // $post->categories()->detach(['1','2']);

      // $post = Post::with('categories')->first();

      // return $post;

      $user = User::with('contactInfo')->find(1);

      return $user;

      //return $user->makeHidden(['password','remember_token'])->toJson();

     // $contact = Contact::with('user')->find(1);

     //return $contact->user;



   // $user = User::with('posts')->find(1);
    
    //return $user->posts;

    // $categories = Category::all();

    // $post = Post::first();
    

   // return $post;

    }
}
