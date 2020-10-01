<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <title>Document</title>
    <style>
        .rpp {
            display: none;
        }
        .rpp:target {
            display: block;
        }

        .rpn {
            display: none;
        }
        .rpn:target {
            display: block;
        }
    </style>
</head>
<body>
    <h1 id="rpp" class="rpp">
        <?php
            echo "Merci pour votre signature <br> le " . date("d/m/Y") ;
            date_default_timezone_set("Africa/Abidjan");
            echo " à " . date("H:i:s") ;
            echo "<a href='index.php' class='btn btn-success' >OK</a>";
        ?>
    </h1>
    <br>
    <h1 id="rpn" class="rpn">
        <?php
            echo "Vous avez déjà signé pour aujourd'hui <br> le " . date("d/m/Y") ;
            date_default_timezone_set("Africa/Abidjan");
            echo "<a href='index.php' class='btn btn-success' >OK</a>";
        ?>
    </h1>
    
</body>
</html>
