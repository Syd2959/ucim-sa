<?php   

    if ($_SERVER["REQUEST_METHOD"] == "POST") { // zistíme, či bola požiadavka odoslaná metódou POST

        $username = isset($_POST['username']) ? $_POST['username'] : 'hovno';
        $loginpassword = isset($_POST['password']) ? $_POST['password'] : 'hovno';
       
        echo $username . " " . $loginpassword . "<br>";

        // Porovnanie s uloženým používateľským menom a heslom (tu môžete pridať svoju vlastnú logiku autentifikácie)
        if ($username == 'jakub' && $loginpassword == 'jakub') {
        // Ak sú používateľské meno a heslo správne, nastavíme premennú $_SESSION['user'] s hodnotou používateľského mena
        $_SESSION['user'] = $username;
        echo 'success'; // Odpoveď pre úspešnú autentifikáciu
        } else {
        echo 'Nesprávne používateľské meno alebo heslo.'; // Odpoveď pre neúspešnú autentifikáciu
        }
} else {
    //echo 'Neplatný požiadavok.'; // Odpoveď pre neplatnú požiadavku
}
       
?>
