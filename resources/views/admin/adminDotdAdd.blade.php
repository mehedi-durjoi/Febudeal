@extends('admin.admin')

@section('content')


    <table border="1" style="width: 100%; margin: 20px;">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
      </tr>

      @foreach ($products as $product)
        <tr>

              <td>{{ $product->id }}</td>
              <td>{{ $product->title }}</td>
              <td>
                @foreach ($dotds as $dotd)
                  @if ($dotd->products_id==$product->id)
                    <p>It's Already Added</p>
                  @endif
                @endforeach
                <form class="" action="{{ route('admin.dotd.add', $product->id) }}" method="post">
                  @csrf
                    <input type="submit" name="Dotd" value="Add Dotd">

                </form>
              </td>



        </tr>
      @endforeach

    </table>

@endsection
