<nav class="navbar navbar-expand-lg navbar-light position-fixed w-100">
    <div class="container-fluid">
        <!-- Logo -->
        <img src="/assets/img/svg/jardiCare.png" alt="Logo JardiCare" class="logo p-2">

        <!-- Hamburger bouton mobile -->
        <button class="navbar-toggler collapsed border-5 me-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
        </button>

        <!-- Liens desktop -->
        <div class="justify-content-end d-none d-lg-flex ms-auto">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-5">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">{{ $data['nav']['accueil'] ?? '' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#services">{{ $data['nav']['services'] ?? '' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#aPropos">{{ $data['nav']['a_propos'] ?? '' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">{{ $data['nav']['contact'] ?? '' }}</a>
                </li>
            </ul>
        </div>

        <!-- Offcanvas mobile uniquement -->
        <div class="offcanvas offcanvas-end offcanvasColor text-white d-lg-none" tabindex="-1" id="mobileMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Jardi CARE</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">{{ $data['nav']['accueil'] ?? '' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#services">{{ $data['nav']['services'] ?? '' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#aPropos">{{ $data['nav']['a_propos'] ?? '' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">{{ $data['nav']['contact'] ?? '' }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
