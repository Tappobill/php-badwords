<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $testo = ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat maxime adipisci, et velit odio deserunt eveniet impedit quis labore, libero necessitatibus. Architecto, modi illo blanditiis totam nulla deleniti animi mollitia?';
    ?>

    <p>
        <?php echo $testo ?>
    </p>

    <div>
        Lunghezza testo =
        <?php echo strlen($testo) ?>
    </div>

    <div>
        <?php
        if (empty($_GET['censura'])) {
            echo 'non hai una parola da censurare';
        } else {
            $testoModificato = str_replace($_GET['censura'], '***', $testo);
            echo $testoModificato;
        }
        ?>
    </div>

    <div>
        Lunghezza testoModificato =
        <?php echo strlen($testoModificato) ?>
    </div>


</body>

</html>