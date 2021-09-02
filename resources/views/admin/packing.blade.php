
@extends("admin.layout")

@section("body")
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pesanan Yang Siap di Packing</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">31/8/2021</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="timeline">
              <div>
                <div class="timeline-item">
                    <span class="time" style="font-size: 15px"><i class="fas fa-clock"></i> 12:05</span>
                    <div class="timeline-header">
                        <span class="right badge badge-warning" style="font-size: 16px">COD</span>
                        <span class="right badge badge-warning" style="font-size: 16px">Tranfer</span>
                    </div>
                    @php
                        $produk = ['Bakso Ikan', 'Fiesta chicken Nugget', 'Kulit Kebab'];
                        $harga = ['20.000', '30.000', '12.000'];
                        $jumlah = ['2', '3', '2'];
                        $total_harga = ['40.000', '90.000', '24.000'];
                        $status_pesanan = "menunggu konfirmasi";
                    // status_pesanan = ['menunggu konfirmasi', 'packaging', 'telah diantarakan']
                    @endphp
                    <div class="timeline-body row">
                    <div class="col-8">
                        <table class="table_pesanan">
                        <thead class="border_table">
                            <tr class="border_table">
                            <th class="border_table" scope="col">Produk</th>
                            <th class="border_table" scope="col">Jumlah</th>
                            <th class="border_table" scope="col">Harga satuan</th>
                            <th class="border_table" scope="col">total harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border_table">
                                <td class="border_table">{{$produk[0]}}</td>
                                <td class="border_table">{{$jumlah[0]}}</td>
                                <td class="border_table">{{$harga[0]}}</td>
                                <td class="border_table">{{$total_harga[0]}}</td>
                            </tr>
                            @for ($i=0; $i<count($produk)-1; $i++)
                            <tr>
                                <td class="border_table">{{$produk[$i+1]}}</td>
                                <td class="border_table">{{$jumlah[$i+1]}}</td>
                                <td class="border_table">{{$harga[$i+1]}}</td>
                                <td class="border_table">{{$total_harga[$i+1]}}</td>
                            </tr>
                            @endfor
                            <tr style="font-weight: 700">
                            </tr>
                        </tbody>
                        </table>
                        <p style="padding-top: 20px; padding-left: 20px; padding-right: 20px"><b>*Note:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nulla accusantium placeat, in facilis cumque ducimus ex eos corporis dolore nostrum voluptatem soluta asperiores veritatis illum officiis temporibus saepe qui!</p>
                    </div>
                    <div class="col-4">
                        <p style="font-weight: 700; margin-left: 10px; color: red">Waktu Konfirmasi : 13.00 Wita</p>
                        <table style="width: 100%" class="table">
                            <tr>
                                <td style="width: 22%">Pemesan</td>
                                <td style="width: 1%">:</td>
                                <td>Iqbal</td>
                            </tr>
                            <tr>
                                <td>Penerima</td>
                                <td>:</td>
                                <td>Iqbal</td>
                            </tr>
                            <tr>
                                <td>alamat</td>
                                <td>:</td>
                                <td>Jln. peunjidi, Lrg. 2, No.3, Kec. Ulujadi, Kel. kabonena (Rp. 13.000)</td>
                            </tr>
                        </table>
                        <hr>
                    </div>
                    </div>
                    <div class="timeline-footer">
                        <div class="text-right">
                            <h3 style="color: #ec1f25">Total Pesanan : Rp. 87.000</h3>
                            <a class="btn btn-primary btn-sm" style="color: white">Antar Pesanan</a>
                            <a class="btn btn-success btn-sm" style="color: white">Hubungi Pembeli</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
            <div class="timeline">
                <div>
                  <div class="timeline-item">
                      <span class="time" style="font-size: 15px"><i class="fas fa-clock"></i> 12:05</span>
                      <div class="timeline-header">
                          <span class="right badge badge-warning" style="font-size: 16px">COD</span>
                          <span class="right badge badge-warning" style="font-size: 16px">Tranfer</span>
                      </div>
                      @php
                          $produk = ['Bakso Ikan', 'Fiesta chicken Nugget', 'Kulit Kebab'];
                          $harga = ['20.000', '30.000', '12.000'];
                          $jumlah = ['2', '3', '2'];
                          $total_harga = ['40.000', '90.000', '24.000'];
                          $status_pesanan = "menunggu konfirmasi";
                      // status_pesanan = ['menunggu konfirmasi', 'packaging', 'telah diantarakan']
                      @endphp
                      <div class="timeline-body row">
                      <div class="col-8">
                          <table class="table_pesanan">
                          <thead class="border_table">
                              <tr class="border_table">
                              <th class="border_table" scope="col">Produk</th>
                              <th class="border_table" scope="col">Jumlah</th>
                              <th class="border_table" scope="col">Harga satuan</th>
                              <th class="border_table" scope="col">total harga</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr class="border_table">
                                  <td class="border_table">{{$produk[0]}}</td>
                                  <td class="border_table">{{$jumlah[0]}}</td>
                                  <td class="border_table">{{$harga[0]}}</td>
                                  <td class="border_table">{{$total_harga[0]}}</td>
                              </tr>
                              @for ($i=0; $i<count($produk)-1; $i++)
                              <tr>
                                  <td class="border_table">{{$produk[$i+1]}}</td>
                                  <td class="border_table">{{$jumlah[$i+1]}}</td>
                                  <td class="border_table">{{$harga[$i+1]}}</td>
                                  <td class="border_table">{{$total_harga[$i+1]}}</td>
                              </tr>
                              @endfor
                              <tr style="font-weight: 700">
                              </tr>
                          </tbody>
                          </table>
                          <p style="padding-top: 20px; padding-left: 20px; padding-right: 20px"><b>*Note:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nulla accusantium placeat, in facilis cumque ducimus ex eos corporis dolore nostrum voluptatem soluta asperiores veritatis illum officiis temporibus saepe qui!</p>
                      </div>
                      <div class="col-4">
                          <p style="font-weight: 700; margin-left: 10px; color: red">Waktu Konfirmasi : 13.00 Wita</p>
                          <table style="width: 100%" class="table">
                              <tr>
                                  <td style="width: 22%">Pemesan</td>
                                  <td style="width: 1%">:</td>
                                  <td>Iqbal</td>
                              </tr>
                              <tr>
                                  <td>Penerima</td>
                                  <td>:</td>
                                  <td>Iqbal</td>
                              </tr>
                              <tr>
                                  <td>alamat</td>
                                  <td>:</td>
                                  <td>Jln. peunjidi, Lrg. 2, No.3, Kec. Ulujadi, Kel. kabonena (Rp. 13.000)</td>
                              </tr>
                          </table>
                          <hr>
                      </div>
                      </div>
                      <div class="timeline-footer">
                          <div class="text-right">
                              <h3 style="color: #ec1f25">Total Pesanan : Rp. 87.000</h3>
                              <a class="btn btn-primary btn-sm" style="color: white">Antar Pesanan</a>
                              <a class="btn btn-success btn-sm" style="color: white">Hubungi Pembeli</a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="timeline">
                <div>
                  <div class="timeline-item">
                      <span class="time" style="font-size: 15px"><i class="fas fa-clock"></i> 12:05</span>
                      <div class="timeline-header">
                          <span class="right badge badge-warning" style="font-size: 16px">COD</span>
                          <span class="right badge badge-warning" style="font-size: 16px">Tranfer</span>
                      </div>
                      @php
                          $produk = ['Bakso Ikan', 'Fiesta chicken Nugget', 'Kulit Kebab'];
                          $harga = ['20.000', '30.000', '12.000'];
                          $jumlah = ['2', '3', '2'];
                          $total_harga = ['40.000', '90.000', '24.000'];
                          $status_pesanan = "menunggu konfirmasi";
                      // status_pesanan = ['menunggu konfirmasi', 'packaging', 'telah diantarakan']
                      @endphp
                      <div class="timeline-body row">
                      <div class="col-8">
                          <table class="table_pesanan">
                          <thead class="border_table">
                              <tr class="border_table">
                              <th class="border_table" scope="col">Produk</th>
                              <th class="border_table" scope="col">Jumlah</th>
                              <th class="border_table" scope="col">Harga satuan</th>
                              <th class="border_table" scope="col">total harga</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr class="border_table">
                                  <td class="border_table">{{$produk[0]}}</td>
                                  <td class="border_table">{{$jumlah[0]}}</td>
                                  <td class="border_table">{{$harga[0]}}</td>
                                  <td class="border_table">{{$total_harga[0]}}</td>
                              </tr>
                              @for ($i=0; $i<count($produk)-1; $i++)
                              <tr>
                                  <td class="border_table">{{$produk[$i+1]}}</td>
                                  <td class="border_table">{{$jumlah[$i+1]}}</td>
                                  <td class="border_table">{{$harga[$i+1]}}</td>
                                  <td class="border_table">{{$total_harga[$i+1]}}</td>
                              </tr>
                              @endfor
                              <tr style="font-weight: 700">
                              </tr>
                          </tbody>
                          </table>
                          <p style="padding-top: 20px; padding-left: 20px; padding-right: 20px"><b>*Note:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nulla accusantium placeat, in facilis cumque ducimus ex eos corporis dolore nostrum voluptatem soluta asperiores veritatis illum officiis temporibus saepe qui!</p>
                      </div>
                      <div class="col-4">
                          <p style="font-weight: 700; margin-left: 10px; color: red">Waktu Konfirmasi : 13.00 Wita</p>
                          <table style="width: 100%" class="table">
                              <tr>
                                  <td style="width: 22%">Pemesan</td>
                                  <td style="width: 1%">:</td>
                                  <td>Iqbal</td>
                              </tr>
                              <tr>
                                  <td>Penerima</td>
                                  <td>:</td>
                                  <td>Iqbal</td>
                              </tr>
                              <tr>
                                  <td>alamat</td>
                                  <td>:</td>
                                  <td>Jln. peunjidi, Lrg. 2, No.3, Kec. Ulujadi, Kel. kabonena (Rp. 13.000)</td>
                              </tr>
                          </table>
                          <hr>
                      </div>
                      </div>
                      <div class="timeline-footer">
                          <div class="text-right">
                              <h3 style="color: #ec1f25">Total Pesanan : Rp. 87.000</h3>
                              <a class="btn btn-primary btn-sm" style="color: white">Antar Pesanan</a>
                              <a class="btn btn-success btn-sm" style="color: white">Hubungi Pembeli</a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
</div>

@endsection