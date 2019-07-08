<<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Live News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/artist.css">
<link rel="stylesheet" type="text/css" href="styles/artist_responsive.css">




  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="livenews/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="livenews/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="livenews/css/style.min.css" rel="stylesheet">

<style type="text/css">
	
	#a a{

		color: white;
	   border-radius: 12px;
	   border:2px solid gray ;
	   padding: 12px;
	   margin:25px;
	}

	#a a:hover{
		color: red;

	}

footer{
background-image: url("img/footer.jpg");

}
	hr{
}

background-color: gray;	}
</style>


</head>
<body>

<div class="super_container">
	
	<!-- Header -->

   <?php include('includes/header.php');?>


	<!-- Menu -->


	<!-- Home -->


	<!-- Artist -->



	<!-- Songs -->



	<!-- Video -->



      <section class="card blue-gradient wow fadeIn" id="intro">

        <!-- Content -->
        <div class="card-body text-white text-center py-5 px-5 my-5" id="a">


          <p style="font-size: 30px;color: white;margin-bottom: 22px;">Hey this is today's news ! </p>

          <a href="#fana">Fana News</a>
          <a href="#nahoo">Nahoo News</a>

          <a href="#ebs">Ebs News</a>

          <a href="#bbca">BBC Amharic News</a>

          <a href="#bbcu">BBC US News</a>

          <a href="#press">Press TV News</a>


          <a href="#betoch">Betoch News</a>

          <br>
           <br>
            <br>

         
          <a href="#ta">Tigray TV VOA</a>
          <a href="#tn">Tigray TV news</a>
          <a href="#gar">Amara TV news</a>
          <a href="#gar">SSN  news</a>
          <a href="#obn">Oromo news</a>
          <a href="#gar">Walta news</a>
          <a href="#gar">Guardian news</a>

        </div>
        <!-- Content -->
      </section>



	<div class="video">
		<div class="container">
			<div class="row">



 <hr class="mb-5">







        <div class="row mt-3 wow fadeIn" id="bbca" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/bbca.png" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from BBC Amharic </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("https://www.bbc.com/amharic/popular/read");

$start=explode('<h1 class="most-popular__h1">ብዙ የተነበቡ</h1>', $data_scraper);

