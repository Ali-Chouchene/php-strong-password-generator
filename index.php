<?php include 'data/functions.php' ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php' ?>

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
                        <h5 class="mt-5">
                            Vuoi Ripetizioni nella Password?:
                        </h5>
                    </div>
                    <div>
                        <input type="number" min="5" max="30" required name="numero">
                        <div class="form-check mt-5">
                            <input class="form-check-input" type="radio" name="repeat" id="ye">
                            <label class="form-check-label" for="no">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="norepeat" id="no">
                            <label class="form-check-label" for="yes">
                                No
                            </label>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary ">Genera</button>
                            <a href="http://localhost/php-strong-password-generator" class="btn btn-danger my-3">Resetta</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </main>

</body>

</html>