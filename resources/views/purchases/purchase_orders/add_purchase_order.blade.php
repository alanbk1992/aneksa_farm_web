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

    

    <!-- Content Header (Page header) -->


            <h5 class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="<?= url('home') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= url('purchases/purchase_orders') ?>">Pesanan Pembelian</a></li>
              <li class="breadcrumb-item active">Tambah Pesanan Pembelian</li>
    </h5>



    <!-- Main content -->
    <section class="content" >
	

	  
   <form class="form-horizontal">
   
      <!-- Informasi Produk-->
      <div class="card">

	   
				<div class="card-body">
			
            	<div class="form-group">   
					
              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Pemasok</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih Akun Supplier">
                    </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >No Transaksi</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Auto">
                    </div>
              </div>

            </div>
<!-- end row -->

<div class="row">
              <div class="col-md-6">
              <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Tanggal Transaksi</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="31/10/2022">
                    </div>
              </div>

              <div class="col-md-6">
              <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Syarat Pembayaran</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilihan Net 30 dll">
                    </div>

              </div>

            </div>
	<!-- end row -->		  
	 

                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >No Referensi</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilihan Gudang">
                    </div>

                    
                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Tag</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="-">
                    </div>

                   

                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Pesan</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="-">
                    </div>

      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Scan barcode">
         <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 20%">
                          Produk
                      </th>
                      <th  style="width: 15%">
                          Kuantitas
                      </th>
                      <th style="width: 15%">
                          Satuan
                      </th>
                      <th style="width: 15%">
                          Harga Satuan
                      </th>
                    
                      <th style="width: 15%">
                          Jumlah
                      </th>
                  </tr>
              </thead>         
 
             <tr>

<td>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih Produk">
</td>

<td>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tulis Deskripsi">
</td>

<td>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tulis Kuantitas">
</td>

<td>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilihan Satuan">
</td>

<td>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="-">
</td>
</tr>
</tbody>
</table>
<button type="submit" class="btn btn-info">Tambah Baris</button>
</div>




<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Sub Total</label>
<label for="exampleInputUsername1" class="font-weight-bold" >Rp 0.00</label>
</div>

<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Diskon Perbaris</label>
<label for="exampleInputUsername1" class="font-weight-bold" >Rp 0.00</label>
</div>

<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Total</label>
<label for="exampleInputUsername1" class="font-weight-bold" >Rp 0.00</label>
</div>


<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Uang Muka</label>
<label for="exampleInputUsername1" class="font-weight-bold" >Rp 0.00</label>
</div>

<div class="form-group">
<label for="exampleInputUsername1" class="font-weight-bold" >Sisa Tagihan</label>
<label for="exampleInputUsername1" class="font-weight-bold" >Rp 0.00</label>
</div>

<label for="formFileMultiple" class="form-label">Lampiran</label>
<input class="form-control" type="file" id="formFileMultiple" multiple />	

</div>
</div>


		
		   <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                </div>
				
				
        <!-- /.card-body -->
     
      <!-- /.card -->
	  </div>
	   </form>
</div>

    </section>


	

 

	
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


