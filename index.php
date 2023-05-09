<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css.css" />
    <title>Portfolio</title>
</head>
<body>
    <header>
        <h1>Mon Portfolio</h1>
        <nav>
            <ul>
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#mes-projets">Mes Projets</a></li>
                <li><a href="#formation">Formation</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="presentation">
            <h2>Présentation</h2>
            <div class="box">
                <img src="img/photo.png" style="width:150px;height:auto;margin-left:5%">
                <p style="margin-left:5%;margin-right:10%">
                    Nom : Kevin Fort</br>
                    Classe : BTS SIO 2</br>
                    Option : SLAM (Solutions Logicielles et Applications Métiers)</br>
                </p>
            </div>
        </section>

        <h2>Mes projets</h2>

        <section id="mes-projets">

            <?php
                // chemin d'accès à votre fichier JSON
                $file = 'datas/projects.json'; 
                // mettre le contenu du fichier dans une variable
                $data = file_get_contents($file); 
                // décoder le flux JSON
                $projects = array_reverse(json_decode($data)); 

                foreach ($projects as $aProject) {

                    echo    '<div class="card" onClick="document.location.href=\''.$aProject->link.'\'">
                                <img src="logo2/'.$aProject->logo.'" alt="Image du projet">
                                <div class="container">
                                    <h3>'.$aProject->name.'</h3>'; 
                                    //echo '<p>'.$aProject->description.'</p>';
                            echo '</div>
                            </div>';
                }
            ?>

        </section>

        <h2>Mes formations</h2>

        <section id="mes-form">
            <?php
                // chemin d'accès à votre fichier JSON
                $fileFormation = 'datas/formations.json'; 
                // mettre le contenu du fichier dans une variable
                $dataFormation = file_get_contents($fileFormation); 
                // décoder le flux JSON
                $formations = array_reverse(json_decode($dataFormation)); 

                foreach ($formations as $aFormation) {

                    echo    '<div class="card" onClick="document.location.href=\''.$aFormation->link.'\'">
                                <img src="img/'.$aFormation->img.'" alt="Image de la formation">
                                <div class="container">
                                    <h3><b>'.$aFormation->name.'</b></h3>'; 
                                    //echo '<p>'.$aFormation->description.'</p>';
                                echo '</div>
                            </div>';
                }
            ?>

        </section>
    </main>
</body








