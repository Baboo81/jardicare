<footer class="container-fluid bg-grey py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo-part p-3 text-center">
                            <img src="assets/img/svg/jardiCare.png" class="w-50 logo-footer" alt="Logo Jardi Care">
                            <p class="my-3">
                                Avenue du Onzième Zouave 15 - Ottignies-Louvain-La-Neuve 1342
                            </p>
                            <div id="mapid" class="container-fluid my-4" style="height: 150px;"></div>
                        </div>
                    </div>
                    <div class="col-md-6 px-4 text-center">
                        <h6> Coordonnées </h6>
                        <p>+32(0)473391930</p>
                        <p>TVA BE 0897 840 512</p>
                        <a href="#" class="btn-footer"> Contactez-nous</a>
                    </div>
                </div>
            </div>
                <div class="col-md-4 text-center">
                    <div class="row">
                        <div class="col-md-6 px-4">
                        <h6> Mail </h6>
                        <p>Contactez-moi par mail en cliquant sur l'enveloppe ci-dessous</p>
                        <div class="row ">
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
