<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicules</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
    <main class="container">
        <h1>Ajouter un vehicule</h1>
        <form action="" method="POST">
            <div>
                <label for="marque">Marque</label>
                <input type="text" name="marque" required>
            </div>
             <div>
                <label for="modele">Modele</label>
                <input type="text" name="modele" required>
            </div>
            <div>
                <label for="couleur">Couleur</label>
                <input type="text" name="couleur" required>
            </div>    
            <div>
                <label for="immatriculation">Immatriculation</label>
                <input type="text" name="immatriculation" required>
            </div>     
            <div>
                <button type="submit" name="envoyer">Ajouter vehicule</button>
            </div>               
        </form>
    </main>
</body>
</html>