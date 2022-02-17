@extends('layouts.app')
@section('title')
Tutoriels et Formations sur les nouvelles technologies - HilExpertiz
@endsection
@section('content')
<section class="banniere">
    <div class="container col-xl-10 col-xxl-8 px-4 py-3">
        <div class="row align-items-center g-lg-5 py-2">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3" style="color: #000;">La clé de votre succès est ici</h1>
                <p class="col-lg-10 fs-4" style="color: #000;">Apprenez de nouvelles technologies. Améliorez vos compétences. Et devenez financièrement independant.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{route('parcours')}}" class="btn-he">Commencer</a>
                    <a href="#" class="btn-opacity">En savoir plus</a>
                </div>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <img src="{{asset('he_assets/img/banniere_img.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
</section>
<div id="app">

    <!-- Debut marketing -->
    <section class="marketing section">
        <div class="container">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4 signle-marketing">
                    <img class="img-responsive" src="{{asset('he_assets/img/1.png')}}" alt="Generic placeholder image" width="200" height="200">
                    <h2>Formations certifiantes</h2>
                    <p>A la fin de votre formation, une attestation vous sera remise par l'équipe.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 signle-marketing">
                    <img class="img-responsive" src="{{asset('he_assets/img/3.png')}}" alt="Generic placeholder image" width="200" height="200">
                    <h2>Accompagnement</h2>
                    <p>Chaque semaine, un expert du métier suit vos progrès et vous assiste.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 signle-marketing">
                    <img class="img-responsive" src="{{asset('he_assets/img/2.png')}}" alt="Generic placeholder image" width="200" height="200">
                    <h2>Démarrez votre business</h2>
                    <p>Nous vous accompagnons pour démarrer votre propre entreprise ou trouver un emploi.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
    </section>
    <!-- Fin marketing -->

    <!-- Debut vidéo -->
    <section class="video section">
        <div class="container">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-md-7">
                    <h2>Des formation innonvantes</h2>
                    <p>Devenez qui vous voulez être avec Hil Expertiz.
                        Choisissez votre parcours.
                        Suivez une <a href="#">formation constituée de projets professionnalisants</a> et de séances individuelles avec un mentor dédié chaque semaine.
                        Obtenez une attestation.
                        Améliorez vos connaissances, démarrez votre business.</p>
                </div>
                <div class="col-md-5 iframe-container">
                    <iframe class="responsive-iframe" width="500" height="250" src="https://www.youtube.com/embed/cNqHhYZ14IQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div><!-- /.row -->
    </section>
    <!-- Fin vidéo -->

    <!-- Debut testimony -->
    <section class="testimony section">
        <div class="container">
            <div class="row">
                <h2>Aider les développeurs de notre communauté</h2>
                <div class="col-md-12 imgs">
                    <div class="imgs-container">
                        <img class="img-responsive" src="{{asset('he_assets/img/temoignage/img1.jpg')}}" alt="communauté_instagram" />
                        <img class="img-responsive" src="{{asset('he_assets/img/temoignage/img2.jpg')}}" alt="communauté_instagram" />
                        <img class="img-responsive" src="{{asset('he_assets/img/temoignage/img3.jpg')}}" alt="communauté_instagram" />
                    </div>
                </div>
                <!-- <div class="col-md-6 testimony-text">
                    <h3>Tous pour 1</h3>
                    <p>jdjdksjdskj</p>
                </div> -->
            </div>
    </section>
    <!-- Fin testimony -->

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