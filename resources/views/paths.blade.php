@extends('layouts.app')
@section('title')
Formation aux nouvelles technologies - HilExpertiz
@endsection
@section('content')
<section class="heroe">
    <div class="container col-xl-10 col-xxl-8 px-4 py-3">
        <div class="row align-items-center g-lg-5 py-2">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-5 fw-bold lh-1 mb-3" style="color: #000;">Découvrez nos parcours</h1>
                <p class="col-lg-10">Apprenez un métier d’avenir, grâce à HilExpertiz, formation 100% en ligne.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <img src="{{asset('he_assets/img/courses_fields/courses_fields.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="250" height="250" loading="lazy">
            </div>
        </div>
    </div>
</section>
<!-- Debut marketing -->
<section class="heroe-details">
    <div class="container">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-md-4 col-xs-12 bloc">
                <h2><i class="fas fa-project-diagram"></i></h2>
                <p>Durant votre parcours vous realiserez des projets concrets</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-md-4 col-xs-12 bloc">
                <h2><i class="fas fa-chalkboard-teacher"></i></h2>
                <p>Un expert du métier suit vos progrès et vous assiste</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-md-4 col-xs-12 bloc">
                <h2><i class="fas fa-comments"></i></h2>
                <p>Une communauté active pour vous permetre de relever chaque defis</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
</section>
<!-- Fin marketing -->

<div id="app">

    <!-- Debut marketing -->
    <section class="courses section">
        <div class="container">
            <div class="row line1">
                <div class="col-md-12 course-categorie">
                    <h2>Dans quel domaine souhaitez-vous vous former ?</h2>
                    <!-- <ul class="list">
                        <li><span class="item">Développement</span></li>
                        <li><span class="item">Systèmes & Réseaux</span></li>
                        <li><span class="item">Marketing & Communication</span></li>
                        <li><span class="item">Infographie</span></li>
                        <li><span class="item">Intelligence Artificielle</span></li>
                        <li><span class="item">Cryptomonnaies</span></li>
                    </ul> -->
                    <div class="row" style="padding-top: 1rem">
                        <!-- The form -->
                        <div class="col-md-12">
                            <form action="" style="display: flex;">
                                <div class="custom-select select-cat" style="width:260px;">
                                    <select>
                                        <option value="0">catégories (parcours)</option>
                                        <option value="1">Tout</option>
                                        <option value="2">Cursus</option>
                                        <option value="3">Formations</option>
                                        <option value="4">Tutoriels</option>
                                    </select>
                                </div>
                                <div class="custom-select select-th" style="width:110px; margin-left: 1rem">
                                    <select>
                                        <option value="0">Thème</option>
                                        <option value="1">Développement</option>
                                        <option value="2">Intelligence Artificielle</option>
                                        <option value="3">Systèmes & Réseaux</option>
                                        <option value="4">Infographie</option>
                                        <option value="5">Design</option>
                                        <option value="6">Cryptomonnaies</option>
                                        <option value="7">Marketing & Communicationr</option>
                                        <option value="8">Bureautique</option>
                                        <option value="9">Architecture</option>
                                        <option value="10">Conception 3D</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="col-md-6" style="width: 24%;">
                            <form class="example" action="action_page.php">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div> -->
                    </div>

                </div>
            </div>
            <div class="row line2">
                <div class="col-md-4 course-product">
                    <div class="card">
                        <img src="{{asset('he_assets/img/courses_fields/programming.png')}}" alt="Avatar">
                        <div class="card-container">
                            <h4><b><a href="{{route('course.detail')}}">John Doe</a></b></h4>
                            <p>Architect & Engineer</p>
                            <ul>
                                <li><i class="fas fa-chalkboard-teacher"></i> Développement</li>
                                <li><i class="fas fa-chalkboard-teacher"></i> 12 mois</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 course-product">
                    <div class="card">
                        <img src="{{asset('he_assets/img/courses_fields/blockchain.png')}}" alt="Avatar">
                        <div class="card-container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                            <ul>
                                <li><i class="fas fa-chalkboard-teacher"></i> Développement</li>
                                <li><i class="fas fa-chalkboard-teacher"></i> 12 mois</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 course-product">
                    <div class="card">
                        <img src="{{asset('he_assets/img/courses_fields/ai.png')}}" alt="Avatar">
                        <div class="card-container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                            <ul>
                                <li><i class="fas fa-chalkboard-teacher"></i> Développement</li>
                                <li><i class="fas fa-chalkboard-teacher"></i> 12 mois</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 course-product">
                    <div class="card">
                        <img src="{{asset('he_assets/img/courses_fields/dm.png')}}" alt="Avatar">
                        <div class="card-container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                            <ul>
                                <li><i class="fas fa-chalkboard-teacher"></i> Développement</li>
                                <li><i class="fas fa-chalkboard-teacher"></i> 12 mois</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 course-product">
                    <div class="card">
                        <img src="{{asset('he_assets/img/courses_fields/infografic.png')}}" alt="Avatar">
                        <div class="card-container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                            <ul>
                                <li><i class="fas fa-chalkboard-teacher"></i> Développement</li>
                                <li><i class="fas fa-chalkboard-teacher"></i> 12 mois</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 course-product">
                    <div class="card">
                        <img src="{{asset('he_assets/img/courses_fields/network.png')}}" alt="Avatar">
                        <div class="card-container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                            <ul>
                                <li><i class="fas fa-chalkboard-teacher"></i> Développement</li>
                                <li><i class="fas fa-chalkboard-teacher"></i> 12 mois</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin marketing -->

    <!-- Debut vidéo -->
    <section class="video section">
        <div class="container">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-md-7">
                    <h2>Un mentor dédié pour vous</h2>
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