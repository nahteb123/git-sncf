<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iténéraire Train</title>
    <link href="style.css" rel="stylesheet" />
    <script src="./monjs.js"></script>
</head>
<body>
    <header>
        <img class="img_sncf" src="sncf.jpg" />
        <a class="lien_retour" href="acceuil_interne.php">Retour à la page d'Accueil</a> 
    </header>
    <main>
        <h1 class="titre_itineraire"> Voici tout les trains reliant la gare X à la gare Y  et inversement </h1>
        <section class="test_sec">
            <h2 > Départs: de la gare X à la gare Y </h2>
            <div class="container">
                <table border 1 width =100% id="resourcesTab9"> 
                <tr>
                    <th>id_trajet</th>
                    <th>Gare Départ</th>
                    <th>Gare Arrivee</th>
            
                
                </tr>
            </div>
        </section>
    </main>
    <footer>
    </footer>
    <script>
        var variableJS1 = "<?php echo $_POST["depart"]; ?>";
        var variableJS2 = "<?php echo $_POST["arrivee"]; ?>";
        localStorage.setItem('variableJS1',variableJS1 );
        localStorage.setItem('variableJS2',variableJS2 );
        document.getElementById("resourcesTab9").addEventListener("load", test3());
        
        setInterval(function() {test3()}, 10000);
    </script>

</body>
</html>