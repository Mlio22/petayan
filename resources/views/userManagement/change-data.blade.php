@extends('template.profileMaster')
@section('content')
        <div class="row">
          <form action="/change-data" method="post">
          @csrf
          <div class="col1">
            <div class="col1">
             <span class="teks">
                 Data Diri
              </span>
             <span class="teks1">
                 Nama
              </span>
                <div class="col1">
                 <input value={{$datas->nama}} name="name" class="form-control lab" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks2">
                  Email
                </span>
                <div class="col1">
                 <input value={{$datas->email}} name="email" class="form-control lab1" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks3">
                   No HP
                </span>
                <div class="col1">
                 <input value={{$datas->nomor_telpon}} name="noHp" class="form-control lab2" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks4">
                   Provinsi
                </span>
                <div class="col1">
                 <input value={{$datas->lokasi_provinsi}} name="lokasi_provinsi" class="form-control lab3" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks5">
                   Kabupaten
                </span>
                <div class="col1">
                 <input value={{$datas->lokasi_kabupaten}} name="lokasi_kabupaten" class="form-control lab4" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks6">
                   Alamat
                </span>
                <div class="col1">
                 <input value={{$datas->lokasi_deskripsi}} name="lokasi_deskripsi" class="form-control lab5" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks7">
                   Foto Profile
                </span>
                <a href="#">
                    <button class="btn bbf"type="submit">Choose file</button>
                  </a>
           </div>
           <div class="col3">
            <a href="#">
                <button class="btn bbe"type="submit">Simpan Perubahan</button>
              </a>
           </div>
              </div>
            </form>
      </div>
@endsection