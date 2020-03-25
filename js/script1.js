$(document).ready(function() {



	$('#pass2').keyup(function() {

		var pass1 = $('#pass1').val();
		var pass2 = $('#pass2').val();

       
        if ( pass1 === pass2 ) {
            $('#pass2:focus').css("border-color", "green");
            $('#error2').text('PAR!').css('color', 'green');
		} else {
            $('#pass2:focus').css("border-color", "red");
            $('#error2').text('NO PAR!').css('color', 'red');
        }
        if (pass2 == '') {
            $('#pass2:focus').css("border-color", "#00BFFF");
            $('#error2').text('');
        }

       
        

    });

    $('#show').mousedown(function(){
        $('#pass1').removeAttr('type');
        $('#show').addClass('fa-eye').removeClass('fa-eye-slash');
    });
    $('#show').mouseup(function(){
        $('#pass1').attr('type','password');
        $('#show').addClass('fa-eye-slash').removeClass('fa-eye');
    });

    $('#show1').mousedown(function(){
        $('#pass2').removeAttr('type');
        $('#show1').addClass('fa-eye').removeClass('fa-eye-slash');
    });
    $('#show1').mouseup(function(){
        $('#pass2').attr('type','password');
        $('#show1').addClass('fa-eye-slash').removeClass('fa-eye');
    });

    $('#show2').mousedown(function(){
        $('#pass3').removeAttr('type');
        $('#show2').addClass('fa-eye').removeClass('fa-eye-slash');
    });
    $('#show2').mouseup(function(){
        $('#pass3').attr('type','password');
        $('#show2').addClass('fa-eye-slash').removeClass('fa-eye');
    });

    $('#show7').mouseup(function(){
        $('#pass8').attr('type','password');
        $('#show7').addClass('fa-eye-slash').removeClass('fa-eye');
    });

    $('#show3').mousedown(function(){
        $('#pass4').removeAttr('type');
        $('#show3').addClass('fa-eye').removeClass('fa-eye-slash');
    });
    $('#show3').mouseup(function(){
        $('#pass4').attr('type','password');
        $('#show3').addClass('fa-eye-slash').removeClass('fa-eye');
    });

    $('#letras').on('input', function (e) {
        if (!/^[ a-z0-9áéíóúüñ]*$/i.test(this.value)) {
            this.value = this.value.replace(/[^ a-z0-9áéíóúüñ]+/ig,"");
        }
    });
    
    $('#pass1').keyup(function() {

		var pass1 = $('#pass1').val();
	

       
        if ( pass1.length <= 4 ) {
            $('#pass1:focus').css("border-color", "red");
            $('#error1').text('DEBIL!').css('color', 'red');
        }  
       
        else {
            if ( pass1.length <= 9 ) {
                $('#pass1:focus').css("border-color", "orange");
                $('#error1').text('MEDIO!').css('color', 'orange');
            } else{
            $('#pass1:focus').css("border-color", "green");
            $('#error1').text('FUERTE!').css('color', 'green');
            }
        }
        if (pass1 == '') {
            $('#pass1:focus').css("border-color", "#00BFFF");
            $('#error1').text('');
        }
       

       
        
        

	});

	$(".contenedor-formularios").find("input, textarea").on("keyup blur focus", function (e) {

        var $this = $(this),
          label = $this.prev("label");

        if (e.type === "keyup") {
            if ($this.val() === "") {
                label.removeClass("active highlight");
            } else {
                label.addClass("active highlight");
            }
        } else if (e.type === "blur") {
            if($this.val() === "") {
                label.removeClass("active highlight"); 
                } else {
                label.removeClass("highlight");   
                }   
        } else if (e.type === "focus") {
            if($this.val() === "") {
                label.removeClass("highlight"); 
            } 
            else if($this.val() !== "") {
                label.addClass("highlight");
            }
        }

    });

 

    $('#eye').mousedown(function(){
        $('#pass3').removeAttr('type');
      
        $('#eye').text('🙄');
    });
    $('#eye').mouseup(function(){
        $('#pass3').attr('type', 'password');

        $('#eye').text('😆');
    });

     $('#eye1').mousedown(function(){
        $('#pass1').removeAttr('type');
      
        $('#eye1').text('🙄');
    });
    $('#eye1').mouseup(function(){
        $('#pass1').attr('type', 'password');

        $('#eye1').text('😆');
    });

   

});