<div class="row">
    <div id="__actionMessage" class="col-md-12 actionMessage">


        <div id="spinner" style="display: none">
            <h4>Working....<i class="fa fa-spin fa-spinner"></i></h4><span></span>
        </div>
        <div id="spinnerContainer"></div>


        <?php
        if(!empty($_SESSION['errorType']) && ( $_SESSION['errorType'] == 'danger' || $_SESSION['errorType'] == 'error')) : ?>
            <div class="alert alert-danger">{!! nl2br($_SESSION['message'])  !!}<span class="crossBtn">x</span></div>

        <?php

        endif;

        if(!empty($_SESSION['errorType']) && $_SESSION['errorType'] == 'success') : ?>
            <div class="alert alert-success">{!! nl2br($_SESSION['message'])  !!}<span class="crossBtn">x</span></div>
        <?php

        endif; ?>

    </div>
</div>
