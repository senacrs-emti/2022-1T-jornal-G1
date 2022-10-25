<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>

<div>
    <main class="container col-8">
        <div class="row">
            <div class="col-12">
                <div class="col-12 mb-2">
                    <h1 class="text-light">Principais Notícias</h1>
                    <hr>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide col-12" data-ride="carousel" style="border-top: 5px solid #B31254;">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1000/300" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Lorem Ipsum Dolor</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1000/300" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Lorem Ipsum Dolor</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1000/300" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
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
                <br>
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/1000/300" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Lorem Ipsum Dolor</h5>
                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/1000/300" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Lorem Ipsum Dolor</h5>
                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/1000/300" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Lorem Ipsum Dolor</h5>
                    </div>
                </div>
                <button class="btn btn-primary col-12" type="submit" style="background-color: #B31254;">carregar mais</button>
            </div>
        </div>
    </main>

    <?php
    // include do aside
    include_once './includes/_aside.php';

    // include do footer
    include_once './includes/_footer.php';
    ?>