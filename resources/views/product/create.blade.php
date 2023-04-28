@extends('layout.master')


@section('content')

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <input type="text" name="test">
        @error('test')
          <span>{{ $message }}</span>
        @enderror
        <button type="submit">submit</button>
    </form>


@endsection