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
        <div class="col-xs-12">
           <header>
            <h1>Hello, my name is David</h1>
           </header>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-md-10 col-lg-10 col-xs-offset-1 col-md-offset-1">
                <img src="images/david_jarrin.jpg" class="img-responsive about_photo" alt="David Jarrin"/>
                <p>I am from…well I am from San Antonio Texas, Bowie Maryland, Sierra Vista Arizona and back 
                    to Maryland (I am currently living in Baltimore Maryland). As a kid I moved around a lot and 
                    have seen many different landscapes and met people from all over the country with a variety of 
                    dialects, political leanings and personalities. I believe it is important to have a diverse 
                    understanding of the world when you are creating something that can be viewed by all of it!</p>
            
                <p>My hobbies include enjoying the music scene that Baltimore has to offer (the 8x10 is my favorite 
                    venue in the city) having a few brews with friends and occasionally enjoying a music festival 
                    at some far corner of the country.</p>

            <div class="davids-facts">
                <h2><u>Davids Interesting facts</u></h2>
                <h3><em><strong>Interesting fact #42</strong><em></h3>
                <p><em>I have won three junior Olympic medals in table tennis</em></p>
        
                <h3><strong><em>Interesting fact #78</em></strong></h3>
                <p><em>I used to in-line speed skate competitively when I was a kid</em></p>

                <h3><strong><em>Interesting fact #22</em></strong></h3>
                <p><em>I have a large multi-color portrait of Einstein in my childhood room.</em></p>

                <p>.......for more interesting facts about me feel free to visit my contact page and I’ll try 
                    to dig up interesting fact #33 or #25......</p>
            </div>
        </div>
    
    </div>

<?php 
include("footer.php");
?>
</body>
</html>
