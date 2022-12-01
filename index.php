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
                    <h1 class="text-light">HOME</h1>
                    <hr>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide col-12 mb-5" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner carall" >
                        <div class="carousel-item active">
                        <a href="./Artigo_uma-jornada-por-jogos-indies.php"><img class="cardcar" src="./contents/jogosindies.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block shadow">
                                <h5 class="carousel-shadow">Uma jornada por jogos indies</h5>
                                <b style="color: #FF0D70;">ARTIGO DE OPINIÃO</b>
                            </div>
                        </div></a>
                        <div class="carousel-item">
                            <a href="./Cronica_procrastinacao.php"><img class="cardcar" src="./contents/procrastinacao.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block shadow">
                                <h5 class="carousel-shadow">Procrastinação</h5>
                                <b style="color: #FF0D70;">CRÔNICA</b>
                            </div></a>
                        </div>
                        <div class="carousel-item">
                            <a href="./noticia_copa-mundo-2022-no-catar.php"><img class="cardcar" src="./contents/copaCatar.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block shadow">
                                <h5 class="carousel-shadow">Copa do Mundo 2022 no Catar</h5>
                                <b style="color: #FF0D70;">NOTÍCIA</b>
                            </div></a>
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
                    <a href="./noticia_venda-dos-ingressos-lollapalooza-2023.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-5 border-0">
                        <img src="./contents/lollapalooza-2022.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <b class="ml-3 mr-3" style="color: #FF0D70;">NOTÍCIA</b>
                            <h5 class="card-title h5div ml-3 mr-3">Venda dos ingressos Lollapalooza 2023</h5>
                        </div>
                    </div></a>
                    <a href="./Noticia_feira-tecnica-do-senac-saiba-tudo.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-5 border-0">
                        <img src="./contents/feiraTecnico.jpg" class="card-img" alt="senac fachada">
                        <div class="card-img-overlay">
                            <b class="ml-3 mr-3" style="color: #FF0D70;">NOTÍCIA</b>
                            <h5 class="card-title h5div ml-3 mr-3">Feira técnica do Senac - saiba tudo</h5>
                        </div>
                    </div></a>
                    <a href="./Cronica_gatos-de-madrugada.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-5 border-0">
                        <img src="./contents/gatosMadrugada.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <b class="ml-3 mr-3" style="color: #FF0D70;">CRÔNICA</b>
                            <h5 class="card-title h5div ml-3 mr-3">Gatos de madrugada</h5>
                        </div>
                    </div></a>
                    <a href="./Artigo_violencia-contra-a-mulher.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-5 border-0">
                        <img src="./contents/violenciaMulher.jpeg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <b class="ml-3 mr-3" style="color: #FF0D70;">ARTIGO DE OPINIÃO</b>
                            <h5 class="card-title h5div ml-3 mr-3">Violência Contra a Mulher</h5>
                        </div>
                    </div></a>
                </div>
                <div id="more">
                    <a href="./Artigo_rock-in-rio-2022.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-5 border-0">
                        <img src="./contents/RockandRio22.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <b class="ml-3 mr-3" style="color: #FF0D70;">ARTIGO DE OPINIÃO</b>
                            <h5 class="card-title h5div ml-3 mr-3">Rock in Rio 2022</h5>
                        </div>
                    </div></a>
                    <a href="./Entrevista_como-é-a-vida-de-influenciador.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-5 border-0">
                        <img src="./contents/influenciador.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <b class="ml-3 mr-3" style="color: #FF0D70;">ENTREVISTA</b>
                            <h5 class="card-title h5div ml-3 mr-3">Como é a vida de influenciador?</h5>
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