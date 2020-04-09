<?php


?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='author' content='Md. Atiqur Rahman, atiq.cse.cu0506.su@gmail.com'>
    <meta name="developer" content="Md. Atiqur Rahman" />
    <meta name="developer_email" content="atiq.cse.cu0506.su@gmail.com" />

    <title>Welcome page</title>

    <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel='stylesheet' type='text/css' href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" />
    <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">


    <style>  
        
        
        .bg {
            padding: 80px;
            background: #080808;
            color: white;
            text-align: center;
            
        }

        .center {
            text-align: center;
    
        }
    </style>

</head>
<body>

<?php require 'partials/_menu.php' ?>

<div class="container bg">

    <div class="row">
        <div class="col-sm-12"> <div style="height: 50px"> &nbsp; </div> </div>
    </div>

    <div class="row">
        <div class="col-sm-12"> 
             
            <form class="form-inline" action="/action_page.php">

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                </div>  
 
                   <div class="form-group">    

                        <div class="col-sm-offset-50 col-sm-50">

                           <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i>Signup </button>

                        </div>
                   </div> 

            </form>

        </div>
        
    </div>
</div>


<script>

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

</body>
</html>


