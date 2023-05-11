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

 <!-- Content Wrapper. Contains page content -->
 <!-- <div class="row"> -->
    <!-- Content Header (Page header) -->

<h5 class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="<?= url('home') ?>">Home</a></li>
<li class="breadcrumb-item active">Laporan</li>
</h5>
    

<!-- Main content -->
<section class="content" >
	
<div class="container" >
	  
   

<div class="form-group">  

<div class="row">
<!-- group Finansial -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Finansial
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Neraca</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Arus Kas</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Laba Rugi</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Perubahan Modal</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Ringkasan Ekskutif</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Hutang Piutang Per kontak</a>
</div>
</div>
<!-- end group -->

<!-- group Akutansi -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Akutansi
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Ringkasan Bank</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Buku Besar</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Jurnal</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Trial Balance</a>
</div>
</div>
<!-- end group -->

<!-- group Inventori -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
Inventori
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Ringkasan Inventori</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pergerakan Stok Inventori</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Ringkasan Stok Gudang</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pergerakan Stok Gudang</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Laporan Produksi</a>
</div>
</div>
<!-- end group -->

</div>
<!-- end row -->

<div class="row mt-4">

<!-- group Penjualan -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Penjualan
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Detail Penjualan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Umur Piutang</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Laba Rugi</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Tagihan Pelanggan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Profitabilitas Produk</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Profitabilitas per Tagihan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pendapatan per Pelanggan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Penjualan per Produk</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pemesanan per Produk</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Penjualan per Sales Person</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pengiriman Penjualan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Ongkos Kirim per Ekspedisi</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pelunasan Pembayaran Tagihan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Penjualan per Kategori Tagihan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Penjualan Produk per Pelanggan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Penjualan per Periode</a>
</div>
</div>
<!-- end group -->

<!-- group Pembelian -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Pembelian
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Detail Pembelian</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Umur Hutang</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Tagihan Vendor</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pembelian per Produk</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pembelian per Vendor</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pengiriman Pembelian</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pelunasan Pembayaran Tagihan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pembelian Produk per Vendor</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pembelian per Periode</a>
</div>
</div>
<!-- end group -->

<!-- group Biaya -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Biaya
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Biaya per Kontak</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Detail Klaim Biaya</a>
</div>
</div>
<!-- end group -->

</div>
<!-- end row -->

<div class="row mt-4">
<!-- group Pajak -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Pajak
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pajak Penjualan</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pajak Pemotongan</a>
</div>
</div>
<!-- end group -->



<!-- group Aset Tetap -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Aset Tetap
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Ringkasan Aset Tetap</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Detail Aset Tetap</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Pelepasan Aset</a>
</div>
</div>
<!-- end group -->

<!-- group Anggaran -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Pajak
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Manajemen Anggaran</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Anggaran Laba Rugi</a>
</div>
</div>
<!-- end group -->
</div>
<!-- end row -->

<div class="row mt-4">
<!-- group Lain - lain -->
<div class="col-md-4">	
<div class="list-group">
<div class="list-group-item list-group-item-action active">
  Lain - lain
</div>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Attachment</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Ekspor</a>
<a href="<?= url('home') ?>" class="list-group-item list-group-item-action">Import</a>
</div>
</div>
<!-- end group -->

</div>
<!-- end row -->

</div>



</section>




@stop

@section('footer')
  @include('footer')
@stop


