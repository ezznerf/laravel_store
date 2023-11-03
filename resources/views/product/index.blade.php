@extends('layouts.index')
@section('content')
<div>
    <div class="container text-center me-2 " >

        <div class="row col-5 d-flex position-relative">
            <div class="col bg-light p-4 border mb-4 rounded" style="margin-top: 24%">
                <h1>СМАРТФОНЫ</h1>
                <a href="{{route('product.smartphone')}}" class="stretched-link"></a>
            </div>


        </div>
        <div class="row col-5 d-flex position-relative">
            <div class="col bg-light p-4 border mb-4 rounded">
                <h1>ТЕЛЕФОНЫ</h1>
                <a href="{{route('product.phone')}}" class="stretched-link"></a>

            </div>
        </div>
        <div class="row col-5 d-flex position-relative">
            <div class="col bg-light p-4 border mb-4 rounded">
                <h1>ПЛАНШЕТЫ</h1>
                <a href="{{route('product.tablet')}}" class="stretched-link"></a>

            </div>
        </div>
        <div class="row col-5 d-flex position-relative fw-bold">
            <div class="col bg-light p-4 border mb-4 rounded">
                <h1>СМАРТ-ЧАСЫ</h1>
                <a href="{{route('product.smartwatch')}}" class="stretched-link"></a>

            </div>

        </div>

        <div class="col-4 rounded" style="position: absolute; right: 10%; top: 12%; height: 32rem ;background-color: #0a3622">

            <div class="card border-danger mb-3" style="max-width: 100%; height: 10rem; top:2rem">
                <div class="card-header">Cкидки</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Черная пятница!</h5>
                    <p class="card-text">Срочно оформите заказ самовывозом или купитете в нашем физическом магазине в эту пятницу и получите выгоду до 50% </p>
                </div>

            </div>

            <div class="card border-danger mb-3" style="max-width: 100%; height: 8rem; top: 2rem">
                <div class="card-header ">Выгодное предложение</div>
                <div class="card-body text-danger">
                    <p class="card-text">При покупке любого товара бренда POCO получите видеокарту GeForce RTX 2040 </p>
                </div>

            </div>

            <div class="card border-danger mb-3" style="max-width: 100%; height: 10rem; top: 2rem">
                <div class="card-header">Акция</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">1+1=2</h5>
                    <p class="card-text">Если вы купите или закажите один любой товар в нашем магазине то получите второй товар по его же цене в подарок !</p>
                </div>

            </div>

            <div class="col-12 rounded " style=" position: absolute;background-color: #0dcaf0; bottom: 95%; height: 5%">Корзина
                <a href="{{route('basket.index')}}" class="stretched-link"></a>
            </div>
    </div>
</div>


@endsection
