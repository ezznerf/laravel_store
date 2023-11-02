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
                <li>
                    <a class="nav-link text-secondary" href="{{route('basket.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                            <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"/>
                        </svg></a>
                </li>

            </ul>

        </div>

    </header>
    <div class="container">
        <div class=row>
            @foreach($items as $item)
                <div class="col-md-4"  style="margin-top: 10px">
                    <div class="card" style="width:23rem; height: 570px">
                        <img src="{{asset($item->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->brand}} {{$item->model}} </h5>
                            <p class="card-text text-decoration-underline">RAM:{{$item->ram}} GB<br>ROM:{{$item->rom}} GB<br>CAM: {{$item->megapixels}} mpx</p>
                            <h4 style="float: right">{{$item->price}} ₽</h4>
                            <a href="{{route('product.showSmartphone', $item->id)}}" class="btn btn-primary stretched-link">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
