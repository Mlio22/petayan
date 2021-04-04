@extends('template.requestMaster')

@section('css')
<link href="css/klik_request_swalayan.css" rel="stylesheet">
@endsection

@section('content')
<span class="nama-form-title1">
    <b>Berhasil Submit Request</b>
</span>
<div class="coltext">
    <span class="nama-form-title2">

    Silahkan menunggu sampai Petani menanggapi request Anda. 
    Email berisi tanggapan Petani dan kesepakatan kontrak kerja akan 
    dikirim maksimal 7 hari kerja.<br><br>

    Pihak Tani Go Green akan menghubungi anda dalam 2 hari, 
    terhitung dari tanggal email tanggapan petani dikirim untuk
    menjelaskan lebih lanjut mengenai kontrak kerja dan 
    mempertemukan anda dengan pihak petani.

    </span>
    <a href="/">
        <button class="btn btn-menu-utama" type="submit"><h5>Kembali ke menu utama</h5></button>
    </a>
</div>

@endsection