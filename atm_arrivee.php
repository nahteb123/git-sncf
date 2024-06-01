
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage arrivée</title>
    <link href="style_arrivee.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js_cli.js"></script>
</head>
<body>
    <main>
        <h1 class="departs_atm"> Arrivés </h1>
        <section class="atm_cli">
       
<table border 1 width =100% id="resourcesTab4"> 
            <tr>
				<th>id_atm</th>
				<th>destination</th>
				<th>quai</th>
				<th>heure départ</th>
                <th>nom train</th>
               
			</tr>

        </table>
         <!-- l'alternance couleur se fait en php : voir https://www.developpez.net/forums/d1132831/php/langage/alternance-couleur-tableau-dynamique/ -->
         <!-- vous pouvez utiliser pour les codes couleurs couleur_atm_1 et couleur_atm_2-->
        </section> 
         
    
    </main>
    <script>
          document.getElementById("resourcesTab4").addEventListener("load", test2());
        setInterval(function() {test2()}, 1000);
    </script>
</body>
</html>
