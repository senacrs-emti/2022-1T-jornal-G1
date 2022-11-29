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
                    <a href="./Noticia.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/noticias.jpg" class="card-img" alt="senac fachada">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Notícias</h5>
                        </div>
                    </div></a>
                    <a href="./Entrevistas.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/entrevistas.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Entrevistas</h5>
                        </div>
                    </div></a>
                    <a href="./Artigos.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/população-pessoas.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Artigos de opinião</h5>
                        </div>
                    </div></a>
                    <a href="./Cronicas.php"><div class="card bg-transparent  text-white col-12 col-lg-6 float-left mb-4 border-0">
                        <img src="./contents/cronica.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title h5div">Crônicas</h5>
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