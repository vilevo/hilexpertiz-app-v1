@extends('layouts.app')
@section('title')
Formation aux nouvelles technologies - HilExpertiz
@endsection
@section('content')
<!-- Start Breadcrumbs -->
<section class="entete">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="bread-list">
                    <li><a href="#">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li><a href="#">Parcours<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">jj</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->
<section class="heroe">
    <div class="container col-xl-10 col-xxl-8 px-4 py-3">
        <div class="row align-items-center g-lg-5 py-2">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-5 fw-bold lh-1 mb-3" style="color: #000;">Découvrez nos parcours</h1>
                <p class="col-lg-10">Apprenez un métier d’avenir, grâce à HilExpertiz, formation 100% en ligne.</p>
                <ul style="display: flex; margin-top: 10px; margin-bottom: 30px;">
                    <li style="margin-right: 30px;"><i class="fa fa-graduation-cap"></i> Niveau</li>
                    <li><i class="fa fa-calendar"></i> Duré</li>
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{route('parcours')}}" class="btn-he">Commencer</a>
                    <a href="#" class="btn-opacity">Télécharger le programme</a>
                </div>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <img src="{{asset('he_assets/img/courses_fields/courses_fields.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="250" height="250" loading="lazy">
            </div>
        </div>
    </div>
</section>
<!-- Start Services -->
<section id="services" class="courses-features section">
    <div class="container">
        <div class="row">
            <!-- Single Service -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-features">
                    <div class="icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="icon two"><i class="fas fa-laptop-code"></i></div>
                    <h2><a href="#">Formation 100% en ligne</a></h2>
                    <p>Démarrez à tout moment votre nouvelle carrière ! Disponible à temps partiel ? Pas de problème, étudiez à votre rythme.
                    </p>
                    <button class="btn-opacity" style="margin-top: 15px; border: none;" onclick="clickAperçu()"> <b>Découvrir les détails</b></button>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-features">
                    <div class="icon"><i class="fas fa-file-code"></i></div>
                    <div class="icon two"><i class="fas fa-file-code"></i></div>
                    <h2><a href="#">Projets professionnalisants</a></h2>
                    <p>Apprenez les compétences clés de votre futur métier en validant des projets tirés de cas concrets d’entreprise.
                    </p>
                    <button class="btn-opacity" style="margin-top: 15px; border: none;" onclick="clickProjets()"><b>Découvrir les projets</b></button>

                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-features">
                    <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <div class="icon two"><i class="fas fa-chalkboard-teacher"></i></i></div>
                    <h2><a href="#">Accompagnement garantie</a></h2>
                    <p>Chaque semaine, un expert du métier suit vos progrès et vous assiste.</p>
                    <button class="btn-opacity" style="margin-top: 15px; border: none;" onclick="clickAccompagnement()"><b>Découvrir l'accompagnement</b></button>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-features">
                    <div class="icon"><i class="fas fa-award"></i></div>
                    <div class="icon two"><i class="fas fa-award"></i></div>
                    <h2><a href="#">certification garantie</a></h2>
                    <p>A la fin de votre formation, une attestation vous sera remise par l'équipe.</p>
                    <button class="btn-opacity" style="margin-top: 15px; border: none;" onclick="clickDemarer()"><b>Démarer maintenant</b></button>
                </div>
            </div>
            <!--/ End Single Service -->
        </div>
    </div>
</section>
<!--/ End Services -->

<div id="app">

    <!-- Start Accompagnenent -->
    <section id="services" class="aperçue section">
        <div class="container">
            <div class="row">
                <!-- Tab links -->
                <div class="tab">
                    <button class="tablinks" onclick="openElements(event, 'Aperçu')" id="OpenAperçu">Aperçu</button>
                    <button class="tablinks" onclick="openElements(event, 'Projets')" id="OpenProjets">Projets</button>
                    <button class="tablinks" onclick="openElements(event, 'Accompagnement')" id="OpenAccompagnement">Accompagnement</button>
                </div>

                <!-- Tab content -->
                <div id="Aperçu" class="tabcontent">
                    <div class="container">
                        <div class="row">
                            <p>lorem ipsum mlor merf lormùe ipsum loroù </p>
                        </div>
                    </div>
                </div>

                <div id="Projets" class="tabcontent">
                    <div class="container">
                        <div class="row">
                            <p>lorem ipsum mlor merf lormùe ipsum loroù </p>
                        </div>
                    </div>
                </div>

                <div id="Accompagnement" class="tabcontent">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="section-title">
                                    <h3>Un accompagnement individuel et privilégié</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12" id="info-text">
                                <p>En souscrivant à nos offres, vous bénéficiez de notre accompagnement.</p>
                                <br>
                                <ul>
                                    <li>Chaque semaine, vous serez accompagné par un mentor qui vous aidera à faire avancer vos projets lors de sessions individuelles en visioconférence.</li>
                                    <br>
                                    <li>Tous les mentors sont des professionnels confirmés, avec une vraie expertise dans le métier que vous apprenez.</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="cc" style="text-align: left;">
                                    <p><img src="" width="500" height="240" alt=""></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="section-title">
                                    <h3>Un accompagnement individuel et privilégié</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="cc" style="text-align: left;">
                                    <p><img src="" width="500" height="240" alt=""></p>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12" id="info-text">
                                <p>En souscrivant à nos offres, vous bénéficiez de notre accompagnement.</p>
                                <br>
                                <ul>
                                    <li>Chaque semaine, vous serez accompagné par un mentor qui vous aidera à faire avancer vos projets lors de sessions individuelles en visioconférence.</li>
                                    <br>
                                    <li>Tous les mentors sont des professionnels confirmés, avec une vraie expertise dans le métier que vous apprenez.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Accompagnement -->

    <!-- Debut get-in-touch -->
    <section class="get-in-touch section">
        <div class="container">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-md-6 img-container">
                    <img class="rounded-circle" src="{{asset('he_assets/img/cct.png')}}" alt="Generic placeholder image">
                </div>
                <div class="col-md-6 jumbotron-container">
                    <div class="jumbotron">
                        <h2>Nous sommes là pour vous orienter</h2>
                        <p>Notre équipe est à votre écoute pour vous aider à choisir la formation qu’il vous faut, du lundi au vendredi de 8h à 18h GMT.</p>
                        <div class="jumbotron-button">
                            <a href="../../components/navbar/" class="btn-he"><i class="far fa-envelope"></i></i> Nous écrire</a>
                            <a href="../../components/navbar/" class="btn-opacity"><i class="fab fa-whatsapp"></i> Chat direct</a>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
    </section>
    <!-- Fin get-in-touch -->

</div>
@endsection

@section('script')
<script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("OpenAperçu").click();

    function clickAperçu() {
        document.getElementById("OpenAperçu").click();
        document.querySelector('#OpenAperçu').scrollIntoView({
            behavior: 'smooth'
        });
    }

    function clickProjets() {
        document.getElementById("OpenProjets").click();
        document.querySelector('#OpenProjets').scrollIntoView({
            behavior: 'smooth'
        });
    }

    function clickAccompagnement() {
        document.getElementById("OpenAccompagnement").click();
        document.querySelector('#OpenAccompagnement').scrollIntoView({
            behavior: 'smooth'
        });
    }

    function clickDemarer() {
        document.querySelector('#why-choose').scrollIntoView({
            behavior: 'smooth'
        });
    }

    function openElements(evt, elementName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(elementName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

@endsection