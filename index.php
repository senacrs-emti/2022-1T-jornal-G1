<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>

<div>
    <main class="container col-12 col-lg-8 size">
        <div class="row col-12">
            <div class="col-12">
                <div class="col-12 mb-2 mt-4">
                    <h1 class="text-light">Menu</h1>
                    <hr>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide col-12 mb-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner carall" >
                        <div class="carousel-item active">
                            <img class="cardcar" src="https://picsum.photos/1000/400" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block shadow">
                                <h5>Lorem Ipsum Dolor</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="cardcar" src="https://picsum.photos/1000/400" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block shadow">
                                <h5>Lorem Ipsum Dolor</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="cardcar" src="https://picsum.photos/1000/400" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block shadow">
                                <h5>Lorem Ipsum Dolor</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
                <div>
                    <a href="./venda-dos-ingressos-lollapalooza-2023.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/lollapalooza-2023.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Ingressos Lollapalooza</h5>
                        </div>
                    </div></a>
                    <a href="./feira-tecnica-do-senac-saiba-tudo.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/senacfrente.jpg" class="card-img" alt="senac fachada">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Feira do tecnico</h5>
                        </div>
                    </div></a>
                    <a href="./feira-experimental-de-ciencias-da-natureza-e-tecnologias-do-senac-distrito-criativo.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb- border-0">
                        <img src="./contents/senacfrente.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Feira de ciencias</h5>
                        </div>
                    </div></a>
                    <a href="./Noticia_album_copa_2022.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/album2022.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Album da copa</h5>
                        </div>
                    </div></a>
                </div>
                <div id="more">
                <a href=""><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="https://picsum.photos/1000/500" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Lorem Ipsum Dolor</h5>
                        </div>
                    </div></a>
                    <a href=""><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="https://picsum.photos/1000/500" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Lorem Ipsum Dolor</h5>
                        </div>
                    </div></a>
                    <a href=""><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="https://picsum.photos/1000/500" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Lorem Ipsum Dolor</h5>
                        </div>
                    </div></a>
                    <a href=""><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="https://picsum.photos/1000/500" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Lorem Ipsum Dolor</h5>
                        </div>
                    </div></a>
                    <span id="dots"></span>
                </div>
                <div class="text-center align-middle">
                    <button onclick="loadmore()" id="myBtn" class="btn btn-primary col-4 col-lg-3 mt-5" type="submit" style="background-color: #B31254;">carregar mais</button>
                </div>
            </div>
        </div>
    </main>

    <?php
    // include do aside
    include_once './includes/_aside.php';

    // include do footer
    include_once './includes/_footer.php';
    ?>