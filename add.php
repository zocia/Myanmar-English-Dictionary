<?php
if(isset($_POST['word'])){
    require('config.php');
    require('rabbit/rabbit.php');
    require('rabbit/detect.php');
    $rabbit = new Rabbit;
    $detect = new CheckZgi;
    $word = mysqli_real_escape_string($conn, trim($_POST['word']));
    $state = mysqli_real_escape_string($conn, trim($_POST['state']));
    $def = mysqli_real_escape_string($conn, trim($_POST['def']));
   
    if($detect->isZawgyi($def)== true){
            $final_def =$def;
    }
    else{
            $final_def = $rabbit->uni2zg($def);
    }
    $query = "INSERT into dblist (Word, state, def) VALUES ('$word' , '$state', '$final_def') ";
    if($conn->query($query)){
            echo "success";
    }
    else{ echo "fail";} 
}
?>