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
{{-- Section : Services END --}}




@endsection
