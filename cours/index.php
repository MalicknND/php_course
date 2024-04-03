<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    /* concatenate */
    $str1 = "Hello ";
    $str2 = "World!";
    $str3 = $str1 . ' et ' . $str2;
    // echo $str3;


    /* Operator */
    $a = 10;

    $premierNombre = 10;
    $deuxiemeNombre = 20;
    $resultat = $premierNombre + $deuxiemeNombre;
    // echo $resultat;



    /* Arrays */
    $user = array(
        'id' => 1,
        'username' => 'admin',
        'password' => 'admin'
    );
    // echo 'Bonjour ' . $user['username'] . ' !';

    // $user2 = array(1, 2, 3, 4, 5, 6, 7);



    /* Exercise */
    $person = array(
        'firstname' => 'John',
        'lastname' => 'Doe',
        'age' => 30,
        'gender' => 'male'
    );

    // echo 'Bonjour ' . $person['firstname'] . 'vous avez ' .  $person['age'] . ' et dans 50ans vous aurez ' . ($person['age'] + 50) . ' ans';



    /* structures de controle */
    $age = 20;

    if ($age >= 18) {
        // echo 'Vous êtes majeur!';
    } else {
        // echo 'Vous êtes mineur!';
    }
    // condition multiples
    $pseudo = 'admin';
    $password = 'admin';
    if ($pseudo == 'admin' && $password == 'admin') {
        // echo 'Vous êtes administrateur!';
    } else {
        // echo 'Vous n\'êtes pas administrateur!';
    }
    // conditions ternaires
    $age2 = 11;
    // echo $age2 >= 18 ? 'Vous êtes majeur!' : 'Vous êtes mineur!';

    // switch
    $note = 10;
    switch ($note) {
        case 0:
            // echo 'Tu es nul!';
            break;
        case 10:
            // echo 'Tu as la moyenne!';
        case 15:
            // echo 'Tu peux mieux faire!';
            break;
        case 20:
            // echo 'Excellent !';
            break;

        default:
            // echo 'Je ne sais pas!';
            break;
    }


    /* boucle */

    //    while
    $i = 0;
    while ($i < 10) {
        // echo 'Voici le numéro de la ligne ' . ($i + 1) . '<br>';
        $i++;
    }

    //    for
    for ($i = 0; $i < 10; $i++) {
        // echo 'Voici le numéro de la ligne ' . ($i + 1) . '<br>';
    }

    //    foreach ()
    $fruits = array('pomme', 'orange', 'banane');

    for ($i = 0; $i < 3; $i++) {
        // echo $fruits[$i] . '<br>';
    }

    foreach ($fruits as $fruit) {
        // echo $fruit . '<br>';
    }

    // do while
    $i = 0;
    do {
        // echo 'Voici le numéro de la ligne ' . ($i + 1) . '<br>';
        $i++;
    } while ($i < 10);

    // Tableaux de multiples dimensions
    // echo '<table border style="border-collapse: collapse;">
    // <tr>
    //     <th>1</th>
    //     <th>2</th>
    //     <th>3</th>
    //     <th>4</th>
    //     <th>5</th>
    //     <th>6</th>
    //     <th>7</th>
    //     <th>8</th>
    //     <th>9</th>
    //     <th>10</th>
    // </tr>';

    for ($i = 1; $i <= 10; $i++) {
        // echo '<tr><th>' . $i . '</th>';
        for ($j = 1; $j <= 10; $j++) {
            // echo '<td>' . $i * $j . '</td>';
        }
        // echo '</tr>';
    }

    // echo '</table>';

    /* Projet sur les tableaux
    echo '<table border>
        <tr>
            <th>Nombre</th>
            <th>carré</th>
            <th>racine</th>
        </tr>';
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>
                <td>' . $i . '</td>
                <td>' . $i * $i . '</td>
                <td>' . sqrt($i) . '</td>
            </tr>';
    }

    echo '</table>';
    */

    /* FUNCTIONS 

    function HelloWorld($a, $b)
    {
        $temp = $a * $b;
        $temp /= 5;
        $temp = $a + $temp - ($a + $b);
        return $temp;
    }

    $resultat = HelloWorld(52, 74);
    echo $resultat;
*/


    /* Exercise sur les fonctions */
    //  definier une fonction : les racines d'une equation du second degré ax² + bc + c
    // delta = b² - 4ac 
    // < 0 pas de solution
    // = 0 une solution -b/2a
    // > 0 deux solutions (-b - racine(delta)) / 2a et (-b + racine(delta)) / 2a

    function equation($a, $b, $c)
    {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            return 'pas de solution';
        } else if ($delta == 0) {
            return 'une solution -b/2a :' . (-$b / 2 * $a);
        } else {
            return 'deux solutions <br> (-b - racine(delta)) / 2a et (-b + racine(delta)) / 2a' . (-$b - sqrt($delta)) / 2 * $a . ' et ' . (-$b + sqrt($delta)) / 2 * $a;
        }
    }

    $resultat = equation(52, 74, 10);
    // echo $resultat;



    // fonction native en php
    // strlen() : retourne la longueur d'une chaine de caractère
    // substr() : retourne une partie d'une chaine de caractère
    // substr_count() : retourne le nombre d'occurences d'une chaine de caractère dans une autre chaine de caractère
    // strpos() : retourne l'index de la première occurence d'une chaine de caractère dans une autre chaine de caractère
    // substr_replace() : retourne une nouvelle chaine de caractère avec une partie d'une chaine de caractère remplacée par une autre chaine de caractère
    // str_replace() : retourne une nouvelle chaine de caractère avec une partie d'une chaine de caractère remplacée par une autre chaine de caractère

    $string = "Bienvenue sur mon site";
    // echo strlen($string);
    // echo substr($string, 0, 9);


    //  fonctions natives pour les maths
    // abs() : retourne la valeur absolue d'un nombre
    // sqrt() : retourne la racine carrée d'un nombre
    // pow() : retourne le nombre au carré d'un nombre
    // floor() : retourne le nombre au carré d'un nombre
    // ceil() : retourne le nombre au carré d'un nombre
    // round() : retourne le nombre au carré d'un nombre
    // min() : retourne le minimum d'un nombre
    // max() : retourne le maximum d'un nombre
    // rand() : retourne un nombre aléatoire entre 0 et 1
    // rand() : retourne un nombre aléatoire entre 0 et 100

    $a = rand(0, 100);

    //  fonctions natives pour les tableaux 
    // count() : retourne le nombre d'éléments d'un tableau
    // in_array() : retourne vrai si un élément d'un tableau est trouvé dans un autre tableau
    // array_search() : retourne l'index d'un élément d'un tableau dans un autre tableau
    // array_keys() : retourne les clés d'un tableau
    // array_values() : retourne les valeurs d'un tableau
    // array_merge() : retourne un tableau contenant les valeurs d'un tableau et un autre tableau
    // array_unique() : retourne un tableau unique d'un tableau
    // array_keys_exists() : retourne vrai si une clé existe dans un tableau

    $fruits = array('pomme', 'orange', 'banane');






    ?>
</body>

</html>