$end=explode('<h2 class="navigation--footer__heading">BBC News አማርኛ ለመቃኘት</h2>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5">




		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="fana" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
              <img src="imag/fana.jpg" class="img-fluid"
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
    <h1>This is from fana </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


  
            <?php 
$data_scraper=file_get_contents("https://fanabc.com/");

$start=explode('<p class="heading ">በብዛት የተነበቡ</p>', $data_scraper);

$end=explode('<a href="https://fanabc.com/category/news/">News</a>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5" style="width: 170%">


		<div class="video">
		<div class="container">
			<div class="row". style="width: 100%;margin-left: 27%">
        <div class="row mt-3 wow fadeIn" id="ebs" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/ebs.jpg" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
  <h1>This is from Ebs </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  
            <?php 
$data_scraper=file_get_contents("http://www.ebc.et/web/ebcnews/home");

$start=explode('<span class="portlet-title-text">አዳዲሰ ዜና</span>', $data_scraper);

$end=explode('<span class="taglib-text hide-accessible">አፍሪካ</span>',$start[1]);

echo $end[0];?>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5">


		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="bbcu" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/bbcu.jpg" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from BBC US  </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("https://www.bbc.com/news/popular/read?imz_s=87g4oive75ma7dga6ld57ttvj2");

$start=explode('<h1 class="most-popular__h1">Most Read</h1>', $data_scraper);

$end=explode('<h2 class="navigation--footer__heading">BBC News Navigation</h2>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5">


		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="gar" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/gar.jpg" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from Guardian World Wide  </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("https://www.theguardian.com/most-read/news");

$start=explode('<h2 class="content__inline-section">Most viewed in News</h2>', $data_scraper);

$end=explode('<a class="pillar-link pillar-link--News" href="https://www.theguardian.com/international" data-link-name="footer : primary : News">
News
</a>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5">

		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="nahoo" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
              <img src="imag/nahoo.jpg"  class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
   <h1>This is from Nahoo tv </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


 
            <?php 
$data_scraper=file_get_contents("http://www.nahootube.com/browse-nahootv-videos-1-date.html");

$start=explode('<h1 class="entry-title compact">Nahoo TV</h1>', $data_scraper);

$end=explode('<h4>Related categories</h4>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5">


		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="bbce" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
              <img src="imag/bbcu.jpg" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
<h1>This is from BBC in US </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
            <div id="profile1"></div>
      
      <div id="profile"></div>

    </div><!-- /.container -->

    <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- <script src="js/main.js"></script>-->
   <script>
$(document).ready(function(){
   // $("#Search").keyup(function(e){
//var num=e.target.value;
//console.log(num);
$.ajax({

 url:'https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=92638b5c190a49319ed6e391cff00cfb',

    }).done(function(data){
       console.log(data);
    for(var i=0;i<data.articles.length;i++){
       $('#profile1').append(`
          <p> <img src="${data.articles[i].urlToImage}"></p>
           <br/>
           <a href="http://www.bbc.com/news/world" <h3 class="panel-title">Title:${data.articles[i].title}</h3></a>
            
            <br/>
            <h3 class="panel-title">Author:${data.articles[i].author}</h3>
             
            <h3 class="panel-title">Description:${data.articles[i].description}</h3>
             <br/>
           `);


       }
      });    
     
    });
     </script>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>



    <hr class="mb-5">

		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="betoch" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
              <img src="imag/betoch.jpg" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
  <h1>This is from Betoch  </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


  
  
            <?php 
$data_scraper=file_get_contents("http://www.betoch.com/");

$start=explode('<h3>Featured houses for Rent</h3>', $data_scraper);

$end=explode('<h3>Browse by Property Type</h3>',$start[1]);

echo $end[0];?> 
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>



    <hr class="mb-5">

		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="press" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/press.jpg" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from press tv  </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("https://www.presstv.com/Default/Section/13013/");

$start=explode('<h2 class="page-header">Latest News</h2>', $data_scraper);

$end=explode('<span class="loading" data-loading="/callback/Latest1">Loading ...</span>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>



    <hr class="mb-5">

		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="alge" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/alj.png" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from Aljazeraa </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("https://www.aljazeera.com/");

$start=explode('<h1>TRENDING</h1>', $data_scraper);

$end=explode('<p>10</p>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5">


		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="cgtn" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/cgtn.png" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from CGTN AMERICA. </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("https://america.cgtn.com/");

$start=explode('<p class="parts-title">popular news</p>', $data_scraper);

$end=explode('<a href="/category/podcasts/the-heat-podcasts" title="">The Heat Podcasts</a>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5">


		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="ta" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/tig.png" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from Tigray Voice Of America</h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("https://tigrigna.voanews.com/?trk1&utm_campaign={campaign}&utm_medium={medium}&utm_source={source}");

$start=explode('<h3 class="handler" title="open widget tab ዝተዘውተሩ ጽሑፋት">
ዝተዘውተሩ ጽሑፋት
<span title="close widget tab ዝተዘውተሩ ጽሑፋት" class="ico ico-chevron-up"></span>
<span title="open widget tab ዝተዘውተሩ ጽሑፋት" class="ico ico-chevron-down"></span>
</h3>', $data_scraper);

$end=explode('<h3 class="handler" title="open widget tab ዝተዘውተሩ ቪድዮታት">
ዝተዘውተሩ ቪድዮታት
<span title="close widget tab ዝተዘውተሩ ቪድዮታት" class="ico ico-chevron-up"></span>
<span title="open widget tab ዝተዘውተሩ ቪድዮታት" class="ico ico-chevron-down"></span>
</h3>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>


    <hr class="mb-5">


		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="obn" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/afan.jpg" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from OROMO </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("http://www.obn.et/web/guest/welcome");

$start=explode('<span class="portlet-title-text">Ispoortii Itiyoophiyaa</span>', $data_scraper);

$end=explode('<span class="taglib-text hide-accessible">Ispoortii Adunyaa</span>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>

	    <hr class="mb-5">


		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="tn" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/tol.png" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from Tigray News </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("http://www.tigraionline.com/");

$start=explode('<h2>This Weeks News</h2>', $data_scraper);

$end=explode('<h2>Announcement</h2>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>



    <hr class="mb-5">


		<div class="video">
		<div class="container">
			<div class="row">
                <hr class="mb-5">






        <div class="row mt-3 wow fadeIn" id="bbca" style="width: 170%">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
                  <div class="view overlay rounded z-depth-1">
                    <img src="imag/bbca.png" class="img-fluid" alt="">
                  
                    <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
 <h1>This is from BBC Amharic </h1>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




   
            <?php 
$data_scraper=file_get_contents("https://www.bbc.com/amharic/popular/read");

$start=explode('<h1 class="most-popular__h1">ብዙ የተነበቡ</h1>', $data_scraper);

$end=explode('<h2 class="navigation--footer__heading">BBC News አማርኛ ለመቃኘት</h2>',$start[1]);

echo $end[0];?>
          </div>
          <!--Grid column-->

        </div>
			</div>
		</div>
	</div>



	<!-- Newsletter -->



	<!-- Footer -->




   <?php include('includes/footer.php');?>



</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/video-js/Youtube.min.js"></script>
<script src="js/artist.js"></script>
</body>
</html>
