@extends('admin.admin')

@section('content')

  <ul>
    @foreach ($catagories as $catagory)
        <li><a href="{{ route('admin.to.catagory.product', $catagory->id) }}">{{ $catagory->catagory }}</a> </li>
    @endforeach
  </ul>

@endsection
