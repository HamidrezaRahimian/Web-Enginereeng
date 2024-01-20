<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Password</title>

</head>

<body>

    <form>
        <input type="number" placeholder="minuend " name="mi" required>
        <input type="number" placeholder="subtrahend" name="su" required>
        <button>Berechne</button>
    </form>

    <?php
    $minu = $_GET["mi"] ?? "";

    $subt = $_GET["su"] ?? "";
    $dif = $minu - $subt;
    echo "<h3>The difference between $minu and $subt is : $dif</h3>";
    ?>


</body>

</html>