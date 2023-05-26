<?php include 'header.php' ?>
    <main>

    <h2 id="my-presentation" class="section_index">Présentation</h2>
        <section id="presentation">
            <div class="box">
                <img src="img/photo.png" style="width:15vw;height:auto;margin-left:5%">
                <p style="margin-left:5%;margin-right:10%;text-align: start;">
                    <b>Nom :</b> Kevin Fort</br>
                    <b>Âge :</b> 22 ans</br>
                    <b>Classe :</b> BTS SIO 2</br>
                    <b>Option :</b> SLAM (Solutions Logicielles et Applications Métiers)</br>
                </p>
                <a href="ressources/CV.pdf" style="display: block;margin-top: auto;margin-bottom: auto;">
                    <button>Voir mon CV</button>
                </a>
            </div>
        </section>

    <h2 id="my-experience" class="section_index">Parcours professionnel</h2>
        <section id="experience">
            <?php
                // chemin d'accès à votre fichier JSON
                $fileXP = 'datas/experiences.json'; 
                // mettre le contenu du fichier dans une variable
                $dataXP = file_get_contents($fileXP); 
                // décoder le flux JSON
                $experiences = json_decode($dataXP); 

                foreach ($experiences as $anExperience) {

                    /*echo    '<div class="card" onClick="document.location.href=\''.$aProject->link.'\'">*/
                    echo    '<div class="card">
                                <img src="logo/'.$anExperience->logo.'" alt="Image du projet">
                                <div class="container">
                                    <h3>'.$anExperience->name.'</h3>'; 
                                    echo '<p>'.$anExperience->description.'</p>';
                            echo '</div>
                            </div>';
                }
            ?>
        </section>

    <h2 id="my-projects" class="section_index">Mes projets</h2>

    <?php 
        //Barre tri compétences
        include 'tri_bar.php';
    ?>

<br/><br/><br/>
        <section id="mes-projets">

            <?php
                // chemin d'accès à votre fichier JSON
                $file = 'datas/projects.json'; 
                // mettre le contenu du fichier dans une variable
                $data = file_get_contents($file); 
                // décoder le flux JSON
                $projects = array_reverse(json_decode($data)); 

                foreach ($projects as $aProject) {

                    /*echo    '<div class="card" onClick="document.location.href=\''.$aProject->link.'\'">*/
                    echo    '<div id="proj_'.$aProject->id.'" class="card project'; 
                    foreach ($aProject->comps as $aComp) {
                        $valueComp = $aComp->comp;
                        echo ' '.$valueComp;
                    }
                    echo '" onClick="document.location.href=\'details.php?project='.$aProject->id.'\'">
                                <img src="logo/'.$aProject->logo.'" alt="Image du projet">
                                <div class="container">
                                    <h3>'.$aProject->name.'</h3>'; 
                                    //echo '<p>'.$aProject->description.'</p>';
                            echo '</div>
                            </div>';
                }
            ?>

        </section>

    <h2 id="formations" class="section_index">Mes formations</h2>

        <section id="mes-form">
            <?php
                // chemin d'accès à votre fichier JSON
                $fileFormation = 'datas/formations.json'; 
                // mettre le contenu du fichier dans une variable
                $dataFormation = file_get_contents($fileFormation); 
                // décoder le flux JSON
                $formations = array_reverse(json_decode($dataFormation)); 

                foreach ($formations as $aFormation) {

                    echo    '<div class="card" onClick="document.location.href=\'details.php?formation='.$aFormation->id.'\'">
                                <img src="logo/'.$aFormation->logo.'" alt="Image de la formation">
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