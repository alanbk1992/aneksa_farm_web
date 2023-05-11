<!-- <div class="container-fluid page-body-wrapper"> -->

<div class ="main-panel">
<div class = "input-group mb-0">

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <!-- Brand Logo -->

    <div class="accordion-group"></div>

 <div class="navbar-toggler navbar-toggler align-self-center hiden-menu" data-toggle="minimize">
         
        <a href="<?= url('home') ?>" class="nav-link " data-toggle="collapse">
        <i class="mdi mdi-chevron-left menu-icon"></i>
            <span class=" menu-title font-weight-bold text-justify">Sembunyikan Menu</span>
          </a>
</div>

    <!-- Brand Logo -->
   

    <div class="input-group brand" data-toggle="collapse">
    <img src="<?= env('APP_URL') .('resources/images/kbf.png') ?>" alt="Foto Brand" class="rounded-circle"
             style="opacity: .8">
             
  <div class="font-weight-bold brand-text text-justify" >Keenan Bird Farm</div>
</div>

      
  

      <ul class="nav">


        <li class="nav-item">
        <a href="<?= url('home') ?>" class="nav-link">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Home</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-products" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-package-variant-closed menu-icon"></i>
            <span class="menu-title">Master Produk</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-products">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= url('products/add_product') ?>">Tambah Produk</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('products') ?>">Daftar Produk</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-sale" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-shopping menu-icon"></i>
            <span class="menu-title">Penjualan</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-sale">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= url('orders/cashier') ?>">Kasir</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('orders') ?>">Pesanan</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('orders/return') ?>">Retur</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('orders/label') ?>">Label Pengiriman</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-purchase" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-credit-card menu-icon"></i>
            <span class="menu-title">Pembelian</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-purchase">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= url('purchases/purchase_orders') ?>">Pesanan Pembelian</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('purchases/purchase_invoice') ?>">Tagihan Pembelian</a></li>          
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-warehouse" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-city menu-icon"></i>
            <span class="menu-title">Gudang</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-warehouse">
            <ul class="nav flex-column sub-menu">   
              <li class="nav-item"> <a class="nav-link" href="<?= url('warehouse/item_in') ?>">Barang Masuk</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('warehouse/item_out') ?>">Barang Keluar</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('warehouse/stock_opname') ?>">Stock Opname</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('warehouse/internal_transfer') ?>">Internal Transfer</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-promo" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-tag menu-icon"></i>
            <span class="menu-title">Promosi</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-promo">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= url('promo/discount') ?>">Promo Toko</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('promo/combo') ?>">Flexi Combo</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-accounting" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-bank menu-icon"></i>
            <span class="menu-title">Akuntansi</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-accounting">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= url('accounting/banks') ?>">Kas & Bank</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('accounting/accounts') ?>">Daftar Akun</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('accounting/fixed_assets') ?>">Aset Tetap</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('accounting/expenses') ?>">Biaya</a></li>
        </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-contact" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-account-box menu-icon"></i>
            <span class="menu-title">Kontak</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-contact">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= url('contacts/employees') ?>">Karyawan</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('contacts/customers') ?>">Pelanggan</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('contacts/suppliers') ?>">Pemasok</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('contacts/resellers') ?>">Reseller</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('contacts/dropshipers') ?>">Dropshiper</a></li>
        </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-data" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-database menu-icon"></i>
            <span class="menu-title">Master Data</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-data">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= url('inventori') ?>">Inventori</a></li>
       </ul>
          </div>
        </li>
        

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-integration" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Integrasi</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-integration">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= url('marketplace/channel_products') ?>">Channel Produk</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('marketplace/add') ?>">Tambah Toko</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('marketplace') ?>">List Toko</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('marketplace/settings_channel') ?>">Pengaturan Channel</a></li>
             </ul>
          </div>
        </li>

        <li class="nav-item">
        <a href="<?= url('reports') ?>" class="nav-link">
            <i class="mdi mdi-calculator menu-icon"></i>
            <span class="menu-title">Payroll</span>
          </a>
        </li>

        <li class="nav-item">
        <a href="<?= url('reports') ?>" class="nav-link">
            <i class="mdi mdi-chart-line menu-icon"></i>
            <span class="menu-title">Laporan</span>
          </a>
        </li>

        <li class="nav-item">
        <a href="<?= url('settings') ?>" class="nav-link">
            <i class="mdi mdi-settings-box menu-icon"></i>
            <span class="menu-title">Pengaturan</span>
    
          </a>
        </li>

      </ul>
    </nav>

    <!-- <div class="main-panel"> -->
    <div id="content-wrapper" class="content-wrapper">  