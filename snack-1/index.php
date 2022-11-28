<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

// Olimpia Milano - Cantù | 55-60

$partite = [
    [
        'squadra_di_casa' => 'Celtics',
        'squadra_ospite' => 'Bergamo',
        'punteggio_di_casa' => '55',
        'punteggio_ospite' => '60',
    ],
    [
        'squadra_di_casa' => 'Milano',
        'squadra_ospite' => 'Bologna',
        'punteggio_di_casa' => '55',
        'punteggio_ospite' => '60',
    ],
    [
        'squadra_di_casa' => 'Chicago',
        'squadra_ospite' => 'Amsterdam',
        'punteggio_di_casa' => '33',
        'punteggio_ospite' => '0',
    ],
];

// foreach ($partite as $partita) {
//     foreach ($partita as $risultato) {
//         echo $risultato . '<br>';
//     };
// };

?>

<!doctype html>
<html lang='it'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='Diego Cavenati'>
    <title></title>
    <!-- Font awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <!-- Personal CSS -->
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>

<body>

    <!-- <div class="partite">
        <div class="partita1">
           
        </div>
        <div class="partita2">
            

        </div>
        <div class="partita3">

        </div>
    </div> -->
    <?php foreach ($partite as $partita) : ?>
        <li><?php echo $partita['squadra_di_casa'] . '-' . $partita['squadra_ospite'] ?> | <?php echo $partita['punteggio_di_casa'] . '-' . $partita['punteggio_ospite'] ?> </li>
    <?php endforeach; ?>


    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>