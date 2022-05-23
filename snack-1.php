<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite = [
        [
            'squadraCasa' => 'Olimpia Milano',
            'squadraOspite' => 'Cantù',
            "punteggioCasa" => 55,
            'punteggioOspite' => 60,
        ],
        [
            'squadraCasa' => 'Allianz Pallacanestro Trieste',
            'squadraOspite' => 'A|X Armani Exchange Milano',
            "punteggioCasa" => 63,
            'punteggioOspite' => 68,
        ],
        [
            'squadraCasa' => 'Banco di Sardegna Sassari',
            'squadraOspite' => 'Bertram Derthona Basket Tortona',
            "punteggioCasa" => 79,
            'punteggioOspite' => 62,
        ],
        [
            'squadraCasa' => 'Carpegna Prosciutto Pesaro',
            'squadraOspite' => 'Dolomiti Energia Trentino',
            "punteggioCasa" => 80,
            'punteggioOspite' => 77,
        ],
        [
            'squadraCasa' => 'Fortitudo Kigili Bologna',
            'squadraOspite' => 'Germani Brescia',
            "punteggioCasa" => 74,
            'punteggioOspite' => 74,
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Risultati Lega Basket Serie A - Quarti di finale </h1>
    <ul>
        <?php for ($i = 0; $i < count($partite); $i++){
        echo "<li><strong>{$partite[$i]['squadraCasa']}</strong> - <strong>{$partite[$i]['squadraOspite']}</strong> | {$partite[$i]['punteggioCasa']}-{$partite[$i]['punteggioOspite']}</li>";
        } ?>
    </ul>
</body>
</html>