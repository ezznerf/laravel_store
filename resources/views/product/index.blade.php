@extends('layouts.index')
@section('content')
<div>
    <div class="container text-center me-2 " >

        <div class="row col-5 d-flex position-relative " style="top: 5.3rem">
            <div class="col bg-light p-4 border mb-4 rounded border border-secondary pos" >
                <h1>СМАРТФОНЫ<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-phone position-relative text-danger" viewBox="0 0 16 16" style="bottom:4px; left: 10px">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg></h1>
                <a href="{{route('product.smartphone')}}" class="stretched-link"></a>
            </div>


        </div>
        <div class="row col-5 d-flex position-relative" style="top: 5.3rem">
            <div class="col bg-light p-4 border mb-4 rounded border border-secondary">
                <h1>ТЕЛЕФОНЫ<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone position-relative text-danger" viewBox="0 0 16 16" style="bottom:4px; left: 10px">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg></h1>

                <a href="{{route('product.phone')}}" class="stretched-link"></a>

            </div>
        </div>
        <div class="row col-5 d-flex position-relative" style="top: 5.3rem">
            <div class="col bg-light p-4 border mb-4 rounded border border-secondary">
                <h1>ПЛАНШЕТЫ<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tablet-landscape position-relative text-danger" viewBox="0 0 16 16" style="bottom:4px; left: 10px">
                        <path d="M1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm-1 8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8z"/>
                        <path d="M14 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                    </svg></h1>
                <a href="{{route('product.tablet')}}" class="stretched-link"></a>

            </div>
        </div>
        <div class="row col-5 d-flex position-relative fw-bold" style="top: 5.3rem">
            <div class="col bg-light p-4 border mb-4 rounded border border-secondary">
                <h1>СМАРТ-ЧАСЫ<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-smartwatch  position-relative text-danger" viewBox="0 0 16 16" style="bottom:4px; left: 10px">
                        <path d="M9 5a.5.5 0 0 0-1 0v3H6a.5.5 0 0 0 0 1h2.5a.5.5 0 0 0 .5-.5V5z"/>
                        <path d="M4 1.667v.383A2.5 2.5 0 0 0 2 4.5v7a2.5 2.5 0 0 0 2 2.45v.383C4 15.253 4.746 16 5.667 16h4.666c.92 0 1.667-.746 1.667-1.667v-.383a2.5 2.5 0 0 0 2-2.45V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H14v-.5a2.5 2.5 0 0 0-2-2.45v-.383C12 .747 11.254 0 10.333 0H5.667C4.747 0 4 .746 4 1.667zM4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3z"/>
                    </svg></h1>
                <a href="{{route('product.smartwatch')}}" class="stretched-link"></a>

            </div>

        </div>
        <div class="col-4 rounded bg-danger " style=" position: absolute; bottom: 42.36rem; height: 30px; left: 21.1rem; width: 33.8rem">Корзина
            <a href="{{route('basket.index')}}" class="stretched-link"></a>
        </div>

        <div class="col-4 rounded" style="position: absolute; right: 10%; top: 12%; height: 32rem ">

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

            <div class="col-12 rounded bg-danger " style=" position: absolute; bottom: 95%; height: 30px">Акции

            </div>
    </div>
</div>


@endsection
