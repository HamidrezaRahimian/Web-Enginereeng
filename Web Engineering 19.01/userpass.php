<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Password</title>
    <style>
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        margin-top: 10px;
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>

    <form>
        <input type="email" placeholder="Email " name="username" required>
        <input type="text" placeholder="password" name="password" required>
        <button>Berechne</button>
    </form>

    <?php
    $username = $_GET["username"] ?? "";

    $password = $_GET["password"] ?? "";

    echo "<h3>username : $username <br> Password: $password </h3>";
    ?>



</body>

</html>