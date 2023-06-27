<?php

/////////// EXERCICE 1 ////////////

// $age = 30;
// echo ($age >= 18) ? "Vous êtes majeur" : "Vous êtes mineur";

/////////// EXERCICE 2 ////////////

// $isEasy = false;
// if ($isEasy == true) {
//     echo "C'est facile !";
// } else {
//     echo "C'est difficile !";
// };
// echo "<br/>";
// echo ($isEasy) ? "C'est facile !" : "C'est difficile !";

/////////// EXERCICE 3 ////////////

// $age = 30;
// $gender = "female";

// echo (($age >= 18 && $gender == "male") ? "Vous êtes un homme et vous êtes majeur" :
//     (($age >= 18 && $gender == "female") ? "Vous êtes une femme et vous êtes majeur" :
//         (($age <= 18 && $gender == "female") ? "Vous êtes une femme et vous êtes mineur" :
//             "Vous êtes un homme et vous êtes mineur")));

/////////// EXERCICE 4 ////////////

// $magnitude = 4;
// switch ($magnitude) {
//     case 1:
//         echo "Micro-séisme impossible à ressentir.";
//         break;
//     case 2:
//         echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
//         break;
//     case 3:
//         echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
//         break;
//     case 4:
//         echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
//         break;
//     case 5:
//         echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments 
//         présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
//         break;
//     case 6:
//         echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour 
//         de l'épicentre.";
//         break;
//     case 7:
//         echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la 
//         distance.";
//         break;
//     case 8:
//         echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de 
//         kilomètres.";
//         break;
//     case 9:
//         echo "Séisme capable de tout détruire sur une très vaste zone.";
//         break;
//     default:
//         echo "Désolé, je n'ai pas de message à afficher.";                         
// }

/////////// EXERCICE 5 ////////////

// $gender = "Homme";

// echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
// echo "</br>";

// if ($gender != 'Homme') {
//     echo 'C\'est une développeuse !!!';
// } else {
//     echo 'C\'est un développeur !!!';
// };

/////////// EXERCICE 6 ////////////

// $age = 23;

// echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
// echo "</br>";

// if ($age >= 18) {
//     echo 'Tu es majeur';
// } else {
//     echo 'TU n\'es pas majeur';
// };

/////////// EXERCICE 7 ////////////

// $isOk = false;

// echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
// echo "</br>";

// if ($isOk == false) {
//     echo 'c\'est pas bon !!!';
// } else {
//     echo 'c\'est ok !!';
// };

/////////// EXERCICE 8 ////////////

$isOk = true;

echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
echo "</br>";

if ($isOk) {
    echo 'c\'est ok !!';
} else {
    echo 'c\'est pas bon !!!';
};


?>