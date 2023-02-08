<?php

function generaStringaRandom($lunghezza,)
{
    $array = [];
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyz!?#@$ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $stringa_random = '';
    $stringa_unica = '';

    if (isset($_GET['repeat'])) {
        for ($i = 0; $i < $lunghezza; $i++) {
            $stringa_random .= $caratteri[rand(0, strlen($caratteri) - 1)];
        }
    } elseif (isset($_GET['norepeat'])) {
        while (count($array) < $lunghezza) {
            do {
                $stringa_unica = $caratteri[rand(0, strlen($caratteri) - 1)];
            } while (in_array($stringa_unica, $array));
            $array[] = $stringa_unica;
        }
    } else {
        for ($i = 0; $i < $lunghezza; $i++) {
            $stringa_random .= $caratteri[rand(0, strlen($caratteri) - 1)];
        }
    }

    $stringa_random .= implode('', $array);
    return $stringa_random;
}


if (isset($_GET['numero'])) {
    session_start();
    $message = generaStringaRandom($_GET['numero']);
    $_SESSION['message'] = $message;
    header('Location: result.php');
} else {
    $color = 'alert-warning';
    $message = 'Non Hai Inserito Parametri Richiesti!';
}
