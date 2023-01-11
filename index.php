<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
    session_start();
        require_once __DIR__ . "/libs/helper.php";

    ?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col text-center mt-5 mb-5">
            <h1>Strong Password Generetor</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center mb-5">
            <h3>Genera una password sicura</h3>
        </div>
    </div>
</div>

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
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>