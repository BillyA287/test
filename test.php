<?php
	$top = 'top';
	$middle = 'middle';
	$bottom = 'bottom';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Telescopic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav js-nav">

                
                <a class="nav-item nav-link js-link-smooth" href="#section-top"><?php echo $top ?> </a>
                <a class="nav-item nav-link js-link-smooth" href="#section-middle"><?php echo $middle ?></a>
                <a class="nav-item nav-link js-link-smooth" id="bottom" href="#section-bottom"><?php echo $bottom ?></a>
            </div>
        </div>
    </nav>
    <section id="section-wrapper">


        <section id="section-top" class="js-section">
            <a class='top js-link-smooth' href="#section-top"> <?php echo $top ?> </a>
        </section>

        <section id="section-middle" class="js-section">
            <a class='middle js-link-smooth' href="#section-middle"> <?php echo $middle ?> </a>
        </section>

        <section id="section-bottom" class="js-section">
            <a class='bottom js-link-smooth' href="#section-bottom"> <?php echo $bottom ?> </a>
        </section>

    </section>
    <?php

if (isset($_GET['page']))
{
	$page = $_GET['page'];
}else{
$page = "";
}



include 'top.php';
include 'middle.php';
include 'bottom.php';

?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/script.js"></script>
</body>

</html>