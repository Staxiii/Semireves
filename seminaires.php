<?php include_once 'elements/php/header.php' ?>
<?php

$host = 'etu.bts-malraux72.net'; // host = etu.bts-malraux72.net ou 192.168.3.211
$dbname = 'a.fouquet';
$username = 'a.fouquet';
$password = 'P@ssword';

    $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);
    }else{
        $currentPage = 1;
    };

    // Nombre de destinations affichées par page
    $parPage = 4;
    $nbPages = ($currentPage * $parPage) - $parPage;

    // Récupère le nombre de destinations en BDD
    $totalArticlesQuery = $dbh->query('SELECT COUNT(*) FROM "semireves"."destinations"');
    $totalArticles = $totalArticlesQuery->fetchColumn();
    $sql = 'SELECT * FROM "semireves"."destinations" ORDER BY "id_destination" DESC LIMIT :parpage OFFSET :nbpages;';
    $query = $dbh->prepare($sql);
    $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
    $query->bindValue(':nbpages', $nbPages, PDO::PARAM_INT);
    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_ASSOC);

    // Calcule le nombre de pages à afficher dans la pagination
    $pages = ceil($totalArticles / $parPage);
?>

    <div class="container container-seminaires">
        <div class="row">
            <h2 class="titre-seminaires">Nos destinations</h2>
            <p class="texte-seminaires">Découvrez notre sélection de séminaires uniques et inspirants ! Que vous recherchiez une expérience immersive pour renforcer les liens d'équipe, développer de nouvelles compétences professionnelles ou simplement vous ressourcer dans un cadre exceptionnel, nous avons ce qu'il vous faut.</p>
        </div>
        <div class="row">
            <?php
            foreach ($articles as $destination) {
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
                            <?php if(isset($_SESSION['username'])) { echo '<a href="#" class="bouton-reserver">Réserver</a>';}?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <!-- Pagination -->
    <div class="row container-pagination">
        <nav class="mx-auto" style="width: fit-content;">
            <ul class="pagination">
                <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                    <a href="seminaires.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                </li>
                <?php for($page = 1; $page <= $pages; $page++): ?>
                    <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                        <a href="seminaires.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                    </li>
                <?php endfor ?>
                <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                    <a href="seminaires.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                </li>
            </ul>
        </nav>
    </div>
</body>