@extends('template.main')
@section('content')
<div class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="/img/03.jpg" alt="Unsplashed background img 1"></div>
  </div>




  <div class="row">
  	<div class="col s12 m6 l6">
  		
  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="/img/01.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="/img/02.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="/img/0.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="/img/04.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="/img/05.jpg"></a>
  </div>
      
  	</div>
  	<div class="col s12 m6 l6">
  		
  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="/img/01.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="/img/02.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="/img/0.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="/img/04.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="/img/05.jpg"></a>
  </div>
      
  	</div>
  </div>
@endsection

@section('js')
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
<script type="text/javascript">
$(function(){
	$('.parallax').parallax();
	  $('.carousel').carousel();

});
</script>
@endsection