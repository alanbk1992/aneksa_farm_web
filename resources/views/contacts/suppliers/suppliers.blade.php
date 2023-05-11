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




    <!-- Content Header (Page header) -->


            <h5 class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="<?= url('home') ?>">Home</a></li>
              <li class="breadcrumb-item active">Pemasok</li>
    </h5>
    

    <section class="content" >
    
      <!-- Default box -->
      <div class="card">
        <div class="input-group card-header ">

       <div class="col-sm-6">
        <h3 class=" justify-content-center">Pemasok</h3>
      </div>

        <div class="col-sm-6">
      <div class="card-tools float-sm-right">

                     


            <a title="Tambah Produk"  class="btn btn-sm  btn-primary" href="<?= url('contacts/suppliers/add_supplier') ?>">Tambah Pemasok</a>  
            
            </button>

            <a title="Tambah Produk"  class="btn btn-sm  btn-primary" href="<?= url('accounting/banks/add_account_bank') ?>">Print</a>  
            
            </button>
        
          </div>
          </div>
   
        </div>

        <div class="form-group">   
<div class="row">

<div class="col-md-4">			  
<div class="card">
		
		<div class="card-header">
          <h3 class="card-title font-weight-bold">Total Hutang</h3>
        </div>
		
		 <div class="card-body">
		 
         <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label font-weight-bold">Total</label>
                    <div class="col-sm-10">
                   	<div class="input-group mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Rp</span>
					</div>
					<span class="input-group-text" id="basic-addon1">100.000</span>
					</div>
                    </div>
                  </div>

</div>
</div>		
 </div>
 
<div class="col-md-4">			  
<div class="card">
		
<div class="card-header">
<h3 class="card-title font-weight-bold">Total Piutang</h3>
</div>
		
<div class="card-body">

<div class="form-group row">
<label for="brand" class="col-sm-2 col-form-label font-weight-bold">Total</label>
<div class="col-sm-10">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Rp</span>
</div>
<span class="input-group-text" id="basic-addon1">100.000</span>
</div>
</div>
</div>

</div>
</div>		
</div>

<div class="col-md-4">			  
<div class="card">
		
<div class="card-header">
<h3 class="card-title font-weight-bold">Hutang Jatuh Tempo</h3>
</div>
		
<div class="card-body">

<div class="form-group row">
<label for="brand" class="col-sm-2 col-form-label font-weight-bold">Total</label>
<div class="col-sm-10">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Rp</span>
</div>
<span class="input-group-text" id="basic-addon1">100.000</span>
</div>
</div>
</div>

</div>
</div>		
</div>


<div class="col-md-4">			  
<div class="card">
		
<div class="card-header">
<h3 class="card-title font-weight-bold">Piutang Jatuh Tempo</h3>
</div>
		
<div class="card-body">

<div class="form-group row">
<label for="brand" class="col-sm-2 col-form-label font-weight-bold">Total</label>
<div class="col-sm-10">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Rp</span>
</div>
<span class="input-group-text" id="basic-addon1">100.000</span>
</div>
</div>
</div>

</div>
</div>		
</div>


<div class="col-md-4">			  
<div class="card">
		
<div class="card-header">
<h3 class="card-title font-weight-bold">Pembayaran Diterima</h3>
</div>
		
<div class="card-body">

<div class="form-group row">
<label for="brand" class="col-sm-2 col-form-label font-weight-bold">Total</label>
<div class="col-sm-10">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Rp</span>
</div>
<span class="input-group-text" id="basic-addon1">100.000</span>
</div>
</div>
</div>

</div>
</div>		
</div>

<div class="col-md-4">			  
<div class="card">
		
<div class="card-header">
<h3 class="card-title font-weight-bold">Pembayaran Dikirim</h3>
</div>
		
<div class="card-body">

<div class="form-group row">
<label for="brand" class="col-sm-2 col-form-label font-weight-bold">Total</label>
<div class="col-sm-10">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Rp</span>
</div>
<span class="input-group-text" id="basic-addon1">100.000</span>
</div>
</div>
</div>

</div>
</div>		
</div>



<!-- /. end-card-body -->		
	</div>		 
 <!-- /.end-card-body -->	
</div>	


        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                        Nama
                      </th>
                      <th style="width: 30%">
                      Email
                      </th>
                      <th style="width: 20%">
                      Telpon
                      </th>
                      <th style="width: 20%">
                      Alamat
                      </th>
                      <th style="width: 10%" class="text-center">
                      Hutang
                      </th>
                      <th style="width: 10%" class="text-center">
                      Piutang
                      </th>
                  </tr>
              </thead>
              <tbody id="ResultProductall">
                                   
                  
 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <!-- </div> -->

  <!-- /.content-wrapper -->


  <!--/.Java Script -->
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
      
      $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

       $.ajax({
     url:'<?= url('products/fragment_products') ?>',
        method:"POST",
    //data: '{"Search":"'+ Search +'","Page": Page}',
        data:{action: '<?= url('products/fragment_products') ?>', limit:limit , "Search":SearchProductall,"SearchSize":SearchSize,"Page": Page},
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



