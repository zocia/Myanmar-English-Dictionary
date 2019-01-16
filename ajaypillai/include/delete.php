<?php
require('../../config.php');

$id = mysqli_real_escape_string($conn, trim($_POST['id']));
$query = "DELETE from dblist where id='$id' ";
if($conn->query($query)){
    echo "Success";
}
else{echo "Fail";}
?>