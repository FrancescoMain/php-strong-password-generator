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

    ?>
</head>
<body>
        <form>
            <label for="pswL">Lunghezza della password</label>
            <input type="number" name="pswL">
            <input type="submit" value="Invia">
            <input type="reset" value="Annulla">
        </form>


        
        <?php 
        if ($pswL > 0 ) {

            $_SESSION['pswL'] = $pswL;
            header('Location: ./thankyou.php');
        }

        ?>
        
       
</body>
</html>