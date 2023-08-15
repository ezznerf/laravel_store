@extends('layouts.main')
@section('content')
        <div class="container-fluid position-absolute top-50 start-50 translate-middle">
            <ul class="nav justify-content-around">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('product.smartphone')}}">   SMARTPHONES   </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('product.phone')}}">   PHONES   </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('product.tablet')}}">   TABLETS   </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('product.smartwatch')}}">   SMARTWATCHES   </a>
                </li>
            </ul>
        </div>

@endsection
