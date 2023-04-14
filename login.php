 <?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
 <!--    <meta http-equiv="Set-Cookie" content="HttpOnly;Secure;SameSite=Strict"> -->

    <title>PZS</title>
    <link rel="shortcut icon" type="image/ico" href="../img/favicon_60b653b6bec9d.ico">
    <link rel="stylesheet" href="../css/normalizer.css"> 
    <link rel="stylesheet" href="../css/project.css">
    <link rel="stylesheet" href="login.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="login.js"></script>
</head>

<body>
    <h2>
        <img src="../img/logo.png"  alt="Username" class="input-icon">
        <form id="prihlasovaci_formular" method="POST" action="">
            <label class="poznamka"></label>
            <label for="username" class="custom-label">Používateľské meno:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password" class="custom-label">Heslo:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit"  value="Prihlásiť sa">
            
        </form>
    </h2>
</body>

</html>
