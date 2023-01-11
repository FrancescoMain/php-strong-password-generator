<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
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

        <?php echo randomPassword($pswL) ?>
       
</body>
</html>