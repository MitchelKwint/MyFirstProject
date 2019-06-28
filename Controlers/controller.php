<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Models/Palindroom.php';

if (! empty($_POST)){

    if (checkPostArray()){
      if(! strlen ($_POST['name']) == 0){
          
          $palindroom = new Palindroom();
          $palindroom->revertWord($_POST['name']);
          $revertWord = $palindroom->getRevertWord();
          if ($palindroom->heeftPalindroomBetekenis()){
              $viewData = array(
                  'palindroom' => "Het omgekeerde woord is:" . $revertWord,
                  'message' => "Het omgedraaide woord heeft een betekenis",
                  'action' => "Vul een nieuw woord in of sluit de browser",
                  
              );
              
          }else{
           $viewData = array(
                  'palindroom' => "Het omgekeerde woord is:" . $revertWord,
                  'message' => "Het omgedraaide woord heeft een betekenis",
                  'action' => "Vul een nieuw woord in of sluit de browser"
              );  
          }
         include_once '../view/view.php';
      } else{
        $viewData = array(
                  'palindroom' => "",
                  'message' => "Het omgedraaide woord heeft een betekenis",
                  'action' => "Vul een nieuw woord in of sluit de browser"
              );  
        include_once '../view/view.php';
      } 
    } else {
        http_response_code(409);
    }  
}
else{
        http_response_code(406);
  }

function checkPostArray(){
    // slechte code voorbeeld
//    if(isset($_POST["name"])){
//        if(isset($_POST["submit"])){
//           return TRUE; 
//        }
//    }
    $validArguments = array ("name", "submit");
    for ($index = 0 ; $index < sizeof($_POST) ; $index++){
        $argument = $validArguments [$index];
        if(! isset($_POST[$validArguments[$index]])){
            return FALSE;       
    }
         }
 return TRUE;   
}
    