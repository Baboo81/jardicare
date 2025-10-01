<footer class="container-fluid bg-grey py-5">
    <div class="container">
        <div class="row text-center text-md-start">

            <!-- Colonne Logo + Adresse -->
            <div class="col-md-3 mb-4">
                <div class="logo-part p-3 text-center">
                <img src="assets/img/svg/jardiCare.png" class="w-50 logo-footer" alt="Logo Jardi Care">
                <p class="my-3">
                    Avenue du Onzième Zouave 15 <br> Ottignies-Louvain-La-Neuve 1342
                </p>
                <div id="mapid" class="container-fluid my-4" style="height: 150px;"></div>
                </div>
            </div>

            <!-- Colonne Coordonnées -->
            <div class="col-md-3 mb-4 d-flex flex-column align-items-start justify-content-start">
                <h6 class="my-5">Coordonnées</h6>
                <p>+32(0)473391930</p>
                <p>TVA BE 0897 840 512</p>
                <a href="#contact" class="btn-footer mt-2">Contactez-nous</a>
            </div>
            <div class="col-md-3">
                <h6 class="my-5">Pour nous contacter</h6>
                <p>Cliquer sur l'enveloppe ci-dessous</p>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <a href="mailto:odefosseux@jardicare.be" class="IconMail d-block">
                        <img src="assets/img/svg/mail.svg" alt="Icon représentant une enveloppe" class="img-enveloppe d-block">
                    </a>
                </div>
            </div>

            <!-- Colonne Horaires -->
            <div class="col-md-3 mb-4 d-flex flex-column align-items-start justify-content-start">
                <h6 class="text-start my-5">Horaires</h6>
                    <article>
                        <p class="mb-1">Du Lundi au Samedi</p>
                        <p class="fw-bold text-horaire">7h00 – 20h00</p>
                    </article>
                </div>
            </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12">
                <p class="text-center DastinFont mt-2">
                &copy;
                <a href="<?= $data['footer']['webmaster']['url'] ?>" target="_blank" rel="noopener noreferer">
                    {{ $data['footer']['webmaster']['name'] ?? '' }}
                </a>
                </p>
            </div>
        </div>
    </div>
</footer>
