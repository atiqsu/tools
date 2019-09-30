<?php

require 'functions.php';

$languageArray = [];

$languageArray[] = ['PHP7', '9', 8];
$languageArray[] = ['SQL', '9', 10];
$languageArray[] = ['JavaScript', '8', 10];
$languageArray[] = ['HTML', '9', 12];
$languageArray[] = ['CSS', '8', 9];
$languageArray[] = ['Java', '5', 10];
$languageArray[] = ['Groovy', '3', 1];
$languageArray[] = ['Python', '4', 1];
$languageArray[] = ['Swift', '3', 1];


$contributors = [];

//$contributors[] = ['name' => 'Full name', 'title' => 'Web developer']


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
            background: #080808;
            color: white;
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

    <h1 class="center">Md. Atiqur Rahman</h1>
    <h3 class="center">Full stack developer</h3>
    <h5 class="center">Experience : <?= getYearsOfExperience() ?></h5>
    <h5 class="center">Skype : atiq.cu | atiqur.su@gmail.com | <a href="https://bd.linkedin.com/in/md-atiqur-rahman-46438692" target="_blank">Linkedin</a> | <a href="https://stackoverflow.com/users/1887301/atiqur?tab=profile" target="_blank">Stack</a> </h5>

    <br/>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Language</th>
            <th>Proficiency (10)</th>
            <th>Duration</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach($languageArray as $item) {

            echo '<tr>';

            echo '<td>'.$item[0].'</td>';
            echo '<td>'.$item[1].'</td>';
            echo '<td>'.$item[2].'</td>';

            echo '</tr>';
        }
        ?>


        </tbody>
    </table>


    <?php

    if(!empty($contributors)) {

        echo '<h2>Contributors : </h2>';
        foreach($contributors as $contributor) {

            echo '<h3> '.$contributor['name'].' <small>'.$contributor['title'].'</small></h3>';
        }
    }

    ?>

</div>


<script>

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

</body>
</html>


