<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();

        require_once __DIR__ . "/libs/helper.php";
        $pswL = $_SESSION['pswL'];
        $filterNumber = $_SESSION['number'];
        $filterLettere = $_SESSION['lettere'];
        $filterSymbol = $_SESSION['symbol'];


    ?>
</head>
<body>
    <?php
      echo randomPassword($pswL, $filterNumber, $filterLettere,  $filterSymbol ); 
    ?>


       
</body>
</html>