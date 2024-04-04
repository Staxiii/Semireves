<?php $host = '192.168.3.211';
$dbname = 'a.fouquet';
$username = 'a.fouquet';
$password = 'P@ssword';

    $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rank = 'utilisateur';

$sql = "INSERT INTO semireves.utilisateurs (username, email, pwd, rank) VALUES ('$username', '$email', '$password', '$rank')";
$stmt = $dbh->prepare($sql);

        $stmt->execute();
    }
?>