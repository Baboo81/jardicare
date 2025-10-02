<nav class="navbar navbar-expand-lg navbar-light position-fixed w-100">
    <div class="container-fluid">
        <img src="/assets/img/svg/jardiCare.png" alt="Logo JardiCare" class="logo p-2">
        <!-- Btn hamburger -->
        <button class="navbar-toggler collapsed border-5 me-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
        </button>
    <!-- Offcanvas (menu latéral) -->
    <div class="offcanvas offcanvas-end offcanvasColor text-white" tabindex="-1" id="mobileMenu">
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
</nav>
