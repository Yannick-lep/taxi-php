<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicules</title>
      <link rel="stylesheet" href="https://bootswatch.com/5/solar/bootstrap.min.css">
</head>

<body>
    <main class="container">
        <h1 style="color:gold;">Editer un véhicule</h1>
        <form action="" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="marque" class="form-label" style="color:yellow; font-weight:bold;">Marque :</label>
                <input type="text" name="marque" value="<?= $vehicule['marque']; ?>" required>
            </div>
             <div class="mb-3">
                <label for="modele" class="form-label" style="color:yellow; font-weight:bold;">Modele :</label>
                <input type="text" name="modele" value="<?= $vehicule['modele']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="couleur" class="form-label" style="color:yellow; font-weight:bold;">Couleur :</label>
                <input type="text" name="couleur" value="<?= $vehicule['couleur']; ?>" required>
            </div>    
            <div class="mb-3">
                <label for="immatriculation" class="form-label" style="color:yellow; font-weight:bold;">Immatriculation :</label>
                <input type="text" name="immatriculation" value="<?= $vehicule['immatriculation']; ?>" required>
            </div>     
            <div>
                <button type="submit" name="envoyer" class="btn btn-primary"
                    style="color:black; font-weight:bold;">Editer vehicule</button>
            </div>               
        </form>
    </main>
</body>
</html>
