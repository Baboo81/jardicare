<nav class="navbar navbar-expand-lg navbar-light position-fixed w-100">
    <div class="container-fluid">
        <img src="/assets/img/svg/jardiCare.png" alt="Logo JardiCare" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav gap-5">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                        {{ $data['nav']['accueil'] ?? '' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">
                        {{ $data['nav']['services'] ?? '' }}
                    </a>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link" href="#">
                        {{ $data['nav']['realisations'] ?? '' }}
                    </a>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="#aPropos">
                        {{  $data['nav']['a_propos'] ?? '' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        {{ $data['nav']['contact'] ?? '' }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
