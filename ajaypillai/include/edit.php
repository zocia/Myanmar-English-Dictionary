<?php
require('../../config.php');
$id = mysqli_real_escape_string($conn, trim($_POST['id']));
$query = "SELECT * from dblist where id='$id'";
$result= $conn->query($query)->fetch_assoc();
$id = $result['id'];
$state = $result['state'];
$word = $result['Word'];
$def = $result['def'];

$data['id'] = $id;
$data['state'] = $state;
$data['word'] = $word;
$data['def'] = $def;
echo json_encode($data);
?>