@extends('layout.master')

@section('content')

    <div class="section">
        <h1>Create Service</h1>

         
        <form action="{{ route('service.store') }}" method="post" class="row g-3 col-md-6" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
                @error('name')
                    <div class="error danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
              <label for="description" class="form-label">Description</label>
             <textarea  class="form-control" name="description" id="" cols="30" rows="6"></textarea>
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
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

    </div>
    


@endsection