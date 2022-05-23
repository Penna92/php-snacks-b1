<?php

//   SNACK 1
//   Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema : Olimpia Milano - Cantù | 55-60

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
];

// SNACK 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
if (isset($_GET['name']) && isset($_GET['mail']) && $_GET['age']) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $numCheck = is_numeric($age);
    if (empty($name) || empty($mail) || empty($age)) {
        $alert = "Hai lasciato dei campi vuoti";
        // $class = 'alert-error';
    } else {
        if ((strlen($name) >= 3) && (strpos($mail, '.') && strpos($mail, '@')) && ($numCheck)) {
            $alert = "Accesso riuscito";
        } else {
            $alert = "Accesso negato";
        }
    };
} else {
    $alert = "Non hai inserito uno o più dei 3 campi richiesti!";
}


// SNACK 3 
//Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
// Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Nonno Nanni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Pinco Pallino',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Zio Paperone',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Mickey Mouse',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Pinocchio',
            'text' => 'Testo post 6'
        ]
    ],
];

// SNACK 4
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
// public function getArrayOfIntegers($min, $max)

function getArrayOfIntegers($min, $max, $nItems)
{
    $newArray = [];
    while (count($newArray) < $nItems) {
        $number = rand($min, $max);
        if (!in_array($number, $newArray)) {
            $newArray[] = $number;
        }
    }
    return $newArray;
}
// getArrayOfIntegers(1, 100, 10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>

    <style>
        /* stile per lo snack 6 */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            margin: 10px auto;
        }

        section {
            padding-bottom: 20px;
            border-bottom: 1px solid black;
        }

        .grey,
        .green {
            padding: 40px;
            float: left;
            width: 50%;
        }

        .grey {
            background: grey;
        }

        .green {
            background: green;
        }

        /* se si vuole aggiungere altro css è preferibile creare un file apparte */
    </style>

</head>

<body>

    <section id="snack1">

        <h1> Snack 1 </h1>
        <h2>Risultati Lega Basket Serie A - Quarti di finale </h2>
        <ul>
            <?php for ($i = 0; $i < count($partite); $i++) {
                echo "<li>{$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} | {$partite[$i]['punteggioCasa']}-{$partite[$i]['punteggioOspite']}</li>";
            } ?>
        </ul>

    </section>

    <section id="snack2">

        <h1> Snack 2 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
        <p><?php echo $alert ?></p>

    </section>

    <section id="snack3">

        <h1> Snack 3 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
        <?php
        $arrayKey = array_keys($posts);
        foreach ($posts as $key => $val) {
            echo "<strong> {$key} </strong> <br>";
            foreach ($val as $key => $value) {
                echo "{$value['title']} by {$value['author']}: <br> {$value['text']} <br>";
            }
        }
        ?>

    </section>

    <section id="snack4">

        <h1> Snack 4 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
        <h2>Lista di numeri casuali da 1 a 999</h2>
        <ul>
            <li>
                <?php
                $newArray = [];
                for ($i = 0; $i < 15; $i++) {
                    $newArray[] = getArrayOfIntegers(1, 999, 15)[$i];
                    $y = $i + 1;
                    echo "Numero {$y} = ";
                    echo "$newArray[$i] <br>";
                }
                ?>
            </li>
        </ul>
    </section>

    <section id="snack5">

        <h1> Snack 5 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>

    <section id="snack6">

        <h1> Snack 6 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>

    <section id="snack7">

        <h1> Snack 7 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>

</body>

</html>