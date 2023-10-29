@extends('layouts.shows')

@section('content')
    <div class="container" style="margin-top: 19vh">
        <h1>Ваша корзина</h1>
        @if (count($products))
            @php
                $basketCost = 0;
            @endphp
            <form action="#" method="post" class="text-right">
                @csrf
                <button type="submit" class="btn btn-outline-danger mb-4 mt-0">
                    Очистить корзину
                </button>
            </form>
            <table class="table table-bordered">
                <tr>
                    <th>№</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>Кол-во</th>
                    <th>Стоимость</th>
                    <th></th>
                </tr>
                @foreach($products as $product)
                    @php
                        $itemPrice = $product->price;
                        $itemQuantity =  $product->pivot->quantity;
                        $itemCost = $itemPrice * $itemQuantity;
                        $basketCost = $basketCost + $itemCost;
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="{{ route('product.showSmartphone', [$product->id]) }}">
                                {{ $product->model }}
                            </a>
                        </td>
                        <td>{{ number_format($itemPrice, 2, '.', '') }}</td>
                        <td>
                            <form action="{{ route('basket.minus', ['id' => $product->id]) }}"
                                  method="post" class="d-inline">
                                @csrf
                                <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
                                    </svg>
                                </button>
                            </form>
                            <span class="mx-1">{{ $itemQuantity }}</span>
                            <form action="{{ route('basket.plus', ['id' => $product->id]) }}"
                                  method="post" class="d-inline">
                                @csrf
                                <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5A.5.5 0 0 0 4 11z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                        <td>{{ number_format($itemCost, 2, '.', '') }}</td>
                        <td>
                            <form action="{{route('basket.remove', ['id'=>$product->id])}}"
                                  method="post">
                                @csrf
                                <button type="submit" class="m-0 p-0 border-0 bg-transparent text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="4" class="text-right">Итого</th>
                    <th>{{ number_format($basketCost, 2, '.', '') }}</th>
                    <th></th>
                </tr>
            </table>
    </div>
        @else
            <p>Ваша корзина пуста</p>
    @endif
@endsection
