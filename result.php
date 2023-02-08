<?php 
include 'data/functions.php' ;
session_start();
if(!empty($_SESSION['message'])) {
    $pass = $_SESSION['message'];
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'templates/head.php' ?>

<body>
    <main>
        <div class="container p-5 ">
            <div class="text-center p-5 ">
                <h3>La Tua Password è:</h3>
                <h1><?= $pass ?></h1>
                <a class="btn btn-success mt-5" href="http://localhost/php-strong-password-generator/">Torna indietro</a>
            </div>
        </div>
    </main>
</body>

</html>