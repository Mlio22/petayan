@extends('template.profileMaster')
@section('content')
        <div class="row">
          <div class="col1">
            <div class="col1">
             <span class="teks">
                 Data Diri
              </span>
             <span class="teks1">
                 Nama
              </span>
                <div class="col1">
                 <input readonly value={{$datas->nama}} value='a' class="form-control lab" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks2">
                  Email
                </span>
                <div class="col1">
                 <input readonly value={{$datas->email}} class="form-control lab1" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks3">
                   No HP
                </span>
                <div class="col1">
                 <input readonly value={{$datas->nomor_telpon}} class="form-control lab2" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks4">
                   Provinsi
                </span>
                <div class="col1">
                 <input readonly value={{$datas->lokasi_provinsi}} class="form-control lab3" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks5">
                   Kabupaten
                </span>
                <div class="col1">
                 <input readonly value={{$datas->lokasi_kabupaten}} class="form-control lab4" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks6">
                   Alamat
                </span>
                <div class="col1">
                 <input readonly value={{$datas->lokasi_deskripsi}} class="form-control lab5" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col3">
                <div class="gambar">
                  <img src="img/Frame (1).svg" alt="IMG">
                </div>
           </div>
              </div>
            
@endsection