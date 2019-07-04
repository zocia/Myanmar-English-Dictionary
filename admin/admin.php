<?php
session_start();
if(!isset($_SESSION['ajaypillai'])){
    header('location: index.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  header("location:index.php");
}

require('rabbit/rabbit.php');
require('rabbit/detect.php');
require('../config.php');
$rabbit = new Rabbit;
$detect = new CheckZgi;
$query = "SELECT * from dblist where approve=0 order by id desc";
$result=$conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">
    <script src="js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Padauk|Source+Sans+Pro|Ubuntu" rel="stylesheet">
</head>
<body>
    <script>
    $(document).ready(function(){
        // shorten text.
    
    var showChar = 50;  // How many characters 
    var ellipsestext = " . . . ";

    $('.def-short').each(function() {
        var content = $(this).html();
        if(content.length > showChar) {
        var c = content.substr(0, showChar);
        var html = c +  ellipsestext;
 
        $(this).html(html);
        }
 
    });
    })
    </script>
    <div class="container invoice">
        <div class="container-fluid line">
            <div class="col-sm-6">
                <h4 class='heading'>Eng 
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                Myan Dictionary</h4>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <span class="heading">Need to approve</span>
                <a href="?logout='1'" class='btn btn-flat btn-danger pull-right'>Logout</a>
            </div>
        </div><br><br>
        <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th>Word</th>
                <th>State</th>
                <th>Defination</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Approve</th>
                
            </tr>
            </thead>
            <tbody>
                <?php while($row=$result->fetch_assoc()){
                $id = $row['id'];
                $heading = $row ['Word'];  
                $grammar = $row ['state'];
                $meaning = $row ['def'];
                $final = $rabbit->zg2uni($meaning);    
                ?>
            <tr class='table-hover'>
                <td><?php echo $heading ?></td>
                <td><?php echo $grammar ?></td>
                <td class='def-width def-short'><?php echo $final ?></td>
                <td><span class="dict edit" value='<?php echo $id ?>' ref='<?php echo $id ?>'>Edit</span></td>
                <td><span class="dict-ox delete" value='<?php echo $id ?>'>Delete</span></td>
                <td><span class="dict-green approve" value='<?php echo $id ?>'>Approve</span></td>
            </tr>
                <?php } ?>
            </tbody>
        </table>

        </div>
    </div><!-- invoice -->

<!-- alert -->
<div class="modal fade" id="alert" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Success</h4>
        </div>
        <div class="modal-body">
          <p class='changeText'>Successfully Update.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- Modal -->
<div id="EditText" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Word</h4>
      </div>
      <div class="modal-body">
        <p class='text-danger'>Add new word, after admin approved, it will show.</p>
        <form method='POST' id='UpdateWord'>
            <input type="hidden" name="id" class='id-ok' value=''>
        <div class="input-group">
            <span class="input-group-addon"><i class="fab fa-adn"></i></span>
            <input type="text" class="form-control word-ok" name="word" placeholder="English Word">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon"><i class="fab fa-staylinked"></i></span>
            <input type="text" class="form-control state-ok" name="state" placeholder="Part of Speech ( State ), eg - Noun">
        </div><br>
        <div class="form-group">
            <span for="comment">Myanmar Meaning</span><hr>
            <textarea  name='def' class="form-control def-ok" rows="5" id="comment"></textarea>
        </div>
        
      </div>
      <div class="modal-footer">
      <input type="submit" class='btn btn-success pull-left' value="Update and Approve">
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
<!-- end alert -->
</body>
<script>
$(document).ready(function(){
    $('.edit').click(function(){
        $('#EditText').modal('show');
        var id = $(this).attr('value');
            $.ajax({
                url:"include/edit.php",
                method:"POST",
                data:{id:id},
                dataType:"JSON",
                success: function(data){
                    $('.id-ok').val(data.id);
                    $('.word-ok').val(data.word);
                    $('.state-ok').val(data.state);
                    $('.def-ok').val(data.def);
                }
            });
    })
    
    $('#UpdateWord').on('submit',function(event){
        event.preventDefault();
        var id= $('.id-ok').val();
        var ele = $(".edit[ref="+id+"]").parent().parent();
        var word = $('.word-ok').val();
        var state = $('.state-ok').val();
        var def = $('.def-ok').val();
        var data = new FormData(this);
        if(word == ''){alert('Please Write Some Word')}    
        else if(state == ''){alert('Please Write State')}  
        else if(def == ''){alert('Please Write Meaning')}   
        else{
           $.ajax({
               url:"include/update.php",
               method:"POST",
               data:data,
               contentType:false,
               processData:false,
               success: function(data){
                $('.changeText').html('Successfully Updated and Approved')
                $('#EditText').modal('hide');
                $('#alert').modal('show');
                //window.location.href = "index.php";
                ele.fadeOut().remove();
                
                } 
           });
        }   
    })

    $('.delete').click(function(){
        var id = $(this).attr('value');
        var ele = $(this).parent().parent();
            if (confirm("Are You sure?") == true) {
                $.ajax({
                    url:"include/delete.php",
                    method: "POST",
                    data: {id:id},
                    success: function(data){
                        $('.changeText').html('Successfully Deleted')
                        $('#alert').modal('show');
                        ele.fadeOut().remove();
                    }
                })
            } else {
                return false;
            }
    })

    $('.approve').click(function(){
        var id = $(this).attr('value');
        var ele = $(this).parent().parent();
            if (confirm("Are You sure?") == true) {
                $.ajax({
                    url:"include/approve.php",
                    method: "POST",
                    data: {id:id},
                    success: function(data){
                        $('.changeText').html('Successfully Approved')
                        $('#alert').modal('show');
                        ele.fadeOut().remove();
                    }
                })
            } else {
                return false;
            }
    })
})

</script>
</html>