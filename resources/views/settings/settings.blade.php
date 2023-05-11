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
              <li class="breadcrumb-item active">Pengaturan</li>
    </h5>
                           
    <section class="content" >
    
    <div class="input-group">




            
<div class="col-md-2">	
<div class="list-group">
<a href="#custom-tabs-company-content" data-toggle="pill" id="custom-tabs-company-tab" class="active list-group-item list-group-item-action" role="tab" aria-controls="custom-tabs-company-content">Perusahaan</a>
<a  href="#custom-tabs-master-data-content" data-toggle="pill" id="custom-tabs-master-data-tab" class="list-group-item list-group-item-action" role="tab" aria-controls="custom-tabs-master-data-content">Master Data</a>
<a  href="#custom-tabs-master-data-content" data-toggle="pill" id="custom-tabs-master-data-tab" class="list-group-item list-group-item-action" role="tab" aria-controls="custom-tabs-master-data-content">Pengiriman</a>


</div>
</div>



            <div class="col-md-10">
			
                <div class="tab-content" id="custom-tabs-tabContent">

                  <div class="tab-pane fade show active" id="custom-tabs-company-content" role="tabpanel" aria-labelledby="custom-tabs-company-tab">

 
                <div id="ResultCompany"></div> 

                  </div>

                  <div class="tab-pane fade" id="custom-tabs-master-data-content" role="tabpanel" aria-labelledby="custom-tabs-master-data-tab">


                  <div id="ResultReadToShip"></div> 

                  </div>





                </div>
            </div>

</div>
<!-- end group			 -->



   
    </section>
    <!-- /.content -->


 

<script>

//Funcion Pending Order
function fragmentCompany(){

var displayCompany = 5;
  $('#ResultCompany').html(createSkeleton(displayCompany));
  
    setTimeout(function(){
      fragmentCompany(displayCompany);
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
  
    function fragmentCompany(limit){
      $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

$.ajax({
     url:'<?= url('settings/fragments/fragment_company') ?>',
        method:"GET",
    //data: '{"Search":"'+ Search +'","Page": Page}',
        data:{action: '<?= url('settings/fragments/fragment_company') ?>'},
        success:function(data) {
      $('#ResultCompany').html(data); 
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
fragmentCompany();
 //

 $(document).on("click", "#custom-tabs-company-tab", function () {
  
  fragmentCompany();
 });
 
 $(document).on("click", "#custom-tabs-master-data-tab", function () {
 
  loadRTS();
 });
 


</script>




@stop

@section('footer')
  @include('footer')
@stop
