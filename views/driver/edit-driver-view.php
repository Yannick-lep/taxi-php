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
        <h1 style="color:gold;">Editer un conducteur</h1>
        <form action="" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="nom" class="form-label" style="color:yellow; font-weight:bold;">Nom :</label>
                <input type="text" name="nom" value="<?= $driver['nom']; ?>" required>
            </div>
             <div class="mb-3">
                <label for="prenom" class="form-label" style="color:yellow; font-weight:bold;">Prenom :</label>
                <input type="text" name="prenom" value="<?= $prenom['prenom']; ?>" required>
            </div>
                
            <div>
                <button type="submit" name="envoyer" class="btn btn-primary"
                    style="color:black; font-weight:bold;">Editer conducteur</button>
            </div>               
        </form>
    </main>
</body>
</html>