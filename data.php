<?php
require('rabbit/rabbit.php');
require('rabbit/detect.php');
require('config.php');
$rabbit = new Rabbit;
$detect = new CheckZgi;

$search = mysqli_real_escape_string($conn,trim($_POST['txt'])); // filter sql injection
if($search=='') {echo "<a class='list-group-item list-group-item-danger result'>Searh Something</a>";} //if string is empty
else{// if string have some text
    if (preg_match('/[A-Za-z \s]+/', $search) == true){// if search string is english text
        $query = "SELECT * FROM dblist WHERE approve=1 AND Word LIKE '$search%' limit 6";
        $result = $conn->query($query);
        if ($result->num_rows == 0){// if no result
            $heading= "No Match Ornagi Dict";
            echo "<a class='list-group-item result'>".$heading."</a>";
        }//end no result
        else{// if there is sesult
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $heading = $row ['Word'];  
                $grammar = $row ['state'];
                $meaning = $row ['def'];
                $final_def = $rabbit->zg2uni($meaning);
                echo "<a class='list-group-item list-group-item-warning result result-full' value='".$id."'>".$heading."
                <h6 class='hidden-lg'><i class='fab fa-teamspeak'></i> ".$grammar."</h6>
                <h6 class='hidden-lg def'><i class='fas fa-arrow-alt-circle-right'></i> ".$final_def."</h6>
                </a>";
            } 
        }// end there is result

        $engQuery = "SELECT * FROM entries WHERE approve=1 AND Word LIKE '$search%' limit 6";
        $engResult = $conn->query($engQuery);
        if ($engResult->num_rows == 0){// if no result
            $no_match= "No Match Oxford Dict";
            echo "<a class='list-group-item list-group-item-danger'>".$no_match."</a>";
        }//end no result
        else{// if there is sesult
            while($eng_row = $engResult->fetch_assoc()){
                $eng_id = $eng_row['id'];
                $eng_heading = $eng_row ['Word'];  
                $eng_grammar = $eng_row ['state'];
                $eng_meaning = $eng_row ['def'];
                echo "<a class='list-group-item list-group-item-info result eng-result-full' value='".$eng_id."'> ".$eng_heading."
                <h6 class='hidden-lg'><i class='fab fa-teamspeak'></i> ".$eng_grammar."</h6>
                <h6 class='hidden-lg'><i class='fas fa-arrow-alt-circle-right'></i> ".$eng_meaning."</h6>
                </a>";
            } 
        }// end there is result

    }// end english text search

    else{ //if search string is myanmar text
        if($detect->isZawgyi($search)== true){ //if searh string is zawgyi 
            $mm_search = $search;
        }
        else{ // if search string is unicode
            $mm_search = $rabbit->uni2zg($search);
        }
        $query = "SELECT * FROM dblist WHERE approve=1 AND def LIKE '$mm_search%' Limit 12";
        $result = $conn->query($query);
        if ($result->num_rows == 0){// if no result
            $heading= "No Match Found";
            echo "<a class='list-group-item list-group-item-danger'>".$heading."</a>";
        }
        else{ //if there is result
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $heading = $row ['Word'];  
                $grammar = $row ['state'];
                $meaning = $row ['def'];
                $final = $rabbit->zg2uni($meaning); // change result to unicode character
                echo "<a class='list-group-item list-group-item-warning result-mm result-full' value='".$id."'>".$final."
                <h6 class='hidden-lg'><i class='fab fa-teamspeak'></i> ".$grammar."</h6>
                <h6 class='hidden-lg'><i class='fas fa-arrow-alt-circle-right'></i> ".$heading."</h6>
                </a>";
            } 
        }
    }// end myanmar text search
}//end string have some text
?>