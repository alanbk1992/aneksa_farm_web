<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
              <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
			   <li class="breadcrumb-item"><a href="<?= base_url('products') ?>">Produk</a></li>
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
				
				<div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Foto produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="product_name" >
                    </div>
                  </div>
				  
                  <div class="form-group row">
                    <label for="product_name" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="product_name" >
                    </div>
                  </div>
				  
				  
				<div class="form-group row">
				  <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label> 
				<div class="col-sm-10">
				
              <textarea id="summernote">
			  
              </textarea>
			  </div> 
			   </div>
			   
                  <div class="form-group row">
                    <label for="category_name" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category_name">
                    </div>
                  </div>
				  
				   <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
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
                    <label for="brand" class="col-sm-2 col-form-label">Varian Produk</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-default float-right">Tambah</button>
                    </div>
                  </div>
				  
				  
	  <!-- /. end-card-body -->		
	</div>	
  <!-- /.end-card-body -->	
		</div>
		
		
				  <!-- Informasi Penjualan-->
		      <div class="card">
		
		<div class="card-header">
          <h3 class="card-title">Informasi Penjualan</h3>
        </div>
		
		 <div class="card-body">
		 
		 
				  
				  
				  <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">SKU</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Barcode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  
				<div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Harga Beli</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  
				   <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Harga Jual</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  
				  	<div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  
				  
	  <!-- /. end-card-body -->		
	</div>	
  <!-- /.end-card-body -->	
		</div>
		
		  <!-- Berat & Ukuran-->
		      <div class="card">
		
		<div class="card-header">
          <h3 class="card-title">Berat & Ukuran</h3>
        </div>
		
		 <div class="card-body">
		 
		 <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Berat Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  
				  
				  <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Ukuran Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  
				  
				  
	  <!-- /. end-card-body -->		
	</div>	
  <!-- /.end-card-body -->	
		</div>
		
		
				  <!-- Lainnya-->
		      <div class="card">
		
		<div class="card-header">
          <h3 class="card-title">Lainnya</h3>
        </div>
		
		 <div class="card-body">
		 
		 
		 <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Status Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  
				  
		 <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
                    </div>
                  </div>
				  
				  
				  <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">PreOrder</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="brand" >
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
  </div>
  <!-- /.content-wrapper -->

  <!--/.Java Script -->
  <script src="../public/js/summernote/summernote-bs4.min.js"></script>
  
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
     url:'<?= base_url('products/load_products') ?>',
        method:"POST",
    //data: '{"Search":"'+ Search +'","Page": Page}',
        data:{action: '<?= base_url('products/load_products') ?>', limit:limit , "Search":SearchProductall,"SearchSize":SearchSize,"Page": Page},
        success:function(data) {
      $('#ResultProductall').html(data); 
        }
      });
  

    }
    
}


</script>


<?= $this->endSection() ?>
