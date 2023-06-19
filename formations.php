<h2 id="formations" class="section_index">Mes formations</h2>

<section id="mes-form">
    <?php
        // chemin d'accès à votre fichier JSON
        $fileFormation = 'datas/formations.json'; 
        // mettre le contenu du fichier dans une variable
        $dataFormation = file_get_contents($fileFormation); 
        // décoder le flux JSON
        $formations = json_decode($dataFormation); 

        foreach ($formations as $aFormation) {

            $backcol = "";
            $formation_state = "";
            if ($aFormation->success){
                $backcol = "green";
                $formation_state = "Réussie";
            } else {
                $backcol = "red";
                $formation_state = "Echouée";
            }

            echo    '<div class="card" onClick="document.location.href=\'details.php?formation='.$aFormation->id.'\'" style="background-color:'.$backcol.'">
                        <img src="logo/'.$aFormation->logo.'" alt="Image de la formation">
                        <div class="container" style="padding-bottom: 0px;">
                            <h3><b>'.$aFormation->name.'</b></h3>'; 
                        echo '<p>'.$formation_state.'</p>';
                        echo '</div>
                    </div>';
        }
    ?>

</section>