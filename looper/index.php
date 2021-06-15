<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='author' content='Md. Atiqur Rahman, atiq.cse.cu0506.su@gmail.com'>
    <meta name="developer" content="Md. Atiqur Rahman" />
    <meta name="developer_email" content="atiq.cse.cu0506.su@gmail.com" />

    <title>Calculate string length</title>

    <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel='stylesheet' type='text/css' href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" />
    <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">


    <style>
        .bg {
            background: #080808;
            color: white;
        }

        .hdr {
            border-bottom: solid 1px white;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .frm {
            border: solid 1px white;
            padding: 10px;
            margin-bottom: 10px;
        }

        .out-hdr {
            border-bottom: solid 1px white;
            padding-bottom: 5px;
            margin: 10px 0 5px 0;
            font-weight: bold;
        }

        #__output {
            min-height: 30px;
            margin-bottom: 15px;
            border: white dotted 1px;
        }

        #__output > div > span:first-child {
            width: 30px;
            display: inline-block;
            text-align: right;
            margin-right: 5px;
        }

    </style>

</head>
<body>

<?php require './../partials/_menu.php' ?>

<div class="container bg">

    <?php require './../partials/_actionMessage.php' ?>

    <div class="row">
        <div class="col-sm-12">

            <h1 class="hdr">Loop through....</h1>

            <form class="frm">
                <div class="form-group">
                    <label for="no_var">Input string :</label>
                    <textarea name="str_calc" id="str_calc" cols="30" rows="10" placeholder="Given string...." class="form-control"></textarea>
                </div>

                <button class="btn btn-default" id="submit_1">Hmmm</button>

            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <div class="out-hdr">Output</div>

            <div id="__output"></div>


        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-default" id="btn_clear"> Clear </button>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            &nbsp;
        </div>
    </div>


</div>


<script>

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script>

    $(document).on('click', '#submit_1', function (ev) {
        ev.preventDefault();


        var url = "./../ajax/rma.php";
        var values = {
            'route': url,
            'btn': '_rma',
            'dt': $('#str_calc').val()
        };

        $.ajax({
            url: values.route,
            method: 'POST',
            data: values,
            dataType: 'html',
            success: function (data) {

                clearOutput();

                addOutput(data);
            },
            error: function (data) {

            },
            complete: function () {

            }
        });

    });

    $(document).on('click', '#btn_clear', function (ev) {
        ev.preventDefault();

        clearOutput();

    });

    function addOutput($str) {

        $('#__output').append('_> ' + $str + '<br/>');
    }

    function clearOutput() {

        $('#__output').html('');
    }

</script>

</body>
</html>