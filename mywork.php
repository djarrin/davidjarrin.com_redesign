<!DOCTYPE html>

<html lang="en">
<head>
 
    <meta charset="utf-8" />
    <title>davidjarrin.com - where you go so the world can see you</title>
  <?php set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] ); ?>  
    <?php 
    include("normalLinks.php");
    ?>


    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
    <!--parameters for fancy box-->
    <script src="js/fancybox-params.js"></script>

    <!--recognizes the URL that is selected and scrolls down to that anchor from top-->
    <script src="js/port-scroll.js"></script> 

</head>
<body>


<?php 
include( "header.php");
?>

    <div class="row">
        <div class="col-xs-4 col-md-4 col-xs-offset-8 col-md-offset-8">
            <h2><a class="skills">Skills I Have Aquired</a></h2>
            <hr />
        </div>

        <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
            <p>While I have been working in the web industry I have had an opportunity to learn so much both in my job and independently. My educational experience is in physics but have found a home in the web industry due to the exciting fact that the landscape is constantly changing and the learning never slows down and never stops. </p> 

            <h3>HTML/CSS</h3>

            
             <p>I have worked with many of the common technologies within HTML and CSS:</p>
             <ul class="skill-list">
                <li>Regularly work with the bootstrap framework and grid layouts.</li>
                <li>I prefer to use Sass for all of my styling.</li>
                <li>Experience (using these technologies) building fully responsive web applications across many browsers, trying to account for even the oldest versions of IE.</li>
             </ul>

             <h3>Scripting Languages</h3>
             <ul class="skill-list">
                <li>I have experience using javascript within and outside of the jQuery framework.</li>
             </ul>

             <h3>Server Side Languages</h3>
             <ul class="skill-list">
                <li>While building sharkysbarandgrill.com which is a wordpress site, I have come into contact with some PHP (along with a little bit on this site).</li>
                <li>I am currently working with Ruby and more over RoR.</li>
             </ul>


              
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-md-4 col-xs-offset-8 col-md-offset-8">
            <h2><a class="experience">Work Experience</a></h2>
            <hr />
        </div>
        <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
             <p>After graduating from the University of Maryland with a B.S. in physics I worked for the MTA of Baltimore for around a year and a half. There I picked up some real life data analytics skills along with some of my first experience working in an office environment.</p> 
            
             <p>Although I enjoyed my time at the MTA I decided I would like to make a change to the constantly evolving field of web development. I was lucky enough to find a position at Money Map Press (an affiliate of Agora Inc.) located in Baltimore. Here I have had extensive experience using and creating responsive email templates that will function correctly in any email client, gaining familiarity with the wordpress admin area and creating responsive Order Forms.</p>



        </div>
    </div>


    <div class="row">
        <div class="col-xs-4 col-md-4 col-xs-offset-8 col-md-offset-8">
            <h2><a class="works">Portfolio</a></h2>
            <hr />
        </div>
        <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <h2>Cornerstonebookkeeping.biz</h2>
                    <hr />
                </div>
            </div>
            <div class="col-sm-10 col-md-3">
               <a class="various fancybox.iframe" rel="gallery1" href="http://cornerstonebookkeeping.biz/" title="cornerstonebookkeeping.biz"> 
                <img style="width: 100%;"src="images/cornerstonebookkeeping.png" alt="cornerstone bookkeeping photo"/>
               </a>
            </div>
            <div class="col-sm-10 col-md-7">
            <p>This was the very first website I ever built and holds sentimental value to me. Here was my first experience creating a responsive static website, using HTML/CSS along with some media queries. This site represents some of my first efforts to gain some basic knowledge needed to get a site up and running.</p>       
            
            </div>
        
        </div>

        <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <h2>Sharkysbarandgrill.com</h2>
                    <hr />
                </div>
            </div>
            <div class="col-sm-10 col-md-3">
              <a class="various fancybox.iframe" rel="gallery1" href="http://www.sharkysbarandgrill.com" title="sharkysbarandgrill.com">
                <img style="width: 100%;"src="images/sharkysbarandgrill-screen-shot.jpg" alt="cornerstone bookkeeping photo"/>
              </a>
            </div>
            <div class="col-sm-10 col-md-7">
            <p>This is a wordpress site I built for a bar in my community. This site demonstrates my ability to work with the wordpress CMS, thus showing off some of my basic knowledge of PHP as well. For this site I used the bootstrap framework along with Sass styling and jQuery scripting. </p>       
            
            </div>
        
        </div>

    </div>

<?php 
include("footer.php");
?>

</body>
</html>