<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Febudeal</title>

    @include('pertials.styles')


</head>
<body>
  <nav class="product__up__nav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ URL::previous() }}"><i class="fas fa-arrow-left"></i></a>
          <h1>Febudeal</h1>
        </div>
      </div>
    </div>
  </nav>
  <div class="product__up__form">
    <div class="wrapper__header">
      <h2>Post Your Ad</h2>
    </div>
    <div class="selected_catagory">
      <h2>Selected Catagory</h2>
      <p class="catagory__path">
        {{ $catagory[0]->catagory }} > {{ $subcatagory[0]->subcatagories }} >
        {{ $sub2catagory->subcatagories2 }}
      </p>
    </div>
    <div class="form__body">
      <h2>Add Some Details</h2>
      <form class="" action="{{ route('product.upload.product', $sub2catagory->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" name="title" value="" id="title" required><br>
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="brand">Brand</label><br>
        <input type="text" name="brand" value="" id="brand" required><br>
        @error('brand')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="price">Price</label><br>
        <input type="text" name="price" value="" id="price" required><br>
        @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="quantity">Quantity</label><br>
        <input type="text" name="quantity" value="" id="quantity" required><br>
        @error('quantity')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="description">Description</label><br>
        <textarea rows="20" cols="50" name="description" required></textarea><br>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- <input type="checkbox" name="size[]" value="S">S
        <input type="checkbox" name="size[]" value="M">M
        <input type="checkbox" name="size[]" value="L">L
        <input type="checkbox" name="size[]" value="XL">XL
        <input type="checkbox" name="size[]" value="XXL">XXL --}}



        <h4>Upload 4 Photos</h4>
        <input type="file" name="image1" required>
        @error('image1')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="file" name="image2" required>
        @error('image2')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="file" name="image3" required>
        @error('image3')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="file" name="image4" required><br>
        @error('image4')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <input type="submit" name="submit" value="Post Now">

      </form>
    </div>
  </div>

  @include('pertials.scripts')
</body>
</html>
