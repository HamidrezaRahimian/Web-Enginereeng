<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Password is Fucked!</title>
    <style>
        body {
            background-color: #f4f4f4;
            margin-top: 260px;
            margin-left: 550px;
            height: 100vh;
        }

    </style>
</head>

<body>
<div>
    <strong>Email address:</strong>
   
    <?php
    echo $_GET["ea"];
    ?>
 <br>
    <strong>Password:</strong>

    <?php
    echo $_GET["pd"]
    ?>
</div>

</body>

</html>
