<?php require_once 'elements/signup.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
<script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
    <title>Index</title>
</head>
<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card mt-4">
							<div class="card-body">
								
						<div class="text-center mt-4">
							<h1 class="h2">S'inscrire</h1>
						</div>
								<div class="m-sm-3">
									<form method="POST">
										<div class="mb-3">
											<label class="form-label">Nom d'utilisateur</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Entrer votre nom">
										</div>
										<div class="mb-3">
											<label class="form-label">Adresse mail</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Entrer votre adresse mail">
										</div>
										<div class="mb-3">
											<label class="form-label">Mot de passe</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Entrer votre mot de passe">
										</div>
										<div class="text-center mt-4">
                                        <button class="btn btn-lg main-button me-3" href="index.php"><span class="">S'inscrire</span></button>
                                        <a class="btn btn-lg main-button bouton-vide" href="index.php">Retour</a>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Vous avez déjà un compte ? <a href="connexion.php">Se connecter</a>
						</div>
					</div>
				</div>
			</div>
		</div>