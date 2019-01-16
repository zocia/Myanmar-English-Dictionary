<?php 
require('config.php');
require('rabbit/rabbit.php');
require('rabbit/detect.php');
$rabbit = new Rabbit;
$detect = new CheckZgi;

$id = mysqli_real_escape_string($conn, trim($_POST['engid']));
$query = "SELECT * from entries where id= $id";
$result = $conn->query($query)->fetch_assoc();
$word = $result['Word'];
$state = $result['state'];
$def = $result['def'];


$query2 = "SELECT * from dblist where Word = '$word' limit 1"; //search Myanmar dictionary
$result2 = $conn->query($query2);
$mmResult = $result2->fetch_assoc();
$mm_state = $mmResult['state'];
$mm_def = $mmResult['def'];
$final_def = $rabbit->zg2uni($mm_def);

        echo 
        "<div>
        <i class='fab fa-accusoft'></i><span class='word text-capitalize'> ".$word."</span>
        <hr>";

       if($result2->num_rows >0){// for myanmarword
                echo 
                "<div>
                <div><i class='fab fa-teamspeak'></i><span class='state text-capitalize'> ".$mm_state."</span></div><br>
                </div>
                <div>
                <i class='fas fa-arrow-alt-circle-right'></i><span class='def'> ".$final_def."</span>
                </div><hr>";
         
       }

        echo
        "<div><i class='fab fa-teamspeak'></i><span class='state text-capitalize'> ".$state."</span></div><br>
        </div>
        <div>
        <i class='fas fa-arrow-alt-circle-right'></i><span> ".$def."</span>
        </div><hr>";


   


?>