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
        <h1> Voici la liste des derniers  incidents rencensés :</h1>
        <section>
            <div class="container">      
        <table border 1 width =100% id="resourcesTab6"> 
            <tr>
				<th>ID incident</th>
				<th>Libellé incident</th>
				<th>Description</th>
				<th>Date_incident</th>
                <th>ID_type_incident</th>
			</tr>

        </table>
            </div>
        </section>
    </main>
    <footer>
    </footer>
    <script>
          document.getElementById("resourcesTab6").addEventListener("load", test4());
        setInterval(function() {test4()}, 10000);
    </script>
</body>
</html>