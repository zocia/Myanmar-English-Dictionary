<?php 
require('../../config.php');
$id = mysqli_real_escape_string($conn,trim($_POST['id']) );
$word = mysqli_real_escape_string($conn,trim($_POST['word']) );
$state = mysqli_real_escape_string($conn,trim($_POST['state']) );
$def = mysqli_real_escape_string($conn,trim($_POST['def']) );

$query = "UPDATE dblist SET
Word = '$word',
state = '$state',
def = '$def',
approve = '1'
where id='$id'";
if($conn->query($query)){
    echo "success";
}
else{echo "fail";}

?>