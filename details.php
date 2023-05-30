<?php

if (isset($_REQUEST['project']) && ($_REQUEST['project'])){
    //Inclure la table des compétences
    include 'datas/table_comp.php';

    //ID = ID du projet
    $id = $_REQUEST['project'];
    $typeElement = "au projet";

    // chemin d'accès au fichier JSON
    $file = 'datas/projects.json'; 

} else {
    if (isset($_REQUEST['formation']) && ($_REQUEST['formation'])){
        //ID = ID de la formation
        $id = $_REQUEST['formation'];
        $typeElement = "à la formation";

        // chemin d'accès au fichier JSON
        $file = 'datas/formations.json'; 

    } else {
        header('Location: index.php');
        die();
    }
}
 include 'header.php';
 include 'datas/descriptions.php';

// mettre le contenu du fichier dans une variable
$data = file_get_contents($file); 
// décoder le flux JSON
$elements = array_reverse(json_decode($data)); 

echo '<main>';

foreach ($elements as $anElement) {
    if ($anElement->id == $id){
        echo '<div class="box">
                <img src="logo/'.$anElement->logo.'" style="width:15%;height:15%;margin-left:2%;margin-right:5%;border-radius: 20%;">
                <p>
                    <h2>'.$anElement->name.'</h2>
                </p>
            </div>';

        echo '<div class="box">';
        if ($typeElement == "au projet"){
            foreach ($anElement->comps as $aComp) {
                $valueComp = $aComp->comp;
                $nameComp = $arrayComp[$valueComp];

                echo '<img src="icons/'.$valueComp.'.png" title="'.$nameComp.'"
                style="width:8%;height:8%;margin-right:1%;margin-top:10px">';
            }
        }
        echo '<div style="display:block;margin-right: 0px;margin-left: auto;">';
        if (!empty($anElement->link)){
            echo '<a href = "'.$anElement->link.'">
                    <button style="margin-top:auto;margin-bottom:auto">Accéder '.$typeElement.'</button>
                </a>';
        }
        
        if ($typeElement == "au projet"){
            $docValue = $anElement->doc;
            if (!empty($docValue)){
                echo '<a href = "'.$docValue.'">
                <button style="margin-top:auto;margin-bottom:auto">Accéder à la documentation</button>
                </a>';
            }
        }    
        echo '</div>
        </div>        
            <p>'.$descriptions[$id].'</p>
            <br/>
            <img src="img/'.$anElement->img.'" class="img_project">
            </center>
            ';
    }
}

echo '</main>'

?>