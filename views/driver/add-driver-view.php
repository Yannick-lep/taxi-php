<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onducteur</title>
     <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"> 
      
</head>

<body>
    <main class="container">
        <h1 style="color:gold;">Ajouter un conducteur</h1>
        <form action="" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" required>
            </div>
             <div>
                <label for="prenom">prenom</label>
                <input type="text" name="prenom" required>
            </div>     
            <div>
                <button type="submit" name="envoyer">Ajouter conducteur</button>
            </div>               
        </form>
    </main>
</body>
</html>