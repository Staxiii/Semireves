<?php include_once 'elements/header.php' ?>
<?php

$host = 'etu.bts-malraux72.net'; // host = etu.bts-malraux72.net ou 192.168.3.211
$dbname = 'a.fouquet';
$username = 'a.fouquet';
$password = 'P@ssword';

    $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $query = "SELECT * FROM semireves.destinations";
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    
    $destinations = $stmt->fetchAll(PDO::FETCH_ASSOC);?>

    <div class="container container_seminaires">
    <div class="row">
    <?php
    foreach ($destinations as $destination) {
        ?>
        <div class="col-12 col-md-6 cartes mt-5">
            <div class="card">
                <img class="image" height="350" width="580" src="<?php echo $destination['url_image']; ?>">
                <p class="libelle_pays"><?php echo $destination['libelle_pays'];?></p>
                <div class="card-body text-center">
                    <h5 class="card-title text-center libelle_ville"><?php echo $destination['libelle_ville']; ?></h5>
                    <p class="card-text description_pays"><?php echo $destination['description_pays']; ?></p>
                </div>
                <div class="bouton_destination">
                    <a href="#" class="bouton-plein">Découvrir</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
</div>
</body>