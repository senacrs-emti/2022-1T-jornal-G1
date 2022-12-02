<?php
//include de header
include_once './includes/_header.php';
// parte do conteudo da pagina
?>

<main class="container col-12 col-lg-8 text-light">
    <div class="row col-12">
        <div class="col-12">
            <h1 class="font-weight-bold mt-4 titulo">Ônibus</h1>
            <div class="pt-4">
                <p class="text-light float-left"><strong>SARIA DORNELES</strong> Estudante</p>
                <b class="text-muted float-right">29/11/2022 - 15:21</b>
            </div>
            <hr class="bg-light mt-4">
            <div class="paragrafo-artigo">
                <p>Um dia cansativo e chuvoso, no horário de pico, pessoas cansadas aglomeradas na parada do ônibus para não se molharem, os ônibus indo e vindo, será que algum vai parar?</p>
            </div>
            <div class="paragrafo-artigo">
                <p>As pessoas embarcando com o desejo de chegar em casa, ver aquela pessoa que você está há quase uma semana sem ver, o animalzinho de estimação que está te esperando o dia inteiro, a mãe com saudade, é tão injusto quando alguém não chega para você...</p>
            </div>
            <div class="paragrafo-artigo">
                <p>Durante a viagem, o ar abafado e o mal cheiro se alastram no ambiente, você não sabe se vai sair dali ou não, os minutos se tornam uma eternidade, as pessoas pressionadas uma contra as outras, desconfortáveis, cansadas, estressadas com o peso do dia a dia, almejando o conforto de sua casa. </p>
            </div>
            <div class="paragrafo-artigo">
                <p>As pessoas entrando e saindo do ônibus finalmente diminuindo a aglomeração, a pessoa que está segurando peso consegue um lugar para se sentar, a que trabalhou o dia inteiro também consegue esse privilégio, as pessoas conseguem parar de se empurrar para passar, o mínimo de conforto surge.</p>
            </div>
            <div class="paragrafo-artigo">
                <p>As portas do ônibus se abrem, todos saem e seguem seu próprio rumo, finalmente aquela aglomeração teve um fim, ou não, pois entravam cada vez mais gente naquele ônibus, e o ciclo se repete de pessoas indo e vindo.</p>
            </div>
            <section class="semelhantes">
                <h3 class="font-weight-bold mt-5">OUTRAS CRÔNICAS</h3>
                <hr class="bg-light">
                <div class="card mb-3 bg-transparent border-bottom border-top-0 border-left-0 border-right-0">
                    <div class="row no-gutters">
                        <div class="col-3 col-lg-2">
                            <img src="./contents/gatosMadrugada.jpg" alt="Gatos" class="editoriaIMG">
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="card-body ml-4 mt-1">
                                <a href="./Cronica_gatos-de-madrugada.php" class="text-light">
                                    <h5 class="card-title font-weight-bold h5-outras">Gatos de madrugada</h5>
                                    <b class="float-left mt-3" style="color: #FF0D70;">CRÔNICA</b>
                                    <b class="text-muted float-right mt-3 mr-4 mr-lg-0">29/11/2022 - 16:24</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 bg-transparent border-bottom border-top-0 border-left-0 border-right-0">
                    <div class="row no-gutters">
                        <div class="col-3 col-lg-2">
                            <img src="./contents/onibus.jpg" alt="Jogos Indies" class="editoriaIMG">
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="card-body ml-4 mt-1">
                                <a href="./Cronica_onibus.php" class="text-light">
                                    <h5 class="card-title font-weight-bold h5-outras">Ônibus</h5>
                                    <b class="float-left mt-3" style="color: #FF0D70;">CRÔNICA</b>
                                    <b class="text-muted float-right mt-3 mr-4 mr-lg-0">29/11/2022 - 15:21</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 bg-transparent border-bottom border-top-0 border-left-0 border-right-0">
                    <div class="row no-gutters">
                        <div class="col-3 col-lg-2">
                            <img src="./contents/procrastinacao.png" alt="Palco do rock in rio" class="editoriaIMG">
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="card-body ml-4 mt-1">
                                <a href="./Cronica_procrastinacao.php" class="text-light">
                                    <h5 class="card-title font-weight-bold h5-outras">Procrastinação</h5>
                                    <b class="float-left mt-3" style="color: #FF0D70;">CRÔNICA</b>
                                    <b class="text-muted float-right mt-3 mr-4 mr-lg-0">29/11/2022 - 15:21</b>
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