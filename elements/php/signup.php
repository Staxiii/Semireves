<?php         

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['name'])){
            $erreurName = "Veuillez saisir un Nom d'utilisateur";
        }
        if (empty($_POST['email'])){
            $erreurEmail = "Veuillez saisir une Adresse mail";
        }
        if (empty($_POST['password'])){
            $erreurMdp = "Veuillez saisir un Mot de passe";
        }
        else if (!empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
            {
$host = 'etu.bts-malraux72.net';  // host = etu.bts-malraux72.net ou 192.168.3.211
$dbname = 'a.fouquet';
$username = 'a.fouquet';
$password = 'P@ssword';

    $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO semireves.utilisateurs (username, email, pwd, rank) VALUES ('$username', '$email', '$password', 'Utilisateur')";
        $stmt = $dbh->prepare($sql);

        $stmt->execute();
        header('LOCATION: accueil.php');
        }
    }
?>