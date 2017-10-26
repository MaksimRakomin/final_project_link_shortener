<?php
    // configuration
    require ("../includes/config.php");
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER ["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render ("index.php");
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER ["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST['long_link']) || empty($_POST['short_link']))
        {
            if (empty($_POST['long_link']))
            {
                apologize("Длинная ссылка пустая!");
            }
            else if (empty($_POST['short_link']))
            {
                apologize("Длинная ссылка пустая!");
            }
            
        }

        else
        {
            $short_link = "/".$_POST["short_link"];
                
            $result = CS50::query("INSERT IGNORE INTO reduction (long_link, short_link) VALUES(?, ?)", $_POST["long_link"], $short_link);
            
            if($result === false)
            {
                apologize("Данная ссылка уже занята(((");
            }
                
             $link = [
                "long_link" => $_POST['long_link'],
                "short_link" => $_POST['short_link']
              ];
            
             render("index_print.php", ["link" => $link, "title" => "Ссылка готова"]);
        }
        
        
        
    }
?>