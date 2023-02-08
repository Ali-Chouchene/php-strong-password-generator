<?php
function generaStringaRandom($lunghezza) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyz!£$%@#ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $stringaRandom = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $stringaRandom;
}

if(isset($_GET['numero'])){
    $color = 'alert-success';
    $message = 'La Tua Password è: '  . "<h4 class='text-danger'>" . generaStringaRandom($_GET['numero']) . "</h4>" ;
   
}
else {
    $color = 'alert-warning';
   $message = 'Non Hai Inserito Parametri Richiesti!';

}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTAWSONE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <!--Page Title-->
    <title>
        Strong Password Generator
    </title>
    <!--Page Icon-->
    <link rel="icon" type="image/x-icon" href="#">
</head>

<body class="bg-primary-subtle">
    <header>
        <div class="container text-center mt-5 pt-5">
            <h1>Strong Password Generator</h1>
            <h2 class="mb-5">Genera Una Password Sicura</h2>
            <div class="alert <?= $color ?>" role="alert">
                
            <h5><?= $message ?><h5>
                    
               
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="lunghezza  align-items-center p-5 bg-light">
                <form class="w-75 d-flex justify-content-between" action="#" method="GET">
                    <div>
                        <h5 class="m-0">
                            Lunghezza Voluta Password:
                        </h5>
                        <p class="text-secondary m-0 "><i>tra un minimo di 5 ed un massimo di 30 caratteri</i></p>
                    </div>
                    <div>
                        <input type="number" min="5" max="30" required name="numero">
                        <div>
                            <button class="btn btn-primary my-3">Genera</button>
                            <a href="http://localhost/php-strong-password-generator"
                                class="btn btn-danger my-3">Resetta</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </main>

</body>

</html>