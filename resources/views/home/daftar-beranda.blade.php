<div class="homeContent">
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="wrap-input d-flex justify-content-end">
                    <input class="cari" type="text" name="cari" placeholder="cari">
                    <div class="search-icon">
                        <button class="btn" type="submit">
                            <img src = "img/loupe.svg" alt="icon">
                        </button>
                    </div>
                </form>
            </div>
        </div>
@if ($loggedAs == 'petani')
        <div class="market">
          <div class="row">
            <div class="col">
              <h2 >Swalayan sekitar anda</h2>
            </div>
          </div>
          <div class="row">
          @foreach ($datas[0] as $data)
            <div class="col">
                <a href="#">
                    <button class="btn btn-market" type="submit"> 
                    <div class="market-col">
                        <img src ="img/mangga.jpg" alt="IMG">
                        <h3>{{$data->nama}}</h3>
                        <h4>{{$data->lokasi_kabupaten}},{{$data->lokasi_provinsi}}</h4>
                    </div>
                    </button>
                </a>
            </div>
            @endforeach
          <hr>
        </div> 

        <div class="market">
          <div class="row">
          @foreach ($datas[1] as $data)
            <div class="col">
                <a href="#">
                    <button class="btn btn-market" type="submit"> 
                    <div class="market-col">
                        <img src ="img/mangga.jpg" alt="IMG">
                        <h3>{{$data->nama}}</h3>
                        <h4>{{$data->lokasi_kabupaten}},{{$data->lokasi_provinsi}}</h4>
                    </div>
                    </button>
                </a>
            </div>
            @endforeach
          </div>
          <div class="row">
            <div class="col">
              <div class="more-btn">
                <a href="#">
                  <button class="btn" type="submit">Lebih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
        
@elseif ($loggedAs == 'swalayan')
        <div class="product">
            <div class="row">
                <div class="col">
                    <h2 >Petani Sekitar Anda</h2>
                </div>
            </div>

        <div class="row">
            @foreach ($datas[0] as $data)
            <div class="col">
                <a href="/detail-produk/{{$data->id}}">
                    <button class="btn btn-product" type="submit">               
                        <div class="product-col">
                            <img src ="img/mangga.jpg" alt="IMG">
                            <h3>{{$data->nama_produk}}</h3>
                            <h5>Buah</h5>
                            <h5 class="rightHeading  d-flex justify-content-end">Bogor,Jawa Barat</h5>
                            <h5 class="rightHeading  d-flex justify-content-end">Kadaluarsa : 12 hari</h5>
                            <h5>Mulai dari</h5>
                            <h4>Rp. {{$data->harga_produk}}</h4>
                        </div>
                    </button>
                </a>
            </div>
            @endforeach
            <hr>
        </div> 
        
        <!-- product2 -->
        
        <div class="product">
        <div class="row">
            @foreach ($datas[1] as $data)
            <div class="col">
                <a href="/detail-produk/{{$data->id}}">
                    <button class="btn btn-product" type="submit">               
                        <div class="product-col">
                            <img src ="img/mangga.jpg" alt="IMG">
                            <h3>{{$data->nama_produk}}</h3>
                            <h5>Buah</h5>
                            <h5 class="rightHeading  d-flex justify-content-end">{{$data->lokasi_kabupaten}}, {{$data->lokasi_provinsi}}</h5>
                            <h5 class="rightHeading  d-flex justify-content-end">Kadaluarsa : {{$data->waktu_kadaluarsa}} hari</h5>
                            <h5>Mulai dari</h5>
                            <h4>Rp. {{$data->harga_produk}}</h4>
                        </div>
                    </button>
                </a>
            </div>
            @endforeach
        </div> 
          <div class="row">
            <div class="col">
              <div class="more-btn">
                <a href="#">
                  <button class="btn" type="submit">Lebih</button>
                </a>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
    </div>
@else
<!--Buah dan sayur-->

              <div class="product">
                <div class="row">
                    <div class="col">
                        <h2>Buah dan Sayur</h2>
                    </div>
                </div>
                <div class="row">
                  @foreach ($datas['produk'][0] as $data)
                    <div class="col">
                    <div class="product-col">
                            <img src ="img/mangga.jpg" alt="IMG">
                            <h3>{{$data->nama_produk}}</h3>
                            <h5>Buah</h5>
                            <h5 class="rightHeading  d-flex justify-content-end">{{$data->lokasi_kabupaten}}, {{$data->lokasi_provinsi}}</h5>
                            <h5 class="rightHeading  d-flex justify-content-end">Kadaluarsa : {{$data->waktu_kadaluarsa}} hari</h5>
                            <h5>Mulai dari</h5>
                            <h4>Rp. {{$data->harga_produk}}</h4>
                        </div>
                    </div>
                  @endforeach
                </div>
                <div class="row">
                    <div class="col">
                        <div class="more-btn">
                            <a href="#">
                                <button class="btn" type="submit">Lebih</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- swalayan -->

            <div class="market">
                <div class="row">
                    <div class="col">
                        <h2>Swalayan</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($datas['swalayan'][0] as $data)
                    <div class="col">
                        <div class="market-col">
                            <img src="img/mangga.jpg" alt="IMG">
                            <h3>{{$data->nama}}</h3>
                            <h4>{{$data->lokasi_kabupaten}}, {{$data->lokasi_provinsi}}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col">
                        <div class="more-btn">
                            <a href="#">
                                <button class="btn" type="submit">Lebih</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
@endif
    </div>
</div>