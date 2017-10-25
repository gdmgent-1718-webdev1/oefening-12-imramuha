<?php
                 
    $cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
    sort($cities);                                   // sort($arrayname); can be used to sort arrays alphabetically
    $cities = array_map("strtoupper", $cities);    // $arrayname = array_map("strtoupper", $arrayname); can be used to change case to upper to lower we put "strtolower"
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Sort array alphabetically></title>
</head>
<body>
    <div class="container">
  

    <ul>
    <?php
        foreach ($cities as $city) {
           
        echo "<ol> $city </ol>";                                // creer een ol element waarvoor de loop alle waardes uit de array haalt.
        
            
        
       


           
        }
    ?>

    </ul>

    </div>

 
    


</body>
</html>