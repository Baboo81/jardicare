@extends('layouts.app')

@section('content')
{{-- Div animation : progression de la page --}}
<div id="scroll-indicator">
    <div class="inner-circle">
        <div class="scroll-arrow">&#x2193;</div>
    </div>
</div>

{{-- Anchor : Home --}}
<a id="#"></a>

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
        <div class="row align-items-center scroll-element">
            <h1 class="text-center text-muted d-flex justify-content-center align-items-center gap-2 mb-5">
                <span class="svg-icon">
                    <img src="{{ asset('assets/img/svg/feuille.svg') }}" alt="feuilles verte animée" class="svg-animated">
                </span>
                {{ $data['accueil']['main_title'] ?? '' }}
            </h1>
            <div class="col-md-5 my-5">
                <article class="my-5">
                    <p class="text-muted text-center">
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
<a id="services"></a>

{{-- Section : Services --}}
<section class="services d-flex justify-content-center align-items-center">
    <div class="container">
        <h2 class="text-center text-muted  gap-2 mb-5">
            <span class="svg-icon">
                <img src="{{ asset('assets/img/svg/feuille.svg') }}" alt="feuilles verte animée" class="svg-animated">
            </span>
            {{ $data['services']['main_title'] ?? '' }}
        </h2>
        <div class="row g-4 blocCards d-flex justify-content-center align-items-center">
            @foreach($data['services']['cards'] as $card)
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="card card-hover h-100 rounded-4 text-white position-relative overflow-hidden">
                        <img src="{{ $card['img'] ?? '' }}" class="card-img" alt="{{ $card['title'] ?? '' }}">

                        <!-- Overlay avec titre -->
                        <div class="card-overlay d-flex flex-column justify-content-center align-items-center text-center p-4">
                            <h3 class="card-title">
                                <span class="secateur-icon">
                                    <img src="{{ asset('assets/img/svg/secateur.svg') }}" alt="Icon représentant un secateur" class="icon-title">
                                </span>
                                {{ $card['title'] ?? '' }}
                            </h3>
                            <!-- Contenu caché -->
                            <div class="card-content">
                                <p>{{ $card['p1'] ?? '' }}</p>
                                @isset($card['p2'])
                                    <p>{{ $card['p2'] }}</p>
                                @endisset
                                @isset($card['p3'])
                                    <p>{{ $card['p3'] }}</p>
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
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Section : Services END --}}

{{-- Anchor : Á propos --}}
<a id="aPropos"></a>

{{-- Section : Á propos --}}
<section class="aPropos">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center blocAbout">
              <h2 class="text-center aboutTitle my-5 d-flex justify-content-center align-items-center gap-2 mb-5">
                    <span class="svg-icon">
                        <img src="{{ asset('assets/img/svg/feuille.svg') }}" alt="feuilles verte animée" class="svg-animated">
                    </span>
                    {{ $data['a_propos']['main_title'] ?? '' }}
                </h2>
            <div class="col-lg-4 col-md-6 text-center mb-4 mb-md-0">
                <img src="{{ asset('assets/img/about/profil.jpg') }}" alt="Photo de l'entrepreneur de jardin" class="img-fluid profil">
            </div>
            <div class="col-lg-8 col-md-6 mt-5">
                <article class="mx-5 scroll-element">
                    @foreach ($data['a_propos']['paragraphs'] as $paragraph )
                        <p class="text-center aboutTxt">
                            {{ $paragraph }}
                        </p>
                    @endforeach
                </article>
            </div>
        </div>
    </div>
</section>
{{-- Section : Á propos END --}}

{{-- Anchor : Contact --}}
<a id="contact"></a>

{{-- Section : Contact --}}
<section class="contact">
    <div class="container">
        <h2 class="text-center text-muted my-5 d-flex justify-content-center align-items-center gap-2 mb-5">
            <span class="svg-icon">
                <img src="{{ asset('assets/img/svg/feuille.svg') }}" alt="feuilles verte animée" class="svg-animated">
            </span>
            {{ $data['contact']['main_title'] ?? '' }}
        </h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8 registration-form" id="contact-form">

                {{-- Messages : suuccess/echec --}}

                {{-- Message de succès --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Messages d'erreurs globaux --}}
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{-- Messages : suuccess/echec END --}}

                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf

                    {{-- HneyPot --}}
                    <input type="text" name="website" style="display:none">

                    {{-- Nom --}}
                    <div class="form-group">
                        <input type="text"
                               class="form-control item @error('name') is-invalid @enderror"
                               id="name" name="name"
                               value="{{ old('name') }}"
                               placeholder="Veuillez indiquer votre nom de famille">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Prénom --}}
                    <div class="form-group">
                        <input type="text"
                               class="form-control item @error('first_name') is-invalid @enderror"
                               id="first-name"
                               name="first_name"
                               value="{{ old('first_name') }}"
                               placeholder="Veillez indiquer votre prénom">
                        @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="form-group">
                        <input type="text"
                               class="form-control item @error('email') is-invalid @enderror"
                               id="email"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="Veuillez indiquer votre adresse mail">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Téléphone --}}
                    <div class="form-group">
                        <input type="text"
                               class="form-control item @error('phone') is-invalid @enderror"
                               id="phone-number"
                               name="phone"
                               value="{{ old('phone') }}"
                               placeholder="Veuillez indiquer votre numéro de téléphone">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                   {{-- Message --}}
                    <div class="form-group">
                        <textarea class="form-control @error('message') is-invalid @enderror"
                                  id="message"
                                  name="content"
                                  rows="4"
                                  placeholder="Laissez-nous votre message"></textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Btn --}}
                    <div class="form-group d-flex justify-content-center my-5">
                        <button type="submit" class="btn">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- Section : Contact END --}}
@endsection
