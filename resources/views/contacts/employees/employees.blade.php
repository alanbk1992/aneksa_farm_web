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
              <li class="breadcrumb-item active">Karyawan</li>
    </h5>
    

    <section class="content" >
    
      <!-- Default box -->
      <div class="card">
        <div class="input-group card-header ">

       <div class="col-sm-6">
        <h3 class=" justify-content-center">Karyawan</h3>
      </div>

        <div class="col-sm-6">
      <div class="card-tools float-sm-right">

                     


            <a title="Tambah Produk"  class="btn btn-sm  btn-primary" href="<?= url('contacts/employees/add_employee') ?>">Tambah Karyawan</a>  
            
            </button>

            <a title="Tambah Produk"  class="btn btn-sm  btn-primary" href="<?= url('accounting/banks/add_account_bank') ?>">Print</a>  
            
            </button>
        
          </div>
          </div>
   
        </div>




<div class="form-group row mt-4 mx-4 pb-0">

	

    <div role="button" class="card rounded-top mb-3 mr-2" tabindex="-1"style="min-width: 200px;">
      <div class="d-flex align-items-center px-3 pb-3 pt-3">
        <div class="rounded-circle px-3 pb-2 pt-2 mr-2" style="background-color: rgb(255, 191, 70);">0</div>
        <div>
          <div class="font-weight-bold" style="white-space: nowrap;">Rp 0</div>
          <div class="style_newTitle__101gV" style="white-space: nowrap;">Total Hutang</div>
        </div>
      </div>
    </div>

  

    <div role="button" class="card rounded-top mb-3 mx-2" tabindex="-1" style="min-width: 200px;">
      <div class="d-flex align-items-center px-3 pb-3 pt-3">
        <div class="rounded-circle px-3 pb-2 pt-2 mr-2" style="background-color: rgb(255, 70, 104);">0</div>
        <div>
          <div class="font-weight-bold" style="white-space: nowrap;">Rp 0</div>
          <div class="style_newTitle__101gV" style="white-space: nowrap;">Total Piutang</div>
        </div>
      </div>
    </div>

  

    <div role="button" class="card rounded-top mb-3 mx-2" tabindex="-1" style="min-width: 200px;">
      <div class="d-flex align-items-center px-3 pb-3 pt-3">
        <div class="rounded-circle px-3 pb-2 pt-2 mr-2" style="background-color: rgb(254, 116, 69);">0</div>
        <div>
          <div class="font-weight-bold" style="white-space: nowrap;">Rp 0</div>
          <div class="style_newTitle__101gV" style="white-space: nowrap;">Hutang Jatuh Tempo</div>
        </div>
      </div>
    </div>
 
  

    <div role="button" class="card rounded-top mb-3 mx-2" tabindex="-1" style="min-width: 200px;">
      <div class="d-flex align-items-center px-3 pb-3 pt-3">
        <div class="rounded-circle px-3 pb-2 pt-2 mr-2" style="background-color: rgb(70, 111, 255);">0</div>
        <div>
          <div class="font-weight-bold" style="white-space: nowrap;">Rp 0</div>
          <div class="style_newTitle__101gV" style="white-space: nowrap;">Piutang Jatuh Tempo</div>
        </div>
      </div>
    </div>

  

    <div role="button" class="card  rounded-top mb-3 mx-2" tabindex="-1" style="min-width: 200px;">
      <div class="d-flex align-items-center px-3 pb-3 pt-3">
        <div class="rounded-circle px-3 pb-2 pt-2 mr-2" style="background-color: rgb(254, 71, 203);">0</div>
        <div>
          <div class="font-weight-bold" style="white-space: nowrap;">Rp 0</div>
          <div class="style_newTitle__101gV" style="white-space: nowrap;">Pembayaran Diterima</div>
        </div>
      </div>
    </div>

  

    <div role="button" class="card rounded-top mb-3 ml-2" tabindex="-1" style="min-width: 200px;">
      <div class="d-flex align-items-center px-3 pb-3 pt-3">
        <div class="rounded-circle px-3 pb-2 pt-2 mr-2" style="background-color: rgb(43, 206, 38);">0</div>
        <div>
          <div class="font-weight-bold" style="white-space: nowrap;">Rp 0</div>
          <div class="style_newTitle__101gV" style="white-space: nowrap;">Pembayaran dikirim</div>
        </div>
      </div>
    </div>

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



