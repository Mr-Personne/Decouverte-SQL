<?php 

try {
    //dbname (database name)
    $bdd = new PDO('mysql:host=localhost;dbname=contacts;charset=utf8', 'root', '1234');

    $reponse = $bdd->query('SELECT * FROM contact');
    //ira chercher la premiere ligne de toute la table 'contact'
    $donnee = $reponse->fetch();
    // print_r($donnee);
    for($i = 0; $i < 10; $i++){
        echo '<p>Votre Prénom est : <strong>'.$donnee['first_name'].'</strong> et votre Nom : <strong>'.$donnee['last_name'].
        '</strong>; Votre email est : <strong>'.$donnee['email'].'</strong> et votre Country Code est : <strong>'.$donnee['country_code'].'</strong></p>';
        // echo '<p>Votre email est : '.$donnee['email'].' et votre Country Code est : '.$donnee['country_code'].'</p>';
        // echo '<br>';
        //a chaque fetch il va a la prochaine ligne de la table
        $donnee = $reponse->fetch();
    }

    //termine la requete
    $reponse->closeCursor();

} catch (Exception $e) {
    //verif si erreur et met un message contenu dans $e qui dévoilera moins que le message erreur de base
    die('Erreur : ' . $e->getMessage());

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello SQL!</h1>
</body>
</html>