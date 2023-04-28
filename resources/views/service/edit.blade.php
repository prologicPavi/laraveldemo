@extends('layout.master')

@section('content')

    <div class="section">
        <h1>Create Service</h1>

         
        <form action="{{ route('service.update',$service->id) }}" method="post" class="row g-3 col-md-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $service->name}}">
                @error('name')
                    <div class="error danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label">Description</label>
             <textarea  class="form-control" name="description" id="" cols="30" rows="10">{{ $service->description}}</textarea>
             @error('description')
                <div class="error danger">{{ $message }}</div>
             @enderror
            </div>
            <div class="col-md-12">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control" name="image">
             @error('image')
                <div class="error danger">{{ $message }}</div>
             @enderror
             @if($service->image)
             <img width="100px" src="{{ asset('images')}}/{{ $service->image}}" />
             @endif
            </div>
             
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>

    </div>
    


@endsection