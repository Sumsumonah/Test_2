<?php
// Récupération des données envoyées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Utilisez les données comme vous le souhaitez
    // Par exemple, vous pouvez les enregistrer dans une base de données
    // Ou les utiliser pour effectuer certaines actions, etc.
}
?>
