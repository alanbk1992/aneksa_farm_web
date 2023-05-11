


    <!-- Main content -->
    <section class="content px-0 pt-0 pb-0" >
	

	  
   <form class="form-horizontal">
   
      <!-- Informasi Produk-->
      <div class="card">

	   
				<div class="card-body">
			
            	<div class="form-group">   
					
                <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Logo Perusahaan</label>
                    <div class="col-sm-10">
                    <label for="product_name" class="col-sm-2 col-form-label">-</label>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                    <label for="product_name" class="col-sm-2 col-form-label">-</label>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Alamat perusahaan</label>
                    <div class="col-sm-10">
                    <label for="product_name" class="col-sm-2 col-form-label">-</label>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Nomor telepon</label>
                    <div class="col-sm-10">
                    <label for="product_name" class="col-sm-2 col-form-label">-</label>
                    </div>
                  </div>
		  
	 
                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Alamat pengiriman</label>
                    <div class="col-sm-10">
                    <label for="product_name" class="col-sm-2 col-form-label">-</label>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">NPWP</label>
                    <div class="col-sm-10">
                    <label for="product_name" class="col-sm-2 col-form-label">-</label>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Fax</label>
                    <div class="col-sm-10">
                    <label for="product_name" class="col-sm-2 col-form-label">-</label>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <label for="product_name" class="col-sm-2 col-form-label">-</label>
                    </div>
                  </div>
       
                </div>
    
            </div>
		

		
		   <div class="card-footer">
                  <button type="submit" class="btn btn-info">Edit</button>
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




