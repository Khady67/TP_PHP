<?php
/*$mot = readline("Veuillez entrer un mot ");
$inverse = strrev($mot);
$nvMot = strtolower($inverse);
if ($nvMot == strtolower($mot)) {
    echo "Ce mot est un palindrome\n";
} else {
    echo "Ce mot n'est pas un palindrome\n";
}*/
$notes = [10, 20, 14, 15];
$length = count($notes);
for($i=0; $i < $length; $i++){
    $somme += $notes[$i];
}
$moyenne = $somme / count($notes);
echo "La moyenne est $moyenne";
