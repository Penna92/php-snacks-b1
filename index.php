<?php

// SNACK 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema : Olimpia Milano - Cantù | 55-60

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

// SNACK 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$paragrafo = "Il Lonfo non vaterca né gluisce e molto raramente barigatta. Ma quando soffia il bego a bisce bisce sdilenca un poco e gnagio s’archipatta. È frusco il Lonfo! È pieno di lupigna arrafferia malversa e sofolenta! Se cionfi ti sbiduglia e ti arrupigna se lugri ti botalla e ti criventa. Eppure il vecchio Lonfo ammargelluto che bete e zugghia e fonca nei trombazzi fa lègica busìa, fa gisbuto; e quasi quasi in segno di sberdazzi gli affarferesti un gniffo. Ma lui zuto t’alloppa, ti sbernecchia; e tu l’accazzi.";
$arrayFrasi = explode(".", $paragrafo);
array_pop($arrayFrasi);
// var_dump($arrayFrasi);

// SNACK 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

// SNACK 7 
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$alunni = [
    [
        'name' => 'Mario',
        'lastname' => 'Guidi',
        'voti' => [
            6, 5, 8, 10, 3
        ]
    ],
    [
        'name' => 'Michele',
        'lastname' => 'Bassi',
        'voti' => [
            2, 3, 6, 0, 3
        ]
    ],
    [
        'name' => 'Claudia',
        'lastname' => 'Polli',
        'voti' => [
            9, 7, 6, 5, 8
        ]
    ],
];

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
        <p><strong>Paragrafo intero:</strong> <?php echo $paragrafo ?></p>
        <ul>
            <li><?php for ($i = 0; $i < count($arrayFrasi); $i++) {
                    $y = $i + 1;
                    echo  "<strong>Paragrafo $y</strong>: $arrayFrasi[$i] <br>";
                } ?>
            </li>
        </ul>


    </section>

    <section id="snack6">

        <h1> Snack 6 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

        <p class="grey">
            <?php foreach ($db['teachers'] as $x => $val) {
                foreach ($val as $y => $value) {
                    echo "$value ";
                }
            } ?>
        </p>

        <p class="green">
            <?php foreach ($db['pm'] as $x => $val) {
                foreach ($val as $y => $value) {
                    echo "$value ";
                }
            } ?>
        </p>

    </section>

    <section id="snack7">

        <h1> Snack 7 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
        <p>
            <?php for ($i = 0; $i < count($alunni); $i++) {
                // var_dump($alunni[$i]['voti']);
                $average = array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']);
                $y = $i + 1;
                echo "Studente $y: ";
                echo "{$alunni[$i]['name']} ";
                echo "{$alunni[$i]['lastname']} - ";
                echo "Media voto: ($average) <br>";
            } ?>
        </p>

    </section>

</body>

</html>