<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
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
    <div class="container">
        <div class="col-md-4 col-md-offset-4 login-div">
            <h1 class="text-center">LOGIN</h1>
                <form class='form-div' id='login-form'>
                    <div class="error"></div><hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label><div class="error-email pull-right"></div>
                    <input type="email" name='email' class="form-control email" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label><div class="error-pass pull-right"></div>
                    <input type="password" name='password' class="form-control password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <hr>
                <button type="submit" class="btn btn-block btn-info btn-flat">Login</button>
                </form    
        </div>
    </div>
    
</body>
<script>
$(document).ready(function(){
    $('#login-form').on('submit',function(e){
        event.preventDefault();
        $('.error-email').html('');
        $('.error-pass').html('');
        $('.error').html('');
        var data = new FormData(this);
        var email = $('.email').val();
        var password = $('.password').val();
        if(email==''){
            $('.error-email').html("<span class='dict-ox'>Please Input Email</span>")
        }
        else if(password==''){
            $('.error-pass').html("<span class='dict-ox'>Please Input Password</span>")
        }
        else{
            $.ajax({
                url: "include/login.php",
                method: "POST",
                data: data,
                contentType:false,
                processData:false,
                success: function(data){
                    if(data=='success'){
                        window.location.href = "admin.php";
                    }
                    else{
                        $('.error').html("<span class='dict-ox'>"+data+"</span>");
                    }
                }

            })
        }
    })
})

</script>
</html>