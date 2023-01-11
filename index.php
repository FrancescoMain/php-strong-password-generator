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
            <label for="symbol">Simboli</label>
            <input type="checkbox" name="symbol" 
            <?php
                if ($filterSymbol) {

                    echo "checked";
                }
            ?>
            >
            <label for="number">Numeri</label>
            <input type="checkbox" name="number" 
            <?php
                if ($filterNumber) {

                    echo "checked";
                }
            ?>
            >
            <label for="lettere">Lettere</label>
            <input type="checkbox" name="lettere" 
            <?php
                if ($filterLettere) {

                    echo "checked";
                }
            ?>
            >
            <input type="submit" value="Invia">
            <input type="reset" value="Annulla">
        </form>


        
        <?php 
        if ($pswL > 0 ) {

            $_SESSION['pswL'] = $pswL;
            $_SESSION['number'] = $filterNumber;
            $_SESSION['lettere'] = $filterLettere;
            $_SESSION['symbol'] = $filterSymbol;
            header('Location: ./thankyou.php');
        }

        ?>
        
       
</body>
</html>