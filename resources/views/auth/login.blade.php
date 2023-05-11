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

  
<!-- Main Content -->


    <!-- Main content -->
    <section class="content">


					
<div class="container col-sm-3">
 
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 ">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block login" >Login</button>
          </div>
          <!-- /.col -->
        </div>

     
     
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="<?= url('auth/register') ?>">Register</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>

  </div>
					

    </section>

	




   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
	
<script>
      $(document).ready(function() {

        $(".login").click( function() {
        
          var email = $("#email").val();
          var password = $("#password").val();

          if(email.length == "") {

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

          } else {

            $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

            $.ajax({
            
             // $request->session()->token();
              //csrfmiddlewaretoken:  csrf_token()

              url: "<?php echo url('api/login') ?>",
              type: "POST",
              dataType: 'json',
              contentType: 'application/json',
              
              data: '{"Email":  "'+email+'", "Password": "'+password+'", "FirebaseID": "'+password+'"}',

              success:function(response){

                if (response.status == "200") {


                  Swal.fire({
                    type: 'success',
                    title: 'Login Berhasil!',
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



