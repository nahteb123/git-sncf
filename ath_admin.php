
    
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
        <h1 class="departs_atm"> Trajet de la gare <?php echo $_POST["depart"]; ?> à la gare <?php echo $_POST["arrivee"]; ?> </h1>
        <section class="atm_cli2">


         <!-- l'alternance couleur se fait en php : voir https://www.developpez.net/forums/d1132831/php/langage/alternance-couleur-tableau-dynamique/ -->
         <!-- vous pouvez utiliser pour les codes couleurs couleur_atm_1 et couleur_atm_2-->
         
        <table border 1  id="resourcesTab"> 
            <tr>
				<th>Id Trajet</th>
				<th>Date Depart</th>
				<th>Date Arrivee</th>
				<th>Heure Depart</th>
                <th>Heure Arrivée</th>
                <th>Nom train</th>
                <th>Quai</th>
                <th>Quai</th>
			</tr>

        </table>
 </section>
        </table>
    </main>
    <script>
         var variableJS1 = "<?php echo $_POST["depart"]; ?>";
        var variableJS2 = "<?php echo $_POST["arrivee"]; ?>";
        localStorage.setItem('variableJS1',variableJS1 );
        localStorage.setItem('variableJS2',variableJS2 );
        document.getElementById("resourcesTab").addEventListener("load", DataDepart());
        setInterval(function() {DataDepart()}, 10000);
    </script>
</body>
</html>

    
