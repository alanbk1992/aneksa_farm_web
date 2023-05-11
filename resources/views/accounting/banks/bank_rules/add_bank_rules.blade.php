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
              <li class="breadcrumb-item"><a href="<?= url('accounting/banks') ?>">Kas & Bank</a></li>
              <li class="breadcrumb-item active">Akun</li>
    </h5>



    <!-- Main content -->
    <section class="content" >
	

	  
   <form class="form-horizontal">
   
      <!-- Informasi Produk-->
      <div class="card">

	   
				<div class="card-body">
			
            	<div class="form-group">   
					
              <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Nama Aturan</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama aturan">
                    </div>
              </div>

              <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >untuk</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilihan terima atau kirim">
                    </div>
              </div>

 <div class="col-md-4">
              <div class="form-group">
                      <label for="exampleInputUsername1" class="font-weight-bold" >Akun</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilh akun kas atau bank">
                    </div>
              </div>
			  
            </div>

            <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 20%">
                          Kotak 1
                      </th>
                      <th>
                          Kotak 2
                      </th>
                      <th  style="width: 15%">
                          Kotak 3
                      </th>
                  </tr>
              </thead>         
 
             <tr>

<td>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih Akun">
</td>

<td>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tulis Deskripsi">
</td>

<td>
<input type="text" class="form-control" id="exampleInputUsername1" placeholder="0,00">
</td>


</tr>
</tbody>
</table>
<button type="submit" class="btn btn-info">Tambah Baris</button>
</div>

PILIHAN
Jika
kotak 1 = Pilih deskripsi 
maka 
kotak 2 ada pilihan
- mengandung
- tidak mengandung
- Mulai Dengan
- Kosong
- Sama Dengan
, Jika kotak 1 pilihan Jumlah
maka 
kotak 2 ada pilihan
= , < , <= , > , >= <br>


                      <label for="exampleInputUsername1" class="font-weight-bold" >Catat di jurnal sebagai deposit bank</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilh daftar akun">


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


