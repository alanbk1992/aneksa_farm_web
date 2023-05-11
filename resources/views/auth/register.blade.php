@extends('layout')

@section('header')
    @include('header')
@stop

@section('navbar')
    @include('navbar')
@stop



@section('body')

<?php

 if(session() ->get('HTTP_TOKEN') != "")
{

    header("Location: ". url('home'));
    
   exit;
}

$token = csrf_token();
?>
  <div class="content container" >
	  

	<div class="form-group">  
	
	<div class="row">
	
	<div class="col-md-6">
	<div class="form-group">
		<label for="firstname" class="font-weight-bold" >Nama Depan</label>
		<input type="text" class="form-control" id="firstname" placeholder="Nama Depan">
	</div>
	</div>

	<div class="col-md-6">
	<div class="form-group">
		<label for="lastname" class="font-weight-bold" >Nama Belakang</label>
		<input type="text" class="form-control" id="lastname" placeholder="Nama Belakang">
	</div>
	</div>

	</div>
<!-- end row -->

	<div class="row">
	
	<div class="col-md-6">
	<div class="form-group">
		<label for="username" class="font-weight-bold" >Username</label>
		<input type="text" class="form-control" id="username" placeholder="Username">
	</div>
	</div>

	<div class="col-md-6">
	<div class="form-group">
		<label for="email" class="font-weight-bold" >Email</label>
		<input type="text" class="form-control" id="email" placeholder="Email">
	</div>
	</div>

	</div>
	<!-- end row -->		  
	 
	<div class="row">
	
	<div class="col-md-6">
	<div class="form-group">
		<label for="password" class="font-weight-bold" >Password</label>
		<input type="text" class="form-control" id="password" placeholder="Password">
	</div>
	</div>

	<div class="col-md-6">
	<div class="form-group">
		<label for="password_confirmation" class="font-weight-bold" >Konfirmasi Password</label>
		<input type="text" class="form-control" id="password_confirmation" placeholder="Konfirmasi Password">
	</div>
	</div>

	</div>
	<!-- end row -->	
	
	
		<div class="row">
	
	<div class="col-md-6">
	<div class="form-group">
		<label for="phone" class="font-weight-bold" >No Telpon</label>
		<input type="text" class="form-control" id="phone" placeholder="No Telpon Aktif">
	</div>
	</div>

	<div class="col-md-6">
	<div class="form-group">
		<label for="reff" class="font-weight-bold" >Kode Refferal</label>
		<input type="text" class="form-control" id="reff" placeholder="Optional">
	</div>
	</div>

	</div>
	<!-- end row -->	
	

</div>

<button type="submit" class="btn btn-primary btn-block register">Daftar</button>


</div>
</div>



	

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
	
 <script>
      $(document).ready(function() {

        $(".register").click( function() {
        
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var username = $("#username").val();
          var email = $("#email").val();
          var password = $("#password").val();
		var password_confirmation = $("#password_confirmation").val();
		var phone = $("#phone").val();
		var reff = $("#reff").val();
		
		
		   if(firstname.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Nama Depan Wajib Diisi !'
            });


        }else if(username.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Username Wajib Diisi !'
            });



          }else if(email.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Email Wajib Diisi !'
            });

          } else if(password.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Password Wajib Diisi !'
            });
			
          } else if(password_confirmation.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Password Konfirmasi Wajib Diisi !'
            });
			
			} else if(phone.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'No Telpon Wajib Diisi !'
            });
			
          } else {

            $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

            $.ajax({
            



  //csrfmiddlewaretoken:  csrf_token()

              url: "<?php echo url('api/register') ?>",
              type: "POST",
              dataType: 'json',
              contentType: 'application/json',
              
			  
	
              
              data: '{"firstname":  "'+firstname+'", "lastname": "'+lastname+'", "username": "'+username+'", "email": "'+email+'", "password": "'+password+'", "password_confirmation": "'+password_confirmation+'", "phone": "'+phone+'", "reff": "'+reff+'"}',

              success:function(response){

                if (response.status == "200") {

                  Swal.fire({
                    type: 'success',
                    title: 'Pendaftaran Berhasil!',
                    text: 'Anda akan di arahkan dalam 3 Detik',
                   timer: 3000,
                    showCancelButton: false,
                    showConfirmButton: false
                  })
                  .then (function() {
                   window.location.href = "<?= url('home')?>";
                  });

                } else {

                  Swal.fire({
                    type: 'error',
                    title: response.message,
                    text: 'silahkan coba lagi!'
                  });


                }

                console.log(response);

              },

              error:function(response){

                  Swal.fire({
                    type: 'error',
                    title: 'Opps!',
                    text: 'server error!'
                  });

                  console.log(response);

              }

            });

          }
		  

        }); 

      });
    </script>


@stop



