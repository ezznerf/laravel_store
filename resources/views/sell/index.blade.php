@extends('layouts.index')
@section('content')

    <div class="container position-relative text-center" style="margin-top: 14rem" >
        <div class=>
            <p class="h2">Спасибо за заказ! Ожидайте в скором времени вам позвонят для уточнения.</p>
            <form action="{{route('product.index')}}" method="get">
                @csrf
                <button type="submit" class="btn btn-outline-success mb-4 mt-0 position-relative" style="width: 10rem; top: 15px">
                    На главную
                </button>
            </form>
        </div>


    </div>


@endsection
