


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage</title>
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
        <h1 class="titre_itineraire">  Info garage : <?php echo $_POST["garage"];?></h1>
        <section>
            <div class="container_garage">
            <table border 1  id="resourcesTab7"> 
            <tr>
				<th>Id Station</th>
				<th>Nom Station</th>
                <th>Id Train </th>
			</tr>
            </div>
        </section>
    </main>
    <footer>
    </footer>
    <script>
         var variableJS = "<?php echo $_POST["garage"]; ?>";
         console.log(variableJS);
        localStorage.setItem('variableJS',variableJS );
          document.getElementById("resourcesTab7").addEventListener("load", garage());
        setInterval(function() {garage()}, 1000);
    </script>
</body>
</html>