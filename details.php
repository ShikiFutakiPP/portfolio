<?php

if (isset($_REQUEST['project']) && ($_REQUEST['project'])){
    $id = $_REQUEST['project'];
} else {
    $id = 'mairie';
}
 include 'header.php';

// chemin d'accès à votre fichier JSON
$file = 'datas/projects.json'; 
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file); 
// décoder le flux JSON
$projects = array_reverse(json_decode($data)); 

echo '<main>';

foreach ($projects as $aProject) {
    if ($aProject->id == $id){
        echo '<div class="box">
                <img src="logo/'.$aProject->logo.'" style="width:15%;height:15%;margin-left:2%;margin-right:5%;border-radius: 20%;">
                <p>
                    <h2>'.$aProject->name.'</h2>
                </p>
            </div>
            <a href = "'.$aProject->link.'\'" style="display: block;margin-right: 0px;margin-left: auto;">
                <button>Accéder au projet</button>
            </a>

        
            <p>'.$aProject->description.'</p>
            <br/>
            <img src="img/'.$aProject->img.'" class="img_project">
            </center>
            ';
    }
}

echo '</main>'

?>