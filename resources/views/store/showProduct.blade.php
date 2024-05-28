@extends('base')

@section('title')
    Product Page | ZoomStore
@endsection

@section('content')
    <div class="main_content">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image">
                            <div class="product_img_box">
                                <img id="product_img" alt="product_img1" src="{{ Storage::url($product->imageUrls()[0]) }}"
                                    data-zoom-image="{{ Storage::url($product->imageUrls()[0]) }}"><a title="Zoom"
                                    class="product_img_zoom"><span class="linearicons-zoom-in"></span></a>
                            </div>
                            <div id="pr_item_gallery" data-slides-to-show="4" data-slides-to-scroll="1"
                                data-infinite="false"
                                class="product_gallery_item slick_slider slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" role="listbox" style="opacity: 1; width: 556px; left: 0px;">
                                        @foreach ($product->imageUrls() as $imageUrl)
                                            <div class="item slick-slide slick-current slick-active" data-slick-index="0"
                                                aria-hidden="false" tabindex="-1" role="option"
                                                aria-describedby="slick-slide20" style="width: 129px;"><a href="#"
                                                    class="product_gallery_item active"
                                                    data-image="{{ Storage::url($imageUrl) }} "
                                                    data-zoom-image="{{ Storage::url($imageUrl) }}" tabindex="0"><img
                                                        alt="product_small_img1" src="{{ Storage::url($imageUrl) }}"></a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{ $product->name }}</a></h4>
                                <div class="product_price"><span
                                        class="price">{{ number_format($product->soldePrice, 2, ',', ' ') . ' €' }}</span><del>{{ number_format($product->regularPrice, 2, ',', ' ') . ' €' }}</del>
                                    <div class="on_sale"><span>35% Off</span></div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 80%;">
                                        </div>
                                    </div><span class="rating_num">(21)</span>
                                </div>
                                <div class="pr_desc">
                                    <p> Description du produit : {{ $product->description }} </p>
                                </div>
                                {{-- <div class="product_sort_info">
                                    <ul>
                                        <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty
                                        </li>
                                        <li><i class="linearicons-sync"></i> 30 Day Return Policy </li>
                                        <li><i class="linearicons-bag-dollar"></i>Cash on Delivery available</li>
                                    </ul>
                                </div> --}}
                                {{-- <div class="pr_switch_wrap"><span class="switch_lable">Color</span>
                                    <div class="product_color_switch"><span data-color="#87554B" class="active"
                                            style="background-color: rgb(135, 85, 75);"></span><span data-color="#333333"
                                            style="background-color: rgb(51, 51, 51);"></span><span data-color="#DA323F"
                                            style="background-color: rgb(218, 50, 63);"></span></div>
                                </div> --}}
                                {{-- <div class="pr_switch_wrap"><span class="switch_lable">Size</span>
                                    <div class="product_size_switch">
                                        <span>xs</span><span>s</span><span>m</span><span>l</span><span>xl</span>
                                    </div>
                                </div>
                            </div> --}}
                                <hr>
                                <div class="cart_extra">
                                    <div class="cart-product-quantity">
                                        <div class="quantity"><input type="button" value="-" class="minus"><input
                                                type="text" name="quantity" value="1" title="Qty" size="4"
                                                class="qty"><input type="button" value="+" class="plus"></div>
                                    </div>
                                    <div class="cart_btn">
                                        <a href="{{ route('cart.add', ['productId' => $product->id]) }}"
                                            class="btn btn-fill-out btn-addtocart"><i class="icon-basket-loaded"></i>Add to
                                            cart</a>
                                        </button>
                                        {{-- <button type="button" class="btn btn-fill-out btn-addtocart"><i
                                            class="icon-basket-loaded"></i> Pay Now </button></div> --}}
                                        {{-- <div class="cart_btn"><a href="#" class="add_compare"><i
                                            class="icon-shuffle"></i></a><a href="#" class="add_wishlist"><i
                                            class="icon-heart"></i></a>
                                </div> --}}
                                    </div>
                                    <hr>
                                    {{-- <ul class="product-meta">
                                <li>SKU: <a href="#">BE45VGRT</a></li>
                                <li>Category: <a href="#">Culotes </a></li>
                                <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#"
                                        rel="tag">printed</a></li>
                            </ul> --}}
                                    <div class="product_share"><span>Share:</span>
                                        <ul class="social_icons">
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a>
                                            </li>
                                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="large_divider clearfix"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-style3">
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li class="nav-item"><a id="Description-tab" data-bs-toggle="tab"
                                                href="#Description" role="tab" aria-controls="Description"
                                                aria-selected="true" class="nav-link active">Description</a></li>
                                        {{-- <li class="nav-item"><a id="Additional-info-tab" data-bs-toggle="tab"
                                        href="#Additional-info" role="tab" aria-controls="Additional-info"
                                        aria-selected="false" class="nav-link">Additional info</a></li>
                                <li class="nav-item"><a id="Reviews-tab" data-bs-toggle="tab" href="#Reviews"
                                        role="tab" aria-controls="Reviews" aria-selected="false"
                                        class="nav-link">Reviews (2)</a>
                                </li> --}}
                                    </ul>
                                    <div class="tab-content shop_info_tab">
                                        <div id="Description" role="tabpanel" aria-labelledby="Description-tab"
                                            class="tab-pane fade show active"> Description du
                                            produit : {{ $product->description }} </div>
                                        {{-- <div id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab"
                                    class="tab-pane fade"> Description du produit
                                    : Culotte en dentelle </div> --}}
                                        {{-- <div id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab" class="tab-pane fade">
                                    <div class="comments">
                                        <h5 class="product_tab_title">2 Review For <span>Blue Dress For Woman</span></h5>
                                        <ul class="list_none comment_list mt-4">
                                            <li>
                                                <div class="comment_img"><img src="assets/images/user1.jpg"
                                                        alt="user1">
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta"><span class="review_author">Alea
                                                            Brooks</span><span class="comment-date">March 5, 2018</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>Lorem Ipsumin gravida nibh vel
                                                            velit auctor aliquet. Aenean sollicitudin, lorem quis
                                                            bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                                            nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment_img"><img src="assets/images/user2.jpg"
                                                        alt="user2">
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta"><span class="review_author">Grace
                                                            Wong</span><span class="comment-date">June 17, 2018</span></p>
                                                    <div class="description">
                                                        <p>It is a long established fact
                                                            that a reader will be distracted by the readable content of
                                                            a page when looking at its layout. The point of using Lorem
                                                            Ipsum is that it has a more-or-less normal distribution of
                                                            letters</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="review_form field_form">
                                        <h5>Add a review</h5>
                                        <form novalidate="" class="row mt-3 ng-untouched ng-pristine ng-valid">
                                            <div class="form-group col-12 mb-3">
                                                <div class="star_rating"><span data-value="1"><i
                                                            class="far fa-star"></i></span><span data-value="2"><i
                                                            class="far fa-star"></i></span><span data-value="3"><i
                                                            class="far fa-star"></i></span><span data-value="4"><i
                                                            class="far fa-star"></i></span><span data-value="5"><i
                                                            class="far fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 mb-3">
                                                <textarea required="required" placeholder="Your review *" name="message" rows="4" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group col-md-6 mb-3"><input required="required"
                                                    placeholder="Enter Name *" name="name" type="text"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6 mb-3"><input required="required"
                                                    placeholder="Enter Email *" name="email" type="email"
                                                    class="form-control"></div>
                                            <div class="form-group col-12 mb-3"><button type="submit" name="submit"
                                                    value="Submit" class="btn btn-fill-out">Submit Review</button></div>
                                        </form>
                                    </div>
                                </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="small_divider"></div>
                                <div class="divider"></div>
                                <div class="medium_divider"></div>
                            </div>
                        </div>
                        {{-- <div class="row">
                    <div class="col-12">
                        <div class="heading_s1">
                            <h3>Releted Products</h3>
                        </div>
                        <div data-margin="20"
                            data-responsive="{&quot;0&quot;:{&quot;items&quot;: &quot;1&quot;}, &quot;481&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;768&quot;:{&quot;items&quot;: &quot;3&quot;}, &quot;1199&quot;:{&quot;items&quot;: &quot;4&quot;}}"
                            class="releted_product_slider carousel_slider owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1420px;">
                                    <div class="owl-item active" style="width: 264px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img"><a href="shop-product-detail.html"><img
                                                            src="assets/images/product_img1.jpg" alt="product_img1"></a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                            <li class="add-to-cart"><a href="#"><i
                                                                        class="icon-basket-loaded"></i> Add To Cart</a>
                                                            </li>
                                                            <li><a href="shop-compare.html"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </li>
                                                            <li><a href="shop-quick-view.html"><i
                                                                        class="icon-magnifier-add"></i></a></li>
                                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue
                                                            Dress
                                                            For Woman</a>
                                                    </h6>
                                                    <div class="product_price"><span
                                                            class="price">$45.00</span><del>$55.25</del>
                                                        <div class="on_sale"><span>35% Off</span></div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width: 80%;"></div>
                                                        </div><span class="rating_num">(21)</span>
                                                    </div>
                                                    <div class="pr_desc">
                                                        <p>Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Phasellus blandit massa enim.
                                                            Nullam id varius nunc id varius nunc.</p>
                                                    </div>
                                                    <div class="pr_switch_wrap">
                                                        <div class="product_color_switch">
                                                            <span data-color="#87554B" class="active"
                                                                style="background-color: rgb(135, 85, 75);"></span><span
                                                                data-color="#333333"
                                                                style="background-color: rgb(51, 51, 51);"></span><span
                                                                data-color="#DA323F"
                                                                style="background-color: rgb(218, 50, 63);"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 264px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img"><a href="shop-product-detail.html"><img
                                                            src="assets/images/product_img2.jpg" alt="product_img2"></a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                            <li class="add-to-cart"><a href="#"><i
                                                                        class="icon-basket-loaded"></i> Add To Cart</a>
                                                            </li>
                                                            <li><a href="shop-compare.html"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </li>
                                                            <li><a href="shop-quick-view.html"><i
                                                                        class="icon-magnifier-add"></i></a></li>
                                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title"><a href="shop-product-detail.html">Lether
                                                            Gray
                                                            Tuxedo</a></h6>
                                                    <div class="product_price"><span
                                                            class="price">$55.00</span><del>$95.00</del>
                                                        <div class="on_sale"><span>25% Off</span></div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width: 68%;"></div>
                                                        </div><span class="rating_num">(15)</span>
                                                    </div>
                                                    <div class="pr_desc">
                                                        <p>Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Phasellus blandit massa enim.
                                                            Nullam id varius nunc id varius nunc.</p>
                                                    </div>
                                                    <div class="pr_switch_wrap">
                                                        <div class="product_color_switch">
                                                            <span data-color="#847764" class="active"
                                                                style="background-color: rgb(132, 119, 100);"></span><span
                                                                data-color="#0393B5"
                                                                style="background-color: rgb(3, 147, 181);"></span><span
                                                                data-color="#DA323F"
                                                                style="background-color: rgb(218, 50, 63);"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 264px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="product"><span class="pr_flash">New</span>
                                                <div class="product_img"><a href="shop-product-detail.html"><img
                                                            src="assets/images/product_img3.jpg" alt="product_img3"></a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                            <li class="add-to-cart"><a href="#"><i
                                                                        class="icon-basket-loaded"></i> Add To Cart</a>
                                                            </li>
                                                            <li><a href="shop-compare.html"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </li>
                                                            <li><a href="shop-quick-view.html"><i
                                                                        class="icon-magnifier-add"></i></a></li>
                                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title"><a href="shop-product-detail.html">woman
                                                            full
                                                            sliv dress</a>
                                                    </h6>
                                                    <div class="product_price"><span
                                                            class="price">$68.00</span><del>$99.00</del></div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width: 87%;"></div>
                                                        </div><span class="rating_num">(25)</span>
                                                    </div>
                                                    <div class="pr_desc">
                                                        <p>Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Phasellus blandit massa enim.
                                                            Nullam id varius nunc id varius nunc.</p>
                                                    </div>
                                                    <div class="pr_switch_wrap">
                                                        <div class="product_color_switch">
                                                            <span data-color="#333333" class="active"
                                                                style="background-color: rgb(51, 51, 51);"></span><span
                                                                data-color="#7C502F"
                                                                style="background-color: rgb(124, 80, 47);"></span><span
                                                                data-color="#2F366C"
                                                                style="background-color: rgb(47, 54, 108);"></span><span
                                                                data-color="#874A3D"
                                                                style="background-color: rgb(135, 74, 61);"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 264px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img"><a href="shop-product-detail.html"><img
                                                            src="assets/images/product_img4.jpg" alt="product_img4"></a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                            <li class="add-to-cart"><a href="#"><i
                                                                        class="icon-basket-loaded"></i> Add To Cart</a>
                                                            </li>
                                                            <li><a href="shop-compare.html"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </li>
                                                            <li><a href="shop-quick-view.html"><i
                                                                        class="icon-magnifier-add"></i></a></li>
                                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title"><a href="shop-product-detail.html">light
                                                            blue
                                                            Shirt</a></h6>
                                                    <div class="product_price"><span
                                                            class="price">$69.00</span><del>$89.00</del>
                                                        <div class="on_sale"><span>20% Off</span></div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width: 70%;"></div>
                                                        </div><span class="rating_num">(22)</span>
                                                    </div>
                                                    <div class="pr_desc">
                                                        <p>Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Phasellus blandit massa enim.
                                                            Nullam id varius nunc id varius nunc.</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 264px; margin-right: 20px;">
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img"><a href="shop-product-detail.html"><img
                                                            src="assets/images/product_img5.jpg" alt="product_img5"></a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                            <li class="add-to-cart"><a href="#"><i
                                                                        class="icon-basket-loaded"></i> Add To Cart</a>
                                                            </li>
                                                            <li><a href="shop-compare.html"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </li>
                                                            <li><a href="shop-quick-view.html"><i
                                                                        class="icon-magnifier-add"></i></a></li>
                                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title"><a href="shop-product-detail.html">blue
                                                            dress
                                                            for woman</a>
                                                    </h6>
                                                    <div class="product_price"><span
                                                            class="price">$45.00</span><del>$55.25</del>
                                                        <div class="on_sale"><span>35% Off</span></div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width: 80%;"></div>
                                                        </div><span class="rating_num">(21)</span>
                                                    </div>
                                                    <div class="pr_desc">
                                                        <p>Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Phasellus blandit massa enim.
                                                            Nullam id varius nunc id varius nunc.</p>
                                                    </div>
                                                    <div class="pr_switch_wrap">
                                                        <div class="product_color_switch">
                                                            <span data-color="#87554B" class="active"
                                                                style="background-color: rgb(135, 85, 75);"></span><span
                                                                data-color="#333333"
                                                                style="background-color: rgb(51, 51, 51);"></span><span
                                                                data-color="#5FB7D4"
                                                                style="background-color: rgb(95, 183, 212);"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                                        class="ion-ios-arrow-left"></i></button><button type="button"
                                    role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button>
                            </div>
                            <div class="owl-dots"><button role="button"
                                    class="owl-dot active"><span></span></button><button role="button"
                                    class="owl-dot"><span></span></button></div>
                        </div>
                    </div>
                </div> --}}
                    </div>
                </div>
            </div>
        @endsection
