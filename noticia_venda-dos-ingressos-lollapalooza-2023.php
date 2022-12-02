<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>

<main class="container col-12 col-lg-8 text-light">
    <div class="row col-12">
        <div class="col-12">
            <h1 class="font-weight-bold mt-4 titulo">Venda dos ingressos Lollapalooza 2023</h1>
            <h6 class="font-weight-normal subtitulo">Está disponível a compra dos ingressos para o evento que ocorrerá no ano que vem</h6>
            <div class="pt-4">
                <p class="text-light float-left"><strong>RAUL RODRIGUES</strong> Estudante</p>
                <b class="text-muted float-right">22/11/2022 - 14:30</b>
            </div>
            <hr class="bg-light mt-4">
            <div class="imagem-artigo">
                <img src="contents/lollapalooza-2022.jpg" alt="lollapalooza" class="w-100 mb-2 mt-2 imgLolla1">
                <p> Foto tirada do evento Lollapalooza de 2022</p>
            </div>
            <div class="paragrafo-artigo">
                <p>Saíram os ingressos para o maior festival de São Paulo, o Lollapalooza. O evento acontecerá nos dias 24, 25 e 26 de março de 2023 no Autódromo de Interlagos e contará com muitos artistas incríveis e muito populares atualmente, com músicas marcantes e que muitas vezes são consideradas hits.</p>
            </div>
            <div class="paragrafo-artigo">
                <p>Os ingressos para um dia custam de 600 a 700 reais, variando do dia que será escolhido pelo comprador para comprar os ingressos, já para ter ingresso para os shows do dia 24 a 26 de março, ou seja, o início e fim do evento, os ingressos podem variar os preços entre os valores de 1.500 reais e 3.600 reais, variando baseado no ingresso que a pessoa comprará, dependendo se é estudante ou em qual banco que utilizará para efetuar a compra, já que em alguns casos pode se ter descontos inclusos por outros benefícios voltados para pessoas deficientes.</p>
            </div>
            <div class="imagem-artigo">
                <img src="contents/lollashows.jpg" alt="lollapalooza-shows" class="w-100 mb-2 imgLolla2">
                <p>Cartaz dos shows que terão no Lollapalooza 2023</p>
            </div>
            <div class="paragrafo-artigo">
                <p>E na parte dos shows podemos perceber que a lista está enorme, com muitos artistas que são fenômenos hoje em dia como Billie Eilish, Lil Nas X, Rosália, Blink-182, Tame Impala, Cigarettes after sex, Drake e muitos outros. Os shows prometem muito e estão todos ansiosos para este evento, já que, como mencionado anteriormente, é um dos maiores eventos de São Paulo e desta vez promete muito a ter os melhores shows.</p>
            </div>
            <section class="semelhantes">
                <h3 class="font-weight-bold mt-5">OUTRAS NOTÍCIAS</h3>
                <hr class="bg-light">
                <div class="card mb-3 bg-transparent border-bottom border-top-0 border-left-0 border-right-0">
                    <div class="row no-gutters">
                        <div class="col-3 col-lg-2">
                            <img src="./contents/album2022.jpg" alt="Album da copa 2022" class="editoriaIMG">
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="card-body ml-4 mt-1">
                                <a href="./Noticia_album-da-copa-2022-e-seu-enorme-sucesso.php" class="text-light">
                                    <h5 class="card-title font-weight-bold h5-outras">Álbum da copa 2022 e seu enorme sucesso</h5>
                                    <b class="float-left mt-3" style="color: #FF0D70;">NOTÍCIA</b>
                                    <b class="text-muted float-right mt-3 mr-4 mr-lg-0">23/11/2022 - 15:41</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 bg-transparent border-bottom border-top-0 border-left-0 border-right-0">
                    <div class="row no-gutters">
                        <div class="col-3 col-lg-2">
                            <img src="./contents/feiradeciencias.jpg" alt="Feira de ciências do Senac" class="editoriaIMG">
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="card-body ml-4 mt-1">
                                <a href="./Noticia_feira-experimental-de-ciencias-da-natureza-e-tecnologias-do-senac-distrito-criativo.php" class="text-light">
                                    <h5 class="card-title font-weight-bold h5-outras">Feira Experimental de Ciências da Natureza e Tecnologias do Senac Distrito Criativo</h5>
                                    <b class="float-left mt-2" style="color: #FF0D70;">NOTÍCIA</b>
                                    <b class="text-muted float-right mt-2 mr-4 mr-lg-0">23/11/2022 - 15:07</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 bg-transparent border-bottom border-top-0 border-left-0 border-right-0">
                    <div class="row no-gutters">
                        <div class="col-3 col-lg-2">
                            <img src="./contents/feiraTecnico.jpg" alt="Feira técnica do Senac" class="editoriaIMG">
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="card-body ml-4 mt-1">
                                <a href="./Noticia_feira-tecnica-do-senac-saiba-tudo.php" class="text-light">
                                    <h5 class="card-title font-weight-bold h5-outras">Feira técnica do Senac - saiba tudo</h5>
                                    <b class="float-left mt-3" style="color: #FF0D70;">NOTÍCIA</b>
                                    <b class="text-muted float-right mt-3 mr-4 mr-lg-0">23/11/2022 - 14:46</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php
// include do aside
include_once './includes/_aside.php';

// include do footer
include_once './includes/_footer.php';
?>