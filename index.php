<!DOCTYPE html>

<html lang="en">
<head>
 <?php set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] ); ?>
    <meta charset="utf-8" />
    <title>davidjarrin.com - where you go so the world can see you</title>
    
    <?php 
    include("normalLinks.php");
    ?>


</head>
<body>


<?php 
include("header.php");
?>

    <div class="row">
        <div class="col-lg-12" id="header_photo">
            <img src="/images/dmjarrin_1200x500_wtype.jpg" alt="front page photo"/>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-xs-12 col-lg-offset-2 col-md-offset-2" id="home">
            <p><strong>Form</strong>- bring together parts or combine to create.<br>
                <strong>Function</strong>- work or operate in a proper or particular way.</p>
            
            <p>My motto is not form <strong>or</strong> function, when it comes to designing a web site, it's 
                form <strong>and</strong> function. A healthy balance of the two is important when trying to
                 build a web technology you want to be accessed by the whole world.</p>
        </div>
    </div>

<?php 
$includes_path = "C:/davids-sites/davidjarrin_com-redesign/";
include($includes_path . "footer.php");
?>
</body>
</html>
