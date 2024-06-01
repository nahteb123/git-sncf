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
				<th>id_train</th>
				<th>nom_train</th>
				<th>capacité_train</th>
				<th>nombre_reservation</th>
                <th>id_station</th>
                <th>id_type_train</th>
                
               
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
        document.getElementById("resourcesTab8").addEventListener("load", test0());
        setInterval(function() {test0()}, 10000);
    </script>
</body>
</html>