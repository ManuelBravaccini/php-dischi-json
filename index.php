<?php
include_once __DIR__ . '/partials/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">

    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <header>
            <section class="logo container">
                <div class="row justify-content-around">
                    <div class="col-12 d-flex justid">
                        <img src="./img/spotify-logo-png-7057.png" alt="Logo Spotify">
                    </div>
                </div>
            </section>
        </header>
        <main>
            <section class="container discs">
                <div class="row">
                    <div class="disc col-3 p-4">
                        <div class="album">
                            <img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" alt="">
                        </div>
                        <div class="disc-info">
                            <h4>New Jersey</h4>
                            <h6>Bon Jovi</h6>
                            <h4>1988</h4>
                        </div>
                    </div>
                </div>
            </section>









        </main>
    </div>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>