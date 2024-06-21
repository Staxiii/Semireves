<?php include_once 'elements/php/header.php';

$host = 'etu.bts-malraux72.net';  // host = etu.bts-malraux72.net ou 192.168.3.211
$dbname = 'a.fouquet';
$username = 'a.fouquet';
$password = 'P@ssword';

$dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);?>



<div class="container-main-admin">
    <div class="container-main">
    
    <?php   

    // Partie Administration Destinations
if (isset($_GET['domaine']) && $_GET['domaine'] == 'destination'){
    echo "<div>
    <p class='titre-admin'>Pannel d'administration</p>
    <p class='texte-admin'>Que souhaitez-vous faire ?</p>
    <a href='administration.php?action=ajoutDestination' id='ajoutDestination' class='bouton-add'>Ajouter une destination</a> 
    <a href='administration.php?action=modifDestination' id='modifDestination' class='bouton-update'>Modifier une destination</a> <a href='administration.php?action=supprimerDestination' id='   
    <a href='administration.php?action=supprimerDestination' id='supprimerDestination' class='bouton-delete'>Supprimer une destination</a>
    </div>";
}
    // Ajout Destination
if (isset($_GET['action']) && $_GET['action'] == 'ajoutDestination'){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $libelle_pays = $_POST['libelle_pays'];
    $code_pays = $_POST['code_pays'];
    $libelle_ville = $_POST['libelle_ville'];
    $description_pays = $_POST['description_pays'];
    $sql = "INSERT INTO semireves.destinations (libelle_pays, code_pays, libelle_ville, description_pays) VALUES (:libelle_pays, :code_pays, :libelle_ville, :description_pays)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':libelle_pays', $libelle_pays);
    $stmt->bindParam(':code_pays', $code_pays);
    $stmt->bindParam(':libelle_ville', $libelle_ville);
    $stmt->bindParam(':description_pays', $description_pays);
    $stmt->execute();
    }
echo "<h2 class='titre-ajout'>Ajouter une destination</h2>
    <form action='administration.php?action=ajout' class='form-ajout' method='POST'>
        <label class='form-label' for='libelle_pays'>Libellé du pays:</label><br>
        <input class='form-control' type='text' id='libelle_pays' name='libelle_pays'><br>
        <label class='form-label' for='code_pays'>Code du pays:</label><br>
        <input class='form-control' type='text' id='code_pays' name='code_pays'><br>
        <label class='form-label' for='libelle_ville'>Libellé de la ville:</label><br>
        <input class='form-control' type='text' id='libelle_ville' name='libelle_ville'><br>
        <label class='form-label' for='description_pays'>Description du pays:</label><br>
        <textarea class='form-control' id='description_pays' name='description_pays' rows='4' cols='50'></textarea><br>
        <div class='boutons-ajout'>
        <input class='bouton-ajout' type='submit' value='Envoyer'>
        <a href='administration.php?domaine=destination' class='bouton-ajout'>Retour</a>
        </div>
    </form>";
}

        // Modification Destination

        if (isset($_GET['action']) && $_GET['action'] == 'modifDestination') {
            $query = "SELECT * FROM semireves.destinations";
            $stmt = $dbh->prepare($query); 
            $stmt->execute();
            $destinations = $stmt->fetchAll(PDO::FETCH_ASSOC);?>
            <p>Quelle destination souhaitez-vous modifier ?</p>
            <?php echo "<select class='form-select'>";
            foreach ($destinations as $destination) {
                echo "<option value=" . $destination["destination"] .">" . $destination['libelle_ville'] . "</option>";
                echo $destination["libelle_pays"];
            }
            echo "</select>";
        }
        

        // Suppression Destination

        if (isset($_GET['action']) && $_GET['action'] == 'supprimerDestination'){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            }
        }


    // Partie Administration Utilisateurs
