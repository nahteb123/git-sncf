
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage départ</title>
    <link href="style_arrivee.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./monjs.js"></script>
</head>
<body>
    <main>
    <a class="ajout_traj" href="./ajout_traj.php">Ajout Trajet</a>
        <h1 class="departs_atm"> Départs </h1>
        <section class="atm_cli2">


         <!-- l'alternance couleur se fait en php : voir https://www.developpez.net/forums/d1132831/php/langage/alternance-couleur-tableau-dynamique/ -->
         <!-- vous pouvez utiliser pour les codes couleurs couleur_atm_1 et couleur_atm_2-->
         
        <table border 1  id="resourcesTab"> 
            <tr>
				<th>Id_trajet</th>
				<th>Date Depart</th>
				<th>Date Arrivee</th>
				<th>Heure Depart</th>
                <th>heure Arrivée</th>
                <th>nom train</th>
                <th>nom gare</th>
			</tr>

        </table>
        <h1 class="departs_atm"> Arrivés </h1>
        <table border 1  id="resourcesTab2"> 
            <tr>
                <th>Id_trajet</th>
				<th>Date Depart</th>
				<th>Date Arrivee</th>
				<th>Heure Depart</th>
                <th>heure Arrivée</th>
                <th>nom train</th>
                <th>nom gare</th>
			</tr>
 </section>
        </table>
    </main>
    <script>
        document.getElementById("resourcesTab").addEventListener("load", test());
        document.getElementById("resourcesTab2").addEventListener("load", test2());
        setInterval(function() {test()}, 1000);
        setInterval(function() {test2()}, 1000);
    </script>
</body>
</html>

    
