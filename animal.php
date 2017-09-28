<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/skeleton.css">
        <title>Animal Machine</title>
    </head>
    <body style="background-color:#7A4728">
        <div class="container four columns offset-by-four columns" style="background-color:#A52A2A">
            <?php 
                $year = $_POST["Year"];
                echo "<h1>$year</h1>";
                echo "<img src=\"assets/".$year.".png\"class=\"image\">"
            ?>
        </div>
    </body>
</html>

