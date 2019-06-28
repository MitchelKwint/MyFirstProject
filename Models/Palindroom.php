<?php
//Hier komen alle functies die te maken hebben met een palindroom
// Palindroom = woord omdraaien

include_once '../Integration/DbHandler.php';

class Palindroom{
    private $tekst;
    private $revertTekst;
            
            function revertWord($tekst){
                $this->tekst = $tekst;
        $revertTekst = "";
        //we gebruiken een for loop omdat we de range kennen.
        for ($index = strlen($tekst) -1; $index > -1; $index--){
          $revertTekst = $revertTekst . $tekst[$index];
        }
        $this->revertTekst = $revertTekst;
    }
    
    function getRevertWord(){
        return $this->revertTekst;
    }
    function heeftPalindroomBetekenis(){
      $dbHandler = new DbHandler(); 
      $dbHandler->findWoord($this->revertTekst);
      return $dbHandler->isWoordGevonden();
    }
}