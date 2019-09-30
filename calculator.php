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

    <title>Simplest Calculator</title>

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
            <h1 class="hdr">Simple JS Calculator</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-7">


            <form class="frm">

                <div class="form-group row">
                    <label for="inp1" class="col-sm-4">Operand 1 :</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="number" value="" id="inp1" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inp1" class="col-sm-4">Operand 2 :</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="number" value="" id="inp2" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="slt1" class="col-sm-4">Operator:</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="slt1" name="slt1">
                            <option value="rem"> % </option>
                            <option value="add"> + </option>
                            <option value="sub"> - </option>
                            <option value="div"> / </option>
                            <option value="mul"> * </option>
                            <option value="pow"> ^ </option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4"> &nbsp; </label>
                    <div class="col-sm-8">
                        <button class="btn btn-default" id="math_gen">Find</button>
                        <button class="btn btn-default" id="gen2">LSD</button>
                        <button class="btn btn-default" id="gen3">NSD</button>
                    </div>
                </div>


            </form>

        </div>

        <div class="col-sm-5">
            <div class="out-hdr">Output</div>

            <div id="__output"></div>

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

    //let reference = {0: '0', 1: 'A', 2: 'B', 3: 'C', 4: 'D', 5: 'E', 6: 'F', 7: 'G', 8: 'H', 9: 'I', 10: 'J', 11: 'K', 12: 'L', 13: 'M', 14: 'N', 15: 'O', 16: 'P', 17: 'Q', 18: 'R', 19: 'S', 20: 'T', 21: 'U', 22: 'V', 23: 'W', 24: 'X', 25: 'Y', 26: 'Z'};
    //let reference = {0: '0', 1: 'A', 2: 'B', 3: 'C', 4: 'D', 5: 'E', 6: 'F', 7: 'G', 8: 'H', 9: 'I', 10: 'J', 11: 'K', 12: 'L', 13: 'M', 14: 'N', 15: 'O', 16: 'P', 17: 'Q', 18: 'R', 19: 'S', 20: 'T', 21: 'U', 22: 'V', 23: 'W', 24: 'X', 25: 'Y', 26: 'Z'};

    let reference = [0,"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

    document.querySelector('#gen2').onclick = function (ev) {
        ev.preventDefault();

        let res, tmp1 ;

        let inp2 = document.querySelector('#inp2');
        let vl1 = parseFloat(document.querySelector('#inp1').value);
        let opt = document.querySelector('#slt1').value;

        let vl2 = inp2.value ? inp2.value : 676;

        inp2.value = vl2;

        console.log('---', vl2);

        if(opt === 'rem') {

            res = vl1 % vl2;
            tmp1 = res % 26;

            addOutput(vl1 + ' % ' + vl2 + ' = ' + res);
            addOutput(res + ' % ' + 26 + ' = ' + tmp1);

        } else {

            addOutput('--Nothing--')
        }

    };

    document.querySelector('#gen3').onclick = function (ev) {
        ev.preventDefault();

        clearOutput();

        let res, rem1, rem2, lsd, nsd, msd ;

        let inp1 = document.querySelector('#inp1');
        let inp2 = document.querySelector('#inp2');

        let vl1 = parseFloat(inp1.value);
        let opt = document.querySelector('#slt1').value;

        let vl2 = inp2.value ? parseFloat(inp2.value) : 676;

        inp2.value = vl2;


        if(opt === 'rem') {

            res = vl1 % vl2;
            lsd = res % 26;

            lsd = lsd === 0 ? 26 : lsd;

            addOutput(vl1 + ' % ' + vl2 + ' = ' + res);
            addOutput(res + ' % ' + 26 + ' = ' + lsd + ' -> '+ reference[lsd]);
            addOutput('');

            rem2 = (vl1 - lsd) % 676;

            rem2 = rem2 === 0 ? 676 : rem2;

            nsd = (rem2 / 26);


            addOutput('(' + vl1 + ' - ' + lsd + ') % 676 = ' + rem2);
            addOutput(rem2 + ' / 26' + ' = ' + nsd + ' -> ' + reference[nsd]);
            addOutput('');

            res = vl1 - lsd - rem2;
            msd = res / 676;

            addOutput('(' + vl1 + ' - ' + lsd + ' - ' + rem2 + ') = ' + res);
            addOutput(res + ' / 676' + ' = ' + msd + ' -> ' + reference[msd]);

            addOutput('');
            addOutput('-->>> ' + reference[msd] + reference[nsd] + reference[lsd]);



        } else {

            addOutput('--Nothing--')
        }

    };


    document.querySelector('#math_gen').onclick = function(ev) {
        ev.preventDefault();

        let res ;
        let vl1 = parseFloat(document.querySelector('#inp1').value);
        let vl2 = parseFloat(document.querySelector('#inp2').value);
        let opt = document.querySelector('#slt1').value;

        if(opt === 'rem') {

            res = vl1 % vl2;

            addOutput(vl1 + ' % ' + vl2 + ' = ' + res);

        } else if(opt === 'mul') {

            res = vl1 * vl2;

            addOutput(vl1 + ' * ' + vl2 + ' = ' + res);

        } else if(opt === 'add') {

            res = vl1 + vl2;

            addOutput(vl1 + ' + ' + vl2 + ' = ' + res);

        } else if(opt === 'div') {

            res = vl1 / vl2;

            addOutput(vl1 + ' / ' + vl2 + ' = ' + res);

        } else if(opt === 'sub') {

            res = vl1 - vl2;

            addOutput(vl1 + ' - ' + vl2 + ' = ' + res);

        } else if(opt === 'pow') {

            res = vl1 - vl2;

            addOutput(vl1 + ' ** ' + vl2 + ' = Sorry functionality not done! ');
        }


    };



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