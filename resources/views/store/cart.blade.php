@extends('base')

@section('title')
    Cart Page | ZoomStore
@endsection

@section('content')
    <div class="main_content">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive shop_cart_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Produit</th>
                                        <th class="product-price">Prix</th>
                                        <th class="product-quantity">Quantité</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart['items'] as $item)
                                    <tr>
                                        <td class="product-thumbnail"><a><img width="50" alt="product1" src="{{ $getImage($item['product']) }}"></a></td>
                                        <td data-title="Product" class="product-name"><a>{{ ($item['product']['name']) }}</a></td>
                                        <td data-title="Price" class="product-price">{{ number_format($item['product']['soldePrice'], 2, ',', ' ') . ' €' }} </td>
                                        <td data-title="Quantity" class="product-quantity">
                                            <div class="quantity">
                                                <a href="{{ route("cart.remove", 
                                                [
                                                'productId'=>$item['product']['id'], 
                                                'quantity'=>1,
                                                ]) }}" class="minus">-</a>
                                                <input value="{{ $item['quantity'] }}" type="text" name="quantity" title="Qty" size="4" class="qty">
                                                <a href="{{ route('cart.add' ,['productId' => $item['product']['id']]) }}" class="plus">+</a>
                                            </div>
                                        </td>
                                        <td data-title="Total" class="product-subtotal">
                                            {{ number_format($item['sub_total'], 2, ',', ' ') . ' €' }}</td>
                                        <td data-title="Remove" class="product-remove">
                                            <a href="{{ route("cart.remove", 
                                            [
                                            'productId'=>$item['product']['id'], 
                                            'quantity'=>$item['quantity'] ,
                                            ]) }}"><i class="ti-close"></i></a></td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="border p-3 p-md-4">
                            <div class="heading_s1 mb-3">
                                <h6>Cart Totals</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart_total_label">Prix</td>
                                            <td class="cart_total_amount">{{ number_format($cart['sub_total'], 2, ',', ' ') . ' €' }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="cart_total_label">Shipping</td>
                                            <td class="cart_total_amount">Free Shipping</td>
                                        </tr> --}}
                                        <tr>
                                            <td class="cart_total_label">Total</td>
                                            <td class="cart_total_amount"><strong>{{ number_format($cart['sub_total'], 2, ',', ' ') . ' €' }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><a routerlink="/checkout" class="btn btn-fill-out" ng-reflect-router-link="/checkout"
                                href="/checkout">Acheter</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
