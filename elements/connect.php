<?php
$host = '192.168.3.211';
$dbname = 'a.fouquet';
$username = 'a.fouquet';
$password = 'P@ssword';

try {
    $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    echo "Connexion réussie !<br>";

    // Vérifier si des données ont été envoyées depuis le formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // Par défaut, définir le rang sur 'utilisateur'
        $rank = 'utilisateur';

        // Afficher les valeurs récupérées pour vérification
        echo "Vérification des valeurs récupérées depuis le formulaire :<br>";
        echo "Nom d'utilisateur : " . $username . "<br>";
        echo "Adresse e-mail : " . $email . "<br>";
        echo "Mot de passe : " . $password . "<br>";

        // Préparer la requête SQL d'insertion
        $sql = "INSERT INTO Utilisateurs (username, email, password, rank) VALUES (:username, :email, :password, :rank)";
        $stmt = $dbh->prepare($sql);

        // Liaison des valeurs avec les paramètres de la requête
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':rank', $rank);

        // Exécuter la requête
        $stmt->execute();

        echo "Utilisateur inscrit avec succès !<br>";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion ou d'insertion en base de données : " . $e->getMessage();
    die();
}
?>
