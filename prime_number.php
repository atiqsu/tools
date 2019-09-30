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

    <title>Prime Number </title>

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

<?php require 'partials/_menu.php' ?>

<div class="container bg">

    <?php require 'partials/_actionMessage.php' ?>

    <div class="row">
        <div class="col-sm-12">

            <h1 class="hdr">Checking & Finding prime numbers</h1>

            <form class="frm">
                <div class="form-group">
                    <label for="inp1">Input integer :</label>
                    <div class="form-group">
                        <input class="form-control" type="number" value="100" id="inp1" />
                    </div>

                </div>

                <button class="btn btn-default" id="is_prime">Is Prime</button>
                <button class="btn btn-default" id="find_prime">Find All Prime Number</button>
                <button class="btn btn-default" id="btn_clear">Clear Output</button>

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


    $(document).on('click', '#is_prime', function (ev) {
        ev.preventDefault();

        console.log('haha...');

        var num1 = $('#inp1').val();

        if(isPrime(num1)) {

            addOutput(num1 + ' is Prime!')
        } else {
            addOutput(num1 + ' is not prime.')
        }
    });


    $(document).on('click', '#find_prime', function (ev) {
        ev.preventDefault();

        var found = 0;

        var num1 = $('#inp1').val();

        for(var k = 23; k < num1; k++) {
            if(isPrime(k)) {

                addOutput(k + ' is Prime!');
                found++;
            }
        }

        addOutput('Done up to - ' + k + '( Found ' + found + ')');

    });


    function isPrime (num) {
        if (num <= 1) {
            return true
        } else if (num <= 3) {
            return true
        } else if (num%2 === 0 || num%3 === 0) {
            return false
        }

        var i = 5;

        while (i*i <= num) {
            if (num%i === 0 || num%(i+2) === 0) {
                return false
            }
            i += 6
        }
        return true
    }



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