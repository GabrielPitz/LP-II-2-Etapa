<?php
    include "topo.php";
?>
<link rel="shortcut icon" href="../ícone do Site/disco-de-vinil.png" type="image/x-icon">
 <!--Caroussel-->

 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Fotos do Caroussel/Slide 1.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Fotos do Caroussel/Slide 2.jpg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Fotos do Caroussel/Slide 3.jpg" alt="Terceiro Slide">
          </div>
        </div>
      </div>

<h1 class="text-center mt-5 mb-5">Cantores</h1>
<link rel="stylesheet" href="../css/style.css">
<!--Cards -->
<div class="container mt-5 mb-5 text-center">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-5">
            <div class="card">
                <img src="Fotos dos Cards/Foto 1.jpg" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h5 class="card-title">Paulo Sérgio</h5>
                    <p class="card-text">Um dos principais cantores românticos brasileiros dos anos 70, famoso por sucessos como "Última Canção" e "A Fera de Olhos Mansos", com letras melancólicas e apaixonadas.</p>
                    <a href="https://pt.wikipedia.org/wiki/Paulo_S%C3%A9rgio_(cantor)" class="btn btn-danger" target="_blank">Informações</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-5">
            <div class="card">
                <img src="Fotos dos Cards/Foto 2.jpg" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h5 class="card-title">Evaldo Braga</h5>
                    <p class="card-text">Conhecido como "O Ídolo Negro", Evaldo Braga conquistou o público com sua voz marcante e músicas emocionantes, sendo destaque na música romântica dos anos 70 até a sua morte precoce.</p>
                    <a href="https://pt.wikipedia.org/wiki/Evaldo_Braga" class="btn btn-danger" target="_blank">Informações</a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 mb-5">
            <div class="card">
                <img src="Fotos dos Cards/Foto 3.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">Ronnie Von</h5>
                    <p class="card-text">Cantor e apresentador, Ronnie Von ganhou destaque na Jovem Guarda, evoluindo para uma carreira solo de sucesso com hits como "A Praça", tornando-se ícone na música e TV, estando vivo até hoje.</p>
                    <a href="https://pt.wikipedia.org/wiki/Ronnie_Von" class="btn btn-danger" target="_blank">Informações</a>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center mt-5 mb-5">Álbuns Musicais</h1>

<!-- Conteúdo da Página -->
<div class="container mt-5 cancoes">
    <div class="row align-items-center">
        <div class="col-md-6 d-flex justify-content-center mb-5">
            <a href="https://pt.wikipedia.org/wiki/Paulo_S%C3%A9rgio_(cantor)" target="_blank"><img src="LPs/Paulo Sérgio Vol 1.jpeg" class="img-fluid" alt="Description of image"></a>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4" style="text-align: center;">Músicas</h2>
            <ul class="list-group">
                <li class="list-group-item">Última Canção</li>
                <li class="list-group-item">Não Sei te Esquecer</li>
                <li class="list-group-item">Não me Trate como um Cão</li>
                <li class="list-group-item">Não Quero mais Você</li>
                <li class="list-group-item">Quando a Saudade Apertar</li>
            </ul>
        </div>
    </div>
</div>
<div class="text-center mt-5">
    <a  class="btn btn-danger" href="https://discografiabrasileira.com.br/gravadora/171843/caravelle" target="_blank">Comprar Álbum</a>
</div>

<div class="container mt-5 cancoes">
    <div class="row align-items-center">
        <div class="col-md-6 d-flex justify-content-center mb-5">
            <a href="https://pt.wikipedia.org/wiki/Evaldo_Braga"><img src="LPs/Evaldo Braga Vol 2.jpeg" class="img-fluid" alt="Description of image"></a>
        </div>
        <div class="col-md-6 cancoes">
            <h2 class="mb-4" style="text-align: center;">Músicas</h2>
            <ul class="list-group">
                <li class="list-group-item">Sorria Sorria</li>
                <li class="list-group-item">Esse Alguém</li>
                <li class="list-group-item">Eu não sou Lixo</li>
                <li class="list-group-item">Mentira</li>
                <li class="list-group-item">Noite Cheia de Estrelas</li>
            </ul>
        </div>
    </div>
</div>
<div class="text-center mt-5">
    <a class="btn btn-danger" href="https://discografiabrasileira.com.br/gravadora/86578/polydor" target="_blank">Comprar Álbum</a>
</div>

<div class="container mt-5 cancoes">
    <div class="row align-items-center">
        <div class="col-md-6 d-flex justify-content-center mb-5">
            <a href="https://pt.wikipedia.org/wiki/Ronnie_Von" target="_blank"><img src="LPs/Ronnie Von Deluxe.jpeg" class="img-fluid" alt="Description of image"></a>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4" style="text-align: center;">Músicas</h2>
            <ul class="list-group">
                <li class="list-group-item">A Catedral</li>
                <li class="list-group-item">A Praça</li>
                <li class="list-group-item">Menina Flor</li>
                <li class="list-group-item">Escuta meu Amor</li>
                <li class="list-group-item">O Carpinteiro</li>
            </ul>
        </div>
    </div>
</div>
<div class="text-center mt-5">
    <a class="btn btn-danger" target="_blank" href="https://discografiabrasileira.com.br/gravadora/86578/polydor" target="_blank">Comprar Álbum</a>
</div>

<?php
    include "rodape.php";
?>

