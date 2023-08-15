@extends('layouts.main')
@section('content')
    <div class="btns">
        <div class="block">
            <a class="btn btn-outline-primary button1" href="{{route('product.smartphone')}}" role="button">Smartphones</a>
        </div>
        <div class="block2">
            <a class="btn btn-outline-success button2" href="{{route('product.phone')}}" role="button">Phones</a>
        </div>
        <div class="block3">
            <a class="btn btn-outline-danger button3" href="{{route('product.tablet')}}" role="button">Tablets</a>
        </div>
        <div class="block4">
            <a class="btn btn-outline-warning button4" href="{{route('product.smartwatch')}}" role="button">Smartwatches</a>
        </div>
    </div>
@endsection
