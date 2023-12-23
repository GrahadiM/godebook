@extends('layouts.fe.index')

@section('content')

    <!-- CHECKOUT -->
    <div class="container mb-5">
        <div class="card border-0" action="" method="post">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Name</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cart as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('images/product').'/'.$item->product->thumbnail }}" alt="{{ $item->product->name }}" width="50" class="product-img">
                                </td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ __('Rp.').number_format($item->product->price,2,',','.') }}</td>
                                <td>{{ __('Rp.').number_format($item->product->price*$item->qty,2,',','.') }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Action">
                                        <button type="button" class="btn btn-primary btn-action" onclick="event.preventDefault(); document.getElementById('cartAdd-form-{{ $item->product->id }}').submit();">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-action" onclick="event.preventDefault(); document.getElementById('cartMin-form-{{ $item->product->id }}').submit();">
                                            <ion-icon name="bag-remove-outline"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-action" onclick="event.preventDefault(); document.getElementById('cartIgnore-form-{{ $item->product->id }}').submit();">
                                            <ion-icon name="trash-bin-outline"></ion-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <form action="" method="get" class="d-none"></form>
                            <!-- Cart Add -->
                            <form id="cartAdd-form-{{ $item->product->id }}" action="{{ route('fe.cartAdd') }}" method="POST" class="d-none">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                            </form>
                            <!-- Cart Add -->

                            <!-- Cart Minus -->
                            <form id="cartMin-form-{{ $item->product->id }}" action="{{ route('fe.cartMin') }}" method="POST" class="d-none">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                            </form>
                            <!-- Cart Minus -->

                            <!-- Cart Ignore -->
                            <form id="cartIgnore-form-{{ $item->product->id }}" action="{{ route('fe.cartIgnore') }}" method="POST" class="d-none">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                            </form>
                            <!-- Cart Ignore -->
                        @empty
                            <tr>
                                <th class="text-center" colspan="6">DATA NOT FOUND OR EMPTY!</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <form class="card-body" action="{{ route('fe.checkout') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="title">Detail Checkout</h2>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Alamat Tujuan</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Jakarta Utara, DKI Jakarta, Indonesia" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tf" class="form-label">Bukti Transfer</label>
                                <input type="file" class="form-control" id="tf" name="tf" placeholder="Bukti Transfer" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Total Harga</label>
                        <p>{{ __('Rp.').number_format(\Setting::getTotalPrice(),2,',','.') }}</p>
                        <input type="hidden" name="total_price" value="{{ (int)\Setting::getTotalPrice() }}">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <!-- <button class="btn btn-primary me-md-2" type="button">Button</button> -->
                        <button class="btn btn-sm btn-outline-primary" type="submit" @if(\Setting::getTotalPrice() == 0) disabled @endif>CHECKOUT CART</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- CHECKOUT -->

@endsection
