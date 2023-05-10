<?php

if (isset($_REQUEST['project']) && ($_REQUEST['project'])){
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
            </div>
            <a href = "'.$anElement->link.'" style="display: block;margin-right: 0px;margin-left: auto;">
                <button>Accéder '.$typeElement.'</button>
            </a>

        
            <p>'.$descriptions[$id].'</p>
            <br/>
            <img src="img/'.$anElement->img.'" class="img_project">
            </center>
            ';
    }
}

echo '</main>'

?>