<div class="prdcts">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h2 class="prdcts__title">{{ $sections[0]->section_one }}</h2>
        </div>
        <div class="col-md-6 text-right">
          <a href="{{ route('product.firstsection') }}"> <button type="button" class="prdcts__allbtn">View all</button></a>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="prdcts__slider" id="slider1">

          @foreach ($products as $product)
            @foreach ($dotds as $dotd)
              @if ($dotd->products_id == $product->id)
                <a href="{{ route('product.details', $product->id) }}">
                <div class="prdcts__item text-center">
                  <div class="img__container">
                    <img src={{ url('storage/products/'.$product->image1) }} alt="#">
                  </div>
                  <h4>{{ $product->title }}</h4>
                  <p class="item__price">{{ $product->price }} BDT</p>
                </div>
                </a>
              @endif
            @endforeach
          @endforeach



        </div>
        <button class="prdctbtn-left prdctslider-btn slider1-btn-left"><i class="fas fa-chevron-left"></i></button>
        <button class="prdctbtn-right prdctslider-btn slider1-btn-right"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>
