@extends('layout') @section('header') @include('header') @stop @section('sidebar') @include('sidebar') @stop @section('navbar') @include('navbar') @stop @section('body')
<!-- Content Wrapper. Contains page content -->
<!-- <div class="row"> -->
<!-- Content Header (Page header) -->
<h5 class="breadcrumb mb-4">
  <li class="breadcrumb-item">
    <a href="
			<?= url('home') ?>">Home </a>
  </li>
  <li class="breadcrumb-item">
    <a href="
			<?= url('contacts/employees') ?>">Karywan </a>
  </li>
  <li class="breadcrumb-item active">Tambah Karyawan</li>
</h5>
<!-- Main content -->
<section class="content">
  <div class="container">
    <form class="form-horizontal">
      <!-- Informasi Produk-->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title font-weight-bold">Informasi Umum</h3>
        </div>
        <div class="card-body">
          <div class="form-group">

            <div class="row">
              <label for="product_name" class="col-sm-2 col-form-label font-weight-bold">Foto Profil</label>

              <div class="col-md-6">

                <input class="form-control" type="file" id="formFile" onchange="preview()">
                <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button>
                <img id="img0" src="<?= env('APP_URL') .('resources/images/logo.png') ?>" alt="Foto Profil" class="img-fluid">
            
            <script>
            function preview() {
              img0.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                img0.src = "";
            }
        </script>

              </div>
            </div>

             <!-- end row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user_name" class="font-weight-bold">Nama Panggilan</label>
                  <input type="text" class="form-control" id="user_name" placeholder="Nama Panggilan">
                </div>
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="first_name" class="font-weight-bold">Nama Depan</label>
                  <input type="text" class="form-control" id="first_name" placeholder="Nama Depan">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="last_name" class="font-weight-bold">Nama Belakang</label>
                  <input type="text" class="form-control" id="last_name" placeholder="Nama Belakang">
                </div>
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="identity_type" class="font-weight-bold">Identitas</label>
                  <input type="text" class="form-control" id="identity_type" placeholder="Pilih KTP / SIM">
                </div>
              </div>
              <div class="col-md-6 align-items-center">
                <input type="text" class="form-control " id="identity_no" placeholder="No Identitas">
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="email" class="font-weight-bold">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="phone" class="font-weight-bold">No Handphone</label>
                  <input type="text" class="form-control" id="phone" placeholder="No Handphone">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="npwp" class="font-weight-bold">NPWP</label>
                  <input type="text" class="form-control" id="npwp" placeholder="NPWP">
                </div>
              </div>
            </div>
            <!-- end row -->
            <div class="form-group">
              <label for="address" class="font-weight-bold">Alamat</label>
              <input type="text" class="form-control" id="address" placeholder="Alamat">
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- group pemetaan akun -->
      <div class="card mt-3">
        <div class="card-header">
          <h3 class="card-title font-weight-bold">Pemetaan Akun</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputUsername1" class="font-weight-bold">Akun Hutang</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih daftar akun kategori hutang">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1" class="font-weight-bold">Akun Piutang</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih daftar akun kategori piutang">
          </div>
        </div>
      </div>
      <!-- end group -->
      <!-- group akun bank -->
      <div class="card mt-3">
        <div class="card-header">
          <h3 class="card-title font-weight-bold">Akun Bank</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputUsername1" class="font-weight-bold">Nama Bank</label>
            <input type="text" class="form-control" id="bank_name" placeholder="Nama Bank">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1" class="font-weight-bold">Kantor Cabang</label>
            <input type="text" class="form-control" id="branch_office" placeholder="Kantor Cabang">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1" class="font-weight-bold">Nama Pemegang Akun</label>
            <input type="text" class="form-control" id="account_holder " placeholder="Nama Pemegang Akun">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1" class="font-weight-bold">Nomor Rekening</label>
            <input type="text" class="form-control" id="account_no" placeholder="No Rekening">
          </div>
        </div>
      </div>
      <!-- end group -->
    </form>
    <div class="card-footer">
      <button type="submit" class="btn btn-info">Simpan</button>
      <button type="submit" class="btn btn-default float-right">Simpan & Tambah Baru</button>
      <button type="submit" class="btn btn-default float-right">Batal</button>
    </div>
    <!-- /.card-body -->
    <!-- /.card -->
</section>
<!-- /.content -->
<!-- </div> -->
<!-- /.content-wrapper -->
<!--/.Java Script -->


<script>

ImgUpload();

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
        if (i == 5 ) {
      
      alert("Foto produk maksimal 6");
      
      }else{
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

        
      var reader = new FileReader();
            reader.onload = function (e) {
        
      if (i == 0) {
      document.getElementById("img-0").setAttribute("style" , "background-image :url(" + e.target.result + ")" ); 
      document.getElementById("img-0").setAttribute("data-number", i);
      document.getElementById("img-0").setAttribute("data-file", f.name); 			
      }else{
      

              var html = "<div class='filtr-item col-sm-2'><div style='background-image: url(" + e.target.result + ")' data-number='" + i + "' data-file='" + f.name + "' id='img-"+i+"'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
      }  
            }
            reader.readAsDataURL(f);
      

      
            //}
      
          }
      
    }
    
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}

</script>

 @stop @section('footer') @include('footer') @stop

