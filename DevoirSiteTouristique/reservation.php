
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8" />
  	<link rel="stylesheet" href="style1.css" />
  	<title>Mon super site</title>
  </head>
<body>
	<!--l'entete-->
	<div style="width: 900px; margin: auto; background-color: rgb(255,255,255);border-radius: 10px; padding: 8px; box-shadow: 10px 10px 20px blue;">
		<?php include("entete.php"); ?>
	


    	<div id="Banniere_image">
        	<div id="Banniere_description">
            	La ville au origine multiple...
            	<a href="index.html" class="bouton_rouge">Voir l'article</a>
        	</div>
    	</div>
				<div>
					<?php
					
					?>	
				</div>

				<div>
					<form action="process.php" method="post">
						<div class="container">
							
							<div class="row">
								<div class="col-sm-3">
									<h1>Fiche de reservation d'hôtel</h1>
									<hr class="mb-3">
									<label for="hotel">Selectionnez un hôtel:</label>
									<select name="hotel" id="hotel" required>
										<option value="aucune" selected="aucune"></option>
										<option value="iba">IBA HOTEL</option>
										<option value="mermoz">Mermoz HOTEL</option>
										<option value="wifama">WIFAMA HOTEL</option>
										<option value="bricombo">Hotel Bricombo</option>
									</select><br>

									<label for="nom"><b>nom</b></label>
									<input id="nom" type="text" name="nom" required><br>

									<label for="prenom"><b>prenom</b></label>
									<input id="prenom"  type="text" name="prenom" required><br>

									<label for="email"><b>email</b></label>
									<input id="email"  type="email" name="email" required><br>

									<label for="numero"><b>numero</b></label>
									<input id="numero"  type="numero" name="numero" required><br>

									<label for="nombre"><b>nombre de personne:</b></label>
									<input id="nombre"  type="number" name="nombre" required><br>

									<label>Date d'arrivée probable:</label>
									<input type="date" name="date" required><br>

									<label>Nombre de jour prevue:</label>
									<input type="number" name="jours"><br>

									<label for="adultes">Nombre d'adultes:</label>
									<input type="number" name="adultes"><br>

									<label for="enfants">nombre d'enfants:</label>
									<input type="number" name="enfants"><br>

									<hr class="mb-3"><br>
									<input  type="submit" id="register" name="create" value="S'inscrire">
								</div>
							</div>
						</div>
					</form>
				</div>
		<img src="">
            <?php include("piedDepage.php"); ?> 
	</div>

</body>