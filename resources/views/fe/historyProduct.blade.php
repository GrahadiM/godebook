@extends('layouts.fe.index')

@section('content')

    <!-- CHECKOUT -->
    <div class="container mt-5 mb-5">
        <div class="card border-0" action="" method="post">
            <div class="card-header text-center">
                <h3>Order Product History - {{ $order->code_order }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Name</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('images/product').'/'.$item->product->thumbnail }}" alt="{{ $item->product->name }}" width="50" class="product-img">
                                </td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ __('Rp.').number_format($item->product->price,2,',','.') }}</td>
                                <td>{{ __('Rp.').number_format($item->product->price*$item->qty,2,',','.') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <th class="text-center" colspan="6">DATA NOT FOUND OR EMPTY!</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- CHECKOUT -->

@endsection
