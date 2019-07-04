<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJ Dictionary</title>
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
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=padauk' />
</head>
<body>

    <div class="container invoice">
        <div class="container-fluid line">
            <div class="col-sm-6">
                <h4 class='heading'>Eng 
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                Myan Dictionary</h4>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3 box">
                <div class="input-group pull-right">
                    <div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <input type="text" class="form-control" name='Search' id="search" placeholder="Search Here">
                </div>
            </div>
        </div><br>
        
        <div class="row">
            <div class="col-sm-4">
                <div class="list-group meaning">
                <a class='list-group-item list-group-item-warning result result-full hidden-xs' value='17937'>Love<span class='dict pull-right'>Ornagai</span></a>              </a>
                <a class='list-group-item list-group-item-warning result result-full hidden-xs' value='14205'>Hate<span class='dict pull-right'>Ornagai</span></a>
                <a class='list-group-item list-group-item-warning result result-full hidden-xs' value='12740'>Game<span class='dict pull-right'>Ornagai</span></a>
                <a class='list-group-item list-group-item-warning result result-full hidden-xs' value='4517'>Break<span class='dict pull-right'>Ornagai</span></a>
                <a class='list-group-item list-group-item-warning result result-full hidden-xs' value='19796'>New<span class='dict pull-right'>Ornagai</span></a>
                <a class='list-group-item list-group-item-warning result result-full hidden-xs' value='13064'>Girlfriend<span class='dict pull-right'>Ornagai</span></a>
                <a class='list-group-item list-group-item-info result eng-result-full hidden-xs' value='97064'>Girl<span class='dict-ox pull-right'>Oxford</span></a>
                <a class='list-group-item list-group-item-info result eng-result-full hidden-xs' value='157122'>Real<span class='dict-ox pull-right'>Oxford</span></a>
                <a class='list-group-item list-group-item-info result eng-result-full hidden-xs' value='124735'>Marriage<span class='dict-ox pull-right'>Oxford</span></a>
                <a class='list-group-item list-group-item-info result eng-result-full hidden-xs' value='57425'>Children<span class='dict-ox pull-right'>Oxford</span></a>
                <a class='list-group-item list-group-item-info result eng-result-full hidden-xs' value='120064'>Life<span class='dict-ox pull-right'>Oxford</span></a>
                <a class='list-group-item list-group-item-info result eng-result-full hidden-xs' value='82719'>End<span class='dict-ox pull-right'>Oxford</span></a>

                </div>
            </div>
            <div class="col-sm-8">
            <div class="addnew">
            <button class="btn btn-flat btn-sm btn-info" data-toggle="modal" data-target="#addnew" >
            <i class="fas fa-edit"></i> Add New Word
            </button>
            <span class="pull-right text-info">Developed By AJ</span>
            </div><hr>
                <div class="full-meaning hidden-xs">
                <div>
                    <i class='fab fa-accusoft'></i><span class='word text-capitalize'> Love</span>
                    <hr>
                    <div><i class='fab fa-teamspeak'></i><span class='state text-capitalize'> N</span></div><br>
                    </div>
                    <div>
                    <i class='fas fa-arrow-alt-circle-right'></i><span class='def'> ချစ်သည်။ ခုံမင်သည်။ နှစ်သက်သည်။ ဝါသနာပါသည်။ ဝမ်းသာသည်။ သဘောကျသည်။</span>
                    </div><hr>
                    <div>
                    <div><i class='fab fa-teamspeak'></i><span class='state text-capitalize'> N</span></div><br>
                    </div>
                    <div>
                    <i class='fas fa-arrow-alt-circle-right'></i><span>  A feeling of strong attachment induced by that which delights or commands admiration; preeminent kindness or devotion to another; affection; tenderness; as, the love of brothers and sisters.</span>
                    </div><hr>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div id="addnew" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Word</h4>
      </div>
      <div class="modal-body">
        <p class='text-danger'>Add new word, after admin approved, it will show.</p>
        <form method='POST' id='NewWord'>
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
      <input type="submit" class='btn btn-success pull-left' value="Submit">
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>


</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="alert" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Success</h4>
        </div>
        <div class="modal-body">
          <p>Successfully Added. It Can Be Seen After Admin Approved</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<script>
$(document).ready(function(){
    
    $('#search').keyup(function(){
        var txt = $('#search').val();
        $.ajax({
            url: "data.php",
            type: "POST",
            data: {txt : txt},
            success: function(data){
                $('.meaning').html(data);
            }
        })
        
    })

    $(document).on('click','.result-full',function(){ 
        var id = Number($(this).attr('value'));
        $.ajax({
            url: "meaning.php",
            method: "POST",
            data: {id: id},
            success: function(data){
                $('.full-meaning').html(data);
            }
        })
    }); 

    $(document).on('click','.eng-result-full',function(){ 
        var engid = Number($(this).attr('value'));
        $.ajax({
            url: "eng_meaning.php",
            method: "POST",
            data: {engid: engid},
            success: function(data){
                $('.full-meaning').html(data);
            }
        })
    });

    $('#NewWord').on('submit',function(event){
        event.preventDefault();
        var word = $('.word-ok').val();
        var state = $('.state-ok').val();
        var def = $('.def-ok').val();
        var data = new FormData(this);
        if(word == ''){alert('Please Write Some Word')}    
        else if(state == ''){alert('Please Write State')}  
        else if(def == ''){alert('Please Write Meaning')}   
        else{
           $.ajax({
               url:"add.php",
               method:"POST",
               data:data,
               contentType:false,
               processData:false,
               success: function(data){
                   $('#addnew').modal('hide');
                   //window.location.href = "index.php";
                   $('#alert').modal('show');
                   $('#NewWord')[0].reset();
               }
           });
        }   
    })
})

</script>
</html>