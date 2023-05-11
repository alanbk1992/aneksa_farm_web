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

    

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
             
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= url('home') ?>">Home</a></li>
			   <li class="breadcrumb-item"><a href="<?= url('products') ?>">Produk</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
			  
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

 
    </section>

    <!-- Main content -->
    <section class="content" >
	
	  <div class="container" >
	  
   <form class="form-horizontal">
   
      <!-- Informasi Produk-->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Informasi Produk</h3>
        </div>
	
       
	   
     <div class="card-body">

				<div class="form-group">
                    <label for="product_name" class="col-sm-2 col-form-label font-weight-bold">Foto produk</label>
					
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

  

				  
                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label font-weight-bold">Nama Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " id="product_name" placeholder="Masukan nama produk yang ingin dijual" size="large" >
                    </div>
                  </div>
				  
				  
				<div class="form-group row">
				  <label for="description" class="col-sm-2 col-form-label font-weight-bold">Deskripsi</label> 
				<div class="col-sm-10">
				
              <textarea  id="summernote">
			  
              </textarea>
			  </div> 
			   </div>
			   
                  <div class="form-group row">
			<label for="category_name" class="col-sm-2 col-form-label font-weight-bold">Kategori</label>
         <div class="col-sm-10">
					
<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Pilih Kategori</option>
  <option value="1">Sepatu</option>
  <option value="2">Baju</option>
</select>
                    </div>
                  </div>
				  
			<div class="form-group row">
            <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Merk</label>
            <div class="col-sm-10">

		<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Pilih Merk</option>
  <option value="1">Wakai</option>
  <option value="2">Converse</option>
  <option value="3">Dekai</option>
</select>
			
                    </div>
                  </div>
				  

          
                </div>
                <!-- /.card-body -->
				
			
				  
             
                <!-- /.card-footer -->
              </form>
			  
        </div>
		
		
		
		  <!-- Varian-->
		      <div class="card">
		
		 <div class="card-body">
		 
		   <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Varian Produk</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-default float-right font-weight-bold">Tambah</button>
                    </div>
                  </div>
				  
				  
	  <!-- /. end-card-body -->		
	</div>	
  <!-- /.end-card-body -->	
		</div>
		
		
				  <!-- Informasi Penjualan-->
		      <div class="card">
		
		<div class="card-header">
          <h3 class="card-title font-weight-bold">Informasi Penjualan</h3>
        </div>
		
		 <div class="card-body">
		 
		 
				  
				  
				  <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">SKU</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="sku" placeholder="-" >
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Barcode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="barcode" placeholder="-"  >
                    </div>
                  </div>
				  
				<div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Harga Beli</label>
                    <div class="col-sm-10">
					
					<div class="input-group mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Rp</span>
					</div>
					<input type="text" class="form-control" id="price_buy" placeholder="Masukan Harga Modal" aria-label="price_buy" aria-describedby="basic-addon1">
					</div>
                 
                    </div>
                  </div>
				  
				   <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Harga Jual</label>
                    <div class="col-sm-10">
                   	<div class="input-group mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Rp</span>
					</div>
					<input type="text" class="form-control" id="price_sell" placeholder="Masukan Harga Jual" aria-label="price_sell" aria-describedby="basic-addon1">
					</div>
                    </div>
                  </div>
				  
				  	<div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Stok</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="stock" placeholder="0"  >
                    </div>
                  </div>
				  
				  
	  <!-- /. end-card-body -->		
	</div>	
  <!-- /.end-card-body -->	
		</div>
		
		  <!-- Berat & Ukuran-->
		      <div class="card">
		
		<div class="card-header">
          <h3 class="card-title font-weight-bold">Berat & Ukuran</h3>
        </div>
		
		 <div class="card-body">
		 
		 <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Berat Produk</label>
                    <div class="col-sm-3">
					
					<div class="input-group mb-3">
					<input type="text" class="form-control" id="weight" placeholder="Berat Produk" aria-label="weight" aria-describedby="basic-addon1">
					<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">gram</span>
					</div>
					</div>
					
                    </div>
                  </div>
				  
				  
				  <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Ukuran Produk</label>
                    <div class="col-sm-10 px-1">
					
					<div class="input-group">
					
                    <div class="input-group mb-3 col-sm-2">
					<input type="text" class="form-control" id="weight" placeholder="Panjang" aria-label="weight" aria-describedby="basic-addon1">
					<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">cm</span>
					</div>
					</div>
					
					    <div class="input-group mb-3 col-sm-2">
					<input type="text" class="form-control" id="weight" placeholder="Lebar" aria-label="weight" aria-describedby="basic-addon1">
					<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">cm</span>
					</div>
					</div>
					
					
					<div class="input-group mb-3 col-sm-2">
					<input type="text" class="form-control" id="weight" placeholder="Tinggi" aria-label="weight" aria-describedby="basic-addon1">
					<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">cm</span>
					</div>
					</div>
					
					 </div>
					 
                    </div>
                  </div>
				  
				  
				  
	  <!-- /. end-card-body -->		
	</div>	
  <!-- /.end-card-body -->	
		</div>
		
		
				  <!-- Lainnya-->
		      <div class="card">
		
		<div class="card-header">
          <h3 class="card-title font-weight-bold">Lainnya</h3>
        </div>
		
		 <div class="card-body">
		 
		 
		 <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Status Produk</label>
                    <div class="col-sm-10">
					
                   	<div class="form-check form-switch col-sm-2 mt-2">
					<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
					<label class="form-check-label" for="flexSwitchCheckDefault">Aktif</label>
					</div>
					
                    </div>
                  </div>
				  
				  
		 <div class="form-group row">
                    <label for="condition" class="col-sm-2 col-form-label font-weight-bold" id="condition">Kondisi</label>
                    <div class="col-sm-10">
				
				<div class="input-group">				
               <div class="form-check col-sm-2 mt-2">
				<input class="form-check-input" type="radio" name="new" id="new">
				<label class="form-check-label" for="new">
				Baru
				</label>
				</div>
				
				<div class="form-check col-sm-2 mt-2">
				<input class="form-check-input" type="radio" name="used" id="used" checked>
				<label class="form-check-label" for="used">
				Bekas
				</label>
				</div>
				
				</div>
				
                  </div>
                  </div>
				  
				  
				  <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">PreOrder</label>
                    <div class="col-sm-10">
					
				<div class="input-group">				
               <div class="form-check col-sm-2 mt-2">
				<input class="form-check-input" type="radio" name="new" id="new">
				<label class="form-check-label" for="new">
				Ya
				</label>
				</div>
				
				<div class="form-check col-sm-2 mt-2">
				<input class="form-check-input" type="radio" name="used" id="used" checked>
				<label class="form-check-label" for="used">
				Tidak
				</label>
				</div>
				
				</div>
					
                    </div>
                  </div>
				  
				  
				  
	  <!-- /. end-card-body -->		
	</div>	
  <!-- /.end-card-body -->	
		</div>
		
		
		
		   <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
				   <button type="submit" class="btn btn-default float-right">Simpan & Tambah Baru</button>
                  <button type="submit" class="btn btn-default float-right">Batal</button>
                </div>
				
				
        <!-- /.card-body -->
   
      <!-- /.card -->
</div>
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


