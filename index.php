<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>
<main class="container-fluid col-8">
    <div class="row">
        <div>
            <h1>Principais Notícias</h1>
            <hr class="bg-dark">
        </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem Ipsum Dolor</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem Ipsum Dolor</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
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
    </div>
</main>
<?php
// include do aside
include_once './includes/_aside.php';

// include do footer
include_once './includes/_footer.php';
?>