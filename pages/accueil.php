<h2 class="text-center text-warning">PHP CURL</h2>
<div>
    <p>Afficher des photos depuis jsonplaceholer : https://jsonplaceholder.typicode.com/photos</p>
    <?php
    //Url des photos
    $url = "https://jsonplaceholder.typicode.com/photos";
    // Initialisez une session CURL.
    $ch = curl_init();

    // Récupérer le contenu de la page et le retourne sous forme de chaine de charactère de la valeur
    //retournée par curl_exec()
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Saisir l'URL et la transmettre à la variable.
    //Url recuperer assigner a curl_init()
    curl_setopt($ch, CURLOPT_URL, $url);
    //Désactiver la vérification du certificat puisque jsonplaceholder utilise HTTPS
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //Exécutez la requête + Récupère une chaîne encodée JSON et la convertit en une variable PHP.
    $result = json_decode(curl_exec($ch), true);
    //Afficher le résultat
    //on boucle sur le tableau $result et on ffiche chaque valeur a l'aide de $row[''] qui accède au tableau de données
    foreach ($result as $row){
        ?>
        <img src="<?= $row['url'] ?>" alt="<?= $row['url'] ?>" title="<?= $row['url'] ?>">
    <?php
    }
    ?>
</div>
