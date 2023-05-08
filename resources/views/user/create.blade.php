@extends('layout.master')

@section('page-title','Service')

@section('content')

    <div class="section mt-5 mb-5 ">
        <h1 class="mb-5">New user</h1> 

            @if(session('success'))
                <span class="alert alert-success">{{ session('success') }}</span>
            @endif

            @if(session('error'))
                <span class="alert alert-danger">{{ session('error') }}</span>
            @endif
            
    </div>
    <div class="section col-4"> 
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3 ">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" > 
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" > 
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3 ">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control" > 
            </div>
            <div class="mb-3 ">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" > 
            </div>
             
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
     
   


@endsection

 