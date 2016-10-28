
$(function(){

$('#categoria').click(function(){
var nombre =$('#nombre').val();
var descripcion = $('#descripcion').val();


$.ajax({
	url:'http://localhost:8000/categoria',
headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },

type:'POST',
dataType:'json',
dat:{nombre:nombre,descripcion:descripcion}
});



});




});