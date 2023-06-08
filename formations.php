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