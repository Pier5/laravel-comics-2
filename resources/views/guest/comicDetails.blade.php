@extends('guest.template.base')

@section('title', 'Comics - Info')

@section('content')
    <section>
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
@endsection