if (isset($_GET['action']) && $_GET['action'] == 'utilisateur'){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $libelle_pays = $_POST['libelle_pays'];
    $code_pays = $_POST['code_pays'];
    $libelle_ville = $_POST['libelle_ville'];
    $description_pays = $_POST['description_pays'];
    $sql = "INSERT INTO semireves.destinations (libelle_pays, code_pays, libelle_ville, description_pays) VALUES (:libelle_pays, :code_pays, :libelle_ville, :description_pays)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':libelle_pays', $libelle_pays);
    $stmt->bindParam(':code_pays', $code_pays);
    $stmt->bindParam(':libelle_ville', $libelle_ville);
    $stmt->bindParam(':description_pays', $description_pays);
    $stmt->execute();
    }
    
    echo "<h2 class='titre-ajout'>Modifier un utilisateur</h2>
    <form action='administration.php?modifUser' class='form-ajout' method='POST'>
        <label class='form-label' for='libelle_pays'>Libellé du pays:</label><br>
        <input class='form-control' type='text' id='libelle_pays' name='libelle_pays'><br>
        <label class='form-label' for='code_pays'>Code du pays:</label><br>
        <input class='form-control' type='text' id='code_pays' name='code_pays'><br>
        <label class='form-label' for='libelle_ville'>Libellé de la ville:</label><br>
        <input class='form-control' type='text' id='libelle_ville' name='libelle_ville'><br>
        <label class='form-label' for='description_pays'>Description du pays:</label><br>
        <textarea class='form-control' id='description_pays' name='description_pays' rows='4' cols='50'></textarea><br>
        <div class='boutons-ajout'>
        <input class='bouton-ajout' type='submit' value='Envoyer'>
        <a href='administration.php' class='bouton-ajout'>Retour</a>
        </div>
    </form>";

}

    // Partie Administration Réservations
if (isset($_GET['action']) && $_GET['action'] == 'reservation'){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $libelle_pays = $_POST['libelle_pays'];
    $code_pays = $_POST['code_pays'];
    $libelle_ville = $_POST['libelle_ville'];
    $description_pays = $_POST['description_pays'];
    $sql = "INSERT INTO semireves.destinations (libelle_pays, code_pays, libelle_ville, description_pays) VALUES (:libelle_pays, :code_pays, :libelle_ville, :description_pays)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':libelle_pays', $libelle_pays);
    $stmt->bindParam(':code_pays', $code_pays);
    $stmt->bindParam(':libelle_ville', $libelle_ville);
    $stmt->bindParam(':description_pays', $description_pays);
    $stmt->execute();
    }

    echo "<h2 class='titre-ajout'>Modifier une réservation</h2>
    <form action='administration.php?modifReserv' class='form-ajout' method='POST'>
        <label class='form-label' for='libelle_pays'>Libellé du pays:</label><br>
        <input class='form-control' type='text' id='libelle_pays' name='libelle_pays'><br>
        <label class='form-label' for='code_pays'>Code du pays:</label><br>
        <input class='form-control' type='text' id='code_pays' name='code_pays'><br>
        <label class='form-label' for='libelle_ville'>Libellé de la ville:</label><br>
        <input class='form-control' type='text' id='libelle_ville' name='libelle_ville'><br>
        <label class='form-label' for='description_pays'>Description du pays:</label><br>
        <textarea class='form-control' id='description_pays' name='description_pays' rows='4' cols='50'></textarea><br>
        <div class='boutons-ajout'>
        <input class='bouton-ajout' type='submit' value='Envoyer'>
        <a href='administration.php' class='bouton-ajout'>Retour</a>
        </div>
    </form>";

}
    // Partie Administration MAIN
if (empty($_GET)) {
    echo "<div>
            <p class='titre-admin'>Pannel d'administration</p>
            <p class='texte-admin'>Sur quel domaine souhaitez-vous administrer ?</p>
            <a href='administration.php?domaine=destination' id='ajoutDest' class='bouton-add'>Destinations</a> <a href='administration.php?domaine=destination' id='modifUser' class='bouton-add'>Utilisateurs</a> <a href='administration.php?domaine=reservation' id='modifReserv' class='bouton-add'>Réservations</a>
        </div>";
}
?>