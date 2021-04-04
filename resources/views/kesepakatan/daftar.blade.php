<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    @if($loggedAs == 'petani')
    <link href="css/styleKesepakatanPetani.css" rel="stylesheet">
    @elseif($loggedAs == 'swalayan')
    <link href="css/styleKesepakatanSwalayan.css" rel="stylesheet">
    @endif

    <title>Tani Go Green</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">Tani Go Green</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            @if ($loggedAs == 'petani')
            <a href="/daftar-produk">
                <button class="btn btn2" type="submit">
                    <h5>Product Saya</h5>
                </button>
            </a>
            <a href="/daftar-kesepakatan">
              <button class="btn btn1" type="submit">
                <img src = "img/deal.png" alt="deal">
              </button>
            </a>
            @elseif($loggedAs == 'swalayan')
            <a href="#">
              <button class="btn btn2" type="button"><h5>Kesepakatan Saya</h5></button>
            </a>
            @endif
            <a href="/profile">
              <button class="btn btn1" type="submit">
                <img src = "img/user.png" alt="user">
              </button>
            </a>
            <a href="/logout">
              <button class="btn btn3" type="submit"><h5>Logout</h5></button>
            </a>
          </div>
        </div>
      </div>
    </nav>
   <!--Kesepakatan-->
    <div class="Kesepakatan">
      <div class="container-Kesepakatan">
        <div class='wrap-Kesepakatan'>
          <div class="row">
            <div class="col">
              <h1>Kesepakatan Saya</h1>
            </div>
          </div>
          <div class="row">
            <div class="col col-table">
              <table class="table table-borderless">
                <thead>
                  <th scope="col"><h3>No</h3></th>
                  <th scope="col"><h3>Gambar Produk</h3></th>
                  <th scope="col"><h3>Produk</h3></th>
                  <th scope="col"><h3>Swalayan</h3></th>
                  <th scope="col"><h3>Durasi Kesepakatan</h3></th>
                  <th scope="col"><h3>Harga per Kg</h3></th>
                  <th scope="col"><h3>Status</h3></th>
                </thead>
                <tbody>
                  @foreach ($deals as $deal)
                    <tr>
                        <th scope="row"><h3>{{$loop->index + 1}}</h3></th>
                        <td><img src="img/mangga.jpg"></td>
                        <td><h3>{{$deal['nama_produk']}}</h3></td>
                        <td><h3>{{$deal['nama_swalayan']}}</h3></td>
                        <td><h3>{{$deal['durasi_kesepakatan']}}</h3></td>
                        <td><h3>{{$deal['harga_produk']}}</h3></td>
                        <td>
                            @if ($deal['status_kesepakatan'] == 'Sedang Direquest')
                                @if ($loggedAs == 'petani')
                                <a href="/terima-kesepakatan/{{$deal['id']}}">
                                    <button class="btn btn-kondisi-terima" type="button">
                                        <h5>Terima</h5>
                                    </button>
                                </a>
                                <a href="/tolak-kesepakatan/{{$deal['id']}}">
                                    <button class="btn btn-kondisi-tolak" type="button">
                                        <h5>Tolak</h5>
                                    </button>
                                </a>
                                @else
                                <div class="request">
                                    <h4>Sedang Direquest</h4>
                                </div>
                                @endif
                            @elseif($deal['status_kesepakatan'] == 'Aktif')
                            <div class="Aktif">
                                <h4>Aktif</h4>
                            </div>
                            @elseif($deal['status_kesepakatan'] == 'Ditolak')
                            <div class="menolak">
                                <h4>Menolak</h4>
                            </div>
                            @endif
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="pages d-flex justify-content-end">
                <a href="#" class="page">1</a>
                <a href="#" class="page">2</a>
                <a href="#" class="page">3</a>
                <a href="#" class="page">&#8250;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--EndNav-->
    @include('template.header_footer.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>
