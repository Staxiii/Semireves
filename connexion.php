<?php require_once "elements/php/signon.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="elements/css/inscription.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
    <title>Connexion</title>
</head>
<body background="elements/images/image-log.png">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card mt-4 container-inscription">
							<div class="card-body">
								
						<div class="text-center mt-4">
							<h1>Connexion</h1>
						</div>
								<div class="m-sm-3">
									<form method="POST">
										<div class="mb-3">
											<label class="form-label">Nom d'utilisateur</label>
											<input class="form-control form-control-lg input-inscription <?php if(isset($erreurName)) { echo ' erreur-form-input';}?>" type="text" name="username" placeholder="Entrer votre nom">
											<div class="erreur-form-inscription">
												<span><?php if(isset($erreurName)) { echo $erreurName; } ?></span>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Mot de passe</label>
											<input class="form-control form-control-lg input-inscription <?php if(isset($erreurMdp)) { echo ' erreur-form-input';}?>" type="password" name="password" placeholder="Entrer votre mot de passe">
											<div class="erreur-form-inscription">
												<span><?php if(isset($erreurMdp)) { echo $erreurMdp; } ?></span>
											</div>
										</div>
										<div class="text-center boutons">
                                        	<button class="btn btn-lg main-button me-3 bouton-vide">Se connecter</button>
                                        	<a class="btn btn-lg main-button bouton-plein" href="accueil.php">Retour</a>
										</div>
									</form>
									<div class="text-center mb-3">
										<p class="no-compte">Vous n'avez pas encore de compte ? <a href="inscription.php">S'inscrire</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>