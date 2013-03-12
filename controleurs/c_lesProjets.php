<?php
include("vues/v_menu.php");

if($_REQUEST['action']=='seul'){
    $lesProjets=$pdo-> getLesProjets();
    include("vues/v_listeProjets.php");
}else{
    $lesProjetsDetails=$pdo-> getDetailsProjets();
    include("vues/v_detailsProjets.php");
}

?>
