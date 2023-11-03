@extends('layouts.index')
@section('content')
<div>
    <div class="container text-center" >

        <div class="row col-5" style="padding-right: 0px">
            <div class="col bg-light p-5 border mb-4 rounded" style="margin-top: 24%">
                <h1>СМАРТФОНЫ</h1>

            </div>

        </div>
        <div class="row col-5">
            <div class="col bg-light p-5 border mb-4 rounded">
                <h1>ТЕЛЕФОНЫ</h1>
            </div>
        </div>
        <div class="row col-5">
            <div class="col bg-light p-5 border mb-4 rounded">
                <h1>ПЛАНШЕТЫ</h1>
            </div>
        </div>
        <div class="row col-5">
            <div class="col bg-light p-5 border mb-4 rounded">
                <h1>СМАРТ-ЧАСЫ</h1>
            </div>
        </div>

        <div class="col-4 rounded" style="position: absolute; right: 16%; top: 12%; height: 61.9% ;background-color: #0a3622">

            <div class="card border-danger mb-3" style="max-width: 100%; height: 25%">
                <div class="card-header">АКЦИЯ</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Черная пятница!</h5>
                    <p class="card-text">Срочно оформите заказ самовывозом или купитете в нашем физическом магазине в эту пятницу и он получите выгоду до 50% </p>
                </div>

            </div>
            <div class="card border-danger mb-3" style="max-width: 100%; height: 15%">
                <div class="card-header">НОВОЕ</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Новоинки последней недели</h5>
                </div>
        </div>

            <div class="card border-danger mb-3" style="max-width: 48%; height: 55.1%">
                <div class="card-header">Название продукта</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Фото</h5>
                </div>

            </div>
            <div class="card border-danger mb-3" style="max-width: 48%; height: 55.3%; left: 52%; bottom:57.6%">
                <div class="card-header">Название продукта</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Фото</h5>
                </div>

            </div>
            <div class="col-12 rounded" style="position: absolute; background-color: #0dcaf0; bottom: 103%; height: 5%">Корзина</div>
    </div>
</div>


@endsection
