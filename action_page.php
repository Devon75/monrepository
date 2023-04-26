<?php

    use PHPMailer\PHPMailer\PHPMailer;


    $servername = "localhost";
    $username = "root";
    $password = "root";

    $connection = new mysqli($servername, $username, $password);
    if($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "CREATE DATABASE monFormulaire";
    if($connection->query($sql) === true){
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $connection->error;
    }

    echo $sql;

    $connection->close();





    /**
     * @var \PHPMailer $mail Objet PHPMailer utilisé pour envoyer des emails
     */
    $mail = new PHPMailer;

    // Définition de la constante EMAIL
    define('EMAIL', 'jorisobiang306@gmail.com');

    $mail->isSMTP();                                      // Utilisation de SMTP
    $mail->Host = 'smtp.gmail.com';                       // Serveur SMTP
    $mail->SMTPAuth = true;                               // Authentification SMTP activée
    $mail->Username = 'EMAIL';     // Adresse email pour l'authentification SMTP
    $mail->Password = 'Dragsler!76';                // Mot de passe pour l'authentification SMTP
    $mail->SMTPSecure = 'tls';                            // Chiffrement TLS
    $mail->Port = 587;                                    // Port SMTP
    $mail->setFrom('EMAIL', 'Mekuie'); // Adresse email et nom de l'expéditeur
    $mail->addAddress('karlemploij44@gmail.com', 'Obiang'); // Adresse email et nom du destinataire
    $mail->isHTML(true);                                  // Format du message en HTML
    $mail->Subject = 'essai';                   // Sujet du message
    $mail->Body =  '
                    <html>
                    <head>
                    <style>
                        body {
                            font-weight: bold;
                        }
                    </style>
                    </head>
                    <body>
                        bonjour, essai a réussi
                    </body>
                    </html>
    ';          // Contenu du message en HTML
    // Contenu du message en texte brut (pour les clients qui ne peuvent pas afficher le HTML)
    $mail->AltBody = 'bonjour, essai a réussi';

    // define variables and set to empty values
    $firstnameErr = $nameErr = $emailErr = $phoneErr = "";
    $firstname = $name = $email = $phone = $comment = "";

    if(isset($_POST['submit'])){
        // Vérifier si le champ "firstname" est vide
        if(empty($_POST["firstname"])){
            $firstnameErr = "Le prénom est requis";
        }
        else{
            // Récupérer la valeur du champ "firstname" et la nettoyer
            $firstname = testInput($_POST["firstname"]);
            // Vérifier si le prénom contient uniquement des lettres et des espaces
            if(!preg_match("/^[a-zA-Z-' ]*$/", $firstname)){
                $firstnameErr = "Seul les lettres et les espaces sont autorisés";
            }
        }

        // Vérifier si le champ "name" est vide
        if (empty($_POST["name"])) {
            $nameErr = "Le nom est requis";
        } else {
            // Récupérer la valeur du champ "name" et la nettoyer
            $name = testInput($_POST["name"]);
            // Vérifier si le nom contient uniquement des lettres et des espaces
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
              $nameErr = "Seul les lettres et les espaces sont autorisés";
            }
        }

        // Vérifier si le champ "email" est vide
        if (empty($_POST["email"])) {
            $emailErr = "L'email est requis";
        } else {
            // Récupérer la valeur du champ "email" et la nettoyer
            $email = testInput($_POST["email"]);
            // Vérifier si l'adresse e-mail est bien formatée
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Format de l'adresse email invalide";
            }
        }

        // Vérifier si le champ "phone" est vide
        if (empty($_POST["phone"])) {
            $phoneErr = "";
        } else {
            // Récupérer la valeur du champ "phone" et la nettoyer
            $phone = testInput($_POST["phone"]);
            // Vérifier si le numéro de téléphone contient uniquement des chiffres et des espaces
            if (!preg_match("/^[0-9 ]*$/", $phone)) {
              $phoneErr = "Seuls les chiffres et les espaces sont autorisés";
            }
        }

        // Vérifier si le champ "comment" est vide
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            // Récupérer la valeur du champ "comment" et la nettoyer
            $comment = testInput($_POST["comment"]);
        }
    }

    // Vérifie si les variables d'erreur sont vides, ce qui signifie qu'il n'y a pas d'erreur dans le formulaire
    if (empty($firstnameErr) && empty($nameErr) && empty($emailErr) && empty($phoneErr)) {
        // Définit l'adresse email à laquelle envoyer le message
        $to = "EMAIL";
        // Définit le sujet du message
        $subject = "Nouveau message de formulaire de contact";
        // Crée le contenu du message en incluant les variables du formulaire
        $body = "Prénom: $firstname\nNom: $name\nE-mail: $email\nTéléphone: $phone\nMessage: $message";
        // Définit l'adresse email de l'expéditeur
        $headers = "From: $email";
        
        // Envoie le message en utilisant la fonction mb_send_mail et vérifie si l'envoi est réussi
        if (mb_send_mail($to, $subject, $body, $headers)) {
            // Affiche un message de succès si le message a été envoyé avec succès
            $successMsg = "Votre message a été envoyé avec succès!";
        } else {
            // Affiche un message d'erreur si l'envoi du message a échoué
            $errorMsg = "Erreur lors de l'envoi du message. Veuillez réessayer plus tard.";
        }
    }


    // Fonction qui nettoie et valide les données entrées par l'utilisateur avant leur traitement
    function testInput($data) {
        // Supprime les espaces avant et après les données entrées par l'utilisateur
        $data = trim($data);
        // Supprime les caractères d'échappement "\" des données entrées par l'utilisateur
        $data = stripslashes($data);
        // Convertit les caractères spéciaux en entités HTML pour empêcher les attaques XSS
        $data = htmlspecialchars($data);
        // Renvoie les données nettoyées et validées
        return $data;
    }

?>