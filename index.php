<?php
    include("database.php");
    include("header.php");
    if($pages=="dept"){
    include("department.php");

    }elseif($pages=='doc'){
        include("doctor.php");
    }elseif($pages=='con'){
        include("contact.php");
    }
    
    else{
    include("home.php");

    }
    include("footer.php");

?>