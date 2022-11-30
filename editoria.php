<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>

    <main class="container col-12 col-lg-8 size">
        <div class="row col-12">
            <div class="col-12">
                <div class="col-12 mb-2 mt-4">
                    <h1 class="text-light">EDITORIAL</h1>
                    <hr>
                </div>
                <div>
                    <a href="./noticia.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/noticias.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">NOTÍCIAS</h5>
                        </div>
                    </div></a>
                    <a href="./artigos.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/opiniaoEditoria.png" class="card-img" alt="senac fachada">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">ARTIGOS DE OPINIÃO</h5>
                        </div>
                    </div></a>
                    <a href="./cronicas.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb- border-0">
                        <img src="./contents/cronicaEditoria.webp" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">CRÔNICAS</h5>
                        </div>
                    </div></a>
                    <a href="./entrevistas.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/entrevistaEditoria.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">ENTREVISTAS</h5>
                        </div>
                    </div></a>
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