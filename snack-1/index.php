<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

// Olimpia Milano - Cantù | 55-60

$partite = [
    [
        'squadra di casa' => 'Celtics',
        'squadra ospite' => 'Bergamo',
        'punteggio' => '55-60',
    ],
    [
        'squadra di casa' => 'Milano',
        'squadra ospite' => 'Bologna',
        'punteggio' => '55-60',
    ],
    [
        'squadra di casa' => 'Chicago',
        'squadra ospite' => 'Amsterdam',
        'punteggio' => '33-60',
    ],
];

foreach ($partite as $partita) {
    foreach ($partita as $risultato) {
        echo $risultato . '<br>';
    };
};

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



    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>