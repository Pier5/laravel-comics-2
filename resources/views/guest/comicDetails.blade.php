@extends('guest.template.base')

@section('title', 'Comics - Info')

@section('content')
    <section class="section-comic">
        <div class="main-comics_top">
            <img class="jumbo-img" src="../images/jumbotron.jpg" alt="immagine dc">
            <div class="blue-line"></div>
            <div class="img-container">
                <img class="img-details" src="{{ $comic['thumb'] }}" alt="" class="img-details">
                <div class="img-text">View Gallery</div>
            </div>
        </div>
        <div class="main-details_middle container-900">
           <div class="info-comic">
                <div class="info-comic-left">
                    <h2 class="comic-price">{{ $comic['title'] }}</h2>
                    <div class="price-info">
                        <h3 class="white-info">U.S. Price: <span class="white-price">{{ $comic['price'] }}</span></h3>
                        <h3>Available</h3>
                        <h3 class="white-price last-info">Check Availability<i class="fa-solid fa-angle-down"></i></h3>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>

                <div class="info-comic-right">
                    <h4>Advertisement</h4>
                    <img class="adv-img" src="../images/adv.jpg" alt="">
                </div>
           </div>
        </div>
    </section>
    <div class="details-bottom">
        <div class="container-900">
            <div class="details-top">

                <div class="details-left">
                    <h2>Talent</h2>
                    <div class="text-left">
                        <h3>Art by:</h3>
                        <h4>
                            @foreach ($comic['artists'] as $artist)
                                {{ $artist }}
                                @if($loop->last) 
                                    .
                                @else
                                    ,
                                @endif
                            @endforeach 
                        </h4>
                    </div>
                    <div class="text-left_bottoms">
                        <h3>Written by:</h3>
                        <h4>
                            @foreach ($comic['writers'] as $writer)
                                {{ $writer }}
                                @if($loop->last) 
                                    .
                                @else
                                    ,
                                @endif 
                            @endforeach 
                        </h4>
                    </div>
                </div>

                <div class="details-right">
                    <h2>Specs</h2>
                    <div class="text-right">
                        <h3>Series:</h3>
                        <h4>{{ $comic['series'] }}</h4>
                    </div>
                    <div class="text-right">
                        <h3>U.S. Price:</h3>
                        <h5>{{ $comic['price'] }}</h5>

                    </div>
                    <div class="text-right">
                        <h3>On Sale Price:</h3>
                        <h5>{{ $comic['sale_date'] }}</h5>
                    </div>
                </div>
            </div>

            <div class="details-bottom">
                <div class="container-800 details-bottom_container">
                    <div class="item-detail">
                        <h4>Digital comics</h4>
                        <img src="../images/buy-comics-digital-comics.png" alt="">
                    </div>
                    <div class="item-detail">
                        <h4>Shop DC</h4>
                        <img src="../images/buy-comics-subscriptions.png" alt="">
                    </div>
                    <div class="item-detail">
                        <h4>Comic shop locator</h4>
                        <img src="../images/buy-comics-shop-locator.png" alt="">
                    </div>
                    <div class="item-detail">
                        <h4>Subscriptions</h4>
                        <img src="../images/buy-comics-merchandise.png" alt="">
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endsection