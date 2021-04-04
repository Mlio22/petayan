@extends('template.requestMaster')

@section('css')
<link href="css/klik_setuju_petani.css" rel="stylesheet">
@endsection

@section('content')
<span class="nama-form-title1">
  <b>Anda menyetujui Request</b>
</span>
<div class="coltext">
    <span class="nama-form-title2">
Silahkan membuka Email Anda. Email tersebut berisi kesepakatan kontrak kerja antara Anda dan pihak Swayalan.<br><br>
Pihak Tani Go Green akan menghubungi anda dalam 2 hari, 
terhitung dari tanggal anda mensetujui request ini untuk
menjelaskan lebih lanjut mengenai kontrak kerja dan 
mempertemukan anda dengan pihak swalayan.
</span>
    <a href="/daftar-produk">
        <button class="btn btn-menu-utama" type="submit"><h5>Kembali ke menu utama</h5></button>
    </a>
</div>
@endsection