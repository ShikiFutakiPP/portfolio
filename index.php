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
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitating ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </section>

        <h2>Mes projets</h2>

        <section id="mes-projets">

            <?php

                // chemin d'accès à votre fichier JSON
                $file = 'projects.json'; 
                // mettre le contenu du fichier dans une variable
                $data = file_get_contents($file); 
                // décoder le flux JSON
                $projects = json_decode($data); 

                var_dump($projects);

                foreach ($projects as $aProject) {
                    var_dump($aProject);
                    var_dump($aProject['name']);

                    echo    '<div class="card">
                                <img src="'.$aProject['img'].'" alt="Projet" style="width:100%">
                                <div class="container">
                                    <h3><b>'.$aProject['name'].'</b></h3> 
                                    <p>'.$aProject['description'].'</p>
                                </div>
                            </div>';
                }






            ?>

        </section>
        <section id="formation">
            <h2>Formation</h2>
            <p>
                Nulla dignissim consectetur velit sed arcu non sodales. Sed nec arcu tortor.
                Aenean volutpat dolor eu pretium convallis. Donec hendrerit arcu ac odio.
            </p>
        </section>
    </main>
</body








