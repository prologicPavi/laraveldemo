@extends('layout.master')

@section('content')

    <div class="section">
        <h1>Service</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach($services as $key => $service)
              <tr>
                <td> {{ $key + 1 }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>
                  @if($service->image)
                  <img width="100px" src="{{ asset('images')}}/{{ $service->image}}" />
                  @endif
                </td>
                <td><a href="{{ route('service.edit',$service->id) }}">Edit</a></td>
                <td><a href="{{ route('service.show',$service->id) }}">View</a></td>
                <td> 
                    <form method="POST" action="{{ route('service.destroy',$service->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                
                        <div class="form-group">
                            <input type="submit" class="btn-link delete-user" value="Delete user">
                        </div>
                    </form>
                </td>
              </tr>
            @endforeach
              
            </tbody>
          </table>

    </div>
    

    <script>
        $('.delete-user').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
@endsection