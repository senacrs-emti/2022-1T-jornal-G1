<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>

<main class="container col-12 col-lg-8 size ">
        <div class="row">
            <div class="col-12">
                <div class="col-12 mb-2 mt-4">
                    <h1 class="text-light ml-3">Notícias</h1>
                    <hr>
                <div>
                    <a href="./Noticia_album-da-copa-2022-e-seu-enorme-sucesso.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/album2022.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Álbum da Copa 2022</h5>
                        </div>
                    </div></a>
                    <a href="./Noticia_feira-tecnica-do-senac-saiba-tudo.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/feiratecnico.png" class="card-img" alt="senac fachada">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Feira Técnica Senac</h5>
                        </div>
                    </div></a>
                    <a href="./Noticia_feira-experimental-de-ciencias-da-natureza-e-tecnologias-do-senac-distrito-criativo.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/feiradeciencias.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Feira Experimental Senac</h5>
                        </div>
                    </div></a>
                    <a href="./Noticia_copa_mundo_2022.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/copa-22.jpeg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Copa Catar 2022</h5>
                        </div>
                    </div></a>
                </div>
                <div id="more">
                <a href="./Noticia_ingressos_lollapalooza23.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/lollapalooza-2022.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Ingressos Lollapalooza 2023</h5>
                        </div>
                    </div></a>
                    <a href="#"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="https://picsum.photos/200/300" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Notícias</h5>
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