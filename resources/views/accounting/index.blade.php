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
              Daftar Akun
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
              <li class="breadcrumb-item active">Accounts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

 
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
		
        	      <a  title="Filter"  class="btn btn-sm btn-light" href="<?= base_url('products/add_product') ?>"><i class="fa fa-filter"></i> Filter</a>  
            
            </button>

      <div class="card-tools">
	  

	  
	      <a  title="Saldo Awal"  class="btn btn-sm btn-light " href="<?= base_url('products/add_product') ?>"><i class="fa fa-balance-scale "></i> Saldo Awal</a>  
            
            </button>
          <a  title="Tambah Akun"  class="btn btn-sm btn-light" href="<?= base_url('products/add_product') ?>"><i class="fa fa-plus"></i> Tambah Akun</a>  
            
            </button>
          <a   target="_blank" title="Jurnal Umum"  class="btn btn-sm btn-light" href="<?= base_url('v1/products?request=sync_marketplace') ?>"><i class="fa fa-file"></i> Jurnal Umum</a>   
            
            </button>
			 <a   target="_blank" title="Tutup Buku"  class="btn btn-sm btn-light" href="<?= base_url('v1/products?request=sync_marketplace') ?>"><i class="fa fa-home"></i> Tutup Buku</a>   
            
            </button>
			
			<a   target="_blank" title="Print"  class="btn btn-sm btn-light" href="<?= base_url('v1/products?request=sync_marketplace') ?>"><i class="fa fa-print"></i> Print</a>   
            
            </button>
          </div>
          
   
        </div>
        <div class="card-body p-0">
          <table class="table text-xsmall table-hover">
              <thead>
                  <tr>
                      <th style="width: 15%">
                          Kode Akun
                      </th>
                      <th style="width: 65%">
                          Nama
                      </th>
                      <th style="width: 10%">
                          Kategori
                      </th>
                      <th style="width: 10%">
                          Saldo
                      </th>
                  </tr>
              </thead>
              <tbody id="GetAccounts">
                                   
                  
            
            
             
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!--/.Java Script -->
  <script>

GetAccounts();

 function GetAccounts(SearchProductall , SearchSize){
  
    var displayAccounts = 10;
    var Page = 1;
  $('#GetAccounts').html(createSkeleton(displayAccounts));
  
    setTimeout(function(){
      GetAccounts(displayAccounts);
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
  
    function GetAccounts(limit){
    
       $.ajax({
     url:'<?= base_url('accounts/fragments_accounts') ?>',
        method:"POST",
    //data: '{"Search":"'+ Search +'","Page": Page}',
        data:{action: '<?= base_url('accounts/fragments_accounts') ?>', limit:limit , "Search":SearchProductall,"SearchSize":SearchSize,"Page": Page},
        success:function(data) {
      $('#GetAccounts').html(data); 
        }
      });
  

    }
    
}


</script>


<?= $this->endSection() ?>
