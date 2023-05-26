<script>
    function selectComp(choice){
        console.log(choice.value);
    }
</script>

<form id="compTri">

    <div class="radioComp">
        <input type="radio" name="choiceComp" id="all" value="all" checked>
        <label for="all">
            <p>Tout sélectionner</p>
        </label>
    </div>

<?php
include 'datas/table_comp.php';

foreach ($arrayComp as $valueComp => $compDescription) {
    echo '<div class="radioComp">
                <input type="radio" name="choiceComp" id="'.$valueComp.'" value="'.$valueComp.'" onClick="selectComp(this)">
                <label for="'.$valueComp.'">
                    <p>'.$compDescription.'</p>
                </label>
            </div>';
    //echo '<img src="icons/'.$valueComp.'.png" title="'.$valueComp.'"style="width:8%;height:8%;margin-right:1%;margin-top:10px">';
    //echo $compDescription;
}
?>
</form>