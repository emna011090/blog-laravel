<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corinthia&family=Montserrat:wght@200;300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Corinthia&display=swap" rel="stylesheet">
<style>
.image_header{
    background-image:url({{asset('img/empty.jpg')}});
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
   height:50vh;
}
nav.navbar,.card-title,.card-detail{
    background-color: #a1cacc!important;
}
.btn{
    background-color:#a1cacc;
}
nav{
    font-family: 'Corinthia', cursive;
    font-size: 40px;
    
}
h2{
    color:#cb934e;
}
h1{
    color: #0f7f85;
    font-size: 126px;
    text-align: center;
    font-family: 'Corinthia', cursive;
    padding-top: 120px;
    float: left;
}
.post{
    clear:left;
}
</style>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <a class="navbar-brand text-white" href="#">Blog Déco</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Pricing</a>
                </li>
                
              </ul>
            </div>
                  <a class="nav-link text-white" href="connexion.phtml">Connexion</a>
                  <a class="nav-link text-white" href="inscription.php">Inscription</a>
          </nav>
          <div class="image_header">
              <h1>Conseil et Astuce</h1>
                  
        </div>
    </header>
<main>

    @yield('content')


</main>







    <footer>
</footer>
    </body>
</html>
