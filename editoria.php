<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>
<link rel="stylesheet" href="editoria.css">
<div>
    <main class="container col-12 col-lg-8 size ">
        <div class="row">
            <div class="col-12">
                <div class="col-12 mb-2 mt-4">
                    <h1 class="text-light ml-3">Editorial</h1>
                    <hr>
                <div>
                    <a href="./index.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/lollapalooza-2023.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Home</h5>
                        </div>
                    </div></a>
                    <a href="./Noticia_feira_tec_senac.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/senacfrente.jpg" class="card-img" alt="senac fachada">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Notícias</h5>
                        </div>
                    </div></a>
                    <a href="./Noticia_feira_ciencias_senac.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/senacfrente.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Entrevistas</h5>
                        </div>
                    </div></a>
                    <a href="./Noticia_album_copa_2022.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/album2022.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Artigos de opinião</h5>
                        </div>
                    </div></a>
                </div>
                <div id="more">
                <a href=""><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="https://picsum.photos/1000/500" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Crônicas</h5>
                        </div>
                    </div></a>
                    <a href=""><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="https://picsum.photos/1000/500" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Charges</h5>
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