    <?php 
    $titleTaxis = "Edition d'un conducteur";
    require PATH_PROJET . '/views/partials/header.php'; ?>
        <h1>Editer un conducteur</h1>
        <form action="?id=<?= $driver['id_driver']; ?>" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?= $driver['nom']; ?>" required>
            </div>
             <div>
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom" value="<?= $prenom['prenom']; ?>" required>
            </div>
                
            <div>
                <button type="submit" name="envoyer">Editer conducteur</button>
            </div>               
        </form>
        <?php require PATH_PROJET . '/views/partials/footer.php'; ?>
 