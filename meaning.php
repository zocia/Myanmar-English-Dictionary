<?php 
require('config.php');
require('rabbit/rabbit.php');
require('rabbit/detect.php');
$rabbit = new Rabbit;
$detect = new CheckZgi;

$id = mysqli_real_escape_string($conn, trim($_POST['id']));
$query = "SELECT * from dblist where id= $id";
$result = $conn->query($query)->fetch_assoc();
$word = $result['Word'];
$state = $result['state'];
$def = $result['def'];
$final_def = $rabbit->zg2uni($def); //change to unicode character

$query2 = "SELECT * from entries where Word = '$word' limit 3"; //search eng dictionary
$result2 = $conn->query($query2);

        echo 
        "<div>
        <i class='fab fa-accusoft'></i><span class='word text-capitalize'> ".$word."</span>
        <hr>
        <div><i class='fab fa-teamspeak'></i><span class='state text-capitalize'> ".$state."</span></div><br>
        </div>
        <div>
        <i class='fas fa-arrow-alt-circle-right'></i><span class='def'> ".$final_def."</span>
        </div><hr>";

if($result2->num_rows == 0){ //start eng search
    echo "";
}
else{
     while($row2 = $result2->fetch_assoc()){
        echo 
        "<div>
        <div><i class='fab fa-teamspeak'></i><span class='state text-capitalize'> ".$row2['state']."</span></div><br>
        </div>
        <div>
        <i class='fas fa-arrow-alt-circle-right'></i><span> ".$row2['def']."</span>
        </div><hr>";
    }
} //end eng search
   


?>