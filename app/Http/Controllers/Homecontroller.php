<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ {
    User,
    Contact,
    Post
};

class Homecontroller extends Controller
{
    
    public function index() {

       //$user = User::with('contact')->find(1);
       //dd($user->toArray());

    //    $contact = Contact::with('user')->find(1);

    //    return $contact;



    //$user = User::with('posts')->find(1);
    
    //return $user;

    $post = Post::with('user')->find(1);

    return $post->user;

    }
}
