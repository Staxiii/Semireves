<?php 
$host = 'etu.bts-malraux72.net';  // host = etu.bts-malraux72.net ou 192.168.3.211
$dbname = 'a.fouquet';
$username = 'a.fouquet';
$password = 'P@ssword';



$dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM semireves.utilisateurs WHERE username = :username AND pwd = :password";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['rank'] = $user['rank'];
        header('Location: index.php');
        exit; } 
    else {
        echo "Nom d'utilisateur ou mot de passe incorrect";
    }
}
?>