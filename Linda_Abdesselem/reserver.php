<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cin = $_POST['CIN'];
    $gsm = $_POST['GSM'];
    $email = $_POST['mail'];

    if (strlen($cin) != 8 || !is_numeric($cin)) {
        echo "Veuillez vérifier le numéro CIN.";
        return;
    }

    if (strlen($gsm) != 8 || !is_numeric($gsm)) {
        echo "Veuillez vérifier le numéro GSM.";
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Veuillez vérifier l'adresse email.";
        return;
    }

    $id = substr($gsm, 0, 8) . substr($cin, 0, 8) . strtoupper(substr($email, strpos($email, "@") - 2, strpos($email, "@")));


    echo $id;
}
?>
