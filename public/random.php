<?php

    // configuration
    require("../includes/config.php");

    

    if ($_SERVER ["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render ("index.php");
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER ["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST['long_link']))
        {
        
            apologize("Длинная ссылка пустая!");
        }           
    

    else
    {
        
        //$h = "QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm1234567890"; //Выбираем символы, из которых будет состоять наш рандом
        $h = "qwertyuiopasdfghjklzxcvbnm1234567890"; //Выбираем символы, из которых будет состоять наш рандом
        $rand = substr(str_shuffle($h), 0, 5); //создаём ранд. Цифра 5 обозначает длину ранда
        
        $short_link = "/".$rand;
                
        $result = CS50::query("INSERT IGNORE INTO reduction (long_link, short_link) VALUES(?, ?)", $_POST["long_link"], $short_link);
            
        if($result === false)
        {
            apologize("Данная ссылка уже занята(((");
        }
                
            $link = [
                "long_link" => $_POST['long_link'],
                "short_link" => $rand   
              ];
            
             render("index_print.php", ["link" => $link, "title" => "Ссылка готова"]);
        }
    }

?>