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
              <li class="breadcrumb-item active">Aset Tetap</li>
    </h5>
                           
    <section class="content" >
    
    <!-- Default box -->
    <div class="card">
      <div class="input-group card-header ">

     <div class="col-sm-6">
      <h3 class=" justify-content-center">Aset Tetap</h3>
    </div>

      <div class="col-sm-6">
    <div class="card-tools float-sm-right">


                    
                   


          <a title="Tambah Produk"  class="btn btn-sm btn-primary" href="<?= url('accounting/fixed_assets/add_fixed_asset') ?>">Tambah Aset Tetap</a>  
          
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
                    <a class="nav-link active" id="custom-tabs-orders-pending-tab" data-toggle="pill" href="#custom-tabs-orders-pending-content" role="tab" aria-controls="custom-tabs-orders-pending-content" aria-selected="true" >Aset Tertunda</a>
                  </li>
                  <li class="nav-item">

                    <a class="nav-link" id="custom-tabs-orders-readytoship-tab" data-toggle="pill" href="#custom-tabs-orders-readytoship-content" role="tab" aria-controls="custom-tabs-orders-readytoship-content" aria-selected="false" >Aset Aktif</a>
                  </li>
				 <li class="nav-item">

                    <a class="nav-link" id="custom-tabs-orders-waitingupdate-tab" data-toggle="pill" href="#custom-tabs-orders-waitingupdate-content" role="tab" aria-controls="custom-tabs-orders-waitingupdate-content" aria-selected="false" >Dijual/Dilepas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-orders-ship-tab" data-toggle="pill" href="#custom-tabs-orders-ship-content" role="tab" aria-controls="custom-tabs-orders-ship-content" aria-selected="false" >Penyusutan</a>
                  </li>
                  
                </ul>
              </div>


            
                <div class="tab-content" id="custom-tabs-orders-tabContent">

                  <div class="tab-pane fade show active" id="custom-tabs-orders-pending-content" role="tabpanel" aria-labelledby="custom-tabs-orders-pending-tab">

 
                <div id="ResultPending"></div> 

                  </div>

                  <div class="tab-pane fade" id="custom-tabs-orders-readytoship-content" role="tabpanel" aria-labelledby="custom-tabs-orders-readytoship-tab">


                  <div id="ResultReadToShip"></div> 

                  </div>

                  <div class="tab-pane fade" id="custom-tabs-orders-waitingupdate-content" role="tabpanel" aria-labelledby="custom-tabs-orders-waitingupdate-tab">


                  <div id="ResultWaitingUpdate"></div> 

                  </div>


                  <div class="tab-pane fade" id="custom-tabs-orders-ship-content" role="tabpanel" aria-labelledby="custom-tabs-orders-ship-tab">

                  <div id="ResultShip"></div> 

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

//Funcion Pending Order
function loadWaitingUpdate(){

var displayProduct = 5;
  $('#ResultWaitingUpdate').html(createSkeleton(displayProduct));
  
    setTimeout(function(){
      loadWaitingUpdate(displayProduct);
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
  
    function loadWaitingUpdate(limit){
      $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

      $.ajax({
          url:'<?= url('orders/load_update') ?>',
        method:"POST",
        data:{action: 'load_update', limit:limit},
        success:function(data) {
          $('#ResultWaitingUpdate').html(data);
        }
      });
    }
}
///

function LoadShip(){

var displayProduct = 5;
  $('#ResultShip').html(createSkeleton(displayProduct));
  
    setTimeout(function(){
      LoadShip(displayProduct);
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
  
    function LoadShip(limit){

      $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});


      $.ajax({
          url:'<?= url('orders/load_ship') ?>',
        method:"POST",
        data:{action: 'load_ship', limit:limit},
        success:function(data) {
          $('#ResultShip').html(data);
        }
      });
    }
}






//Default load
loadPending();
 //

$(document).on("click", "#custom-tabs-orders-pending-tab", function () {
  
 loadPending();
});

$(document).on("click", "#custom-tabs-orders-readytoship-tab", function () {

 loadRTS();
});

$(document).on("click", "#custom-tabs-orders-waitingupdate-tab", function () {

loadWaitingUpdate();
});

$(document).on("click", "#custom-tabs-orders-ship-tab", function () {

LoadShip();
});





</script>




@stop

@section('footer')
  @include('footer')
@stop
