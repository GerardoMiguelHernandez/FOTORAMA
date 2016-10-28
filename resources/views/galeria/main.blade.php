<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


  
	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">



</head>

<body class="grey darken-4">
	<header>
	@yield('css')
</header>
@include('galeria.partials.nav')
<main>

 
     @yield('content') 
 
      
		
 



</main>
<footer>

    </footer>
@include('galeria.partials.floating_action_button')
    </div>
    
	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
 
  
  
	<script type="text/javascript">
		
		 $(document).ready(function(){
      $('.slider').slider({full_width: true});
      $('select').material_select();
$('.modal-trigger').leanModal();
 $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

 
    });

     $('.datepicker').pickadate({
    format: "yyyy/mm/dd",
    language: "es",
    autoclose: true,
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

$('.least-gallery').least();
$(".button-collapse").sideNav();
	</script>
	@yield('js')
</body>
</html>
