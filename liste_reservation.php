<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport_incidents</title>
    <link href="style.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js_cli.js"></script>
</head>
<body>
    <header>
        <img class="img_sncf" src="sncf.jpg" />
        <a class="lien_retour" href="acceuil_interne.php">  Retour à la page d'Accueil</a> 
    </header>
    <main>
        <h1> Voici la liste des derniers  réservations pour le train N° <?php echo $_POST["liste_reservation"];?></h1>
        <section>
            <div class="container">      
        <table border 1 width =100% id="resourcesTab8"> 
            <tr>
				<th>Id_train</th>
				<th>Id_client</th>
                <th>Id_client</th>
			</tr>

        </table>
            </div>
        </section>
    </main>
    <footer>
    </footer>
    <script>
         var variableJSreserv = "<?php echo $_POST["liste_reservation"]; ?>";
         console.log(variableJSreserv);
        localStorage.setItem('variableJSreserv',variableJSreserv );
          document.getElementById("resourcesTab8").addEventListener("load", test6());
        setInterval(function() {test6()}, 10000);
    </script>
</body>
</html>