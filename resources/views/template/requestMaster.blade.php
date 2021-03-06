<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    @yield('css')

    <title>Tani Go Green</title>
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=enS7nAYd7YsqAPOpLRm1kd3gQgISstPlTUi1-wHCZ0d5iXt2ovaIGXpv9f938-TsxVkuNq9WSYqtapnwNkOUJYXxkTbUzyV7LpSxxBabKeN-6FHLtEiaVr-TqlKv_otmPyrD49QyXzyFrm8XV4cNzunAS--QsDdrVvjzOPrTYIQFfNadjS-wghH3fZBdq6DULtTrdUsndNUTHB4YQpQEYGexgjbcvJyO9bwelT6rmXPWR8PG8sb06fRfd0pHEmTEzGFMlLpJlP3MWdTCjQ7Dj2W8N57nKluqe2hvz8lL_hWTi7AD-RCOQWniz6I_-97_EoSS5vQ1B3OBtY7cks8EL2LHBbPEU0uMtdUHDUGJ3FUuJZXNYxCt4eOG4JY9_-nQKV7I1N46cx-XzE6IBELiXMyVI5I_6T1icjjo9nW_XOWraCVpHd8LrYzO0_3q9yFuB_xD4IiTzJPGIj4XOEGq9Q" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9kb2MtMDAtMGstZG9jcy5nb29nbGV1c2VyY29udGVudC5jb20vZG9jcy9zZWN1cmVzYy9mZDhvdjRzMmdyZGdhbGJhcmFxdjJ0ZjV1N25sa3M0Ni9scTU2bTZ1am1iczZpMjJxMThxOG8wZWphNTRvcHU0di8xNjE3MjkwNDAwMDAwLzE2NDk4ODY5MDAzNTEyNjE5Mzk4LzAxOTgxODQ3NDE3MTAyNDY2MjQyLzE4RGV0R3I1cE9USnVyMEdZN0FIT0NEeXpYLTJrQWhpbj9lPWRvd25sb2FkJmF1dGh1c2VyPTImbm9uY2U9a3ZiODUyMGlnbmplbyZ1c2VyPTAxOTgxODQ3NDE3MTAyNDY2MjQyJmhhc2g9cDdobjFxdnUwdDhqZWRoNWRmdXF0cmZqOTI0Y28yc2Y"/></head>
  <body>
      
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Tani Go Green</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            @if($loggedAs == 'petani')
            <a href="/daftar-produk">
              <button class="btn btn2" type="submit"><h5>Product Saya</h5></button>
            </a>
            @endif
            <a href="/daftar-kesepakatan">
              <button class="btn btn1" type="submit">
                <img src = "img/deal.png" alt="deal">
              </button>
            </a>
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
    
    <!--Body-->
  <div class="dafsu">
    <div class="container-dafsu">
      <div class='wrap-dafsu'>
          <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="dafsu-pic">
                    <img src="img/email.png" alt="IMG">
                    <div class="col">
                        <div class="dafsuloc-pic">
                            <img src="img/telpon.png" alt="IMG">
                        </div>
                    </div>
                </div>
              </div>
              <div class="col">
                @yield('content')
            </div>
        </div>
      </div>
    </div>
  </div>

    <!--Footer-->
    <div class="endNav">
      <div class="container">
        <div class="row">
          <div class='col'>
            <span class="Heading1">
              Tani Go Green
            </span>
          </div>
          <div class='col'>
            <span class="Heading2">
              Cara Kerja
            </span>
            <div class='col'>
              <a class='Heading3' href ='#'>Cara Subscribtion</a>
            </div>
          </div>
          <div class='col'>
            <span class="Heading2">
              Tentang Kami
            </span>
            <div class='col'>
              <a class='Heading3' href ='#'>Tentang Kami</a>
              
            </div>
            <div class='col1'>
              <a class='Heading3' href ='#'>Kontak Kami</a>
            </div>
          </div>
          <div class='col'>
            <span class="Heading2">
              Panduan
            </span>
            <div class='col'>
              <a class='Heading3' href ='#'>Syarat & ketentuan Swalayan</a>
              <br>
            </div>
            <div class='col1'>
              <a class='Heading3' href ='#'>Syarat & ketentuan Petani</a>
            </div>
            <div class='col1'>
              <a class='Heading3' href ='#'>Kebijakan Privasi</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>
