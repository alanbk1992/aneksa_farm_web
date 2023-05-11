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
              <li class="breadcrumb-item active">Kas & Bank</li>
    </h5>
    

    <section class="content" >
    
      <!-- Default box -->
      <div class="card">
        <div class="input-group card-header ">

       <div class="col-sm-6">
        <h3 class=" justify-content-center">Aturan Pencocokan</h3>
      </div>

        <div class="col-sm-6">
      <div class="card-tools float-sm-right">



            <a title="Tambah Produk"  class="btn btn-primary btn-sm " href="<?= url('accounting/banks/bank_rules/add_bank_rules') ?>">Buat Aturan Baru</a>  
            
            </button>

       
          </div>
          </div>
   
        </div>


        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                      No
                      </th>
                      <th style="width: 30%">
                      Terapkan ke
                      </th>
                      <th style="width: 20%">
                      Nama Aturan
                      </th>
                      <th style="width: 20%">
                      Kondisi Pencocokan
                      </th>
                      <th style="width: 10%" class="text-center">
                      Catat Sebagai
                      </th>
                      <th style="width: 10%" class="text-center">
                      Catat Otomatis
                      </th>
                      <th style="width: 10%" class="text-center">
                      Tindakan
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



