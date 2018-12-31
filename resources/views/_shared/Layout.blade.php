<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Cricinfo">
    <meta name="author" content="Mirwais Bilal">
    <meta name="_token" content="{{csrf_token()}}" />
    <!--  Load CSS  -->
    <link href="{{ 'img/favicon.ico' }}" rel="icon">
    <link href="{{ 'css/bootstrap.min.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ 'css/carousel.css' }}" rel="stylesheet" type="text/css">
    <link href="{{ 'css/site.css' }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--  Load Scripts  -->
  	<script src="{{ 'js/jquery.min.js' }}" type="text/javascript"></script>
  	<script src="{{ 'js/bootstrap.min.js'}}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ "js/jquery.min.js" }}"><\/script>')</script>
    <script src="{{'js/holder.min.js' }}" type="text/javascript"></script>
	  <title>Cricket Board |  @yield('title')</title>
  
</head>
<body>





<div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="www.cricketboard.com" style="background-color: transparent;">
              Cricket Board
              </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li id="home" class="active" style="padding-right: 5px;"><a href="/"><i class="fa fa-home"></i></a></li>
                <li id="about"><a href="#about">About</a></li>
                <li id="contactus"><a href="{{ url('/LiveScores')}}">Live Scores</a></li>
                <li id="contactus"><a href="{{ url('/Series')}}">Series</a></li>
                <li id="ourstory"><a href="#ourstory">Players</a></li>
                <li id="products" class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teams <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">A Team </a></li>
                    <li><a href="#">U19</a></li>
                    <li><a href="#">Spices </a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Other</li>
                    <li><a href="#">Other</a></li>
                    <li><a href="#">Other</a></li>
                    <li><a href="#">Other</a></li>
                    
                  </ul>
                </li>
                <li id="instore" class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matches <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">International</a></li>
                    <li><a href="#">Domestic</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
             <!-- <ul class="nav navbar-nav navbar-right">
                <li>
                   <form class="navbar-form navbar-right">
                      <input type="text" class="form-control searchtxt" placeholder="Search..."/>
                      <button type="button" class="btn btn-primary searchbtn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                   </form>
                </li>
              </ul>-->
            </div>
          </div>
        </nav>

      </div>
    </div>



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{ 'img/slide1.jpg' }}" alt="First slide">
          <div class="container">
           <!-- <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{ 'img/slide2.jpg' }}" alt="Second slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{ 'img/slide3.jpg' }}" alt="Third slide">
          <div class="container">
          <!--  <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>-->
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
<div class="container marketing">
	
        @yield('content')
</div>

<hr class="featurette-divider">

<div class="container footer">
        <footer>
          <div class="col-md-4" align="left">
            <p style="color: #777;">&copy; 2018 Cricket Board All Rights Reserved.</p>
          </div>
          <div class="col-md-4 mediadiv" align="center">
                <a href="#" style="background: #305891;"> <i class="fab fa-facebook-f media"></i></a>
                <a href="#" style="background: #2ca8d2;"> <i class="fab fa-twitter media"></i></a>
                <a href="#" style="background: #cd201f;"> <i class="fab fa-youtube media"></i></a>
                <a href="#" style="background: #4498c8;"> <i class="fab fa-linkedin-in media"></i></a>
          </div>
          <div class="col-md-4" align="right">
            <p class="pull-right">
              <a href="#">Privacy </a> &middot; <a href="#"> Terms </a> &middot; <a href="#"> Back to top </a>
            </p>
          </div>
      </footer>
</div>


</body>
@yield('scripts')
<script type="text/javascript">
    
$(window).scroll(function() {
	var $height = $(window).scrollTop();
  if($height > 80) {
		$('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
    $('.navbar').css('border-radius','0px');
	} else {
		$('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
    $('.navbar').css('border-radius','4px');
	}
});


    if($('.navbar-inverse .navbar-nav>.active>a')){
        $('.navbar').css('border-color','#003057');
    }
</script>
</html>