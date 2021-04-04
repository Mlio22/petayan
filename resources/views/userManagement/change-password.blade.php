@extends('template.profileMaster')
@section('content')
        <div class="row">
          <form action="/change-password" method="post">
          @csrf
          <div class="col1">
            <div class="col1">
             <span class="teks">
                 Ubah Password
              </span>
             <span class="teks1">
                 Password Lama
              </span>
                <div class="col1">
                 <input name="password_before" class="form-control labpa" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <div class="col1">
               <span class="teks2">
                  Password Baru
                </span>
                <div class="col1">
                 <input name="password_after" class="form-control labpa1" type="text" placeholder=" " aria-label="default input example">
                </div>
           </div>
           <a href="#">
            <button class="btn btt"type="submit">Simpan perubahan</button>
          </a>
  
              </div>
            </div>
          </form>
      </div> 
@endsection