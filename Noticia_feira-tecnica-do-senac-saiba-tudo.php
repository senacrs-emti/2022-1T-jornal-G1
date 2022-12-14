<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>

<main class="container col-12 col-lg-8 text-light">
    <div class="row col-12">
        <div class="col-12">
            <h1 class="font-weight-bold mt-4 titulo">Feira técnica do Senac - saiba tudo</h1>
            <h6 class="font-weight-normal subtitulo">Uma feira especial da escola de ensino médio Senac Distrito Criativo para apresentar trabalhos feitos pelos alunos</h6>
            <div class="pt-4">
                <p class="text-light float-left"><strong>SAMUEL SOARES</strong> Estudante</p>
                <b class="text-muted float-right">23/11/2022 - 14:46</b>
            </div>
            <hr class="bg-light mt-4">
            <div class="paragrafo-artigo">
                <p>Neste sábado, dia 03/12 acontecerá um grande evento de tecnologias e informática na escola de Ensino Médio Senac Distrito Criativo. O evento será composto de vários trabalhos e projetos feitos pelos alunos talentosos do Senac e será totalmente aberto para o público para se divertirem com as produções dos alunos, além de aprender um pouco mais sobre outras linguagens de computação e novos conceitos apresentados pelos mesmos!</p>
            </div>
            <div class="imagem-artigo text-center">
                <img src="./contents/feiraTecnico.jpg" alt="Convite do evento" class="w-50 mb-2 mt-2 imgLolla1">
                <p>Foto do convite de divulgação do evento</p>
            </div>
            <div class="paragrafo-artigo">
                <p>Estarão participando todas as turmas da escola, sendo as turmas de primeiro ao terceiro ano do ensino médio. Todos os projetos serão organizados de acordo com os andares do prédio da Escola, então se quiser checar todos os projetos, passe de andar em andar e não de elevador!</p>
            </div>
            <div class="paragrafo-artigo">
                <p>A Feira irá durar aproximadamente das oito da manhã até a uma hora da tarde, os visitantes terão todo esse tempo para aproveitar os projetos. Tenha certeza de passar por todos os projetos antes de dar “tchau tchau” para o Senac, pois acontece apenas uma vez ao ano.</p>
            </div>
            <section class="semelhantes">
                <h3 class="font-weight-bold mt-5">OUTRAS NOTÍCIAS</h3>
                <hr class="bg-light">
                <div class="card mb-3 bg-transparent border-bottom border-top-0 border-left-0 border-right-0">
                    <div class="row no-gutters">
                        <div class="col-3 col-lg-2">
                            <img src="./contents/copaCatar.jpeg" alt="Copa do mundo 2022" class="editoriaIMG">
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="card-body ml-4 mt-1">
                                <a href="./noticia_copa-mundo-2022-no-catar.php" class="text-light">
                                    <h5 class="card-title font-weight-bold h5-outras">Copa do Mundo 2022 no Catar</h5>
                                    <b class="float-left mt-3" style="color: #FF0D70;">NOTÍCIA</b>
                                    <b class="text-muted float-right mt-3 mb-2 mr-4 mr-lg-0">23/11/2022 - 15:08</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 bg-transparent border-bottom border-top-0 border-left-0 border-right-0">
                    <div class="row no-gutters">
                        <div class="col-3 col-lg-2">
                            <img src="./contents/lollapalooza-2022.jpg" alt="Lollapalooza 2022" class="editoriaIMG">
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="card-body ml-4 mt-1">
                                <a href="./noticia_venda-dos-ingressos-lollapalooza-2023.php" class="text-light">
                                    <h5 class="card-title font-weight-bold h5-outras">Venda dos ingressos Lollapalooza 2023</h5>
                                    <b class="float-left mt-3" style="color: #FF0D70;">NOTÍCIA</b>
                                    <b class="text-muted float-right mt-3 mr-4 mr-lg-0">22/11/2022 - 14:30</b>
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