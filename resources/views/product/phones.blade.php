@extends('layouts.directItems')
@section('content')

    <header>
        <div class="container-fluid ">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.index')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.phone')}}">PHONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.tablet')}}">TABLETS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.smartwatch')}}" >SMARTWATCHES</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class=row>
            @foreach($items as $item)
                <div class="col-md-4"  style="margin-top: 10px">
                    <div class="card" style="width:23rem; height: 570px">
                        <img src="{{asset($item->img)}}" class="card-img-top" alt="..." width="399" height="395">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->brand}} {{$item->model}} </h5>
                            <p class="card-text text-decoration-underline">RAM:{{$item->ram}} GB<br>ROM:{{$item->rom}} GB<br>CAM: {{$item->megapixels}} mpx</p>
                            <h4 style="float: right">{{$item->price}} ₽</h4>
                            <a href="{{route('product.showPhone', $item->id)}}" class="btn btn-primary stretched-link">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
