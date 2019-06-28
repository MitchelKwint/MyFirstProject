
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyFirstProject</title>
    </head>
    <body>
    <form action="http://localhost/MyFirstProject/Controlers/controller.php" method="post">
        <label>Vul hier de tekst in:<br /></label>
        <input type="text" name="name"><br>
        <input type="submit" name="submit" value="Verzend">
    </form>       
        <?php
            echo $viewData['palindroom']."<br />";
            echo $viewData['message']."<br />";
            echo $viewData['action'];
        ?>  
    </body>
</html>
