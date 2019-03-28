<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbHandler
 *
 * @author Gebruiker
 */
$woord = "lepel";
$db = new DbHandler();
$db ->findWoord($woord);

class DbHandler {
    public function findWoord($woord) {
        //Stap 1:Instellen van PDO
        $options = [
            PDO::ATTR_ERRMODE                   => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE        => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES          => false,
        ];
      
        $adres = '127.0.0.1';
        $charset = 'utf8mb4';
        $db = 'palindroom';
        $user = 'root';
        $password = '';
        
        
        $host = "mysql:host=$adres;dbname=$db;charset=$charset";
  
        $sql = "SELECT * FROM palindromen WHERE woord='$woord';";
        
        try{
            //stap 2: Connect met de database
            $conn = new PDO($host, $user, $password, $options);
            //stap 3: runnen sql query
            $stmt = $conn->query($sql);            
            //stap 4: ophalen van gegevenes over de uitgevoerde query
            if($stmt->rowCount()== 1){
                echo "Woord:" . $woord . "<br>" . 'Woord gevonden';
            } else {
                echo "Woord:" . $woord . "<br>" . 'Woord niet gevonden'; 
            }
        }
             catch (PDOException $e) {
            echo 'jou text' . $e->getMessage() . "(" . $e->getCode() . ") . ";      
           
        }
    }
}
