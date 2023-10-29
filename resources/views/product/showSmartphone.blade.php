@extends('layouts.shows')
@section('content')
    <div style=>
    <div class="row g-0 bg-light position-relative" >
        <div class="col-md-6 mb-md-0 p-md-4 " style="margin-top: 2em">
            <img src="{{asset($product->img)}}" class="w-100" alt="...">
        </div>
            <div class="col-md-6 p-2 pl-md-0">
                <h1 class="mt-lg-5 text-lg-center display-4"style="margin-bottom: 30px">{{$product->brand}} {{ $product->model}}</h1>
                <dl class="row">
                    <dt class="col-sm-6 h4">OS:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$product->os}}</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">Display size:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$product->display_size}}</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">Processor:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$product->processor}}</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">Cam:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$product->megapixels}}mpx</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">Battery:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$product->battery}}mAh</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">RAM:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$product->ram}}GB</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-6 h4">ROM:</dt>
                    <dd class="col-sm-6">
                        <p class="h4">{{$product->rom}}GB</p>
                    </dd>

                </dl>
                <div class="col-md">
                    <form action="{{ route('basket.add', ['id' => $product->id]) }}"
                          method="post" class="form-inline">
                        @csrf
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col-6">
                        <label class="h4" for="input-quantity">Количество</label>
                                </div>
                                <div class="col-6">
                        <input type="text" name="quantity" id="input-quantity" value="1"
                               class="form-control mx-2 w-25">
                                </div>
                                <div class="col">
                        <button type="submit" class="h4 btn btn-success">Добавить в корзину</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
                <p class="h4">Описание: {{$product->description}}</p>


            </div>
    </div>
</div>
@endsection

