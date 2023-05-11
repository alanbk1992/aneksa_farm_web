@extends('layout')

@section('header')
    @include('header')
@stop

@section('sidebar')
    @include('sidebar')
@stop

@section('navbar')
    @include('navbar')
@stop



@section('body')

 <!-- Content Wrapper. Contains page content -->
 <!-- <div class="row"> -->
    <!-- Content Header (Page header) -->

    <h5 class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="<?= url('home') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= url('contacts/customers') ?>">Pemasok</a></li>
              <li class="breadcrumb-item active">Tambah Pemasok</li>
    </h5>
    


    <!-- Main content -->
    <section class="content" >
	
	  <div class="container" >
	  
   <form class="form-horizontal">
   
      <!-- Informasi Produk-->
<div class="card">

<div class="card-header">
          <h3 class="card-title font-weight-bold">Informasi Umum</h3>
        </div>

<div class="card-body">

				<div class="form-group">
                    <label for="product_name" class="col-sm-2 col-form-label font-weight-bold">Foto Profil</label>
					
<div class="col-sm-10 px-0" >
		

<div class="upload__box card-body">
  <div class="upload__btn-box">
    <label class="upload__btn">

      <input type="file" multiple="" data-max_length="20" accept="image/jpeg, image/jpg, image/x-png, image/png" class="upload__inputfile">
    </label>
  </div>
  

                  <div class="upload__img-wrap filter-container p-0 row">
				  
                    <div class="filtr-item col-sm-2">
					<div id="img-0"> </div> 
                    </div>
					
					
                  </div>
				  
    </div>

  </div>

  <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Nama Panggilan</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Auto">
                    </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Nama Depan</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="29/10/2022">
                    </div>
              </div>


            </div>
<!-- end row -->


<div class="row">
              <div class="col-md-6">
              <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Nama Belakang</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="29/10/2022">
                    </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Nama Perusahaan</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Rp. 0,00">
                    </div>
              </div>      

              
              <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >NPWP</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Rp. 0,00">
                    </div>
              </div>    

              <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >No Handphone</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Rp. 0,00">
                    </div>
              </div>           

            </div>
<!-- end row -->

<div class="row">
              <div class="col-md-6">
              <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Identitas</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih KTP / SIM">
                    </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group">

                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="No Identitas">
                    </div>
              </div>           

            </div>
<!-- end row -->
<div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Email</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih KTP / SIM">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Alamat Pembayaran</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="-">
                    </div>                   

                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Alamat Pengiriman</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="-">
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
<label for="exampleInputUsername1" class="font-weight-bold" >Akun Hutang</label>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih daftar akun kategori hutang">
</div>

<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Akun Piutang</label>
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
<label for="exampleInputUsername1" class="font-weight-bold" >Nama Bank</label>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih daftar akun kategori hutang">
</div>

<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Kantor Cabang</label>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih daftar akun kategori piutang">
</div>

<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Nama Pemegang Akun</label>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih daftar akun kategori piutang">
</div>

<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Nomor Rekening</label>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih daftar akun kategori piutang">
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
  <script src="../public/js/summernote/summernote-bs4.min.js"></script>
    <script src="../public/js/summernote/summernote-bs4.min.css"></script>
  <script>
  
  
  $(function () {
    // Summernote
    $('#summernote').summernote()


    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"


    });
	

  })
</script>

  <script>


LoadProducts();

 function LoadProducts(SearchProductall , SearchSize){
  
    var displayProduct = 10;
    var Page = 1;
  $('#ResultProductall').html(createSkeleton(displayProduct));
  
    setTimeout(function(){
      LoadProducts(displayProduct);
    }, 100);

    function createSkeleton(limit){
      var skeletonHTML = '';
      for(var i = 0; i < limit; i++){
        skeletonHTML += '<div class="ph-item">';
        skeletonHTML += '<div class="ph-col-4">';
        skeletonHTML += '<div class="ph-picture"></div>';
        skeletonHTML += '</div>';
        skeletonHTML += '<div>';
        skeletonHTML += '<div class="ph-row">';
        skeletonHTML += '<div class="ph-col-12 big"></div>';
        skeletonHTML += '<div class="ph-col-12"></div>';
        skeletonHTML += '<div class="ph-col-12"></div>';
        skeletonHTML += '<div class="ph-col-12"></div>';
        skeletonHTML += '<div class="ph-col-12"></div>';
        skeletonHTML += '</div>';
        skeletonHTML += '</div>';
        skeletonHTML += '</div>';
      }
      return skeletonHTML;
    }
  
    function LoadProducts(limit){
    
       $.ajax({
     url:'<?= url('products/load_products') ?>',
        method:"POST",
    //data: '{"Search":"'+ Search +'","Page": Page}',
        data:{action: '<?= url('products/load_products') ?>', limit:limit , "Search":SearchProductall,"SearchSize":SearchSize,"Page": Page},
        success:function(data) {
      $('#ResultProductall').html(data); 
        }
      });
  

    }
    
}


</script>


@stop

@section('footer')
  @include('footer')
@stop


