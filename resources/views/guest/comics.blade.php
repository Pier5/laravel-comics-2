@extends('guest.template.base')

@section('title', 'Comics')

@section('content')
    <main>
        <div class="main-comics_top">
            <img class="jumbo-img" src="./images/jumbotron.jpg" alt="immagine dc">
            <div class="current-series">Current series</div>
        </div>
        <div class="main-comics_bottom">
            <div class="container">
                <div class="cards">
                     @foreach($comics as $card)
                        <div class="card-content">
                            <a href="{{ route('comicDetails', $card['id']) }}">
                                <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                                <h2 class="card-title">{{ $card['series'] }}</h2>
                            </a>
                        </div>
                     @endforeach
                </div>
            </div>
            <button>Load more</button>
        </div>
        <div class="footer-top">
            <div class="container-1200">
                <img class="img-foot" src="../images/buy-comics-digital-comics.png" alt="logo dc">
                <h2 class="foot-top_text">Digital comics</h2>
                
                <img class="img-foot" src="../images/buy-comics-merchandise.png" alt="shop dc">
                <h2 class="foot-top_text">DC Merchandise</h2>
    
                <img class="img-foot" src="../images/buy-comics-subscriptions.png" alt="logo iscrizione">
                <h2 class="foot-top_text">Subscription</h2>
    
                <img class="img-foot-locator" src="../images/buy-comics-shop-locator.png" alt="logo localizzatore">
                <h2 class="foot-top_text">Comic shop locator</h2>
    
                <img class="img-foot" src="../images/buy-dc-power-visa.svg" alt="logo carta visa">
                <h2 class="foot-top_text">DC power visa</h2>
            </div>
        </div>
    </main>
@endsection