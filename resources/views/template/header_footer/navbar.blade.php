<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">Tani Go Green</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @if(isset($loggedAs))
          @if ($loggedAs == 'petani')
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a href="/daftar-produk">
                <button class="btn btn2" type="submit"><h5>Product Saya</h5></button>
              </a>
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

          @elseif ($loggedAs == 'swalayan')
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a href="/daftar-kesepakatan">
                <button class="btn btn2" type="button"><h5>Kesepakatan Saya</h5></button>
              </a>
              <a href="/profile">
                <button class="btn btn1" type="button">
                  <img src = "img/user.png" alt="user">
                </button>
              </a>
              <a href="/logout">
                <button class="btn btn3" type="button"><h5>Logout</h5></button>
              </a>
            </div>
          </div>
          @endif
        @else
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a href="/login">
                        <div class="btn btn2" type="submit">Masuk</div>
                    </a>
                    <a href="/daftar">
                        <button class="btn btn1" type="submit">Daftar</button>
                    </a>
                </div>
            </div>

        @endif
      </div>
    </nav>


    