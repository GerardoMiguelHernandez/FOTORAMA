<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Eventos</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	{!! Html::style('css/materialize.css'); !!}
  {!! Html::style('kataklimt/css/bootstrap.css'); !!}
  {!! Html::style('kataklimt/css/kwicks-slider.css'); !!}
  {!! Html::style('kataklimt/css/responsive.css'); !!}
  {!! Html::style('kataklimt/css/style.css'); !!}
  {!! Html::style('kataklimt/css/touchTouch.css'); !!}
  {!! Html::style('css/animate.css'); !!}
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  {!! Html::script('js/mateialize.js'); !!}
  {!! Html::script('kataklimt/js/jquery.js'); !!}
  {!! Html::script('kataklimt/js/superfish.js'); !!}
  {!! Html::script('kataklimt/js/jquery.flexslider-min.js'); !!}
  {!! Html::script('kataklimt/js/jquery.kwicks-1.5.1..js'); !!}
  {!! Html::script('kataklimt/js/jquery.easing.1.3.js'); !!}
  {!! Html::script('kataklimt/js/touchTouch.jquery.js'); !!}
  {!! Html::script('js/jssor.slider-21.1.5.mini.js'); !!}
	
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='kataklimt/js/jquery.preloader.js'></"+"script>");}	</script>
	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }			 
		
		 jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
					
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>  
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
<div class="spinner"></div>
<!--============================== header =================================-->
<header style="background:url('/img/Camara.jpg')">
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="{{url('/')}}">  
              <h3>FOTORAMA</h3>
            </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li class="sub-menu"><a>Centros</a>
                      <ul>
                      @foreach($centricos as $centrico)
                    <li><a href="{{route('centros.show', $centrico->id)}}">{{$centrico->nombre}}</a></li>
                    @endforeach
                  </ul>
                    </li>
               <li class="sub-menu"><a>Categorias</a>
                <ul style="font-family:Garamond;font-size:16px">
                      @foreach($categoria as $cate)
                    <li style="font-family:Garamond;font-size:16px"><a href="{{route('categoria.show', $cate->id)}}">{{$cate->nombre}}</a></li>
                    @endforeach
                  </ul>
                    </li>
                         <li><a href="{{route('login')}}">Login</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>



<div class="bg-content"> 
 <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
        <article class="span12">
              <h3>Eventos</h3>
            </article>
        <div class="clear"></div>
        <ul class="thumbnails thumbnails-1 list-services">
               @foreach($eventos as $allevento)
              <li class="span4">
            <div class="thumbnail thumbnail-1"> <img  src="/uploads/{{$allevento->imagen}}" alt="">
                  <section> <a href="{{route('eventos.show', $allevento->id)}}" class="link-1">{{$allevento->nombre}}</a>
                <p>Categoria:{{$allevento->categoria->nombre}}</p>
                <p>Descripcion:{{$allevento->descripcion}}</p>
              </section>
                </div>
          </li>
          @endforeach
           
              
            </ul>
      </div>
        </div>
  </div>
    </div>
<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">Website Template designed by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">TemplateMonster.com</a> </div>
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>