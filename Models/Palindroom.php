<?php
//Hier komen alle functies die te maken hebben met een palindroom
// Palindroom = woord omdraaien

function revertWord($tekst){
    $revertTekst = "";
    //we gebruiken een for loop omdat we de range kennen.
    for ($index = strlen($tekst) -1; $index > -1; $index--){
      $revertTekst = $revertTekst . $tekst[$index];
    }
    return $revertTekst;
}
