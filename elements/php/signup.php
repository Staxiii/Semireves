<?php $host = '192.168.3.211';  // host = etu.bts-malraux72.net ou 192.168.3.211
$dbname = 'a.fouquet';
$username = 'a.fouquet';
$password = 'P@ssword';

    $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

$sql = "INSERT INTO semireves.utilisateurs (username, email, pwd, rank) VALUES ('$username', '$email', '$password', 'Utilisateur')";
$stmt = $dbh->prepare($sql);

        $stmt->execute();
    }
?>