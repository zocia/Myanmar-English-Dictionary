<?php
require('../../config.php');
$id = mysqli_real_escape_string($conn, trim($_POST['id']));
$query = "UPDATE dblist set
approve = '1'
where id='$id' ";
if($conn->query($query)){
    echo "Success";
}
else{echo "Fail";}
?>