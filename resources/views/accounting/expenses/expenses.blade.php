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




<h5 class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="<?= url('home') ?>">Home</a></li>
              <li class="breadcrumb-item active">Biaya</li>
    </h5>
                           
    <section class="content" >
    
    <!-- Default box -->
    <div class="card">
      <div class="input-group card-header ">

     <div class="col-sm-6">
      <h3 class=" justify-content-center">Biaya</h3>
    </div>

      <div class="col-sm-6">
    <div class="card-tools float-sm-right">

          <a title="Tambah Produk"  class="btn btn-sm btn-primary" href="<?= url('accounting/expenses/add_expenses') ?>">Tambah Biayaw</a>  
          
          </button>

          <a title="Tambah Produk"  class="btn btn-sm btn-primary" href="<?= url('accounting/accounts/add_account') ?>">Print</a>  
          
          </button>

        </div>
        </div>
 
      </div>

   
 

            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-orders-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-orders-pending-tab" data-toggle="pill" href="#custom-tabs-orders-pending-content" role="tab" aria-controls="custom-tabs-orders-pending-content" aria-selected="true" >Biaya</a>
                  </li>
                  <li class="nav-item">

                    <a class="nav-link" id="custom-tabs-orders-readytoship-tab" data-toggle="pill" href="#custom-tabs-orders-readytoship-content" role="tab" aria-controls="custom-tabs-orders-readytoship-content" aria-selected="false" >Membutuhkan Persetujuan</a>
                  </li>

                </ul>
              </div>

<div class="form-group">   
<div class="row">

<div class="col-md-4">			  
<div class="card">
		
		<div class="card-header">
          <h3 class="card-title font-weight-bold">Total Biaya Bulan Ini</h3>
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
          <h3 class="card-title font-weight-bold">Biaya 30 Hari Terakhir</h3>
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
          <h3 class="card-title font-weight-bold">Biaya Belum Dibayar</h3>
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
				  
				 
				  
				 
            
                <div class="tab-content" id="custom-tabs-orders-tabContent">

                  <div class="tab-pane fade show active" id="custom-tabs-orders-pending-content" role="tabpanel" aria-labelledby="custom-tabs-orders-pending-tab">

 
                <div id="ResultPending"></div> 

                  </div>

                  <div class="tab-pane fade" id="custom-tabs-orders-readytoship-content" role="tabpanel" aria-labelledby="custom-tabs-orders-readytoship-tab">


                  <div id="ResultReadToShip"></div> 

                  </div>





                  
                </div>
              
              <!-- /.card -->
            </div>
          </div>

                    
   
   </div>
   
    </section>
    <!-- /.content -->


 

<script>

//Funcion Pending Order
function loadPending(){

var displayProduct = 5;
  $('#ResultPending').html(createSkeleton(displayProduct));
  
    setTimeout(function(){
      loadPending(displayProduct);
    }, 0);

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
  
    function loadPending(limit){
      $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

      $.ajax({
          url:'<?= url('orders/load_pending') ?>',
        method:"POST",
        data:{action: 'load_pending', limit:limit},
        success:function(data) {
          $('#ResultPending').html(data);
        }
      });
    }
}
///

//Funcion Pending Order
function loadRTS(){

var displayProduct = 5;
  $('#ResultReadToShip').html(createSkeleton(displayProduct));
  
    setTimeout(function(){
      loadRTS(displayProduct);
    }, 0);

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
  
    function loadRTS(limit){
      $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

      $.ajax({
          url:'<?= url('orders/load_rts') ?>',
        method:"POST",
        data:{action: 'load_rts', limit:limit},
        success:function(data) {
          $('#ResultReadToShip').html(data);
        }
      });
    }
}
///





//Default load
loadPending();
 //

$(document).on("click", "#custom-tabs-orders-pending-tab", function () {
  
 loadPending();
});

$(document).on("click", "#custom-tabs-orders-readytoship-tab", function () {

 loadRTS();
});






</script>




@stop

@section('footer')
  @include('footer')
@stop
