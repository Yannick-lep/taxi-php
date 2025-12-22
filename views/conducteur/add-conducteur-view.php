    <?php
    $titleTaxis = "Ajout d'un conducteur";
    require PATH_PROJET . '/views/partials/header.php'; ?>
        <h1>Ajouter un conducteur</h1>
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
        <?php require PATH_PROJET . '/views/partials/footer.php'; ?>
 