@extends('layouts.shows')
@section('content')
    <header>
        <div class="container-fluid ">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.index')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.smartphone')}}">SMARTPHONES</a>
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
    <div style=>
    <div class="row g-0 bg-light position-relative" >
        <div class="col-md-6 mb-md-0 p-md-4 " style="margin-top: 2em">
            <img src="{{asset($smartphone->img)}}" class="w-100" alt="...">
        </div>
            <div class="col-md-6 p-2 pl-md-0">
                <h1 class="mt-lg-5 text-lg-center display-4"style="margin-bottom: 30px">{{$smartphone->brand}} {{ $smartphone->model}}</h1>
                <dl class="row">
                    <dt class="col-sm-6 h4">OS:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$smartphone->os}}</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">Display size:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$smartphone->display_size}}</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">Processor:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$smartphone->processor}}</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">Cam:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$smartphone->megapixels}}mpx</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">Battery:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$smartphone->battery}}mAh</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">RAM:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$smartphone->ram}}GB</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">ROM:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$smartphone->rom}}GB</p>
                    </dd>

                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h2 text-danger">{{$smartphone->price}}₽</dt>
                    <dd class="col-sm-6">
                        <a class="btn btn-primary"href="#" style="height: 50px; width: 150px ; ">КУПИТЬ</a>
                    </dd>

                </dl>
                <p class="h4">Описание: {{$smartphone->description}}</p>


            </div>
    </div>
</div>
@endsection

