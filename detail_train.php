<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail_train</title>
    <link href="style.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./monjs.js"></script>
</head>
<body>
    <header>
        <img class="img_sncf" src="sncf.jpg" />
        <a class="lien_retour" href="acceuil_interne.php">  Retour à la page d'Accueil</a> 
    </header>
    <main>
    <h1 class="titre_itineraire">  Info train N° <?php echo $_POST["detail_train"];?> :</h1>
    <section class="atm_cli">
     <table border 1 width =100% id="resourcesTab8"> 
            <tr>
				<th>Id Train</th>
				<th>Nom Train</th>
				<th>Capacité Train</th>
				<th>Nombre Reservation</th>
                <th>Id station</th>
                <th>Type Train</th>
                
               
			</tr>

        </table>
        
    </section>
    </main>
    <footer>
    </footer>
    <script>
        var variableJS = "<?php echo $_POST["detail_train"]; ?>";
         console.log(variableJS);
        localStorage.setItem('variableJS',variableJS );
        document.getElementById("resourcesTab8").addEventListener("load", detail_train());
        setInterval(function() {detail_train()}, 1000);
    </script>
</body>
</html>