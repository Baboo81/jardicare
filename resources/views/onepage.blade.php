@extends('layouts.app')

@section('content')
{{-- Div animation : progression de la page --}}
<div id="scroll-indicator">
    <div class="inner-circle">
        <div class="scroll-arrow">&#x2193;</div>
    </div>
</div>

{{-- Anchor : Home --}}
<a href="" id="#"></a>

{{-- Section : Banner --}}
<section class="banner d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="bannerTitle">
                    <h1>
                        {{ $data['banner']['banner_title'] ?? '' }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Section : Banner END --}}

{{-- Section : Accueil --}}
<section class="accueil pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 my-5">
                <article class="my-5">
                    <p class="text-muted">
                        {{ $data['accueil']['txt'] ?? '' }}
                    </p>
                </article>
            </div>
            <div class="col-md-7 text-center">
                <div class="img-fluid">
                    <img src="{{ $data['accueil']['img'] ?? '' }}" alt="Picto représentant deux jardiniers en pleine activité" id="accueilPicto">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Section : Accueil END --}}

{{-- Anchor : Services --}}
<a href="services"></a>

{{-- Section : Services --}}
<section class="services d-flex justify-content-center align-items-center my-5">
    <div class="container">
        <h2 class="text-center text-muted my-5 d-flex justify-content-center align-items-center gap-2 mb-5">
            <span class="svg-icon">
                <img src="{{ asset('assets/img/svg/feuille.svg') }}" alt="feuilles verte animée" class="svg-animated">
            </span>
            {{ $data['services']['main_title'] ?? '' }}
        </h2>
        <div class="row g-4 my-5 blocCards">
            @foreach($data['services']['cards'] as $card)
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card h-100 w-100 rounded-4">
                        <img src="{{ $card['img'] ?? '' }}" class="card-img-top card-img-fixed" alt="{{ $card['title'] ?? '' }}">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title text-center">{{ $card['title'] ?? '' }}</h5>
                            <p class="card-text text-center">{{ $card['p1'] ?? '' }}</p>
                            @isset($card['p2'])
                                <p class="card-text text-center">{{ $card['p2'] }}</p>
                            @endisset
                            @isset($card['p3'])
                                <p class="card-text text-center">{{ $card['p3'] }}</p>
                            @endisset

                            @isset($card['ul'])
                                <ul>
                                    @foreach($card['ul'] as $li)
                                        <li>{{ $li }}</li>
                                    @endforeach
                                </ul>
                            @endisset
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Section : Services END --}}




@endsection
