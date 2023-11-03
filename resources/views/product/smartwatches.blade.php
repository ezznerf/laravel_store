@extends('layouts.directItems')
@section('content')

    <div class="container">
        <div class=row>
            @foreach($items as $item)
                <div class="col-md-4"  style="margin-top: 10px">
                    <div class="card" style="width:23rem; height: 590px">
                        <img src="{{asset($item->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->brand}} {{$item->model}} </h5>
                            <p class="card-text text-decoration-underline">Display:{{$item->display_size}}<br>ROM:{{$item->rom}} GB<br>OS: {{$item->os}}</p>
                            <h4 style="float: right">{{$item->price}} ₽</h4>
                            <a href="{{route('product.showSmartwatch', $item->id)}}" class="btn btn-primary stretched-link">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
