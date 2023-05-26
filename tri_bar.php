<script>
    var currentChecked = "all";

    function selectComp(choice){
        //Sélectionner/Désélectionner en recliquant
        if (currentChecked == 'all') {
            currentChecked = choice.value;
        } else {
            if (currentChecked == choice.value){
                document.getElementById('all').checked = true; 
                currentChecked = 'all';               
            } else {
                currentChecked = choice.value;
            }
        }

        //N'afficher que les projets qui ont la compétence dans leur classe
        console.log(currentChecked);

        var allProjects = document.getElementsByClassName("project");
        var actualProject = "";

        for(var i = 0; i < allProjects.length; i++) {
            actualProject = allProjects[i];
            if (allProjects[i].classList.contains(currentChecked)){
                console.log(actualProject.id);
                document.getElementById(actualProject.id).style.display = "block";
            } else {
                if (currentChecked == 'all') {
                    document.getElementById(actualProject.id).style.display = "block";
                } else {
                    document.getElementById(actualProject.id).style.display = "none";
                }
            }
        }
        
    }
</script>

<form id="compTri">

    <!--<div class="radioComp">
        <input type="radio" name="choiceComp" id="all" value="all" checked>
        <label for="all">
            <p>Tout sélectionner</p>
        </label>
    </div>-->

<?php
include 'datas/table_comp.php';

foreach ($arrayComp as $valueComp => $compDescription) {
    echo '<div class="radioComp">
                <input type="radio" name="choiceComp" id="'.$valueComp.'" value="'.$valueComp.'" onClick="selectComp(this)">
                <label for="'.$valueComp.'">
                    <img src="icons/'.$valueComp.'.png" title="'.$valueComp.'">
                    <p>'.$compDescription.'</p>
                </label>
            </div>';
}
?>
<div class="radioComp" style="display:none">
    <input type="radio" name="choiceComp" id="all" value="all" checked="">
    <label for="all">
        <p>Tout</p>
    </label>
</div>

</form>