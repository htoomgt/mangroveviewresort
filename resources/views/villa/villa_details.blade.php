@extends('layout.master')
@php
    $detailImages = $selectedVilla['images'];
    $detailThumbnails = $selectedVilla['thumbnail_images'];
    $detailImages = array_slice($detailImages, 1);
    if (count($detailImages) === 0) {
        $detailImages = ['images/room/room-details.jpg', 'images/room/room-details.jpg', 'images/room/room-details.jpg', 'images/room/room-details.jpg'];
    }
    // dd($detailImages);

    $villaThumbnailBlkClasses = '';

    if (count($detailThumbnails) > 3) {
        $villaThumbnailBlkClasses = 'villa_detail_images col-md-3 col-sm-6 col-xs-12';
    } else {
        $villaThumbnailBlkClasses = 'villa_detail_images col-md-4 col-sm-6 col-xs-12';
    }
@endphp

@section('page_content')
    <section class="banner_area"
        style="background: url({{ asset('img/banner/villa_detail_banner_bg.jpg') }}) no-repeat center; background-size: cover;">
        <div class="container">
            <div class="banner_inner_content">
                <h3>Villa Details</h3>
                <ul>
                    <li><a href="{{ route('home.landing_page') }}">Home</a></li>
                    <li><a href="{{ route('page.resort') }}">Resort</a></li>
                    <li class="active"><a href="{{ URL::current() }}">Villa Detail</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--================Search Room Area =================-->
    <section class="room_details_area" style="margin-top:-88px;">
        <div class="container">
            <div class="row room_details_inner">
                <div class="col-md-12">
                    @php

                    @endphp
                    <div class="room_details_content">
                        <div class="room_d_main_text">
                            <a href="#">
                                <h4> {!! $selectedVilla['villa_name'] !!}</h4>
                            </a>
                            <h5>Normal Pricing {{ number_format($selectedVilla['original_price']) }}
                                {{ $selectedVilla['currency'] }} <span>/ Night</span></h5>
                            <br />
                            <h5>Foreigner Pricing {{ number_format($selectedVilla['foreigner_price']) }}
                                {{ $selectedVilla['foreigne_currency'] }} <span>/ Night</span></h5>

                            <br />


                            {{-- <div class="room_details_img owl-carousel">
                                @foreach ($detailImages as $image)
                                    <div class="item">
                                        <img src="{{asset($image)}}" alt="">
                                    </div>
                                @endforeach
                            </div> --}}

                            <section class="special_dish_area">
                                <div class="container">
                                    <div class="special_dish_inner_area">
                                        <div class="row special_dish_inner">

                                            @foreach ($detailImages as $index => $image)
                                                <div class="{{ $villaThumbnailBlkClasses }}">
                                                    <div class="special_dish_item mt-4">
                                                        <div class="dish_img">
                                                            {{-- <img src="{{ url('/') }}/{{ $image }}"
                                                                alt=""> --}}
                                                            <a href="{{ asset($image) }}"
                                                                data-lightbox="villa_detail_images"
                                                                data-title="{{ $selectedVilla['villa_name'] }} Detail {{ $index + 1 }}">
                                                                <img class="img-fluid" width="100%"
                                                                    src="{{ asset($detailThumbnails[$index]) }}"
                                                                    alt="villa thumbnail" />
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach



                                        </div>
                                        <div class="row mt-3" style="display:flex; justify-content:center;">
                                            <div class="col-3">
                                                <button class="btn_show_more_less">
                                                    <span class="more_or_less_content">show more +</span>
                                                    <span class="more_or_less_content" style="display:none;"> show less -
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>

                            {{-- <p>
                                {!! $selectedVilla['description']!!}
                            </p> --}}
                        </div>
                        <div class="room_service_list">
                            <h3 class="room_d_title">Room Specifications</h3>
                            <div class="row room_service_list_inner">
                                <div class="col-sm-5 col-md-offset-right-1">
                                    <div class="resot_list">
                                        <ul>
                                            @foreach ($selectedVilla['specifications'] as $specification)
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        {{ $specification }}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn book_now_btn" onClick="bookNow({{ $selectedVilla['id'] }})"> Book
                                        Now</button>
                                </div>

                            </div>


                        </div>
                        <div class="room_service_list" style="margin-top:48px;">
                            <h3 class="room_d_title">Room services</h3>
                            <div class="row room_service_list_inner">
                                <div class="col-sm-5 col-md-offset-right-1">
                                    <div class="resot_list">
                                        @php
                                            $amenitiesListA = array_slice($selectedVilla['amenities'], 0, 5);
                                            $amenitiesListB = array_slice($selectedVilla['amenities'], 5);
                                        @endphp
                                        <ul>
                                            @foreach ($amenitiesListA as $amenity)
                                                <li><a><i class="fa fa-caret-right"
                                                            aria-hidden="true"></i>{!! $amenity !!}</a></li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-md-offset-right-1">
                                    <div class="resot_list">
                                        <ul>
                                            @foreach ($amenitiesListB as $amenity)
                                                <li><a><i class="fa fa-caret-right"
                                                            aria-hidden="true"></i>{!! $amenity !!}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="room_details_clients">
                            <h3 class="room_d_title">customer Reviews</h3>
                            <div class="clients_slider owl-carousel">
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/clients/client-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                            <a href="#"><h4>- Michale John</h4></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/clients/client-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                            <a href="#"><h4>- Michale John</h4></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/clients/client-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                            <a href="#"><h4>- Michale John</h4></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room_details_comment">
                            <h4>Add review</h4>
                            <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                                </div>
                                <div class="form-group col-md-12">
                                    <h5>Your Rating</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="review"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn submit_btn form-control">submit now</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="search_right_sidebar">
                        <div class="book_room_area">
                            <div class="book_room_box">
                                <div class="book_table_item">
                                    <h3>check availability</h3>
                                </div>
                                <div class="book_table_item">
                                    <div class="input-append date form_datetime">
                                        <input size="16" type="text" value="" readonly placeholder="Arrival Date">
                                        <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="book_table_item">
                                    <div class="input-append date form_datetime">
                                        <input size="16" type="text" value="" readonly placeholder="Departure Date">
                                        <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="book_table_item">
                                    <select class="selectpicker">
                                        <option>Adults</option>
                                        <option>Adults</option>
                                        <option>Adults</option>
                                    </select>
                                </div>
                                <div class="book_table_item">
                                    <select class="selectpicker">
                                        <option>Children</option>
                                        <option>Children</option>
                                        <option>Children</option>
                                    </select>
                                </div>
                                <div class="book_table_item">
                                    <a class="book_now_btn" href="#">Reserve now</a>
                                </div>
                            </div>
                        </div>
                        <div class="book_now_button">
                            <a class="book_now_btn_black" href="#">Book now</a>
                        </div>
                        <div class="your_book_box">
                            <h4>Your book</h4>
                            <h5>your cart is empty</h5>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--================End Search Room Area =================-->
@endsection

@push('page_js')
    @include('villa.js_load.villa_details_js')
@endpush
